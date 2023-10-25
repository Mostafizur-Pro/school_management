<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->integer('class_id');
            $table->integer('section_id');
            $table->string('invoice_of_month');
            $table->decimal('admission_fee', 8, 2)->nullable();
            $table->decimal('session_charge', 8, 2)->nullable();
            $table->decimal('tution_fee', 8, 2)->nullable();
            $table->decimal('transport_fee', 8, 2)->nullable();
            $table->decimal('examination_fee', 8, 2)->nullable();
            $table->decimal('re_admission_fees', 8, 2)->nullable();
            $table->decimal('board_fees', 8, 2)->nullable();
            $table->decimal('transfer_testimonial_fees', 8, 2)->nullable();
            $table->decimal('excersise_fees', 8, 2)->nullable();
            $table->decimal('previuse_due', 8, 2)->nullable();
            $table->decimal('discount_waver', 8, 2)->nullable();
            $table->decimal('vat', 8, 2)->nullable();
            $table->decimal('due_amount', 8, 2)->nullable();
            $table->decimal('total_amount', 8, 2)->nullable();
            $table->string('paid_date')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
