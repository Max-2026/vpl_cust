<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Number;
use App\Models\DidAreas;


class didcountries extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'countrycode',
        'IsUSA',
        'GotOne',
        'details'
        ];

    public function numbers(): HasMany
    {
        return $this->hasMany(Number::class);
    }

    public function areas(): HasMany
    {
        return $this->hasMany(DidAreas::class, 'country_id');
    }
}
