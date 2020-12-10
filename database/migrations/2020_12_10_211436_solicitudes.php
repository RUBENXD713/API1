<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Solicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->text('idAda');
            $table->text('dato');
            $table->unsignedBigInteger('usuario');
            $table->foreign('usuario')->references('id')->on('users');
            $table->unsignedBigInteger('sensor');
            $table->foreign('sensor')->references('id')->on('sensores');
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
        //
    }
}
