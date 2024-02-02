<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\NumberHistory;
use App\Models\User; // Add User model namespace

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Cart::where('user_id', $user->id)->get();
        return view('customer_panel.my_cart.my_cart',
         ['data' => $data,
            'user' => $user
        ]);
    }

    public function checkout(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user
        $availableFunds = $user->balance; // Assuming the user has a field named available_funds

        // Calculate the grand total
        $grandTotal = $request->input('total');

        // Check if the available funds are sufficient
        if ($availableFunds >= $grandTotal) {
            // Proceed with checkout
            // Decode the JSON string to access the phone numbers array
            $phone_numbers = json_decode($request->phone_numbers, true);

            // Check if $phone_numbers is not null and an array
            if ($phone_numbers && is_array($phone_numbers)) {
                // Loop through the phone numbers and print their IDs
                foreach ($phone_numbers as $phone_number) {
                    $numberHistory = new NumberHistory();
                    $numberHistory->number_id = $phone_number['id'];
                    $numberHistory->user_id = $phone_number['user_id'];
                    $numberHistory->is_purchased = 0;
                    $numberHistory->is_released = 0;
                    $numberHistory->is_reserved = 0;
                    $numberHistory->setup_charges = $phone_number['setup_cost'];
                    $numberHistory->monthly_charges = $phone_number['monthly_charges'];
                    $numberHistory->per_mintue_charges = 0;
                    $numberHistory->per_sms_charges = 0;
                    $numberHistory->minutes_consumed = 0;
                    $numberHistory->prorated_billing = 0;
                    $numberHistory->save();
                }

                // Deduct the amount from the user's available funds
                $user->balance -= $grandTotal;
                $user->save();
                // Clear the user's cart after checkout
                Cart::where('user_id', $user->id)->delete();

                // Redirect the user to the cart page with a success message
                return redirect()->route('view_all_numbers')->with('success', 'Checkout successful.');
            } else {
                return redirect()->route('my_cart')->with('error', 'No phone numbers found.');
            }
        } else {
            // If available funds are insufficient, redirect back with an error message
            return redirect()->route('my_cart')->with('error', 'Insufficient funds for checkout.');
        }
    }
}
