<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'car_id',
    'image_path'
])]
class CarImages extends Model
{
    //
}
