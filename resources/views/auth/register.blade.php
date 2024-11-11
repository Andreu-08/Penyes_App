{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.home');
@section('content')
<body>
    <main class="section">
        <div class="container">
            <section class="box">
                <h1 class="title has-text-centered">Registro</h1>

                <!-- Formulario de registro -->
                <form method="POST" action="{{ route('register') }}" class="mt-5">
                    @csrf

                    <!-- Campo de nombre -->
                    <div class="field">
                        <label for="name" class="label">Nombre</label>
                        <div class="control">
                            <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                        </div>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>

                    <!-- Campo de apellido -->
                    <div class="field">
                        <label for="surname" class="label">Apellido</label>
                        <div class="control">
                            <input id="surname" type="text" class="input" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                        </div>
                        @if ($errors->has('surname'))
                            <p class="help is-danger">{{ $errors->first('surname') }}</p>
                        @endif
                    </div>

                    <!-- Campo de fecha de nacimiento -->
                    <div class="field">
                        <label for="birthday" class="label">Fecha de Nacimiento</label>
                        <div class="control">
                            <input id="birthday" type="date" class="input" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday">
                        </div>
                        @if ($errors->has('birthday'))
                            <p class="help is-danger">{{ $errors->first('birthday') }}</p>
                        @endif
                    </div>

                    <!-- Campo de correo electrónico -->
                    <div class="field">
                        <label for="email" class="label">Correo Electrónico</label>
                        <div class="control">
                            <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="username">
                        </div>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <!-- Campo de contraseña -->
                    <div class="field">
                        <label for="password" class="label">Contraseña</label>
                        <div class="control">
                            <input id="password" type="password" class="input" name="password" required autocomplete="new-password">
                        </div>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <!-- Campo de confirmar contraseña -->
                    <div class="field">
                        <label for="password_confirmation" class="label">Confirmar Contraseña</label>
                        <div class="control">
                            <input id="password_confirmation" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>

                    <!-- Enlace para iniciar sesión y botón de registro -->
                    <div class="field is-grouped is-justify-content-space-between">
                        <div class="control">
                            <a href="{{ route('login') }}" class="is-link">¿Ya estás registrado?</a>
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>
@endsection