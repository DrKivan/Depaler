@extends('navegacion.plantillaM')
@section('title', 'Solicitudes de Propiedades')
@section('content')

{{-- Tutorial Ético --}}
<div class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-500 p-6 mb-6 rounded-r-lg">
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                <span class="text-white font-bold text-sm">⚖️</span>
            </div>
        </div>
        <div class="ml-4">
            <h3 class="text-lg font-semibold text-black mb-2">Guía Ética para Moderación</h3>
            <div class="text-sm text-gray-800 space-y-2">
                <p><strong>Antes de tomar una decisión, considera:</strong></p>
                <ul class="list-disc list-inside space-y-1 ml-2">
                    <li>¿La propiedad cumple con los estándares de calidad y veracidad?</li>
                    <li>¿La información proporcionada es completa y precisa?</li>
                    <li>¿Las imágenes y descripción corresponden a la realidad?</li>
                    <li>¿El contenido respeta las políticas de la plataforma?</li>
                    <li>¿No contiene información discriminatoria o engañosa?</li>
                </ul>
                <p class="mt-3 font-medium text-black">
                    <span class="text-yellow-600">⚠️</span> Recuerda: Cada decisión impacta directamente en la experiencia de usuarios y propietarios.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
    <div class="px-6 py-6 border-b border-gray-200 bg-black">
        <h1 class="text-2xl font-bold text-white">Solicitudes de Propiedades</h1>
        <p class="text-gray-300 mt-1">Bienvenido, {{ session('usuario_nombre') }}</p>
    </div>
    
    <div class="divide-y divide-gray-200">
        @foreach ($propiedades as $propiedad)
        <div class="p-6 hover:bg-gray-50 transition-colors duration-200">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                {{-- Información Principal --}}
                <div class="lg:col-span-2">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-black mb-1">{{ $propiedad->titulo }}</h3>
                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                ID: {{ $propiedad->id }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        {{-- Descripción --}}
                        <div>
                            <h4 class="text-sm font-semibold text-black mb-2">📝 Descripción</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">{{ $propiedad->descripcion }}</p>
                        </div>
                        
                        {{-- Ubicación --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <h4 class="text-sm font-semibold text-black mb-1">📍 Dirección</h4>
                                <p class="text-gray-700 text-sm">{{ $propiedad->direccion }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-black mb-1">🏙️ Ciudad</h4>
                                <p class="text-gray-700 text-sm">{{ $propiedad->ciudad }}</p>
                            </div>
                        </div>
                        
                        {{-- Detalles de la Propiedad --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <h4 class="text-sm font-semibold text-black mb-1">💰 Precio por Día</h4>
                                <p class="text-gray-700 text-sm font-medium">${{ number_format($propiedad->precio_dia) }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-black mb-1">🛏️ Habitaciones</h4>
                                <p class="text-gray-700 text-sm">{{ $propiedad->num_habitaciones }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-black mb-1">🚿 Baños</h4>
                                <p class="text-gray-700 text-sm">{{ $propiedad->num_banos }}</p>
                            </div>
                        </div>
                        
                        {{-- Servicios y Amenidades --}}
                        <div>
                            <h4 class="text-sm font-semibold text-black mb-3">✨ Servicios y Amenidades</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <div class="flex items-center space-x-2">
                                    <span class="text-lg">📶</span>
                                    <span class="text-sm {{ $propiedad->wifi ? 'text-green-600 font-medium' : 'text-gray-400' }}">
                                        WiFi {{ $propiedad->wifi ? '✓' : '✗' }}
                                    </span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-lg">📺</span>
                                    <span class="text-sm {{ $propiedad->television ? 'text-green-600 font-medium' : 'text-gray-400' }}">
                                        TV {{ $propiedad->television ? '✓' : '✗' }}
                                    </span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-lg">❄️</span>
                                    <span class="text-sm {{ $propiedad->aire_acondicionado ? 'text-green-600 font-medium' : 'text-gray-400' }}">
                                        A/C {{ $propiedad->aire_acondicionado ? '✓' : '✗' }}
                                    </span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-lg">🔧</span>
                                    <span class="text-sm {{ $propiedad->servicios_basicos ? 'text-green-600 font-medium' : 'text-gray-400' }}">
                                        Servicios {{ $propiedad->servicios_basicos ? '✓' : '✗' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Imágenes --}}
                        @if($propiedad->imagenes && $propiedad->imagenes->count() > 0)
                        <div>
                            <h4 class="text-sm font-semibold text-black mb-3">🖼️ Imágenes ({{ $propiedad->imagenes->count() }})</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                @foreach($propiedad->imagenes->take(4) as $imagen)
                                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                                    <img src="{{ '../'.$imagen->ruta ?? '/placeholder.svg?height=100&width=100' }}" 
                                         alt="Imagen de propiedad" 
                                         class="w-full h-full object-cover">
                                </div>
                                @endforeach
                            </div>
                            @if($propiedad->imagenes->count() > 4)
                            <p class="text-xs text-gray-500 mt-2">+ {{ $propiedad->imagenes->count() - 4 }} imágenes más</p>
                            @endif
                        </div>
                        @else
                        <div>
                            <h4 class="text-sm font-semibold text-black mb-2">🖼️ Imágenes</h4>
                            <p class="text-gray-500 text-sm">No hay imágenes disponibles</p>
                        </div>
                        @endif
                        
                        {{-- Reseñas --}}
                        @if($propiedad->resenas && $propiedad->resenas->count() > 0)
                        <div>
                            <h4 class="text-sm font-semibold text-black mb-2">⭐ Reseñas</h4>
                            <p class="text-gray-700 text-sm">{{ $propiedad->resenas->count() }} reseña(s) disponible(s)</p>
                        </div>
                        @endif
                        
                        {{-- Fecha de creación --}}
                        <div>
                            <h4 class="text-sm font-semibold text-black mb-1">📅 Fecha de Solicitud</h4>
                            <p class="text-gray-700 text-sm">{{ $propiedad->created_at ? $propiedad->created_at->format('d/m/Y H:i') : 'No disponible' }}</p>
                        </div>
                    </div>
                </div>
                
                {{-- Información del Propietario y Acciones --}}
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 rounded-lg p-4 space-y-4">
                        {{-- Propietario --}}
                        <div>
                            <h4 class="text-sm font-semibold text-black mb-3">👤 Información del Propietario</h4>
                            @if($propiedad->usuario)
                                <div class="space-y-2">
                                    <div>
                                        <span class="text-xs text-gray-500">Nombre:</span>
                                        <p class="font-medium text-black">{{ $propiedad->usuario->nombre ?? 'Sin nombre' }}</p>
                                    </div>
                                    <div>
                                        <span class="text-xs text-gray-500">Email:</span>
                                        @if($propiedad->usuario->email)
                                            <p class="text-black text-sm">{{ $propiedad->usuario->email }}</p>
                                        @else
                                            <p class="text-red-600 text-sm font-medium">Sin email</p>
                                        @endif
                                    </div>
                                    <div>
                                        <span class="text-xs text-gray-500">ID Usuario:</span>
                                        <p class="text-gray-700 text-sm">{{ $propiedad->usuario->id }}</p>
                                    </div>
                                </div>
                            @else
                                <p class="text-red-600 text-sm font-medium">⚠️ Usuario no encontrado</p>
                            @endif
                        </div>
                        
                        {{-- Estado Actual --}}
                        <div class="pt-2 border-t border-gray-200">
                            <h4 class="text-sm font-semibold text-black mb-2">📊 Estado Actual</h4>
                            <div class="space-y-1">
                                <p class="text-xs text-gray-500">Estado: <span class="font-medium text-black">{{ $propiedad->estado ?? 'Pendiente' }}</span></p>
                                <p class="text-xs text-gray-500">Aprobada: 
                                    <span class="font-medium {{ $propiedad->aprobada ? 'text-green-600' : 'text-yellow-600' }}">
                                        {{ $propiedad->aprobada ? 'Sí' : 'Pendiente' }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        
                        {{-- Acciones --}}
                        <div class="pt-4 border-t border-gray-200">
                            <h4 class="text-sm font-semibold text-black mb-3">⚡ Acciones</h4>
                            <div class="space-y-2">
                                <form action="{{ route('propiedad.aprobar', $propiedad->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas APROBAR esta propiedad? Esta acción no se puede deshacer.')">
                                    @csrf
                                    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-3 px-4 rounded transition-colors duration-200 text-sm">
                                        ✓ Aprobar Propiedad
                                    </button>
                                </form>
                                <form action="{{ route('propiedad.rechazar', $propiedad->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas RECHAZAR esta propiedad? Esta acción no se puede deshacer.')">
                                    @csrf
                                    <button type="submit" class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-3 px-4 rounded transition-colors duration-200 text-sm">
                                        ✗ Rechazar Propiedad
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    @if($propiedades->isEmpty())
    <div class="px-6 py-12 text-center">
        <div class="text-gray-400 text-lg mb-2">📋</div>
        <p class="text-gray-600 font-medium">No hay solicitudes pendientes.</p>
    </div>
    @endif
</div>
@endsection
