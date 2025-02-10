<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('public/css/app.css')
    @vite('public/css/homePage.css')
    @vite('public/js/login.js')
    @vite('public/js/register.js')
    @viteReactRefresh
    {{-- @vite('public/js/homePage/app.jsx') --}}


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="min-h-screen bg-gray-50">

    @include('home.partials.header')
    @include('home.partials.hero')
    @include('home.partials.carrousel')
    @include('home.partials.activitats')
    <!-- About Section -->
    <section id="contacto" class="  bg-gray-200 container mx-auto px-4 py-12 md:py-24">
        <div class="grid gap-12 md:grid-cols-2">
            <!-- FAQ Section -->
            @include('home.partials.FAQ')

            <!-- Contact Form Section -->
            @include('home.partials.contactForm')
        </div>
    </section>

    <!-- Ubicaciones Section -->
    @include('home.partials.ubications')

    <!-- Footer -->
    @include('partials.footer')

    <section id="app">

    </section>

    <!--pop ups para login y registro-->
    @include('auth.login')
    @include('auth.register')

</body>
</html>
