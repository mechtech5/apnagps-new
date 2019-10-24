<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_all', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cust_name', 20);
            $table->string('contact_no',20);
            $table->string('need_devices',20);
            $table->string('fencing',10);
            $table->string('assign_route',10);
            $table->string('cut_off',10);
            $table->string('mgs_alert',10);
            $table->string('email_alert',10);
            $table->string('over_speed',10);
            $table->string('theft',10);
            $table->string('event',10);
            $table->string('fulesensor',10);
            $table->string('datatime',10);
            $table->string('total',10);
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
        Schema::dropIfExists('service_request');
    }
}
