<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
</head>
<body>
    <main>
        <!-- Estado de la sesión (si existe un mensaje de estado) -->
        @if (session('status'))
            <section>
                <p>{{ session('status') }}</p>
            </section>
        @endif

        <!-- Formulario de inicio de sesión -->
        <section>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Campo de correo electrónico -->
                <div>
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Campo de contraseña -->
                <div>
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @if ($errors->has('password'))
                        <p>{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Opción de recordar sesión -->
                <div>
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>Recordarme</span>
                    </label>
                </div>

                <!-- Enlaces y botón de inicio de sesión -->
                <div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    @endif

                    <button type="submit">
                        Iniciar Sesión
                    </button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>

