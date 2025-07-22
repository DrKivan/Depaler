@extends('navegacion.plantillaU')

@section('title', 'Lista de Reservas')

@section('content')
<div>
    <h1>Lista de Reservas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID Reserva</th>
                <th>Propiedad</th>
                <th>Dirección</th>
                <th>Precio por noche</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                
                <th>Total pagado</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->propiedad->titulo ?? 'No disponible' }}</td>
                    <td>{{ $reserva->propiedad->direccion ?? 'No disponible' }}</td>
                    <td>${{ number_format($reserva->propiedad->precio_dia ?? 0, 2) }}</td>
                    <td>{{ $reserva->fecha_inicio }}</td>
                    <td>{{ $reserva->fecha_fin }}</td>
                    
                    <td>
                        @if ($reserva->pago)
                            ${{ number_format($reserva->pago->monto, 2) }}
                        @else
                            <span class="text-danger">Sin pago</span>
                        @endif
                    </td>
                    <td>{{ ucfirst($reserva->estado) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
