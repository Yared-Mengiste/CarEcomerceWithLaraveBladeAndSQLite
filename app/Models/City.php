<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name', 'state_id'];
    public $timestamps = false;

    public function state():BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class, 'city_id', 'id');
    }

}
