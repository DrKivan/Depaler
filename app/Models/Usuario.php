<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'email',
        'contrasena',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'tipo_usuario',
        'foto_perfil' // Ruta de la foto de perfil
    ];

    protected $hidden = [
        'contrasena'
    ];
}

?>