<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterHostelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_hostel_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hostel_id')->unsigned()->index();
            $table->integer('rno');
            $table->integer('capacity(persons)');
            $table->string('rent');
            $table->string('currentcapacity(persons)')->default(0);
            $table->boolean('status')->default(0);
            $table->timestamps();

            $table->foreign('hostel_id')->references('id')->on('register_hostels')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_hostel_rooms');
    }
}
