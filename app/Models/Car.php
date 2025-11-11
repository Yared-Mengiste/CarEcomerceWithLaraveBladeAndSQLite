<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "id",
"maker_id",
"model_id",
"year",
"price",
"vin",
"mileage",
"car_type_id",
"fuel_type_id",
//"user_id",
"city_id",
"address",
"phone",
"description",
"published_at",
    ];
    public function carType():BelongsTo
    {
        return $this->belongsTo(CarType::class, 'car_type_id', 'id');
    }
    public function fuelType():BelongsTo
    {
        return $this->belongsTo(FuelType::class, 'fuel_type_id', 'id');

    }
    public function city():BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
    public function maker():BelongsTo
    {
        return $this->belongsTo(User::class, 'maker_id', 'id');
    }

    public function model():BelongsTo
    {
        return $this->belongsTo(Car::class, 'model_id', 'id');
    }
    public function owner():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function features(): HasOne
    {
        return $this->hasOne(CarFeatures::class, 'car_id', 'id');
    }
    public function primaryImage(): HasOne
    {
        return $this->hasOne(CarImage::class, 'car_id')->oldestOfMany('position');
    }
    public function images(): HasMany
    {
       return $this->hasMany(CarImage::class, 'car_id', 'id');
    }
    public function favouredUsers():BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favourite_cars', 'car_id', 'user_id');
    }
}
