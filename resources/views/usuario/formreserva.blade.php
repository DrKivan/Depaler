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
</div>


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
@endsection
