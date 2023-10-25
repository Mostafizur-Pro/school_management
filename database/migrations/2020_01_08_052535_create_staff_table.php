<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('staff_full_name');
            $table->integer('designation_id');
            $table->integer('department_id');
            $table->string('staff_father_name')->nullable();
            $table->string('staff_mother_name')->nullable();
            $table->string('staff_email_address')->unique();
            $table->string('staff_mobile')->unique();
            $table->string('staff_gender');
            $table->string('staff_date_of_birth');
            $table->string('staff_date_of_joining');
            $table->string('staff_marital_status')->nullable();
            $table->text('staff_current_address')->nullable();
            $table->text('staff_permanent_address')->nullable();
            $table->text('staff_qualification')->nullable();
            $table->text('staff_work_experience')->nullable();
            $table->decimal('staff_basic_salary', 8, 2)->nullable();
            $table->string('staff_work_shift')->nullable();
            $table->string('staff_contract_type')->nullable();
            $table->string('staff_account_title')->nullable();
            $table->string('staff_bank_account_number')->nullable();
            $table->string('staff_bank_name')->nullable();
            $table->string('staff_bank_branch_name')->nullable();
            $table->string('staff_social_facebook')->nullable();
            $table->string('staff_social_twitter')->nullable();
            $table->string('staff_social_linkedin')->nullable();
            $table->string('staff_social_instagram')->nullable();
            $table->string('staff_image')->nullable();
            $table->string('staff_resume')->nullable();
            $table->string('staff_joining_letter')->nullable();
            $table->string('staff_other_document')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
