<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Number extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'current_user_id',
        'number',
        'is_active',
        'setup_charges',
        'monthly_charges',
        'annual_charges',
        'per_mintue_charges',
        'per_sms_charges',
        'talktime_quota',
        'sms_quota',
        'legal_requirements',
        'voice_inbound_capable',
        'sms_inbound_capable',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'current_user_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    // public function vendor(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'vendor_id');
    // }

    public function history(): HasMany
    {
        return $this->hasMany(NumberHistory::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(NumberCallLog::class);
    }
}
