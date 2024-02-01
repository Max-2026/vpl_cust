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
use App\Models\UserPreference;
use App\Models\UserCreditCard;
use App\Models\UserDocument;
use App\Models\NumberHistory;
use App\Models\Invoice;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'company_name',
        'company_email',
        'company_phone',
        'avatar',
        'password',
        'provider_id',
        'balance',
        'talktime'
    ];

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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_number_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function address(): HasOne
    {
        return $this->hasOne(UserAddress::class);
    }

    public function preference(): HasOne
    {
        return $this->hasOne(UserPreference::class);
    }

    public function credit_card(): HasOne
    {
        return $this->hasOne(UserCreditCard::class);
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
