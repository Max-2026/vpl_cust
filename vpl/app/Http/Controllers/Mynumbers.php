<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mynumbers extends Controller
{
    public function Myfaxes(){
        return view('customer_panel.my_number.my_fexes');
    }


    public function viewallmynumber(){
        return view('customer_panel.my_number.view_all_my_number');
    }

    public function changeforwarding(){
        return view('customer_panel.my_number.change_call_forwarding');
    }
}
