<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    
    protected $fillable = [
        'student_id', 'class_id', 'section_id','invoice_of_month','admission_fee','session_charge','tution_fee','transport_fee','examination_fee','re_admission_fees','board_fees','transfer_testimonial_fees','excersise_fees','previuse_due','discount_waver','vat','due_amount','total_amount','paid_date','status'
    ];

    public function lavel()
    {
        return $this->belongsTo('App\Lavel','class_id')->select('lavel_name');
    }
    public function section()
    {
        return $this->belongsTo('App\Section','section_id')->select('section_name');
    }
    

}
