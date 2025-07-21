@extends('navegacion.plantillaU')

@section('title', 'Reservar propiedad')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-semibold mb-6">Reservar: {{ $propiedad->titulo }}</h2>

    <form action="{{ route('reserva.guardar') }}" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
        @csrf

        <input type="hidden" name="propiedad_id" value="{{ $propiedad->id }}">

        <div>
            <label class="block text-sm font-medium text-gray-700">Fecha inicio:</label>
            <input type="date" name="fecha_inicio" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Fecha fin:</label>
            <input type="date" name="fecha_fin" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Precio por noche:</label>
            <p class="mt-1 text-gray-800">${{ number_format($propiedad->precio_dia, 0, ',', '.') }}</p>
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Confirmar Reserva
            </button>
        </div>
    </form>
</div>
@endsection
