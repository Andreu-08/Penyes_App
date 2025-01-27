{{-- resources/views/auth/reset-password.blade.php --}}
<body>
    <main class="section">
        <div class="container">
            <section class="box">
                <h1 class="title has-text-centered">Restablecer Contraseña</h1>

                <!-- Formulario de restablecimiento de contraseña -->
                <form method="POST" action="{{ route('password.store') }}" class="mt-5">
                    @csrf

                    <!-- Token de Restablecimiento de Contraseña -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Campo de correo electrónico -->
                    <div class="field">
                        <label for="email" class="label">Correo Electrónico</label>
                        <div class="control">
                            <input id="email" type="email" class="input" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                        </div>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <!-- Campo de nueva contraseña -->
                    <div class="field">
                        <label for="password" class="label">Nueva Contraseña</label>
                        <div class="control">
                            <input id="password" type="password" class="input" name="password" required autocomplete="new-password">
                        </div>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <!-- Campo de confirmación de nueva contraseña -->
                    <div class="field">
                        <label for="password_confirmation" class="label">Confirmar Nueva Contraseña</label>
                        <div class="control">
                            <input id="password_confirmation" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>

                    <!-- Botón de restablecimiento -->
                    <div class="field is-grouped is-justify-content-center">
                        <div class="control">
                            <button type="submit" class="button is-primary">Restablecer Contraseña</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>
