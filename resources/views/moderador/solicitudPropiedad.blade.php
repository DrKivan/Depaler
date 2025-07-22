@extends('navegacion.plantillaM')

@section('title', 'Solicitudes de Propiedades')

@section('content')
<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <h1 class="text-2xl font-bold text-gray-900">Solicitudes de Propiedades</h1>
        <p>Bienvenido, {{ session('usuario_nombre') }}</p>
        <p>Tu ID es: {{ session('usuario_id') }}</p>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Propietario</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($propiedades as $propiedad)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $propiedad->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $propiedad->titulo }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ Str::limit($propiedad->descripcion, 50) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        @if($propiedad->usuario)
                            {{ $propiedad->usuario->nombre ?? 'Sin nombre' }}
                            <br>
                            <span class="text-xs text-gray-400">ID: {{ $propiedad->usuario->id }}</span>
                        @else
                            <span class="text-red-500 text-xs">⚠️ Usuario no encontrado</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                        @if($propiedad->usuario && $propiedad->usuario->email)
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">
                                {{ $propiedad->usuario->email }}
                            </span>
                        @else
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">
                                ⚠️ Sin email
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <form action="{{ route('propiedad.aprobar', $propiedad->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Aprobar</button>
                        </form>
                        <form action="{{ route('propiedad.rechazar', $propiedad->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded ml-2">Rechazar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($propiedades->isEmpty())
    <div class="px-6 py-4 text-center text-gray-500">
        <p>No hay solicitudes pendientes.</p>
    </div>
    @endif
</div>

{{-- Debug simple y completo --}}
<div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
    <h3 class="text-lg font-semibold text-blue-800 mb-3">🐛 Debug Completo</h3>
    
    {{-- Configuración de correo --}}
    <div class="mb-4 p-3 bg-white rounded border">
        <h4 class="font-bold text-blue-700 mb-2">📧 Configuración de Correo:</h4>
        <div class="text-sm space-y-1">
            <p><strong>Mailer:</strong> <span class="bg-gray-100 px-2 py-1 rounded">{{ config('mail.default') }}</span></p>
            <p><strong>Host:</strong> {{ config('mail.mailers.smtp.host') }}</p>
            <p><strong>Puerto:</strong> {{ config('mail.mailers.smtp.port') }}</p>
            <p><strong>Usuario:</strong> {{ config('mail.mailers.smtp.username') }}</p>
            <p><strong>From:</strong> {{ config('mail.from.address') }}</p>
        </div>
    </div>

    {{-- Test directo de datos --}}
    <div class="p-3 bg-white rounded border">
        <h4 class="font-bold text-blue-700 mb-2">🔍 Test de Datos:</h4>
        @foreach($propiedades->take(3) as $prop)
            <div class="mb-2 p-2 bg-gray-50 rounded text-xs">
                <p><strong>Propiedad ID {{ $prop->id }}:</strong></p>
                <p>• usuario_id en tabla: <code>{{ $prop->usuario_id }}</code></p>
                <p>• Usuario cargado: {{ $prop->usuario ? '✅ SÍ' : '❌ NO' }}</p>
                @if($prop->usuario)
                    <p>• Email del usuario: <code>{{ $prop->usuario->email ?? 'NULL' }}</code></p>
                    <p>• Nombre del usuario: <code>{{ $prop->usuario->nombre ?? 'NULL' }}</code></p>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection