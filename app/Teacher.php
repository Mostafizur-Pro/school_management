<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
                            'teachers_name',
                            'national_idcard',
                            'teachers_mobile',
                            'teachers_email',
                            'responsibility',
                            'teachers_gender',
                            'teachers_date_of_birth',
                            'teachers_date_of_joining',
                            'teachers_marital_status',
                            'teachers_current_address',
                            'teachers_permanent_address',
                            'teachers_qualification',
                            'teachers_work_experience',
                            'teachers_basic_salary',
                            'teachers_contract_type',
                            'account_title',
                            'account_number',
                            'bank_name',
                            'branch_name',
                            'teachers_facebook',
                            'teachers_twitter',
                            'teachers_linkedin',
                            'teachers_instagram',
                            'teachers_image',
                            'teachers_resume',
                            'teachers_joining_letter',
                            'publication_status',
                        ];

                        public function lavels()
                        {
                            return $this->hasMany('App\Lavel');
                        }
                        
                        public function sections()
                        {
                            return $this->hasMany('App\Section');
                        }
}
