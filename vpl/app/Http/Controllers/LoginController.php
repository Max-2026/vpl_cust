<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Auth\Events\Registered;

use App\Models\User;
use Stripe\Stripe;
use Stripe\Customer;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_post(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (User::where('email', $request->email)->count() === 0) {
            return redirect()->back()->withErrors([
                'email' => 'Account does not exist with this email!'
            ])->withInput();
        }

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return redirect()->back()->withErrors([
            'password' => 'Invalid password!'
        ])->withInput();
    }

    public function signup()
    {
        return view('signup');
    }

    public function signup_post(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_phone' => $request->company_phone,
            'password' => Hash::make($request->password)
        ]);

        // Create a Stripe customer and save the Stripe customer ID to the user's record
        $this->createStripeCustomer($user);

        event(new Registered($user));
        Auth::login($user);

        return redirect()->intended();
    }

    public function redirect($provider_name)
    {
        session(['provider_name' => $provider_name]);
        return Socialite::driver($provider_name)->redirect();
    }

    public function callback()
    {
        $provider_name = session('provider_name');
        $user_data = Socialite::driver($provider_name)->user();

        $user = User::updateOrCreate(
            [
                'email' => $user_data->email,
                'provider_id' => $user_data->id
            ],
            [
                'first_name' => explode(' ', $user_data->name)[0],
                'last_name' => explode(' ', $user_data->name)[1],
                'avatar' => $user_data->avatar,
            ]
        );

        // Create a Stripe customer and save the Stripe customer ID to the user's record
        $this->createStripeCustomer($user);

        Auth::login($user);

        return redirect()->intended();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    protected function createStripeCustomer($user)
    {
        // Set up Stripe
        Stripe::setApiKey(config('services.stripe.secret'));

        // Check if the user already has a Stripe customer ID
        if (!$user->stripe_id) {
            // Create a new Stripe customer
            $customer = Customer::create([
                'email' => $user->email,
                // Add any additional customer information as needed
            ]);

            // Save the Stripe customer ID to the user's record in the database
            $user->update([
                'stripe_id' => $customer->id,
            ]);
        }
    }
}
