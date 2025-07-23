<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baneo;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class BaneoController extends Controller
{
    public function store(Request $request, $usuarioId)
{
    $request->validate([
        'motivo' => 'required|string|max:255',
        'fecha_baneo' => 'required|date',
        'estado' => 'required|in:temporal,permanente'
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

// app/Http/Controllers/BaneoController.php
public function desbanear($usuarioId)
{
    try {
        DB::beginTransaction();
        
        // 1. Actualizar estado del usuario (desbanear)
        $usuario = Usuario::findOrFail($usuarioId);
        $usuario->update(['baneado' => false]);
        
        // 2. Eliminar físicamente todos los registros de baneo de este usuario
        Baneo::where('usuario_id', $usuarioId)->delete();
        
        DB::commit();
        
        return response()->json([
            'success' => true,
            'message' => 'Usuario desbaneado correctamente. Registros de baneo eliminados.',
            'usuario' => $usuario->fresh()
        ]);
        
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'success' => false,
            'message' => 'Error al desbanear usuario: ' . $e->getMessage()
        ], 500);
    }
}
    
}
