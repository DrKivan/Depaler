@extends('navegacion.plantillaU')

@section('title', 'Mis Espacios Publicados')

@section('sidebar')
    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
        <div class="mb-6">
            <h3 class="text-lg font-bold text-black mb-2">Panel de Propietario</h3>
            <p class="text-sm text-gray-600">Gestiona tus propiedades</p>
        </div>
        
        <nav class="space-y-2">
            <a href="{{route('propietario.dashboard')}}" class="group flex items-center space-x-3 p-3 rounded-xl hover:bg-gray-50 transition-all duration-200 border border-transparent hover:border-gray-200">
                <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <div>
                    <span class="font-medium text-black group-hover:text-black">Dashboard</span>
                    <p class="text-xs text-gray-500">Resumen general</p>
                </div>
            </a>

            <a href="{{route('propiedad.listarPropiedadUsuario')}}" class="group flex items-center space-x-3 p-3 rounded-xl bg-gray-50 border border-gray-200">
                <div class="w-10 h-10 bg-black rounded-lg flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div>
                    <span class="font-medium text-black">Mis Propiedades</span>
                    <p class="text-xs text-gray-500">Ver y editar</p>
                </div>
            </a>

            <a href="{{route('propietario.solicitudes')}}" class="group flex items-center space-x-3 p-3 rounded-xl hover:bg-gray-50 transition-all duration-200 border border-transparent hover:border-gray-200">
                <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <div>
                    <span class="font-medium text-black group-hover:text-black">Solicitudes</span>
                    <p class="text-xs text-gray-500">Gestionar reservas</p>
                </div>
            </a>

            <a href="#" class="group flex items-center space-x-3 p-3 rounded-xl hover:bg-gray-50 transition-all duration-200 border border-transparent hover:border-gray-200">
                <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <span class="font-medium text-black group-hover:text-black">Ayuda</span>
                    <p class="text-xs text-gray-500">Soporte y guías</p>
                </div>
            </a>
        </nav>

        <div class="mt-6 pt-6 border-t border-gray-200">
            <div class="bg-gray-50 rounded-xl p-4">
                <div class="flex items-center mb-2">
                    <div class="w-8 h-8 bg-black rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 1 1 0 000 2H6a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2v-3a2 2 0 012-2h2a2 2 0 012 2v3a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a1 1 0 100-2h2a4 4 0 014 4v6a4 4 0 01-4 4H6a4 4 0 01-4-4V7a4 4 0 014-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <span class="font-medium text-black">¿Necesitas ayuda?</span>
                </div>
                <p class="text-sm text-gray-600 mb-3">Nuestro equipo está aquí para ayudarte</p>
                <button class="w-full bg-black text-white py-2 px-4 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors">
                    Contactar Soporte
                </button>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="bg-gradient-to-br from-gray-50 to-white min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header Section -->
        <div class="mb-12">
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{route('propietario.dashboard')}}" class="text-gray-600 hover:text-black transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-black font-medium">Mis Espacios Publicados</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-black mb-4">
                        Mis Espacios Publicados
                    </h1>
                    <p class="text-xl text-gray-600">
                        Administra, edita y da seguimiento a tus propiedades en un solo lugar
                    </p>
                </div>
                
                <!-- Stats and CTA -->
                <div class="flex flex-col sm:flex-row gap-4 items-center">
                    <!-- Stats Badge -->
                   
                    
                    <!-- CTA Button -->
                    <a href="{{route('propieadades.crear')}}" class="group bg-gradient-to-r from-gray-900 to-black hover:from-black hover:to-gray-800 text-white font-bold py-4 px-8 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center">
                        <svg class="w-5 h-5 mr-3 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Agregar Nuevo Espacio
                    </a>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        @if($propiedades->isEmpty())
            <!-- Empty State -->
            <div class="bg-white rounded-3xl shadow-xl border border-gray-200 p-16 text-center">
                <div class="max-w-md mx-auto">
                    <!-- Icon -->
                    <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-2xl font-bold text-black mb-4">
                        Aún no tienes espacios publicados
                    </h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Comienza a generar ingresos compartiendo tu propiedad con huéspedes verificados.
                    </p>
                    
                    <!-- Action Button -->
                    <a href="{{route('propieadades.crear')}}" class="inline-flex items-center bg-black text-white font-semibold py-3 px-6 rounded-xl hover:bg-gray-800 transition-all duration-300 transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Publicar mi primer espacio
                    </a>
                </div>
            </div>
        @else
            <!-- Properties Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                @foreach($propiedades as $propiedad)
                    <div class="group bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                        
                        <!-- Image Gallery -->
                        <div class="relative h-64 bg-gray-200 overflow-hidden">
                            @if($propiedad->imagenes->isNotEmpty())
                                <div class="swiper mySwiper-{{ $propiedad->id }} h-full">
                                    <div class="swiper-wrapper">
                                        @foreach ($propiedad->imagenes as $imagen)
                                            <div class="swiper-slide">
                                                <img src="{{ asset($imagen->ruta) }}"
                                                     alt="Imagen propiedad"
                                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Navigation -->
                                    <div class="swiper-button-next !text-white !bg-black/70 !w-10 !h-10 !rounded-full after:!text-sm hover:!bg-black/90 transition-all shadow-lg"></div>
                                    <div class="swiper-button-prev !text-white !bg-black/70 !w-10 !h-10 !rounded-full after:!text-sm hover:!bg-black/90 transition-all shadow-lg"></div>
                                    <div class="swiper-pagination !bottom-4"></div>
                                </div>
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gradient-to-br from-gray-50 to-gray-100">
                                    <div class="text-center">
                                        <svg class="w-16 h-16 mx-auto mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        <p class="text-sm font-medium">Sin imágenes</p>
                                    </div>
                                </div>
                            @endif
                            
                            <!-- Status Badge -->
                            <div class="absolute top-4 right-4">
                                @if($propiedad->aprobada)
                                    <span class="inline-flex items-center bg-green-100 text-green-800 px-3 py-1 text-xs font-bold rounded-full border-2 border-green-200 shadow-sm">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        Aprobado
                                    </span>
                                @else
                                    <span class="inline-flex items-center bg-yellow-100 text-yellow-800 px-3 py-1 text-xs font-bold rounded-full border-2 border-yellow-200 shadow-sm">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                        </svg>
                                        Pendiente
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Property Details -->
                        <div class="p-6">
                            <!-- Title and Description -->
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black mb-2 line-clamp-1" title="{{ $propiedad->titulo }}">
                                    {{ $propiedad->titulo }}
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2 leading-relaxed">
                                    {{ $propiedad->descripcion }}
                                </p>
                            </div>

                            <!-- Location -->
                            <div class="mb-4 flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-black flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-sm">
                                    {{ $propiedad->direccion }}, <span class="font-semibold text-black">{{ $propiedad->ciudad }}</span>
                                </span>
                            </div>

                            <!-- Property Features -->
                            <div class="mb-4 flex items-center gap-6 text-sm text-gray-600">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                    <span class="font-medium">{{ $propiedad->num_habitaciones }} hab</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8l-2-2m0 0l2-2m-2 2h12"/>
                                    </svg>
                                    <span class="font-medium">{{ $propiedad->num_banos }} baños</span>
                                </div>
                            </div>

                            <!-- Amenities -->
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    @if($propiedad->wifi)
                                        <span class="inline-flex items-center bg-gray-100 text-gray-800 px-3 py-1 text-xs font-medium rounded-full border border-gray-200">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                                            </svg>
                                            WiFi
                                        </span>
                                    @endif
                                    @if($propiedad->television)
                                        <span class="inline-flex items-center bg-gray-100 text-gray-800 px-3 py-1 text-xs font-medium rounded-full border border-gray-200">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                            TV
                                        </span>
                                    @endif
                                    @if($propiedad->aire_acondicionado)
                                        <span class="inline-flex items-center bg-gray-100 text-gray-800 px-3 py-1 text-xs font-medium rounded-full border border-gray-200">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                                            </svg>
                                            A/C
                                        </span>
                                    @endif
                                    @if($propiedad->servicios_basicos)
                                        <span class="inline-flex items-center bg-gray-100 text-gray-800 px-3 py-1 text-xs font-medium rounded-full border border-gray-200">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            Servicios
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Action Footer -->
                        <div class="border-t border-gray-200 p-6 bg-gray-50">
                            <div class="flex items-center justify-between">
                                <a href="#" class="text-sm font-semibold text-black hover:text-gray-700 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    Ver detalles
                                </a>
                                
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('propietario.editarPropiedad', ['id' => $propiedad->id]) }}" 
                                       title="Editar propiedad" 
                                       class="group p-2 bg-white border border-gray-200 rounded-lg text-gray-600 hover:text-black hover:bg-gray-50 hover:border-gray-300 transition-all duration-200">
                                        <svg class="w-4 h-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Summary Section -->
            <div class="mt-16 bg-gradient-to-r from-gray-900 to-black rounded-3xl p-8 text-white">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-6">Resumen de tus Propiedades</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                            <div class="text-3xl font-bold mb-2">{{ $propiedades->count() }}</div>
                            <div class="text-gray-300 text-sm">Total Propiedades</div>
                        </div>
                        
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                            <div class="text-3xl font-bold mb-2">{{ $propiedades->sum('num_habitaciones') }}</div>
                            <div class="text-gray-300 text-sm">Total Habitaciones</div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

{{-- Swiper CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
{{-- Font Awesome --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @foreach ($propiedades as $propiedad)
        new Swiper(".mySwiper-{{ $propiedad->id }}", {
            loop: true,
            effect: "fade",
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
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
