<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('teachers_name');
            $table->string('national_idcard')->unique();
            $table->string('teachers_mobile')->unique();
            $table->string('teachers_email')->unique();

            $table->string('responsibility');
            $table->string('teachers_gender');
            $table->string('teachers_date_of_birth');
            $table->string('teachers_date_of_joining')->nullable();
            $table->string('teachers_marital_status')->nullable();
            $table->text('teachers_current_address')->nullable();
            $table->text('teachers_permanent_address')->nullable();
            
            
            $table->text('teachers_qualification')->nullable();
            $table->text('teachers_work_experience')->nullable();

            $table->decimal('teachers_basic_salary', 8, 2)->nullable();
            $table->string('teachers_contract_type')->nullable();

            $table->string('account_title')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();

            $table->string('teachers_facebook')->nullable();
            $table->string('teachers_twitter')->nullable();
            $table->string('teachers_linkedin')->nullable();
            $table->string('teachers_instagram')->nullable();

            $table->string('teachers_image')->nullable();
            $table->string('teachers_resume')->nullable();
            $table->string('teachers_joining_letter')->nullable();

            
            $table->boolean('publication_status')->default(true);

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
        Schema::dropIfExists('teachers');
    }
}
