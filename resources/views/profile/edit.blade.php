<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    @include('layouts.partials.head')
</head>
<body>

    <main class="section">
        <div class="container">
            <header class="has-text-centered">
                <h2 class="title is-3">{{ __('Perfil') }}</h2>
            </header>

            <!-- Sección de actualización de información de perfil -->
            <section class="box mt-5">
                <h3 class="title is-4">{{ __('Actualizar Información del Perfil') }}</h3>
                @include('partials.update-profile-information-form')
            </section>

            <!-- Sección de actualización de contraseña -->
            <section class="box mt-5">
                <h3 class="title is-4">{{ __('Actualizar Contraseña') }}</h3>
                @include('partials.update-password-form')
            </section>

            <!-- Sección de eliminación de usuario -->
            <section class="box mt-5">
                <h3 class="title is-4">{{ __('Eliminar Cuenta') }}</h3>
                @include('partials.delete-user-form')
            </section>
        </div>
    </main>

   
</body>
</html>
