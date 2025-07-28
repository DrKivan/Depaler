@extends('navegacion.plantillaM')
@section('title', 'Lista de Usuarios - Moderador')
@section('content')

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes shimmer {
        0% { background-position: -200px 0; }
        100% { background-position: calc(200px + 100%) 0; }
    }
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    @keyframes glow {
        0%, 100% { box-shadow: 0 0 20px rgba(255, 215, 0, 0.3); }
        50% { box-shadow: 0 0 30px rgba(255, 215, 0, 0.6); }
    }
    .animate-fadeIn { animation: fadeIn 0.6s ease-out; }
    .animate-slideDown { animation: slideDown 0.3s ease-out; }
    .animate-float { animation: float 3s ease-in-out infinite; }
    .animate-glow { animation: glow 2s ease-in-out infinite; }
    .shimmer {
        background: linear-gradient(90deg, transparent, rgba(255, 215, 0, 0.4), transparent);
        background-size: 200px 100%;
        animation: shimmer 2s infinite;
    }
    .gold-gradient {
        background: linear-gradient(135deg, #FFD700, #FFA500, #FF8C00);
    }
    .gold-text {
        background: linear-gradient(135deg, #FFD700, #FFA500);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .dark-gold {
        background: linear-gradient(135deg, #B8860B, #8B7355, #A0522D);
    }
    .animate-pulse-custom { animation: pulse 2s infinite; }
    
    /* Elementos decorativos flotantes */
    .floating-element {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
        pointer-events: none;
    }
    .floating-1 {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #FFD700, #FFA500);
        top: 10%;
        right: 5%;
        animation: float 4s ease-in-out infinite;
    }
    .floating-2 {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #FFA500, #FF8C00);
        top: 60%;
        left: 3%;
        animation: float 3s ease-in-out infinite 1s;
    }
    .floating-3 {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #B8860B, #8B7355);
        bottom: 20%;
        right: 8%;
        animation: float 5s ease-in-out infinite 2s;
    }
</style>

<div class="min-h-screen bg-gradient-to-br from-gray-50 to-amber-50 p-4 lg:p-6 relative overflow-hidden">
    <!-- Elementos decorativos flotantes -->
    <div class="floating-element floating-1"></div>
    <div class="floating-element floating-2"></div>
    <div class="floating-element floating-3"></div>
    
    <!-- Header Premium -->
    <div class="bg-gradient-to-r from-gray-900 via-amber-900 to-black text-white rounded-3xl p-6 lg:p-8 mb-6 lg:mb-8 relative overflow-hidden animate-fadeIn shadow-2xl">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-amber-500 to-transparent opacity-10 shimmer"></div>
        
        <!-- Elementos decorativos del header -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-amber-400 to-yellow-600 opacity-10 rounded-full -mr-16 -mt-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-br from-amber-300 to-yellow-500 opacity-5 rounded-full -ml-12 -mb-12"></div>
        <div class="absolute top-1/2 left-1/4 w-4 h-4 bg-amber-400 opacity-20 rounded-full"></div>
        <div class="absolute top-1/4 right-1/3 w-6 h-6 bg-yellow-500 opacity-15 rounded-full"></div>
        
        <div class="relative z-10">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center">
                <div class="mb-4 lg:mb-0">
                    <!-- Icono principal -->
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-yellow-600 rounded-2xl flex items-center justify-center mr-4 animate-glow shadow-2xl">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl lg:text-4xl font-bold gold-text mb-2">Panel de Moderación</h1>
                            <p class="text-amber-100 text-base lg:text-lg">Gestión de usuarios y moderación</p>
                        </div>
                    </div>
                </div>
                
                <!-- Info del moderador -->
                <div class="bg-gradient-to-br from-amber-100 to-yellow-100 text-gray-900 px-6 py-4 rounded-2xl border border-amber-200 shadow-lg animate-float">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-yellow-600 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">{{ session('usuario_nombre') }}</p>
                            <p class="text-sm text-gray-600">ID: {{ session('usuario_id') }} • {{ ucfirst(session('tipo_usuario')) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenedor centrado para la tabla -->
    <div class="max-w-7xl mx-auto">
        <!-- Tabla de usuarios -->
        <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-amber-100 animate-fadeIn">
            <!-- Header de la tabla -->
            <div class="bg-gradient-to-r from-gray-50 to-amber-50 px-6 lg:px-8 py-6 border-b border-amber-200">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-yellow-600 rounded-lg flex items-center justify-center mr-3 animate-pulse-custom">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <h2 class="text-xl lg:text-2xl font-bold text-gray-900">Lista de Usuarios</h2>
                    </div>
                    <div class="bg-gradient-to-r from-amber-100 to-yellow-100 px-4 py-2 rounded-xl border border-amber-200 shadow-sm">
                        <p class="text-sm font-semibold text-gray-800">
                            Total: <span class="text-amber-700">{{ count($usuarios) }}</span> usuarios
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tabla responsive -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-gray-900 to-black text-white">
                        <tr>
                            <th class="px-4 lg:px-6 py-4 text-left text-xs lg:text-sm font-bold uppercase tracking-wider w-16">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                                    </svg>
                                    <span class="hidden sm:inline">ID</span>
                                </div>
                            </th>
                            <th class="px-4 lg:px-6 py-4 text-left text-xs lg:text-sm font-bold uppercase tracking-wider">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    Usuario
                                </div>
                            </th>
                            <th class="px-4 lg:px-6 py-4 text-left text-xs lg:text-sm font-bold uppercase tracking-wider hidden md:table-cell">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    Contacto
                                </div>
                            </th>
                            <th class="px-4 lg:px-6 py-4 text-left text-xs lg:text-sm font-bold uppercase tracking-wider">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 19a7 7 0 100-14 7 7 0 000 14z"/>
                                    </svg>
                                    <span class="hidden sm:inline">Denuncias</span>
                                    <span class="sm:hidden">Den.</span>
                                </div>
                            </th>
                            <th class="px-4 lg:px-6 py-4 text-left text-xs lg:text-sm font-bold uppercase tracking-wider">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 lg:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"/>
                                    </svg>
                                    Acciones
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach ($usuarios as $usuario)
                            <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-amber-50 transition-all duration-300 {{ $usuario->baneado ? 'bg-red-50' : '' }}">
                                <td class="px-4 lg:px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center justify-center">
                                        <div class="w-8 h-8 bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg flex items-center justify-center shadow-sm">
                                            <span class="text-xs font-bold text-gray-700">{{ $usuario->id }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 lg:px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                       
                                        <div class="min-w-0 flex-1">
                                            <div class="text-sm lg:text-base font-bold text-gray-900 truncate">{{ $usuario->nombre }}</div>
                                            <div class="flex items-center mt-1">
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $usuario->tipo_usuario === 'propietario' ? 'bg-gradient-to-r from-blue-100 to-indigo-100 text-blue-800 border border-blue-200' : 'bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 border border-green-200' }}">
                                                    {{ ucfirst($usuario->tipo_usuario) }}
                                                </span>
                                            </div>
                                            <!-- Mostrar contacto en móvil -->
                                            <div class="md:hidden mt-2 space-y-1">
                                                <div class="flex items-center text-xs text-gray-600">
                                                    <svg class="w-3 h-3 text-amber-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                    </svg>
                                                    <span class="truncate">{{ $usuario->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 lg:px-6 py-4 whitespace-nowrap hidden md:table-cell">
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-amber-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                            <span class="text-sm font-medium text-gray-900 truncate">{{ $usuario->email }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-amber-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                            </svg>
                                            <span class="text-sm text-gray-600">{{ $usuario->telefono ?? 'Sin teléfono' }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 lg:px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-col space-y-2">
                                        <span class="px-3 py-1 text-xs font-bold rounded-xl border-2 {{ $usuario->denuncias_recibidas_count > 2 ? 'bg-gradient-to-r from-red-100 to-pink-100 text-red-800 border-red-200' : ($usuario->denuncias_recibidas_count > 0 ? 'bg-gradient-to-r from-yellow-100 to-amber-100 text-yellow-800 border-yellow-200' : 'bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 border-green-200') }} text-center">
                                            {{ $usuario->denuncias_recibidas_count }}
                                        </span>
                                        @if($usuario->denuncias_recibidas_count > 0)
                                            <button class="px-2 py-1 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 text-xs font-semibold rounded-lg hover:from-gray-200 hover:to-gray-300 transition-all duration-300 border border-gray-300"
                                                onclick="mostrarDenuncias({{ $usuario->id }})">
                                                Ver
                                            </button>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-4 lg:px-6 py-4 whitespace-nowrap">
                                    @if($usuario->denuncias_recibidas_count >= 3)
                                        <div class="flex flex-col lg:flex-row space-y-1 lg:space-y-0 lg:space-x-1">
                                            @if($usuario->baneado)
                                                <button onclick="desbanearUsuario({{ $usuario->id }})"
                                                    class="px-2 lg:px-3 py-1 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-bold rounded-lg hover:from-green-600 hover:to-emerald-700 transition-all duration-300 transform hover:scale-105 text-xs shadow-lg flex items-center justify-center"
                                                    title="Desbanear usuario">
                                                    <svg class="w-3 h-3 lg:w-4 lg:h-4 lg:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                    <span class="hidden lg:inline">Desbanear</span>
                                                </button>
                                            @else
                                                <button onclick="mostrarModalBanear({{ $usuario->id }})"
                                                    class="px-2 lg:px-3 py-1 bg-gradient-to-r from-red-500 to-pink-600 text-white font-bold rounded-lg hover:from-red-600 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 text-xs shadow-lg flex items-center justify-center"
                                                    title="Banear usuario">
                                                    <svg class="w-3 h-3 lg:w-4 lg:h-4 lg:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636M5.636 18.364l12.728-12.728"/>
                                                    </svg>
                                                    <span class="hidden lg:inline">Banear</span>
                                                </button>
                                            @endif

                                            <button onclick="mostrarDenuncias({{ $usuario->id }})"
                                                class="px-2 lg:px-3 py-1 bg-gradient-to-r from-gray-900 via-amber-900 to-black text-white font-bold rounded-lg hover:from-gray-800 hover:via-amber-800 hover:to-gray-900 transition-all duration-300 transform hover:scale-105 text-xs shadow-lg flex items-center justify-center"
                                                title="Ver denuncias">
                                                <svg class="w-3 h-3 lg:w-4 lg:h-4 lg:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                                <span class="hidden lg:inline">Revisar</span>
                                            </button>

                                            @if($usuario->baneo && $usuario->baneo->apelacion)
                                                <button onclick="mostrarApelacion({{ $usuario->id }})"
                                                    class="px-2 lg:px-3 py-1 bg-gradient-to-r from-purple-500 to-indigo-600 text-white font-bold rounded-lg hover:from-purple-600 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 text-xs shadow-lg flex items-center justify-center"
                                                    title="Ver apelación">
                                                    <svg class="w-3 h-3 lg:w-4 lg:h-4 lg:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                    </svg>
                                                    <span class="hidden lg:inline">Apelación</span>
                                                </button>
                                            @endif
                                        </div>
                                    @endif
                                </td>
                            </tr>

                            <!-- Fila de detalles de denuncias -->
                            <tr id="denuncias-{{ $usuario->id }}" class="hidden bg-gradient-to-r from-gray-50 to-amber-50 animate-slideDown">
                                <td colspan="5" class="px-4 lg:px-8 py-6">
                                    <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg border border-amber-200">
                                        <div class="flex justify-between items-center mb-4">
                                            <h4 class="text-base lg:text-lg font-bold text-gray-900 flex items-center">
                                                <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-yellow-600 rounded-lg flex items-center justify-center mr-3">
                                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 19a7 7 0 100-14 7 7 0 000 14z"/>
                                                    </svg>
                                                </div>
                                                Detalles de denuncias
                                            </h4>
                                            <button onclick="mostrarDenuncias({{ $usuario->id }})"
                                                 class="p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-all duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div id="contenido-denuncias-{{ $usuario->id }}" class="bg-gradient-to-br from-gray-50 to-amber-50 p-4 lg:p-6 rounded-xl border border-amber-200">
                                            @if($usuario->denunciasRecibidas->count() > 0)
                                                <div class="space-y-4">
                                                    @foreach($usuario->denunciasRecibidas as $denuncia)
                                                        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                                                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                                                <div>
                                                                    <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                                        <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 19a7 7 0 100-14 7 7 0 000 14z"/>
                                                                        </svg>
                                                                        Motivo:
                                                                    </span>
                                                                    <p class="text-gray-900 font-medium">{{ $denuncia->motivo }}</p>
                                                                </div>
                                                                <div>
                                                                    <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                                        <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                                                        </svg>
                                                                        Reportado por:
                                                                    </span>
                                                                    <p class="text-gray-900 font-medium">Usuario #{{ $denuncia->reportante_id }}</p>
                                                                </div>
                                                                @if($denuncia->propiedad_id)
                                                                    <div>
                                                                        <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                                            <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                                                            </svg>
                                                                            Propiedad:
                                                                        </span>
                                                                        <p class="text-gray-900 font-medium">ID {{ $denuncia->propiedad_id }}</p>
                                                                    </div>
                                                                @endif
                                                                <div>
                                                                    <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                                        <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                                        </svg>
                                                                        Fecha:
                                                                    </span>
                                                                    <p class="text-gray-900 font-medium">{{ $denuncia->created_at }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <p class="text-gray-500 text-center py-8">Cargando detalles de denuncias...</p>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Fila de detalles de apelaciones -->
                            @if($usuario->baneo && $usuario->baneo->apelaciones && $usuario->baneo->apelaciones->count() > 0)
                                <tr id="apelacion-{{ $usuario->id }}" class="hidden bg-gradient-to-r from-purple-50 to-indigo-50 animate-slideDown">
                                    <td colspan="5" class="px-4 lg:px-8 py-6">
                                        <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg border border-purple-200">
                                            <div class="flex justify-between items-center mb-4">
                                                <h4 class="text-base lg:text-lg font-bold text-purple-900 flex items-center">
                                                    <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-indigo-600 rounded-lg flex items-center justify-center mr-3">
                                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                        </svg>
                                                    </div>
                                                    Apelaciones ({{ $usuario->baneo->apelaciones->count() }})
                                                    @if($usuario->baneo->apelaciones->count() > 1)
                                                        <span class="text-xs font-normal text-gray-600 ml-2 bg-yellow-100 px-2 py-1 rounded-full">Usuario persistente</span>
                                                    @endif
                                                </h4>
                                                <button onclick="mostrarApelacion({{ $usuario->id }})" class="p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-all duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="space-y-4 max-h-96 overflow-y-auto bg-gradient-to-br from-purple-50 to-indigo-50 p-4 rounded-xl">
                                                @foreach($usuario->baneo->apelaciones as $index => $apelacion)
                                                    <div class="bg-white p-4 rounded-xl shadow-sm border-l-4 {{ $index === 0 ? 'border-purple-400' : 'border-gray-300' }} {{ $usuario->baneo->apelaciones->count() > 3 && $index > 2 ? 'opacity-75' : '' }}">
                                                        <div class="flex flex-col lg:flex-row justify-between items-start mb-3">
                                                            <span class="px-3 py-1 text-xs font-bold rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 text-purple-800 border border-purple-200 mb-2 lg:mb-0">
                                                                Apelación #{{ $index + 1 }}
                                                                @if($index === 0)
                                                                    <span class="text-purple-900">(Más reciente)</span>
                                                                @endif
                                                            </span>
                                                            <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full">
                                                                {{ \Carbon\Carbon::parse($apelacion->fecha_apelacion)->diffForHumans() }}
                                                            </span>
                                                        </div>

                                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                                            <div>
                                                                <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                                    <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                                    </svg>
                                                                    Motivo:
                                                                </span>
                                                                <p class="text-gray-900 font-medium">{{ $apelacion->motivo }}</p>
                                                            </div>
                                                            <div>
                                                                <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                                    <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                                    </svg>
                                                                    Fecha:
                                                                </span>
                                                                <p class="text-gray-900 font-medium">{{ $apelacion->fecha_apelacion }}</p>
                                                            </div>
                                                        </div>

                                                        @if($apelacion->estado ?? false)
                                                            <div class="mt-3">
                                                                <span class="text-sm font-bold text-gray-600">Estado:</span>
                                                                <span class="ml-2 px-3 py-1 text-xs font-bold rounded-full {{ $apelacion->estado === 'aprobada' ? 'bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 border border-green-200' : ($apelacion->estado === 'rechazada' ? 'bg-gradient-to-r from-red-100 to-pink-100 text-red-800 border border-red-200' : 'bg-gradient-to-r from-yellow-100 to-amber-100 text-yellow-800 border border-yellow-200') }}">
                                                                    {{ ucfirst($apelacion->estado) }}
                                                                </span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>

                                            @if($usuario->baneo->apelaciones->count() > 3)
                                                <div class="mt-4 text-center bg-gradient-to-r from-yellow-50 to-amber-50 p-3 rounded-xl border border-yellow-200">
                                                    <p class="text-sm text-yellow-800 font-semibold flex items-center justify-center">
                                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 19a7 7 0 100-14 7 7 0 000 14z"/>
                                                        </svg>
                                                        Este usuario ha enviado {{ $usuario->baneo->apelaciones->count() }} apelaciones
                                                    </p>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal de baneo mejorado -->
<div id="banearModal" class="hidden fixed inset-0 bg-black bg-opacity-50 overflow-y-auto h-full w-full z-50 flex items-center justify-center p-4">
    <div class="bg-white shadow-2xl rounded-3xl max-w-md w-full overflow-hidden border border-amber-100 animate-fadeIn">
        <!-- Header del modal -->
        <div class="bg-gradient-to-r from-gray-900 via-amber-900 to-black text-white p-6 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-amber-500 to-transparent opacity-10 shimmer"></div>
            
            <!-- Elementos decorativos del modal -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-amber-400 to-yellow-600 opacity-10 rounded-full -mr-8 -mt-8"></div>
            <div class="absolute bottom-0 left-0 w-12 h-12 bg-gradient-to-br from-amber-300 to-yellow-500 opacity-5 rounded-full -ml-6 -mb-6"></div>
            
            <div class="relative z-10">
                <div class="w-16 h-16 bg-gradient-to-br from-red-400 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4 animate-glow shadow-2xl">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636M5.636 18.364l12.728-12.728"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold gold-text">Banear Usuario</h3>
                <p class="text-amber-100 text-sm mt-1">Suspender acceso del usuario</p>
            </div>
        </div>

        <!-- Contenido del modal -->
        <div class="p-6">
            <form id="banearForm" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="usuario_id" id="modal_usuario_id">

                <div>
                    <label for="motivo" class="block text-sm font-bold text-gray-700 mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                        </svg>
                        Motivo del baneo
                    </label>
                    <textarea name="motivo" id="motivo" rows="3" 
                        class="w-full border border-amber-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 resize-none bg-gradient-to-br from-gray-50 to-amber-50 focus:from-white focus:to-white" 
                        placeholder="Describe el motivo de la suspensión..." required></textarea>
                </div>

                <div>
                    <label for="fecha_baneo" class="block text-sm font-bold text-gray-700 mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8l-2-2m0 0l2-2m-2 2h12"/>
                        </svg>
                        Fecha de baneo
                    </label>
                    <input type="date" name="fecha_baneo" id="fecha_baneo" 
                        class="w-full border border-amber-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 bg-gradient-to-br from-gray-50 to-amber-50 focus:from-white focus:to-white" required>
                </div>

                <div>
                    <label for="estado" class="block text-sm font-bold text-gray-700 mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Tipo de suspensión
                    </label>
                    <select name="estado" id="estado" 
                        class="w-full border border-amber-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 bg-gradient-to-br from-gray-50 to-amber-50 focus:from-white focus:to-white" required>
                        <option value="temporal">Temporal</option>
                        <option value="permanente">Permanente</option>
                    </select>
                </div>

                <div class="flex space-x-3 pt-4">
                    <button type="button" onclick="cerrarModal()" 
                        class="flex-1 bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800 font-bold py-3 px-6 rounded-xl hover:from-gray-200 hover:to-gray-300 transition-all duration-300 border border-gray-300 flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        Cancelar
                    </button>
                    <button type="submit" 
                        class="flex-1 bg-gradient-to-r from-red-500 to-pink-600 text-white font-bold py-3 px-6 rounded-xl hover:from-red-600 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Confirmar Baneo
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function mostrarApelacion(usuarioId) {
        const row = document.getElementById(`apelacion-${usuarioId}`);
        if (row) {
            row.classList.toggle('hidden');
        }
    }

    function desbanearUsuario(usuarioId) {
        if (!confirm('¿Estás seguro de desbanear a este usuario?\nSe eliminarán todos los registros de baneo asociados.')) {
            return;
        }

        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

        fetch(`/moderador/desbanear/${usuarioId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => { throw err; });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                alertify.success(data.message);
                window.location.reload();
            } else {
                alertify.error(data.message || 'Error al desbanear usuario');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alertify.error(error.message || 'Ocurrió un error al desbanear');
        });
    }

    function actualizarEstadoUsuario(usuarioId, estaBaneado) {
        const fila = document.querySelector(`tr[data-usuario-id="${usuarioId}"]`);
        if (fila) {
            if (estaBaneado) {
                fila.classList.add('bg-red-50');
            } else {
                fila.classList.remove('bg-red-50');
            }

            const botonesContainer = fila.querySelector('.acciones-baneo');
            if (botonesContainer) {
                botonesContainer.innerHTML = estaBaneado ?
                    `<button onclick="desbanearUsuario(${usuarioId})" class="...">Desbanear</button>` :
                    `<button onclick="mostrarModalBanear(${usuarioId})" class="...">Banear</button>`;
            }
        }
    }

    function mostrarModalBanear(usuarioId) {
        document.getElementById('modal_usuario_id').value = usuarioId;
        document.getElementById('fecha_baneo').valueAsDate = new Date();
        document.getElementById('banearModal').classList.remove('hidden');
    }

    function cerrarModal() {
        document.getElementById('banearModal').classList.add('hidden');
    }

    document.getElementById('banearForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const usuarioId = formData.get('usuario_id');

        fetch(`/moderador/banear/${usuarioId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                cerrarModal();
                window.location.reload();
            } else {
                alert('Error al banear usuario: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ocurrió un error al procesar la solicitud');
        });
    });

    function mostrarDenuncias(usuarioId) {
        const row = document.getElementById(`denuncias-${usuarioId}`);
        const contenido = document.getElementById(`contenido-denuncias-${usuarioId}`);

        if (row.classList.contains('hidden')) {
            if (contenido.innerHTML.includes('Cargando detalles')) {
                fetch(`/moderador/denuncias/${usuarioId}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            let html = '<div class="space-y-4">';
                            data.forEach(denuncia => {
                                html += `
                                    <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                            <div>
                                                <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                    <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 19a7 7 0 100-14 7 7 0 000 14z"/>
                                                    </svg>
                                                    Motivo:
                                                </span>
                                                <p class="text-gray-900 font-medium">${denuncia.motivo}</p>
                                            </div>
                                            <div>
                                                <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                    <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                                    </svg>
                                                    Reportado por:
                                                </span>
                                                <p class="text-gray-900 font-medium">${denuncia.reportante}</p>
                                            </div>
                                            <div>
                                                <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                    <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                                    </svg>
                                                    Propiedad:
                                                </span>
                                                <p class="text-gray-900 font-medium">${denuncia.propiedad}</p>
                                            </div>
                                            <div>
                                                <span class="text-sm font-bold text-gray-600 flex items-center mb-2">
                                                    <svg class="w-4 h-4 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                    Fecha:
                                                </span>
                                                <p class="text-gray-900 font-medium">${denuncia.fecha}</p>
                                            </div>
                                        </div>
                                    </div>`;
                            });
                            html += '</div>';
                            contenido.innerHTML = html;
                        } else {
                            contenido.innerHTML = '<p class="text-gray-500 text-center py-8">No hay detalles adicionales de denuncias.</p>';
                        }
                    });
            }
            row.classList.remove('hidden');
        } else {
            row.classList.add('hidden');
        }
    }

    // Animación de entrada
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.animate-fadeIn');
        elements.forEach((el, index) => {
            el.style.animationDelay = `${index * 0.1}s`;
        });
    });
</script>

@endsection
