<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;
use App\Models\ImagenPropiedad;

class PropiedadController extends Controller
{
    public function ListarPropiedad()
    {
        $propiedades = Propiedad::all();
        return view('propietario.listarpropiedad', compact('propiedades'));
    }
     public function CrearPropiedad(){

        return view('usuario.propietario.listarpropiedad');

    }


}
