<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('document')->unique();
            $table->string('phonenumber');
            $table->string('adress');
            $table->string('manager');
            $table->string('rh');
            $table->string('eps');
            $table->date('birthdate');
            $table->string('category');
            $table->string('photo')->nullable();
            $table->string('observation');
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
        Schema::dropIfExists('escuelas');
    }
}
