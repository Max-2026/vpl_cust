<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use \App\Models\Number;
use \App\Models\User;

class NumberHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'number_id',
        'user_id',
        'is_purchased',
        'is_released',
        'is_reserved',
        'setup_charges',
        'monthly_charges',
        'per_mintue_charges',
        'per_sms_charges',
        'minutes_consumed',
        'prorated_billing'
    ];

    public function number(): BelongsTo
    {
        return $this->belongsTo(Number::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
