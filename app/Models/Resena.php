<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Resena extends Model
{
    use HasFactory;

    protected $fillable = [
        'comentario',
        'calificacion',
        'usuario_id',
        'propiedad_id'
    ];
    public function propiedad()
{
    return $this->belongsTo(Propiedad::class);
}

}
