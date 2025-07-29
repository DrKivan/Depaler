@extends('navegacion.plantillaU')

@section('title', 'Reservar propiedad')

@section('content')
<div class="bg-gray-100 min-h-screen py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header mejorado -->
        <div class="mb-8">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="text-gray-600 hover:text-black transition-colors">
                            <i class="fas fa-home mr-2"></i>Inicio
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-black font-medium">Reservar Propiedad</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-black mb-2">
                Reservar: {{ $propiedad->titulo }}
            </h2>
            <div class="flex items-center text-gray-700">
                <i class="fas fa-map-marker-alt text-black mr-2"></i>
                <span>{{ $propiedad->ciudad }}, {{ $propiedad->direccion }}</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Columna principal -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Carrusel mejorado -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        @if ($propiedad->imagenes->isNotEmpty())
                            <div class="swiper mySwiper h-full">
                                <div class="swiper-wrapper">
                                    @foreach ($propiedad->imagenes as $imagen)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($imagen->ruta) }}" alt="Imagen propiedad" class="w-full h-full object-cover">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next !text-white !bg-black/70 !w-12 !h-12 !rounded-full after:!text-lg hover:!bg-black/90 transition-all shadow-lg"></div>
                                <div class="swiper-button-prev !text-white !bg-black/70 !w-12 !h-12 !rounded-full after:!text-lg hover:!bg-black/90 transition-all shadow-lg"></div>
                                <div class="swiper-pagination !bottom-4"></div>
                            </div>
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-gray-50 to-gray-200 flex items-center justify-center">
                                <div class="text-center text-gray-500">
                                    <svg class="w-20 h-20 mx-auto mb-3 opacity-50" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-sm font-medium">Imagen no disponible</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Detalles de la propiedad mejorados -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-8">
                    <h3 class="text-2xl font-serif font-bold text-black mb-6 flex items-center border-b border-gray-200 pb-4">
                        <i class="fas fa-info-circle text-black mr-3 bg-gray-100 p-2 rounded-full"></i>
                        Detalles de la propiedad
                    </h3>
                    
                    <div class="prose max-w-none text-gray-800 mb-8">
                        <p class="text-lg leading-relaxed"><strong>Descripción:</strong> {{ $propiedad->descripcion }}</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="space-y-4">
                            <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                                <div class="w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center mr-4">
                                    <i class="fas fa-city text-black"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-black">Ciudad</p>
                                    <p class="text-gray-700">{{ $propiedad->ciudad }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                                <div class="w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-black"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-black">Dirección</p>
                                    <p class="text-gray-700">{{ $propiedad->direccion }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                                <div class="w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center mr-4">
                                    <i class="fas fa-bed text-black"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-black">Habitaciones</p>
                                    <p class="text-gray-700">{{ $propiedad->num_habitaciones }} habitaciones</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                                <div class="w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center mr-4">
                                    <i class="fas fa-bath text-black"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-black">Baños</p>
                                    <p class="text-gray-700">{{ $propiedad->num_banos }} baños</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                                <div class="w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center mr-4">
                                    <i class="fas fa-user text-black"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-black">Propietario</p>
                                    <p class="text-gray-700">{{ $propiedad->usuario->nombre ?? 'No disponible' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicios y comodidades mejorados -->
                    <div class="border-t border-gray-200 pt-6">
                        <h4 class="text-xl font-medium text-black mb-4 flex items-center">
                            <i class="fas fa-concierge-bell text-black mr-2 bg-gray-100 p-2 rounded-full"></i>
                            Servicios y Comodidades
                        </h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @if($propiedad->wifi)
                                <div class="flex items-center bg-white border border-gray-200 rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow">
                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-wifi text-black"></i>
                                    </div>
                                    <span class="text-gray-800 font-medium">Wi-Fi</span>
                                </div>
                            @endif
                            
                            @if($propiedad->television)
                                <div class="flex items-center bg-white border border-gray-200 rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow">
                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-tv text-black"></i>
                                    </div>
                                    <span class="text-gray-800 font-medium">Televisión</span>
                                </div>
                            @endif
                            
                            @if($propiedad->aire_acondicionado)
                                <div class="flex items-center bg-white border border-gray-200 rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow">
                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-snowflake text-black"></i>
                                    </div>
                                    <span class="text-gray-800 font-medium">A/C</span>
                                </div>
                            @endif
                            
                            @if($propiedad->servicios_basicos)
                                <div class="flex items-center bg-white border border-gray-200 rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow">
                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-check text-black"></i>
                                    </div>
                                    <span class="text-gray-800 font-medium">Servicios</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Información del ofertante mejorada -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-8">
                    <h3 class="text-2xl font-serif font-bold text-black mb-6 flex items-center border-b border-gray-200 pb-4">
                        <i class="fas fa-user-circle text-black mr-3 bg-gray-100 p-2 rounded-full"></i>
                        Información del ofertante
                    </h3>
                    
                    <div class="flex flex-col md:flex-row items-center md:items-start gap-6 mb-6">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-200 shadow-lg flex-shrink-0">
                            @if (!empty($propiedad->usuario->foto_perfil))
                                <img src="{{ asset('/' . $propiedad->usuario->foto_perfil) }}" alt="Foto de perfil" class="w-full h-full object-cover">
                            @else
                                <img src="{{ asset('fotos_perfil/default.png') }}" alt="Foto por defecto" class="w-full h-full object-cover">
                            @endif
                        </div>
                        
                        <div class="flex-1">
                            <h4 class="text-xl font-medium text-black mb-4">{{ $propiedad->usuario->nombre ?? 'No disponible' }}</h4>
                            
                            <div class="space-y-3 text-gray-800">
                                <div class="flex items-center bg-gray-50 rounded-lg p-3">
                                    <i class="fas fa-map-marker-alt text-black w-5 mr-3"></i>
                                    <span>{{ $propiedad->usuario->direccion ?? 'No disponible' }}</span>
                                </div>
                                <div class="flex items-center bg-gray-50 rounded-lg p-3">
                                    <i class="fas fa-phone text-black w-5 mr-3"></i>
                                    <span>{{ $propiedad->usuario->telefono ?? 'No disponible' }}</span>
                                </div>
                                <div class="flex items-center bg-gray-50 rounded-lg p-3">
                                    <i class="fas fa-envelope text-black w-5 mr-3"></i>
                                    <span>{{ $propiedad->usuario->email ?? 'No disponible' }}</span>
                                </div>
                                <div class="flex items-center bg-gray-50 rounded-lg p-3 text-sm text-gray-600">
                                    <i class="fas fa-id-card text-gray-500 w-5 mr-3"></i>
                                    <span>ID usuario: {{ $propiedad->usuario->id ?? 'N/A' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-3 pt-4 border-t border-gray-200">
                        <button
                            onclick="abrirModal('propiedad')"
                            class="inline-flex items-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-medium transition-all duration-200 hover:shadow-md border border-gray-300">
                            <i class="fas fa-flag mr-2"></i>
                            Denunciar propiedad
                        </button>
                        <button
                            onclick="abrirModal('usuario')"
                            class="inline-flex items-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-medium transition-all duration-200 hover:shadow-md border border-gray-300">
                            <i class="fas fa-user-shield mr-2"></i>
                            Denunciar ofertante
                        </button>
                    </div>
                </div>

                <!-- Reseñas mejoradas -->
                @if($resenas->count())
                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-8">
                    <h3 class="text-2xl font-serif font-bold text-black mb-6 flex items-center border-b border-gray-200 pb-4">
                        <i class="fas fa-comment-alt text-black mr-3 bg-gray-100 p-2 rounded-full"></i>
                        Últimas Reseñas
                    </h3>
                    
                    <div class="space-y-6">
                        @foreach ($resenas as $resena)
                            <div class="border-b border-gray-100 pb-6 last:border-0 last:pb-0">
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden flex-shrink-0 shadow-sm">
                                        <img src="{{ asset('/' . ($resena->usuario->foto_perfil ?? 'default.png')) }}" alt="Usuario" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-2">
                                            <h4 class="font-semibold text-black">{{ $resena->usuario->nombre ?? 'Usuario desconocido' }}</h4>
                                            <div class="flex items-center bg-gray-100 rounded-full px-3 py-1">
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if ($i < $resena->calificacion)
                                                        <i class="fas fa-star text-black text-sm"></i>
                                                    @else
                                                        <i class="far fa-star text-gray-400 text-sm"></i>
                                                    @endif
                                                @endfor
                                                <span class="ml-2 text-sm text-gray-700 font-medium">{{ $resena->calificacion }}/5</span>
                                            </div>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed bg-gray-50 rounded-lg p-3">{{ $resena->comentario }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Columna lateral: Formulario de reserva -->
            <div class="lg:col-span-1">
                <div class="sticky top-6">
                    <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-gray-900 to-black p-6 text-white">
                            <h3 class="text-xl font-bold mb-2 flex items-center">
                                <i class="fas fa-calendar-check mr-2"></i>
                                Reserva esta propiedad
                            </h3>
                            <div class="flex items-center">
                                <span class="text-3xl font-bold">${{ number_format($propiedad->precio_dia, 0, ',', '.') }}</span>
                                <span class="ml-2 text-gray-300">por noche</span>
                            </div>
                        </div>
                        
                        <form action="{{ route('reserva.resumen') }}" method="POST" class="p-6 space-y-5">
                            @csrf
                            <input type="hidden" name="propiedad_id" value="{{ $propiedad->id }}">
                            
                            <div>
                                <label class="block text-sm font-medium text-black mb-2">Fecha inicio:</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="far fa-calendar-alt text-gray-500"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        id="fecha_inicio"
                                        name="fecha_inicio" 
                                        class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 transition-all shadow-sm"
                                    >
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-black mb-2">Fecha fin:</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="far fa-calendar-alt text-gray-500"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        id="fecha_fin"
                                        name="fecha_fin" 
                                        class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 transition-all shadow-sm"
                                    >
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-800 font-medium">Precio por noche:</span>
                                    <span class="text-2xl font-bold text-black">${{ number_format($propiedad->precio_dia, 0, ',', '.') }}</span>
                                </div>
                            </div>
                            
                            <button 
                                type="submit" 
                                class="w-full bg-gradient-to-r from-gray-900 to-black hover:from-black hover:to-gray-800 text-white font-bold py-4 px-6 rounded-lg transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 shadow-lg hover:shadow-xl"
                            >
                                <i class="fas fa-check-circle mr-2"></i>
                                Confirmar Reserva
                            </button>
                        </form>
                        
                        @if ($errors->has('fecha_inicio'))
                            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mx-6 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-exclamation-circle"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm">{{ $errors->first('fecha_inicio') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Información de seguridad -->
                    <div class="mt-6 bg-white rounded-2xl shadow-xl border border-gray-200 p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3 shadow-sm">
                                <i class="fas fa-shield-alt text-black"></i>
                            </div>
                            <h4 class="text-lg font-medium text-black">Reserva segura</h4>
                        </div>
                        <p class="text-gray-700 text-sm">Tu información está protegida. Todas las reservas están cubiertas por nuestra política de protección.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Denuncia mejorado -->
<div id="modalDenuncia" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl relative transform transition-all border border-gray-200">
        <button onclick="cerrarModal()" class="absolute top-4 right-4 text-gray-500 hover:text-black focus:outline-none transition-colors">
            <i class="fas fa-times text-xl"></i>
        </button>
        
        <div class="p-8">
            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 shadow-sm">
                    <i class="fas fa-flag text-black text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-black">Enviar denuncia</h2>
                <p class="text-gray-600 mt-2">Ayúdanos a mantener la comunidad segura</p>
            </div>
            
            <form action="{{ route('denuncias.store') }}" method="POST">
                @csrf
                <input type="hidden" id="inputReportado" name="reportado_id">
                <input type="hidden" id="inputPropiedad" name="propiedad_id">
                
                <div class="mb-6">
                    <label for="motivo" class="block text-sm font-medium text-black mb-2">Motivo de la denuncia:</label>
                    <textarea 
                        name="motivo" 
                        id="motivo" 
                        required 
                        rows="4"
                        placeholder="Describe detalladamente el motivo de tu denuncia..."
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-gray-500 focus:border-gray-500 transition-all resize-none shadow-sm"
                    ></textarea>
                </div>
                
                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-gray-800 to-black hover:from-black hover:to-gray-700 text-white font-bold py-3 px-4 rounded-lg transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 shadow-lg"
                >
                    <i class="fas fa-paper-plane mr-2"></i>
                    Enviar denuncia
                </button>
            </form>
        </div>
    </div>
</div>
{{-- Swiper JS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<style>

.flatpickr-day {
    color: #000 !important;
    font-weight: bold;
}


.flatpickr-day.disabled:not(.prevMonthDay):not(.nextMonthDay),
.flatpickr-day.flatpickr-disabled:not(.prevMonthDay):not(.nextMonthDay) {
    background-color: #ffcccc !important; 
    color: #a00000 !important;            
    font-weight: bold;
    opacity: 1 !important;
    cursor: not-allowed !important;
}


.flatpickr-day.prevMonthDay,
.flatpickr-day.nextMonthDay {
    background: none !important;
    color: #ccc !important;
    opacity: 0.4 !important;
    cursor: default !important;
}


.flatpickr-day.today {
    border: 2px solid #000 !important;
}


.flatpickr-day.selected {
    background: #007bff !important;
    color: #fff !important;
}


.flatpickr-months .flatpickr-month {
    background-color: #f0f0f0;
    color: #000;
    font-weight: bold;
}


.flatpickr-prev-month,
.flatpickr-next-month {
    color: #000 !important;
}
</style>



<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Idioma Español -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const fechasReservadas = @json($fechasReservadas); // ['2025-08-10', '2025-08-11', ...]

    const inicioPicker = flatpickr("#fecha_inicio", {
        locale: "es",
        dateFormat: "Y-m-d",
        minDate: "today",
        disable: fechasReservadas,
        onChange: function(selectedDates, dateStr, instance) {
            finPicker.set("minDate", dateStr);
        }
    });

    const finPicker = flatpickr("#fecha_fin", {
        locale: "es",
        dateFormat: "Y-m-d",
        minDate: "today",
        disable: fechasReservadas
    });
});
</script>
<script>
    // Inicializar Swiper con efectos mejorados
    new Swiper(".mySwiper", {
        loop: true,
        effect: "fade",
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });

    // Funciones del modal (sin cambios en funcionalidad)
    function abrirModal(tipo) {
        const modal = document.getElementById('modalDenuncia');
        const inputPropiedad = document.getElementById('inputPropiedad');
        const inputReportado = document.getElementById('inputReportado');
        
        if (tipo === 'propiedad') {
            inputPropiedad.value = '{{ $propiedad->id }}';
            inputReportado.value = '{{ $propiedad->usuario->id }}';
        } else if (tipo === 'usuario') {
            inputPropiedad.value = '';
            inputReportado.value = '{{ $propiedad->usuario->id }}';
        }
        
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    function cerrarModal() {
        document.getElementById('modalDenuncia').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>
@endsection
