<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id')->unique();
            $table->integer('hostel_id');
            $table->integer('room_no');
            $table->string('joining_date');
            $table->string('leave_date')->nullable();
            $table->decimal('monthly_fee');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('h_members');
    }
}
