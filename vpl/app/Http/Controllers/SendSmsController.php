<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendSmsController extends Controller
{
    public function send_sms()
    {
        $user = Auth::user();
        return view('customer_panel.advance_feature.sendsms',
        [
            'user' => $user
        ]);
    }
}
