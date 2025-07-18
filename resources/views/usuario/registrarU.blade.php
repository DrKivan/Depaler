@extends('navegacion.plantillaU')

@section('title', 'Registrar Usuario')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-4">Registrar Nuevo Usuario</h2>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="block font-medium">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium">Email:</label>
            <input type="email" name="email" id="email" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="contrasena" class="block font-medium">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="telefono" class="block font-medium">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="direccion" class="block font-medium">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="fecha_nacimiento" class="block font-medium">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="tipo_usuario" class="block font-medium">Tipo de Usuario:</label>
            <select name="tipo_usuario" id="tipo_usuario" class="w-full border rounded px-3 py-2">
                <option value="usuario">Usuario</option>
                <option value="propietario">Propietario</option>
                <option value="moderador">Moderador</option>
            </select>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Registrar
            </button>
        </div>
    </form>
</div>
@endsection
