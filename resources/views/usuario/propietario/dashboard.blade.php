@extends('navegacion.plantillaU')

@section('title', 'Publicar tu Propio Espacio')

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
        
        <!-- HERO SECTION MEJORADO -->
        <section class="relative mb-24">
            <div class="relative overflow-hidden">
                <!-- Fondo decorativo -->
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-black to-gray-800 rounded-3xl"></div>
                <div class="absolute inset-0 bg-black/20 rounded-3xl"></div>
                
                <!-- Patrón decorativo -->
                <div class="absolute top-0 right-0 w-96 h-96 opacity-10">
                    <svg viewBox="0 0 200 200" class="w-full h-full text-white">
                        <defs>
                            <pattern id="grid" width="20" height="20" patternUnits="userSpaceOnUse">
                                <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="200" height="200" fill="url(#grid)"/>
                    </svg>
                </div>
                
                <div class="relative px-8 py-16 md:px-16 md:py-24 text-center">
                    <div class="max-w-4xl mx-auto">
                        <!-- Badge superior -->
                        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-6 py-2 mb-8">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-3 animate-pulse"></span>
                            <span class="text-white text-sm font-medium">Plataforma líder en alquiler de departamentos</span>
                        </div>
                        
                        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 leading-tight">
                            Tu Departamento,
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-gray-300 to-white">
                                Tu Futuro
                            </span>
                        </h1>
                        
                        <p class="text-xl md:text-2xl text-gray-200 mb-12 max-w-3xl mx-auto leading-relaxed">
                            Conecta con inquilinos verificados y genera ingresos constantes. 
                            <span class="text-white font-semibold">Miles de personas buscan su hogar ideal.</span>
                        </p>
                        
                        <!-- Estadísticas -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                            <div class="text-center">
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">15K+</div>
                                <div class="text-gray-300 text-sm">Propiedades activas</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">98%</div>
                                <div class="text-gray-300 text-sm">Satisfacción propietarios</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">24/7</div>
                                <div class="text-gray-300 text-sm">Soporte disponible</div>
                            </div>
                        </div>
                        
                        <!-- CTA Principal -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <button class="group bg-white text-black font-bold py-4 px-8 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 flex items-center">
                                <svg class="w-5 h-5 mr-3 group-hover:rotate-12 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
                                </svg>
                                Publicar Departamento
                            </button>
                            <button class="group border-2 border-white/30 text-white font-semibold py-4 px-8 rounded-2xl backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Ver Demo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROCESO SIMPLIFICADO -->
        <section class="mb-24">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-gray-100 rounded-full px-6 py-2 mb-6">
                    <span class="text-black font-medium text-sm">PROCESO SIMPLE</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-black mb-6">
                    Publica en 3 pasos
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Un proceso diseñado para que publiques tu departamento de forma rápida y efectiva
                </p>
            </div>
            
            <div class="relative">
                <!-- Línea conectora -->
                <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-0.5 bg-gradient-to-r from-gray-200 via-black to-gray-200 transform -translate-y-1/2 z-0"></div>
                
                <div class="grid lg:grid-cols-3 gap-12 relative z-10">
                    @foreach([
                        ['01','Crea tu anuncio','Sube fotos profesionales, describe tu departamento y establece el precio ideal','🏠','from-blue-50 to-blue-100'],
                        ['02','Recibe solicitudes','Los inquilinos interesados te contactarán directamente a través de la plataforma','📧','from-purple-50 to-purple-100'],
                        ['03','Elige y confirma','Revisa perfiles, selecciona al mejor inquilino y firma el contrato digital','✅','from-green-50 to-green-100']
                    ] as [$num,$title,$desc,$emoji,$gradient])
                    <div class="group relative">
                        <!-- Círculo numerado -->
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-black text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg z-20 group-hover:scale-110 transition-transform">
                            {{ $num }}
                        </div>
                        
                        <!-- Tarjeta -->
                        <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 pt-12 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-gradient-to-br {{ $gradient }} rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-6 transition-transform">
                                    <span class="text-3xl">{{ $emoji }}</span>
                                </div>
                                <h3 class="text-2xl font-bold text-black mb-4">{{ $title }}</h3>
                                <p class="text-gray-600 leading-relaxed">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CARACTERÍSTICAS DESTACADAS -->
        <section class="mb-24">
            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Contenido -->
                    <div class="p-12 lg:p-16">
                        <div class="inline-flex items-center bg-black text-white rounded-full px-4 py-2 mb-6">
                            <span class="text-sm font-medium">CARACTERÍSTICAS</span>
                        </div>
                        
                        <h2 class="text-4xl font-bold text-black mb-8">
                            Todo lo que necesitas en un solo lugar
                        </h2>
                        
                        <div class="space-y-6">
                            @foreach([
                                ['Inquilinos verificados','Todos pasan por verificación de identidad y solvencia económica','shield-check'],
                                ['Contratos digitales','Firma electrónica segura y respaldo legal completo','document-text'],
                                ['Pagos automatizados','Recibe tus pagos puntualmente cada mes sin complicaciones','credit-card'],
                                ['Soporte 24/7','Equipo especializado disponible cuando lo necesites','support']
                            ] as [$title,$desc,$icon])
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        @if($icon === 'shield-check')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        @elseif($icon === 'document-text')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        @elseif($icon === 'credit-card')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                        @else
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        @endif
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-black mb-2">{{ $title }}</h3>
                                    <p class="text-gray-600">{{ $desc }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Imagen/Gráfico -->
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-12 lg:p-16 flex items-center justify-center">
                        <div class="w-full max-w-sm">
                            <!-- Simulación de dashboard -->
                            <div class="bg-white rounded-2xl shadow-2xl p-6 transform rotate-3 hover:rotate-0 transition-transform duration-500">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                                </div>
                                <div class="space-y-3">
                                    <div class="h-4 bg-gray-200 rounded w-3/4"></div>
                                    <div class="h-4 bg-gray-200 rounded w-1/2"></div>
                                    <div class="h-8 bg-black rounded"></div>
                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="h-6 bg-gray-100 rounded"></div>
                                        <div class="h-6 bg-gray-100 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CALCULADORA MEJORADA -->
        <section class="mb-24">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-green-100 text-green-800 rounded-full px-6 py-2 mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-medium text-sm">CALCULADORA DE INGRESOS</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-black mb-6">
                    ¿Cuánto podrías ganar?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Calcula tus ingresos potenciales basados en el mercado actual
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-gray-900 to-black p-8 text-white">
                        <h3 class="text-2xl font-bold mb-2">Simulador de Ingresos</h3>
                        <p class="text-gray-300">Ajusta los valores para ver tu potencial de ganancias</p>
                    </div>
                    
                    <div class="p-8">
                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <div>
                                <label class="block text-sm font-bold text-black mb-3">
                                    💰 Precio mensual de alquiler
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 font-medium">$</span>
                                    <input type="number" id="price" value="800" class="w-full pl-8 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-black focus:border-black transition-all text-lg font-semibold">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-black mb-3">
                                    📅 Meses ocupado por año
                                </label>
                                <input type="range" id="nights" min="6" max="12" value="11" class="w-full h-3 bg-gray-200 rounded-lg appearance-none cursor-pointer mb-2">
                                <div class="flex justify-between text-sm text-gray-500">
                                    <span>6 meses</span>
                                    <span id="monthsDisplay" class="font-semibold text-black">11 meses</span>
                                    <span>12 meses</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-8 text-center border-2 border-green-200">
                            <p class="text-sm text-green-700 font-medium mb-2">INGRESOS ANUALES ESTIMADOS</p>
                            <p class="text-5xl font-black text-green-800 mb-2">
                                $<span id="result">8800</span>
                            </p>
                            <p class="text-sm text-green-600">
                                Eso son <span class="font-semibold">$<span id="monthly">733</span> promedio mensual</span>
                            </p>
                        </div>
                        
                        <div class="mt-6 text-center">
                            <p class="text-xs text-gray-500">
                                * Cálculo estimado basado en datos de mercado. Los resultados reales pueden variar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIOS PREMIUM -->
        <section class="mb-24">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-yellow-100 text-yellow-800 rounded-full px-6 py-2 mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span class="font-medium text-sm">TESTIMONIOS</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-black mb-6">
                    Historias de éxito reales
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Conoce las experiencias de propietarios que ya están generando ingresos
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['Roberto Martínez','Propietario desde 2022','"En 18 meses he recuperado toda la inversión inicial. Los inquilinos son excelentes y el proceso es muy transparente."','⭐⭐⭐⭐⭐','$1,200/mes'],
                    ['Ana Sofía García','Inversionista inmobiliaria','"Manejo 3 propiedades a través de la plataforma. El sistema de pagos automático me ahorra muchísimo tiempo."','⭐⭐⭐⭐⭐','$2,800/mes'],
                    ['Diego Hernández','Primer vez como propietario','"Nunca había alquilado antes. El equipo me guió en todo el proceso y ahora tengo ingresos fijos mensuales."','⭐⭐⭐⭐⭐','$950/mes']
                ] as [$name,$role,$quote,$stars,$income])
                <div class="group bg-white rounded-3xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <!-- Header -->
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-black text-lg">{{ $name }}</h3>
                            <p class="text-gray-500 text-sm">{{ $role }}</p>
                            <div class="text-yellow-400 text-sm mt-1">{{ $stars }}</div>
                        </div>
                    </div>
                    
                    <!-- Quote -->
                    <blockquote class="text-gray-700 italic leading-relaxed mb-6">
                        "{{ $quote }}"
                    </blockquote>
                    
                    <!-- Income badge -->
                    <div class="inline-flex items-center bg-green-100 text-green-800 rounded-full px-4 py-2">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold text-sm">{{ $income }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- CTA FINAL PREMIUM -->
        <section class="relative">
            <div class="bg-gradient-to-r from-gray-900 via-black to-gray-800 rounded-3xl overflow-hidden shadow-2xl">
                <!-- Patrón de fondo -->
                <div class="absolute inset-0 opacity-10">
                    <svg class="w-full h-full" viewBox="0 0 100 100" fill="none">
                        <defs>
                            <pattern id="grid-pattern" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                            </pattern>
                        </defs>
                        <rect width="100" height="100" fill="url(#grid-pattern)"/>
                    </svg>
                </div>
                
                <div class="relative px-8 py-16 md:px-16 md:py-20 text-center">
                    <div class="max-w-4xl mx-auto">
                        <!-- Badge -->
                        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-6 py-3 mb-8">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-3 animate-pulse"></span>
                            <span class="text-white font-medium">Únete a más de 15,000 propietarios exitosos</span>
                        </div>
                        
                        <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">
                            Comienza a generar
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-gray-300 to-white">
                                ingresos hoy mismo
                            </span>
                        </h2>
                        
                        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto leading-relaxed">
                            Publica tu departamento gratis y conecta con inquilinos verificados en menos de 24 horas.
                        </p>
                        
                        <!-- Botones CTA -->
                        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                            <button class="group bg-white text-black font-bold py-5 px-10 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 flex items-center text-lg">
                                <svg class="w-6 h-6 mr-3 group-hover:rotate-90 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
                                </svg>
                                Publicar Ahora - Gratis
                            </button>
                            <button class="group border-2 border-white/30 text-white font-semibold py-5 px-10 rounded-2xl backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center text-lg">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                Solicitar Demo
                            </button>
                        </div>
                        
                        <!-- Features finales -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
                            <div class="flex items-center justify-center text-gray-300">
                                <svg class="w-5 h-5 mr-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span>Publicación 100% gratuita</span>
                            </div>
                            <div class="flex items-center justify-center text-gray-300">
                                <svg class="w-5 h-5 mr-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Inquilinos 100% verificados</span>
                            </div>
                            <div class="flex items-center justify-center text-gray-300">
                                <svg class="w-5 h-5 mr-3 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                                <span>Soporte especializado 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

{{-- Font Awesome --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<script>
    const price = document.getElementById('price');
    const nights = document.getElementById('nights');
    const result = document.getElementById('result');
    const monthly = document.getElementById('monthly');
    const monthsDisplay = document.getElementById('monthsDisplay');
    
    function calc() {
        const total = price.value * nights.value;
        const monthlyAvg = Math.round(total / 12);
        result.textContent = total.toLocaleString();
        monthly.textContent = monthlyAvg.toLocaleString();
        monthsDisplay.textContent = nights.value + ' meses';
    }
    
    price.addEventListener('input', calc);
    nights.addEventListener('input', calc);
</script>
@endsection
