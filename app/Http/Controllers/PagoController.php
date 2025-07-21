<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;

class PagoController extends Controller
{
    public function formularioPago($pago_id)
{
    $pago = Pago::with('reserva.propiedad')->findOrFail($pago_id);
    return view('usuario.formpago', compact('pago'));
}

public function GuardarPago(Request $request, $pago_id)
{
    $pago = Pago::findOrFail($pago_id);

    // Aquí podrías validar forma de pago, etc.
    $pago->update([
        'estado' => 'completado',
        'fecha_pago' => now(),
    ]);

    return redirect()->route('propiedades.listar')->with('success', '¡Pago realizado con éxito!');
}
}
