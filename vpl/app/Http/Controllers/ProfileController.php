<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\PaymentMethod;
use App\Models\CardMethod;
use Stripe\Exception\CardException;
use App\Models\User;



class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $current_user = Auth::user();
        return view('customer_panel.profile.basic_info',
        [
            'current_user' => $current_user,
            'user' => $user

        ]);
    }


    public function update_profile_details(Request $request)
    {
        $current_user = Auth::user();
        $user = User::find($current_user->id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/basic_info');

    }

    public function contact_info()
    {
        $user = Auth::user();
        return view('customer_panel.profile.contact_info',
        [
            'user' => $user
        ]);
    }

    public function credit_card_details()
    {
        try {
            $user = Auth::user();
            $active_credit_card = CardMethod::where('user_id', $user->id)->where('is_primary', 1)->first();
    
            Stripe::setApiKey(config('services.stripe.secret'));
    
            $paymentMethods = PaymentMethod::all([
                'customer' => $user->stripe_id,
                'type' => 'card',
            ]);
    
            return view('customer_panel.profile.credit_info',
             [
                'user_credit_cards' => $paymentMethods,
                'user' => $user,
                'active_credit_card' => $active_credit_card
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function general_setting()
    {
        $user = Auth::user();
        return view('customer_panel.profile.general_setting',
        [
            'user' => $user
        ]);
    }

    public function sms_setting()
    {
        $user = Auth::user();
        return view('customer_panel.profile.smssetting',
        [
            'user' => $user
        ]);
    }

    public function verified_number()
    {
        $user = Auth::user();
        return view('customer_panel.profile.verifiednumber',
        [
            'user' => $user
        ]);
    }


    public function primary_set(Request $request){

        $selectedCardId = $request->input('selected_card');
        $currentUser = Auth::user();

        $currentUser->cardpayment()->where('user_id', $currentUser->id)->update([
            'is_primary' => 0 ]);
        $currentUser->cardpayment()->where('card_id', $selectedCardId)->update([
            'is_primary' => 1 ]);

            return redirect('/credit_card_details');
    }


    public function addCard(Request $request)
    {
        // Set your stripe secret key
        Stripe::setApiKey(config('services.stripe.secret'));
    
        // Retrieve token from request
        $token = $request->stripeToken;
    
        try {
            // Retrieve current user
            $user = Auth::user();
    
            // Check if the user has a stripe_id
            if (!$user->stripe_id) {
                throw new Exception('User does not have a Stripe ID');
            }
    
            // Create a payment method with the provided token
            $paymentMethod = PaymentMethod::create([
                'type' => 'card',
                'card' => [
                    'token' => $token,
                ],
            ]);
            
            $cardMethod = new CardMethod();
            $cardMethod->user_id = $user->id;
            $cardMethod->card_id = $paymentMethod->id;
            $cardMethod->card_type = $paymentMethod->card['brand'];
            $cardMethod->exp_month = $paymentMethod->card['exp_month'];
            $cardMethod->exp_year = $paymentMethod->card['exp_year'];
            $cardMethod->card_last_four = $paymentMethod->card['last4'];
            $cardMethod->save();


    
            // Attach the payment method to the customer
            $paymentMethod->attach([
                'customer' => $user->stripe_id,
            ]);
            
            return redirect('/credit_card_details');
        } catch (CardException $e) {
            // Handle card exception (e.g., declined card)
            return view('notification.addcarderror',
            [
                'error' => $e->getMessage()
            ]);
        } catch (\Exception $e) {
            // Handle other exceptions
            return response()->json(['error 2' => $e->getMessage()], 500);
        }
    }
    



}
