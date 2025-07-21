<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function ListarReserva(){
        $usuarioId = $request->session()->get('usuario_id');

        $reservas=Reserva::with('propiedad')
                ->where('usuario_id', $usuarioId)
                ->get();

        return view('usuario.listarreserva', compact('reservas'));
    }
    public function AñadirReserva(){
        
    }
    public function GuardarReserva(Request $request){
    $request->validate([
        'propiedad_id' => 'required|exists:propiedades,id',
        'fecha_inicio' => 'required|date|after_or_equal:today',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ]);

    $usuarioId = session('usuario_id');

    Reserva::create([
        'fecha_inicio' => $request->fecha_inicio,
        'fecha_fin' => $request->fecha_fin,
        'usuario_id' => $usuarioId,
        'propiedad_id' => $request->propiedad_id,
        'estado' => 'pendiente', // o confirmado, según tu lógica
    ]);

    return redirect()->route('propiedades.listar')->with('success', '¡Reserva realizada exitosamente!');
    }

}
