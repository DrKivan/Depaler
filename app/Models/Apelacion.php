<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apelacion extends Model
{
    use HasFactory;
    protected $table = 'apelaciones';
    protected $fillable = [
        'baneo_id',
        'motivo',
        'fecha_apelacion'
    ];

    
}
