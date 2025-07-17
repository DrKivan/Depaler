<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Apelaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'baneo_id',
        'motivo',
        'fecha_apelacion'
    ];

    
}
