<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmisRequesttotransportofficersLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmis_request_to_transport_officers_logs', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('plantrip_triprequest_log_id')->unsigned()->index()->nullable();
            $table->foreign('plantrip_triprequest_log_id')->references('id')->on('plantrip_triprequest_logs')->onDelete('no action');

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
