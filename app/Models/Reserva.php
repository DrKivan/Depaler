<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
       'fecha_inicio',
        'fecha_fin',
        'usuario_id',
        'propiedad_id',
        'estado'
    ];
    public function propiedad()
{
    return $this->belongsTo(Propiedad::class);
}

public function pago()
{
    return $this->hasOne(Pago::class);
}


    
}
