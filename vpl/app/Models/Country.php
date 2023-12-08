<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use \App\Models\Number;
use \App\Models\Area;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'code_a2'
    ];

    public function numbers(): HasMany
    {
        return $this->hasMany(Number::class);
    }

    public function areas(): HasMany
    {
        return $this->hasMany(Area::class);
    }
}
