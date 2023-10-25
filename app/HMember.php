<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HMember extends Model
{
    protected $fillable =[
            'student_id',
            'hostel_id',
            'room_no',
            'joining_date',
            'monthly_fee',
            'leave_date',
];
}
