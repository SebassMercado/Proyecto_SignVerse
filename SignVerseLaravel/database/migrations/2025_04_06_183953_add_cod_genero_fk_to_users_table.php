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
         Schema::table('users', function (Blueprint $table) {
        $table->string('cod_genero_fk', 1)->nullable();

        $table->foreign('cod_genero_fk')
              ->references('cod_genero')
              ->on('generos')
              ->onDelete('set null');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['cod_genero_fk']);
        $table->dropColumn('cod_genero_fk');
    });
    }
};
