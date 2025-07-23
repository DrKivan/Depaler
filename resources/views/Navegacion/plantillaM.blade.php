<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Responsive</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<nav class="bg-gray-800 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <a href="#" class="flex items-center">
          <img class="h-8 w-auto" src="logo.svg" alt="Logo">
          <span class="ml-2 font-bold">RentMod</span>
        </a>
        <div class="hidden md:flex ml-10 space-x-4">
          <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
          <a href="{{ route('moderador.solicitudes') }}" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Solicitudes</a>
          <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Denuncias</a>
          <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Baneos</a>
          <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Apelaciones</a>
          <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reseñas</a>
        </div>
      </div>
      <div class="hidden md:flex items-center space-x-4">
        <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>
        
          
           <div class="hidden sm:flex sm:items-center relative">
    @if(Session::has('usuario_id'))
        <!-- Botón con foto -->
        <button id="profileMenuBtn" class="flex items-center focus:outline-none">
           <img class="h-8 w-8 rounded-full object-cover border cursor-pointer"
     src="{{ asset(Session::get('foto_perfil') ?? 'default.png') }}"
     alt="Foto de perfil">
        </button>

        
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
        
      </div>
      <div class="flex md:hidden">
        <button id="mobileMenuBtn" class="bg-gray-800 p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700">
          <svg id="menuIcon" class="block h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="closeIcon" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div id="mobileMenu" class="hidden md:hidden px-2 pt-2 pb-3 space-y-1">
    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
    <a href="{{ route('moderador.solicitudes') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Solicitudes</a>
    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Denuncias</a>
    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Baneos</a>
    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Apelaciones</a>
    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reseñas</a>
  </div>
  
</nav>
 <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Sección de encabezado (opcional) -->
        @yield('header')
        
        <!-- Contenido principal -->
        <div class="px-4 py-6 sm:px-0">
            @yield('content')
        </div>
    </main>
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
document.addEventListener('DOMContentLoaded', function () {
    const profileMenuBtn = document.getElementById('profileMenuBtn');
    const profileMenu = document.getElementById('profileMenu');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');

    // --- Menú Perfil ---
    if (profileMenuBtn && profileMenu) {
        profileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // No cerrar inmediatamente
            profileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!profileMenu.contains(e.target) && !profileMenuBtn.contains(e.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    }

    // --- Menú Móvil ---
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    }

    // --- Modal Perfil ---
    const openProfileModal = document.getElementById('openProfileModal');
    const closeProfileModal = document.getElementById('closeProfileModal');
    const profileModal = document.getElementById('profileModal');

    if (openProfileModal && closeProfileModal && profileModal) {
        openProfileModal.addEventListener('click', () => {
            profileModal.classList.remove('hidden');
            profileMenu.classList.add('hidden'); // Cierra el menú al abrir modal
        });

        closeProfileModal.addEventListener('click', () => {
            profileModal.classList.add('hidden');
        });

        profileModal.addEventListener('click', (e) => {
            if (e.target === profileModal) {
                profileModal.classList.add('hidden');
            }
        });
    }
});
</script>




</body>
</html>
