@extends('navegacion.plantillaU')

@section('title', 'solicitudes reservas')

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
       <form action="{{ route('solicitudesReserva.aprobar', $reserva->id) }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Confirmar</button>
        </form>
        <form action="{{ route('solicitudesReserva.rechazar', $reserva->id) }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded ml-2">Rechazar</button>
        </form>
    @endif
</div>

@endsection