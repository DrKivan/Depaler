<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

   public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'contrasena' => 'required'
    ]);

    $usuario = Usuario::where('email', $request->email)->first();

    if ($usuario && $usuario->contrasena === $request->contrasena) {
        // Guardamos info en sesión
        Session::put('usuario_id', $usuario->id);
        Session::put('usuario_nombre', $usuario->nombre);
        Session::put('tipo_usuario', $usuario->tipo_usuario);
        Session::put('email', $usuario->email);
        Session::put('telefono', $usuario->telefono);
        Session::put('direccion', $usuario->direccion);
        // Redirigir según tipo de usuario
        if ($usuario->tipo_usuario === 'moderador') {
            return redirect()->route('usuario.index'); // lo ajustamos abajo
        } else {
            return redirect()->route('propiedades.listar'); // lo ajustamos abajo
        }
    } else {
        return back()->with('error', 'Credenciales incorrectas.');
    }
}

    public function logout()
    {
        Session::flush();
        return redirect()->route('login.form');
    }
    public function vistaRegistro()
    {
        return view('auth.registrar');
    }
   public function registrarGuardar(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|unique:usuarios,email',
        'contrasena' => 'required|string|min:6|confirmed',
        'telefono' => 'required|string|max:20',
        'direccion' => 'required|string|max:255',
        'fecha_nacimiento' => 'required|date',
        'foto_perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $rutaFoto = null;

    if ($request->hasFile('foto_perfil')) {
        $archivo = $request->file('foto_perfil');
        $nombreArchivo = time().'_'.$archivo->getClientOriginalName();
        $archivo->move(public_path('fotos_perfil'), $nombreArchivo);
        $rutaFoto = 'fotos_perfil/' . $nombreArchivo; // Ruta que se guarda en la base de datos
    }

    Usuario::create([
        'nombre' => $request->nombre,
        'email' => $request->email,
        'contrasena' => $request->contrasena,
        'telefono' => $request->telefono,
        'direccion' => $request->direccion,
        'fecha_nacimiento' => $request->fecha_nacimiento,
        'tipo_usuario' => 'usuario',
        'foto_perfil' => $rutaFoto, // Se guarda null si no se subió imagen
    ]);

    return redirect()->route('login.form')->with('success', 'Registro exitoso. Por favor, inicia sesión.');
}
    
}




?>