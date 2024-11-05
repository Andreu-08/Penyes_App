<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmar Contraseña</title>
</head>
<body>
    <main>
        <!-- Sección de mensaje de confirmación -->
        <section>
            <header>
                <p>Esta es una área segura de la aplicación. Por favor, confirma tu contraseña antes de continuar.</p>
            </header>
        </section>

        <!-- Sección del formulario de confirmación de contraseña -->
        <section>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Campo de contraseña -->
                <div>
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">

                    @if ($errors->has('password'))
                        <p>{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Botón de confirmación -->
                <div>
                    <button type="submit">
                        Confirmar
                    </button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>

