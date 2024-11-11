{{-- resources/views/auth/verify-email.blade.php --}}
@include('layouts.partials.head')
<body>
    <main class="section">
        <div class="container">
            <!-- Mensaje de verificación -->
            <section class="box">
                <p class="has-text-centered is-size-5">
                    ¡Gracias por registrarte! Antes de comenzar, ¿podrías verificar tu dirección de correo haciendo clic en el enlace que te enviamos? Si no recibiste el correo, con gusto te enviaremos otro.
                </p>
            </section>

            <!-- Mensaje de enlace de verificación reenviado -->
            @if (session('status') == 'verification-link-sent')
                <section class="notification is-success mt-4">
                    <p>Un nuevo enlace de verificación ha sido enviado a la dirección de correo que proporcionaste durante el registro.</p>
                </section>
            @endif

            <!-- Formularios de Reenvío de Verificación y Cierre de Sesión -->
            <section class="box mt-5">
                <div class="field is-grouped is-justify-content-center">
                    <!-- Botón para reenviar el enlace de verificación -->
                    <form method="POST" action="{{ route('verification.send') }}" class="mr-3">
                        @csrf
                        <button type="submit" class="button is-link">Reenviar Correo de Verificación</button>
                    </form>

                    <!-- Botón para cerrar sesión -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="button is-danger">Cerrar Sesión</button>
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
