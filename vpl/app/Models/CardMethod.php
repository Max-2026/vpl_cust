<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class CardMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'card_id',
        'card_type',
        'card_expires',
        'card_last_four',
        'is_primary'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
