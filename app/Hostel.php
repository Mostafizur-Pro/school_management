<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    protected $fillable =[
            'hostel_name',
            'type',
            'capacity',
            'address',
            'description',
            'status',
    ];
}
