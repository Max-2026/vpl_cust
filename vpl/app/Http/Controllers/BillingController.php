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
        $numbers = Number::where('id', $user->id)->get();
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
            $customer = Customer::retrieve($customerId);
    
            $paymentIntent = PaymentIntent::create([
                'amount' => $newAmount,
                'currency' => 'usd', 
                'customer' => $customerId,
                'payment_method' => $cardId,
                'confirm' => true, 
                'return_url' => 'http://127.0.0.1:8000/add_funds',
            ]);
    
            // If payment is successful, you can retrieve the PaymentIntent status
            if ($paymentIntent->status == 'succeeded') {
                // Payment succeeded
                // You can perform further actions here if needed
                return "Payment succeeded!";
            } else {
                // Payment failed
                return "Payment failed!";
            }
        } catch (\Stripe\Exception\CardException $e) {
            // Since it's a card error, you can retrieve the error message
            return $e->getError()->message;
        } catch (Exception $e) {
            // Other exceptions, like API errors, can be handled here
            return $e->getMessage();
        }
    }
    
}
