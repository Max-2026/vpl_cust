<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function account_statement()
    {
        return view('customer_panel.billings.accountstatment');
    }

    public function credit_card()
    {
        return view('customer_panel.billings.creditcardproccess');
    }

    public function add_talktime()
    {
        return view('customer_panel.billings.addtalktime');
    }

    public function add_funds()
    {
        return view('customer_panel.billings.addfunds');
    }

    public function talktime()
    {
        return view('customer_panel.billings.mastertalktime');
    }
    
}
