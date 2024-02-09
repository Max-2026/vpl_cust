<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCreditCard;

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

        $user = Auth::user();
        $user_id = Auth::user()->id;
        $credit_cards = UserCreditCard::where('user_id', $user_id)->first();
        return view('customer_panel.profile.credit_info',
            [
                'credit_cards' => $credit_cards,
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

    public function card_detail_submitted()
    {
        return redirect('/credit_card_details');
    }

}
