<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use \App\Models\Country;
use \App\Models\User;

class Number extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country_id',
        'user_id',
        'vendor_id',
        'area_name',
        'area_code',
        'rate_center',
        'number',
        'is_active',
        'setup_charges',
        'monthly_charges',
        'per_mintue_charges',
        'per_sms_charges',
        'forwarding_url',
        'channels',
        'talktime',
        'minutes_consumed',
        'free_incoming_minutes',
        'free_incoming_sms',
        'legal_requirement',
        'voice_capablity',
        'sms_inbound_capablity',
        'sms_outgoing_capablity'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    protected function getCountryNameAttribute()
    {
        return $this->country->name;
    }

    protected function getCountryCodeAttribute()
    {
        return $this->country->code;
    }

    protected function getCountryCodeA2Attribute()
    {
        return $this->country->code_a2;
    }
}
