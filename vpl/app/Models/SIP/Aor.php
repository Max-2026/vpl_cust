<?php

namespace App\Models\SIP;

use Illuminate\Database\Eloquent\Model;

class Aor extends Model
{
    protected $connection = 'sip';

    protected $table = 'ps_aors';

    public $timestamps = false;
}
