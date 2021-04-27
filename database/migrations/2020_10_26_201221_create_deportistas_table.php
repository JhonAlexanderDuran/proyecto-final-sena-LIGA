<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportistas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('codigo');
            $table->string('name');
            $table->bigInteger('document');
            $table->string('phonenumber');
            $table->string('rh');
            $table->string('manager');         
            $table->string('eps');
            $table->string('category');
            $table->string('photo');
            $table->string('state');
            $table->integer('club_id')->unsigned();
            $table->foreign('club_id')->references('id')->on('clubs');
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
        Schema::dropIfExists('deportistas');
    }
}
