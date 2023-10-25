<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lavel extends Model
{
    protected $fillable = [
        'lavel_name','teacher_id',
    ];

    public function teacher()
        {
           return $this->belongsTo('App\Teacher');
        }
    public function sections()
        {
           return $this->hasMany('App\Section');
        }

}
