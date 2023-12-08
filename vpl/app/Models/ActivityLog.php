<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;

class ActivityLog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'description',
        'request_route',
        'request_method',
        'user_ip',
        'country_name',
        'country_code',
        'region_name',
        'region_code',
        'city_name',
        'latitude',
        'longitude'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
