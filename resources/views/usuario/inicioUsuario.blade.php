@extends('navegacion.plantillaU')

@section('content')
<div class="bg-black text-white overflow-hidden">
    <!-- Hero Section - Ajustado para la navegación con Parallax -->
    <section id="inicio" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Multiple Background Images for Parallax -->
        <div class="absolute inset-0 parallax-container">
            <div class="bg-slider">
                <div class="bg-slide active" style="background-image: url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')"></div>
                <div class="bg-slide" style="background-image: url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')"></div>
                <div class="bg-slide" style="background-image: url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')"></div>
                <div class="bg-slide" style="background-image: url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')"></div>
                <div class="bg-slide" style="background-image: url('https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')"></div>
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/70 parallax-overlay"></div>
        </div>

        <div class="relative z-10 text-center max-w-5xl mx-auto px-6 py-12 hero-content">
            <div class="mb-8 fade-in-up" data-delay="200">
                <div class="flex items-center justify-center mb-6">
                    @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-amber-400 text-lg star-animation" style="animation-delay: {{ $i * 0.1 }}s"></i>
                    @endfor
                </div>
                <p class="text-amber-400 text-base tracking-widest uppercase mb-6 font-medium fade-in-up" data-delay="800">ALQUILER DE ESPACIOS PREMIUM</p>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif mb-8 leading-tight fade-in-up" data-delay="300">
                LOS MEJORES ESPACIOS<br>
                <span class="text-amber-400 text-glow">DE LUJO</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-200 mb-16 max-w-3xl mx-auto leading-relaxed fade-in-up" data-delay="600">
                Descubre espacios únicos y exclusivos para tus eventos, reuniones o estadías especiales.
                Conectamos personas con los lugares más extraordinarios.
            </p>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-12 fade-in-up" data-delay="1000">
                <div class="glass-card hover-lift" data-delay="1200">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4 icon-bounce">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2 counter" data-target="500">0</div>
                    <div class="text-amber-400 font-medium">Espacios Únicos</div>
                    <div class="text-gray-300 text-sm mt-1">Verificados y premium</div>
                </div>
                
                <div class="glass-card hover-lift" data-delay="1400">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4 icon-bounce">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2 counter" data-target="4.9">0</div>
                    <div class="text-amber-400 font-medium">Calificación</div>
                    <div class="text-gray-300 text-sm mt-1">De nuestros huéspedes</div>
                </div>
                
                <div class="glass-card hover-lift" data-delay="1600">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4 icon-bounce">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2 counter" data-target="10000">0</div>
                    <div class="text-amber-400 font-medium">Huéspedes</div>
                    <div class="text-gray-300 text-sm mt-1">Satisfechos</div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="fade-in-up" data-delay="1800">
                <a href="{{ route('propiedades.listar') }}" class="btn-primary pulse-animation">
                    <i class="fas fa-search mr-3"></i>
                    EXPLORAR ESPACIOS
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Spaces Section -->
    <section id="espacios" class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20 fade-in-up">
                <div class="flex items-center justify-center mb-6">
                    @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-amber-500 text-lg star-animation" style="animation-delay: {{ $i * 0.1 }}s"></i>
                    @endfor
                </div>
                <h2 class="text-4xl md:text-5xl font-serif mb-6 text-gray-900">ESPACIOS DESTACADOS</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
                    Descubre nuestra selección curada de los espacios más exclusivos y mejor valorados por nuestra comunidad
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <!-- Espacio 1 -->
                <div class="space-card fade-in-up" data-delay="200">
                    <div class="relative h-64 md:h-80 overflow-hidden rounded-t-3xl">
                        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Loft Moderno Centro" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center space-x-1 rating-badge">
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
                <div class="space-card fade-in-up" data-delay="400">
                    <div class="relative h-64 md:h-80 overflow-hidden rounded-t-3xl">
                        <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Villa con Piscina" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center space-x-1 rating-badge">
                            <i class="fas fa-star text-amber-500 text-sm"></i>
                            <span class="text-gray-900 font-semibold text-sm">4.8</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl md:text-2xl font-serif text-gray-900 mb-2">Villa con Piscina</h3>
                        <p class="text-gray-600 mb-6 text-base md:text-lg">Tarija, Bolivia</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl md:text-3xl font-bold text-gray-900">Bs 250</span>
                                <span class="text-gray-600 text-base md:text-lg">/noche</span>
                            </div>
                            <span class="text-gray-500 text-sm">(89 reseñas)</span>
                        </div>
                    </div>
                </div>

                <!-- Espacio 3 -->
                <div class="space-card fade-in-up" data-delay="600">
                    <div class="relative h-64 md:h-80 overflow-hidden rounded-t-3xl">
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Apartamento de Lujo" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center space-x-1 rating-badge">
                            <i class="fas fa-star text-amber-500 text-sm"></i>
                            <span class="text-gray-900 font-semibold text-sm">4.9</span>
                        </div>
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl md:text-2xl font-serif text-gray-900 mb-2">Apartamento de Lujo</h3>
                        <p class="text-gray-600 mb-6 text-base md:text-lg">La Paz, Bolivia</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl md:text-3xl font-bold text-gray-900">Bs 180</span>
                                <span class="text-gray-600 text-base md:text-lg">/noche</span>
                            </div>
                            <span class="text-gray-500 text-sm">(156 reseñas)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA en sección clara -->
            <div class="text-center mt-16 fade-in-up" data-delay="800">
                <a href="{{ route('propiedades.listar') }}" class="btn-secondary">
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
                <div class="order-2 lg:order-1 fade-in-left">
                    <div class="relative h-80 md:h-96 lg:h-[500px] rounded-3xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Luxury interior" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2 fade-in-right">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 md:w-16 md:h-16 bg-amber-500 rounded-full flex items-center justify-center mr-4 md:mr-6 icon-bounce">
                            <i class="fas fa-award text-white text-xl md:text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl md:text-3xl font-serif text-amber-400">PLATAFORMA LÍDER</h3>
                            <p class="text-gray-400 text-base md:text-lg">EN ALQUILER DE ESPACIOS PREMIUM</p>
                        </div>
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-serif mb-8 leading-tight text-white">
                        LA MEJOR PLATAFORMA DE ESPACIOS
                        <span class="text-amber-400 text-glow"> DE LUJO</span>
                    </h2>
                    
                    <p class="text-gray-300 mb-10 leading-relaxed text-lg md:text-xl">
                        Conectamos a propietarios de espacios únicos con huéspedes que buscan experiencias extraordinarias.
                        Nuestra plataforma garantiza calidad, seguridad y satisfacción en cada reserva.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-8 lg:gap-10 mb-10">
                        <div class="text-center hover-scale">
                            <div class="text-4xl md:text-5xl font-bold text-amber-400 mb-3 counter" data-target="500">0</div>
                            <div class="text-gray-400 text-base md:text-lg">Espacios Verificados</div>
                        </div>
                        <div class="text-center hover-scale">
                            <div class="text-4xl md:text-5xl font-bold text-amber-400 mb-3 counter" data-target="4.9">0</div>
                            <div class="text-gray-400 text-base md:text-lg">Calificación Promedio</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('propiedades.listar') }}" class="btn-primary">
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
            <div class="text-center mb-20 fade-in-up">
                <h2 class="text-4xl md:text-5xl font-serif mb-6 text-gray-900">LO QUE DICEN NUESTROS HUÉSPEDES</h2>
                <p class="text-gray-600 text-lg md:text-xl">Experiencias reales de personas reales</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <!-- Reseña 1 -->
                <div class="review-card fade-in-up" data-delay="200">
                    <div class="flex items-center space-x-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-500 text-lg star-animation" style="animation-delay: {{ $i * 0.1 }}s"></i>
                        @endfor
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-base md:text-lg">
                        "Una experiencia increíble. El loft superó todas mis expectativas.
                        La ubicación es perfecta y las instalaciones de primera calidad."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                             alt="María González" class="w-12 h-12 md:w-16 md:h-16 rounded-full object-cover profile-image">
                        <div>
                            <div class="text-gray-900 font-bold text-base md:text-lg">María González</div>
                            <div class="text-gray-600 text-sm md:text-base">Cochabamba, Bolivia</div>
                        </div>
                    </div>
                </div>

                <!-- Reseña 2 -->
                <div class="review-card fade-in-up" data-delay="400">
                    <div class="flex items-center space-x-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-500 text-lg star-animation" style="animation-delay: {{ $i * 0.1 }}s"></i>
                        @endfor
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-base md:text-lg">
                        "La villa con piscina fue el lugar perfecto para nuestras vacaciones familiares.
                        Todo estaba impecable y la atención al cliente excepcional."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                             alt="Carlos Ruiz" class="w-12 h-12 md:w-16 md:h-16 rounded-full object-cover profile-image">
                        <div>
                            <div class="text-gray-900 font-bold text-base md:text-lg">Carlos Ruiz</div>
                            <div class="text-gray-600 text-sm md:text-base">Tarija, Bolivia</div>
                        </div>
                    </div>
                </div>

                <!-- Reseña 3 -->
                <div class="review-card fade-in-up" data-delay="600">
                    <div class="flex items-center space-x-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-500 text-lg star-animation" style="animation-delay: {{ $i * 0.1 }}s"></i>
                        @endfor
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-base md:text-lg">
                        "Espacios únicos y verificados. La plataforma es muy fácil de usar
                        y siempre encuentro exactamente lo que busco."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                             alt="Ana Martín" class="w-12 h-12 md:w-16 md:h-16 rounded-full object-cover profile-image">
                        <div>
                            <div class="text-gray-900 font-bold text-base md:text-lg">Ana Martín</div>
                            <div class="text-gray-600 text-sm md:text-base">Santa Cruz, Bolivia</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section - Fondo oscuro -->
    <section class="py-24 bg-gradient-to-b from-black to-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20 fade-in-up">
                <h2 class="text-4xl md:text-5xl font-serif mb-6 text-white">¿POR QUÉ ELEGIR ESPACIOS?</h2>
                <p class="text-gray-400 max-w-3xl mx-auto text-lg md:text-xl">
                    Ofrecemos una experiencia única y segura para propietarios e huéspedes
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <div class="feature-card fade-in-up" data-delay="200">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-6 md:mb-8 icon-bounce">
                        <i class="fas fa-shield-alt text-white text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-serif mb-4 md:mb-6 text-amber-400">Verificación Completa</h3>
                    <p class="text-gray-300 leading-relaxed text-base md:text-lg">
                        Todos nuestros espacios pasan por un riguroso proceso de verificación para garantizar calidad y seguridad.
                    </p>
                </div>
                
                <div class="feature-card fade-in-up" data-delay="400">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-6 md:mb-8 icon-bounce">
                        <i class="fas fa-users text-white text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-serif mb-4 md:mb-6 text-amber-400">Comunidad Confiable</h3>
                    <p class="text-gray-300 leading-relaxed text-base md:text-lg">
                        Sistema de reseñas y calificaciones que permite a la comunidad compartir experiencias reales.
                    </p>
                </div>
                
                <div class="feature-card fade-in-up" data-delay="600">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-6 md:mb-8 icon-bounce">
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
            <div class="fade-in-up">
                <h2 class="text-4xl md:text-5xl font-serif mb-8 text-gray-900">¿LISTO PARA TU PRÓXIMA AVENTURA?</h2>
                <p class="text-xl md:text-2xl text-gray-600 mb-12 leading-relaxed">
                    Únete a miles de huéspedes satisfechos y descubre espacios únicos en toda Bolivia
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('propiedades.listar') }}" class="btn-secondary">
                        <i class="fas fa-search mr-3"></i>
                        BUSCAR ESPACIOS
                    </a>
                    <button class="btn-outline">
                        <i class="fas fa-plus mr-3"></i>
                        SER ANFITRIÓN
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

<style>
    .font-serif {
        font-family: 'Playfair Display', serif;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        overflow-x: hidden;
    }

    /* Parallax Styles (Solo para el Hero Section) */
    .parallax-container {
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .bg-slider {
        position: absolute;
        width: 100%;
        height: 120%; /* Permite el movimiento parallax */
        top: -10%; /* Ajuste inicial para el parallax */
    }

    .bg-slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0;
        transition: opacity 2s ease-in-out, transform 2s ease-in-out;
        transform: scale(1.1); /* Efecto de zoom inicial */
        will-change: transform, opacity;
    }

    .bg-slide.active {
        opacity: 1;
        transform: scale(1);
    }

    .parallax-overlay {
        transition: opacity 0.3s ease;
    }

    /* Eliminar parallax de imágenes individuales */
    /* .parallax-image {
        transition: transform 0.3s ease;
        will-change: transform;
    } */

    /* Eliminar background-attachment: fixed para evitar problemas de rendimiento y mantener solo el parallax del hero */
    /* .parallax-section {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    } */

    /* Glass Effect */
    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 1rem;
        padding: 1.5rem;
        text-align: center;
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(50px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .glass-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    /* Button Styles */
    .btn-primary {
        display: inline-flex;
        align-items: center;
        background: linear-gradient(45deg, #f59e0b, #d97706);
        color: white;
        font-weight: bold;
        padding: 1rem 3rem;
        border-radius: 1rem;
        font-size: 1.25rem;
        transition: all 0.3s ease;
        text-decoration: none;
        box-shadow: 0 10px 30px rgba(245, 158, 11, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 40px rgba(245, 158, 11, 0.4);
        background: linear-gradient(45deg, #d97706, #b45309);
    }

    .btn-secondary {
        display: inline-flex;
        align-items: center;
        background: #111827;
        color: white;
        font-weight: bold;
        padding: 1rem 2.5rem;
        border-radius: 1rem;
        font-size: 1.125rem;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-secondary:hover {
        background: #1f2937;
        transform: translateY(-3px) scale(1.05);
    }

    .btn-outline {
        display: inline-flex;
        align-items: center;
        border: 2px solid #111827;
        color: #111827;
        background: transparent;
        font-weight: bold;
        padding: 1rem 2.5rem;
        border-radius: 1rem;
        font-size: 1.125rem;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-outline:hover {
        background: #111827;
        color: white;
        transform: translateY(-3px) scale(1.05);
    }

    /* Card Styles */
    .space-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
        opacity: 0;
        transform: translateY(50px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .space-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    }

    /* Eliminar el efecto de zoom en la imagen de la tarjeta al hacer hover */
    /* .space-card:hover .parallax-image {
        transform: scale(1.1);
    } */

    .review-card {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(50px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .review-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    .feature-card {
        background: rgba(31, 41, 55, 0.5);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(107, 114, 128, 1);
        border-radius: 1.5rem;
        padding: 2rem;
        text-align: center;
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(50px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .feature-card:hover {
        border-color: #f59e0b;
        background: rgba(31, 41, 55, 0.7);
        transform: translateY(-10px) scale(1.02);
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes starAnimation {
        from {
            opacity: 0;
            transform: scale(0) rotate(0deg);
        }
        to {
            opacity: 1;
            transform: scale(1) rotate(360deg);
        }
    }

    @keyframes iconBounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.4);
        }
        70% {
            box-shadow: 0 0 0 20px rgba(245, 158, 11, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(245, 158, 11, 0);
        }
    }

    /* Utility Classes */
    .fade-in-up {
        opacity: 0;
        transform: translateY(50px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .fade-in-left {
        opacity: 0;
        transform: translateX(-50px);
        animation: fadeInLeft 0.8s ease forwards;
    }

    .fade-in-right {
        opacity: 0;
        transform: translateX(50px);
        animation: fadeInRight 0.8s ease forwards;
    }

    .star-animation {
        animation: starAnimation 0.5s ease forwards;
    }

    .icon-bounce {
        animation: iconBounce 2s infinite;
    }

    .pulse-animation {
        animation: pulse 2s infinite;
    }

    .hover-lift {
        transition: transform 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-10px);
    }

    .hover-scale {
        transition: transform 0.3s ease;
    }

    .hover-scale:hover {
        transform: scale(1.1);
    }

    .text-glow {
        text-shadow: 0 0 20px rgba(245, 158, 11, 0.5);
    }

    .rating-badge {
        transition: all 0.3s ease;
    }

    .rating-badge:hover {
        transform: scale(1.1);
        background: rgba(255, 255, 255, 1);
    }

    .profile-image {
        transition: all 0.3s ease;
    }

    .profile-image:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .bg-slide {
            height: 110%;
            top: -5%;
        }
        
        .glass-card {
            padding: 1rem;
        }
        
        .btn-primary, .btn-secondary {
            padding: 0.75rem 2rem;
            font-size: 1rem;
        }
    }

    /* Smooth scrolling for all browsers */
    * {
        scroll-behavior: smooth;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Background Image Slider
    let currentSlide = 0;
    const slides = document.querySelectorAll('.bg-slide');
    const totalSlides = slides.length;

    function nextSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % totalSlides;
        slides[currentSlide].classList.add('active');
    }

    setInterval(nextSlide, 5000);

    // Parallax Effect (Solo para el Hero Section)
    function parallaxScroll() {
        const scrolled = window.pageYOffset;
        const parallaxBg = document.querySelector('.bg-slider');
        const parallaxOverlay = document.querySelector('.parallax-overlay');

        // Hero parallax
        if (parallaxBg) {
            parallaxBg.style.transform = `translateY(${scrolled * 0.5}px)`;
        }

        if (parallaxOverlay) {
            const opacity = Math.max(0, 1 - scrolled / 800);
            parallaxOverlay.style.opacity = opacity;
        }

        // Se ha eliminado el parallax para las imágenes dentro de las tarjetas
    }

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const delay = element.dataset.delay || 0;
                
                setTimeout(() => {
                    element.style.animationDelay = delay + 'ms';
                    element.classList.add('animate');
                }, delay);
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .glass-card, .space-card, .review-card, .feature-card').forEach(el => {
        observer.observe(el);
    });

    // Counter Animation
    function animateCounter(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            
            if (target === 4.9) {
                element.textContent = current.toFixed(1);
            } else if (target >= 10000) {
                element.textContent = Math.floor(current).toLocaleString() + '+';
            } else {
                element.textContent = Math.floor(current) + '+';
            }
        }, 16);
    }

    // Counter observer
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const target = parseFloat(element.dataset.target);
                animateCounter(element, target);
                counterObserver.unobserve(element);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.counter').forEach(counter => {
        counterObserver.observe(counter);
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Throttled scroll listener
    let ticking = false;
    function updateParallax() {
        if (!ticking) {
            requestAnimationFrame(() => {
                parallaxScroll();
                ticking = false;
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', updateParallax);
    window.addEventListener('resize', updateParallax);

    // Add loading class removal
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
});
</script>
@endpush
