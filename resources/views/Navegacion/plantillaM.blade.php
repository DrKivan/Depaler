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
          <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Solicitudes</a>
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
        <div class="relative">
          <button id="profileMenuBtn" class="bg-gray-800 flex items-center text-sm rounded-full focus:outline-none">
            <img class="h-8 w-8 rounded-full" src="user.jpg" alt="User">
          </button>
          <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 text-gray-700">
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Mi Perfil</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Configuración</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Cerrar sesión</a>
          </div>
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
    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Solicitudes</a>
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
<script>
  const profileMenuBtn = document.getElementById('profileMenuBtn');
  const profileMenu = document.getElementById('profileMenu');
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuIcon = document.getElementById('menuIcon');
  const closeIcon = document.getElementById('closeIcon');

  profileMenuBtn.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
  });

  document.addEventListener('click', (e) => {
    if (!profileMenu.contains(e.target) && e.target !== profileMenuBtn) {
      profileMenu.classList.add('hidden');
    }
  });

  mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
</script>

</body>
</html>
