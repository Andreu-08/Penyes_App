<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('back.partials.head') <!-- Incluye head.blade.php con Bulma y meta tags -->

<body>
    @include('back.partials.backHeader') <!-- Incluye el header con los enlaces de autenticación -->

    <section class="section">
        <div class="container">
            @yield('content') <!-- Aquí se inserta el contenido específico de cada vista -->
        </div>
    </section>
</body>
</html>