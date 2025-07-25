@extends('navegacion.plantillaU')

@section('title', 'Solicitudes de Reserva')

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

            <a href="{{route('propiedad.listarPropiedadUsuario')}}" class="group flex items-center space-x-3 p-3 rounded-xl hover:bg-gray-50 transition-all duration-200 border border-transparent hover:border-gray-200">
                <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div>
                    <span class="font-medium text-black group-hover:text-black">Mis Propiedades</span>
                    <p class="text-xs text-gray-500">Ver y editar</p>
                </div>
            </a>

            <a href="{{route('propietario.solicitudes')}}" class="group flex items-center space-x-3 p-3 rounded-xl bg-gray-50 border border-gray-200">
                <div class="w-10 h-10 bg-black rounded-lg flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <div>
                    <span class="font-medium text-black">Solicitudes</span>
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
                            <span class="text-black font-medium">Solicitudes de Reserva</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-black mb-4">
                        Solicitudes de Reserva
                    </h1>
                    <p class="text-xl text-gray-600">
                        Gestiona las solicitudes de reserva para tus propiedades
                    </p>
                </div>
                
                <!-- Stats Badge -->
                <div class="hidden md:flex items-center bg-white rounded-2xl shadow-lg border border-gray-200 px-6 py-4">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-black">{{ $reservas->count() }}</p>
                            <p class="text-sm text-gray-500">Solicitudes pendientes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        @if($reservas->isEmpty())
            <!-- Empty State -->
            <div class="bg-white rounded-3xl shadow-xl border border-gray-200 p-16 text-center">
                <div class="max-w-md mx-auto">
                    <!-- Icon -->
                    <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-2xl font-bold text-black mb-4">
                        No hay solicitudes pendientes
                    </h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Cuando los huéspedes soliciten reservar tus propiedades, aparecerán aquí para que puedas aprobarlas o rechazarlas.
                    </p>
                    
                    <!-- Action Button -->
                    <a href="{{route('propiedad.listarPropiedadUsuario')}}" class="inline-flex items-center bg-black text-white font-semibold py-3 px-6 rounded-xl hover:bg-gray-800 transition-all duration-300 transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        Ver mis propiedades
                    </a>
                </div>
            </div>
        @else
            <!-- Reservations Grid -->
            <div class="space-y-6">
                @foreach($reservas as $reserva)
                    <div class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        <div class="p-8">
                            <div class="grid lg:grid-cols-3 gap-8 items-center">
                                
                                <!-- Property Info -->
                                <div class="lg:col-span-2">
                                    <div class="flex items-start space-x-6">
                                        <!-- Property Icon -->
                                        <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center flex-shrink-0">
                                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>
                                        </div>
                                        
                                        <!-- Details -->
                                        <div class="flex-1">
                                            <h3 class="text-2xl font-bold text-black mb-3">
                                                {{ $reserva->propiedad->titulo }}
                                            </h3>
                                            
                                            <div class="grid md:grid-cols-2 gap-4 mb-6">
                                                <div class="flex items-center text-gray-600">
                                                    <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    </svg>
                                                    <span class="font-medium">{{ $reserva->propiedad->direccion }}</span>
                                                </div>
                                                
                                                <div class="flex items-center text-gray-600">
                                                    <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                    <span class="font-medium">
                                                        Estado: 
                                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 ml-2">
                                                            {{ ucfirst($reserva->estado) }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <!-- Dates -->
                                            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-200">
                                                <div class="grid md:grid-cols-2 gap-4">
                                                    <div class="text-center">
                                                        <div class="flex items-center justify-center mb-2">
                                                            <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                                            </svg>
                                                            <span class="font-semibold text-black">Check-in</span>
                                                        </div>
                                                        <p class="text-lg font-bold text-black">
                                                            {{ \Carbon\Carbon::parse($reserva->fecha_inicio)->format('d/m/Y') }}
                                                        </p>
                                                        <p class="text-sm text-gray-500">
                                                            {{ \Carbon\Carbon::parse($reserva->fecha_inicio)->locale('es')->isoFormat('dddd') }}
                                                        </p>
                                                    </div>
                                                    
                                                    <div class="text-center">
                                                        <div class="flex items-center justify-center mb-2">
                                                            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                            </svg>
                                                            <span class="font-semibold text-black">Check-out</span>
                                                        </div>
                                                        <p class="text-lg font-bold text-black">
                                                            {{ \Carbon\Carbon::parse($reserva->fecha_fin)->format('d/m/Y') }}
                                                        </p>
                                                        <p class="text-sm text-gray-500">
                                                            {{ \Carbon\Carbon::parse($reserva->fecha_fin)->locale('es')->isoFormat('dddd') }}
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="text-center mt-4 pt-4 border-t border-gray-300">
                                                    <p class="text-gray-700">
                                                        <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                                                        </svg>
                                                        <span class="font-semibold">
                                                            {{ \Carbon\Carbon::parse($reserva->fecha_inicio)->diffInDays(\Carbon\Carbon::parse($reserva->fecha_fin)) }} 
                                                            {{ \Carbon\Carbon::parse($reserva->fecha_inicio)->diffInDays(\Carbon\Carbon::parse($reserva->fecha_fin)) == 1 ? 'noche' : 'noches' }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Actions -->
                                <div class="lg:col-span-1">
                                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200">
                                        <h4 class="text-lg font-bold text-black mb-4 text-center">
                                            Acciones de Reserva
                                        </h4>
                                        
                                        <div class="space-y-3">
                                            <!-- Confirm Button -->
                                            <form action="{{ route('solicitudesReserva.aprobar', $reserva->id) }}" method="POST" class="w-full">
                                                @csrf
                                                <button type="submit" class="w-full group bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                                    <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    Confirmar Reserva
                                                </button>
                                            </form>
                                            
                                            <!-- Reject Button -->
                                            <form action="{{ route('solicitudesReserva.rechazar', $reserva->id) }}" method="POST" class="w-full">
                                                @csrf
                                                <button type="submit" class="w-full group bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                                    <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                    </svg>
                                                    Rechazar Solicitud
                                                </button>
                                            </form>
                                        </div>
                                        
                                        <!-- Additional Info -->
                                        <div class="mt-6 pt-4 border-t border-gray-300">
                                            <div class="flex items-center justify-center text-sm text-gray-500">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                <span>ID Reserva: #{{ $reserva->id }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Summary Card -->
            <div class="mt-12 bg-gradient-to-r from-gray-900 to-black rounded-3xl p-8 text-white">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">Resumen de Solicitudes</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                            <div class="text-3xl font-bold mb-2">{{ $reservas->count() }}</div>
                            <div class="text-gray-300">Total Pendientes</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                            <div class="text-3xl font-bold mb-2">
                                {{ $reservas->sum(function($reserva) { 
                                    return \Carbon\Carbon::parse($reserva->fecha_inicio)->diffInDays(\Carbon\Carbon::parse($reserva->fecha_fin)); 
                                }) }}
                            </div>
                            <div class="text-gray-300">Total Noches</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                            <div class="text-3xl font-bold mb-2">{{ $reservas->pluck('propiedad')->unique()->count() }}</div>
                            <div class="text-gray-300">Propiedades Involucradas</div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

{{-- Font Awesome --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endsection
