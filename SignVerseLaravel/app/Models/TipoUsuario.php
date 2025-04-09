<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    // Nombre de la tabla real en la base de datos
    protected $table = 'lib_tipou';

    // Clave primaria personalizada
    protected $primaryKey = 'cod_tipo';

    // Como la PK es texto ('A', 'C')
    public $incrementing = false;
    protected $keyType = 'string';

    // No estás usando timestamps (created_at, updated_at)
    public $timestamps = false;

    // Si quieres, puedes agregar la relación inversa con User
    public function users()
    {
        return $this->hasMany(User::class, 'cod_tipo_fk', 'cod_tipo');
    }
}
