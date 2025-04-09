<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $primaryKey = 'cod_genero';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    // Relación con usuarios
    public function users()
    {
        return $this->hasMany(User::class, 'cod_genero_fk', 'cod_genero');
    }
}
