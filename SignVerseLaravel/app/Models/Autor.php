<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'lib_autor';
    protected $primaryKey = 'cod_autor';
    protected $fillable = [ 
        'nombres',
        'apellidos',
        'cod_sexo_fk'
    ];

    public $timestamps = false;

    public function sexo(){
        return $this->belongsTo(Sexo::class, 'cod_sexo_fk', 'cod_sexo');
    }
}
