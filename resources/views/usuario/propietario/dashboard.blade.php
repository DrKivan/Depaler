@extends('navegacion.plantillaU')

@section('title', 'Publicar tu Propio Espacio - Conviértete en Anfitrión')

@section('sidebar')
    <div class="space-y-4">
        <h3 class="font-semibold text-gray-900 text-lg mb-4">Panel de Anfitrión</h3>
        <ul class="space-y-3 text-sm text-gray-700">
            <li>
                <a href="{{route('propietario.dashboard')}}" class="flex items-center py-2 px-3 rounded-lg bg-blue-50 text-blue-700 font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Conoce más
                </a>
            </li>
            <li>
                <a href="{{route('propiedad.listarPropiedadUsuario')}}" class="flex items-center py-2 px-3 rounded-lg hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H3m2 0h3M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Mis espacios
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center py-2 px-3 rounded-lg hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a2 2 0 11-4 0 2 2 0 014 0zM8 11a2 2 0 004 0M8 21h8"/>
                    </svg>
                    Solicitudes de reserva
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center py-2 px-3 rounded-lg hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Información adicional
                </a>
            </li>
        </ul>

        <!-- Tarjeta de ayuda -->
        <div class="mt-8 p-4 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-lg border">
            <div class="flex items-start">
                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <h4 class="text-sm font-medium text-gray-900 mb-1">¿Necesitas ayuda?</h4>
                    <p class="text-xs text-gray-600 mb-2">Nuestro equipo está aquí para apoyarte.</p>
                    <button class="text-xs bg-blue-600 text-white px-3 py-1 rounded-full hover:bg-blue-700 transition-colors">
                        Contactar soporte
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 rounded-2xl mb-12">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative px-8 py-16 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                Convierte tu espacio en una 
                <span class="text-yellow-300">fuente de ingresos</span>
            </h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto leading-relaxed opacity-90">
                Únete a miles de anfitriones exitosos que generan ingresos extra compartiendo sus espacios con viajeros de todo el mundo.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg">
                    Comenzar ahora
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-600 transition-all">
                    Ver ejemplo de ganancias
                </button>
            </div>
        </div>
    </div>

    <!-- Estadísticas rápidas -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
        <div class="text-center p-6 bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-2xl font-bold text-green-600">$</span>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-2">$1,200</h3>
            <p class="text-gray-600">Ingreso promedio mensual</p>
        </div>
        <div class="text-center p-6 bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-2xl">⭐</span>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-2">4.8/5</h3>
            <p class="text-gray-600">Calificación promedio</p>
        </div>
        <div class="text-center p-6 bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-2xl">🏠</span>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-2">50K+</h3>
            <p class="text-gray-600">Espacios activos</p>
        </div>
    </div>

    <!-- Beneficios principales -->
    <section class="mb-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">¿Por qué convertirte en anfitrión?</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Descubre todos los beneficios de compartir tu espacio</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all hover:-translate-y-1">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Ingresos Extra</h3>
                <p class="text-gray-600 leading-relaxed">Genera ingresos pasivos aprovechando el espacio que ya tienes. Muchos anfitriones cubren su hipoteca completa.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all hover:-translate-y-1">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Control Total</h3>
                <p class="text-gray-600 leading-relaxed">Tú decides cuándo, cómo y a quién alquilar. Establece tus propias reglas y precios.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all hover:-translate-y-1">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Conoce Gente</h3>
                <p class="text-gray-600 leading-relaxed">Conecta con viajeros de todo el mundo y crea experiencias memorables compartiendo tu cultura local.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all hover:-translate-y-1">
                <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Protección Garantizada</h3>
                <p class="text-gray-600 leading-relaxed">Cobertura de hasta $1 millón en daños a la propiedad y verificación de identidad de todos los huéspedes.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all hover:-translate-y-1">
                <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Fácil de Comenzar</h3>
                <p class="text-gray-600 leading-relaxed">Lista tu espacio en minutos. Nuestro proceso guiado te ayuda paso a paso hasta tu primera reserva.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition-all hover:-translate-y-1">
                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 109.75 9.75c0-1.856-.511-3.595-1.4-5.086l-4.35 4.35a2.25 2.25 0 11-3.182-3.182l4.35-4.35C14.595 2.739 12.856 2.25 12 2.25z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Soporte 24/7</h3>
                <p class="text-gray-600 leading-relaxed">Nuestro equipo está disponible las 24 horas para ayudarte con cualquier duda o situación que surja.</p>
            </div>
        </div>
    </section>

    <!-- Responsabilidades -->
    <section class="mb-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Tus responsabilidades como anfitrión</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Ser un gran anfitrión requiere compromiso y responsabilidad</p>
        </div>

        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-8 md:p-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Mantén tu espacio limpio y seguro</h3>
                            <p class="text-gray-600">Asegúrate de que tu propiedad esté siempre en condiciones óptimas para recibir huéspedes.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Comunícate de manera clara y rápida</h3>
                            <p class="text-gray-600">Responde a las consultas en menos de 24 horas y proporciona información precisa.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Cumple con las regulaciones locales</h3>
                            <p class="text-gray-600">Asegúrate de cumplir con todas las leyes y regulaciones de tu ciudad o región.</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Proporciona información exacta</h3>
                            <p class="text-gray-600">Describe tu espacio con precisión, incluyendo amenidades, reglas y ubicación.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Respeta la privacidad de los huéspedes</h3>
                            <p class="text-gray-600">Mantén la confidencialidad y respeta el espacio personal de quienes se hospeden.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Mantén actualizado tu calendario</h3>
                            <p class="text-gray-600">Evita cancelaciones manteniendo tu disponibilidad siempre actualizada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <div class="text-center bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-12 text-white">
        <h2 class="text-3xl font-bold mb-4">¿Listo para comenzar tu journey como anfitrión?</h2>
        <p class="text-xl mb-8 opacity-90">Únete a nuestra comunidad de anfitriones exitosos hoy mismo</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg">
                Publicar mi espacio
            </button>
            <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-600 transition-all">
                Hablar con un experto
            </button>
        </div>
    </div>
@endsection