<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number',
        'received_number',
        'content',
        'date_time',
        'charges',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
