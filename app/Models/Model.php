<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as ElequentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Model extends ElequentModel
{
    //
    use HasFactory;
    protected $fillable = ['name', 'maker_id'];
    public $timestamps = false;
    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
