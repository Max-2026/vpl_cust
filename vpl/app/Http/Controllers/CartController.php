<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
use App\Models\NumberHistory;

class CartController extends Controller
{


    public function index()
    {
        $user = Auth::user()->id;
        $data = Cart::where('user_id', $user)->get();
        return view('customer_panel.my_cart/my_cart', 
        ['data' => $data]);
    }

    
    public function checkout(Request $request)
    {
        // Fetch cart items for the authenticated user
        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Insert cart items into the NumberHistory table
        foreach ($cartItems as $item) {
            if (is_object($item->number)) {
                $numberHistory = new NumberHistory();
                $numberHistory->number_id = $item->number_id;
                $numberHistory->user_id = $item->user_id;
                $numberHistory->is_purchased = true;
                $numberHistory->is_released = false;
                $numberHistory->is_reserved = false;
                $numberHistory->setup_charges = $item->number->setup_charges;
                $numberHistory->monthly_charges = $item->number->monthly_charges;
                $numberHistory->per_mintue_charges = $item->number->per_mintue_charges;
                $numberHistory->per_sms_charges = $item->number->per_sms_charges;
                $numberHistory->minutes_consumed = 0;
                $numberHistory->prorated_billing = 0;
                $numberHistory->save();
            }
        }

        // Clear the user's cart after checkout
        $user->cart()->delete();

        // Return a response indicating successful checkout
        return response()->json(['message' => 'Checkout successful!']);
    }
}
