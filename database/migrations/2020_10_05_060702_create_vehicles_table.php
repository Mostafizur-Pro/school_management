<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehicle_number')->unique();
            $table->string('vehicle_model')->unique();
            $table->string('seat_capacity')->nullable();
            $table->string('vehicle_year_made')->nullable();
            $table->string('driver_name');
            $table->string('driver_license')->unique();
            $table->string('driver_contact')->unique();
            $table->string('description')->nullable();
            $table->integer('route_id');
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
        Schema::dropIfExists('vehicles');
    }
}
