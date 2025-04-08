<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table = 'lib_sexo';
    protected $primaryKey = 'cod_sexo';
    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function autores(){
        return $this->hasMany(Autor::class, 'cod_sexo', 'cod_sexo_fk');
    }
}
