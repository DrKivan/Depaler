<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'email',
        'contrasena',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'tipo_usuario',
        'foto_perfil', // Ruta de la foto de perfil
        'baneado'
    ];

    protected $hidden = [
        'contrasena'
    ];

    // En app/Models/Usuario.php
public function denunciasRecibidas()
{
    return $this->hasMany(Denuncia::class, 'reportado_id');
}
public function baneo()
{
    return $this->hasOne(Baneo::class)->latestOfMany(); 
}

}



?>