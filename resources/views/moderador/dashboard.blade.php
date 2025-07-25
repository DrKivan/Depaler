@extends('navegacion.plantillaM')

@section('title', 'Guía del Moderador - ESPACIOS')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Principal -->
        <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 rounded-3xl p-8 mb-8 text-white shadow-2xl border border-amber-400/20">
            <div class="flex items-center justify-between">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full flex items-center justify-center mr-4 shadow-lg">
                            <i class="fas fa-shield-alt text-3xl text-white"></i>
                        </div>
                        <div>
                            <h1 class="text-4xl font-serif mb-2 text-white">Guía del Moderador</h1>
                            <p class="text-amber-200 text-lg">Manual de procedimientos y ética profesional</p>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 inline-block border border-amber-400/30">
                        <p class="text-sm font-medium text-amber-100">
                            <i class="fas fa-user-shield mr-2 text-amber-400"></i>
                            Bienvenido, {{ Session::get('usuario_nombre') }} - Moderador Verificado
                        </p>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="w-32 h-32 bg-white/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-book-open text-6xl text-white/80"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navegación de Secciones -->
        <div class="bg-white rounded-3xl shadow-lg mb-8 p-6 border border-gray-200">
            <div class="flex flex-wrap gap-4 justify-center">
                <button onclick="scrollToSection('ethics')" class="guide-nav-btn">
                    <i class="fas fa-balance-scale mr-2"></i>
                    Ética Profesional
                </button>
                <button onclick="scrollToSection('properties')" class="guide-nav-btn">
                    <i class="fas fa-home mr-2"></i>
                    Verificación de Propiedades
                </button>
                <button onclick="scrollToSection('users')" class="guide-nav-btn">
                    <i class="fas fa-users mr-2"></i>
                    Gestión de Usuarios
                </button>
                <button onclick="scrollToSection('reports')" class="guide-nav-btn">
                    <i class="fas fa-flag mr-2"></i>
                    Manejo de Denuncias
                </button>
                <button onclick="scrollToSection('bans')" class="guide-nav-btn">
                    <i class="fas fa-ban mr-2"></i>
                    Sistema de Sanciones
                </button>
            </div>
        </div>

        <!-- Sección 1: Ética Profesional -->
        <section id="ethics" class="mb-12">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-200">
                <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-6 border-b border-amber-400/30">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-3xl font-serif text-white flex items-center">
                                <i class="fas fa-balance-scale mr-4 text-amber-400"></i>
                                Código de Ética Profesional
                            </h2>
                            <p class="text-gray-300 mt-2">Principios fundamentales para una moderación justa y transparente</p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="ethics-card">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                                        <i class="fas fa-check text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Imparcialidad</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Trata a todos los usuarios por igual, sin favoritismos ni discriminación. 
                                            Las decisiones deben basarse únicamente en hechos y evidencias.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ethics-card">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                                        <i class="fas fa-eye text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Transparencia</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Comunica claramente las razones de tus decisiones. Los usuarios tienen 
                                            derecho a entender por qué se toman ciertas acciones.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ethics-card">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                                        <i class="fas fa-lock text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Confidencialidad</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Protege la información personal de los usuarios. Solo comparte datos 
                                            cuando sea estrictamente necesario para resolver un caso.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-6 border border-gray-200">
                            <div class="text-center mb-6">
                                
                            </div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-4 flex items-center justify-center">
                                <i class="fas fa-exclamation-triangle text-amber-500 mr-2"></i>
                                Situaciones Críticas
                            </h4>
                            <div class="space-y-4">
                                <div class="bg-white rounded-xl p-4 border-l-4 border-gray-800 shadow-sm">
                                    <h5 class="font-semibold text-gray-800 mb-2 flex items-center">
                                        <span class="w-6 h-6 bg-gray-800 text-white rounded-full flex items-center justify-center text-xs mr-2">!</span>
                                        Acción Inmediata
                                    </h5>
                                    <ul class="text-sm text-gray-700 space-y-1">
                                        <li>• Contenido ilegal o peligroso</li>
                                        <li>• Amenazas directas a usuarios</li>
                                        <li>• Fraude confirmado</li>
                                        <li>• Violación grave de términos</li>
                                    </ul>
                                </div>
                                
                                <div class="bg-white rounded-xl p-4 border-l-4 border-amber-500 shadow-sm">
                                    <h5 class="font-semibold text-amber-700 mb-2 flex items-center">
                                        <span class="w-6 h-6 bg-amber-500 text-white rounded-full flex items-center justify-center text-xs mr-2">?</span>
                                        Revisión Detallada
                                    </h5>
                                    <ul class="text-sm text-gray-700 space-y-1">
                                        <li>• Disputas entre usuarios</li>
                                        <li>• Calificaciones sospechosas</li>
                                        <li>• Reportes múltiples</li>
                                        <li>• Contenido dudoso</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 2: Verificación de Propiedades -->
        <section id="properties" class="mb-12">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-200">
                <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-6 border-b border-amber-400/30">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-3xl font-serif text-white flex items-center">
                                <i class="fas fa-home mr-4 text-amber-400"></i>
                                Verificación de Propiedades
                            </h2>
                            <p class="text-gray-300 mt-2">Proceso completo para garantizar la calidad y autenticidad</p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                        <!-- Checklist de Verificación -->
                        <div class="xl:col-span-2">
                            <div class="flex items-center mb-6">
                                
                                <h3 class="text-2xl font-semibold text-gray-900">Lista de Verificación Obligatoria</h3>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="verification-section">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                        <i class="fas fa-camera text-amber-500 mr-2"></i>
                                        Documentación Visual
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Mínimo 8 fotos de alta calidad</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Fotos de todas las habitaciones</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Baños y cocina incluidos</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Vista exterior de la propiedad</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Fotos sin filtros excesivos</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Iluminación natural adecuada</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="verification-section">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                        <i class="fas fa-file-alt text-amber-500 mr-2"></i>
                                        Documentación Legal
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Título de propiedad o contrato</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Cédula de identidad del propietario</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Certificado de habitabilidad</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Permisos municipales vigentes</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Seguro de responsabilidad civil</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Autorización para alquiler turístico</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="verification-section">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                        <i class="fas fa-tools text-amber-500 mr-2"></i>
                                        Condiciones de la Propiedad
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Estado general de conservación</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Funcionamiento de servicios básicos</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Limpieza y mantenimiento</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Seguridad (cerraduras, ventanas)</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Mobiliario en buen estado</span>
                                        </div>
                                        <div class="checklist-item">
                                            <input type="checkbox" class="mr-3 text-amber-500 focus:ring-amber-500">
                                            <span>Cumplimiento de amenidades listadas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Panel de Acciones -->
                        <div class="space-y-6">
                            <div class="text-center mb-6">
                                
                            </div>

                            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                                    Aprobación
                                </h4>
                                <p class="text-gray-600 text-sm mb-4">
                                    La propiedad cumple con todos los requisitos y puede ser publicada.
                                </p>
                                <button class="w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 rounded-xl transition-all shadow-lg hover:shadow-xl">
                                    <i class="fas fa-thumbs-up mr-2"></i>
                                    Aprobar Propiedad
                                </button>
                            </div>

                            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <i class="fas fa-exclamation-circle text-gray-600 mr-2"></i>
                                    Solicitar Correcciones
                                </h4>
                                <p class="text-gray-600 text-sm mb-4">
                                    Requiere modificaciones antes de la aprobación.
                                </p>
                                <button class="w-full bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 rounded-xl transition-all shadow-lg hover:shadow-xl">
                                    <i class="fas fa-edit mr-2"></i>
                                    Solicitar Cambios
                                </button>
                            </div>

                            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <i class="fas fa-times-circle text-gray-800 mr-2"></i>
                                    Rechazar
                                </h4>
                                <p class="text-gray-600 text-sm mb-4">
                                    La propiedad no cumple con los estándares mínimos.
                                </p>
                                <button class="w-full bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 rounded-xl transition-all shadow-lg hover:shadow-xl">
                                    <i class="fas fa-ban mr-2"></i>
                                    Rechazar Propiedad
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Gestión de Usuarios -->
        <section id="users" class="mb-12">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-200">
                <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-6 border-b border-amber-400/30">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-3xl font-serif text-white flex items-center">
                                <i class="fas fa-users mr-4 text-amber-400"></i>
                                Gestión de Usuarios
                            </h2>
                            <p class="text-gray-300 mt-2">Monitoreo y administración de la comunidad</p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <div class="flex items-center mb-6">
                                
                                <h3 class="text-xl font-semibold text-gray-900">Señales de Alerta</h3>
                            </div>
                            <div class="space-y-4">
                                <div class="alert-item bg-gradient-to-r from-gray-50 to-white border-l-4 border-gray-800 p-4 rounded-r-xl shadow-sm">
                                    <div class="flex items-center">
                                        <i class="fas fa-exclamation-triangle text-gray-800 mr-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">Actividad Sospechosa</h4>
                                            <p class="text-gray-600 text-sm">Múltiples cuentas desde la misma IP</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert-item bg-gradient-to-r from-gray-50 to-white border-l-4 border-amber-500 p-4 rounded-r-xl shadow-sm">
                                    <div class="flex items-center">
                                        <i class="fas fa-star text-amber-500 mr-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">Calificaciones Anómalas</h4>
                                            <p class="text-gray-600 text-sm">Patrones irregulares en reseñas</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert-item bg-gradient-to-r from-gray-50 to-white border-l-4 border-gray-600 p-4 rounded-r-xl shadow-sm">
                                    <div class="flex items-center">
                                        <i class="fas fa-comments text-gray-600 mr-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">Comunicación Inapropiada</h4>
                                            <p class="text-gray-600 text-sm">Reportes de mensajes ofensivos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert-item bg-gradient-to-r from-gray-50 to-white border-l-4 border-amber-600 p-4 rounded-r-xl shadow-sm">
                                    <div class="flex items-center">
                                        <i class="fas fa-credit-card text-amber-600 mr-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">Problemas de Pago</h4>
                                            <p class="text-gray-600 text-sm">Disputas o transacciones fallidas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center mb-6">
                                
                                <h3 class="text-xl font-semibold text-gray-900">Acciones Disponibles</h3>
                            </div>
                            <div class="space-y-4">
                                <div class="action-card bg-gradient-to-r from-gray-50 to-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <i class="fas fa-comment-dots text-amber-500 mr-2"></i>
                                        Advertencia Verbal
                                    </h4>
                                    <p class="text-gray-600 text-sm mb-3">Notificación educativa sobre políticas</p>
                                    <button class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white px-4 py-2 rounded-lg text-sm transition-all shadow-md hover:shadow-lg">
                                        Enviar Advertencia
                                    </button>
                                </div>

                                <div class="action-card bg-gradient-to-r from-gray-50 to-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <i class="fas fa-pause text-gray-600 mr-2"></i>
                                        Suspensión Temporal
                                    </h4>
                                    <p class="text-gray-600 text-sm mb-3">Restricción de acceso por tiempo limitado</p>
                                    <button class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm transition-all shadow-md hover:shadow-lg">
                                        Suspender Usuario
                                    </button>
                                </div>

                                <div class="action-card bg-gradient-to-r from-gray-50 to-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <i class="fas fa-ban text-gray-800 mr-2"></i>
                                        Baneo Permanente
                                    </h4>
                                    <p class="text-gray-600 text-sm mb-3">Eliminación definitiva de la plataforma</p>
                                    <button class="bg-gray-800 hover:bg-gray-900 text-white px-4 py-2 rounded-lg text-sm transition-all shadow-md hover:shadow-lg">
                                        Banear Usuario
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 4: Manejo de Denuncias -->
        <section id="reports" class="mb-12">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-200">
                <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-6 border-b border-amber-400/30">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-3xl font-serif text-white flex items-center">
                                <i class="fas fa-flag mr-4 text-amber-400"></i>
                                Manejo de Denuncias
                            </h2>
                            <p class="text-gray-300 mt-2">Protocolo para resolver conflictos y reportes</p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="grid grid-cols-1 xl:grid-cols-4 gap-6">
                        <div class="xl:col-span-3">
                            <div class="flex items-center mb-6">
                                
                                <h3 class="text-xl font-semibold text-gray-900">Proceso de Investigación</h3>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="process-step">
                                    <div class="flex items-start">
                                        <div class="w-10 h-10 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0 shadow-lg">1</div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Recepción y Clasificación</h4>
                                            <p class="text-gray-600 mb-3">Evalúa la gravedad y categoriza el tipo de denuncia recibida.</p>
                                            <div class="bg-gradient-to-r from-gray-50 to-white rounded-xl p-4 border border-gray-200">
                                                <h5 class="font-semibold text-gray-800 mb-2">Tipos de Denuncias:</h5>
                                                <ul class="text-gray-700 text-sm space-y-1">
                                                    <li>• Contenido inapropiado o falso</li>
                                                    <li>• Comportamiento abusivo</li>
                                                    <li>• Fraude o estafa</li>
                                                    <li>• Violación de términos de servicio</li>
                                                    <li>• Problemas de seguridad</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="process-step">
                                    <div class="flex items-start">
                                        <div class="w-10 h-10 bg-gradient-to-r from-gray-600 to-gray-700 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0 shadow-lg">2</div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Investigación Detallada</h4>
                                            <p class="text-gray-600 mb-3">Recopila evidencias y contacta a las partes involucradas.</p>
                                            <div class="bg-gradient-to-r from-gray-50 to-white rounded-xl p-4 border border-gray-200">
                                                <h5 class="font-semibold text-gray-800 mb-2">Evidencias a Recopilar:</h5>
                                                <ul class="text-gray-700 text-sm space-y-1">
                                                    <li>• Capturas de pantalla</li>
                                                    <li>• Historial de conversaciones</li>
                                                    <li>• Registros de actividad</li>
                                                    <li>• Testimonios de testigos</li>
                                                    <li>• Documentación relevante</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="process-step">
                                    <div class="flex items-start">
                                        <div class="w-10 h-10 bg-gradient-to-r from-gray-800 to-gray-900 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0 shadow-lg">3</div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Resolución y Comunicación</h4>
                                            <p class="text-gray-600 mb-3">Toma una decisión informada y comunica el resultado a todas las partes.</p>
                                            <div class="bg-gradient-to-r from-gray-50 to-white rounded-xl p-4 border border-gray-200">
                                                <h5 class="font-semibold text-gray-800 mb-2">Tiempo de Respuesta:</h5>
                                                <ul class="text-gray-700 text-sm space-y-1">
                                                    <li>• Casos urgentes: 2-4 horas</li>
                                                    <li>• Casos normales: 24-48 horas</li>
                                                    <li>• Casos complejos: 3-5 días hábiles</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="text-center">
                                
                            </div>

                            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <i class="fas fa-clock text-amber-500 mr-2"></i>
                                    Prioridades
                                </h4>
                                <div class="space-y-3">
                                    <div class="priority-item bg-white border-l-4 border-gray-800 text-gray-800 p-3 rounded-r-xl shadow-sm">
                                        <div class="font-semibold flex items-center">
                                            <span class="w-3 h-3 bg-gray-800 rounded-full mr-2"></span>
                                            URGENTE
                                        </div>
                                        <div class="text-sm text-gray-600">Seguridad física</div>
                                    </div>
                                    <div class="priority-item bg-white border-l-4 border-amber-500 text-amber-800 p-3 rounded-r-xl shadow-sm">
                                        <div class="font-semibold flex items-center">
                                            <span class="w-3 h-3 bg-amber-500 rounded-full mr-2"></span>
                                            ALTA
                                        </div>
                                        <div class="text-sm text-gray-600">Fraude confirmado</div>
                                    </div>
                                    <div class="priority-item bg-white border-l-4 border-gray-600 text-gray-800 p-3 rounded-r-xl shadow-sm">
                                        <div class="font-semibold flex items-center">
                                            <span class="w-3 h-3 bg-gray-600 rounded-full mr-2"></span>
                                            MEDIA
                                        </div>
                                        <div class="text-sm text-gray-600">Disputas comerciales</div>
                                    </div>
                                    <div class="priority-item bg-white border-l-4 border-gray-400 text-gray-800 p-3 rounded-r-xl shadow-sm">
                                        <div class="font-semibold flex items-center">
                                            <span class="w-3 h-3 bg-gray-400 rounded-full mr-2"></span>
                                            BAJA
                                        </div>
                                        <div class="text-sm text-gray-600">Quejas menores</div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <i class="fas fa-tools text-amber-500 mr-2"></i>
                                    Herramientas
                                </h4>
                                <div class="space-y-2">
                                    <button class="w-full text-left bg-white hover:bg-gray-50 p-3 rounded-xl border border-gray-200 transition-colors shadow-sm hover:shadow-md">
                                        <i class="fas fa-search mr-2 text-amber-500"></i>
                                        <span class="text-sm">Buscar Usuario</span>
                                    </button>
                                    <button class="w-full text-left bg-white hover:bg-gray-50 p-3 rounded-xl border border-gray-200 transition-colors shadow-sm hover:shadow-md">
                                        <i class="fas fa-history mr-2 text-gray-600"></i>
                                        <span class="text-sm">Historial de Casos</span>
                                    </button>
                                    <button class="w-full text-left bg-white hover:bg-gray-50 p-3 rounded-xl border border-gray-200 transition-colors shadow-sm hover:shadow-md">
                                        <i class="fas fa-file-export mr-2 text-gray-800"></i>
                                        <span class="text-sm">Generar Reporte</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 5: Sistema de Sanciones -->
        <section id="bans" class="mb-12">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-200">
                <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-6 border-b border-amber-400/30">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-3xl font-serif text-white flex items-center">
                                <i class="fas fa-ban mr-4 text-amber-400"></i>
                                Sistema de Sanciones
                            </h2>
                            <p class="text-gray-300 mt-2">Escalamiento progresivo y medidas disciplinarias</p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <div class="flex items-center mb-6">
                                
                                <h3 class="text-xl font-semibold text-gray-900">Escalamiento de Sanciones</h3>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="sanction-level bg-gradient-to-r from-gray-50 to-white border-l-4 border-amber-500 p-6 rounded-r-2xl shadow-sm">
                                    <div class="flex items-center justify-between mb-3">
                                        <h4 class="text-lg font-semibold text-gray-800">Nivel 1 - Advertencia</h4>
                                        <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">Educativo</span>
                                    </div>
                                    <p class="text-gray-700 text-sm mb-3">Primera infracción menor. Notificación educativa sobre políticas.</p>
                                    <div class="text-xs text-gray-600">
                                        <strong>Duración:</strong> Registro permanente • <strong>Efecto:</strong> Ninguno
                                    </div>
                                </div>

                                <div class="sanction-level bg-gradient-to-r from-gray-50 to-white border-l-4 border-gray-600 p-6 rounded-r-2xl shadow-sm">
                                    <div class="flex items-center justify-between mb-3">
                                        <h4 class="text-lg font-semibold text-gray-800">Nivel 2 - Restricción</h4>
                                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-medium">Temporal</span>
                                    </div>
                                    <p class="text-gray-700 text-sm mb-3">Limitación de funciones específicas (comentarios, mensajes).</p>
                                    <div class="text-xs text-gray-600">
                                        <strong>Duración:</strong> 7-30 días • <strong>Efecto:</strong> Funciones limitadas
                                    </div>
                                </div>

                                <div class="sanction-level bg-gradient-to-r from-gray-50 to-white border-l-4 border-gray-700 p-6 rounded-r-2xl shadow-sm">
                                    <div class="flex items-center justify-between mb-3">
                                        <h4 class="text-lg font-semibold text-gray-800">Nivel 3 - Suspensión</h4>
                                        <span class="bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm font-medium">Grave</span>
                                    </div>
                                    <p class="text-gray-700 text-sm mb-3">Suspensión temporal completa del acceso a la plataforma.</p>
                                    <div class="text-xs text-gray-600">
                                        <strong>Duración:</strong> 30-90 días • <strong>Efecto:</strong> Sin acceso
                                    </div>
                                </div>

                                <div class="sanction-level bg-gradient-to-r from-gray-50 to-white border-l-4 border-gray-900 p-6 rounded-r-2xl shadow-sm">
                                    <div class="flex items-center justify-between mb-3">
                                        <h4 class="text-lg font-semibold text-gray-800">Nivel 4 - Baneo</h4>
                                        <span class="bg-gray-800 text-white px-3 py-1 rounded-full text-sm font-medium">Permanente</span>
                                    </div>
                                    <p class="text-gray-700 text-sm mb-3">Eliminación permanente de la plataforma por infracciones graves.</p>
                                    <div class="text-xs text-gray-600">
                                        <strong>Duración:</strong> Permanente • <strong>Efecto:</strong> Cuenta eliminada
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center mb-6">
                                
                                <h3 class="text-xl font-semibold text-gray-900">Consideraciones Especiales</h3>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <i class="fas fa-balance-scale text-amber-500 mr-2"></i>
                                        Factores Atenuantes
                                    </h4>
                                    <ul class="text-gray-700 space-y-2 text-sm">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-amber-500 mr-2 mt-1 text-xs"></i>
                                            <span>Primera infracción del usuario</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-amber-500 mr-2 mt-1 text-xs"></i>
                                            <span>Cooperación durante la investigación</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-amber-500 mr-2 mt-1 text-xs"></i>
                                            <span>Historial positivo en la plataforma</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-amber-500 mr-2 mt-1 text-xs"></i>
                                            <span>Reconocimiento del error</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <i class="fas fa-exclamation-triangle text-gray-800 mr-2"></i>
                                        Factores Agravantes
                                    </h4>
                                    <ul class="text-gray-700 space-y-2 text-sm">
                                        <li class="flex items-start">
                                            <i class="fas fa-times text-gray-800 mr-2 mt-1 text-xs"></i>
                                            <span>Reincidencia en infracciones</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-times text-gray-800 mr-2 mt-1 text-xs"></i>
                                            <span>Intención maliciosa evidente</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-times text-gray-800 mr-2 mt-1 text-xs"></i>
                                            <span>Daño significativo a otros usuarios</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-times text-gray-800 mr-2 mt-1 text-xs"></i>
                                            <span>Resistencia a la investigación</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <i class="fas fa-undo text-amber-500 mr-2"></i>
                                        Proceso de Apelación
                                    </h4>
                                    <p class="text-gray-600 text-sm mb-3">
                                        Los usuarios tienen derecho a apelar decisiones dentro de 30 días.
                                    </p>
                                    <button class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white px-4 py-2 rounded-lg text-sm transition-all shadow-md hover:shadow-lg">
                                        <i class="fas fa-gavel mr-2"></i>
                                        Ver Apelaciones Pendientes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer de Contacto -->
        <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-8 text-white text-center shadow-2xl border border-amber-400/20">
            <div class="flex items-center justify-center mb-6">
                
                <div class="text-left">
                    <h3 class="text-2xl font-serif mb-2">¿Necesitas Ayuda Adicional?</h3>
                    <p class="text-gray-300">
                        Contacta al equipo de supervisión para situaciones complejas
                    </p>
                </div>
            </div>
            <p class="text-gray-300 mb-6 max-w-2xl mx-auto">
                Si tienes dudas sobre algún procedimiento o enfrentas una situación no contemplada en esta guía, 
                no dudes en contactar al equipo de supervisión.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold px-6 py-3 rounded-xl transition-all shadow-lg hover:shadow-xl">
                    <i class="fas fa-phone mr-2"></i>
                    Contactar Supervisor
                </button>
                <button class="bg-white/10 hover:bg-white/20 text-white font-semibold px-6 py-3 rounded-xl transition-all border border-white/20 hover:border-white/30">
                    <i class="fas fa-book mr-2"></i>
                    Manual Completo
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .guide-nav-btn {
        @apply bg-white hover:bg-amber-50 text-gray-700 hover:text-amber-600 font-medium px-6 py-3 rounded-2xl border border-gray-200 hover:border-amber-300 transition-all duration-300 shadow-sm hover:shadow-md;
    }

    .guide-nav-btn.active {
        @apply bg-amber-100 text-amber-700 border-amber-300;
    }

    .ethics-card {
        @apply bg-gradient-to-r from-gray-50 to-white rounded-2xl p-6 hover:shadow-md transition-all duration-300 border border-gray-100;
    }

    .verification-section {
        @apply bg-gradient-to-r from-gray-50 to-white rounded-2xl p-6 mb-6 border border-gray-200 shadow-sm;
    }

    .checklist-item {
        @apply flex items-center text-gray-700 hover:text-gray-900 transition-colors duration-200 py-2;
    }

    .alert-item {
        @apply hover:shadow-md transition-all duration-300;
    }

    .action-card {
        @apply hover:shadow-lg transition-all duration-300;
    }

    .process-step {
        @apply pb-6 border-b border-gray-200 last:border-b-0;
    }

    .priority-item {
        @apply hover:shadow-md transition-all duration-300;
    }

    .sanction-level {
        @apply hover:shadow-lg transition-all duration-300;
    }

    html {
        scroll-behavior: smooth;
    }

    /* Animaciones suaves */
    .guide-nav-btn:hover {
        transform: translateY(-2px);
    }

    .ethics-card:hover,
    .action-card:hover,
    .sanction-level:hover {
        transform: translateY(-1px);
    }
</style>

<script>
    function scrollToSection(sectionId) {
        document.getElementById(sectionId).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    // Highlight active section in navigation
    window.addEventListener('scroll', function() {
        const sections = ['ethics', 'properties', 'users', 'reports', 'bans'];
        const navButtons = document.querySelectorAll('.guide-nav-btn');
        
        let current = '';
        sections.forEach(section => {
            const element = document.getElementById(section);
            const rect = element.getBoundingClientRect();
            if (rect.top <= 100) {
                current = section;
            }
        });

        navButtons.forEach((btn, index) => {
            btn.classList.remove('active');
            if (sections[index] === current) {
                btn.classList.add('active');
            }
        });
    });

    // Smooth animations on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all sections
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });
</script>
@endsection
