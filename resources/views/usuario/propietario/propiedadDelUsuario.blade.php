@extends('navegacion.plantillaU')

@section('title', 'Mis Espacios Publicados')

@section('sidebar')
    <ul class="space-y-3 text-sm text-gray-700">
        <li>
            <a href="{{ route('propietario.dashboard') }}" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Conoce más</span>
            </a>
        </li>
        <li>
            <a href="{{ route('propiedad.listarPropiedadUsuario') }}" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                <span>Mis espacios</span>
            </a>
        </li>
        <li>
            <a href="{{ route('propietario.solicitudes') }}" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <span>Solicitudes de reserva</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Información adicional</span>
            </a>
        </li>
    </ul>
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <!-- ENCABEZADO CON BOTÓN -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
        <div>
            <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                Mis espacios publicados
            </h1>
            <p class="mt-2 text-gray-600">Administra, edita y da seguimiento a tus propiedades en un solo lugar.</p>
        </div>
        <a href="{{route('propieadades.crear')}}" class="mt-4 sm:mt-0 inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Agregar nuevo espacio
        </a>
    </div>

    <!-- LISTADO DE PROPIEDADES -->
    @if($propiedades->isEmpty())
        <div class="text-center py-20">
            <svg class="w-24 h-24 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
            </svg>
            <h3 class="mt-4 text-2xl font-bold text-gray-700">Aún no tienes espacios publicados</h3>
            <p class="mt-2 text-gray-500">Comienza a generar ingresos compartiendo tu propiedad.</p>
            <a href="#" class="mt-6 inline-flex items-center px-5 py-2.5 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition">
                Publicar mi primer espacio
            </a>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($propiedades as $propiedad)
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col">
                    <!-- Mini-galería de imágenes -->
                    <div class="relative h-52 bg-gray-200">
                        @if($propiedad->imagenes->isNotEmpty())
  <div class="swiper mySwiper-{{ $propiedad->id }}">
                <div class="swiper-wrapper">
                    @foreach ($propiedad->imagenes as $imagen)
                        <div class="swiper-slide">
                            <img src="{{ asset($imagen->ruta) }}"
                                 alt="Imagen propiedad"
                                 class="w-full h-64 object-cover rounded-lg">
                        </div>
                    @endforeach
                </div>

                <!-- Controles -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        @endif
                        <!-- Badge de aprobación -->
                        @if($propiedad->aprobada)
                            <span class="absolute top-3 right-3 bg-green-100 text-green-800 px-2.5 py-1 text-xs font-semibold rounded-full">
                                Aprobado
                            </span>
                        @else
                            <span class="absolute top-3 right-3 bg-yellow-100 text-yellow-800 px-2.5 py-1 text-xs font-semibold rounded-full">
                                Pendiente
                            </span>
                        @endif
                    </div>

                    <!-- Datos principales -->
<div class="flex-1 p-5">
    <h3 class="text-lg font-bold text-gray-900 truncate" title="{{ $propiedad->titulo }}">
        {{ $propiedad->titulo }}
    </h3>
    <p class="mt-1 text-sm text-gray-600 line-clamp-2">
        {{ $propiedad->descripcion }}
    </p>

    <!-- Características rápidas -->
    <div class="mt-3 flex flex-wrap items-center gap-4 text-sm text-gray-500">
        <span class="flex items-center">
            <svg class="w-4 h-4 mr-1 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            {{ $propiedad->num_habitaciones }} hab
        </span>
        <span class="flex items-center">
            <svg class="w-4 h-4 mr-1 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8l-2-2m0 0l2-2m-2 2h12"/>
            </svg>
            {{ $propiedad->num_banos }} baños
        </span>
    </div>

    <!-- Dirección y Ciudad -->
    <div class="mt-2 text-sm text-gray-600">
        <p>
            <svg class="w-4 h-4 inline-block text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            {{ $propiedad->direccion }} - <span class="font-semibold">{{ $propiedad->ciudad }}</span>
        </p>
    </div>

    <!-- ✅ Servicios -->
    <div class="mt-3 flex flex-wrap gap-3 text-xs">
        @if($propiedad->wifi)
            <span class="flex items-center bg-indigo-50 text-indigo-700 px-2 py-1 rounded-full">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h.01M4.93 4.93a10.5 10.5 0 0114.14 0m-12.02 2.02a7.5 7.5 0 0110.6 0m-8.49 2.12a4.5 4.5 0 016.36 0"/>
                </svg>
                WiFi
            </span>
        @endif
        @if($propiedad->television)
            <span class="flex items-center bg-indigo-50 text-indigo-700 px-2 py-1 rounded-full">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 13h20M2 9h20M4 17h16l1 4H3l1-4z"/>
                </svg>
                TV
            </span>
        @endif
        @if($propiedad->aire_acondicionado)
            <span class="flex items-center bg-indigo-50 text-indigo-700 px-2 py-1 rounded-full">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 100 20 10 10 0 000-20zm-1 5h2m-2 4h2m-2 4h2"/>
                </svg>
                A/C
            </span>
        @endif
        @if($propiedad->servicios_basicos)
            <span class="flex items-center bg-indigo-50 text-indigo-700 px-2 py-1 rounded-full">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 000 2h1.6l2.1 9.74a1 1 0 00.98.76h9.64a1 1 0 00.98-.8l1.66-8.32H6"/>
                </svg>
                Servicios
            </span>
        @endif
    </div>
</div>


                    <!-- Botones de acción -->
                    <div class="border-t border-gray-100 p-4 flex items-center justify-between">
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">
                            Ver detalles
                        </a>
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('propietario.editarPropiedad', ['id' => $propiedad->id]) }}" title="Editar" class="p-2 text-gray-400 hover:text-indigo-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <button title="Eliminar" class="p-2 text-gray-400 hover:text-red-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    @endif
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @foreach ($propiedades as $propiedad)
        new Swiper(".mySwiper-{{ $propiedad->id }}", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        @endforeach
    });
</script>
@endsection