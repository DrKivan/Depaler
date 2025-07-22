<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notificación de Propiedad</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
        }
        .status-approved {
            color: #28a745;
            font-weight: bold;
        }
        .status-rejected {
            color: #dc3545;
            font-weight: bold;
        }
        .property-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Notificación de Propiedad</h2>
    </div>

    <p>Estimado/a {{ $usuario->nombre ?? 'Usuario' }},</p>

    @if($estado === 'aprobado')
        <p>¡Excelentes noticias! Tu propiedad ha sido <span class="status-approved">APROBADA</span> y ya está disponible en nuestra plataforma.</p>
        
        <p>Tu propiedad ahora es visible para todos los usuarios y pueden comenzar a enviar solicitudes de alquiler.</p>
    @else
        <p>Lamentamos informarte que tu propiedad ha sido <span class="status-rejected">RECHAZADA</span>.</p>
        
        <p>Esto puede deberse a diferentes motivos como información incompleta, imágenes de baja calidad, o incumplimiento de nuestras políticas. Te invitamos a revisar los requisitos y volver a enviar tu solicitud.</p>
    @endif

    <div class="property-info">
        <h3>Información de la Propiedad:</h3>
        <p><strong>Título:</strong> {{ $propiedad->titulo }}</p>
        @if($propiedad->precio_mensual)
            <p><strong>Precio mensual:</strong> Bs. {{ number_format($propiedad->precio_mensual, 2) }}</p>
        @endif
        @if($propiedad->precio_dia)
            <p><strong>Precio por día:</strong> Bs. {{ number_format($propiedad->precio_dia, 2) }}</p>
        @endif
        <p><strong>Habitaciones:</strong> {{ $propiedad->num_habitaciones }}</p>
        <p><strong>Baños:</strong> {{ $propiedad->num_banos }}</p>
    </div>

    @if($estado === 'aprobado')
        <p>Puedes ver tu propiedad en tu panel de control o acceder directamente desde nuestra plataforma.</p>
        <p>¡Gracias por confiar en nosotros para el alquiler de tu propiedad!</p>
    @else
        <p>Si tienes alguna pregunta sobre el rechazo o necesitas ayuda para cumplir con los requisitos, no dudes en contactarnos.</p>
        <p>Esperamos volver a recibir tu solicitud pronto.</p>
    @endif

    <div class="footer">
        <p>Este es un mensaje automático, por favor no respondas a este correo.</p>
        <p>&copy; {{ date('Y') }} Tu Plataforma de Alquileres</p>
    </div>
</body>
</html>