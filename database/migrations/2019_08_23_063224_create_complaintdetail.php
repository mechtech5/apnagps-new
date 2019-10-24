<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaintdetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customername',20);
            $table->string('vehicle_no',15);
            $table->string('reg_email',20);
            $table->string('mobile_no',15);
            $table->text('address');
            $table->text('description');
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
        Schema::dropIfExists('complaintdetail');
    }
}
