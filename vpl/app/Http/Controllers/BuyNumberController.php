<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

class BuyNumberController extends Controller
{
    public function buy_number()
    {
        $countries = Country::all();

        return view('customer_panel.Buy_Numbers.buy_number', [
            'countries' => $countries
        ]);
    }

    public function buy_golden_number()
    {
        return view('customer_panel.Buy_Numbers.golden_numbers');
    }
}
