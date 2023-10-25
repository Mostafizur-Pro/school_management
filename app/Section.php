<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'section_name','class_id','teacher_id',
    ];

    public function teacher()
        {
           return $this->belongsTo('App\Teacher');
        }
    public function laveldfgdg()
        {
           return $this->belongsTo('App\Lavel');
        }
}
