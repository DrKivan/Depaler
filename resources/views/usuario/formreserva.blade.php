@extends('navegacion.plantillaU')

@section('title', 'Reservar propiedad')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-semibold mb-6">Reservar: {{ $propiedad->titulo }}</h2>

    {{-- Carrusel con Swiper --}}
    <div class="relative aspect-square mb-6 overflow-hidden rounded-xl">
        @if ($propiedad->imagenes->isNotEmpty())
            <div class="swiper mySwiper rounded-xl">
                <div class="swiper-wrapper">
                    @foreach ($propiedad->imagenes as $imagen)
                        <div class="swiper-slide">
                            <img src="{{ asset($imagen->ruta) }}" alt="Imagen propiedad" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        @else
            <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                <div class="text-center text-gray-400">
                    <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-xs">Imagen no disponible</p>
                </div>
            </div>
        @endif
    </div>

    {{-- Detalles adicionales --}}
    <div class="bg-white rounded-lg shadow p-6 mb-8 space-y-2">
        <p><strong>Descripción:</strong> {{ $propiedad->descripcion }}</p>
        <p><strong>Dirección:</strong> {{ $propiedad->direccion }}</p>
        <p><strong>Habitaciones:</strong> {{ $propiedad->num_habitaciones }}</p>
        <p><strong>Baños:</strong> {{ $propiedad->num_banos }}</p>
        <p><strong>Propietario:</strong> {{ $propiedad->usuario->nombre ?? 'No disponible' }}</p>
    </div>
    <div class="bg-white rounded-lg shadow p-6 mb-8">
    <h3 class="text-xl font-semibold mb-4">Información del ofertante</h3>

    
   
{{-- Información del ofertante --}}
<div class="bg-white rounded-lg shadow p-6 mb-8 flex items-center space-x-6">
    
    {{-- Foto de perfil --}}
    <div class="w-24 h-24 rounded-full overflow-hidden border border-gray-300 shadow">
        @if (!empty($propiedad->usuario->foto_perfil))
            <img src="{{ asset('/' . $propiedad->usuario->foto_perfil) }}" alt="Foto de perfil" class="w-full h-full object-cover">
        @else
            <img src="{{ asset('fotos_perfil/default.png') }}" alt="Foto por defecto" class="w-full h-full object-cover">
        @endif
    </div>

    {{-- Datos del ofertante --}}
    <div>
        <h3 class="text-xl font-semibold mb-2">Información del ofertante</h3>
        <ul class="space-y-1 text-gray-700">
            <li><strong>Nombre:</strong> {{ $propiedad->usuario->nombre ?? 'No disponible' }}</li>
            <li><strong>Dirección:</strong> {{ $propiedad->usuario->direccion ?? 'No disponible' }}</li>
            <li><strong>Teléfono:</strong> {{ $propiedad->usuario->telefono ?? 'No disponible' }}</li>
            <li><strong>Email:</strong> {{ $propiedad->usuario->email ?? 'No disponible' }}</li>
            <li class="text-sm text-gray-400"><strong>ID usuario:</strong> {{ $propiedad->usuario->id ?? 'N/A' }}</li>
        </ul>
    </div>
</div>
<div class="flex justify-between mt-6 space-x-4">
    <button
        onclick="abrirModal('propiedad')"
        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded shadow">
        Denunciar propiedad
    </button>

    <button
        onclick="abrirModal('usuario')"
        class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded shadow">
        Denunciar ofertante
    </button>
</div>

</div>
@if($resenas->count())
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <h2 class="text-lg font-bold mb-4">Últimas Reseñas</h2>
        @foreach ($resenas as $resena)
            <div class="border-t pt-3 mt-3">
                <p class="text-sm text-gray-800 font-semibold">{{ $resena->usuario->nombre ?? 'Usuario desconocido' }}</p>
                <p class="text-gray-700">{{ $resena->comentario }}</p>
                <p class="text-yellow-500">⭐ {{ $resena->calificacion }}/5</p>
            </div>
        @endforeach
    </div>
@endif


    {{-- Formulario de reserva --}}
    <form action="{{ route('reserva.resumen') }}" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
        @csrf

        <input type="hidden" name="propiedad_id" value="{{ $propiedad->id }}">

        <div>
            <label class="block text-sm font-medium text-gray-700">Fecha inicio:</label>
            <input type="date" name="fecha_inicio" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Fecha fin:</label>
            <input type="date" name="fecha_fin" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Precio por noche:</label>
            <p class="mt-1 text-gray-800">${{ number_format($propiedad->precio_dia, 0, ',', '.') }}</p>
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Confirmar Reserva
            </button>
        </div>
    </form>
    @if ($errors->has('fecha_inicio'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
        {{ $errors->first('fecha_inicio') }}
    </div>
@endif
</div>

{{-- Swiper JS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    new Swiper(".mySwiper", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });
</script>





{{-- Modal de Denuncia --}}
<div id="modalDenuncia" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
    <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
        <button onclick="cerrarModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">&times;</button>
        
        <h2 class="text-xl font-semibold mb-4">Enviar denuncia</h2>

        <form action="{{ route('denuncias.store') }}" method="POST">
            @csrf

            {{-- Campo oculto para reportado o propiedad --}}
            <input type="hidden" id="inputReportado" name="reportado_id">
            <input type="hidden" id="inputPropiedad" name="propiedad_id">

            <div class="mb-4">
                <label for="motivo" class="block text-sm font-medium text-gray-700">Motivo:</label>
                <textarea name="motivo" id="motivo" required rows="3"
                    class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
                Enviar denuncia
            </button>
        </form>
    </div>
</div>
<script>
    function abrirModal(tipo) {
        const modal = document.getElementById('modalDenuncia');
        const inputPropiedad = document.getElementById('inputPropiedad');
        const inputReportado = document.getElementById('inputReportado');

        if (tipo === 'propiedad') {
            inputPropiedad.value = '{{ $propiedad->id }}';
            inputReportado.value = '{{ $propiedad->usuario->id }}'; // Opcional
        } else if (tipo === 'usuario') {
            inputPropiedad.value = '';
            inputReportado.value = '{{ $propiedad->usuario->id }}';
        }

        modal.classList.remove('hidden');
    }

    function cerrarModal() {
        document.getElementById('modalDenuncia').classList.add('hidden');
    }
</script>

@endsection
