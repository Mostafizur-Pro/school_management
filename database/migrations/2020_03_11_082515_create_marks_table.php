<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('exam_id');
            $table->integer('class_id');
            $table->integer('section_id');
            $table->integer('student_id');

            $table->double('bang_1st_cq')->nullable();
            $table->double('bang_1st_mcq')->nullable();
            $table->double('bang_1st_total')->nullable();

            $table->double('bang_2nd_cq')->nullable();
            $table->double('bang_2nd_mcq')->nullable();
            $table->double('bang_2nd_total')->nullable();

            $table->double('eng_1st_cq')->nullable();
            $table->double('eng_1st_mcq')->nullable();
            $table->double('eng_1st_total')->nullable();

            $table->double('eng_2nd_cq')->nullable();
            $table->double('eng_2nd_mcq')->nullable();
            $table->double('eng_2nd_total')->nullable();

            $table->double('math_cq')->nullable();
            $table->double('math_mcq')->nullable();
            $table->double('math_total')->nullable();

            $table->double('religion_cq')->nullable();
            $table->double('religion_mcq')->nullable();
            $table->double('religion_total')->nullable();

            $table->double('ict_cq')->nullable();
            $table->double('ict_mcq')->nullable();
            $table->double('ict_practical')->nullable();
            $table->double('ict_total')->nullable();

            $table->double('homs_cq')->nullable();
            $table->double('homs_mcq')->nullable();
            $table->double('homs_practical')->nullable();
            $table->double('homs_total')->nullable();

            $table->double('gk_cq')->nullable();
            $table->double('gk_mcq')->nullable();
            $table->double('gk_total')->nullable();

            $table->double('phed_cq')->nullable();
            $table->double('phed_mcq')->nullable();
            $table->double('phed_practical')->nullable();
            $table->double('phed_total')->nullable();
            
            $table->double('bgs_cq')->nullable();
            $table->double('bgs_mcq')->nullable();
            $table->double('bgs_total')->nullable();

            $table->double('science_cq')->nullable();
            $table->double('science_mcq')->nullable();
            $table->double('science_practical')->nullable();
            $table->double('science_total')->nullable();

            $table->double('acc_cq')->nullable();
            $table->double('acc_mcq')->nullable();
            $table->double('acc_total')->nullable();
            
            $table->double('bent_cq')->nullable();
            $table->double('bent_mcq')->nullable();
            $table->double('bent_total')->nullable();

            $table->double('fin_cq')->nullable();
            $table->double('fin_mcq')->nullable();
            $table->double('fin_total')->nullable();

            $table->double('bio_cq')->nullable();
            $table->double('bio_mcq')->nullable();
            $table->double('bio_practical')->nullable();
            $table->double('bio_total')->nullable();

            $table->double('hmath_cq')->nullable();
            $table->double('hmath_mcq')->nullable();
            $table->double('hmath_practical')->nullable();
            $table->double('hmath_total')->nullable();

            
            $table->double('chemestry_cq')->nullable();
            $table->double('chemestry_mcq')->nullable();
            $table->double('chemestry_practical')->nullable();
            $table->double('chemestry_total')->nullable();

            $table->double('phy_cq')->nullable();
            $table->double('phy_mcq')->nullable();
            $table->double('phy_practical')->nullable();
            $table->double('phy_total')->nullable();

            $table->double('total_mark')->nullable();

            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('marks');
    }
}
