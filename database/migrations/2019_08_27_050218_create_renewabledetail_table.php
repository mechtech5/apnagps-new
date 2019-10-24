<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenewabledetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renewabledetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cust_name',20);
            $table->string('contact_no',20);
            $table->date('ondate',20);
            $table->string('devicename',30);
            $table->text('address');
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
        Schema::dropIfExists('renewabledetail');
    }
}
