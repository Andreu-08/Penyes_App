<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('home.partials.head') <!-- Incluye head.blade.php con Bulma y meta tags -->

<body>
    @include('home.partials.homeHeader') <!-- Incluye el header con los enlaces de autenticación -->

    <section class="section">
        <div class="container">
            @yield('content') <!-- Aquí se inserta el contenido específico de cada vista -->
        </div>
    </section>
    @include('home.partials.footer') <!-- Incluye el footer con los derechos de autor y créditos -->
</body>
</html>

