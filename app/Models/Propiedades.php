<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'direccion',
        'precio_mensual',
        'precio_dia',
        'num_habitaciones',
        'num_banos',
        'estado',
        'usuario_id',
    ];
}
