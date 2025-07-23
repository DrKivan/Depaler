<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Baneada</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-2xl p-8 max-w-md w-full text-center">

        <!-- ✅ Mensaje de éxito -->
        @if(session('success'))
            <div class="mb-4 p-4 text-green-700 bg-green-100 border border-green-400 rounded-lg text-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Icono -->
        <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 19a7 7 0 100-14 7 7 0 000 14z" />
            </svg>
        </div>

        <!-- Título -->
        <h1 class="text-3xl font-bold text-red-600 mb-2">Cuenta Baneada</h1>
        <p class="text-gray-600 mb-6">Tu cuenta ha sido suspendida temporal o permanentemente.</p>

        <!-- Detalles del Baneo -->
        <div class="bg-gray-50 p-4 rounded-lg mb-6 text-left">
            <p class="mb-2"><strong class="text-gray-800">Motivo:</strong> {{ session('motivo_baneo') }}</p>
            <p><strong class="text-gray-800">Tipo de Baneo:</strong> {{ session('estado_baneo') }}</p>
        </div>

        <!-- Botones -->
        <div class="flex flex-col space-y-3">
            @if(session('estado_baneo') === 'temporal')
                <button id="btn-apelar" class="w-full bg-yellow-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                    Apelar Baneo
                </button>
            @endif
            <a href="{{ route('logout') }}" class="w-full inline-block text-center bg-gray-300 text-gray-800 font-semibold px-4 py-2 rounded-lg hover:bg-gray-400 transition">
                Cerrar Sesión
            </a>
        </div>

        <!-- Formulario de Apelación (Oculto por defecto) -->
        <div id="form-apelacion" class="hidden mt-6">
            <form action="{{ route('apelacion.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="baneo_id" value="{{ session('baneo_id') }}">
                <textarea name="motivo" rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-yellow-500 focus:outline-none" placeholder="Escribe el motivo de tu apelación..." required></textarea>
                <button type="submit" class="w-full bg-indigo-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                    Enviar Apelación
                </button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('btn-apelar')?.addEventListener('click', function () {
            document.getElementById('form-apelacion').classList.toggle('hidden');
        });
    </script>

</body>
</html>
