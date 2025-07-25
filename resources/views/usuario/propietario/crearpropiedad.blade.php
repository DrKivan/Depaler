@extends('navegacion.plantillaU')

@section('title', 'Crear Propiedad')

@section('content')
<div class="bg-gradient-to-br from-gray-50 to-white min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-black to-gray-800 rounded-2xl mb-6">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-black mb-4">
                Registrar Nueva Propiedad
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Completa la información de tu propiedad para comenzar a recibir huéspedes
            </p>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden">
            <form action="{{ route('propiedades.store') }}" method="POST" enctype="multipart/form-data" class="p-8 md:p-12">
                @csrf
                
                <!-- Progress Indicator -->
                <div class="mb-12">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm font-medium text-black">Información Básica</span>
                        <span class="text-sm text-gray-500">Paso 1 de 4</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-black to-gray-800 h-2 rounded-full" style="width: 25%"></div>
                    </div>
                </div>

                <!-- Section 1: Basic Information -->
                <div class="mb-12">
                    <div class="flex items-center mb-8">
                        <div class="w-10 h-10 bg-black rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-black">Información Básica</h2>
                            <p class="text-gray-600">Datos principales de tu propiedad</p>
                        </div>
                    </div>

                    <div class="grid gap-8">
                        <!-- Title -->
                        <div class="group">
                            <label for="titulo" class="block text-sm font-bold text-black mb-3">
                                Título de la Propiedad
                                <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       name="titulo" 
                                       id="titulo" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-4 text-black placeholder-gray-400 focus:border-black focus:bg-white focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="Ej: Hermoso departamento en el centro de la ciudad"
                                       required 
                                       value="{{ old('titulo') }}">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                </div>
                            </div>
                            @error('titulo')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="group">
                            <label for="descripcion" class="block text-sm font-bold text-black mb-3">
                                Descripción Detallada
                                <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <textarea name="descripcion" 
                                          id="descripcion" 
                                          rows="5" 
                                          class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-4 text-black placeholder-gray-400 focus:border-black focus:bg-white focus:outline-none transition-all duration-300 group-hover:border-gray-300 resize-none" 
                                          placeholder="Describe tu propiedad: ubicación, características especiales, qué la hace única..."
                                          required>{{ old('descripcion') }}</textarea>
                                <div class="absolute bottom-4 right-4">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                                    </svg>
                                </div>
                            </div>
                            @error('descripcion')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Address and City -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="direccion" class="block text-sm font-bold text-black mb-3">
                                    Dirección Completa
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="text" 
                                           name="direccion" 
                                           id="direccion" 
                                           class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-4 pl-12 text-black placeholder-gray-400 focus:border-black focus:bg-white focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                           placeholder="Calle, número, zona..."
                                           required 
                                           value="{{ old('direccion') }}">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('direccion')
                                    <p class="text-red-500 text-sm mt-2 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="group">
                                <label for="ciudad" class="block text-sm font-bold text-black mb-3">
                                    Ciudad
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <select name="ciudad" 
                                            id="ciudad" 
                                            class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-4 pl-12 text-black focus:border-black focus:bg-white focus:outline-none transition-all duration-300 group-hover:border-gray-300 appearance-none" 
                                            required>
                                        <option value="">Selecciona una ciudad</option>
                                        <option value="Tarija" {{ old('ciudad') == 'Tarija' ? 'selected' : '' }}>Tarija</option>
                                        <option value="Cochabamba" {{ old('ciudad') == 'Cochabamba' ? 'selected' : '' }}>Cochabamba</option>
                                        <option value="Beni" {{ old('ciudad') == 'Beni' ? 'selected' : '' }}>Beni</option>
                                        <option value="La_Paz" {{ old('ciudad') == 'La_Paz' ? 'selected' : '' }}>La Paz</option>
                                        <option value="Pando" {{ old('ciudad') == 'Pando' ? 'selected' : '' }}>Pando</option>
                                        <option value="Potosi" {{ old('ciudad') == 'Potosi' ? 'selected' : '' }}>Potosi</option>
                                        <option value="Oruro" {{ old('ciudad') == 'Oruro' ? 'selected' : '' }}>Oruro</option>
                                        <option value="Santa_Cruz" {{ old('ciudad') == 'Santa_Cruz' ? 'selected' : '' }}>Santa Cruz</option>
                                        <option value="Chuquisaca" {{ old('ciudad') == 'Chuquisaca' ? 'selected' : '' }}>Chuquisaca</option>
                                    </select>
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Property Details -->
                <div class="mb-12">
                    <div class="flex items-center mb-8">
                        <div class="w-10 h-10 bg-black rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-black">Detalles de la Propiedad</h2>
                            <p class="text-gray-600">Características y precio</p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Price -->
                        <div class="group">
                            <label for="precio_dia" class="block text-sm font-bold text-black mb-3">
                                Precio por Noche (Bs)
                            </label>
                            <div class="relative">
                                <input type="number" 
                                       step="0.01" 
                                       name="precio_dia" 
                                       id="precio_dia" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-4 pl-12 text-black placeholder-gray-400 focus:border-black focus:bg-white focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="0.00"
                                       value="{{ old('precio_dia') }}">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                    <span class="text-gray-500 font-medium">Bs</span>
                                </div>
                            </div>
                            @error('precio_dia')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Rooms -->
                        <div class="group">
                            <label for="num_habitaciones" class="block text-sm font-bold text-black mb-3">
                                Habitaciones
                                <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="number" 
                                       name="num_habitaciones" 
                                       id="num_habitaciones" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-4 pl-12 text-black placeholder-gray-400 focus:border-black focus:bg-white focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="1"
                                       min="1"
                                       required 
                                       value="{{ old('num_habitaciones') }}">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                </div>
                            </div>
                            @error('num_habitaciones')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Bathrooms -->
                        <div class="group">
                            <label for="num_banos" class="block text-sm font-bold text-black mb-3">
                                Baños
                                <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="number" 
                                       name="num_banos" 
                                       id="num_banos" 
                                       class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-4 pl-12 text-black placeholder-gray-400 focus:border-black focus:bg-white focus:outline-none transition-all duration-300 group-hover:border-gray-300" 
                                       placeholder="1"
                                       min="1"
                                       required 
                                       value="{{ old('num_banos') }}">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8l-2-2m0 0l2-2m-2 2h12"/>
                                    </svg>
                                </div>
                            </div>
                            @error('num_banos')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Section 3: Amenities -->
                <div class="mb-12">
                    <div class="flex items-center mb-8">
                        <div class="w-10 h-10 bg-black rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-black">Servicios y Comodidades</h2>
                            <p class="text-gray-600">Selecciona los servicios disponibles</p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- WiFi -->
                        <div class="group">
                            <input type="hidden" name="wifi" value="0">
                            <label class="relative flex items-center p-6 bg-gray-50 border-2 border-gray-200 rounded-2xl cursor-pointer hover:border-gray-300 hover:bg-gray-100 transition-all duration-300 group-hover:shadow-lg">
                                <input type="checkbox" 
                                       name="wifi" 
                                       value="1" 
                                       class="sr-only peer" 
                                       {{ old('wifi') == 1 ? 'checked' : '' }}>
                                <div class="flex flex-col items-center text-center w-full">
                                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center mb-4 peer-checked:bg-black peer-checked:text-white transition-all duration-300 shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                                        </svg>
                                    </div>
                                    <span class="font-semibold text-black peer-checked:text-black">WiFi</span>
                                    <span class="text-sm text-gray-500 mt-1">Internet de alta velocidad</span>
                                </div>
                                <div class="absolute top-3 right-3 w-5 h-5 bg-white border-2 border-gray-300 rounded-full peer-checked:bg-black peer-checked:border-black transition-all duration-300">
                                    <svg class="w-3 h-3 text-white absolute top-0.5 left-0.5 opacity-0 peer-checked:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </label>
                        </div>

                        <!-- Television -->
                        <div class="group">
                            <input type="hidden" name="television" value="0">
                            <label class="relative flex items-center p-6 bg-gray-50 border-2 border-gray-200 rounded-2xl cursor-pointer hover:border-gray-300 hover:bg-gray-100 transition-all duration-300 group-hover:shadow-lg">
                                <input type="checkbox" 
                                       name="television" 
                                       value="1" 
                                       class="sr-only peer" 
                                       {{ old('television') == 1 ? 'checked' : '' }}>
                                <div class="flex flex-col items-center text-center w-full">
                                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center mb-4 peer-checked:bg-black peer-checked:text-white transition-all duration-300 shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <span class="font-semibold text-black peer-checked:text-black">Televisión</span>
                                    <span class="text-sm text-gray-500 mt-1">TV con cable</span>
                                </div>
                                <div class="absolute top-3 right-3 w-5 h-5 bg-white border-2 border-gray-300 rounded-full peer-checked:bg-black peer-checked:border-black transition-all duration-300">
                                    <svg class="w-3 h-3 text-white absolute top-0.5 left-0.5 opacity-0 peer-checked:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </label>
                        </div>

                        <!-- Air Conditioning -->
                        <div class="group">
                            <input type="hidden" name="aire_acondicionado" value="0">
                            <label class="relative flex items-center p-6 bg-gray-50 border-2 border-gray-200 rounded-2xl cursor-pointer hover:border-gray-300 hover:bg-gray-100 transition-all duration-300 group-hover:shadow-lg">
                                <input type="checkbox" 
                                       name="aire_acondicionado" 
                                       value="1" 
                                       class="sr-only peer" 
                                       {{ old('aire_acondicionado') == 1 ? 'checked' : '' }}>
                                <div class="flex flex-col items-center text-center w-full">
                                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center mb-4 peer-checked:bg-black peer-checked:text-white transition-all duration-300 shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                                        </svg>
                                    </div>
                                    <span class="font-semibold text-black peer-checked:text-black">Aire Acondicionado</span>
                                    <span class="text-sm text-gray-500 mt-1">Climatización</span>
                                </div>
                                <div class="absolute top-3 right-3 w-5 h-5 bg-white border-2 border-gray-300 rounded-full peer-checked:bg-black peer-checked:border-black transition-all duration-300">
                                    <svg class="w-3 h-3 text-white absolute top-0.5 left-0.5 opacity-0 peer-checked:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </label>
                        </div>

                        <!-- Basic Services -->
                        <div class="group">
                            <input type="hidden" name="servicios_basicos" value="0">
                            <label class="relative flex items-center p-6 bg-gray-50 border-2 border-gray-200 rounded-2xl cursor-pointer hover:border-gray-300 hover:bg-gray-100 transition-all duration-300 group-hover:shadow-lg">
                                <input type="checkbox" 
                                       name="servicios_basicos" 
                                       value="1" 
                                       class="sr-only peer" 
                                       {{ old('servicios_basicos') == 1 ? 'checked' : '' }}>
                                <div class="flex flex-col items-center text-center w-full">
                                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center mb-4 peer-checked:bg-black peer-checked:text-white transition-all duration-300 shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </div>
                                    <span class="font-semibold text-black peer-checked:text-black">Servicios Básicos</span>
                                    <span class="text-sm text-gray-500 mt-1">Agua, luz, gas</span>
                                </div>
                                <div class="absolute top-3 right-3 w-5 h-5 bg-white border-2 border-gray-300 rounded-full peer-checked:bg-black peer-checked:border-black transition-all duration-300">
                                    <svg class="w-3 h-3 text-white absolute top-0.5 left-0.5 opacity-0 peer-checked:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Status and Images -->
                <div class="mb-12">
                    <div class="flex items-center mb-8">
                        <div class="w-10 h-10 bg-black rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-black">Estado e Imágenes</h2>
                            <p class="text-gray-600">Configura el estado y sube fotos</p>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="mb-8">
                        <label for="estado" class="block text-sm font-bold text-black mb-3">
                            Estado de la Propiedad
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select name="estado" 
                                    id="estado" 
                                    class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-4 pl-12 text-black focus:border-black focus:bg-white focus:outline-none transition-all duration-300 appearance-none" 
                                    required>
                                <option value="">Seleccione un estado</option>
                                <option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>Disponible</option>
                                <option value="ocupado" {{ old('estado') == 'ocupado' ? 'selected' : '' }}>Ocupado</option>
                                <option value="inactivo" {{ old('estado') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                            </select>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </div>
                        @error('estado')
                            <p class="text-red-500 text-sm mt-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Images Upload -->
                    <div>
                        <label for="imagenes" class="block text-sm font-bold text-black mb-3">
                            Imágenes de la Propiedad
                        </label>
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-12 text-center hover:border-black hover:bg-gray-50 transition-all duration-300 group">
                            <input type="file" 
                                   name="imagenes[]" 
                                   id="imagenes" 
                                   class="hidden" 
                                   multiple 
                                   accept="image/*" 
                                   onchange="previewImages(this)">
                            <label for="imagenes" class="cursor-pointer">
                                <div class="text-gray-500 group-hover:text-black transition-colors">
                                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-black group-hover:text-white transition-all duration-300">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-black mb-2">
                                        Sube las imágenes de tu propiedad
                                    </h3>
                                    <p class="text-gray-600 mb-4">
                                        <span class="font-semibold text-black">Haz clic para seleccionar</span> o arrastra las imágenes aquí
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        PNG, JPG, GIF hasta 2MB cada una • Máximo 10 imágenes
                                    </p>
                                </div>
                            </label>
                        </div>

                        <!-- Image Preview -->
                        <div id="imagePreview" class="mt-8 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 hidden"></div>

                        @error('imagenes')
                            <p class="text-red-500 text-sm mt-3 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                        @error('imagenes.*')
                            <p class="text-red-500 text-sm mt-1 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror

                        <!-- Tips -->
                        <div class="mt-6 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-2xl p-6">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-blue-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-blue-900 mb-2">Consejos para mejores fotos:</h4>
                                    <ul class="text-sm text-blue-800 space-y-1">
                                        <li>• La primera imagen será la imagen principal de tu propiedad</li>
                                        <li>• Usa buena iluminación natural cuando sea posible</li>
                                        <li>• Muestra diferentes ángulos y habitaciones</li>
                                        <li>• Asegúrate de que las imágenes estén nítidas y bien enfocadas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-8 border-t border-gray-200">
                    <button type="submit" 
                            class="group bg-gradient-to-r from-black to-gray-800 hover:from-gray-800 hover:to-black text-white font-bold py-4 px-12 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center mx-auto">
                        <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Registrar Propiedad
                        <svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                    <p class="text-sm text-gray-500 mt-4">
                        Al registrar tu propiedad, aceptas nuestros términos y condiciones
                    </p>
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
                imageContainer.className = 'relative group';
                
                imageContainer.innerHTML = `
                    <div class="relative overflow-hidden rounded-2xl border-2 border-gray-200 group-hover:border-black transition-all duration-300">
                        <img src="${e.target.result}" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 flex items-center justify-center transition-all duration-300">
                            <div class="text-white text-xs font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center px-2">
                                ${file.name}
                            </div>
                        </div>
                        ${index === 0 ? '<div class="absolute -top-2 -right-2 bg-gradient-to-r from-green-500 to-green-600 text-white text-xs px-3 py-1 rounded-full font-bold shadow-lg border-2 border-white">Principal</div>' : ''}
                    </div>
                `;
                
                preview.appendChild(imageContainer);
            };
            
            reader.readAsDataURL(file);
        });
    } else {
        preview.classList.add('hidden');
    }
}

// Add some interactive effects
document.addEventListener('DOMContentLoaded', function() {
    // Animate progress bar on load
    setTimeout(() => {
        const progressBar = document.querySelector('.bg-gradient-to-r.from-black.to-gray-800');
        if (progressBar) {
            progressBar.style.width = '100%';
        }
    }, 1000);
    
    // Add focus effects to form inputs
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('scale-105');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('scale-105');
        });
    });
});
</script>
@endsection
