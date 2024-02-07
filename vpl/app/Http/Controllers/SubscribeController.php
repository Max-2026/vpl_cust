<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;

class SubscribeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('subscribe', ['intent' => $user->createSetupIntent()]);
    }

    public function single_charge(Request $request)
    {

        $user_id = Auth::user()->id;
        $stripe_id = Auth::user()->stripe_id;
        $amount = $request->amount * 100;
        $paymentMethod = $request->payment_method; 
        $user = Auth::user();
        $user->createOrGetStripeCustomer();
        $paymentMethod = $user->addPaymentMethod($paymentMethod);

        $user->charge($amount, $paymentMethod->id, [
            'return_url' => route('subscribe'),
        ]);
 
        // Insert payment data into the database
        $subscription = new Subscription();
        $subscription->user_id = $user_id;
        $subscription->type = 'single_charge';
        $subscription->stripe_id = $stripe_id;
        $subscription->stripe_status = 'active';
        $subscription->stripe_price = $amount; 
        $subscription->save();
        return redirect()->route('subscribe');
    }
}
