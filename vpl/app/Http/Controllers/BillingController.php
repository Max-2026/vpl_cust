<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Number;
use App\Models\User;
use App\Models\CardMethod;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\PaymentIntent;



class BillingController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $credit_card = CardMethod::where('user_id', $user->id)->where('is_primary', 1)->first();
        return view('customer_panel.billings.addfunds',
        [
            'user' => $user,
            'credit_card' => $credit_card
        ]);
    }

    public function account_statement()
    {
        $user = Auth::user();
        $numbers = Number::where('id', $user->id)->get();

        return view('customer_panel.billings.accountstatment',
        [
            'user' => $user,
            'numbers' => $numbers
        ]);
    }

    public function credit_card()
    {
        return view('customer_panel.billings.creditcardproccess');
    }

    public function add_talktime()
    {
        $user = Auth::user();
        $numbers = Number::where('user_id', $user->id)->get();
        return view('customer_panel.billings.addtalktime'
        ,[
            'user' => $user,
            'numbers' => $numbers
        ]);
    }

    public function add_funds()
    {
        $user = Auth::user();
        return view('customer_panel.billings.addfunds',
        [
            'user' => $user
        ]);
    }

    public function talktime()
    {
        $user = Auth::user();
        $numbers = Number::where('id', $user->id)->get();
        return view('customer_panel.billings.mastertalktime',
        [
             'numbers' => $numbers
        ]);
    }

    public function charge(Request $request){

        Stripe::setApiKey(config('services.stripe.secret'));
    
        $customerId = $request->stripe_id;
        $cardId = $request->card_id;
        $amount = $request->amount;
        $newAmount = $amount * 100;
    
        try {
            // Check if $cardId is null, then redirect to credit_card_details route
            if ($cardId == null) {
                return redirect()->route('addcreditcard')->with('success', 'Payment successful!')->with('paymentSuccess', false);

            }
    
            $customer = Customer::retrieve($customerId);
    
            $paymentIntent = PaymentIntent::create([
                'amount' => $newAmount,
                'currency' => 'usd', 
                'customer' => $customerId,
                'payment_method' => $cardId,
                'confirm' => true, 
                'return_url' => 'http://127.0.0.1:8000/add_funds',
            ]);
    
            if ($paymentIntent->status == 'succeeded') {
                $user = Auth::user();
                $user->balance += $amount;
                $user->save();
            
                return redirect()->route('payment_Successful')->with('success', 'Payment successful!')->with('paymentSuccess', true);
            } else {
                return "Payment failed!";
            }
        } catch (\Stripe\Exception\CardException $e) {
            return $e->getError()->message;
        } catch (Exception $e) {
            // Other exceptions, like API errors, can be handled here
            return $e->getMessage();
        }
    }
    

    
    public function payment_Successful()
    {
        return view('payment_Successful');
    }

    public function master_talktime_Successful()
    {
        return view('master_talktime_Successful');
    }

    public function individual_talktime_Successful()
    {
        return view('individual_talktime_Successful');
    }

    public function addcreditcard()
    {
        return view('addcreditcard');
    }

    public function add_talktime_submit(Request $request)
    {

        $user = Auth::user();
        $amountToAdd = $request->input('add_talk_time');
        $talkTimeType = $request->input('talk_time_type');
        $selectedNumberId = $request->input('number_id');
    
        $selectedNumber = Number::findOrFail($selectedNumberId);
    
        if ($talkTimeType === "Master Talk Time") {
            // Check if the user has sufficient balance
            if ($user->balance >= $amountToAdd) {
                // Deduct the amount from the user's balance
                $user->balance -= $amountToAdd;
                // Add the amount to the user's talktime
                $user->talktime += $amountToAdd;
                $user->save();

                return redirect()->route('master_talktime_Successful')->with('success', 'Payment successful!')->with('paymentSuccess', true);

            } else {
                return redirect()->route('master_talktime_Successful')->with('success', 'Payment successful!')->with('paymentSuccess', false);


            }
        } else {
            if ($user->balance >= $amountToAdd) {
                $user->balance -= $amountToAdd;
                $user->save();
    
                $selectedNumber->talktime += $amountToAdd;
                $selectedNumber->save();

                return redirect()->route('individual_talktime_Successful')->with('success', 'Payment successful!')->with('paymentSuccess', true);

    
            } else {
                return redirect()->route('individual_talktime_Successful')->with('success', 'Payment successful!')->with('paymentSuccess', false);

            }
        }
    }
    
    
}
