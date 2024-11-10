<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
</head>
<body>
    <header>
        <h2>{{ __('Profile') }}</h2>
    </header>

    <main>
        <section>
            <!-- Incluir el formulario de actualización de información de perfil -->
            @include('partials.update-profile-information-form')
        </section>

        <section>
            <!-- Incluir el formulario de actualización de contraseña -->
            @include('partials.update-password-form')
        </section>

        <section>
            <!-- Incluir el formulario de eliminación de usuario -->
            @include('partials.delete-user-form')
        </section>
    </main>
</body>
</html>
