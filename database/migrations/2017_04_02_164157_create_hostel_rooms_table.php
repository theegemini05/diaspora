<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hostel_id')->unsigned()->index();
            $table->integer('rno');
            $table->string('pics');
            $table->boolean('status')->default(0);
            $table->timestamps();

            $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostel_rooms');
    }
}
