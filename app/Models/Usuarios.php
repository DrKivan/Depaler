<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'contraseña', // o 'password' si usas el sistema de auth de Laravel
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'tipo_usuario'
    ];
}
