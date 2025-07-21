@extends('navegacion.plantillaU')

@section('title', 'Crear Propiedad')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Registrar nueva propiedad</h2>

    <form action="{{ route('propiedades.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="titulo" class="block font-semibold">Título</label>
            <input type="text" name="titulo" id="titulo" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block font-semibold">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="4" class="w-full border border-gray-300 p-2 rounded" required></textarea>
        </div>

        <div class="mb-4">
            <label for="direccion" class="block font-semibold">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="precio_mensual" class="block font-semibold">Precio Mensual (Bs)</label>
            <input type="number" step="0.01" name="precio_mensual" id="precio_mensual" class="w-full border border-gray-300 p-2 rounded">
        </div>

        <div class="mb-4">
            <label for="precio_dia" class="block font-semibold">Precio por Día (Bs)</label>
            <input type="number" step="0.01" name="precio_dia" id="precio_dia" class="w-full border border-gray-300 p-2 rounded">
        </div>

        <div class="mb-4">
            <label for="num_habitaciones" class="block font-semibold">Número de Habitaciones</label>
            <input type="number" name="num_habitaciones" id="num_habitaciones" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="num_banos" class="block font-semibold">Número de Baños</label>
            <input type="number" name="num_banos" id="num_banos" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="estado" class="block font-semibold">Estado</label>
            <select name="estado" id="estado" class="w-full border border-gray-300 p-2 rounded" required>
                <option value="disponible">Disponible</option>
                <option value="ocupado">Ocupado</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="imagenes" class="block font-semibold">Imágenes (puedes seleccionar varias)</label>
            <input type="file" name="imagenes[]" id="imagenes" class="w-full" multiple accept="image/*">
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Registrar Propiedad
            </button>
        </div>
    </form>
</div>
@endsection
