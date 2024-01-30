<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


use App\Models\User;

class Cart extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $filable = [
        'user_id',
        'number',
        'area',
        'country',
        'billing_type',
        'step_cost',
        'monthly_charges',
        'annual_charges',
        'monthly_plan',
        'plan_step',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
