<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'roll','class_id','section_id','group_id','student_name','student_mobile','student_email','student_gender','student_date_of_birth','student_religion','student_blood_group','student_present_address','student_parmanent_address','session','fathers_name','fathers_mobile','fathers_occupation','mothers_name','mothers_mobile','mothers_occupation','student_image','fathers_image','mothers_image'
    ];

    public function invoice()
    {
        return $this->hasMany('App\Invoice','student_id')->orderBy('invoice_of_month');
    }
    
    public function section()
    {
        return $this->belongsTo('App\Section','section_id');
    }
    public function lavel()
    {
        return $this->belongsTo('App\Lavel','class_id');
    }
}
