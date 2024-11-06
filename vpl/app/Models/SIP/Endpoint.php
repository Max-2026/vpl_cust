<?php

namespace App\Models\SIP;

use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    protected $connection = 'sip';

    protected $table = 'ps_endpoints';

    public $timestamps = false;
}
