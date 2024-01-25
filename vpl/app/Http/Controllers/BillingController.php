<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Number;
use App\Models\User;



class BillingController extends Controller
{
    public function account_statement()
    {
        $user = Auth::user();
        $numbers = Number::where('id', $user->id)->get();

        return view('customer_panel.billings.accountstatment',
        [
            'user' => $user,
            'numbers' => $numbers
        ]);
    }

    public function credit_card()
    {
        return view('customer_panel.billings.creditcardproccess');
    }

    public function add_talktime()
    {
        $user = Auth::user();
        $numbers = Number::where('id', $user->id)->get();
        return view('customer_panel.billings.addtalktime'
        ,[
            'user' => $user,
            'numbers' => $numbers
        ]);
    }

    public function add_funds()
    {
        $user = Auth::user();
        return view('customer_panel.billings.addfunds',
        [
            'user' => $user
        ]);
    }

    public function talktime()
    {
        $user = Auth::user();
        $numbers = Number::where('id', $user->id)->get();
        return view('customer_panel.billings.mastertalktime',
        [
             'numbers' => $numbers
        ]);
    }
    
}
