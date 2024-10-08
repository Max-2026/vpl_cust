<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Number;
use App\Models\NumberHistory;
use App\Models\UserPaymentMethod;
use App\Models\Invoice;
use App\Services\VendorsAPIService;
use App\Services\StripeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;

class VoiceNumbersController extends Controller
{
    public function index(Request $request, VendorsAPIService $vendors)
    {
        $countries = Cache::remember(
            'all_countries',
            now()->addDay(),
            function () {
                return Country::all();
            }
        );
        $searched_country = Cache::remember(
            'search_country_'.$request->country,
            now()->addDay(),
            function () use ($request) {
                return Country::where(
                    'code_a2',
                    $request->country ?? 'US'
                )->first();
            }
        );
        session(['searched_country' => $searched_country->toArray()]);

        if ($request->billing_type) {
        }

        if ($request->capability) {
        }

        if ($request->no_legal) {
        }

        if ($request->toll_free) {
        }

        $db_numbers = Number::select(
            'number',
            'per_mintue_charges',
            'monthly_charges',
            'setup_charges',
            'country_id'
        )
        ->whereNull('current_user_id')
        ->withWhereHas('country', function ($query) use ($searched_country) {
            $query->where('code_a2', $searched_country->code_a2);
        })
        ->when($request->prefix, function ($query, $prefix) {
            $query->where('prefix', 'like', "%$prefix%");
        })
        ->get()
        ->toArray();

        $vendor_numbers = collect($vendors->vendor('DIDX')->get_numbers(
            $searched_country->dialing_code,
            $request->prefix
        ));

        $merged_numbers = $vendor_numbers->merge($db_numbers)->toArray();
        session(['searched_data' => $merged_numbers]);

        $page = LengthAwarePaginator::resolveCurrentPage();
        $per_page = 10;
        $paginated_data = array_slice(
            $merged_numbers,
            ($page - 1) * $per_page,
            $per_page
        );
        $paginator = new LengthAwarePaginator(
            $paginated_data,
            count($merged_numbers),
            $per_page,
            $page
        );
        $numbers = $paginator->withPath(request()->fullUrl());

        return view('voice-numbers.index', [
            'countries' => $countries,
            'numbers' => $numbers,
            'user' => auth()->user(),
            'searched_country' => $searched_country,
        ]);
    }

    public function handle_purchase(
        Request $request,
        StripeService $stripe_service
    )
    {
        $request->validate([
            'phone_number' => 'required',
            'new_payment_method' => 'nullable|required_without:payment_method_id|json',
            'payment_method_id' => 'nullable|required_without:new_payment_method',
        ]);
        $user = auth()->user();
        $card_data = json_decode($request->new_payment_method);
        $searched_country = session('searched_country');
        $number = Number::where('number', $request->phone_number)->first();
        $stripe_service->create_customer($user);

        if (!$number) {
            $searched_data = session('searched_data');

            $number = current(array_filter(
                $searched_data,
                function ($row) use ($request) {
                    $row['number'] = preg_replace(
                        '/^(?!\+)(.*)/',
                        '+$1',
                        $row['number']
                    );

                    return $row['number'] == $request->phone_number;
                }
            ));
            $number['number'] = preg_replace(
                '/^(?!\+)(.*)/',
                '+$1',
                $number['number']
            );

            // Call vendor API to purchase the number

            $number = Number::updateOrCreate(
                ['number' => $number['number']],
                [
                    'country_id' => $searched_country['id'],
                    'setup_charges' => $number['setup_charges'],
                    'monthly_charges' => $number['monthly_charges'],
                    'per_minute_charges' => $number['per_minute_charges'],
                    'talktime_quota' => 10,
                    'sms_quota' => 10,
                ]
            );
        }
        $payment_intent = null;

        if ($card_data !== null) {
            $card = new UserPaymentMethod;
            $card->id = $card_data->id;
            $card->last_digits = $card_data->last_digits;
            $card->expiry_month = $card_data->expiry_month;
            $card->expiry_year = $card_data->expiry_year;
            $card->card_holder_name = $card_data->card_holder_name;
            $card->brand = $card_data->brand;

            $user->payment_methods()->save($card);

            $stripe_service->add_card(
                $card->id,
                $user->stripe_customer_id
            );

            $payment_intent = $stripe_service->charge_card(
                $card->id,
                $user->stripe_customer_id,
                $number->setup_charges + $number->monthly_charges
            );
        } else {
            $payment_intent = $stripe_service->charge_card(
                $request->payment_method_id,
                $user->stripe_customer_id,
                $number->setup_charges + $number->monthly_charges
            );
        }

        $invoice = new Invoice;
        $invoice->number_id = $number->id;
        $invoice->summary = "Number Purchased\nSetup charges: $" . number_format($number->setup_charges, 2) . "\nMonthly charges: $" . number_format($number->monthly_charges, 2);
        $invoice->amount = $number->setup_charges + $number->monthly_charges;
        $invoice->payment_reference_id = $payment_intent->id;

        $user->invoices()->save($invoice);

        $history = new NumberHistory;
        $history->number_id = $number->id;
        $history->user_id = $user->id;
        $history->forwarding_url = null;
        $history->activity = 'purchased';
        $history->setup_charges = $number->setup_charges;
        $history->monthly_charges = $number->monthly_charges;
        $history->annual_charges = $number->annual_charges;
        $history->per_mintue_charges = $number->per_mintue_charges;
        $history->per_sms_charges = $number->per_sms_charges;
        $history->billing_type = 'prorated';

        $number->history()->save($history);
        $number->current_user_id = $user->id;
        $number->save();
    }

    public function my_numbers()
    {
        $user = auth()->user();

        $history = NumberHistory::select(
            'number_id',
            'activity',
            'forwarding_url',
            \DB::raw('MAX(created_at) as latest_activity')
        )->where('user_id', $user->id)
            ->whereIn('activity', ['purchased', 'release_requested'])
            ->with('number')
            ->groupBy('number_id')
            ->orderByRaw("
                CASE 
                    WHEN activity = 'release_requested' THEN 1 
                    ELSE 2 
                END, latest_activity DESC
            ")
            ->paginate();

        return view('my-numbers.index', [
            'history' => $history,
            'user' => $user,
        ]);
    }

    public function logs($number_id)
    {
        $user = auth()->user();
        $number = Number::find($number_id);

        if (!$number) abort(404);

        $logs = $number->logs()->where('user_id', $user->id)->paginate();

        return view('my-numbers.logs', [
            'user' => $user,
            'logs' => $logs,
        ]);
    }

    public function release($number_id)
    {
        $user = auth()->user();
        $number = Number::find($number_id);
        $purchase_record = $number->get_recent_purchase($user->id);

        if (!$number) abort(404);

        if (
            $number->current_user_id !== $user->id
            || !$purchase_record
        ) abort(403);

        $history = new NumberHistory;
        $history->number_id = $number->id;
        $history->user_id = $user->id;
        $history->forwarding_url = $number->forwarding_url;
        $history->activity = 'release_requested';
        $history->setup_charges = $number->setup_charges;
        $history->monthly_charges = $number->monthly_charges;
        $history->annual_charges = $number->annual_charges;
        $history->per_mintue_charges = $number->per_mintue_charges;
        $history->per_sms_charges = $number->per_sms_charges;
        $history->billing_type = $purchase_record->billing_type;

        $number->history()->save($history);

        return redirect()->back();
    }
}
