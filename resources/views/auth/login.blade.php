    @extends('layouts.home')
    
    @section('content')
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Iniciar Sesión</h1>

            <!-- Estado de la sesión (si existe un mensaje de estado) -->
            @if (session('status'))
                <div class="notification is-success has-text-centered">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Formulario de inicio de sesión -->
            <form method="POST" action="{{ route('login') }}" class="box mt-5">
                @csrf

                <!-- Campo de correo electrónico -->
                <div class="field">
                    <label for="email" class="label">Correo Electrónico</label>
                    <div class="control">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="input" required autofocus autocomplete="username">
                    </div>
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Campo de contraseña -->
                <div class="field">
                    <label for="password" class="label">Contraseña</label>
                    <div class="control">
                        <input id="password" type="password" name="password" class="input" required autocomplete="current-password">
                    </div>
                    @if ($errors->has('password'))
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Opción de recordar sesión -->
                <div class="field">
                    <label class="checkbox">
                        <input type="checkbox" name="remember">
                        Recordarme
                    </label>
                </div>

                <!-- Botón de inicio de sesión y enlace de recuperación -->
                <div class="field is-grouped is-justify-content-space-between">
                    <div class="control">
                        @if (Route::has('password.request'))
                            <a class="is-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                        @endif
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">Iniciar Sesión</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
