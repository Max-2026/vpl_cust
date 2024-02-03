<?php

namespace App\Http\Controllers;
require_once('../vendor/autoload.php');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use \Stripe\Stripe;


use App\Models\User;


class SubscribeController extends Controller
{
   public function index()
    {
        $user = Auth::user();


        return view('subscribe',['intent' => $user->createSetupIntent(),
    ]);
    }

    public function single_charge(Request $request)
    {
        $amount = $request->amount;
        $amount = $amount * 100;
        $paymentMethod = $request->payment_method; 
        $user = Auth::user();
        $user->createOrGetStripeCustomer();
        $paymentMethod = $user->addPaymentMethod($paymentMethod);

        $user->charge($amount, $paymentMethod->id , [
            'return_url' => route('subscribe'),
        ]);

        return to_route('subscribe');
    }
}