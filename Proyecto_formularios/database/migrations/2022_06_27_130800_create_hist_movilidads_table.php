<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistMovilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hist_movilidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('persona_id')->unsigned();
            $table->bigInteger('objeto_id')->unsigned();
            $table->dateTime('fecha_registro')->default(date("Y-m-d H:i:s"));
            //asignacion foraneas
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('objeto_id')->references('id')->on('objetos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_movilidads');
    }
}
