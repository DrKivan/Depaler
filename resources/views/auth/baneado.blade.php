<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Baneada</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes shimmer {
            0% { background-position: -200px 0; }
            100% { background-position: calc(200px + 100%) 0; }
        }
        @keyframes checkmark {
            0% { stroke-dashoffset: 100; }
            100% { stroke-dashoffset: 0; }
        }
        .animate-fadeIn { animation: fadeIn 0.6s ease-out; }
        .animate-pulse-custom { animation: pulse 2s infinite; }
        .animate-slideDown { animation: slideDown 0.3s ease-out; }
        .animate-checkmark { 
            stroke-dasharray: 100;
            animation: checkmark 0.8s ease-out forwards;
        }
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
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-amber-50 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white shadow-2xl rounded-3xl max-w-lg w-full overflow-hidden animate-fadeIn border border-amber-100">
        
        <!-- Header con gradiente dorado y negro -->
        <div class="bg-gradient-to-r from-gray-900 via-amber-900 to-black text-white p-8 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-amber-500 to-transparent opacity-10 shimmer"></div>
            <div class="relative z-10">
                <!-- Icono principal -->
                <div class="flex justify-center mb-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-amber-400 to-yellow-600 rounded-full flex items-center justify-center animate-pulse-custom shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 19a7 7 0 100-14 7 7 0 000 14z" />
                        </svg>
                    </div>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-3xl font-bold mb-2 gold-text">Acceso Restringido</h1>
                <p class="text-amber-100 text-sm">Tu cuenta ha sido suspendida</p>
            </div>
        </div>

        <!-- Contenido principal -->
        <div class="p-8">
            <!-- Mensaje de éxito -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-amber-500 rounded-r-lg animate-slideDown">
                    <div class="flex items-center">
                        <div class="w-5 h-5 bg-amber-500 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-800 font-medium">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <!-- Mensaje de apelación enviada -->
            @if(session('apelacion_enviada'))
                <div class="mb-6 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-2xl animate-slideDown relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-blue-400 to-indigo-500 opacity-10 rounded-full -mr-10 -mt-10"></div>
                    <div class="flex items-start relative z-10">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                            <svg class="w-6 h-6 text-white animate-checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-blue-900 mb-2">¡Apelación Enviada Exitosamente!</h4>
                            <p class="text-blue-800 text-sm mb-3">
                                Tu solicitud de apelación ha sido recibida y está siendo revisada por nuestro equipo.
                            </p>
                            <div class="bg-white bg-opacity-60 rounded-lg p-3 border border-blue-200">
                                <div class="flex items-center text-xs text-blue-700 mb-2">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="font-semibold">Tiempo estimado de respuesta:</span>
                                </div>
                                <p class="text-blue-800 text-sm font-medium">2-5 días hábiles</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Información del baneo -->
            <div class="bg-gradient-to-br from-gray-50 to-amber-50 border border-amber-200 rounded-2xl p-6 mb-6 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-amber-400 to-yellow-600 opacity-10 rounded-full -mr-10 -mt-10"></div>
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center relative z-10">
                    <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-yellow-600 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    Detalles de la Suspensión
                </h3>
                
                <div class="space-y-4 relative z-10">
                    <div class="flex items-start">
                        <div class="w-3 h-3 bg-gradient-to-r from-amber-500 to-yellow-600 rounded-full mt-2 mr-3 flex-shrink-0 shadow-sm"></div>
                        <div>
                            <p class="text-sm font-semibold text-gray-700">Motivo:</p>
                            <p class="text-gray-900 font-medium">{{ session('motivo_baneo') }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-3 h-3 bg-gradient-to-r from-gray-500 to-gray-600 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm font-semibold text-gray-700">Tipo de Suspensión:</p>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ session('estado_baneo') === 'temporal' ? 'bg-gradient-to-r from-amber-100 to-yellow-100 text-amber-800 border border-amber-300' : 'bg-gradient-to-r from-red-100 to-pink-100 text-red-800 border border-red-300' }}">
                                @if(session('estado_baneo') === 'temporal')
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Temporal
                                @else
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636M5.636 18.364l12.728-12.728"/>
                                    </svg>
                                    Permanente
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="space-y-3">
                @if(session('estado_baneo') === 'temporal' && !session('apelacion_enviada'))
                    <button id="btn-apelar" class="w-full bg-gradient-to-r from-gray-900 via-amber-900 to-black text-white font-semibold px-6 py-3 rounded-xl hover:from-gray-800 hover:via-amber-800 hover:to-gray-900 transition-all duration-300 transform hover:scale-105 flex items-center justify-center group shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        Solicitar Apelación
                    </button>
                @elseif(session('apelacion_enviada'))
                    <div class="w-full bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 font-semibold px-6 py-3 rounded-xl flex items-center justify-center border border-green-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Apelación en Proceso
                    </div>
                @endif
                
                <a href="{{ route('logout') }}" class="w-full inline-flex items-center justify-center bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800 font-semibold px-6 py-3 rounded-xl hover:from-gray-200 hover:to-gray-300 transition-all duration-300 border border-gray-300 group shadow-sm hover:shadow-md">
                    <svg class="w-5 h-5 mr-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Cerrar Sesión
                </a>
            </div>

            <!-- Formulario de Apelación -->
            @if(!session('apelacion_enviada'))
                <div id="form-apelacion" class="hidden mt-6 animate-slideDown">
                    <div class="border-t border-amber-200 pt-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-yellow-600 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                </svg>
                            </div>
                            Formulario de Apelación
                        </h4>
                        
                        <form action="{{ route('apelacion.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <input type="hidden" name="baneo_id" value="{{ session('baneo_id') }}">
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Motivo de tu apelación
                                </label>
                                <textarea 
                                    name="motivo" 
                                    rows="4" 
                                    class="w-full border border-amber-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 resize-none bg-gradient-to-br from-gray-50 to-amber-50 focus:from-white focus:to-white" 
                                    placeholder="Explica detalladamente por qué consideras que la suspensión debe ser revisada..."
                                    required
                                ></textarea>
                                <p class="text-xs text-gray-500 mt-1">
                                    Sé específico y proporciona toda la información relevante
                                </p>
                            </div>
                            
                            <button type="submit" class="w-full bg-gradient-to-r from-gray-900 via-amber-900 to-black text-white font-semibold px-6 py-3 rounded-xl hover:from-gray-800 hover:via-amber-800 hover:to-gray-900 transition-all duration-300 transform hover:scale-105 flex items-center justify-center group shadow-lg hover:shadow-xl">
                                <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Enviar Apelación
                            </button>
                        </form>
                    </div>
                </div>
            @endif

            <!-- Información adicional -->
            <div class="mt-6 p-4 bg-gradient-to-br from-amber-50 to-yellow-50 rounded-xl border border-amber-200 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-amber-300 to-yellow-500 opacity-10 rounded-full -mr-8 -mt-8"></div>
                <div class="flex items-start relative z-10">
                    <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-yellow-600 rounded-lg flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-700 mb-1">¿Necesitas ayuda?</p>
                        <p class="text-xs text-gray-600">
                            Si tienes preguntas sobre tu suspensión o el proceso de apelación, 
                            puedes contactar a nuestro equipo de soporte.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('btn-apelar')?.addEventListener('click', function () {
            const form = document.getElementById('form-apelacion');
            form.classList.toggle('hidden');
            
            // Scroll suave hacia el formulario si se muestra
            if (!form.classList.contains('hidden')) {
                setTimeout(() => {
                    form.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            }
        });

        // Animación de entrada
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.animate-fadeIn');
            elements.forEach((el, index) => {
                el.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>
