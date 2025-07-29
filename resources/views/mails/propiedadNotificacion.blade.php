<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notificación de Propiedad - Depaler</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    
    <!-- Contenedor principal -->
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 20px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); overflow: hidden;">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px 30px; text-align: center;">
                            <!-- Icono principal -->
                            <table width="100" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto 20px;">
                                <tr>
                                    <td style="width: 100px; height: 100px; background-color: #ffffff; border-radius: 50px; text-align: center; vertical-align: middle; font-size: 40px; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
                                        🏠
                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Título -->
                            <h1 style="color: #ffffff; margin: 0 0 10px; font-size: 28px; font-weight: bold; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
                                Notificación de Propiedad
                            </h1>
                            
                            <!-- Logo Depaler -->
                            <div style="color: #ffffff; font-size: 24px; font-weight: bold; letter-spacing: 3px; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
                                DEPALER
                            </div>
                            
                            <!-- Línea decorativa -->
                            <div style="width: 80px; height: 4px; background-color: #ffffff; margin: 15px auto; border-radius: 2px;"></div>
                        </td>
                    </tr>
                    
                    <!-- Contenido principal -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            
                            <!-- Saludo -->
                            <div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 30px; border-left: 4px solid #667eea;">
                                <p style="margin: 0; font-size: 18px; color: #2c3e50;">
                                    Estimado/a <strong style="color: #667eea;">{{ $usuario->nombre ?? 'Usuario' }}</strong>,
                                </p>
                            </div>
                            
                            @if($estado === 'aprobado')
                                <!-- Estado Aprobado -->
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background: linear-gradient(135deg, #d4edda 0%, #ffffff 100%); border: 3px solid #28a745; border-radius: 15px; margin: 30px 0;">
                                    <tr>
                                        <td style="padding: 30px; text-align: center;">
                                            <!-- Icono de aprobado -->
                                            <table width="80" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto 20px;">
                                                <tr>
                                                    <td style="width: 80px; height: 80px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); border-radius: 40px; text-align: center; vertical-align: middle; color: #ffffff; font-size: 32px; font-weight: bold; box-shadow: 0 5px 15px rgba(40,167,69,0.4);">
                                                        ✓
                                                    </td>
                                                </tr>
                                            </table>
                                            
                                            <h2 style="color: #28a745; margin: 0 0 10px; font-size: 24px; font-weight: bold;">
                                                ¡PROPIEDAD APROBADA!
                                            </h2>
                                            <p style="color: #6c757d; margin: 0; font-size: 16px;">
                                                Tu propiedad ha sido aprobada exitosamente y está lista para generar ingresos
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                
                                <p style="color: #2c3e50; font-size: 16px; line-height: 1.6; margin: 20px 0; background-color: #f8f9fa; padding: 15px; border-radius: 8px;">
                                    🎉 <strong style="color: #667eea;">¡Excelentes noticias!</strong> Tu propiedad ha sido <strong style="color: #28a745;">aprobada</strong> y ya está disponible en nuestra plataforma premium <strong style="color: #667eea;">DEPALER</strong>.
                                </p>
                                
                                <p style="color: #2c3e50; font-size: 16px; line-height: 1.6; margin: 20px 0; background-color: #f8f9fa; padding: 15px; border-radius: 8px;">
                                    ✨ Tu propiedad ahora es visible para todos nuestros usuarios verificados y pueden comenzar a enviar solicitudes de alquiler de inmediato. <strong style="color: #667eea;">¡Es hora de generar ingresos!</strong>
                                </p>
                                
                            @else
                                <!-- Estado Rechazado -->
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background: linear-gradient(135deg, #f8d7da 0%, #ffffff 100%); border: 3px solid #dc3545; border-radius: 15px; margin: 30px 0;">
                                    <tr>
                                        <td style="padding: 30px; text-align: center;">
                                            <!-- Icono de rechazado -->
                                            <table width="80" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto 20px;">
                                                <tr>
                                                    <td style="width: 80px; height: 80px; background: linear-gradient(135deg, #dc3545 0%, #e74c3c 100%); border-radius: 40px; text-align: center; vertical-align: middle; color: #ffffff; font-size: 28px; font-weight: bold; box-shadow: 0 5px 15px rgba(220,53,69,0.4);">
                                                        ✕
                                                    </td>
                                                </tr>
                                            </table>
                                            
                                            <h2 style="color: #dc3545; margin: 0 0 10px; font-size: 24px; font-weight: bold;">
                                                PROPIEDAD RECHAZADA
                                            </h2>
                                            <p style="color: #6c757d; margin: 0; font-size: 16px;">
                                                Tu propiedad necesita algunas mejoras antes de la aprobación
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                
                                <p style="color: #2c3e50; font-size: 16px; line-height: 1.6; margin: 20px 0; background-color: #f8f9fa; padding: 15px; border-radius: 8px;">
                                    Lamentamos informarte que tu propiedad ha sido <strong style="color: #dc3545;">rechazada temporalmente</strong>.
                                </p>
                                
                                <p style="color: #2c3e50; font-size: 16px; line-height: 1.6; margin: 20px 0; background-color: #f8f9fa; padding: 15px; border-radius: 8px;">
                                    📋 Esto puede deberse a diferentes motivos como información incompleta, imágenes de baja calidad, o incumplimiento de nuestras políticas de calidad premium. Te invitamos a revisar los requisitos y volver a enviar tu solicitud.
                                </p>
                            @endif
                            
                            <!-- Línea decorativa -->
                            <div style="height: 4px; background: linear-gradient(90deg, transparent, #667eea, #764ba2, transparent); margin: 30px 0; border-radius: 2px;"></div>
                            
                            <!-- Información de la propiedad -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: 2px solid #667eea; border-radius: 15px; margin: 30px 0; position: relative;">
                                <tr>
                                    <td style="padding: 30px;">
                                        
                                        <!-- Icono flotante -->
                                        <div style="position: absolute; top: -15px; right: 20px; width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 25px; text-align: center; line-height: 50px; font-size: 24px; box-shadow: 0 5px 15px rgba(102,126,234,0.4);">
                                            🏠
                                        </div>
                                        
                                        <h3 style="color: #667eea; margin: 0 0 25px; font-size: 20px; font-weight: bold; text-align: center;">
                                            📋 Información de la Propiedad
                                        </h3>
                                        
                                        <!-- Detalles de la propiedad -->
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td style="padding: 10px 0; border-bottom: 1px solid rgba(102,126,234,0.2);">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="width: 150px; color: #667eea; font-weight: bold; font-size: 16px;">
                                                                🏷️ Título:
                                                            </td>
                                                            <td style="color: #2c3e50; font-weight: 600; font-size: 16px;">
                                                                {{ $propiedad->titulo }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            
                                            @if($propiedad->precio_mensual)
                                            <tr>
                                                <td style="padding: 10px 0; border-bottom: 1px solid rgba(102,126,234,0.2);">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="width: 150px; color: #667eea; font-weight: bold; font-size: 16px;">
                                                                💰 Precio mensual:
                                                            </td>
                                                            <td style="color: #28a745; font-weight: bold; font-size: 18px;">
                                                                Bs. {{ number_format($propiedad->precio_mensual, 2) }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            @endif
                                            
                                            @if($propiedad->precio_dia)
                                            <tr>
                                                <td style="padding: 10px 0; border-bottom: 1px solid rgba(102,126,234,0.2);">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="width: 150px; color: #667eea; font-weight: bold; font-size: 16px;">
                                                                📅 Precio por día:
                                                            </td>
                                                            <td style="color: #28a745; font-weight: bold; font-size: 18px;">
                                                                Bs. {{ number_format($propiedad->precio_dia, 2) }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            @endif
                                            
                                            <tr>
                                                <td style="padding: 10px 0; border-bottom: 1px solid rgba(102,126,234,0.2);">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="width: 150px; color: #667eea; font-weight: bold; font-size: 16px;">
                                                                🛏️ Habitaciones:
                                                            </td>
                                                            <td style="color: #2c3e50; font-weight: 600; font-size: 16px;">
                                                                {{ $propiedad->num_habitaciones }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="padding: 10px 0;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="width: 150px; color: #667eea; font-weight: bold; font-size: 16px;">
                                                                🚿 Baños:
                                                            </td>
                                                            <td style="color: #2c3e50; font-weight: 600; font-size: 16px;">
                                                                {{ $propiedad->num_banos }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            @if($estado === 'aprobado')
                                <p style="color: #2c3e50; font-size: 16px; line-height: 1.6; margin: 20px 0; background-color: #f8f9fa; padding: 15px; border-radius: 8px;">
                                    🎯 Puedes ver tu propiedad en tu <strong style="color: #667eea;">panel de control premium</strong> o acceder directamente desde nuestra plataforma <strong style="color: #667eea;">DEPALER</strong>.
                                </p>
                                
                                <!-- Botón de acción -->
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 30px 0;">
                                    <tr>
                                        <td align="center">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 25px; box-shadow: 0 5px 15px rgba(102,126,234,0.4);">
                                                        <a href="#" style="display: block; padding: 15px 30px; color: #ffffff; text-decoration: none; font-weight: bold; font-size: 16px; text-transform: uppercase; letter-spacing: 1px;">
                                                            🏠 Ver Mi Propiedad
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                
                                <p style="color: #2c3e50; font-size: 16px; line-height: 1.6; margin: 20px 0; background-color: #f8f9fa; padding: 15px; border-radius: 8px;">
                                    🏆 <strong style="color: #667eea;">¡Gracias por confiar en DEPALER para el alquiler de tu propiedad!</strong> Nuestro equipo premium está aquí para ayudarte a maximizar tus ganancias y brindar la mejor experiencia.
                                </p>
                                
                            @else
                                <p style="color: #2c3e50; font-size: 16px; line-height: 1.6; margin: 20px 0; background-color: #f8f9fa; padding: 15px; border-radius: 8px;">
                                    💬 Si tienes alguna pregunta sobre el rechazo o necesitas ayuda para cumplir con los requisitos de calidad premium, nuestro <strong style="color: #667eea;">equipo de soporte VIP</strong> está disponible 24/7.
                                </p>
                                
                                <!-- Botón de acción -->
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 30px 0;">
                                    <tr>
                                        <td align="center">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 25px; box-shadow: 0 5px 15px rgba(102,126,234,0.4);">
                                                        <a href="#" style="display: block; padding: 15px 30px; color: #ffffff; text-decoration: none; font-weight: bold; font-size: 16px; text-transform: uppercase; letter-spacing: 1px;">
                                                            📞 Contactar Soporte VIP
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                
                                <p style="color: #2c3e50; font-size: 16px; line-height: 1.6; margin: 20px 0; background-color: #f8f9fa; padding: 15px; border-radius: 8px;">
                                    🔄 <strong style="color: #667eea;">Esperamos volver a recibir tu solicitud pronto.</strong> En <strong style="color: #667eea;">DEPALER</strong> estamos aquí para ayudarte a que tu propiedad cumpla con nuestros estándares de excelencia premium.
                                </p>
                            @endif
                        </td>
                    </tr>
                    
                    <!-- Footer -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); color: #ffffff; padding: 40px 30px; text-align: center;">
                            
                            <!-- Logo del footer -->
                            <h2 style="color: #667eea; margin: 0 0 15px; font-size: 28px; font-weight: bold; letter-spacing: 3px;">
                                🏠 DEPALER
                            </h2>
                            
                            <p style="color: #667eea; margin: 0 0 20px; font-size: 16px; font-weight: bold; font-style: italic;">
                                La plataforma premium líder en alquileres de propiedades
                            </p>
                            
                            <!-- Línea decorativa -->
                            <div style="width: 100px; height: 3px; background: linear-gradient(90deg, transparent, #667eea, transparent); margin: 20px auto; border-radius: 2px;"></div>
                            
                            <p style="color: #ecf0f1; margin: 10px 0; font-size: 14px;">
                                Este es un mensaje automático, por favor no respondas a este correo.
                            </p>
                            
                            <p style="color: #ecf0f1; margin: 10px 0; font-size: 14px;">
                                &copy; {{ date('Y') }} <strong style="color: #667eea;">DEPALER</strong> - Todos los derechos reservados
                            </p>
                            
                            <p style="color: #bdc3c7; margin: 10px 0; font-size: 12px;">
                                Conectando propietarios premium con inquilinos de calidad 🌍
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
