<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'air_conditioning',
    'abs',
    'bluethooth_connectivity',
    'climate_control',
    'cruise_controll',
    'gps_navigation',
    'heater_control',
    'leather_seats',
    'power_door_looks',
    'power_windows',
    'rear_parking_sensor',
    'remote_start',
])]
class CarFeatures extends Model
{
    protected $primaryKey = 'car_id';
}
