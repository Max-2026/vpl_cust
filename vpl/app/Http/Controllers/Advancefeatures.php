<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Advancefeatures extends Controller
{
    public function voicemessages(){
        return view('customer_panel.advance_feature.voicemessages');
    }

    public function voicemail(){
        return view('customer_panel.advance_feature.voicemailsetting');
    }

    public function callrecording(){
        return view('customer_panel.advance_feature.callrecording');
    }


    public function ivrmanager(){
        return view('customer_panel.advance_feature.IVR_manager');
    }


    public function virtualpbx(){
        return view('customer_panel.advance_feature.virtualpbx');
    }

    public function pbxsetting(){
        return view('customer_panel.advance_feature.PBXsetting');
    }

    public function uploadpbx(){
        return view('customer_panel.advance_feature.UploadPBXIVR');
    }



    

    
}
