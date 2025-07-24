@extends('navegacion.plantillaU')

@section('title', 'Lista de Reservas')

@section('content')
<div>
    @if (session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
        {{ session('error') }}
    </div>
    @endif

    <h1 class="text-2xl font-bold mb-4">Lista de Reservas</h1>
    <table class="min-w-full bg-white rounded-lg overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b">ID Reserva</th>
                <th class="py-2 px-4 border-b">Propiedad</th>
                <th class="py-2 px-4 border-b">Dirección</th>
                <th class="py-2 px-4 border-b">Precio por noche</th>
                <th class="py-2 px-4 border-b">Fecha inicio</th>
                <th class="py-2 px-4 border-b">Fecha fin</th>
                <th class="py-2 px-4 border-b">Total pagado</th>
                <th class="py-2 px-4 border-b">Estado</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr class="hover:bg-gray-50" data-reserva-id="{{ $reserva->id }}" data-propiedad-id="{{ $reserva->propiedad->id ?? '' }}">
    <!-- ... resto de las celdas ... -->

                    <td class="py-2 px-4 border-b text-center">{{ $reserva->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $reserva->propiedad->titulo ?? 'No disponible' }}</td>
                    <td class="py-2 px-4 border-b">{{ $reserva->propiedad->direccion ?? 'No disponible' }}</td>
                    <td class="py-2 px-4 border-b text-center">${{ number_format($reserva->propiedad->precio_dia ?? 0, 2) }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $reserva->fecha_inicio }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $reserva->fecha_fin }}</td>
                    <td class="py-2 px-4 border-b text-center">
                        @if ($reserva->pago)
                            ${{ number_format($reserva->pago->monto, 2) }}
                        @else
                            <span class="text-red-500">Sin pago</span>
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b text-center">{{ ucfirst($reserva->estado) }}</td>
                    <td class="py-2 px-4 border-b text-center">
                        @if ($reserva->estado === 'confirmada')
                            @php
                                $tieneResena = $reserva->propiedad->resenas->where('usuario_id', session('usuario_id'))->first();
                            @endphp
                            <button 
                                onclick="openModal('{{ $reserva->id }}', {{ $tieneResena ? 'true' : 'false' }}, {{ $tieneResena ? $tieneResena->id : 'null' }}, '{{ $tieneResena ? addslashes($tieneResena->comentario) : '' }}', {{ $tieneResena ? $tieneResena->calificacion : '5' }})"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                                {{ $tieneResena ? 'Editar Reseña' : 'Dejar Reseña' }}
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal único para todas las reseñas -->
<div id="resenaModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-md w-full max-w-md p-6">
        <h2 id="modalTitle" class="text-lg font-semibold mb-4">Dejar Reseña</h2>

        <form id="resenaForm" method="POST">
            @csrf
            <input type="hidden" name="propiedad_id" id="modalPropiedadId">
            <input type="hidden" name="_method" id="formMethod" value="POST">
            <input type="hidden" name="resena_id" id="resenaId">
            
            <div class="mb-4">
                <label for="modalComentario" class="block text-gray-700 mb-2">Comentario:</label>
                <textarea name="comentario" id="modalComentario" required 
                    class="w-full border rounded p-2" placeholder="Tu reseña..."></textarea>
            </div>
            
            <div class="mb-4">
                <label for="modalCalificacion" class="block text-gray-700 mb-2">Calificación:</label>
                <select name="calificacion" id="modalCalificacion" 
                    class="w-full border rounded p-2" required>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }} estrella{{ $i > 1 ? 's' : '' }}</option>
                    @endfor
                </select>
            </div>
            
            <div class="flex justify-between">
                <div>
                    <button type="button" id="deleteResenaBtn" 
                        class="hidden bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                        Eliminar Reseña
                    </button>
                </div>
                <div>
                    <button type="button" onclick="closeModal()" 
                        class="mr-2 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
                        Cancelar
                    </button>
                    <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(reservaId, tieneResena, resenaId, comentario, calificacion) {
        const modal = document.getElementById('resenaModal');
        const form = document.getElementById('resenaForm');
        const deleteBtn = document.getElementById('deleteResenaBtn');
        const title = document.getElementById('modalTitle');
        
        // Obtener propiedad_id de la reserva (necesitarías pasarlo o buscarlo)
        const propiedadId = document.querySelector(`tr[data-reserva-id="${reservaId}"]`).dataset.propiedadId;
        
        // Configurar el formulario
        document.getElementById('modalPropiedadId').value = propiedadId;
        document.getElementById('modalComentario').value = comentario || '';
        document.getElementById('modalCalificacion').value = calificacion || 5;
        
        if (tieneResena) {
            // Modo edición
            title.textContent = 'Editar Reseña';
            document.getElementById('formMethod').value = 'PUT';
            document.getElementById('resenaId').value = resenaId;
            form.action = `/resenas/${resenaId}`;
            deleteBtn.classList.remove('hidden');
            
            // Configurar eliminación
            deleteBtn.onclick = function() {
    if (confirm('¿Estás seguro de eliminar esta reseña?')) {
        // Crear un formulario temporal
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/resenas/${resenaId}`;
        
        // Añadir CSRF token
        const csrf = document.createElement('input');
        csrf.type = 'hidden';
        csrf.name = '_token';
        csrf.value = document.querySelector('meta[name="csrf-token"]').content;
        
        // Añadir método DELETE
        const method = document.createElement('input');
        method.type = 'hidden';
        method.name = '_method';
        method.value = 'DELETE';
        
        form.appendChild(csrf);
        form.appendChild(method);
        document.body.appendChild(form);
        form.submit();
    }
};
        } else {
            // Modo creación
            title.textContent = 'Dejar Reseña';
            document.getElementById('formMethod').value = 'POST';
            form.action = '/resenas';
            deleteBtn.classList.add('hidden');
        }
        
        modal.classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('resenaModal').classList.add('hidden');
    }

    // Cerrar modal al hacer clic fuera del contenido
    document.getElementById('resenaModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>
@endsection