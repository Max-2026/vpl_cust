<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SmsInboxController extends Controller
{
    public function sms_inbox()
    {
        $user = Auth::user();
        return view('customer_panel.advance_feature.smsinbox',
        [
            'user' => $user
        ]);
    }
}
