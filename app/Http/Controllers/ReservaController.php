<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Pago;
use App\Models\Propiedad;


class ReservaController extends Controller
{
    public function ListarReserva(Request $request){
        $usuarioId = $request->session()->get('usuario_id');

        $reservas=Reserva::with('propiedad')
                ->where('usuario_id', $usuarioId)
                ->get();

        return view('usuario.listarreserva', compact('reservas'));
    }
    public function GuardarReserva(Request $request)
{
    $request->validate([
        'propiedad_id' => 'required|exists:propiedades,id',
        'fecha_inicio' => 'required|date|after_or_equal:today',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ]);

    $usuarioId = session('usuario_id');

    // Calcular días
    $inicio = new \DateTime($request->fecha_inicio);
    $fin = new \DateTime($request->fecha_fin);
    $dias = $inicio->diff($fin)->days ?: 1;

    $propiedad = Propiedad::findOrFail($request->propiedad_id);
    $total = $dias * $propiedad->precio_dia;

    // Crear reserva
    $reserva = Reserva::create([
        'fecha_inicio' => $request->fecha_inicio,
        'fecha_fin' => $request->fecha_fin,
        'usuario_id' => $usuarioId,
        'propiedad_id' => $request->propiedad_id,
        'estado' => 'pendiente',
    ]);

    // Crear pago
    $pago = Pago::create([
        'monto' => $total,
        'estado' => 'pendiente',
        'reserva_id' => $reserva->id,
        'fecha_pago' => now(), // o null si se paga luego
    ]);

    return redirect()->route('form.pago', ['pago_id' => $pago->id]);
}
public function formularioReserva($propiedad_id)
{
    $propiedad = Propiedad::findOrFail($propiedad_id);
    return view('usuario.formreserva', compact('propiedad'));
}

    
}
