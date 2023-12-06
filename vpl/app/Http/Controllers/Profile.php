<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    public function basicinfo()
    {
        return view('customer_panel.profile.basic_info');
    }

    public function contactinfo()
    {
        return view('customer_panel.profile.contact_info');
    }

    public function creditcardinfo()
    {
        return view('customer_panel.profile.credit_info');
    }

    public function generalsetting()
    {
        return view('customer_panel.profile.general_setting');
    }

    public function smssetting()
    {
        return view('customer_panel.profile.smssetting');
    }

    public function verified_number()
    {
        return view('customer_panel.profile.verifiednumber');
    }
}
