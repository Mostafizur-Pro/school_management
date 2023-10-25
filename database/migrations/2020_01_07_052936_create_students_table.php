<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('roll')->unique();
            $table->integer('class_id');
            $table->integer('section_id');
            $table->integer('group_id')->nullable();
            $table->string('student_name');
            $table->string('student_mobile')->unique();
            $table->string('student_email')->nullable();
            $table->string('student_gender');
            $table->string('student_date_of_birth')->nullable();
            $table->string('student_religion')->nullable();
            $table->string('student_blood_group')->nullable();
            $table->longText('student_present_address')->nullable();
            $table->longText('student_parmanent_address')->nullable();
            $table->string('session');
            $table->string('fathers_name')->nullable();
            $table->string('fathers_mobile')->nullable();
            $table->string('fathers_occupation')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('mothers_mobile')->nullable();
            $table->string('mothers_occupation')->nullable();
            $table->string('student_image')->default('images/student/default.png');
            $table->string('fathers_image')->default('images/student/default.png');
            $table->string('mothers_image')->default('images/student/default.png');
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
        Schema::dropIfExists('students');
    }
}
