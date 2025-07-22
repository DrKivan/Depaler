@extends('navegacion.plantillaU')

@section('title', 'Lista de Reservas')

@section('content')
<div>
    @if (session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

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
<td>
    @if ($reserva->estado === 'confirmado')
        <!-- Botón que abre el modal -->
       <button 
    onclick="document.getElementById('modal-{{ $reserva->id }}').classList.remove('hidden')"
    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
    Dejar Reseña
</button>

    @endif
</td>
                </tr>
            @endforeach
            @foreach ($reservas as $reserva)
    @if ($reserva->estado === 'confirmado')
    <!-- Modal -->
    <div id="modal-{{ $reserva->id }}" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-md w-full max-w-md p-6">
            <h2 class="text-lg font-semibold mb-4">Escribe una reseña para "{{ $reserva->propiedad->titulo }}"</h2>

            <form action="{{ route('resenas.store') }}" method="POST">
                @csrf
                <input type="hidden" name="propiedad_id" value="{{ $reserva->propiedad->id }}">
                <textarea name="comentario" required class="w-full border rounded p-2 mb-4" placeholder="Tu reseña..."></textarea>
                <label for="calificacion">Calificación:</label>
                <select name="calificacion" class="w-full border rounded p-2 mb-4" required>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }} estrella{{ $i > 1 ? 's' : '' }}</option>
                    @endfor
                </select>
                <div class="flex justify-end">
                    <button type="button" onclick="document.getElementById('modal-{{ $reserva->id }}').classList.add('hidden')" class="mr-2 bg-gray-300 px-4 py-2 rounded">Cancelar</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    @endif
@endforeach

        </tbody>
    </table>
</div>
@endsection
