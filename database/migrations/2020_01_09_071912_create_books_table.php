<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book_title')->unique();
            $table->string('book_edition')->nullable();
            $table->string('book_isbn_number')->nullable();
            $table->string('book_publisher')->nullable();
            $table->string('book_author')->nullable();
            $table->string('book_qty')->nullable();
            $table->string('book_rack_id');
            $table->string('book_rack_row')->nullable();
            $table->string('book_rack_coloum')->nullable();
            $table->string('book_post_date')->nullable();
            $table->boolean('book_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
