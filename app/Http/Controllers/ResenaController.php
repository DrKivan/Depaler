<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;
use Illuminate\Support\Facades\Session;
use App\Models\Propiedad;
use App\Models\Usuario;

class ResenaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comentario' => 'required|string|max:1000',
            'calificacion' => 'required|integer|min:1|max:5',
            'propiedad_id' => 'required|exists:propiedades,id',
        ]);

        $usuarioId = Session::get('usuario_id');
        
        // Verificar si ya existe una reseña
        $existingResena = Resena::where('usuario_id', $usuarioId)
                                ->where('propiedad_id', $request->propiedad_id)
                                ->first();

        if ($existingResena) {
            return redirect()->back()->with('error', 'Ya has dejado una reseña para esta propiedad.');
        }

        Resena::create([
            'comentario' => $request->comentario,
            'calificacion' => $request->calificacion,
            'usuario_id' => $usuarioId,
            'propiedad_id' => $request->propiedad_id,
        ]);

        return redirect()->back()->with('success', 'Reseña guardada correctamente.');
    }

    public function update(Request $request, Resena $resena)
    {
        $request->validate([
            'comentario' => 'required|string|max:1000',
            'calificacion' => 'required|integer|min:1|max:5',
        ]);

        // Verificar que el usuario es el dueño de la reseña
        if ($resena->usuario_id != Session::get('usuario_id')) {
            return redirect()->back()->with('error', 'No tienes permiso para editar esta reseña.');
        }

        $resena->update([
            'comentario' => $request->comentario,
            'calificacion' => $request->calificacion,
        ]);

        return redirect()->back()->with('success', 'Reseña actualizada correctamente.');
    }

    public function destroy(Resena $resena)
    {
        // Verificar que el usuario es el dueño de la reseña
        if ($resena->usuario_id != Session::get('usuario_id')) {
            return redirect()->back()->with('error', 'No tienes permiso para eliminar esta reseña.');
        }

        $resena->delete();

        return redirect()->back()->with('success', 'Reseña eliminada correctamente.');
    }

    public function check(Request $request)
    {
        $usuarioId = Session::get('usuario_id');
        $propiedadId = $request->propiedad_id;

        $resena = Resena::where('usuario_id', $usuarioId)
                      ->where('propiedad_id', $propiedadId)
                      ->first();

        return response()->json([
            'exists' => $resena ? true : false,
            'resena' => $resena
        ]);
    }
   

}

?>