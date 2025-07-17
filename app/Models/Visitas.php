<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_hora',
        'estado',
        'propiedad_id',
        'usuario_id'
    ];
}
