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
        Schema::create('lib_autor', function (Blueprint $table) {
            $table->increments('cod_autor');            
            $table->string('nombres', 50);
            $table->string('apellidos', 50);

            $table->unsignedInteger('cod_sexo_fk');
            $table->foreign('cod_sexo_fk')->references('cod_sexo')->on('lib_sexo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_autor');
    }
};
