<?php

namespace App\Models\SIP;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $connection = 'sip';
    protected $table = 'ps_auths';

    public $timestamps = false;
}
