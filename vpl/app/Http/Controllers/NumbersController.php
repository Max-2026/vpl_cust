<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

use \App\Models\Number;
use App\Models\Country;
use App\Models\User;



class NumbersController extends Controller
{
    public function faxes()
    {
        return view('customer_panel.my_number.my_faxes');
    }

    public function view_all_numbers()
    {
        $user = Auth::user();
        $numbers = Number::where('user_id', $user->id)->get();
        // dd($numbers);

        return view('customer_panel.my_number.view_all_my_number',[
            'numbers' => $numbers
        ]);
    }

    public function call_forwarding()
    {

        $countries = Country::all();
        return view('customer_panel.my_number.change_call_forwarding',[
        'countries' => $countries
    ]);

    }
    
    public function my_numbers($id)
    {
        $number_details = Number::where('id' , $id)->first();
        return view(
            'customer_panel.numbers_in_my_account.numbers_in_my_account',
            [
                'number_details' => $number_details
            ]
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

    public function call_forwading_setting($id)
    {
        $user = Auth::user();
        $countries = Country::all();
        $number_details = Number::where('id' , $id)->first();
        return view(
            'customer_panel.numbers_in_my_account.call_forwading_manager',
            [
                'user' => $user,
                'countries' => $countries,
                'number_details' => $number_details
               
            ]
        );
        
    }
    public function monthly_recurring_charges()
    {
        return view(
            'customer_panel.numbers_in_my_account.monthly_recuring_charges'
        );
    }
}
