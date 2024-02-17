<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Stripe\Stripe;

use Stripe\PaymentIntent;
use Stripe\Customer;
use Stripe\Error\Card;
use Stripe\Exception\CardException;
use App\Models\UserCreditCard;
use App\Models\User;
use Stripe\SetupIntent;
use Stripe\Charge;
use Stripe\StripeClient;

class SubscribeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $credit_cards = UserCreditCard::where('user_id', $user->id)->where('is_primary', 1)->first();
        // Set your Stripe API key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create a SetupIntent
        $intent = SetupIntent::create();

        return view('customer_panel.billings.addfunds', compact('intent', 'user', 'credit_cards'));
    }

   
    public function single_charge(Request $request)
    {
        dd($request->all());
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $charge = Charge::create([
                'amount' => $request->amount * 100, 
                'currency' => 'usd',
                'source' => $request->stripeToken, // Stripe.js token
                'description' => 'Add funds to account for order ID: ' . $request->order_id,
                // Additional parameters if needed
            ]);

            // Payment succeeded, send a success response
            return response()->json(['success' => true, 'message' => 'Payment successfully processed']);
        } catch (CardException $e) {
            // If a card error occurs, handle it and send a response
            return response()->json(['success' => false, 'message' => 'Payment failed: ' . $e->getMessage()]);
        } catch (\Exception $e) {
            // If any other error occurs, handle it and send a response
            return response()->json(['success' => false, 'message' => 'Payment failed: ' . $e->getMessage()]);
        }
    }

    public function text(){
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

        try {
            // Create a PaymentIntent with amount and currency
            $paymentIntent = $stripe->paymentIntents->create([
                'amount' => 500,
                'currency' => 'usd',
                // In the latest version of the API, specifying the `automatic_payment_methods` parameter is optional because Stripe enables its functionality by default.
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            dd($paymentIntent->client_secret);

        } catch (\Exception $error) {
            dd($error);
        }

    }

    
}

