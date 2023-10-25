<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    
    protected $fillable = [
            'vehicle_number',
            'vehicle_model',
            'route_id',
            'vehicle_year_made',
            'driver_name',
            'driver_license',
            'driver_contact',
            'description',
    ];
    
}
