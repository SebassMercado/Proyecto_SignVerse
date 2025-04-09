<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sugerencia extends Model
{
    use HasFactory;

    protected $table = 'sugerencias';

    protected $fillable = [
        'id_usuario',
        'titulo',
        'mensaje',
        'respuesta',
        'estado',
    ];

    /**
     * Relación con el modelo User usando num_id.
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'num_id');
    }
}
