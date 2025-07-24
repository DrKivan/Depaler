<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Espacios</title>
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
    </style>
</head>
<body class="min-h-screen bg-luxury-gradient font-sans">
    <div class="min-h-screen flex">
        <!-- Left Side - Login Form -->
        <div class="flex-1 flex items-center justify-center px-8 py-12">
            <div class="max-w-md w-full space-y-8">
                <!-- Logo -->
                <div class="text-center">
                    <div class="flex items-center justify-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-home text-black text-lg"></i>
                        </div>
                        <span class="text-2xl font-serif text-amber-400 font-bold">ESPACIOS</span>
                    </div>
                    <h2 class="text-3xl font-serif text-white mb-2">Iniciar Sesión</h2>
                    <p class="text-gray-400">Accede a tu cuenta para descubrir espacios únicos</p>
                </div>

                <!-- Error Message -->
                @if(session('error'))
                    <div class="bg-red-900/50 border border-red-500 text-red-200 px-4 py-3 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            {{ session('error') }}
                        </div>
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login.submit') }}" class="space-y-6">
                    @csrf
                    
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
                                class="input-luxury w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-400"
                                placeholder="tu@email.com"
                            >
                        </div>
                    </div>

                    <!-- Password Field -->
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

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                id="remember" 
                                name="remember" 
                                type="checkbox" 
                                class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-600 rounded bg-gray-800"
                            >
                            <label for="remember" class="ml-2 block text-sm text-gray-300">
                                Recordarme
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="text-amber-400 hover:text-amber-300 transition-colors">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="btn-luxury w-full py-3 px-4 rounded-lg text-black font-semibold text-lg"
                    >
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Iniciar Sesión
                    </button>
                </form>

                <!-- Register Link -->
                <div class="text-center">
                    <p class="text-gray-400">
                        ¿No tienes una cuenta? 
                        <a href="{{ route('registro.form') }}" class="text-amber-400 hover:text-amber-300 font-medium transition-colors">
                            Regístrate aquí
                        </a>
                    </p>
                </div>

                <!-- Social Login (Optional) -->
                <div class="mt-8">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-600"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-gray-900 text-gray-400">O continúa con</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <button class="w-full inline-flex justify-center py-2 px-4 border border-gray-600 rounded-lg bg-gray-800 text-sm font-medium text-gray-300 hover:bg-gray-700 transition-colors">
                            <i class="fab fa-google text-red-400 mr-2"></i>
                            Google
                        </button>
                        <button class="w-full inline-flex justify-center py-2 px-4 border border-gray-600 rounded-lg bg-gray-800 text-sm font-medium text-gray-300 hover:bg-gray-700 transition-colors">
                            <i class="fab fa-facebook text-blue-400 mr-2"></i>
                            Facebook
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Image -->
        <div class="hidden lg:block flex-1 relative">
            <img 
                src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                alt="Luxury Space Interior" 
                class="absolute inset-0 w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-gradient-to-l from-black/50 to-transparent"></div>
            
            <!-- Overlay Content -->
            <div class="absolute inset-0 flex items-end justify-start p-12">
                <div class="text-white">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-star text-black text-sm"></i>
                        </div>
                        <span class="text-xl font-serif text-amber-400 font-bold">ESPACIOS PREMIUM</span>
                    </div>
                    <h3 class="text-2xl font-serif mb-2">Descubre Espacios Únicos</h3>
                    <p class="text-gray-300 max-w-md">
                        Accede a una selección exclusiva de los espacios más lujosos y únicos para tus experiencias especiales.
                    </p>
                    
                    <!-- Stats -->
                    <div class="flex items-center space-x-6 mt-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-amber-400">500+</div>
                            <div class="text-sm text-gray-300">Espacios</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-amber-400">4.9</div>
                            <div class="text-sm text-gray-300">Rating</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-amber-400">10K+</div>
                            <div class="text-sm text-gray-300">Usuarios</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>