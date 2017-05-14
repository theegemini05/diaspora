<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApproveBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approve_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('pnumber');
            $table->integer('landlord_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->integer('hostel_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('book_id')->unsigned();
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('room_id')->references('id')->on('hostel_rooms');
            $table->foreign('hostel_id')->references('id')->on('hostels');
            $table->foreign('landlord_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('book_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approve_bookings');
    }
}
