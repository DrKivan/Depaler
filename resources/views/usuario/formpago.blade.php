@extends('navegacion.plantillaU')

@section('title', 'Confirmar Pago')

@section('content')
<div class="bg-gray-100 min-h-screen py-12">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header con breadcrumb -->
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
                            <a href="#" class="text-gray-600 hover:text-black transition-colors">Reservar</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                            <span class="text-black font-medium">Confirmar Pago</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-gradient-to-r from-gray-900 to-black rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="fas fa-credit-card text-white text-2xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-black mb-2">Confirmar Pago</h2>
                <p class="text-gray-600">Revisa los detalles de tu reserva antes de confirmar</p>
            </div>
        </div>

        <!-- Tarjeta principal de resumen -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden mb-8">
            <!-- Header de la tarjeta -->
            <div class="bg-gradient-to-r from-gray-900 to-black p-6 text-white">
                <h3 class="text-xl font-bold flex items-center">
                    <i class="fas fa-file-invoice-dollar mr-3"></i>
                    Resumen de Reserva
                </h3>
            </div>
            
            <!-- Contenido de la tarjeta -->
            <div class="p-8 space-y-6">
                <!-- Información de la propiedad -->
                <div class="border-b border-gray-200 pb-6">
                    <h4 class="text-lg font-semibold text-black mb-4 flex items-center">
                        <i class="fas fa-home text-black mr-2 bg-gray-100 p-2 rounded-full"></i>
                        Detalles de la Propiedad
                    </h4>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-4 flex-shrink-0 shadow-sm">
                                <i class="fas fa-building text-black"></i>
                            </div>
                            <div>
                                <p class="font-medium text-black">Propiedad</p>
                                <p class="text-gray-700 text-lg">{{ $propiedad->titulo }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-4 flex-shrink-0 shadow-sm">
                                <i class="fas fa-map-marker-alt text-black"></i>
                            </div>
                            <div>
                                <p class="font-medium text-black">Dirección</p>
                                <p class="text-gray-700">{{ $propiedad->direccion }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Información de fechas -->
                <div class="border-b border-gray-200 pb-6">
                    <h4 class="text-lg font-semibold text-black mb-4 flex items-center">
                        <i class="fas fa-calendar-alt text-black mr-2 bg-gray-100 p-2 rounded-full"></i>
                        Fechas de Estadía
                    </h4>
                    
                    <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="text-center">
                                <div class="flex items-center justify-center mb-2">
                                    <i class="fas fa-sign-in-alt text-black mr-2"></i>
                                    <span class="font-medium text-black">Check-in</span>
                                </div>
                                <p class="text-xl font-bold text-black">{{ \Carbon\Carbon::parse($fecha_inicio)->format('d/m/Y') }}</p>
                                <p class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($fecha_inicio)->locale('es')->isoFormat('dddd') }}</p>
                            </div>
                            
                            <div class="text-center">
                                <div class="flex items-center justify-center mb-2">
                                    <i class="fas fa-sign-out-alt text-black mr-2"></i>
                                    <span class="font-medium text-black">Check-out</span>
                                </div>
                                <p class="text-xl font-bold text-black">{{ \Carbon\Carbon::parse($fecha_fin)->format('d/m/Y') }}</p>
                                <p class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($fecha_fin)->locale('es')->isoFormat('dddd') }}</p>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4 pt-4 border-t border-gray-300">
                            <p class="text-gray-700">
                                <i class="fas fa-moon text-black mr-2"></i>
                                <span class="font-medium">
                                    {{ \Carbon\Carbon::parse($fecha_inicio)->diffInDays(\Carbon\Carbon::parse($fecha_fin)) }} 
                                    {{ \Carbon\Carbon::parse($fecha_inicio)->diffInDays(\Carbon\Carbon::parse($fecha_fin)) == 1 ? 'noche' : 'noches' }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Información de pago -->
                <div>
                    <h4 class="text-lg font-semibold text-black mb-4 flex items-center">
                        <i class="fas fa-calculator text-black mr-2 bg-gray-100 p-2 rounded-full"></i>
                        Total a Pagar
                    </h4>
                    
                    <div class="bg-gray-50 rounded-lg p-6 border border-gray-200">
                        <div class="text-center">
                            <div class="flex justify-center items-center mb-4">
                                <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-dollar-sign text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-gray-600 text-sm">Total por estadía</p>
                                    <p class="text-4xl font-bold text-black">${{ number_format($total, 2, ',', '.') }}</p>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <p class="text-gray-700 text-sm">
                                    Incluye el costo completo de 
                                    <span class="font-medium text-black">
                                        {{ \Carbon\Carbon::parse($fecha_inicio)->diffInDays(\Carbon\Carbon::parse($fecha_fin)) }} 
                                        {{ \Carbon\Carbon::parse($fecha_inicio)->diffInDays(\Carbon\Carbon::parse($fecha_fin)) == 1 ? 'noche' : 'noches' }}
                                    </span>
                                    de alojamiento
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Información de seguridad -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6 mb-8">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center mr-4 shadow-sm">
                    <i class="fas fa-shield-alt text-black text-xl"></i>
                </div>
                <div>
                    <h4 class="text-lg font-medium text-black">Pago Seguro</h4>
                    <p class="text-gray-600 text-sm">Tu información está protegida con encriptación SSL</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="flex items-center justify-center">
                    <i class="fas fa-lock text-black mr-2"></i>
                    <span class="text-gray-700 text-sm">Encriptación SSL</span>
                </div>
                <div class="flex items-center justify-center">
                    <i class="fas fa-credit-card text-black mr-2"></i>
                    <span class="text-gray-700 text-sm">Pago Seguro</span>
                </div>
                <div class="flex items-center justify-center">
                    <i class="fas fa-undo text-black mr-2"></i>
                    <span class="text-gray-700 text-sm">Política de Cancelación</span>
                </div>
            </div>
        </div>
        
        <!-- Formulario de confirmación -->
        <form action="{{ route('reserva.guardar') }}" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" name="propiedad_id" value="{{ $propiedad->id }}">
            <input type="hidden" name="fecha_inicio" value="{{ $fecha_inicio }}">
            <input type="hidden" name="fecha_fin" value="{{ $fecha_fin }}">
            <input type="hidden" name="monto" value="{{ $total }}">
            
            <!-- Términos y condiciones -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
                <div class="flex items-start">
                    <input 
                        type="checkbox" 
                        id="terminos" 
                        required
                        class="mt-1 h-4 w-4 text-black focus:ring-gray-500 border-gray-300 rounded"
                    >
                    <label for="terminos" class="ml-3 text-gray-700 text-sm">
                        Acepto los 
                        <a href="#" class="text-black hover:underline font-medium">términos y condiciones</a> 
                        y la 
                        <a href="#" class="text-black hover:underline font-medium">política de privacidad</a>
                        de la plataforma.
                    </label>
                </div>
            </div>
            
            <!-- Botones de acción -->
            <div class="flex flex-col sm:flex-row gap-4">
                <button 
                    type="button" 
                    onclick="history.back()"
                    class="flex-1 bg-white hover:bg-gray-50 text-gray-800 font-medium py-4 px-6 rounded-lg border-2 border-gray-300 transition-all duration-200 hover:shadow-md"
                >
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver Atrás
                </button>
                
                <button 
                    type="submit" 
                    class="flex-1 bg-gradient-to-r from-gray-900 to-black hover:from-black hover:to-gray-800 text-white font-bold py-4 px-6 rounded-lg transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 shadow-lg hover:shadow-xl"
                >
                    <i class="fas fa-check-circle mr-2"></i>
                    Confirmar Pago
                </button>
            </div>
        </form>
        
        <!-- Información adicional -->
        <div class="mt-8 text-center">
            <p class="text-gray-600 text-sm mb-2">¿Necesitas ayuda?</p>
            <div class="flex justify-center space-x-6 text-sm">
                <a href="#" class="text-black hover:underline flex items-center">
                    <i class="fas fa-phone mr-1"></i>
                    Contactar Soporte
                </a>
                <a href="#" class="text-black hover:underline flex items-center">
                    <i class="fas fa-question-circle mr-1"></i>
                    Preguntas Frecuentes
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Font Awesome --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endsection
