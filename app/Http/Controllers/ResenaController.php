<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;
use Illuminate\Support\Facades\Session;

class ResenaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comentario' => 'required|string|max:1000',
            'calificacion' => 'required|integer|min:1|max:5',
            'propiedad_id' => 'required|exists:propiedades,id',
        ]);

        Resena::create([
            'comentario' => $request->comentario,
            'calificacion' => $request->calificacion,
            'usuario_id' => Session::get('usuario_id'), // Desde la sesión
            'propiedad_id' => $request->propiedad_id,
        ]);

        return redirect()->back()->with('success', 'Reseña guardada correctamente.');
    }

    
}


?>