<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactedLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacted_landlords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('pnumber');
            $table->string('message');
            $table->integer('user_id')->unsigned();
            $table->integer('hostel_id')->unsigned();
            $table->integer('landlord_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('hostel_id')->references('id')->on('register_hostels');
            $table->foreign('landlord_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacted_landlords');
    }
}
