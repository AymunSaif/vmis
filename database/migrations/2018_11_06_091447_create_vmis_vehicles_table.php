<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmis_vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('no_plate')->nullable();
            $table->integer('vmis_vehicletype_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_vehicletype_id')->references('id')->on('vmis_vehicletypes')->onDelete('cascade');
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    
        Schema::create('vmis_vehicledetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vmis_vehicle_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_vehicle_id')  ->references('id')->on('vmis_vehicles')->onDelete('cascade');
            $table->integer('milage')->nullable();
            $table->integer('kilometers')->nullable();
            $table->integer('liters')->nullable();
            $table->string('oilchange')->nullable();
            $table->string('tunning')->nullable();
            $table->string('brakeshoe')->nullable();
            $table->string('tyres')->nullable();
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
        Schema::dropIfExists('vmis_vehicles');
    }
}
