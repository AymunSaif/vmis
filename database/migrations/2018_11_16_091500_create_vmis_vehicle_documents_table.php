<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisVehicleDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('vmis_vehicles_documents', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('vmis_vehicle_id')->unsigned()->index()->nullable();
        $table->foreign('vmis_vehicle_id')->references('id')->on('vmis_vehicles')->onDelete('cascade');
        $table->string('documents')->nullable();
        $table->string('v_pic')->nullable();

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
        Schema::dropIfExists('vmis_vehicle_documents');
    }
}
