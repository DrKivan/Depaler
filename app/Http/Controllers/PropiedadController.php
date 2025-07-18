<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PropiedadController extends Controller
{
    public function ListarPropiedad()
    {
        $propiedades = Propiedad::all();
        return view('usuario.listarpropiedad', compact('propiedades'));
    }
}
