<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buynumber extends Controller
{
    public function buynumber()
    {
        return view('customer_panel.Buy_Numbers.buy_number');
    }

    public function goldennumber()
    {
        return view('customer_panel.Buy_Numbers.golden_numbers');
    }
}
