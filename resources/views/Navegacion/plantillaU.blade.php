<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SwiperJS CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- En el <head> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Antes de </body> -->
    <!-- Estilos adicionales -->
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navegador -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="#" class="text-2xl font-bold text-blue-600">
                            MiApp
                        </a>
                    </div>
                    
                    <!-- Enlaces de navegación -->
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{route('usuario.inicioUsuario')}}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Inicio
                        </a>
                        <a href="{{ route('propiedades.listar') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Departamentos
                        </a>
                        <a href="{{ route('listar.reserva') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Mis Reservas
                        </a>
                        <a href="{{route('propietario.dashboard')}}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Publicar tu Propio Espacio
                        </a>
                    </div>
                </div>
                
                <!-- Menú de usuario -->
                <div class="hidden sm:flex sm:items-center relative">
    @if(Session::has('usuario_id'))
        <!-- Botón con foto -->
        <button id="profileMenuBtn" class="flex items-center focus:outline-none">
           <img class="h-8 w-8 rounded-full object-cover border cursor-pointer"
     src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}"
     alt="Foto de perfil">
        </button>

        <!-- Menú flotante -->
       <!-- Menú flotante -->
<div id="profileMenu" class="hidden absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg py-2 z-50">
   
    <!-- Botón que abrirá el modal con la info -->
    <button id="openProfileModal" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
        Mi Perfil
    </button>
    
    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Cerrar sesión</a>
</div>

    @else
        <a href="{{ route('login.form') }}" class="text-blue-600 font-semibold">Iniciar sesión</a>
    @endif
</div>

                
                <!-- Botón de menú móvil -->
                <div class="sm:hidden flex items-center">
                    <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Menú móvil -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="{{ route('usuario.index') }}" class="bg-blue-50 border-blue-500 text-blue-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Inicio
                </a>
                <a href="{{ route('propiedades.listar') }}" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Departamentos
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Mis Reservas
                </a>
                <a href="{{route('propiedad.listarPropiedadUsuario')}}" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Publicar tu Propio Espacio
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex gap-4">
        
        {{-- SIDEBAR opcional --}}
        @hasSection('sidebar')
            <aside class="w-64 bg-white p-4 shadow-md rounded-md">
                @yield('sidebar')
            </aside>
        @endif

        {{-- CONTENIDO principal --}}
        <div class="flex-1">
            @yield('header')
            <div class="px-4 py-6 sm:px-0">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-500 text-sm">
                @yield('footer', '© 2024 Mi Aplicación. Todos los derechos reservados.')
            </div>
        </div>
    </footer>

    <!-- Scripts adicionales -->
    @stack('scripts')
    <!-- SwiperJS JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
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
    });
</script>

    <!-- Script para el menú móvil -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('[aria-label="Abrir menú principal"]') || 
                                   document.querySelector('button[class*="sm:hidden"]');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const profileMenuBtn = document.getElementById('profileMenuBtn');
  const profileMenu = document.getElementById('profileMenu');

  if (profileMenuBtn && profileMenu) {
    profileMenuBtn.addEventListener('click', (e) => {
      e.stopPropagation(); // evita el cierre inmediato
      profileMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
      if (!profileMenu.contains(e.target) && !profileMenuBtn.contains(e.target)) {
        profileMenu.classList.add('hidden');
      }
    });
  }
</script>


<!-- Modal de perfil -->
<div id="profileModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white rounded-lg p-6 w-96 shadow-lg">
        <h2 class="text-xl font-bold mb-4">Perfil de Usuario</h2>
        <div class="space-y-2">
            <p><strong>Nombre:</strong> {{ Session::get('usuario_nombre') }}</p>
            <p><strong>Email:</strong> {{ Session::get('email') }}</p>
            <p><strong>Teléfono:</strong> {{ Session::get('telefono') }}</p>
            <p><strong>Dirección:</strong> {{ Session::get('direccion') }}</p>
            <p><img class="h-16 w-16 rounded-full object-cover border" src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}" alt="Foto de perfil"></p>
        </div>
        <div class="mt-4 text-right">
            <button id="closeProfileModal" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cerrar</button>
        </div>
    </div>
</div>
<script>
  const openProfileModal = document.getElementById('openProfileModal');
  const closeProfileModal = document.getElementById('closeProfileModal');
  const profileModal = document.getElementById('profileModal');

  if (openProfileModal && closeProfileModal && profileModal) {
    openProfileModal.addEventListener('click', () => {
      profileModal.classList.remove('hidden');
    });

    closeProfileModal.addEventListener('click', () => {
      profileModal.classList.add('hidden');
    });

    // Cerrar al hacer clic fuera del modal
    profileModal.addEventListener('click', (e) => {
      if (e.target === profileModal) {
        profileModal.classList.add('hidden');
      }
    });
  }
</script>

</body>
</html>