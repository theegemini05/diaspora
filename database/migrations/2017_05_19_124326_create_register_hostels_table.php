<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_hostels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('landlord_id')->unsigned();
            $table->string('hname');
            $table->string('hregion');
            $table->string('address');
            $table->string('pics');
            $table->double('lat',20,10);
            $table->double('lng',20,10);
            $table->timestamps();

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
        Schema::dropIfExists('register_hostels');
    }
}
