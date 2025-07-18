<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function Index(){
        $usuarios = Usuario::all();
        return view('usuario/inicio', compact('usuarios'));
    }

    

    
}
