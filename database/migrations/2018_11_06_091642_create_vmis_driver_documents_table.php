<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisDriverDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmis_driver_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vmis_driver_id')->unsigned()->index()->nullable();
            $table->foreign('vmis_driver_id')->references('id')->on('vmis_drivers')->onDelete('cascade');
            $table->string('documents')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('vmis_driver_documents');
    }
}
