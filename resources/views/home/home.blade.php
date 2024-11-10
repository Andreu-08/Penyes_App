{{-- vista para configurar la home page que estiende de los layouts y partials principales --}}
@extends('layouts.app')

@section('content')
    <!-- Header -->
    @include('partials.header')
    
    <!-- Slogan Section -->
    <section class="section has-background-light">
        <div class="container has-text-centered">
            <h1 class="title-dark">Slogan</h1>
            <div class="background-image" style="background-image: url('/path/to/background.jpg'); height: 300px;">
                <!-- Aquí puedes añadir la imagen de fondo de la sección -->
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="section">
        <div class="container">
            <div class="carousel">
                <!-- Placeholder de imágenes del carousel -->
                <div class="carousel-item"><img src="/path/to/image1.jpg" alt="Image 1"></div>
                <div class="carousel-item"><img src="/path/to/image2.jpg" alt="Image 2"></div>
                <div class="carousel-item"><img src="/path/to/image3.jpg" alt="Image 3"></div>
            </div>
        </div>
    </section>

    <!-- Activitats i Horaris Section -->
    <section class="section">
        <div class="container">
            <div class="box">
                <h2 class="title">Activitats i Horaris</h2>
                <!-- Añadir actividades y horarios aquí -->
                <p>Contenido de actividades y horarios...</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section">
        <div class="container">
            <div class="box">
                <h2 class="title">About</h2>
                <p>Descripción de la plataforma y las peñas...</p>
                <a href="{{ url('/contact') }}" class="button is-link">Contáctanos</a> <!-- Enlace a la página de contacto -->
            </div>
        </div>
    </section>

    <!-- Ubicaciones Section -->
    <section class="section">
        <div class="container">
            <div class="box">
                <h2 class="title">Ubicaciones</h2>
                <!-- Añadir mapa o información de ubicaciones aquí -->
                <p>Mapa o información sobre las ubicaciones...</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer has-background-dark has-text-light">
        <div class="content has-text-centered">
            <p>&copy; 2024 Penyes App. Todos los derechos reservados.</p>
        </div>
    </footer>
@endsection
