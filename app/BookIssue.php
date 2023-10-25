<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model
{
    

    protected $fillable = [
            'student_id',
            'book_id',
            'qty',
            'issue_date',
            'return_date',
            'returned',
            'status',
    ];

            
}
