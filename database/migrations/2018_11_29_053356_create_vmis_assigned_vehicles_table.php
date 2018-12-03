<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisAssignedVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmis_assigned_vehicles', function (Blueprint $table) {
            $table->increments('id');
            //foreign keys to assigned vehicle and driver table
            $table->integer('vmis_request_to_transport_officer_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_request_to_transport_officer_id')->references('id')->on('vmis_request_to_transport_officers')->onDelete('no action');

            $table->integer('vmis_vehicle_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_vehicle_id')->references('id')->on('vmis_vehicles')->onDelete('no action');
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
        Schema::dropIfExists('vmis_assigned_vehicles');
    }
}
