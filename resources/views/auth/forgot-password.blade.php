<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <main>
        <!-- Estado de la sesión (si existe un mensaje de estado) -->
        @if (session('status'))
            <section>
                <p>{{ session('status') }}</p>
            </section>
        @endif

        <!-- Formulario para solicitar el enlace de recuperación de contraseña -->
        <section>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Campo de correo electrónico -->
                <div>
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Botón para enviar el enlace de recuperación -->
                <div>
                    <button type="submit">
                        Enviar Enlace de Recuperación de Contraseña
                    </button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>

