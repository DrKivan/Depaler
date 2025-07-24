<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;


class UsuarioController extends Controller
{
 // En app/Http/Controllers/UsuarioController.php
public function index()
{
    $usuarioId = Session::get('usuario_id');
    
    $usuarios = Usuario::where('id', '!=', $usuarioId)
                ->withCount('denunciasRecibidas')
                ->with(['denunciasRecibidas' => function($query) {
                    $query->latest()->limit(3);
                }])
                ->with(['baneo']) // Solo cargamos el baneo
                ->get()
                ->each(function ($usuario) {
                    // Cargamos TODAS las apelaciones si existe baneo
                    if ($usuario->baneo) {
                        $usuario->baneo->apelaciones = \App\Models\Apelacion::where('baneo_id', $usuario->baneo->id)
                            ->orderBy('fecha_apelacion', 'desc')
                            ->get();
                        
                        // Mantenemos la apelación individual para compatibilidad (la más reciente)
                        $usuario->baneo->apelacion = $usuario->baneo->apelaciones->first();
                    }
                });
    
    return view('moderador.listarUsuario', compact('usuarios'));
}
public function denunciasUsuario(Usuario $usuario)
{
    $denuncias = $usuario->denunciasRecibidas()
                  ->with(['reportante', 'propiedad'])
                  ->get()
                  ->map(function($denuncia) {
                      return [
                          'motivo' => $denuncia->motivo,
                          'reportante' => $denuncia->reportante->nombre,
                          'propiedad' => $denuncia->propiedad_id ? 'ID: '.$denuncia->propiedad_id : 'No aplica',
                          'fecha' => $denuncia->created_at->format('d/m/Y H:i')
                      ];
                  });
    
    return response()->json($denuncias);
}
    
}
