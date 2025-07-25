@extends('navegacion.plantillaU')

@section('title', 'Lista de Reservas')

@section('content')
<div class="bg-gray-100 min-h-screen py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="text-gray-600 hover:text-black transition-colors">
                            <i class="fas fa-home mr-2"></i>Inicio
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-black font-medium">Mis Reservas</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl md:text-4xl font-serif font-bold text-black mb-2">Lista de Reservas</h1>
                    <p class="text-gray-600">Gestiona todas tus reservas de propiedades</p>
                </div>
                <div class="hidden md:flex items-center bg-white rounded-lg shadow-sm border border-gray-200 px-4 py-2">
                    <i class="fas fa-calendar-alt text-black mr-2"></i>
                    <span class="text-gray-700 font-medium">{{ count($reservas) }} reservas</span>
                </div>
            </div>
        </div>

        <!-- Mensajes de estado -->
        @if (session('success'))
        <div class="bg-white border-l-4 border-green-500 text-green-800 p-4 rounded-lg shadow-sm mb-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-500"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium">{{ session('success') }}</p>
                </div>
            </div>
        </div>
        @endif

        @if (session('error'))
        <div class="bg-white border-l-4 border-red-500 text-red-800 p-4 rounded-lg shadow-sm mb-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-circle text-red-500"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium">{{ session('error') }}</p>
                </div>
            </div>
        </div>
        @endif

        <!-- Tabla de reservas -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
            <!-- Header de la tabla -->
            <div class="bg-gradient-to-r from-gray-900 to-black p-6 text-white">
                <h3 class="text-xl font-bold flex items-center">
                    <i class="fas fa-list-alt mr-3"></i>
                    Historial de Reservas
                </h3>
            </div>

            <!-- Tabla responsive -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-hashtag mr-2"></i>
                                    ID Reserva
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-home mr-2"></i>
                                    Propiedad
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    Dirección
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-dollar-sign mr-2"></i>
                                    Precio/Noche
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    Fechas
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-credit-card mr-2"></i>
                                    Total Pagado
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Estado
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-cog mr-2"></i>
                                    Acciones
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($reservas as $reserva)
                            <tr class="hover:bg-gray-50 transition-colors duration-200" data-reserva-id="{{ $reserva->id }}" data-propiedad-id="{{ $reserva->propiedad->id ?? '' }}">
                                <!-- ID Reserva -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-xs font-bold text-black">#</span>
                                        </div>
                                        <span class="text-sm font-medium text-black">{{ $reserva->id }}</span>
                                    </div>
                                </td>

                                <!-- Propiedad -->
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-black">{{ $reserva->propiedad->titulo ?? 'No disponible' }}</div>
                                </td>

                                <!-- Dirección -->
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-700">{{ $reserva->propiedad->direccion ?? 'No disponible' }}</div>
                                </td>

                                <!-- Precio por noche -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-black">${{ number_format($reserva->propiedad->precio_dia ?? 0, 2) }}</div>
                                </td>

                                <!-- Fechas -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <div class="flex items-center mb-1">
                                            <i class="fas fa-sign-in-alt text-green-600 mr-2 text-xs"></i>
                                            <span>{{ \Carbon\Carbon::parse($reserva->fecha_inicio)->format('d/m/Y') }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-sign-out-alt text-red-600 mr-2 text-xs"></i>
                                            <span>{{ \Carbon\Carbon::parse($reserva->fecha_fin)->format('d/m/Y') }}</span>
                                        </div>
                                    </div>
                                </td>

                                <!-- Total pagado -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($reserva->pago)
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                            <span class="text-sm font-medium text-black">${{ number_format($reserva->pago->monto, 2) }}</span>
                                        </div>
                                    @else
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                                            <span class="text-sm text-red-600 font-medium">Sin pago</span>
                                        </div>
                                    @endif
                                </td>

                                <!-- Estado -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        $estadoClasses = [
                                            'confirmada' => 'bg-green-100 text-green-800 border-green-200',
                                            'pendiente' => 'bg-yellow-100 text-yellow-800 border-yellow-200',
                                            'cancelada' => 'bg-red-100 text-red-800 border-red-200',
                                        ];
                                        $estadoIcons = [
                                            'confirmada' => 'fas fa-check-circle',
                                            'pendiente' => 'fas fa-clock',
                                            'cancelada' => 'fas fa-times-circle',
                                        ];
                                    @endphp
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border {{ $estadoClasses[$reserva->estado] ?? 'bg-gray-100 text-gray-800 border-gray-200' }}">
                                        <i class="{{ $estadoIcons[$reserva->estado] ?? 'fas fa-question-circle' }} mr-1"></i>
                                        {{ ucfirst($reserva->estado) }}
                                    </span>
                                </td>

                                <!-- Acciones -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($reserva->estado === 'confirmada')
                                        @php
                                            $tieneResena = $reserva->propiedad->resenas->where('usuario_id', session('usuario_id'))->first();
                                        @endphp
                                        <button
                                            onclick="openModal('{{ $reserva->id }}', {{ $tieneResena ? 'true' : 'false' }}, {{ $tieneResena ? $tieneResena->id : 'null' }}, '{{ $tieneResena ? addslashes($tieneResena->comentario) : '' }}', {{ $tieneResena ? $tieneResena->calificacion : '5' }})"
                                            class="inline-flex items-center bg-gradient-to-r from-gray-900 to-black hover:from-black hover:to-gray-800 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all transform hover:scale-105 shadow-sm hover:shadow-md"
                                        >
                                            <i class="fas fa-star mr-2"></i>
                                            {{ $tieneResena ? 'Editar Reseña' : 'Dejar Reseña' }}
                                        </button>
                                    @else
                                        <span class="text-gray-400 text-sm">No disponible</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                            <i class="fas fa-calendar-times text-gray-400 text-2xl"></i>
                                        </div>
                                        <h3 class="text-lg font-medium text-gray-900 mb-2">No tienes reservas</h3>
                                        <p class="text-gray-500">Cuando realices una reserva, aparecerá aquí.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal mejorado para reseñas -->
<div id="resenaModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md transform transition-all border border-gray-200">
        <!-- Header del modal -->
        <div class="bg-gradient-to-r from-gray-900 to-black p-6 text-white rounded-t-2xl">
            <h2 id="modalTitle" class="text-xl font-bold flex items-center">
                <i class="fas fa-star mr-3"></i>
                Dejar Reseña
            </h2>
        </div>
        
        <!-- Contenido del modal -->
        <form id="resenaForm" method="POST" class="p-6">
            @csrf
            <input type="hidden" name="propiedad_id" id="modalPropiedadId">
            <input type="hidden" name="_method" id="formMethod" value="POST">
            <input type="hidden" name="resena_id" id="resenaId">
            
            <!-- Campo de comentario -->
            <div class="mb-6">
                <label for="modalComentario" class="block text-sm font-medium text-black mb-2">
                    <i class="fas fa-comment mr-2"></i>
                    Comentario:
                </label>
                <textarea 
                    name="comentario" 
                    id="modalComentario" 
                    required
                    rows="4"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-gray-500 focus:border-gray-500 transition-all resize-none"
                    placeholder="Comparte tu experiencia con esta propiedad..."
                ></textarea>
            </div>
            
            <!-- Campo de calificación -->
            <div class="mb-6">
                <label for="modalCalificacion" class="block text-sm font-medium text-black mb-2">
                    <i class="fas fa-star mr-2"></i>
                    Calificación:
                </label>
                <select 
                    name="calificacion" 
                    id="modalCalificacion"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-gray-500 focus:border-gray-500 transition-all"
                    required
                >
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">
                            {{ $i }} estrella{{ $i > 1 ? 's' : '' }}
                            @for ($j = 0; $j < $i; $j++) ⭐ @endfor
                        </option>
                    @endfor
                </select>
            </div>
            
            <!-- Botones de acción -->
            <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                <div>
                    <button 
                        type="button" 
                        id="deleteResenaBtn"
                        class="hidden inline-flex items-center bg-red-50 hover:bg-red-100 text-red-700 px-4 py-2 rounded-lg font-medium transition-all duration-200 hover:shadow-md border border-red-200"
                    >
                        <i class="fas fa-trash mr-2"></i>
                        Eliminar Reseña
                    </button>
                </div>
                <div class="flex space-x-3">
                    <button 
                        type="button" 
                        onclick="closeModal()"
                        class="bg-white hover:bg-gray-50 text-gray-800 font-medium px-4 py-2 rounded-lg border-2 border-gray-300 transition-all duration-200 hover:shadow-md"
                    >
                        Cancelar
                    </button>
                    <button 
                        type="submit"
                        class="bg-gradient-to-r from-gray-900 to-black hover:from-black hover:to-gray-800 text-white font-bold px-6 py-2 rounded-lg transition-all transform hover:scale-105 shadow-sm hover:shadow-md"
                    >
                        <i class="fas fa-save mr-2"></i>
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Font Awesome --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<script>
    function openModal(reservaId, tieneResena, resenaId, comentario, calificacion) {
        const modal = document.getElementById('resenaModal');
        const form = document.getElementById('resenaForm');
        const deleteBtn = document.getElementById('deleteResenaBtn');
        const title = document.getElementById('modalTitle');
        
        // Obtener propiedad_id de la reserva
        const propiedadId = document.querySelector(`tr[data-reserva-id="${reservaId}"]`).dataset.propiedadId;
        
        // Configurar el formulario
        document.getElementById('modalPropiedadId').value = propiedadId;
        document.getElementById('modalComentario').value = comentario || '';
        document.getElementById('modalCalificacion').value = calificacion || 5;
        
        if (tieneResena) {
            // Modo edición
            title.innerHTML = '<i class="fas fa-edit mr-3"></i>Editar Reseña';
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
            title.innerHTML = '<i class="fas fa-star mr-3"></i>Dejar Reseña';
            document.getElementById('formMethod').value = 'POST';
            form.action = '/resenas';
            deleteBtn.classList.add('hidden');
        }
        
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        document.getElementById('resenaModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Cerrar modal al hacer clic fuera del contenido
    document.getElementById('resenaModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>
@endsection
