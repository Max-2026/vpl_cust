<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Number;
use App\Models\NumberHistory;
use App\Models\UserPaymentMethod;
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

        return view('voice-numbers.index', [
            'countries' => $countries,
            'numbers' => $numbers,
            'user' => auth()->user(),
        ]);
    }

    public function handle_purchase(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'new_payment_method' => 'nullable|required_without:payment_method_id|json',
            'payment_method_id' => 'nullable|required_without:new_payment_method',
        ]);
        $user = auth()->user();
        // Store third party numbers in your DB or in cache when user searches and get try them from DB then cache
        // And create an entry in DB if does not exists otherwise we can't record history
        $number = Number::where(
            'number',
            'like',
            "%$request->phone_number%"
        )->first();
        $card_data = json_decode($request->new_payment_method);
        dd($number);

        if ($card_data !== null) {
            $card = new UserPaymentMethod;
            $card->id = $card_data->id;
            $card->last_digits = $card_data->last_digits;
            $card->expiry_month = $card_data->expiry_month;
            $card->expiry_year = $card_data->expiry_year;
            $card->card_holder_name = $card_data->card_holder_name;
            $card->brand = $card_data->brand;

            $user->payment_methods()->save($card);

            // Process payment with payment_method_id
        } else {
            // Process payment with payment_method_id
        }

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

        // Create invoice
    }

    public function my_numbers()
    {
        $user = auth()->user();

        $history = NumberHistory::select(
            'number_id',
            'activity',
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
