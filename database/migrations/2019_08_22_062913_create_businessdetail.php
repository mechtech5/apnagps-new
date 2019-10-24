<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessdetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_owner',20);
            $table->string('business_name',30);
            $table->string('contact_number',20);
            $table->string('email_id',20);
            $table->string('state',15);
            $table->string('district',25);
            $table->string('town',25);
            $table->text('address');
            $table->string('business_type',25);
            $table->text('message');
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
        Schema::dropIfExists('businessdetail');
    }
}
