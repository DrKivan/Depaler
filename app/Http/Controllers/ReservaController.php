<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Pago;
use App\Models\Propiedad;
use Illuminate\Support\Facades\Auth;


class ReservaController extends Controller
{
   public function ListarReserva(Request $request)
{
    $usuarioId = $request->session()->get('usuario_id');

    $reservas = Reserva::with(['propiedad', 'pago'])
                ->where('usuario_id', $usuarioId)
                ->get();

    return view('usuario.listarreserva', compact('reservas'));
}

    /*public function GuardarReserva(Request $request)
    {
    $request->validate([
        'propiedad_id' => 'required|exists:propiedades,id',
        'fecha_inicio' => 'required|date|after_or_equal:today',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ]);

    $usuarioId = session('usuario_id');
    $propiedadId = $request->propiedad_id;

    // Verificar si ya hay una reserva que se cruza con estas fechas
    $existeReserva = Reserva::where('propiedad_id', $propiedadId)
        ->where(function($query) use ($request) {
            $query->where('fecha_inicio', '<=', $request->fecha_fin)
                  ->where('fecha_fin', '>=', $request->fecha_inicio);
        })
        ->exists();

    if ($existeReserva) {
        return back()->withErrors(['fecha_inicio' => 'La propiedad ya está reservada en ese rango de fechas.'])->withInput();
    }

    // Calcular días
    $inicio = new \DateTime($request->fecha_inicio);
    $fin = new \DateTime($request->fecha_fin);
    $dias = $inicio->diff($fin)->days ?: 1;

    // Obtener precio por día
    $propiedad = Propiedad::findOrFail($propiedadId);
    $total = $dias * $propiedad->precio_dia;

    // Crear reserva
    $reserva = Reserva::create([
        'fecha_inicio' => $request->fecha_inicio,
        'fecha_fin' => $request->fecha_fin,
        'usuario_id' => $usuarioId,
        'propiedad_id' => $propiedadId,
        'estado' => 'pendiente',
    ]);

    // Crear pago
    $pago = Pago::create([
        'monto' => $total,
        'estado' => 'pendiente',
        'reserva_id' => $reserva->id,
        'fecha_pago' => now(),
    ]);

    return redirect()->route('form.pago', ['pago_id' => $pago->id]);
    }*/


    public function formularioReserva($propiedad_id)
    {
    $propiedad = Propiedad::findOrFail($propiedad_id);
    return view('usuario.formreserva', compact('propiedad'));
    }

    /*public function confirmarReserva(Request $request)
    {
    $request->validate([
        'propiedad_id' => 'required|exists:propiedades,id',
        'fecha_inicio' => 'required|date|after_or_equal:today',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ]);

    $inicio = new \DateTime($request->fecha_inicio);
    $fin = new \DateTime($request->fecha_fin);
    $dias = $inicio->diff($fin)->days ?: 1;

    $propiedad = Propiedad::findOrFail($request->propiedad_id);
    $total = $dias * $propiedad->precio_dia;

    return view('usuario.formpago', [
        'propiedad' => $propiedad,
        'fecha_inicio' => $request->fecha_inicio,
        'fecha_fin' => $request->fecha_fin,
        'total' => $total,
        'dias' => $dias,
    ]);
    }*/
    public function resumen(Request $request)
    {
    $request->validate([
        'propiedad_id' => 'required|exists:propiedades,id',
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ]);

    $propiedad = Propiedad::findOrFail($request->propiedad_id);

    $existeReserva = Reserva::where('propiedad_id', $request->propiedad_id)
        ->where(function($query) use ($request) {
            $query->where('fecha_inicio', '<=', $request->fecha_fin)
                  ->where('fecha_fin', '>=', $request->fecha_inicio);
        })
        ->exists();

    if ($existeReserva) {
        return back()->withErrors(['fecha_inicio' => 'La propiedad ya está reservada en ese rango de fechas.'])->withInput();
    }

    $dias = (new \DateTime($request->fecha_inicio))->diff(new \DateTime($request->fecha_fin))->days ?: 1;
    $total = $dias * $propiedad->precio_dia;

    return view('usuario.formPago', compact('propiedad', 'dias', 'total'))
        ->with('fecha_inicio', $request->fecha_inicio)
        ->with('fecha_fin', $request->fecha_fin);
    }


    public function guardar(Request $request)
    {
        $request->validate([
            'propiedad_id' => 'required|exists:propiedades,id',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'monto' => 'required|numeric|min:0',
        ]);

        $reserva = Reserva::create([
            'usuario_id' => $request->session()->get('usuario_id'),
            'propiedad_id' => $request->propiedad_id,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'estado' => 'pendiente', 
        ]);

        Pago::create([
            'reserva_id' => $reserva->id,
            'monto' => $request->monto,
            'estado' => 'completado',
            'fecha_pago' => now(),
        ]);

        return redirect()->route('propiedades.listar')->with('success', 'Reserva y pago registrados correctamente.');
    }

    //listar solicitudes de reserva
    public function VistaSolicitudesReserva(){
    $usuarioId = session('usuario_id');

    $reservas = Reserva::with(['propiedad', 'pago'])
        ->whereHas('propiedad', function($query) use ($usuarioId) {
            $query->where('usuario_id', $usuarioId);
        })
        ->where('estado', 'pendiente')
        ->get();

    return view('usuario.propietario.solicitudreserva', compact('reservas'));
}

}
