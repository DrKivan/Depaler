<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel Moderador - ESPACIOS')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Alertify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Alertify JS -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- Navegación Premium Blanca -->
    <nav class="bg-white shadow-xl border-b-2 border-amber-400/30 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo Premium -->
                <div class="flex items-center">
                    <a href="{{ route('moderador.dashboard') }}" class="flex items-center space-x-3 group">
                        <div class="w-12 h-12 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <span class="text-2xl font-serif text-gray-900 group-hover:text-amber-600 transition-colors">DEPALER</span>
                            <div class="text-xs text-amber-600 uppercase tracking-wider font-semibold">Panel Moderador</div>
                        </div>
                    </a>
                    
                    <!-- Enlaces de navegación -->
                    <div class="ml-12 flex space-x-2">
                        <a href="{{ route('moderador.dashboard') }}" class="nav-link">
                            <i class="fas fa-tachometer-alt mr-2"></i>
                            Dashboard
                        </a>
                        <a href="{{ route('moderador.solicitudes') }}" class="nav-link">
                            <i class="fas fa-clipboard-list mr-2"></i>
                            Solicitudes
                        </a>
                        <a href="{{ route('usuario.index') }}" class="nav-link">
                            <i class="fas fa-users mr-2"></i>
                            Usuarios Plataforma
                        </a>
                    </div>
                </div>
                
                <!-- Menú de usuario -->
                <div class="flex items-center space-x-6">
                    @if(Session::has('usuario_id'))
                        <!-- Notificaciones -->
                        <button class="relative p-3 text-gray-600 hover:text-amber-600 transition-colors duration-200 rounded-full hover:bg-amber-50">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center font-bold animate-pulse">3</span>
                        </button>
                        
                        <!-- Perfil de usuario -->
                        <div class="relative">
                            <button id="profileMenuBtn" class="flex items-center space-x-3 p-2 rounded-2xl hover:bg-amber-50 transition-all duration-300 group border border-transparent hover:border-amber-200">
                                <img class="h-12 w-12 rounded-full object-cover border-2 border-amber-400/50 group-hover:border-amber-500 transition-colors shadow-lg" 
                                     src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}" 
                                     alt="Foto de perfil">
                                <div class="text-left">
                                    <div class="text-gray-900 text-sm font-medium">{{ Session::get('usuario_nombre') }}</div>
                                    <div class="text-amber-600 text-xs font-semibold">MODERADOR</div>
                                </div>
                                <i class="fas fa-chevron-down text-gray-600 text-sm group-hover:text-amber-600 transition-colors transform group-hover:rotate-180 duration-300"></i>
                            </button>
                            
                            <!-- Menú flotante premium -->
                            <div id="profileMenu" class="hidden absolute right-0 mt-3 w-80 bg-white rounded-3xl shadow-2xl py-6 z-50 border border-gray-200 transform opacity-0 scale-95 transition-all duration-300">
                                <!-- Header del menú -->
                                <div class="px-6 pb-6 border-b border-gray-100">
                                    <div class="flex items-center space-x-4">
                                        <img class="h-16 w-16 rounded-full object-cover border-2 border-amber-400 shadow-lg" 
                                             src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}" 
                                             alt="Foto de perfil">
                                        <div>
                                            <div class="text-gray-900 font-semibold text-lg">{{ Session::get('usuario_nombre') }}</div>
                                            <div class="text-gray-600 text-sm">{{ Session::get('email') }}</div>
                                            <div class="flex items-center mt-2">
                                                <div class="bg-gradient-to-r from-amber-500 to-amber-600 text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">
                                                    <i class="fas fa-shield-alt mr-1"></i>
                                                    Moderador
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Opciones del menú -->
                                <div class="py-2">
                                    <button id="openProfileModal" class="w-full flex items-center px-6 py-4 text-gray-700 hover:bg-amber-50 transition-colors duration-200">
                                        <i class="fas fa-user-circle text-amber-500 w-5 mr-4"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Mi Perfil</div>
                                            <div class="text-sm text-gray-500">Ver información personal</div>
                                        </div>
                                    </button>
                                    
                                    <a href="{{ route('moderador.dashboard') }}" class="w-full flex items-center px-6 py-4 text-gray-700 hover:bg-amber-50 transition-colors duration-200">
                                        <i class="fas fa-tachometer-alt text-amber-500 w-5 mr-4"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Dashboard</div>
                                            <div class="text-sm text-gray-500">Panel de control</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('moderador.solicitudes') }}" class="w-full flex items-center px-6 py-4 text-gray-700 hover:bg-amber-50 transition-colors duration-200">
                                        <i class="fas fa-clipboard-list text-amber-500 w-5 mr-4"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Solicitudes</div>
                                            <div class="text-sm text-gray-500">Gestionar solicitudes</div>
                                        </div>
                                    </a>
                                    
                                    <hr class="my-2 border-gray-100">
                                    
                                    <button class="w-full flex items-center px-6 py-4 text-gray-700 hover:bg-amber-50 transition-colors duration-200">
                                        <i class="fas fa-cog text-gray-400 w-5 mr-4"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Configuración</div>
                                            <div class="text-sm text-gray-500">Preferencias del panel</div>
                                        </div>
                                    </button>
                                    
                                    <hr class="my-2 border-gray-100">
                                    
                                    <button id="openLogoutModal" class="w-full flex items-center px-6 py-4 text-red-600 hover:bg-red-50 transition-colors duration-200">
                                        <i class="fas fa-sign-out-alt text-red-500 w-5 mr-4"></i>
                                        <div class="text-left">
                                            <div class="font-medium">Cerrar Sesión</div>
                                            <div class="text-sm text-red-400">Salir del panel</div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login.form') }}" class="text-gray-900 hover:text-amber-600 font-medium transition-colors">
                            Iniciar Sesión
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="min-h-screen">
        @hasSection('sidebar')
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex gap-6">
                <aside class="w-80 bg-white p-6 rounded-3xl border border-gray-200 shadow-lg">
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

    <!-- Modal de Perfil Premium -->
    <div id="profileModal" class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm flex justify-center items-center z-50 p-4">
        <div class="bg-white rounded-3xl w-full max-w-2xl shadow-2xl transform scale-95 opacity-0 transition-all duration-300" id="profileModalContent">
            <div class="flex items-center justify-between p-8 border-b border-gray-200">
                <h2 class="text-3xl font-serif text-gray-900">Perfil de Moderador</h2>
                <button id="closeProfileModal" class="text-gray-400 hover:text-gray-600 transition-colors p-2 rounded-full hover:bg-gray-100">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="text-center">
                        <img class="h-32 w-32 rounded-full object-cover border-4 border-amber-400 mx-auto mb-4 shadow-lg" 
                             src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}" 
                             alt="Foto de perfil">
                        <div class="bg-gradient-to-r from-amber-500 to-amber-600 text-white px-4 py-2 rounded-full text-sm font-bold uppercase tracking-wide inline-flex items-center">
                            <i class="fas fa-shield-alt mr-2"></i>
                            Moderador Verificado
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="bg-gray-50 rounded-2xl p-6">
                            <h3 class="font-semibold text-gray-900 mb-4 text-lg">Información Personal</h3>
                            <div class="space-y-4">
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
            </div>
            
            <div class="flex space-x-4 p-8 pt-0">
                <button id="closeProfileModalBtn" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-4 rounded-2xl transition-colors text-lg">
                    Cerrar
                </button>
                <button class="flex-1 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-4 rounded-2xl transition-all text-lg">
                    <i class="fas fa-edit mr-2"></i>
                    Editar Perfil
                </button>
            </div>
        </div>
    </div>

    <!-- Modal de Cerrar Sesión -->
    <div id="logoutModal" class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm flex justify-center items-center z-50 p-4">
        <div class="bg-white rounded-3xl w-full max-w-md shadow-2xl transform scale-95 opacity-0 transition-all duration-300" id="logoutModalContent">
            <div class="text-center p-8">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-sign-out-alt text-red-500 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-serif text-gray-900 mb-4">¿Cerrar Sesión?</h3>
                <p class="text-gray-600 mb-8 leading-relaxed">¿Estás seguro de que quieres cerrar tu sesión de moderador? Tendrás que iniciar sesión nuevamente para acceder al panel.</p>
                
                <div class="flex space-x-4">
                    <button id="cancelLogout" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-3 rounded-2xl transition-colors">
                        Cancelar
                    </button>
                    <a href="{{ route('logout') }}" class="flex-1 bg-red-500 hover:bg-red-600 text-white font-semibold py-3 rounded-2xl text-center transition-colors">
                        Cerrar Sesión
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .nav-link {
            @apply text-gray-700 hover:text-amber-600 inline-flex items-center px-4 py-3 text-sm font-medium transition-all duration-300 rounded-2xl hover:bg-amber-50 relative border border-transparent hover:border-amber-200;
        }
        
        .nav-link.active {
            @apply text-amber-600 bg-amber-50 border-amber-200;
        }
        
        .nav-link::after {
            content: '';
            @apply absolute bottom-0 left-1/2 w-0 h-0.5 bg-amber-500 transition-all duration-300;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            @apply w-full;
        }

        /* Animaciones para modales */
        .modal-show #profileModalContent,
        .modal-show #logoutModalContent {
            transform: scale(1) !important;
            opacity: 1 !important;
        }

        /* Animación del menú flotante */
        .menu-show {
            display: block !important;
            transform: translateY(0) !important;
            opacity: 1 !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Profile menu toggle
            const profileMenuBtn = document.getElementById('profileMenuBtn');
            const profileMenu = document.getElementById('profileMenu');
            
            if (profileMenuBtn && profileMenu) {
                profileMenuBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    profileMenu.classList.toggle('hidden');
                    profileMenu.classList.toggle('menu-show');
                });
                
                document.addEventListener('click', (e) => {
                    if (!profileMenu.contains(e.target) && !profileMenuBtn.contains(e.target)) {
                        profileMenu.classList.add('hidden');
                        profileMenu.classList.remove('menu-show');
                    }
                });
            }

            // Profile modal
            const openProfileModal = document.getElementById('openProfileModal');
            const closeProfileModal = document.getElementById('closeProfileModal');
            const closeProfileModalBtn = document.getElementById('closeProfileModalBtn');
            const profileModal = document.getElementById('profileModal');
            
            function openModal() {
                profileModal.classList.remove('hidden');
                profileModal.classList.add('modal-show');
                if (profileMenu) profileMenu.classList.add('hidden');
                document.body.style.overflow = 'hidden';
            }
            
            function closeModal() {
                profileModal.classList.remove('modal-show');
                setTimeout(() => {
                    profileModal.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
            }
            
            if (openProfileModal) openProfileModal.addEventListener('click', openModal);
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
            const cancelLogout = document.getElementById('cancelLogout');
            const logoutModal = document.getElementById('logoutModal');
            
            function openLogoutModalFunc() {
                logoutModal.classList.remove('hidden');
                logoutModal.classList.add('modal-show');
                if (profileMenu) profileMenu.classList.add('hidden');
                document.body.style.overflow = 'hidden';
            }
            
            function closeLogoutModal() {
                logoutModal.classList.remove('modal-show');
                setTimeout(() => {
                    logoutModal.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
            }
            
            if (openLogoutModal) openLogoutModal.addEventListener('click', openLogoutModalFunc);
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