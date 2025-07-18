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

        // Redirigir según tipo de usuario
        if ($usuario->tipo_usuario === 'moderador') {
            return redirect()->route('baneos');
        } else {
            return redirect()->route('usuario.index'); // lo ajustamos abajo
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
}




?>