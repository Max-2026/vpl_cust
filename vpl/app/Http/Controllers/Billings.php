<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Billings extends Controller
{
    public function accountstatment(){
        return view('customer_panel.billings.accountstatment');
    }


    public function changecreditcard(){
        return view('customer_panel.billings.creditcardproccess');
    }


    public function addtalktime(){
        return view('customer_panel.billings.addtalktime');
    }

    public function addfunds(){
        return view('customer_panel.billings.addfunds');
    }


    public function mastertalktime(){
        return view('customer_panel.billings.mastertalktime');
    }

    
}
