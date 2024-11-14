@include('home.partials.head')
<body>
    <main class="section">
        <div class="container">
            <!-- Sección de mensaje de confirmación -->
            <section class="box">
                <header class="content has-text-centered">
                    <p class="is-size-5 has-text-weight-semibold">
                        Esta es una área segura de la aplicación. Por favor, confirma tu contraseña antes de continuar.
                    </p>
                </header>
            </section>

            <!-- Sección del formulario de confirmación de contraseña -->
            <section class="box mt-5">
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Campo de contraseña -->
                    <div class="field">
                        <label for="password" class="label">Contraseña</label>
                        <div class="control">
                            <input id="password" class="input" type="password" name="password" required autocomplete="current-password">
                        </div>
                        
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <!-- Botón de confirmación -->
                    <div class="field is-grouped is-justify-content-center">
                        <div class="control">
                            <button type="submit" class="button is-primary">
                                Confirmar
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>

