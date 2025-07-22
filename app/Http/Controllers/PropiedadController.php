<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;
use App\Models\ImagenPropiedad;
use App\Mail\PropiedadNotificacion;
use Illuminate\Support\Facades\Mail;

class PropiedadController extends Controller
{   
    
    public function ListarPropiedad()
    {
        $usuarioId = session('usuario_id');
        $propiedades = Propiedad::where('estado','=','disponible')->where('aprobada','=','aprobado')->where('usuario_id', '!=', $usuarioId)->get(); ;
        return view('usuario.listarpropiedad', compact('propiedades'));
    }
     public function CrearPropiedad(){

        return view('usuario.propietario.crearpropiedad');

    }
   public function StorePropiedad(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'direccion' => 'required|string',
        'precio_mensual' => 'nullable|numeric',
        'precio_dia' => 'nullable|numeric',
        'num_habitaciones' => 'required|integer',
        'num_banos' => 'required|integer',
        'estado' => 'required|string',
        'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $usuarioId = $request->session()->get('usuario_id');

    $propiedad = Propiedad::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'direccion' => $request->direccion,
        'precio_mensual' => $request->precio_mensual,
        'precio_dia' => $request->precio_dia,
        'num_habitaciones' => $request->num_habitaciones,
        'num_banos' => $request->num_banos,
        'estado' => $request->estado,
        'aprobada' => 'pendiente', // Estado inicial de la propiedad
        'usuario_id' => $usuarioId
    ]);

    if ($request->hasFile('imagenes')) {
        foreach ($request->file('imagenes') as $imagen) {
            $nombreArchivo = time().'_'.$imagen->getClientOriginalName();
            $imagen->move(public_path('imagenes_propiedades'), $nombreArchivo);
            $ruta = 'imagenes_propiedades/' . $nombreArchivo;
            ImagenPropiedad::create([
                'ruta' => $ruta,
                'propiedad_id' => $propiedad->id,
            ]);
        }
    }

    return redirect()->route('propiedad.listarPropiedadUsuario')->with('success', 'Propiedad creada exitosamente.');
}

    //Aprobar y rechazar propiedades y listar solicitudes
    public function aprobar($id)
    {
        try {
            $propiedad = Propiedad::with('usuario')->findOrFail($id);
            $propiedad->aprobada = 'aprobado';
            $propiedad->save();

            // Enviar correo de notificación
            if ($propiedad->usuario && $propiedad->usuario->email) {
                Mail::to($propiedad->usuario->email)->send(new PropiedadNotificacion($propiedad, 'aprobado'));
            }

            return redirect()->back()->with('success', 'Propiedad aprobada correctamente y notificación enviada.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al aprobar la propiedad: ' . $e->getMessage());
        }
    }

    public function rechazar($id)
    {
        try {
            $propiedad = Propiedad::with('usuario')->findOrFail($id);
            $propiedad->aprobada = 'rechazado';
            $propiedad->save();

            // Enviar correo de notificación
            if ($propiedad->usuario && $propiedad->usuario->email) {
                Mail::to($propiedad->usuario->email)->send(new PropiedadNotificacion($propiedad, 'rechazado'));
            }

            return redirect()->back()->with('success', 'Propiedad rechazada correctamente y notificación enviada.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al rechazar la propiedad: ' . $e->getMessage());
        }
    }

    public function VistaSolicitudesPropiedades(){
        $propiedades = Propiedad::where('aprobada', 'pendiente')->get();
        return view('moderador/solicitudPropiedad', compact('propiedades'));
    }

    public function ListarPropiedadDelUsuario()
    {
        $usuarioId = session('usuario_id');
        $propiedades = Propiedad::where('usuario_id', $usuarioId)->get();

        return view('usuario.propietario.propiedaddelusuario', compact('propiedades'));
    }
    public function EditarPropiedadDelUsuario($id)
    {
        $propiedad = Propiedad::findOrFail($id);
        if ($propiedad->usuario_id != session('usuario_id')) {
            return redirect()->back()->with('error', 'No tienes permiso para editar esta propiedad.');
        }
         
        return view('usuario.propietario.editarpropiedad', compact('propiedad'));
    }
    public function ActualizarPropiedadDelUsuario(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'direccion' => 'required|string',
            'precio_mensual' => 'nullable|numeric',
            'precio_dia' => 'nullable|numeric',
            'num_habitaciones' => 'required|integer',
            'num_banos' => 'required|integer',
            'estado' => 'required|string',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $propiedad = Propiedad::findOrFail($id);
        if ($propiedad->usuario_id != session('usuario_id')) {
            return redirect()->back()->with('error', 'No tienes permiso para actualizar esta propiedad.');
        }

        $propiedad->update($request->all());

        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $nombreArchivo = time().'_'.$imagen->getClientOriginalName();
                $imagen->move(public_path('imagenes_propiedades'), $nombreArchivo);
                $ruta = 'imagenes_propiedades/' . $nombreArchivo;
                ImagenPropiedad::create([
                    'ruta' => $ruta,
                    'propiedad_id' => $propiedad->id,
                ]);
            }
        }

        return redirect()->route('propiedad.listarPropiedadUsuario')->with('success', 'Propiedad actualizada exitosamente.');
    }
}