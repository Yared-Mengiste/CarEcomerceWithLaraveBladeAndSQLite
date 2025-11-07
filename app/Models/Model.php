<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as ElequentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends ElequentModel
{
    //
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'maker_id'];
    public $timestamps = false;

}
