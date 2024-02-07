<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Cart;
use App\Models\NumberHistory;
use App\Models\Number;
use App\Models\User;
use App\Models\Country;
use App\Models\Area;


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
        // dd($request->all());
        $user = Auth::user(); 
        $availableFunds = $user->balance; 

        $grandTotal = $request->input('total');

        if ($availableFunds >= $grandTotal) {

            $phone_numbers = json_decode($request->phone_numbers, true);

            if ($phone_numbers && is_array($phone_numbers)) {
                foreach ($phone_numbers as $phone_number) {
                    $area_name = $phone_number['area'];
                    $area_match = Area::where('name', $area_name)->first();
                    // dd($area_match[0]->name);
                    $number = new Number();
                    $number->area_id = $area_match->id;
                    $number->user_id = $user->id;
                    $number->number = $phone_number['number'];
                    $number->setup_charges = $phone_number['setup_cost'];
                    $number->monthly_charges = $phone_number['monthly_charges'];
                    $number->per_mintue_charges = 0;
                    $number->per_sms_charges = 0;
                    $number->forwarding_url = '';
                    $number->save();

                }

                $user_id = Auth::user()->id;
                $numbers = Number::where('user_id', $user_id)->get(); // Retrieve numbers associated with the user
                
                foreach ($numbers as $number) {
                    $numberHistory = new NumberHistory();
                    $numberHistory->number_id = $number->id; // Insert the ID as an integer
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
            return redirect()->route('add_funds')->with('error', 'Insufficient funds for checkout.');
        }
    }
}
