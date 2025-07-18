@extends('navegacion.plantillaM')

@section('title', 'Lista de Baneos')

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-gray-900">Lista de Baneos</h1>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Usuario
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Motivo
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($baneos as $baneo)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $baneo->id }}
                            </td>
                           
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $baneo->motivo }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Mensaje si no hay baneos -->
        @if($baneos->isEmpty())
            <div class="px-6 py-4 text-center text-gray-500">
                <p>No hay baneos registrados.</p>
            </div>
        @endif
    </div>
@endsection

@push('styles')
    <style>
        /* Estilos adicionales específicos para la tabla si necesitas */
        .table-hover tr:hover {
            background-color: #f9fafb;
        }
    </style>
@endpush