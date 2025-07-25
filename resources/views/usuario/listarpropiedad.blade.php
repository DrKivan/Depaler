@extends('navegacion.plantillaU')

@section('title', 'Espacios Premium - ESPACIOS')

@section('content')
<div class="min-h-screen bg-gray-50 pt-0">
    <!-- Hero Section con contexto - Dark -->
    <section class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex items-center justify-center mb-6">
                    @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-amber-400 text-lg"></i>
                    @endfor
                </div>
                <h1 class="text-4xl md:text-6xl font-serif text-white mb-4">
                    ESPACIOS ÚNICOS
                    <span class="text-amber-400">EN TARIJA</span>
                </h1>
                <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Descubre {{ count($propiedades) }} espacios cuidadosamente seleccionados y verificados. 
                    Cada alojamiento ofrece una experiencia única con los más altos estándares de calidad.
                </p>
                
                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">{{ count($propiedades) }}+</div>
                        <div class="text-amber-400 font-medium">Espacios Disponibles</div>
                        <div class="text-gray-400 text-sm">Verificados y premium</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">4.8</div>
                        <div class="text-amber-400 font-medium">Calificación Promedio</div>
                        <div class="text-gray-400 text-sm">De nuestros huéspedes</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">24/7</div>
                        <div class="text-amber-400 font-medium">Soporte</div>
                        <div class="text-gray-400 text-sm">Atención personalizada</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filtros y búsqueda - Light -->
    <section class="bg-white border-b border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-serif text-gray-900 mb-2">Alojamientos Disponibles</h2>
                    <p class="text-gray-600">Encuentra el espacio perfecto para tu estadía</p>
                </div>
                
                <!-- Filtros rápidos -->
                <div class="flex flex-wrap gap-3">
                    <button class="px-4 py-2 bg-gray-900 text-white rounded-full text-sm font-medium hover:bg-gray-800 transition-colors">
                        <i class="fas fa-filter mr-2"></i>Todos
                    </button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition-colors">
                        <i class="fas fa-home mr-2"></i>Casas
                    </button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition-colors">
                        <i class="fas fa-building mr-2"></i>Apartamentos
                    </button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition-colors">
                        <i class="fas fa-star mr-2"></i>Premium
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Introducción - Light -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-serif text-gray-900 mb-4">Espacios Cuidadosamente Seleccionados</h3>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg leading-relaxed">
                    Cada propiedad ha sido verificada personalmente por nuestro equipo para garantizar 
                    que cumpla con nuestros estándares de calidad, limpieza y comodidad.
                </p>
            </div>
        </div>
    </section>

    <!-- Listings Grid - Light Background -->
    <section class="bg-gray-50 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($propiedades->isEmpty())
                <div class="text-center py-20">
                    <div class="w-32 h-32 mx-auto mb-8 bg-gradient-to-br from-gray-800 to-gray-900 rounded-full flex items-center justify-center">
                        <i class="fas fa-home text-white text-4xl"></i>
                    </div>
                    <h3 class="text-3xl font-serif text-gray-900 mb-4">No hay espacios disponibles</h3>
                    <p class="text-gray-600 text-lg mb-8">Prueba ajustando tus filtros o fechas de búsqueda.</p>
                    <div class="mt-8">
                        <a href="{{ route('usuario.inicioUsuario') }}" class="inline-flex items-center bg-gray-900 hover:bg-gray-800 text-white font-bold px-8 py-3 rounded-2xl transition-all transform hover:scale-105">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Volver al inicio
                        </a>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($propiedades as $propiedad)
                    <div class="group cursor-pointer bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                        <!-- Imagen con badges estilo referencia -->
                        <div class="relative h-64 overflow-hidden">
                            @if ($propiedad->imagenes->isNotEmpty())
                                <div class="swiper mySwiper h-full">
                                    <div class="swiper-wrapper">
                                        @foreach ($propiedad->imagenes as $imagen)
                                            <div class="swiper-slide">
                                                <img src="{{ asset($imagen->ruta) }}" alt="Imagen propiedad" class="w-full h-full object-cover">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next !text-white !bg-black/50 !rounded-full !w-8 !h-8 !mt-0 !top-1/2 !transform !-translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <div class="swiper-button-prev !text-white !bg-black/50 !rounded-full !w-8 !h-8 !mt-0 !top-1/2 !transform !-translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <div class="swiper-pagination !bottom-3"></div>
                                </div>
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                    <div class="text-center text-gray-500">
                                        <i class="fas fa-image text-4xl mb-2"></i>
                                        <p class="text-sm">Imagen no disponible</p>
                                    </div>
                                </div>
                            @endif
                            
                            <!-- Badges estilo referencia -->
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span class="bg-white/95 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                                    Premium
                                </span>
                                <span class="bg-white/95 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                                    Para Alquilar
                                </span>
                            </div>
                            
                            <!-- Time and views estilo referencia -->
                            <div class="absolute bottom-4 right-4 flex items-center gap-3 text-white text-sm">
                                <div class="flex items-center bg-black/50 backdrop-blur-sm rounded-full px-2 py-1">
                                    <i class="fas fa-clock mr-1"></i>
                                    <span>2 semanas</span>
                                </div>
                                <div class="flex items-center bg-black/50 backdrop-blur-sm rounded-full px-2 py-1">
                                    <i class="fas fa-eye mr-1"></i>
                                    <span>{{ rand(100, 999) }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Content estilo referencia -->
                        <div class="p-6">
                            <!-- Agent info estilo referencia -->
                            <div class="flex items-center mb-3">
                                <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                <span class="text-sm text-gray-600">Por <strong>ESPACIOS Team</strong></span>
                            </div>

                            <!-- Title and location -->
                            <h3 class="text-xl font-bold text-gray-900 mb-1 line-clamp-1">{{ $propiedad->titulo }}</h3>
                            <p class="text-gray-600 mb-4">{{ $propiedad->direccion }}, {{ $propiedad->ciudad }}</p>

                            <!-- Price estilo referencia -->
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Desde</span>
                                <div class="text-2xl font-bold text-gray-900">${{ number_format($propiedad->precio_dia, 0, ',', '.') }}</div>
                            </div>

                            <!-- Features estilo referencia -->
                            <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                <div class="flex items-center">
                                    <i class="fas fa-bed mr-1"></i>
                                    <span>{{ $propiedad->num_habitaciones }}</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-bath mr-1"></i>
                                    <span>{{ $propiedad->num_banos }}</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-expand-arrows-alt mr-1"></i>
                                    <span>{{ rand(50, 200) }}m²</span>
                                </div>
                            </div>

                            <!-- Rating estilo referencia -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    @if($propiedad->promedio_resenas)
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star {{ $i <= $propiedad->promedio_resenas ? 'text-amber-400' : 'text-gray-300' }} text-sm"></i>
                                        @endfor
                                        <span class="ml-2 text-sm text-gray-600">({{ number_format($propiedad->promedio_resenas, 1) }})</span>
                                    @else
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star text-gray-300 text-sm"></i>
                                        @endfor
                                        <span class="ml-2 text-sm text-gray-600">Nuevo</span>
                                    @endif
                                </div>
                                
                                <!-- Action buttons -->
                                <div class="flex gap-2">
                                    <button onclick="verDetalles({{ $propiedad->id }})" class="p-2 text-gray-400 hover:text-gray-600 transition-colors">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="{{ route('reserva.formulario', ['propiedad_id' => $propiedad->id]) }}" class="p-2 text-gray-400 hover:text-amber-500 transition-colors">
                                        <i class="fas fa-calendar-check"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Load More Section - Dark -->
                <div class="mt-16 bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-12 text-center">
                    <div class="mb-8">
                        <h4 class="text-3xl font-serif text-white mb-4">¿No encuentras lo que buscas?</h4>
                        <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                            Nuestro equipo está constantemente agregando nuevos espacios. 
                            Regístrate para recibir notificaciones de nuevas propiedades.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="inline-flex items-center bg-white text-gray-900 hover:bg-gray-100 font-bold px-8 py-4 rounded-2xl text-lg transition-all transform hover:scale-105">
                            <i class="fas fa-plus mr-3"></i>
                            Mostrar más espacios
                        </button>
                        <button class="inline-flex items-center border-2 border-white text-white hover:bg-white hover:text-gray-900 font-bold px-8 py-4 rounded-2xl text-lg transition-all transform hover:scale-105">
                            <i class="fas fa-bell mr-3"></i>
                            Notificarme
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Modal Premium para Detalles -->
    <div id="propertyModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-2xl w-full shadow-2xl">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-6 rounded-t-3xl">
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-serif text-white">Detalles del Espacio</h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Content -->
            <div id="modalContent" class="p-8">
                <!-- Content will be populated by JavaScript -->
            </div>

            <!-- Modal Footer -->
            <div class="flex space-x-4 p-8 pt-0">
                <button onclick="closeModal()" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-4 rounded-xl transition-colors text-lg">
                    Cerrar
                </button>
                <button id="confirmReserve" class="flex-1 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold py-4 rounded-xl transition-all text-lg">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Reservar Ahora
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .line-clamp-1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Swiper customization */
    .swiper-pagination-bullet {
        background: rgba(255, 255, 255, 0.5) !important;
        opacity: 1 !important;
        width: 8px !important;
        height: 8px !important;
    }
    
    .swiper-pagination-bullet-active {
        background: white !important;
    }

    /* Card hover effects */
    .group:hover {
        transform: translateY(-4px);
    }

    /* Modal animations */
    #propertyModal.show {
        display: flex !important;
        animation: fadeIn 0.3s ease-out;
    }

    #propertyModal.show > div {
        animation: slideIn 0.4s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(30px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Swiper button customization */
    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 14px !important;
    }
</style>
@endpush

@push('scripts')
<script>
    let currentPropertyId = null;

    function verDetalles(id) {
        currentPropertyId = id;
        
        // Find the property data
        const properties = @json($propiedades);
        const property = properties.find(p => p.id === id);
        
        if (!property) {
            alert('Propiedad no encontrada');
            return;
        }

        // Populate modal content
        const modalContent = document.getElementById('modalContent');
        modalContent.innerHTML = `
            <div class="space-y-6">
                <!-- Property Header -->
                <div class="text-center border-b border-gray-200 pb-6">
                    <div class="w-20 h-20 bg-gradient-to-r from-gray-800 to-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-serif text-gray-900 mb-2">${property.titulo}</h4>
                    <div class="flex items-center justify-center text-gray-600">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span class="font-medium">${property.direccion}, ${property.ciudad}</span>
                    </div>
                </div>

                <!-- Property Details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 rounded-2xl p-6">
                        <h5 class="font-serif text-lg text-gray-900 mb-4">Características</h5>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <i class="fas fa-bed text-gray-500 w-5 mr-3"></i>
                                    <span class="text-gray-700">Habitaciones</span>
                                </div>
                                <span class="font-semibold text-gray-900">${property.num_habitaciones}</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <i class="fas fa-bath text-gray-500 w-5 mr-3"></i>
                                    <span class="text-gray-700">Baños</span>
                                </div>
                                <span class="font-semibold text-gray-900">${property.num_banos}</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-6">
                        <h5 class="font-serif text-lg text-gray-900 mb-4">Precios</h5>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-700">Por noche</span>
                                <span class="text-2xl font-bold text-gray-900">$${property.precio_dia.toLocaleString()}</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-700">Por mes</span>
                                <span class="text-xl font-semibold text-amber-600">$${property.precio_mensual.toLocaleString()}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-2xl p-6">
                    <h5 class="font-serif text-lg text-gray-900 mb-3">Descripción</h5>
                    <p class="text-gray-700 leading-relaxed">${property.descripcion}</p>
                </div>

                <!-- Amenities -->
                <div>
                    <h5 class="font-serif text-lg text-gray-900 mb-4">Servicios Incluidos</h5>
                    <div class="grid grid-cols-2 gap-3">
                        ${property.wifi ? '<div class="flex items-center bg-green-50 text-green-700 px-4 py-2 rounded-xl"><i class="fas fa-wifi mr-2"></i><span>Wi-Fi Gratis</span></div>' : ''}
                        ${property.television ? '<div class="flex items-center bg-green-50 text-green-700 px-4 py-2 rounded-xl"><i class="fas fa-tv mr-2"></i><span>Televisión</span></div>' : ''}
                        ${property.aire_acondicionado ? '<div class="flex items-center bg-green-50 text-green-700 px-4 py-2 rounded-xl"><i class="fas fa-snowflake mr-2"></i><span>Aire Acondicionado</span></div>' : ''}
                        ${property.servicios_basicos ? '<div class="flex items-center bg-green-50 text-green-700 px-4 py-2 rounded-xl"><i class="fas fa-check mr-2"></i><span>Servicios Básicos</span></div>' : ''}
                    </div>
                </div>
            </div>
        `;

        // Update confirm button
        const confirmBtn = document.getElementById('confirmReserve');
        confirmBtn.onclick = () => {
            window.location.href = `/reserva/formulario/${id}`;
        };

        // Show modal
        const modal = document.getElementById('propertyModal');
        modal.classList.add('show');
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('propertyModal');
        modal.classList.remove('show');
        modal.classList.add('hidden');
        currentPropertyId = null;
    }

    // Close modal when clicking outside
    document.getElementById('propertyModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

    // Initialize Swiper for all carousels
    document.addEventListener('DOMContentLoaded', function() {
        const swipers = document.querySelectorAll('.mySwiper');
        swipers.forEach(function(swiperEl) {
            new Swiper(swiperEl, {
                loop: true,
                pagination: {
                    el: swiperEl.querySelector('.swiper-pagination'),
                    clickable: true,
                },
                navigation: {
                    nextEl: swiperEl.querySelector('.swiper-button-next'),
                    prevEl: swiperEl.querySelector('.swiper-button-prev'),
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });
        });
    });
</script>
@endpush
