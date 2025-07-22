<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncia;
use Illuminate\Support\Facades\Session;

class DenunciaController extends Controller
{
    public function store(Request $request)
    {
        // Validar datos
        $request->validate([
            'motivo' => 'required|string|max:255',
            'reportado_id' => 'nullable|exists:usuarios,id',
            'propiedad_id' => 'nullable|exists:propiedades,id',
        ]);

        // Crear la denuncia
        Denuncia::create([
            'motivo' => $request->motivo,
            'reportado_id' => $request->reportado_id,
            'reportante_id' => Session::get('usuario_id'),
            'propiedad_id' => $request->propiedad_id,
        ]);

        return redirect()->back()->with('success', 'Denuncia registrada correctamente.');
    }
}
