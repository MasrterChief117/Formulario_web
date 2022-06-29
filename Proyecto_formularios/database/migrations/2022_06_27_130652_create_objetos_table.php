<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa',255);
            $table->string('nombre',255);
            $table->string('serial',255);
            $table->bigInteger('marca_id')->unsigned();
            $table->string('modelo',255);
            $table->string('caracteristicas',255);
            $table->bigInteger('tipo_id')->unsigned();
            $table->string('observaciones',255);
            $table->string('aplica_movilidad',255);
            $table->bigInteger('dependencia_id')->unsigned();
            $table->bigInteger('ubicacion_real_id')->unsigned();
            $table->bigInteger('ubicacion_inventario_id')->unsigned();
            //asignacion foraneas
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('dependencia_id')->references('id')->on('dependencias');
            $table->foreign('ubicacion_real_id')->references('id')->on('ubicacions');
            $table->foreign('ubicacion_inventario_id')->references('id')->on('ubicacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetos');
    }
}
