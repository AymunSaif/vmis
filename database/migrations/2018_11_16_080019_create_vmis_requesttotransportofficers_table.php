<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisRequesttotransportofficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmis_request_to_transport_officers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vmis_driver_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_driver_id')->references('id')->on('vmis_drivers')->onDelete('no action');

            $table->integer('vmis_vehicle_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_vehicle_id')->references('id')->on('vmis_vehicles')->onDelete('no action');

            $table->integer('plantrip_triprequest_id')->unsigned()->index()->nullable();
            $table->foreign('plantrip_triprequest_id')->references('id')->on('plantrip_triprequests')->onDelete('no action');

            $table->integer('approvedby_user_id')->unsigned()->index()->nullable();
            $table->foreign('approvedby_user_id')->references('id')->on('users')->onDelete('no action');

            $table->boolean('status')->default(0)->nullable();

            $table->integer('approval_status')->nullable();
            
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
        Schema::dropIfExists('vmis_requesttotransportofficers');
    }
}
