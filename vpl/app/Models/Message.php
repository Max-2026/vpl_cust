<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number_id',
        'from_number',
        'content',
        'received_at',
        'charges',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function number(): BelongsTo
    {
        return $this->belongsTo(Number::class);
    }
}
