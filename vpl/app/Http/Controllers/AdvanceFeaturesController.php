<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceFeaturesController extends Controller
{
    public function voice_messages()
    {
        return view('customer_panel.advance_feature.voicemessages');
    }

    public function voice_mail_setting()
    {
        return view('customer_panel.advance_feature.voicemailsetting');
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
