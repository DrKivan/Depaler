@extends('navegacion.plantillaU')

@section('title', 'Lista de Propiedades para alquilar')

@section('content')
    <div>
        <h1>Lista de Reservas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->id }}</td>
                        <td>{{ $reserva->fecha_inicio }}</td>
                        <td>{{ $reserva->fecha_fin }}</td>
                        <td>{{ $reserva->estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
