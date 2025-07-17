<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baneo extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'usuario_id',
        'fecha_baneo',
        'motivo',
        'estado'
    ];

}
