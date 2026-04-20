<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable([
    'maker_id',
    'model_id',
    'year',
    'price',
    'mileage',
    'vin',
    'user_id',
    'car_type_id',
    'fuel_type_id',
    'city_type_id',
    'address',
    'phone',
    'description',
    'published_at',
])]
class Car extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime',
        'year' => 'integer',
        'price' => 'integer',
        'mileage' => 'integer',
    ];
}
