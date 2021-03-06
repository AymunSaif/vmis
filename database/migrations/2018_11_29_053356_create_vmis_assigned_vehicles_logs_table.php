<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisAssignedVehiclesLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmis_assigned_vehicles_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vmis_request_to_transport_officers_log_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_request_to_transport_officers_log_id')->references('id')->on('vmis_request_to_transport_officers_logs')->onDelete('no action');

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
