<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Crear tabla dispositivos
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->id('dispositivo_id');
            $table->string('dispositivo_nombre');
            //Definición de clave foránea modelo_id
            $table->integer('modelo_id')->unsigned();
            $table->foreign('modelo_id')->references('modelo_id')->on('modelos');
            //Definición de clave foránea bodega_id
            $table->integer('bodega_id')->unsigned();
            $table->foreign('bodega_id')->references('bodega_id')->on('bodegas');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispositivos');
    }
};
