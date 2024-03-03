<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;

class UserAddress extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belnogsTo(User::class);
    }
}
