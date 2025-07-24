<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Espacios</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap');
        
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
        
        .bg-luxury-gradient {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 50%, #1a1a1a 100%);
        }
        
        .input-luxury {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(245, 158, 11, 0.3);
            transition: all 0.3s ease;
        }
        
        .input-luxury:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
            outline: none;
        }
        
        .btn-luxury {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            transition: all 0.3s ease;
        }
        
        .btn-luxury:hover {
            background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.3);
        }

        .file-upload {
            position: relative;
            display: inline-block;
            cursor: pointer;
            width: 100%;
        }

        .file-upload input[type=file] {
            position: absolute;
            left: -9999px;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            border: 2px dashed rgba(245, 158, 11, 0.3);
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .file-upload:hover .file-upload-label {
            border-color: #f59e0b;
            background: rgba(245, 158, 11, 0.1);
        }

        /* Añadido: Filtro para oscurecer la imagen */
        .darken-image {
            filter: brightness(0.5);
        }
    </style>
</head>
<body class="min-h-screen bg-luxury-gradient font-sans">
    <div class="min-h-screen flex">
        <!-- Left Side - Register Form -->
        <div class="flex-1 flex items-center justify-center px-8 py-12">
            <div class="max-w-lg w-full space-y-8">
                <!-- Logo -->
                <div class="text-center">
                    <div class="flex items-center justify-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-home text-black text-lg"></i>
                        </div>
                        <span class="text-2xl font-serif text-amber-400 font-bold">ESPACIOS</span>
                    </div>
                    <h2 class="text-3xl font-serif text-white mb-2">Crear Cuenta</h2>
                    <p class="text-gray-400">Únete a nuestra comunidad de espacios únicos</p>
                </div>

                <!-- Success Message -->
                @if(session('success'))
                    <div class="bg-green-900/50 border border-green-500 text-green-200 px-4 py-3 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                <!-- Error Messages -->
                @if($errors->any())
                    <div class="bg-red-900/50 border border-red-500 text-red-200 px-4 py-3 rounded-lg">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <span class="font-medium">Por favor corrige los siguientes errores:</span>
                        </div>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Register Form -->
                <form method="POST" action="{{ route('registro.submit') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <!-- Personal Information Section -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-serif text-amber-400 border-b border-amber-400/30 pb-2">
                            Información Personal
                        </h3>
                        
                        <!-- Name Field -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-300 mb-2">
                                Nombre Completo
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="nombre"
                                    name="nombre" 
                                    required
                                    value="{{ old('nombre') }}"
                                    class="input-luxury w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-400"
                                    placeholder="Tu nombre completo"
                                >
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                                Correo Electrónico
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input 
                                    type="email" 
                                    id="email"
                                    name="email" 
                                    required
                                    value="{{ old('email') }}"
                                    class="input-luxury w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-400"
                                    placeholder="tu@email.com"
                                >
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <label for="telefono" class="block text-sm font-medium text-gray-300 mb-2">
                                Teléfono
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="telefono"
                                    name="telefono" 
                                    required
                                    value="{{ old('telefono') }}"
                                    class="input-luxury w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-400"
                                    placeholder="+34 600 000 000"
                                >
                            </div>
                        </div>

                        <!-- Birth Date Field -->
                        <div>
                            <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-300 mb-2">
                                Fecha de Nacimiento
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-calendar text-gray-400"></i>
                                </div>
                                <input 
                                    type="date" 
                                    id="fecha_nacimiento"
                                    name="fecha_nacimiento" 
                                    required
                                    value="{{ old('fecha_nacimiento') }}"
                                    class="input-luxury w-full pl-10 pr-4 py-3 rounded-lg text-white"
                                >
                            </div>
                        </div>

                        <!-- Address Field -->
                        <div>
                            <label for="direccion" class="block text-sm font-medium text-gray-300 mb-2">
                                Dirección
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-map-marker-alt text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="direccion"
                                    name="direccion" 
                                    required
                                    value="{{ old('direccion') }}"
                                    class="input-luxury w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-400"
                                    placeholder="Tu dirección completa"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Security Section -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-serif text-amber-400 border-b border-amber-400/30 pb-2">
                            Seguridad
                        </h3>

                        <!-- Password Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="contrasena" class="block text-sm font-medium text-gray-300 mb-2">
                                    Contraseña
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input 
                                        type="password" 
                                        id="contrasena"
                                        name="contrasena" 
                                        required
                                        class="input-luxury w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-400"
                                        placeholder="••••••••"
                                    >
                                </div>
                            </div>

                            <div>
                                <label for="contrasena_confirmation" class="block text-sm font-medium text-gray-300 mb-2">
                                    Confirmar Contraseña
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input 
                                        type="password" 
                                        id="contrasena_confirmation"
                                        name="contrasena_confirmation" 
                                        required
                                        class="input-luxury w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-400"
                                        placeholder="••••••••"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Photo Section -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-serif text-amber-400 border-b border-amber-400/30 pb-2">
                            Foto de Perfil (Opcional)
                        </h3>
                        
                        <div class="file-upload">
                            <input type="file" id="foto_perfil" name="foto_perfil" accept="image/*">
                            <label for="foto_perfil" class="file-upload-label">
                                <div class="text-center">
                                    <i class="fas fa-cloud-upload-alt text-amber-400 text-2xl mb-2"></i>
                                    <div class="text-gray-300">
                                        <span class="font-medium">Haz clic para subir</span> o arrastra tu foto aquí
                                    </div>
                                    <div class="text-gray-400 text-sm mt-1">PNG, JPG hasta 10MB</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <input 
                            id="terms" 
                            name="terms" 
                            type="checkbox" 
                            required
                            class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-600 rounded bg-gray-800 mt-1"
                        >
                        <label for="terms" class="ml-2 block text-sm text-gray-300">
                            Acepto los 
                            <a href="#" class="text-amber-400 hover:text-amber-300 transition-colors">términos y condiciones</a> 
                            y la 
                            <a href="#" class="text-amber-400 hover:text-amber-300 transition-colors">política de privacidad</a>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="btn-luxury w-full py-3 px-4 rounded-lg text-black font-semibold text-lg"
                    >
                        <i class="fas fa-user-plus mr-2"></i>
                        Crear Mi Cuenta
                    </button>
                </form>

                <!-- Login Link -->
                <div class="text-center">
                    <p class="text-gray-400">
                        ¿Ya tienes una cuenta? 
                        <a href="{{ route('login.form') }}" class="text-amber-400 hover:text-amber-300 font-medium transition-colors">
                            Inicia sesión aquí
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side - Image -->
        <div class="hidden lg:block flex-1 relative ">
            <img 
                src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                alt="Luxury Apartment Interior" 
                class="absolute inset-0 w-full h-full object-cover darken-image"
            >
            <div class="absolute inset-0 bg-gradient-to-l from-black/50 to-transparent"></div>
            
            <!-- Overlay Content -->
            <div class="absolute inset-0 flex items-center justify-start p-12">
                <div class="text-white max-w-md">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-users text-black text-sm"></i>
                        </div>
                        <span class="text-xl font-serif text-amber-400 font-bold">ÚNETE A ESPACIOS</span>
                    </div>
                    
                    <h3 class="text-3xl font-serif mb-4">Forma Parte de Nuestra Comunidad</h3>
                    <p class="text-gray-300 mb-8 leading-relaxed">
                        Únete a miles de usuarios que ya disfrutan de experiencias únicas en los espacios más exclusivos.
                    </p>
                    
                    <!-- Benefits -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-black text-xs"></i>
                            </div>
                            <span class="text-gray-300">Acceso a espacios verificados</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-black text-xs"></i>
                            </div>
                            <span class="text-gray-300">Reservas seguras y protegidas</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-black text-xs"></i>
                            </div>
                            <span class="text-gray-300">Soporte 24/7</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-black text-xs"></i>
                            </div>
                            <span class="text-gray-300">Experiencias premium</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // File upload preview
        document.getElementById('foto_perfil').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const label = document.querySelector('.file-upload-label');
            
            if (file) {
                label.innerHTML = `
                    <div class="text-center">
                        <i class="fas fa-check-circle text-green-400 text-2xl mb-2"></i>
                        <div class="text-gray-300">
                            <span class="font-medium">${file.name}</span>
                        </div>
                        <div class="text-gray-400 text-sm mt-1">Archivo seleccionado</div>
                    </div>
                `;
            }
        });
    </script>
</body>
</html>