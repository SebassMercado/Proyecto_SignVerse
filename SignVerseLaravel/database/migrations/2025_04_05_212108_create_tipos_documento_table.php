<?php

// database/migrations/YYYY_MM_DD_create_tipos_documento_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposDocumentoTable extends Migration
{
    public function up()
    {
        Schema::create('tipos_documento', function (Blueprint $table) {
            $table->string('id', 3); // Definir longitud de 3 caracteres
            $table->string('descripcion'); // Descripción del tipo de documento
            $table->timestamps(); // Tiempos de creación y actualización

            // Establecer el identificador como clave primaria
            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipos_documento');
    }
}
