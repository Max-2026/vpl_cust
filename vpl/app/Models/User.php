<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'stripe_customer_id',
    ];

    protected $hidden = [
        'password',
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

    public function payment_methods(): HasMany
    {
        return $this->hasMany(UserPaymentMethod::class);
    }

    public function numbers_history(): HasMany
    {
        return $this->hasMany(NumberHistory::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function numbers(): HasMany
    {
        return $this->hasMany(Number::class, 'current_user_id');
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function cart(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(NumberCallLog::class);
    }
}
