<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    use HasFactory;

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
}
