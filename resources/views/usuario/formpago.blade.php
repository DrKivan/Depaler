@extends('navegacion.plantillaU')

@section('title', 'Confirmar Pago')

@section('content')
<div class="max-w-xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-semibold mb-6">Confirmar Pago</h2>

    <div class="bg-white p-6 rounded-lg shadow space-y-4">
        <p><strong>Propiedad:</strong> {{ $pago->reserva->propiedad->titulo }}</p>
        <p><strong>Dirección:</strong> {{ $pago->reserva->propiedad->direccion }}</p>
        <p><strong>Fechas:</strong> {{ $pago->reserva->fecha_inicio }} a {{ $pago->reserva->fecha_fin }}</p>
        <p><strong>Total a pagar:</strong> ${{ number_format($pago->monto, 2, ',', '.') }}</p>
    </div>

    <form action="{{ route('pago.confirmar', $pago->id) }}" method="POST" class="mt-6">
        @csrf
        <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Confirmar Pago
        </button>
    </form>
</div>
@endsection
