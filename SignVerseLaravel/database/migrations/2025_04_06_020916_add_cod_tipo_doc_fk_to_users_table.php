<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodTipoDocFkToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cod_tipo_doc_fk', 3)->nullable(); // Aquí agregamos la columna con el tipo adecuado y la longitud de 3 caracteres
            $table->foreign('cod_tipo_doc_fk')->references('id')->on('tipos_documento')->onDelete('set null'); // Relación con la tabla tipos_documento
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['cod_tipo_doc_fk']); // Eliminar la clave foránea
            $table->dropColumn('cod_tipo_doc_fk'); // Eliminar la columna
        });
    }
}
