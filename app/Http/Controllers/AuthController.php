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

        $baneo = $usuario->baneo;
        if ($usuario->baneado == 1 || ($baneo && in_array($baneo->estado, ['temporal', 'permanente']))) {
    Session::put('motivo_baneo', $baneo?->motivo ?? 'No especificado');
    Session::put('estado_baneo', $baneo?->estado ?? 'desconocido');
    Session::put('baneo_id', $baneo?->id ?? null); // ✅ NUEVO
    return redirect()->route('auth.baneado');
}

        
       

        Session::put([
            'usuario_id'     => $usuario->id,
            'usuario_nombre' => $usuario->nombre,
            'tipo_usuario'   => $usuario->tipo_usuario,
            'email'          => $usuario->email,
            'telefono'       => $usuario->telefono,
            'direccion'      => $usuario->direccion,
            'foto_perfil'    => $usuario->foto_perfil,
        ]);

        Session::save();

        return $usuario->tipo_usuario === 'moderador'
            ? redirect()->route('usuario.index')
            : redirect()->route('usuario.inicioUsuario');

    } else {
        return back()->with('error', 'Credenciales incorrectas.');
    }
}

    public function vistaBaneo()
    {
    return view('auth.baneado');
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