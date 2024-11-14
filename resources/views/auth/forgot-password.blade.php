@include('home.partials.head')
<body>
    <main class="section">
        <div class="container">
            <!-- Estado de la sesión (si existe un mensaje de estado) -->
            @if (session('status'))
                <section class="notification is-success has-text-centered">
                    <p>{{ session('status') }}</p>
                </section>
            @endif

            <!-- Formulario para solicitar el enlace de recuperación de contraseña -->
            <section class="box mt-5">
                <h2 class="title has-text-centered">Recuperar Contraseña</h2>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Campo de correo electrónico -->
                    <div class="field">
                        <label for="email" class="label">Correo Electrónico</label>
                        <div class="control">
                            <input id="email" class="input" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>

                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <!-- Botón para enviar el enlace de recuperación -->
                    <div class="field is-grouped is-justify-content-center">
                        <div class="control">
                            <button type="submit" class="button is-primary">
                                Enviar Enlace de Recuperación de Contraseña
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>