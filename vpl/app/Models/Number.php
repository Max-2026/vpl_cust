<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


use App\Models\User;
use App\Models\DidAreas;
use App\Models\Number;
use App\Models\didcountries;
use App\Models\NumberHistory;

class Number extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'user_id',
        'vendor_id',
        'rate_center',
        'number',
        'is_active',
        'is_reserved',
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

    public function area(): BelongsTo
    {
        return $this->belongsTo(DidAreas::class, 'area_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    public function history(): HasMany
    {
        return $this->hasMany(NumberHistory::class);
    }

    protected function getCountryAttribute()
    {
        return $this->area->country ?? null;
    }

    protected function getFullNumberAttribute()
    {
        return "{$this->area->country->code}-{$this->area->code}-{$this->number}";
    }
}
