@extends('navegacion.plantillaU')

@section('content')
<div class="bg-black text-white">
    <!-- Hero Section - Ajustado para la navegación -->
    <section id="inicio" class="relative min-h-screen flex items-center justify-center pt-20">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                 alt="Luxury space interior" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/70"></div>
        </div>

        <div class="relative z-10 text-center max-w-5xl mx-auto px-6 py-12">
            <div class="mb-8">
                <div class="flex items-center justify-center mb-6">
                    @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-amber-400 text-lg"></i>
                    @endfor
                </div>
                <p class="text-amber-400 text-base tracking-widest uppercase mb-6 font-medium">ALQUILER DE ESPACIOS PREMIUM</p>
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif mb-8 leading-tight">
                LOS MEJORES ESPACIOS<br>
                <span class="text-amber-400">DE LUJO</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-200 mb-16 max-w-3xl mx-auto leading-relaxed">
                Descubre espacios únicos y exclusivos para tus eventos, reuniones o estadías especiales. 
                Conectamos personas con los lugares más extraordinarios.
            </p>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-12">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-300">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2">500+</div>
                    <div class="text-amber-400 font-medium">Espacios Únicos</div>
                    <div class="text-gray-300 text-sm mt-1">Verificados y premium</div>
                </div>

                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-300">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2">4.9</div>
                    <div class="text-amber-400 font-medium">Calificación</div>
                    <div class="text-gray-300 text-sm mt-1">De nuestros huéspedes</div>
                </div>

                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center hover:bg-white/15 transition-all duration-300">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2">10K+</div>
                    <div class="text-amber-400 font-medium">Huéspedes</div>
                    <div class="text-gray-300 text-sm mt-1">Satisfechos</div>
                </div>
            </div>

            <!-- CTA Button -->
            <div>
                <a href="{{ route('propiedades.listar') }}" class="inline-flex items-center bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold px-12 py-4 rounded-2xl text-xl transition-all transform hover:scale-105 hover:shadow-2xl">
                    <i class="fas fa-search mr-3"></i>
                    EXPLORAR ESPACIOS
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Spaces Section - Con fondo claro -->
    <section id="espacios" class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <div class="flex items-center justify-center mb-6">
                    @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-amber-500 text-lg"></i>
                    @endfor
                </div>
                <h2 class="text-4xl md:text-5xl font-serif mb-6 text-gray-900">ESPACIOS DESTACADOS</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    Descubre nuestra selección curada de los espacios más exclusivos y mejor valorados por nuestra comunidad
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <!-- Espacio 1 -->
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:transform hover:scale-105">
                    <div class="relative h-64 md:h-80">
                        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Loft Moderno Centro" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center space-x-1">
                            <i class="fas fa-star text-amber-500 text-sm"></i>
                            <span class="text-gray-900 font-semibold text-sm">4.9</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl md:text-2xl font-serif text-gray-900 mb-2">Loft Moderno Centro</h3>
                        <p class="text-gray-600 mb-6 text-base md:text-lg">Santa Cruz, Bolivia</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl md:text-3xl font-bold text-gray-900">Bs 120</span>
                                <span class="text-gray-600 text-base md:text-lg">/noche</span>
                            </div>
                            <span class="text-gray-500 text-sm">(127 reseñas)</span>
                        </div>
                    </div>
                </div>

                <!-- Espacio 2 -->
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:transform hover:scale-105">
                    <div class="relative h-64 md:h-80">
                        <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Villa con Piscina" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center space-x-1">
                            <i class="fas fa-star text-amber-500 text-sm"></i>
                            <span class="text-gray-900 font-semibold text-sm">4.8</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl md:text-2xl font-serif text-gray-900 mb-2">Villa con Piscina</h3>
                        <p class="text-gray-600 mb-6 text-base md:text-lg">Tarija, Bolivia</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl md:text-3xl font-bold text-gray-900">bs 250</span>
                                <span class="text-gray-600 text-base md:text-lg">/noche</span>
                            </div>
                            <span class="text-gray-500 text-sm">(89 reseñas)</span>
                        </div>
                    </div>
                </div>

                <!-- Espacio 3 -->
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:transform hover:scale-105">
                    <div class="relative h-64 md:h-80">
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Apartamento de Lujo" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center space-x-1">
                            <i class="fas fa-star text-amber-500 text-sm"></i>
                            <span class="text-gray-900 font-semibold text-sm">4.9</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl md:text-2xl font-serif text-gray-900 mb-2">Apartamento de Lujo</h3>
                        <p class="text-gray-600 mb-6 text-base md:text-lg">La Paz, Bolivia</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl md:text-3xl font-bold text-gray-900">bs 180</span>
                                <span class="text-gray-600 text-base md:text-lg">/noche</span>
                            </div>
                            <span class="text-gray-500 text-sm">(156 reseñas)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA en sección clara -->
            <div class="text-center mt-16">
                <a href="{{ route('propiedades.listar') }}" class="inline-flex items-center bg-gray-900 hover:bg-gray-800 text-white font-bold px-10 py-4 rounded-2xl text-lg transition-all transform hover:scale-105">
                    <i class="fas fa-arrow-right mr-3"></i>
                    VER TODOS LOS ESPACIOS
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section - Fondo oscuro -->
    <section id="nosotros" class="py-24 bg-gradient-to-b from-gray-900 to-black">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="relative h-80 md:h-96 lg:h-[500px] rounded-3xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Luxury interior" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 md:w-16 md:h-16 bg-amber-500 rounded-full flex items-center justify-center mr-4 md:mr-6">
                            <i class="fas fa-award text-white text-xl md:text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl md:text-3xl font-serif text-amber-400">PLATAFORMA LÍDER</h3>
                            <p class="text-gray-400 text-base md:text-lg">EN ALQUILER DE ESPACIOS PREMIUM</p>
                        </div>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-serif mb-8 leading-tight text-white">
                        LA MEJOR PLATAFORMA DE ESPACIOS
                        <span class="text-amber-400"> DE LUJO</span>
                    </h2>

                    <p class="text-gray-300 mb-10 leading-relaxed text-lg md:text-xl">
                        Conectamos a propietarios de espacios únicos con huéspedes que buscan experiencias extraordinarias. 
                        Nuestra plataforma garantiza calidad, seguridad y satisfacción en cada reserva.
                    </p>

                    <div class="grid grid-cols-2 gap-8 lg:gap-10 mb-10">
                        <div class="text-center">
                            <div class="text-4xl md:text-5xl font-bold text-amber-400 mb-3">500+</div>
                            <div class="text-gray-400 text-base md:text-lg">Espacios Verificados</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl md:text-5xl font-bold text-amber-400 mb-3">4.9</div>
                            <div class="text-gray-400 text-base md:text-lg">Calificación Promedio</div>
                        </div>
                    </div>

                    <a href="{{ route('propiedades.listar') }}" class="inline-flex items-center bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold px-8 md:px-10 py-3 md:py-4 rounded-2xl text-base md:text-lg transition-all transform hover:scale-105">
                        <i class="fas fa-search mr-3"></i>
                        EXPLORAR ESPACIOS
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section - Fondo claro -->
    <section id="reseñas" class="py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-serif mb-6 text-gray-900">LO QUE DICEN NUESTROS HUÉSPEDES</h2>
                <p class="text-gray-600 text-lg md:text-xl">Experiencias reales de personas reales</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <!-- Reseña 1 -->
                <div class="bg-white rounded-3xl p-8 md:p-10 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-500 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-base md:text-lg">
                        "Una experiencia increíble. El loft superó todas mis expectativas. 
                        La ubicación es perfecta y las instalaciones de primera calidad."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="María González" class="w-12 h-12 md:w-16 md:h-16 rounded-full object-cover">
                        <div>
                            <div class="text-gray-900 font-bold text-base md:text-lg">María González</div>
                            <div class="text-gray-600 text-sm md:text-base">Cochabamba, Bolivia</div>
                        </div>
                    </div>
                </div>

                <!-- Reseña 2 -->
                <div class="bg-white rounded-3xl p-8 md:p-10 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-500 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-base md:text-lg">
                        "La villa con piscina fue el lugar perfecto para nuestras vacaciones familiares. 
                        Todo estaba impecable y la atención al cliente excepcional."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Carlos Ruiz" class="w-12 h-12 md:w-16 md:h-16 rounded-full object-cover">
                        <div>
                            <div class="text-gray-900 font-bold text-base md:text-lg">Carlos Ruiz</div>
                            <div class="text-gray-600 text-sm md:text-base">Tarija, Bolivia</div>
                        </div>
                    </div>
                </div>

                <!-- Reseña 3 -->
                <div class="bg-white rounded-3xl p-8 md:p-10 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-500 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-base md:text-lg">
                        "Espacios únicos y verificados. La plataforma es muy fácil de usar 
                        y siempre encuentro exactamente lo que busco."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                             alt="Ana Martín" class="w-12 h-12 md:w-16 md:h-16 rounded-full object-cover">
                        <div>
                            <div class="text-gray-900 font-bold text-base md:text-lg">Ana Martín</div>
                            <div class="text-gray-600 text-sm md:text-base">Santa Cruz, Tarija</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section - Fondo oscuro -->
    <section class="py-24 bg-gradient-to-b from-black to-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-serif mb-6 text-white">¿POR QUÉ ELEGIR ESPACIOS?</h2>
                <p class="text-gray-400 max-w-3xl mx-auto text-lg md:text-xl">
                    Ofrecemos una experiencia única y segura para propietarios e huéspedes
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-3xl p-8 md:p-10 text-center hover:border-amber-500 hover:bg-gray-800/70 transition-all duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-6 md:mb-8">
                        <i class="fas fa-shield-alt text-white text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-serif mb-4 md:mb-6 text-amber-400">Verificación Completa</h3>
                    <p class="text-gray-300 leading-relaxed text-base md:text-lg">
                        Todos nuestros espacios pasan por un riguroso proceso de verificación para garantizar calidad y seguridad.
                    </p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-3xl p-8 md:p-10 text-center hover:border-amber-500 hover:bg-gray-800/70 transition-all duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-6 md:mb-8">
                        <i class="fas fa-users text-white text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-serif mb-4 md:mb-6 text-amber-400">Comunidad Confiable</h3>
                    <p class="text-gray-300 leading-relaxed text-base md:text-lg">
                        Sistema de reseñas y calificaciones que permite a la comunidad compartir experiencias reales.
                    </p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-3xl p-8 md:p-10 text-center hover:border-amber-500 hover:bg-gray-800/70 transition-all duration-300">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-6 md:mb-8">
                        <i class="fas fa-star text-white text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-serif mb-4 md:mb-6 text-amber-400">Experiencias Premium</h3>
                    <p class="text-gray-300 leading-relaxed text-base md:text-lg">
                        Espacios cuidadosamente seleccionados para ofrecer experiencias únicas e inolvidables.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section - Fondo claro -->
    <section id="contacto" class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-5xl mx-auto text-center px-6">
            <h2 class="text-4xl md:text-5xl font-serif mb-8 text-gray-900">¿LISTO PARA TU PRÓXIMA AVENTURA?</h2>
            <p class="text-xl md:text-2xl text-gray-600 mb-12 leading-relaxed">
                Únete a miles de huéspedes satisfechos y descubre espacios únicos en toda España
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('propiedades.listar') }}" class="inline-flex items-center bg-gray-900 hover:bg-gray-800 text-white font-bold px-8 md:px-10 py-3 md:py-4 rounded-2xl text-base md:text-lg transition-all transform hover:scale-105">
                    <i class="fas fa-search mr-3"></i>
                    BUSCAR ESPACIOS
                </a>
                <button class="inline-flex items-center border-2 border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white font-bold px-8 md:px-10 py-3 md:py-4 rounded-2xl text-base md:text-lg transition-all transform hover:scale-105">
                    <i class="fas fa-plus mr-3"></i>
                    SER ANFITRIÓN
                </button>
            </div>
        </div>
    </section>
</div>

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
@endpush
@endsection