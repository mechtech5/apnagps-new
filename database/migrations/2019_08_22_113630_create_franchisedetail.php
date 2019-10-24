<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisedetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisedetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name',20);
            $table->string('email',20);
            $table->string('age',11);
            $table->string('contact_number',20);
            $table->string('landline',15);
            $table->string('total_cash',20);
            $table->string('free_cash',11);
            $table->string('cash_from',11);
            $table->string('total_store');
            $table->date('startdate');
            $table->string('borrower_name',20);
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
        Schema::dropIfExists('franchisedetail');
    }
}
