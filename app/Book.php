<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
            'book_title','book_edition','book_isbn_number','book_publisher','book_author','book_qty','book_rack_id','book_rack_row','book_rack_coloum','book_post_date','book_status',
    ];

    
}
