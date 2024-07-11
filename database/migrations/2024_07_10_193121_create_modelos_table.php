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
        //Crear tabla modelos
        Schema::create('modelos', function (Blueprint $table) {
            $table->id('modelo_id');
            $table->string('modelo_nombre')->unique();
            //Definicion de clave foranea
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('marca_id')->on('marcas');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
