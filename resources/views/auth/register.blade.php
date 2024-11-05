<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
</head>
<body>
    <main>
        <section>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div>
                    <label for="name">Nombre</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    @if ($errors->has('name'))
                        <p>{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <!-- Apellido -->
                <div>
                    <label for="surname">Apellido</label>
                    <input id="surname" type="text" name="surname" value="{{ old('surname') }}" required autofocus autocomplete="surname">
                    @if ($errors->has('surname'))
                        <p>{{ $errors->first('surname') }}</p>
                    @endif
                </div>

                <!-- Fecha de Nacimiento -->
                <div>
                    <label for="birthday">Fecha de Nacimiento</label>
                    <input id="birthday" type="date" name="birthday" value="{{ old('birthday') }}" required autofocus autocomplete="birthday">
                    @if ($errors->has('birthday'))
                        <p>{{ $errors->first('birthday') }}</p>
                    @endif
                </div>

                <!-- Correo Electrónico -->
                <div>
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Contraseña -->
                <div>
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password">
                    @if ($errors->has('password'))
                        <p>{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Confirmar Contraseña -->
                <div>
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                    @if ($errors->has('password_confirmation'))
                        <p>{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <!-- Enlace y botón de registro -->
                <div>
                    <a href="{{ route('login') }}">¿Ya estás registrado?</a>
                    <button type="submit">Registrar</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
