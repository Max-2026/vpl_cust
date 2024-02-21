<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Number;
use App\Models\didcountries;


class DidAreas extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'StateCode',
        'country_id'
        ];

    public function numbers(): HasMany
    {
        return $this->hasMany(Number::class, 'area_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(didcountries::class, 'country_id');
    }
}
