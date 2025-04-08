<?php

// database/migrations/YYYY_MM_DD_create_ciudades_table.php
// database/migrations/YYYY_MM_DD_create_ciudades_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->string('id'); // Identificador de la ciudad (ejemplo: 'Bog')
            $table->string('descripcion'); // Descripción de la ciudad (ejemplo: 'Bogotá')
            $table->timestamps(); // Tiempos de creación y actualización

            // Establecer el identificador como clave primaria
            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
}
