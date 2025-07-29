@extends('navegacion.plantillaU')

@section('title', 'Editar Propiedad')

@section('content')
<div class="bg-gradient-to-br from-gray-50 to-white min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section -->
        <div class="text-center mb-12">
            <div class="w-20 h-20 bg-gradient-to-br from-gray-900 to-black rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-black mb-4">
                Editar Propiedad
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Actualiza la información de tu propiedad para mantenerla siempre atractiva para los huéspedes
            </p>
        </div>

        <!-- Progress Indicator -->
        <div class="mb-12">
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-black text-white rounded-full flex items-center justify-center text-sm font-bold">
                            ✓
                        </div>
                        <span class="ml-2 text-sm font-medium text-black">Editando Propiedad</span>
                    </div>
                </div>
            </div>
            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-gray-900 to-black h-2 rounded-full" style="width: 100%"></div>
            </div>
        </div>

        <!-- Main Form -->
        <div class="bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden">
            <form action="{{ route('propietario.actualizarPropiedad', ['id' => $propiedad->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Section 1: Información Básica -->
                <div class="p-8 border-b border-gray-200">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-black">Información Básica</h2>
                            <p class="text-gray-600">Datos principales de tu propiedad</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <!-- Título -->
                        <div class="group">
                            <label for="titulo" class="block text-sm font-bold text-black mb-2">
                                <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                                Título de la Propiedad
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       name="titulo" 
                                       id="titulo" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 pl-12 text-black placeholder-gray-500 focus:bg-white focus:border-black focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="Ej: Hermoso departamento en el centro"
                                       required 
                                       value="{{ old('titulo', $propiedad->titulo) }}">
                                <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                            </div>
                            @error('titulo')
                                <div class="flex items-center mt-2 text-red-600">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <!-- Descripción -->
                        <div class="group">
                            <label for="descripcion" class="block text-sm font-bold text-black mb-2">
                                <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                                </svg>
                                Descripción Detallada
                            </label>
                            <textarea name="descripcion" 
                                      id="descripcion" 
                                      rows="4" 
                                      class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 text-black placeholder-gray-500 focus:bg-white focus:border-black focus:outline-none transition-all duration-300 group-hover:border-gray-300 resize-none" 
                                      placeholder="Describe tu propiedad de manera atractiva..."
                                      required>{{ old('descripcion', $propiedad->descripcion) }}</textarea>
                            @error('descripcion')
                                <div class="flex items-center mt-2 text-red-600">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <!-- Dirección -->
                        <div class="group">
                            <label for="direccion" class="block text-sm font-bold text-black mb-2">
                                <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Dirección Completa
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       name="direccion" 
                                       id="direccion" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 pl-12 text-black placeholder-gray-500 focus:bg-white focus:border-black focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="Ej: Av. Principal #123, Zona Centro"
                                       required 
                                       value="{{ old('direccion', $propiedad->direccion) }}">
                                <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            @error('direccion')
                                <div class="flex items-center mt-2 text-red-600">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Section 2: Detalles de la Propiedad -->
                <div class="p-8 border-b border-gray-200">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-100 to-green-200 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-black">Detalles de la Propiedad</h2>
                            <p class="text-gray-600">Especificaciones técnicas y precio</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Precio xd -->
                        <div class="group">
                            <label for="precio_dia" class="block text-sm font-bold text-black mb-2">
                                <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                </svg>
                                Precio por Día (Bs)
                            </label>
                            <div class="relative">
                                <input type="number" 
                                       step="0.01" 
                                       name="precio_dia" 
                                       id="precio_dia" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 pl-12 text-black placeholder-gray-500 focus:bg-white focus:border-black focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="150.00"
                                       value="{{ old('precio_dia', $propiedad->precio_dia) }}">
                                <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                </svg>
                            </div>
                            @error('precio_dia')
                                <div class="flex items-center mt-2 text-red-600">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <!-- Habitaciones -->
                        <div class="group">
                            <label for="num_habitaciones" class="block text-sm font-bold text-black mb-2">
                                <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                Habitaciones
                            </label>
                            <div class="relative">
                                <input type="number" 
                                       name="num_habitaciones" 
                                       id="num_habitaciones" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 pl-12 text-black placeholder-gray-500 focus:bg-white focus:border-black focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="2"
                                       required 
                                       value="{{ old('num_habitaciones', $propiedad->num_habitaciones) }}">
                                <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            </div>
                            @error('num_habitaciones')
                                <div class="flex items-center mt-2 text-red-600">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <!-- Baños -->
                        <div class="group">
                            <label for="num_banos" class="block text-sm font-bold text-black mb-2">
                                <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8l-2-2m0 0l2-2m-2 2h12"/>
                                </svg>
                                Baños
                            </label>
                            <div class="relative">
                                <input type="number" 
                                       name="num_banos" 
                                       id="num_banos" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 pl-12 text-black placeholder-gray-500 focus:bg-white focus:border-black focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="1"
                                       required 
                                       value="{{ old('num_banos', $propiedad->num_banos) }}">
                                <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8l-2-2m0 0l2-2m-2 2h12"/>
                                </svg>
                            </div>
                            @error('num_banos')
                                <div class="flex items-center mt-2 text-red-600">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Ciudad -->
                    <div class="mt-6 group">
                        <label for="ciudad" class="block text-sm font-bold text-black mb-2">
                            <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            Ciudad
                        </label>
                        <div class="relative">
                            <select name="ciudad" 
                                    id="ciudad" 
                                    class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 pl-12 text-black focus:bg-white focus:border-black focus:outline-none transition-all duration-300 group-hover:border-gray-300 appearance-none" 
                                    required>
                                <option value="">Seleccione una ciudad</option>
                                @foreach(['Tarija','Cochabamba','Beni','La Paz','Pando','Potosi','Oruro','Santa_Cruz','Chuquisaca'] as $ciudad)
                                    <option value="{{ $ciudad }}" {{ old('ciudad', $propiedad->ciudad) == $ciudad ? 'selected' : '' }}>
                                        {{ str_replace('_', ' ', $ciudad) }}
                                    </option>
                                @endforeach
                            </select>
                            <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Servicios y Comodidades -->
                <div class="p-8 border-b border-gray-200">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-black">Servicios y Comodidades</h2>
                            <p class="text-gray-600">Selecciona los servicios disponibles</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- WiFi -->
                        <label class="group cursor-pointer">
                            <input type="checkbox" 
                                   name="wifi" 
                                   value="1" 
                                   class="sr-only peer" 
                                   {{ old('wifi', $propiedad->wifi) ? 'checked' : '' }}>
                            <div class="relative bg-gray-50 border-2 border-gray-200 rounded-2xl p-6 text-center transition-all duration-300 peer-checked:bg-black peer-checked:border-black peer-checked:text-white group-hover:border-gray-300 group-hover:scale-105">
                                <svg class="w-8 h-8 mx-auto mb-3 transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                                </svg>
                                <span class="font-semibold">WiFi</span>
                                <div class="absolute top-2 right-2 w-6 h-6 border-2 border-current rounded-full flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity">
                                    <div class="w-2 h-2 bg-current rounded-full"></div>
                                </div>
                            </div>
                        </label>

                        <!-- Televisión -->
                        <label class="group cursor-pointer">
                            <input type="checkbox" 
                                   name="television" 
                                   value="1" 
                                   class="sr-only peer" 
                                   {{ old('television', $propiedad->television) ? 'checked' : '' }}>
                            <div class="relative bg-gray-50 border-2 border-gray-200 rounded-2xl p-6 text-center transition-all duration-300 peer-checked:bg-black peer-checked:border-black peer-checked:text-white group-hover:border-gray-300 group-hover:scale-105">
                                <svg class="w-8 h-8 mx-auto mb-3 transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="font-semibold">Televisión</span>
                                <div class="absolute top-2 right-2 w-6 h-6 border-2 border-current rounded-full flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity">
                                    <div class="w-2 h-2 bg-current rounded-full"></div>
                                </div>
                            </div>
                        </label>

                        <!-- Aire Acondicionado -->
                        <label class="group cursor-pointer">
                            <input type="checkbox" 
                                   name="aire_acondicionado" 
                                   value="1" 
                                   class="sr-only peer" 
                                   {{ old('aire_acondicionado', $propiedad->aire_acondicionado) ? 'checked' : '' }}>
                            <div class="relative bg-gray-50 border-2 border-gray-200 rounded-2xl p-6 text-center transition-all duration-300 peer-checked:bg-black peer-checked:border-black peer-checked:text-white group-hover:border-gray-300 group-hover:scale-105">
                                <svg class="w-8 h-8 mx-auto mb-3 transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                <span class="font-semibold">Aire Acondicionado</span>
                                <div class="absolute top-2 right-2 w-6 h-6 border-2 border-current rounded-full flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity">
                                    <div class="w-2 h-2 bg-current rounded-full"></div>
                                </div>
                            </div>
                        </label>

                        <!-- Servicios Básicos -->
                        <label class="group cursor-pointer">
                            <input type="checkbox" 
                                   name="servicios_basicos" 
                                   value="1" 
                                   class="sr-only peer" 
                                   {{ old('servicios_basicos', $propiedad->servicios_basicos) ? 'checked' : '' }}>
                            <div class="relative bg-gray-50 border-2 border-gray-200 rounded-2xl p-6 text-center transition-all duration-300 peer-checked:bg-black peer-checked:border-black peer-checked:text-white group-hover:border-gray-300 group-hover:scale-105">
                                <svg class="w-8 h-8 mx-auto mb-3 transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="font-semibold">Servicios Básicos</span>
                                <div class="absolute top-2 right-2 w-6 h-6 border-2 border-current rounded-full flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity">
                                    <div class="w-2 h-2 bg-current rounded-full"></div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Section 4: Estado e Imágenes -->
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-100 to-orange-200 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-black">Estado e Imágenes</h2>
                            <p class="text-gray-600">Disponibilidad y galería de fotos</p>
                        </div>
                    </div>

                    <!-- Estado -->
                    <div class="mb-8 group">
                        <label for="estado" class="block text-sm font-bold text-black mb-2">
                            <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Estado de Disponibilidad
                        </label>
                        <div class="relative">
                            <select name="estado" 
                                    id="estado" 
                                    class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 pl-12 text-black focus:bg-white focus:border-black focus:outline-none transition-all duration-300 group-hover:border-gray-300 appearance-none" 
                                    required>
                                <option value="">Seleccione un estado</option>
                                <option value="disponible" {{ old('estado', $propiedad->estado) == 'disponible' ? 'selected' : '' }}>Disponible</option>
                                <option value="no disponible" {{ old('estado', $propiedad->estado) == 'no disponible' ? 'selected' : '' }}>No Disponible</option>
                            </select>
                            <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                        @error('estado')
                            <div class="flex items-center mt-2 text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Imágenes Actuales -->
                    @if($propiedad->imagenes->count())
                        <div class="mb-8">
                            <h3 class="text-lg font-bold text-black mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Imágenes Actuales
                            </h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                @foreach($propiedad->imagenes as $imagen)
                                    <div class="relative group bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all duration-300">
                                        <img src="{{ asset($imagen->ruta) }}" 
                                             class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-500" 
                                             alt="Imagen propiedad">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                                            <label class="bg-white/90 backdrop-blur-sm px-3 py-2 rounded-xl text-sm font-medium text-black border border-gray-200 cursor-pointer hover:bg-white transition-all duration-200 opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0">
                                                <input type="checkbox" 
                                                       name="eliminar_imagenes[]" 
                                                       value="{{ $imagen->id }}" 
                                                       class="mr-2">
                                                Eliminar
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Nuevas Imágenes -->
                    <div class="mb-8">
                        <h3 class="text-lg font-bold text-black mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            Agregar Nuevas Imágenes
                        </h3>
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-8 text-center hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 group">
                            <input type="file" 
                                   name="imagenes[]" 
                                   id="imagenes" 
                                   class="hidden" 
                                   multiple 
                                   accept="image/*" 
                                   onchange="previewImages(this)">
                            <label for="imagenes" class="cursor-pointer">
                                <div class="text-gray-500 group-hover:text-gray-700 transition-colors">
                                    <svg class="mx-auto h-16 w-16 text-gray-400 group-hover:text-gray-600 transition-colors mb-4" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-xl font-semibold mb-2">
                                        <span class="text-black">Haz clic para seleccionar</span> o arrastra las imágenes aquí
                                    </p>
                                    <p class="text-sm text-gray-500">PNG, JPG, GIF hasta 2MB cada una</p>
                                </div>
                            </label>
                        </div>

                        <!-- Vista previa de nuevas imágenes -->
                        <div id="imagePreview" class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-4 hidden"></div>

                        @error('imagenes')
                            <div class="flex items-center mt-4 text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm">{{ $message }}</span>
                            </div>
                        @enderror

                        @error('imagenes.*')
                            <div class="flex items-center mt-2 text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm">{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Tip Box -->
                        <div class="mt-6 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-2xl p-6">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <div>
                                    <h4 class="font-bold text-blue-900 mb-2">💡 Consejos para mejores imágenes:</h4>
                                    <ul class="text-sm text-blue-800 space-y-1">
                                        <li>• Usa buena iluminación natural</li>
                                        <li>• Muestra diferentes ángulos de cada habitación</li>
                                        <li>• La primera imagen será la principal en los listados</li>
                                        <li>• Incluye fotos de amenidades especiales</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-8 border-t border-gray-200">
                        <button type="submit" 
                                class="group bg-gradient-to-r from-gray-900 to-black hover:from-black hover:to-gray-800 text-white font-bold py-4 px-12 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center mx-auto">
                            <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            Actualizar Propiedad
                            <svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
                imageContainer.className = 'relative group bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all duration-300';
                
                imageContainer.innerHTML = `
                    <img src="${e.target.result}" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 flex items-center justify-center transition-all duration-300">
                        <span class="text-white text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/70 px-3 py-1 rounded-lg">${file.name}</span>
                    </div>
                    ${index === 0 ? '<div class="absolute -top-2 -right-2 bg-gradient-to-r from-green-500 to-green-600 text-white text-xs px-3 py-1 rounded-full font-bold shadow-lg">Principal</div>' : ''}
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
