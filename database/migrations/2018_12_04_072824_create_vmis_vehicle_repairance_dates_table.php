<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisVehicleRepairanceDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmis_vehicle_repairance_dates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vmis_vehicledetail_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_vehicledetail_id')  ->references('id')->on('vmis_vehicledetails')->onDelete('cascade');
            $table->date('last_repairdate')->nullable();
            $table->string('repair_Description')->nullable();
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
        Schema::dropIfExists('vmis_vehicle_repairance_dates');
    }
}
