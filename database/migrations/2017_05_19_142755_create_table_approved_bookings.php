<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApprovedBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approved_bookings', function (Blueprint $table) {
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
            $table->foreign('room_id')->references('id')->on('register_hostel_rooms');
            $table->foreign('hostel_id')->references('id')->on('register_hostels');
            $table->foreign('landlord_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('booked_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approved_bookings');
    }
}
