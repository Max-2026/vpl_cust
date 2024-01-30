<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{

    public function index()
    {
        $user = Auth::user()->id;
        $data = Cart::where('user_id', $user)->get();
        return view('customer_panel.my_cart/my_cart', 
        ['data' => $data]);
    }


    public function cart(Request $request)
    {

        $carts = Cart::all();
        $user = Auth::user()->id;
        $data = Cart::where('user_id', $user)->get();

    $selectedNumbersJson = $request->input('selectedNumbers');

    $selectedNumbers = json_decode($selectedNumbersJson, true); 


    if (is_array($selectedNumbers)) {

        foreach ($selectedNumbers as $value){
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->number = $value['number'];
            $cart->area = $value['area'];
            $cart->country = $value['country'];
            $cart->billing_type = $value['billing_type'];
            $cart->setup_cost = $value['setupCost'];
            $cart->monthly_charges = 0;
            $cart->annual_charges = 0;
            $cart->monthly_plan = 0;
            $cart->plan_setup = 0;
            $cart->save();
        }
    } else {
        echo 'Selected numbers data is not an array.';
    }


    return redirect('/my_cart')->with('data', $data);
    }
}

