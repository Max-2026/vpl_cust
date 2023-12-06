<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mynumbers extends Controller
{
    public function Myfaxes()
    {
        return view('customer_panel.my_number.my_faxes');
    }

    public function viewallmynumber()
    {
        return view('customer_panel.my_number.view_all_my_number');
    }

    public function changeforwarding()
    {
        return view('customer_panel.my_number.change_call_forwarding');
    }
    
    public function number_in_my_account()
    {
        return view(
            'customer_panel.numbers_in_my_account.numbers_in_my_account'
        );
    }

    public function call_log()
    {
        return view('customer_panel.my_number.call_log');
    }
    
    public function pakage_plan()
    {
        return view('customer_panel.my_number.PackageSelectpaln');
    }
    
    public function palndetail()
    {
        return view('customer_panel.my_number.plan_detail');
    }
}
