@extends('navegacion.plantillaU')

@section('title', 'Confirmar Pago')

@section('content')
<div class="max-w-xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-semibold mb-6">Confirmar Pago</h2>

    <div class="bg-white p-6 rounded-lg shadow space-y-4">
        <p><strong>Propiedad:</strong> {{ $propiedad->titulo }}</p>
        <p><strong>Dirección:</strong> {{ $propiedad->direccion }}</p>
        <p><strong>Fechas:</strong> {{ $fecha_inicio }} a {{ $fecha_fin }}</p>
        <p><strong>Total a pagar:</strong> ${{ number_format($total, 2, ',', '.') }}</p>
    </div>

    <form action="{{ route('reserva.guardar') }}" method="POST" class="mt-6">
        @csrf
        <input type="hidden" name="propiedad_id" value="{{ $propiedad->id }}">
        <input type="hidden" name="fecha_inicio" value="{{ $fecha_inicio }}">
        <input type="hidden" name="fecha_fin" value="{{ $fecha_fin }}">
        <input type="hidden" name="monto" value="{{ $total }}">
        <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Confirmar Pago
        </button>
    </form>
</div>
@endsection
