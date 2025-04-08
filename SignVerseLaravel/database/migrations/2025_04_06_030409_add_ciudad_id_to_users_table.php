<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCiudadIdToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Agregar columna ciudad_id
            $table->string('ciudad_id', 3)->nullable();  // Usamos 3 caracteres como ID

            // Establecer la clave foránea
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Eliminar la clave foránea y la columna ciudad_id
            $table->dropForeign(['ciudad_id']);
            $table->dropColumn('ciudad_id');
        });
    }
}
