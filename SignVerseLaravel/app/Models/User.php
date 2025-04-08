<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'name_2',
        'lastname',
        'lastname_2',
        'email',
        'password',
        'cod_tipo_fk',   // Clave foránea para el tipo de usuario (A para admin, C para cliente)
        'cod_tipo_doc_fk', // Clave foránea para el tipo de documento
        'ciudad_id',
        'cod_genero_fk',
        'num_id',
        'discapacidad_aud',
        'fecha_naci',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relación con TipoDocumento (tipo de documento)
    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class, 'cod_tipo_doc_fk'); // Relacionando con 'cod_tipo_doc_fk'
    }

    // Relación con TipoUsuario (tipo de usuario, admin o cliente)
    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'cod_tipo_fk'); // Relacionando con 'cod_tipo_fk'
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }

    public function genero()
{
    return $this->belongsTo(Genero::class, 'cod_genero_fk', 'cod_genero');
}
}

