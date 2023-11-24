<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycart extends Controller
{
    public function mycart(){
        return view('customer_panel.my_cart.my_cart');
    }
}
