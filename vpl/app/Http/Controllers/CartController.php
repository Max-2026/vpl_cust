<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        // dd($request->all());
        // Retrieve the selected numbers data from the form
        $selectedNumbers = $request->input('selectedNumbers');

        // Parse the JSON data
        $selectedNumbers = json_decode($selectedNumbers);
        

        // Pass the selected numbers data to the cart view
        return view('customer_panel.my_cart/my_cart', compact('selectedNumbers'));
    }
}

