<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Number;
use App\Models\User;

class AdvanceFeaturesController extends Controller
{
    public function voice_messages()
    {
        return view('customer_panel.advance_feature.voicemessages');
    }

    public function voice_mail_setting()
    {
        $user = Auth::user();
        $numbers = Number::where('user_id', $user->id)->get();
        return view('customer_panel.advance_feature.voicemailsetting'
        ,[
            'user' => $user,
            'numbers' => $numbers
        ]);
    }

    public function call_recordings()
    {
        return view('customer_panel.advance_feature.callrecording');
    }


    public function ivr_setting()
    {
        return view('customer_panel.advance_feature.IVR_manager');
    }


    public function virtual_pbx_setting()
    {
        return view('customer_panel.advance_feature.virtualpbx');
    }

    public function pbx_setting()
    {
        return view('customer_panel.advance_feature.PBXsetting');
    }

    public function upload_pbx()
    {
        return view('customer_panel.advance_feature.UploadPBXIVR');
    }
}
