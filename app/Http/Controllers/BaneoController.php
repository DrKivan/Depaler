<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baneo;
use App\Models\Usuario;

class BaneoController extends Controller
{
    public function store(Request $request, $usuarioId)
{
    $request->validate([
        'motivo' => 'required|string|max:255',
        'fecha_baneo' => 'required|date',
        'estado' => 'required|in:activo,revertido'
    ]);
    
    // Actualizar estado del usuario
    $usuario = Usuario::findOrFail($usuarioId);
    $usuario->update(['baneado' => true]);
    
    // Crear registro de baneo
    $baneo = Baneo::create([
        'usuario_id' => $usuarioId,
        'fecha_baneo' => $request->fecha_baneo,
        'motivo' => $request->motivo,
        'estado' => $request->estado
    ]);
    
    return response()->json([
        'success' => true,
        'message' => 'Usuario baneado correctamente',
        'baneo' => $baneo
    ]);
}


    
}
