@extends('navegacion.plantillaU')

@section('title', 'Lista de Propiedades para alquilar')

@section('content')
    <div class="min-h-screen bg-white">
        <!-- Header -->
        <div class="border-b border-gray-200 bg-white sticky top-0 z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <h1 class="text-2xl font-semibold text-gray-900">Alojamientos en Tarija</h1>
                <p class="text-gray-600 mt-1">{{ count($propiedades) }} alojamientos</p>
            </div>
        </div>

        <!-- Filters Bar (Airbnb style) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex items-center space-x-4 overflow-x-auto pb-2">
                <button class="flex-shrink-0 px-4 py-2 border border-gray-300 rounded-full text-sm font-medium text-gray-700 hover:border-gray-400 transition-colors">
                    Precio
                </button>
                <button class="flex-shrink-0 px-4 py-2 border border-gray-300 rounded-full text-sm font-medium text-gray-700 hover:border-gray-400 transition-colors">
                    Habitaciones
                </button>
                <button class="flex-shrink-0 px-4 py-2 border border-gray-300 rounded-full text-sm font-medium text-gray-700 hover:border-gray-400 transition-colors">
                    Más filtros
                </button>
            </div>
        </div>

        <!-- Listings Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
            @if($propiedades->isEmpty())
                <div class="text-center py-20">
                    <div class="w-32 h-32 mx-auto mb-6 opacity-50">
                        <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#FF5A5F" d="M64 8C32.3 8 8 32.3 8 64s24.3 56 56 56 56-24.3 56-56S95.7 8 64 8zm0 96c-22.1 0-40-17.9-40-40s17.9-40 40-40 40 17.9 40 40-17.9 40-40 40z"/>
                            <path fill="#FF5A5F" d="M64 32c-8.8 0-16 7.2-16 16 0 12 16 32 16 32s16-20 16-32c0-8.8-7.2-16-16-16z"/>
                            <circle fill="white" cx="64" cy="48" r="8"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">No hay alojamientos disponibles</h3>
                    <p class="text-gray-500">Prueba ajustando tus filtros o fechas de búsqueda.</p>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6">
                    @foreach ($propiedades as $propiedad)
    <div class="group cursor-default">
        <!-- Imagen con Swiper Carousel -->
        <div class="relative aspect-square mb-3 overflow-hidden rounded-xl">
            @if ($propiedad->imagenes->isNotEmpty())
                <div class="swiper mySwiper rounded-xl">
                    <div class="swiper-wrapper">
                        @foreach ($propiedad->imagenes as $imagen)
                            <div class="swiper-slide">
                                <img src="{{ asset($imagen->ruta) }}" alt="Imagen propiedad" class="w-full h-full object-cover">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            @else
                <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                    <div class="text-center text-gray-400">
                        <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-xs">Imagen no disponible</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Info Propiedad -->
        <div class="space-y-1">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-900 truncate">{{ $propiedad->direccion }}</h3>
               @if($propiedad->promedio_resenas)
    <div class="flex items-center space-x-1 flex-shrink-0 ml-2">
        <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
        </svg>
        <span class="text-sm text-gray-700">{{ number_format($propiedad->promedio_resenas, 1) }}</span>
    </div>
    <div class="flex items-center justify-between">
        <span class="text-sm text-gray-700">
            {{ $propiedad->ciudad }}
        </span>
    </div>
    <div class="flex items-center justify-between">
        <span class="text-sm text-gray-700">
            {{ $propiedad->wifi ? 'Wi-Fi' : 'No Wi-Fi' }}
        </span>
    </div>
    <div class="flex items-center justify-between">
        <span class="text-sm text-gray-700">
            {{ $propiedad->television ? 'Televisión' : 'No Television' }}
        </span>
    </div>
    <div class="flex items-center justify-between">
        <span class="text-sm text-gray-700">
            {{ $propiedad->aire_acondicionado ? 'Aire Acondicionado' : 'No Aire Acondicionado' }}
        </span>
    </div>
    <div class="flex items-center justify-between">
        <span class="text-sm text-gray-700">
            {{ $propiedad->servicios_basicos ? 'Servicios Básicos' : 'No Servicios Básicos' }}
        </span>
    </div>
@endif

            </div>

            <p class="text-sm text-gray-600 line-clamp-1">{{ $propiedad->titulo }}</p>

            <p class="text-sm text-gray-600">
                {{ $propiedad->num_habitaciones }} habitación{{ $propiedad->num_habitaciones != 1 ? 'es' : '' }} · 
                {{ $propiedad->num_banos }} baño{{ $propiedad->num_banos != 1 ? 's' : '' }}
            </p>

            <p class="text-sm text-gray-600">Disponible todo el año</p>

            <div class="flex items-baseline space-x-1 pt-1">
                <span class="text-base font-semibold text-gray-900">${{ number_format($propiedad->precio_dia, 0, ',', '.') }}</span>
                <span class="text-sm text-gray-600">/ noche</span>
            </div>

            

            <!-- Botón de Reservar -->
            <div class="pt-2">
                 <a href="{{ route('reserva.formulario', ['propiedad_id' => $propiedad->id]) }}">Reservar</a>

            </div>
        </div>
    </div>
@endforeach

                </div>

                <!-- Load More Button (Airbnb style) -->
                <div class="text-center mt-12">
                    <button class="px-6 py-3 bg-gray-900 text-white rounded-lg font-medium hover:bg-gray-800 transition-colors">
                        Mostrar más alojamientos
                    </button>
                </div>
            @endif
        </div>

        <!-- Modal for Property Details (hidden by default) -->
        <div id="propertyModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
            <div class="bg-white rounded-xl max-w-md w-full p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold">Confirmar Reserva</h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div id="modalContent" class="space-y-4">
                    <!-- Content will be populated by JavaScript -->
                </div>
                <div class="flex space-x-3 mt-6">
                    <button onclick="closeModal()" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                        Cancelar
                    </button>
                    <button id="confirmReserve" class="flex-1 px-4 py-2 bg-[#FF5A5F] text-white rounded-lg hover:bg-[#E00007]">
                        Reservar
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

        /* Airbnb-like hover effects */
        .group:hover .aspect-square > div {
            transform: scale(1.05);
        }

        /* Smooth transitions for all interactive elements */
        * {
            transition-property: transform, opacity, background-color, border-color;
            transition-duration: 200ms;
            transition-timing-function: ease-in-out;
        }

        /* Modal animations */
        #propertyModal.show {
            display: flex !important;
            animation: fadeIn 0.2s ease-out;
        }

        #propertyModal.show > div {
            animation: slideIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Custom scrollbar for horizontal filters */
        .overflow-x-auto::-webkit-scrollbar {
            height: 4px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 2px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 2px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
@endpush

@push('scripts')
    <script>
        let currentPropertyId = null;

        function reservarPropiedad(id) {
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
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-900">${property.titulo}</h4>
                            <p class="text-sm text-gray-600">${property.direccion}</p>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg p-4 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Habitaciones:</span>
                            <span class="font-medium">${property.num_habitaciones}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Baños:</span>
                            <span class="font-medium">${property.num_banos}</span>
                        </div>
                        <hr class="border-gray-200">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Precio por noche:</span>
                            <span class="font-semibold">$${property.precio_dia.toLocaleString()}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Precio mensual:</span>
                            <span class="font-semibold">$${property.precio_mensual.toLocaleString()}</span>
                        </div>
                    </div>

                    <p class="text-xs text-gray-500 leading-relaxed">${property.descripcion}</p>
                </div>
            `;

            // Update confirm button
            const confirmBtn = document.getElementById('confirmReserve');
            confirmBtn.onclick = () => confirmReservation(id);

            // Show modal
            const modal = document.getElementById('propertyModal');
            modal.classList.add('show');
            modal.classList.remove('hidden');
        }

        function confirmReservation(id) {
            // Here you would typically send the reservation to your backend
            alert(`¡Reserva confirmada para la propiedad ID: ${id}!`);
            console.log('Reserving property:', id);
            
            // Close modal
            closeModal();
            
            // You can redirect to a reservation page or show a success message
            // window.location.href = `/reservar/${id}`;
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

        // Simulate loading more listings
        document.querySelector('button:contains("Mostrar más")') && 
        document.querySelector('button').addEventListener('click', function() {
            this.textContent = 'Cargando...';
            this.disabled = true;
            
            setTimeout(() => {
                this.textContent = 'Mostrar más alojamientos';
                this.disabled = false;
            }, 1500);
        });
    </script>
@endpush