@extends('navegacion.plantillaU')

@section('title', 'Crear Propiedad')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Registrar nueva propiedad</h2>

    <form action="{{ route('propietario.actualizarPropiedad', ['id' => $propiedad->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="titulo" class="block font-semibold">Título</label>
            <input type="text" name="titulo" id="titulo" class="w-full border border-gray-300 p-2 rounded" required value="{{ old('titulo', $propiedad->titulo) }}">
            @error('titulo')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block font-semibold">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="4" class="w-full border border-gray-300 p-2 rounded" required>{{ old('descripcion', $propiedad->descripcion) }}</textarea>
            @error('descripcion')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="direccion" class="block font-semibold">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="w-full border border-gray-300 p-2 rounded" required value="{{ old('direccion', $propiedad->direccion) }}">
            @error('direccion')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="precio_mensual" class="block font-semibold">Precio Mensual (Bs)</label>
                <input type="number" step="0.01" name="precio_mensual" id="precio_mensual" class="w-full border border-gray-300 p-2 rounded" value="{{ old('precio_mensual', $propiedad->precio_mensual) }}">
                @error('precio_mensual')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="precio_dia" class="block font-semibold">Precio por Día (Bs)</label>
                <input type="number" step="0.01" name="precio_dia" id="precio_dia" class="w-full border border-gray-300 p-2 rounded" value="{{ old('precio_dia', $propiedad->precio_dia) }}">
                @error('precio_dia')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="num_habitaciones" class="block font-semibold">Número de Habitaciones</label>
                <input type="number" name="num_habitaciones" id="num_habitaciones" class="w-full border border-gray-300 p-2 rounded" required value="{{ old('num_habitaciones', $propiedad->num_habitaciones) }}">
                @error('num_habitaciones')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="num_banos" class="block font-semibold">Número de Baños</label>
                <input type="number" name="num_banos" id="num_banos" class="w-full border border-gray-300 p-2 rounded" required value="{{ old('num_banos', $propiedad->num_banos) }}">
                @error('num_banos')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="estado" class="block font-semibold">Estado</label>
            <select name="estado" id="estado" class="w-full border border-gray-300 p-2 rounded" required>
                <option value="">Seleccione un estado</option>
                <option value="disponible" {{ old('estado', $propiedad->estado) == 'disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="no disponible" {{ old('estado', $propiedad->estado) == 'no disponible' ? 'selected' : '' }}>No Disponible</option>

            </select>
            @error('estado')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Sección mejorada de imágenes -->
        <div class="mb-6">
            <label for="imagenes" class="block font-semibold">Imágenes</label>
            @if($propiedad->imagenes->count())
    <div class="mb-6">
        <label class="block font-semibold mb-2">Imágenes actuales</label>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($propiedad->imagenes as $imagen)
                <div class="relative group border rounded-lg overflow-hidden">
                    <img src="{{ asset($imagen->ruta) }}" class="w-full h-24 object-cover" alt="Imagen propiedad">

                    <label class="absolute top-1 right-1 bg-white px-2 py-1 text-xs rounded shadow">
                        <input type="checkbox" name="eliminar_imagenes[]" value="{{ $imagen->id }}">
                        Eliminar
                    </label>
                </div>
            @endforeach
        </div>
    </div>
@endif

            <input type="file" name="imagenes[]" id="imagenes" multiple accept="image/*" class="w-full border border-gray-300 p-2 rounded" onchange="previewImages(this)">
            <p class="text-sm text-gray-600 mt-2">Selecciona múltiples imágenes para mostrar mejor tu propiedad. La primera imagen será la imagen principal.</p>
            @error('imagenes')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <!-- Vista previa de imágenes -->
            <div id="imagePreview" class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4 hidden"></div>
            
            @error('imagenes')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            @error('imagenes.*')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            
            <p class="text-sm text-gray-600 mt-2">
                <strong>Tip:</strong> Puedes seleccionar múltiples imágenes para mostrar mejor tu propiedad. La primera imagen será la imagen principal.
            </p>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                Registrar Propiedad
            </button>
        </div>
    </form>
</div>

<script>
function previewImages(input) {
    const preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    
    if (input.files && input.files.length > 0) {
        preview.classList.remove('hidden');
        
        Array.from(input.files).forEach((file, index) => {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const imageContainer = document.createElement('div');
                imageContainer.className = 'relative group';
                
                imageContainer.innerHTML = `
                    <img src="${e.target.result}" class="w-full h-24 object-cover rounded-lg border">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity rounded-lg">
                        <span class="text-white text-xs">${file.name}</span>
                    </div>
                    ${index === 0 ? '<div class="absolute -top-2 -right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">Principal</div>' : ''}
                `;
                
                preview.appendChild(imageContainer);
            };
            
            reader.readAsDataURL(file);
        });
    } else {
        preview.classList.add('hidden');
    }
}
</script>

@endsection