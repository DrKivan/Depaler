<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Propiedad;

class PropiedadNotificacion extends Mailable
{
    use Queueable, SerializesModels;

    public $propiedad;
    public $estado;
    public $usuario;

    public function __construct(Propiedad $propiedad, $estado)
    {
        $this->propiedad = $propiedad;
        $this->estado = $estado;
        $this->usuario = $propiedad->usuario;
    }

    public function build()
    {
        $asunto = $this->estado === 'aprobado'
            ? 'Propiedad Aprobada - ' . $this->propiedad->titulo
            : 'Propiedad Rechazada - ' . $this->propiedad->titulo;

        return $this->subject($asunto)
                    ->view('mails.propiedadNotificacion')
                    ->with([
                        'propiedad' => $this->propiedad,
                        'estado' => $this->estado,
                        'usuario' => $this->usuario,
                    ]);
    }
}


?>