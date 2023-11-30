<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sendsms extends Controller
{
    public function sendsms(){
        return view('customer_panel.advance_feature.sendsms');
    }
}
