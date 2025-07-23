@extends('navegacion.plantillaM')

@section('title', 'Lista de Usuarios - Moderador')

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Lista de Usuarios</h1>
                    <p class="text-sm text-gray-600 mt-1">
                        Bienvenido, <span class="font-semibold">{{ session('usuario_nombre') }}</span>
                        (ID: {{ session('usuario_id') }})
                    </p>
                </div>
                <div class="bg-blue-50 px-4 py-2 rounded-md">
                    <p class="text-sm text-blue-800">
                        <span class="font-bold">Rol:</span> {{ ucfirst(session('tipo_usuario')) }}
                    </p>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usuario</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contacto</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Denuncias</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($usuarios as $usuario)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $usuario->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">{{ $usuario->nombre }}</div>
                                <div class="text-sm text-gray-500">Tipo: {{ $usuario->tipo_usuario }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $usuario->email }}</div>
                                <div class="text-sm text-gray-500">{{ $usuario->telefono ?? 'Sin teléfono' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                        {{ $usuario->denuncias_recibidas_count > 2 ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ $usuario->denuncias_recibidas_count }} denuncia(s)
                                    </span>
                                    @if($usuario->denuncias_recibidas_count > 0)
                                        <button class="ml-2 text-blue-500 hover:text-blue-700 text-xs"
                                            onclick="mostrarDenuncias({{ $usuario->id }})">
                                            Ver detalles
                                        </button>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                @if($usuario->denuncias_recibidas_count >= 3)
                                    <div class="flex space-x-2">
                                        <form action="{{ route('usuario.banear', $usuario->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" 
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs"
                                                onclick="return confirm('¿Estás seguro de banear a este usuario?')">
                                                Banear
                                            </button>
                                        </form>
                                        <button onclick="mostrarDenuncias({{ $usuario->id }})"
                                            class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-3 rounded text-xs">
                                            Revisar
                                        </button>
                                    </div>
                                @else
                                    <span class="text-gray-400 text-xs">Requiere 3+ denuncias</span>
                                @endif
                            </td>
                        </tr>
                        <tr id="denuncias-{{ $usuario->id }}" class="hidden bg-gray-50">
                            <td colspan="5" class="px-6 py-4">
                                <div class="text-sm text-gray-700">
                                    <h4 class="font-bold mb-2 flex justify-between items-center">
                                        <span>Detalles de denuncias:</span>
                                        <button onclick="mostrarDenuncias({{ $usuario->id }})" 
                                            class="text-gray-500 hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </h4>
                                    <div id="contenido-denuncias-{{ $usuario->id }}" class="bg-white p-4 rounded-md shadow-inner">
                                        @if($usuario->denunciasRecibidas->count() > 0)
                                            <ul class="divide-y divide-gray-200">
                                                @foreach($usuario->denunciasRecibidas as $denuncia)
                                                    <li class="py-3">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium">Motivo:</span>
                                                            <span>{{ $denuncia->motivo }}</span>
                                                        </div>
                                                        <div class="flex justify-between">
                                                            <span class="font-medium">Reportado por:</span>
                                                            <span>Usuario #{{ $denuncia->reportante_id }}</span>
                                                        </div>
                                                        @if($denuncia->propiedad_id)
                                                            <div class="flex justify-between">
                                                                <span class="font-medium">Propiedad:</span>
                                                                <span>ID {{ $denuncia->propiedad_id }}</span>
                                                            </div>
                                                        @endif
                                                        <div class="flex justify-between">
                                                            <span class="font-medium">Fecha:</span>
                                                            <span>{{ $denuncia->created_at->format('d/m/Y H:i') }}</span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p class="text-gray-500">Cargando detalles de denuncias...</p>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
function mostrarDenuncias(usuarioId) {
    const row = document.getElementById(`denuncias-${usuarioId}`);
    const contenido = document.getElementById(`contenido-denuncias-${usuarioId}`);
    
    if (row.classList.contains('hidden')) {
        // Cargar datos via AJAX si no hay contenido
        if (contenido.innerHTML.includes('Cargando detalles')) {
            fetch(`/moderador/denuncias/${usuarioId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        let html = '<ul class="divide-y divide-gray-200">';
                        data.forEach(denuncia => {
                            html += `
                                <li class="py-3">
                                    <div class="flex justify-between">
                                        <span class="font-medium">Motivo:</span>
                                        <span>${denuncia.motivo}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Reportado por:</span>
                                        <span>${denuncia.reportante}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Propiedad:</span>
                                        <span>${denuncia.propiedad}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Fecha:</span>
                                        <span>${denuncia.fecha}</span>
                                    </div>
                                </li>`;
                        });
                        html += '</ul>';
                        contenido.innerHTML = html;
                    } else {
                        contenido.innerHTML = '<p class="text-gray-500">No hay detalles adicionales de denuncias.</p>';
                    }
                });
        }
        row.classList.remove('hidden');
    } else {
        row.classList.add('hidden');
    }
}
</script>
@endsection

