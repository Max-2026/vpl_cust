<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Smsinbox extends Controller
{
    public function smsinbox()
    {
        return view('customer_panel.advance_feature.smsinbox');
    }
}
