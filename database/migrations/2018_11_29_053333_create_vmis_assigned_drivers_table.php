<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisAssignedDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmis_assigned_drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_sentfurther_id')->unsigned()->index()->nullable();
            $table->foreign('request_sentfurther_id')->references('id')->on('vmis_request_to_transport_officers')->onDelete('no action');

            $table->integer('vmis_driver_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_driver_id')->references('id')->on('vmis_drivers')->onDelete('no action');
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
        Schema::dropIfExists('vmis_assigned_drivers');
    }
}
