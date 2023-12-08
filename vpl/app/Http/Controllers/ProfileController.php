<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function basic_info()
    {
        return view('customer_panel.profile.basic_info');
    }

    public function contact_info()
    {
        return view('customer_panel.profile.contact_info');
    }

    public function credit_card_details()
    {
        return view('customer_panel.profile.credit_info');
    }

    public function general_setting()
    {
        return view('customer_panel.profile.general_setting');
    }

    public function sms_setting()
    {
        return view('customer_panel.profile.smssetting');
    }

    public function verified_number()
    {
        return view('customer_panel.profile.verifiednumber');
    }
}
