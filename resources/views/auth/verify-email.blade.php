<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verificación de Correo</title>
</head>
<body>
    <main>
        <!-- Mensaje de verificación -->
        <section>
            <p>¡Gracias por registrarte! Antes de comenzar, ¿podrías verificar tu dirección de correo haciendo clic en el enlace que te enviamos? Si no recibiste el correo, con gusto te enviaremos otro.</p>
        </section>

        <!-- Mensaje de enlace de verificación reenviado -->
        @if (session('status') == 'verification-link-sent')
            <section>
                <p>Un nuevo enlace de verificación ha sido enviado a la dirección de correo que proporcionaste durante el registro.</p>
            </section>
        @endif

        <!-- Formularios de Reenvío de Verificación y Cierre de Sesión -->
        <section>
            <div>
                <!-- Botón para reenviar el enlace de verificación -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit">Reenviar Correo de Verificación</button>
                </form>
            </div>

            <!-- Botón para cerrar sesión -->
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Cerrar Sesión</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

