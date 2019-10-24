<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("billing_firstName",30);
            $table->string("billing_lastName",20);
            $table->string("billing_username",30);
            $table->string("billing_email",25);
            $table->text("billing_address1");
            $table->text("billing_address2");
            $table->string("billing_state",20);
            $table->string("billing_district",20);
            $table->string("billing_Pincode",10);
            $table->string("shipping_customername",30)->nullable();
            $table->string("shipping_lastname",20)->nullable();
            $table->string("shipping_contact",20)->nullable();
            $table->string("shipping_state",20)->nullable();
            $table->string("shipping_district",20)->nullable();
            $table->string("shipping_Pincode",10)->nullable();
            $table->text("shipping_address1")->nullable();
            $table->text("shipping_address2")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
