<?php

namespace App\Services;

use App\Models\User;
use App\Models\SIP\Auth;
use App\Models\SIP\Aor;
use App\Models\SIP\Endpoint;

class SipService
{
    public function get_sip_endpoints()
    {
        return Endpoint::all();
    }

    public function get_endpoint(User $user)
    {
        return Auth::find($user->id);
    }

    public function create_sip_endpoint(
        User $user,
        string $password,
        bool $is_webrtc = false
    )
    {
        $endpoint = new Endpoint;
        $endpoint->id = $user->id;
        $endpoint->auth = $user->id;
        $endpoint->aors = $user->id;
        $endpoint->disallow = 'all';
        $endpoint->context = 'user-dialplan';

        if ($is_webrtc) {
            $endpoint->dtls_auto_generate_cert = 'yes';
            $endpoint->webrtc = 'yes';
            $endpoint->allow = 'opus,ulaw';
        } else {
            $endpoint->transport = 'transport-udp';
            $endpoint->allow = 'ulaw';
            $endpoint->direct_media = 'no';
            $endpoint->rtp_symmetric = 'yes';
            $endpoint->force_rport = 'yes';
            $endpoint->rewrite_contact = 'yes';
            $endpoint->ice_support = 'yes';
        }
        $endpoint->save();

        $aor = new Aor;
        $aor->id = $user->id;
        $aor->max_contacts = 1;
        $aor->remove_existing = 'yes';
        $aor->save();

        $auth = new Auth;
        $auth->id = $user->id;
        $auth->auth_type = 'userpass';
        $auth->username = $user->id;
        $auth->password = $password;
        $auth->save();
    }

    public function delete_sip_endpoint(User $user)
    {
        $endpoint = Endpoint::find($user->id)->delete();
        $aor = Aor::find($user->id)->delete();
        $auth = Auth::find($user->id)->delete();
    }
}