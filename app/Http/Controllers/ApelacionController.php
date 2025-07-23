<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apelacion;
class ApelacionController extends Controller
{
 
    public function store(Request $request)
    {
        $request->validate([
            'baneo_id' => 'required|exists:baneos,id',
            'motivo' => 'required|string|max:1000',
        ]);

        Apelacion::create([
            'baneo_id' => $request->baneo_id,
            'motivo' => $request->motivo,
            'fecha_apelacion' => now(),
        ]);

        return redirect()->back()->with('success', 'Tu apelación ha sido enviada. Nuestro equipo la revisará pronto.');
    }
}

