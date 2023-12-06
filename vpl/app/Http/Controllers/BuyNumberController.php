<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyNumberController extends Controller
{
    public function buy_number()
    {
        return view('customer_panel.Buy_Numbers.buy_number');
    }

    public function buy_golden_number()
    {
        return view('customer_panel.Buy_Numbers.golden_numbers');
    }
}
