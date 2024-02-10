<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCreditCard;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class ProfileController extends Controller
{



    public function index()
    {
        $current_user = Auth::user();
        $user_credit_cards = UserCreditCard::where('user_id', $current_user->id)->get();
         $credit_cards = UserCreditCard::where('user_id', $user_id)->first();



        return view('customer_panel.profile.basic_info', [
            'current_user' => $current_user,
            'user_credit_cards' => $user_credit_cards ,
            'credit_cards' => $credit_cards,
        ]);
    }
    

    public function update_profile_details(Request $request)
    {
        // dd($request->all());
        $current_user = Auth::user();
        $user = User::find($current_user->id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/basic_info');

    }

    public function contact_info()
    {
        return view('customer_panel.profile.contact_info');
    }

    public function credit_card_details()
    {

        $user = Auth::user();
        $user_id = Auth::user()->id;
        $user_credit_cards = UserCreditCard::where('user_id', $user_id)->get();
        $credit_cards = UserCreditCard::where('user_id', $user_id)->where('is_primary', 1)->first();


        // $credit_cards = UserCreditCard::where('user_id', $user_id)->first();
        return view('customer_panel.profile.credit_info',
            [
                'credit_cards' => $credit_cards,
                'user_credit_cards' => $user_credit_cards,
                'user' => $user
            ]
        );
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
