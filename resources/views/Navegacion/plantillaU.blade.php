<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DEPALER - Alquiler Premium')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Estilos adicionales -->
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navegador Premium -->
    <nav class="bg-white shadow-lg border-b border-amber-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <!-- Logo Premium -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('usuario.inicioUsuario') }}" class="flex items-center space-x-3 group">
                            <div class="w-12 h-12 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-home text-white text-xl"></i>
                            </div>
                            <span class="text-2xl font-serif text-amber-600 group-hover:text-amber-500 transition-colors">DEPALER</span>
                        </a>
                    </div>
                    
                    <!-- Enlaces de navegación -->
                    <div class="hidden lg:ml-12 lg:flex lg:space-x-8">
                        <a href="{{ route('usuario.inicioUsuario') }}" class="nav-link active">
                            <i class="fas fa-home mr-2"></i>
                            Inicio
                        </a>
                        <a href="{{ route('propiedades.listar') }}" class="nav-link">
                            <i class="fas fa-building mr-2"></i>
                            Espacios
                        </a>
                        <a href="{{ route('listar.reserva') }}" class="nav-link">
                            <i class="fas fa-calendar-check mr-2"></i>
                            Mis Reservas
                        </a>
                        <a href="{{ route('propietario.dashboard') }}" class="nav-link">
                            <i class="fas fa-plus-circle mr-2"></i>
                            Ser Anfitrión
                        </a>
                    </div>
                </div>
                
                <!-- Menú de usuario -->
                <div class="hidden lg:flex lg:items-center lg:space-x-6">
                    @if(Session::has('usuario_id'))
                        <!-- Notificaciones -->
                        <button class="relative p-2 text-gray-500 hover:text-amber-600 transition-colors">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute -top-1 -right-1 w-5 h-5 bg-amber-500 text-white text-xs rounded-full flex items-center justify-center font-bold">3</span>
                        </button>
                        
                        <!-- Perfil de usuario -->
                        <div class="relative">
                            <button id="profileMenuBtn" class="flex items-center space-x-3 p-2 rounded-full hover:bg-gray-100 transition-all group">
                                <img class="h-10 w-10 rounded-full object-cover border-2 border-amber-400/50 group-hover:border-amber-400 transition-colors" 
                                     src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}" 
                                     alt="Foto de perfil">
                                <div class="hidden xl:block text-left">
                                    <div class="text-gray-800 text-sm font-medium">{{ Session::get('usuario_nombre') }}</div>
                                    <div class="text-gray-500 text-xs">Ver perfil</div>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 text-sm group-hover:text-amber-500 transition-colors"></i>
                            </button>
                            
                            <!-- Menú flotante premium -->
                            <div id="profileMenu" class="hidden absolute right-0 mt-3 w-80 bg-white rounded-2xl shadow-2xl py-4 z-50 border border-gray-200">
                                <!-- Header del menú -->
                                <div class="px-6 pb-4 border-b border-gray-100">
                                    <div class="flex items-center space-x-4">
                                        <img class="h-16 w-16 rounded-full object-cover border-2 border-amber-400" 
                                             src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}" 
                                             alt="Foto de perfil">
                                        <div>
                                            <div class="text-gray-900 font-semibold text-lg">{{ Session::get('usuario_nombre') }}</div>
                                            <div class="text-gray-600 text-sm">{{ Session::get('email') }}</div>
                                            <div class="flex items-center mt-1">
                                                @for($i = 0; $i < 5; $i++)
                                                    <i class="fas fa-star text-amber-400 text-xs"></i>
                                                @endfor
                                                <span class="text-gray-500 text-xs ml-2">Huésped verificado</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Opciones del menú -->
                                <div class="py-2">
                                    <button id="openProfileModal" class="w-full flex items-center px-6 py-3 text-gray-700 hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-user-circle text-amber-500 w-5 mr-3"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Mi Perfil</div>
                                            <div class="text-sm text-gray-500">Ver información personal</div>
                                        </div>
                                    </button>
                                    
                                    <a href="{{ route('listar.reserva') }}" class="w-full flex items-center px-6 py-3 text-gray-700 hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-calendar-alt text-amber-500 w-5 mr-3"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Mis Reservas</div>
                                            <div class="text-sm text-gray-500">Gestionar reservas</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('propietario.dashboard') }}" class="w-full flex items-center px-6 py-3 text-gray-700 hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-home text-amber-500 w-5 mr-3"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Mis Propiedades</div>
                                            <div class="text-sm text-gray-500">Gestionar espacios</div>
                                        </div>
                                    </a>
                                    
                                    <hr class="my-2 border-gray-100">
                                    
                                    <button class="w-full flex items-center px-6 py-3 text-gray-700 hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-cog text-gray-400 w-5 mr-3"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Configuración</div>
                                            <div class="text-sm text-gray-500">Preferencias de cuenta</div>
                                        </div>
                                    </button>
                                    
                                    <button class="w-full flex items-center px-6 py-3 text-gray-700 hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-question-circle text-gray-400 w-5 mr-3"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Ayuda</div>
                                            <div class="text-sm text-gray-500">Centro de soporte</div>
                                        </div>
                                    </button>
                                    
                                    <hr class="my-2 border-gray-100">
                                    
                                    <button id="openLogoutModal" class="w-full flex items-center px-6 py-3 text-red-600 hover:bg-red-50 transition-colors">
                                        <i class="fas fa-sign-out-alt text-red-500 w-5 mr-3"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Cerrar Sesión</div>
                                            <div class="text-sm text-red-400">Salir de tu cuenta</div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('login.form') }}" class="text-gray-700 hover:text-amber-600 font-medium transition-colors">
                                Iniciar Sesión
                            </a>
                            <a href="{{ route('register.form') }}" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold px-6 py-2 rounded-full transition-all transform hover:scale-105">
                                Registrarse
                            </a>
                        </div>
                    @endif
                </div>
                
                <!-- Botón de menú móvil -->
                <div class="lg:hidden flex items-center">
                    <button id="mobileMenuBtn" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-amber-600 hover:bg-gray-100 transition-all">
                        <span class="sr-only">Abrir menú principal</span>
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Menú móvil -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="bg-white border-t border-gray-200 px-4 py-6 space-y-4">
                <a href="{{ route('usuario.inicioUsuario') }}" class="mobile-nav-link">
                    <i class="fas fa-home mr-3 text-amber-500"></i>
                    Inicio
                </a>
                <a href="{{ route('propiedades.listar') }}" class="mobile-nav-link">
                    <i class="fas fa-building mr-3 text-amber-500"></i>
                    Espacios
                </a>
                <a href="{{ route('listar.reserva') }}" class="mobile-nav-link">
                    <i class="fas fa-calendar-check mr-3 text-amber-500"></i>
                    Mis Reservas
                </a>
                <a href="{{ route('propietario.dashboard') }}" class="mobile-nav-link">
                    <i class="fas fa-plus-circle mr-3 text-amber-500"></i>
                    Ser Anfitrión
                </a>
                
                @if(Session::has('usuario_id'))
                    <hr class="border-gray-200 my-4">
                    <div class="flex items-center space-x-4 px-4 py-3 bg-gray-50 rounded-xl">
                        <img class="h-12 w-12 rounded-full object-cover border-2 border-amber-400" 
                             src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}" 
                             alt="Foto de perfil">
                        <div>
                            <div class="text-gray-800 font-medium">{{ Session::get('usuario_nombre') }}</div>
                            <div class="text-gray-500 text-sm">{{ Session::get('email') }}</div>
                        </div>
                    </div>
                    <button id="openProfileModalMobile" class="mobile-nav-link">
                        <i class="fas fa-user-circle mr-3 text-amber-500"></i>
                        Mi Perfil
                    </button>
                    <button id="openLogoutModalMobile" class="mobile-nav-link text-red-600">
                        <i class="fas fa-sign-out-alt mr-3 text-red-500"></i>
                        Cerrar Sesión
                    </button>
                @else
                    <hr class="border-gray-200 my-4">
                    <a href="{{ route('login.form') }}" class="mobile-nav-link">
                        <i class="fas fa-sign-in-alt mr-3 text-amber-500"></i>
                        Iniciar Sesión
                    </a>
                    <a href="{{ route('register.form') }}" class="mobile-nav-link-highlight">
                        <i class="fas fa-user-plus mr-3"></i>
                        Registrarse
                    </a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="min-h-screen">
        @hasSection('sidebar')
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex gap-6">
                <aside class="w-80 bg-white p-6 rounded-2xl border border-gray-200 shadow-lg">
                    @yield('sidebar')
                </aside>
                <div class="flex-1">
                    @yield('header')
                    @yield('content')
                </div>
            </div>
        @else
            @yield('header')
            @yield('content')
        @endif
    </main>

    <!-- Footer Premium -->
    <footer class="bg-gray-900 border-t border-amber-400/20 mt-auto">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-6">
                    <div class="w-10 h-10 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-home text-white text-lg"></i>
                    </div>
                    <span class="text-2xl font-serif text-amber-400">ESPACIOS</span>
                </div>
                <div class="text-gray-400">
                    @yield('footer', '© 2024 ESPACIOS. La plataforma líder en alquiler de espacios premium.')
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal de Perfil Premium -->
    <div id="profileModal" class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm flex justify-center items-center z-50 p-4">
        <div class="bg-white rounded-3xl p-8 w-full max-w-2xl shadow-2xl">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-serif text-gray-900">Mi Perfil</h2>
                <button id="closeProfileModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="text-center">
                    <img class="h-32 w-32 rounded-full object-cover border-4 border-amber-400 mx-auto mb-4" 
                         src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}" 
                         alt="Foto de perfil">
                    <div class="flex items-center justify-center mb-2">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-amber-400"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600">Huésped verificado</p>
                </div>
                
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-4">
                        <h3 class="font-semibold text-gray-900 mb-4">Información Personal</h3>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-user text-amber-500 w-5 mr-3"></i>
                                <div>
                                    <div class="text-sm text-gray-600">Nombre</div>
                                    <div class="font-medium text-gray-900">{{ Session::get('usuario_nombre') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-amber-500 w-5 mr-3"></i>
                                <div>
                                    <div class="text-sm text-gray-600">Email</div>
                                    <div class="font-medium text-gray-900">{{ Session::get('email') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone text-amber-500 w-5 mr-3"></i>
                                <div>
                                    <div class="text-sm text-gray-600">Teléfono</div>
                                    <div class="font-medium text-gray-900">{{ Session::get('telefono') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-amber-500 w-5 mr-3"></i>
                                <div>
                                    <div class="text-sm text-gray-600">Dirección</div>
                                    <div class="font-medium text-gray-900">{{ Session::get('direccion') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex space-x-4 mt-8">
                <button id="closeProfileModalBtn" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-4 rounded-xl transition-colors text-lg">
                    Cerrar
                </button>
                <button class="flex-1 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-4 rounded-xl transition-all text-lg">
                    <i class="fas fa-edit mr-2"></i>
                    Editar Perfil
                </button>
            </div>
        </div>
    </div>

    <!-- Modal de Cerrar Sesión -->
    <div id="logoutModal" class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm flex justify-center items-center z-50 p-4">
        <div class="bg-white rounded-3xl p-8 w-full max-w-md shadow-2xl">
            <div class="text-center">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-sign-out-alt text-red-500 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-serif text-gray-900 mb-4">¿Cerrar Sesión?</h3>
                <p class="text-gray-600 mb-8">¿Estás seguro de que quieres cerrar tu sesión? Tendrás que iniciar sesión nuevamente para acceder a tu cuenta.</p>
                
                <div class="flex space-x-4">
                    <button id="cancelLogout" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-3 rounded-xl transition-colors">
                        Cancelar
                    </button>
                    <a href="{{ route('logout') }}" class="flex-1 bg-red-500 hover:bg-red-600 text-white font-semibold py-3 rounded-xl text-center transition-colors">
                        Cerrar Sesión
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts adicionales -->
    @stack('scripts')
    
    <!-- SwiperJS JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        .nav-link {
            @apply text-gray-700 hover:text-amber-600 inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-200 rounded-lg hover:bg-gray-100;
        }
        
        .nav-link.active {
            @apply text-amber-600 bg-amber-50 font-semibold;
        }
        
        .mobile-nav-link {
            @apply flex items-center px-4 py-3 text-gray-700 hover:text-amber-600 hover:bg-gray-50 rounded-xl transition-all duration-200 font-medium;
        }
        
        .mobile-nav-link-highlight {
            @apply flex items-center px-4 py-3 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-xl transition-all duration-200 font-medium;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Swiper initialization
            const sliders = document.querySelectorAll('.mySwiper');
            sliders.forEach(function (slider) {
                new Swiper(slider, {
                    loop: true,
                    pagination: {
                        el: slider.querySelector('.swiper-pagination'),
                        clickable: true,
                    },
                    navigation: {
                        nextEl: slider.querySelector('.swiper-button-next'),
                        prevEl: slider.querySelector('.swiper-button-prev'),
                    },
                });
            });

            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Profile menu toggle
            const profileMenuBtn = document.getElementById('profileMenuBtn');
            const profileMenu = document.getElementById('profileMenu');
            
            if (profileMenuBtn && profileMenu) {
                profileMenuBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    profileMenu.classList.toggle('hidden');
                });
                
                document.addEventListener('click', (e) => {
                    if (!profileMenu.contains(e.target) && !profileMenuBtn.contains(e.target)) {
                        profileMenu.classList.add('hidden');
                    }
                });
            }

            // Profile modal
            const openProfileModal = document.getElementById('openProfileModal');
            const openProfileModalMobile = document.getElementById('openProfileModalMobile');
            const closeProfileModal = document.getElementById('closeProfileModal');
            const closeProfileModalBtn = document.getElementById('closeProfileModalBtn');
            const profileModal = document.getElementById('profileModal');
            
            function openModal() {
                profileModal.classList.remove('hidden');
                profileMenu.classList.add('hidden');
                mobileMenu.classList.add('hidden');
            }
            
            function closeModal() {
                profileModal.classList.add('hidden');
            }
            
            if (openProfileModal) openProfileModal.addEventListener('click', openModal);
            if (openProfileModalMobile) openProfileModalMobile.addEventListener('click', openModal);
            if (closeProfileModal) closeProfileModal.addEventListener('click', closeModal);
            if (closeProfileModalBtn) closeProfileModalBtn.addEventListener('click', closeModal);
            
            if (profileModal) {
                profileModal.addEventListener('click', (e) => {
                    if (e.target === profileModal) {
                        closeModal();
                    }
                });
            }

            // Logout modal
            const openLogoutModal = document.getElementById('openLogoutModal');
            const openLogoutModalMobile = document.getElementById('openLogoutModalMobile');
            const cancelLogout = document.getElementById('cancelLogout');
            const logoutModal = document.getElementById('logoutModal');
            
            function openLogoutModalFunc() {
                logoutModal.classList.remove('hidden');
                profileMenu.classList.add('hidden');
                mobileMenu.classList.add('hidden');
            }
            
            function closeLogoutModal() {
                logoutModal.classList.add('hidden');
            }
            
            if (openLogoutModal) openLogoutModal.addEventListener('click', openLogoutModalFunc);
            if (openLogoutModalMobile) openLogoutModalMobile.addEventListener('click', openLogoutModalFunc);
            if (cancelLogout) cancelLogout.addEventListener('click', closeLogoutModal);
            
            if (logoutModal) {
                logoutModal.addEventListener('click', (e) => {
                    if (e.target === logoutModal) {
                        closeLogoutModal();
                    }
                });
            }

            // Close modals with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModal();
                    closeLogoutModal();
                }
            });
        });
    </script>
</body>
</html>