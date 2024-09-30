<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Number;
use App\Models\NumberHistory;
use App\Services\VendorsAPIService;
use Illuminate\Http\Request;

class VoiceNumbersController extends Controller
{
    public function index(Request $request, VendorsAPIService $vendors)
    {
        $countries = Country::all();

        if ($request->billing_type) {
        }

        if ($request->capability) {
        }

        if ($request->no_legal) {
        }

        if ($request->toll_free) {
        }

        $numbers = $vendors->vendor('DIDX')->get_numbers(
            $request->country,
            $request->prefix
        );
        // $numbers = $vendors->vendor('DIDX')->get_numbers('7');

        $test = (object) [
            'payment_methods' => [
                (object) [
                    'id' => 'adfwqewredt4',
                    'brand' => 'visa',
                    'last_digits' => '4242',
                    'expiry_month' => '12',
                    'expiry_year' => '2025',
                    'updated_at' => now(),
                ],
            ],
        ];

        return view('voice-numbers.index', [
            'countries' => $countries,
            'numbers' => $numbers,
            'user' => $test,
        ]);
    }

    public function handle_purchase(Request $request)
    {
        dd($request->all());
    }

    public function my_numbers()
    {
        $user = auth()->user();

        $numbers = NumberHistory::where('user_id', $user->id)
            ->whereIn('activity', ['purchased', 'release_requested'])
            ->with(['number'])
            ->orderBy('created_at', 'desc')
            ->paginate();

        return view('my-numbers.index', [
            'numbers' => $numbers,
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
