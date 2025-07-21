@extends('navegacion.plantillaU')

@section('title', 'Publicar tu Propio Espacio')

@section('sidebar')
    <ul class="space-y-2 text-sm text-gray-700">
        <li><a href="{{route('propietario.dashboard')}}" class="block hover:text-blue-500">Conoce mas</a></li>
        <li><a href="{{route('propiedad.listarPropiedadUsuario')}}" class="block hover:text-blue-500">Mis espacios</a></li>
        <li><a href="#" class="block hover:text-blue-500">solicitudes de reserva</a></li>
        <li><a href="#" class="block hover:text-blue-500">Informacion adicional</a></li>
    </ul>
@endsection

@section('content')
    <h1 class="text-2xl font-bold mb-4">Mi info de reservas</h1>
    <!-- Aquí va tu formulario o flujo de publicación -->
@endsection
