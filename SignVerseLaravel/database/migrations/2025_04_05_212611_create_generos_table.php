<?php

// database/migrations/YYYY_MM_DD_create_generos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->string('id')->primary(); // El 'id' será un string (por ejemplo, 'F' para Femenino)
            $table->string('descripcion'); // Descripción del género (Ej. Masculino, Femenino, Otro)
            $table->timestamps(); // Tiempos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generos');
    }
}
