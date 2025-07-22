@extends('navegacion.plantillaU')

@section('title', 'Publicar tu Propio Espacio')

@section('sidebar')
    <ul class="space-y-3 text-sm text-gray-700">
        <li>
            <a href="{{route('propietario.dashboard')}}" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Conoce más</span>
            </a>
        </li>
        <li>
            <a href="{{route('propiedad.listarPropiedadUsuario')}}" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                <span>Mis espacios</span>
            </a>
        </li>
        <li>
            <a href="{{route('propietario.solicitudes')}}" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <span>Solicitudes de reserva</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Información adicional</span>
            </a>
        </li>
    </ul>
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 overflow-x-hidden">

    <!-- HERO 3D -->
    <section class="relative mb-20">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 opacity-80 rounded-3xl blur-3xl animate-pulse"></div>
        <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl p-8 md:p-16 text-center shadow-2xl">
            <h1 class="text-5xl md:text-7xl font-black text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 animate-bounce">
                Publica & Gana
            </h1>
            <p class="mt-6 text-xl text-gray-700 max-w-3xl mx-auto">
                Convierte cada rincón de tu casa en una fuente de ingresos. <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-orange-500 font-bold">Sin contratos largos, sin ataduras.</span>
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-indigo-100 text-indigo-700 font-semibold animate-pulse">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 1 1 0 000 2H6a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2v-3a2 2 0 012-2h2a2 2 0 012 2v3a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a1 1 0 100-2h2a4 4 0 014 4v6a4 4 0 01-4 4H6a4 4 0 01-4-4V7a4 4 0 014-4z" clip-rule="evenodd"/></svg>
                    Ingresos pasivos
                </span>
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-pink-100 text-pink-700 font-semibold animate-pulse">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Verificación 360°
                </span>
            </div>
        </div>
    </section>

    <!-- PASOS INTERACTIVOS -->
    <section class="mb-20">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Cómo publicar en 4 pasos</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['1','Describe tu espacio','Añade fotos, precios y normas','📸'],
                ['2','Establece disponibilidad','Marca fechas y reglas','📅'],
                ['3','Recibe reservas','Acepta o rechaza con un clic','✅'],
                ['4','Recibe el pago','Ingresos cada 24 h después del check-in','💸']
            ] as [$num,$title,$desc,$emoji])
            <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 p-6">
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-md group-hover:scale-110 transition-transform">
                    {{ $emoji }}
                </div>
                <div class="mt-6 text-center">
                    <h3 class="text-xl font-bold mb-2">{{ $title }}</h3>
                    <p class="text-gray-600 text-sm">{{ $desc }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- RESPONSABILIDADES CON ACORDEON -->
    <section class="mb-20">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center">Tus responsabilidades como anfitrión</h2>
        <div class="space-y-4 max-w-4xl mx-auto">
            @foreach([
                ['Limpieza y mantenimiento','Garantiza un espacio impecable antes de cada llegada y revisa que todo funcione correctamente para brindar una experiencia segura y confortable.','M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                ['Comunicación clara','Responde pronto a los mensajes, confirma reservas rápidamente y establece reglas de casa claras para evitar malentendidos.','M8 7V3a4 4 0 118 0v4m-4 8l-2-2m0 0l2-2m-2 2h12'],
                ['Seguridad y privacidad','Sigue las normativas locales, instala detectores de humo y proporciona un entorno seguro tanto para huéspedes como para ti.','M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'],
                ['Cumplimiento legal','Asegúrate de cumplir con impuestos locales, licencias turísticas y normativas de alquiler vacacional.','M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z']
            ] as [$title,$desc,$icon])
            <details class="group bg-white rounded-xl shadow-md open:shadow-xl transition">
                <summary class="flex items-center justify-between cursor-pointer px-6 py-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                    <svg class="w-5 h-5 text-indigo-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <div class="px-6 pb-4 text-gray-600">
                    <svg class="w-8 h-8 mb-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$icon}}"/></svg>
                    {{ $desc }}
                </div>
            </details>
            @endforeach
        </div>
    </section>

    <!-- BENEFICIOS CON ANIMACIÓN LOTTIE (CSS) -->
    <section class="mb-20">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">Beneficios de ser anfitrión</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['Ingresos pasivos','Monetiza tu espacio y cubre hipotecas o ahorros','💰','animate-bounce'],
                ['Flexibilidad total','Bloquea fechas, ajusta precios y reglas al instante','⚙️','animate-pulse'],
                ['Protección 360°','Seguro, verificación y soporte 24/7','🛡️','animate-spin [animation-duration:3s]'],
                ['Conexión global','Conoce culturas y recibe reseñas 5⭐','🌍','animate-ping']
            ] as [$title,$desc,$emoji,$anim])
            <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-6 text-center hover:shadow-xl transition-shadow">
                <div class="text-4xl mb-3 {{ $anim }}">{{ $emoji }}</div>
                <h3 class="text-lg font-bold mb-1">{{ $title }}</h3>
                <p class="text-sm text-gray-600">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- CALCULADORA RÁPIDA -->
    <section class="mb-20">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">Calcula tus posibles ingresos</h2>
        <div class="bg-white rounded-2xl shadow-xl p-8 max-w-2xl mx-auto">
            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-1">Precio por noche ($)</label>
                    <input type="number" id="price" value="80" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Noches al mes</label>
                    <input type="number" id="nights" value="15" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500">
                </div>
            </div>
            <div class="mt-6 text-center">
                <p class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                    ≈ $<span id="result">1200</span> / mes
                </p>
            </div>
        </div>
    </section>

    <!-- TESTIMONIOS -->
    <section class="mb-20">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">Historias reales de anfitriones</h2>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['María G.','"Con mi loft pagué la mitad de la hipoteca en 6 meses. Los huéspedes son super respetuosos."','⭐⭐⭐⭐⭐'],
                ['Carlos R.','"Viajo 3 meses al año y alquilo mientras estoy fuera. Me financia mis vacaciones."','⭐⭐⭐⭐⭐'],
                ['Lucía P.','"Conocí a personas increíbles y ahora tengo amigos en 15 países distintos."','⭐⭐⭐⭐⭐']
            ] as [$name,$quote,$stars])
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition-transform">
                <div class="text-yellow-400 text-2xl mb-2">{{ $stars }}</div>
                <p class="italic text-gray-600 mb-3">"{{ $quote }}"</p>
                <p class="font-bold text-indigo-600">- {{ $name }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 rounded-3xl p-12 text-center text-white overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-grid-white/10 animate-pulse"></div>
        <div class="relative z-10">
            <h2 class="text-4xl md:text-5xl font-black mb-4">Tu espacio, tu reglas, tus ingresos</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Empieza hoy mismo. Publicar es gratis y solo te tomará 10 minutos.
            </p>
            <button class="bg-white text-indigo-700 font-bold py-4 px-10 rounded-full shadow-2xl hover:bg-gray-100 hover:scale-105 transition-transform">
                Publicar mi espacio ahora
            </button>
        </div>
    </section>
</div>

<style>
    .bg-grid-white {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='rgb(255 255 255 / 0.1)'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
    }
</style>

<script>
    const price = document.getElementById('price');
    const nights = document.getElementById('nights');
    const result = document.getElementById('result');
    function calc() {
        result.textContent = (price.value * nights.value).toLocaleString();
    }
    price.addEventListener('input', calc);
    nights.addEventListener('input', calc);
</script>
@endsection