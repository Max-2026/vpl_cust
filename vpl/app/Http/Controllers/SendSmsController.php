<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendSmsController extends Controller
{
    public function send_sms()
    {
        return view('customer_panel.advance_feature.sendsms');
    }
}
