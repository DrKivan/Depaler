@extends('navegacion.plantillaU')

@section('header')
<header class="relative z-50 px-6 py-4">
   
</header>
@endsection

@section('content')
<div class="min-h-screen bg-black text-white">
    
    <!-- Hero Section -->
    <section id="inicio" class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                 alt="Luxury space interior" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
            <div class="mb-6">
                <div class="flex items-center justify-center mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-amber-400 text-sm"></i>
                    @endfor
                </div>
                <p class="text-amber-400 text-sm tracking-widest uppercase mb-4">ALQUILER DE ESPACIOS PREMIUM</p>
            </div>

            <h1 class="text-5xl md:text-7xl font-serif mb-6 leading-tight">
                LOS MEJORES ESPACIOS<br>
                <span class="text-amber-400">DE LUJO</span>
            </h1>

            <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
                Descubre espacios únicos y exclusivos para tus eventos, reuniones o estadías especiales. 
                Conectamos personas con los lugares más extraordinarios.
            </p>

            <!-- Search Form -->
            <div class="bg-black/80 backdrop-blur-sm rounded-lg p-6 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="space-y-2">
                        <label class="text-sm text-gray-400">UBICACIÓN</label>
                        <input type="text" placeholder="¿Dónde buscas?" 
                               class="w-full bg-gray-800 border border-gray-700 rounded-md px-3 py-2 text-white placeholder-gray-500">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm text-gray-400">FECHA ENTRADA</label>
                        <input type="date" class="w-full bg-gray-800 border border-gray-700 rounded-md px-3 py-2 text-white">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm text-gray-400">FECHA SALIDA</label>
                        <input type="date" class="w-full bg-gray-800 border border-gray-700 rounded-md px-3 py-2 text-white">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm text-gray-400">HUÉSPEDES</label>
                        <select class="w-full bg-gray-800 border border-gray-700 rounded-md px-3 py-2 text-white">
                            <option>1 Huésped</option>
                            <option>2 Huéspedes</option>
                            <option>3+ Huéspedes</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="w-full mt-6 bg-amber-600 hover:bg-amber-700 text-black font-medium py-3 rounded transition-colors">
                    <i class="fas fa-search mr-2"></i>
                    BUSCAR ESPACIOS
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Spaces Section -->
    <section id="espacios" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-amber-400 text-sm"></i>
                    @endfor
                </div>
                <h2 class="text-4xl font-serif mb-4">ESPACIOS DESTACADOS</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Descubre nuestra selección curada de los espacios más exclusivos y mejor valorados por nuestra comunidad
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Espacio 1 -->
                <div class="bg-gray-900 border border-gray-800 rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Loft Moderno Centro" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-xl font-serif text-white">Loft Moderno Centro</h3>
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-star text-amber-400 text-sm"></i>
                                <span class="text-amber-400 text-sm">4.9</span>
                            </div>
                        </div>
                        <p class="text-gray-400 mb-4">Madrid, España</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-amber-400">
                                €120
                                <span class="text-sm text-gray-400">/noche</span>
                            </span>
                            <span class="text-sm text-gray-400">(127 reseñas)</span>
                        </div>
                    </div>
                </div>

                <!-- Espacio 2 -->
                <div class="bg-gray-900 border border-gray-800 rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Villa con Piscina" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-xl font-serif text-white">Villa con Piscina</h3>
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-star text-amber-400 text-sm"></i>
                                <span class="text-amber-400 text-sm">4.8</span>
                            </div>
                        </div>
                        <p class="text-gray-400 mb-4">Barcelona, España</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-amber-400">
                                €250
                                <span class="text-sm text-gray-400">/noche</span>
                            </span>
                            <span class="text-sm text-gray-400">(89 reseñas)</span>
                        </div>
                    </div>
                </div>

                <!-- Espacio 3 -->
                <div class="bg-gray-900 border border-gray-800 rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Apartamento de Lujo" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-xl font-serif text-white">Apartamento de Lujo</h3>
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-star text-amber-400 text-sm"></i>
                                <span class="text-amber-400 text-sm">4.9</span>
                            </div>
                        </div>
                        <p class="text-gray-400 mb-4">Valencia, España</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-amber-400">
                                €180
                                <span class="text-sm text-gray-400">/noche</span>
                            </span>
                            <span class="text-sm text-gray-400">(156 reseñas)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="nosotros" class="py-20 px-6 bg-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="relative h-96 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Luxury interior" class="w-full h-full object-cover">
                    </div>
                </div>

                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-award text-black text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-serif text-amber-400">PLATAFORMA LÍDER</h3>
                            <p class="text-gray-400">EN ALQUILER DE ESPACIOS PREMIUM</p>
                        </div>
                    </div>

                    <h2 class="text-4xl font-serif mb-6">
                        LA MEJOR PLATAFORMA DE ESPACIOS
                        <span class="text-amber-400"> DE LUJO</span>
                    </h2>

                    <p class="text-gray-400 mb-8 leading-relaxed">
                        Conectamos a propietarios de espacios únicos con huéspedes que buscan experiencias extraordinarias. 
                        Nuestra plataforma garantiza calidad, seguridad y satisfacción en cada reserva.
                    </p>

                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-amber-400 mb-2">500+</div>
                            <div class="text-gray-400">Espacios Verificados</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-amber-400 mb-2">4.9</div>
                            <div class="text-gray-400">Calificación Promedio</div>
                        </div>
                    </div>

                    <button class="bg-amber-600 hover:bg-amber-700 text-black font-medium px-8 py-3 rounded transition-colors">
                        EXPLORAR ESPACIOS
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reseñas" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif mb-4">LO QUE DICEN NUESTROS HUÉSPEDES</h2>
                <p class="text-gray-400">Experiencias reales de personas reales</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Reseña 1 -->
                <div class="bg-gray-900 border border-gray-800 rounded-lg p-8">
                    <div class="flex items-center space-x-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-400 text-sm"></i>
                        @endfor
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        "Una experiencia increíble. El loft superó todas mis expectativas. 
                        La ubicación es perfecta y las instalaciones de primera calidad."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="María González" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="text-white font-semibold">María González</div>
                            <div class="text-gray-400 text-sm">Madrid, España</div>
                        </div>
                    </div>
                </div>

                <!-- Reseña 2 -->
                <div class="bg-gray-900 border border-gray-800 rounded-lg p-8">
                    <div class="flex items-center space-x-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-400 text-sm"></i>
                        @endfor
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        "La villa con piscina fue el lugar perfecto para nuestras vacaciones familiares. 
                        Todo estaba impecable y la atención al cliente excepcional."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Carlos Ruiz" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="text-white font-semibold">Carlos Ruiz</div>
                            <div class="text-gray-400 text-sm">Barcelona, España</div>
                        </div>
                    </div>
                </div>

                <!-- Reseña 3 -->
                <div class="bg-gray-900 border border-gray-800 rounded-lg p-8">
                    <div class="flex items-center space-x-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-400 text-sm"></i>
                        @endfor
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        "Espacios únicos y verificados. La plataforma es muy fácil de usar 
                        y siempre encuentro exactamente lo que busco."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Ana Martín" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="text-white font-semibold">Ana Martín</div>
                            <div class="text-gray-400 text-sm">Valencia, España</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 px-6 bg-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif mb-4">¿POR QUÉ ELEGIR ESPACIOS?</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Ofrecemos una experiencia única y segura para propietarios e huéspedes
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 text-center hover:border-amber-600 transition-colors">
                    <div class="w-16 h-16 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-black text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-serif mb-4 text-amber-400">Verificación Completa</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Todos nuestros espacios pasan por un riguroso proceso de verificación para garantizar calidad y seguridad.
                    </p>
                </div>

                <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 text-center hover:border-amber-600 transition-colors">
                    <div class="w-16 h-16 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-black text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-serif mb-4 text-amber-400">Comunidad Confiable</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Sistema de reseñas y calificaciones que permite a la comunidad compartir experiencias reales.
                    </p>
                </div>

                <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 text-center hover:border-amber-600 transition-colors">
                    <div class="w-16 h-16 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-star text-black text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-serif mb-4 text-amber-400">Experiencias Premium</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Espacios cuidadosamente seleccionados para ofrecer experiencias únicas e inolvidables.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-serif mb-6">¿LISTO PARA TU PRÓXIMA AVENTURA?</h2>
            <p class="text-xl text-gray-300 mb-8">
                Únete a miles de huéspedes satisfechos y descubre espacios únicos en toda España
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-amber-600 hover:bg-amber-700 text-black font-bold px-8 py-4 rounded-lg transition-colors">
                    BUSCAR ESPACIOS
                </button>
                <button class="border-2 border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-black font-bold px-8 py-4 rounded-lg transition-colors">
                    SER ANFITRIÓN
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 px-6 border-t border-gray-800">
        <div class="max-w-7xl mx-auto text-center">
            <div class="flex items-center justify-center space-x-2 mb-6">
                <div class="w-8 h-8 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-home text-black text-sm"></i>
                </div>
                <span class="text-xl font-serif text-amber-400">ESPACIOS</span>
            </div>
            <p class="text-gray-400 mb-4">La plataforma líder en alquiler de espacios premium</p>
            <div class="flex items-center justify-center space-x-6 text-sm text-gray-500">
                <span>© 2024 Espacios. Todos los derechos reservados.</span>
            </div>
        </div>
    </footer>
</div>

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
@endpush
@endsection
