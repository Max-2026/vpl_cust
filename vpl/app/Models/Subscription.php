<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

use \App\Models\User;


class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'stripe_id',
        'stripe_status',
        'stripe_price',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
