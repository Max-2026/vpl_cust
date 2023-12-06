<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumbersController extends Controller
{
    public function faxes()
    {
        return view('customer_panel.my_number.my_faxes');
    }

    public function view_all_numbers()
    {
        return view('customer_panel.my_number.view_all_my_number');
    }

    public function call_forwarding()
    {
        return view('customer_panel.my_number.change_call_forwarding');
    }
    
    public function my_numbers()
    {
        return view(
            'customer_panel.numbers_in_my_account.numbers_in_my_account'
        );
    }

    public function call_logs()
    {
        return view('customer_panel.my_number.call_log');
    }
    
    public function package()
    {
        return view('customer_panel.my_number.PackageSelectpaln');
    }
    
    public function plan_details()
    {
        return view('customer_panel.my_number.plan_detail');
    }

    public function call_forwading_setting()
    {
        return view(
            'customer_panel.numbers_in_my_account.call_forwading_manager'
        );
    }
    public function monthly_recurring_charges()
    {
        return view(
            'customer_panel.numbers_in_my_account.monthly_recuring_charges'
        );
    }
}
