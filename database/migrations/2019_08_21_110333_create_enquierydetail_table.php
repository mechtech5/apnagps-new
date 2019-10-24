<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquierydetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquierydetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enq_name',20);
            $table->string('enq_email');
            $table->string('enq_subject',50);
            $table->string('enq_contact',20);
            $table->text('enq_detail');
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
        Schema::dropIfExists('enquierydetail');
    }
}
