@extends('navegacion.plantillaU')

@section('title', 'Crear Propiedad')

@section('content')
<div>
    <h2 class="text-2xl font-semibold mb-6">Solicitudes de Reserva</h2>

    @if($reservas->isEmpty())
        <p>No tienes solicitudes de reserva pendientes.</p>
    @else
        <ul>
            @foreach($reservas as $reserva)
                <li class="border-b py-4">
                    <h3 class="font-semibold">{{ $reserva->propiedad->titulo }}</h3>

                    <p>Propiedad: {{ $reserva->propiedad->titulo }}</p>
    
                    <p>Dirección: {{ $reserva->propiedad->direccion }}</p>
                    <p>Fecha de Inicio: {{ $reserva->fecha_inicio }}</p>
                    <p>Fecha de Fin: {{ $reserva->fecha_fin }}</p>
                    <p>Estado: {{ $reserva->estado }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>

@endsection