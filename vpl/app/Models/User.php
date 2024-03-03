<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;

use App\Models\UserAddress;
use App\Models\UserDocument;
use App\Models\NumberHistory;
use App\Models\Invoice;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , Billable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'provider_id',
        'remember_token',
    ];

    public function address(): HasOne
    {
        return $this->hasOne(UserAddress::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(UserDocument::class);
    }

    public function numbers_history(): HasMany
    {
        return $this->hasMany(NumberHistory::class);
    }

    public function numbers(): HasMany
    {
        return $this->hasMany(Number::class);
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function cart(): HasMany
    {
        return $this->hasMany(Cart::class);
    }
}
