<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restablecer Contraseña</title>
</head>
<body>
    <main>
        <section>
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Token de Restablecimiento de Contraseña -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Correo Electrónico -->
                <div>
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Nueva Contraseña -->
                <div>
                    <label for="password">Nueva Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password">
                    @if ($errors->has('password'))
                        <p>{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Confirmar Nueva Contraseña -->
                <div>
                    <label for="password_confirmation">Confirmar Nueva Contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                    @if ($errors->has('password_confirmation'))
                        <p>{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <!-- Botón de Restablecimiento -->
                <div>
                    <button type="submit">Restablecer Contraseña</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
