<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
        'estado',
        'reserva_id',
        'fecha_pago'
    ];
     public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
   
}
