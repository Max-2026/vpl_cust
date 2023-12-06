<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsInboxController extends Controller
{
    public function sms_inbox()
    {
        return view('customer_panel.advance_feature.smsinbox');
    }
}
