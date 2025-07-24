<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Propiedad extends Model
{
    use HasFactory;
    protected $table = 'propiedades';
    protected $fillable = [
        'titulo',
        'descripcion',
        'direccion',
        'precio_dia',
        'num_habitaciones',
        'num_banos',
        'estado',
        'aprobada',
        'usuario_id',
        'ciudad',
        'wifi',
        'television',
        'aire_acondicionado',
        'servicios_basicos',
    ];
    public function imagenes()
{
    return $this->hasMany(ImagenPropiedad::class);
}
// Agregar esta relación
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

     public function resenas(): HasMany
    {
        return $this->hasMany(Resena::class, 'propiedad_id');
    }

}
