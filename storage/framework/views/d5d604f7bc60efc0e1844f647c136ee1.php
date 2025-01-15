<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php echo app('Illuminate\Foundation\Vite')('public/css/app.css'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        
        /* Estilos personalizados para las fuentes*/
        body {
            font-family: 'Roboto', sans-serif;
        }

        h1, h2, h3, .hero-title, .font-bold {
            font-family: 'Poppins', sans-serif;
        }
        /* Estilos personalizados para la barra de desplazamiento */
        .scrollbar-hide::-webkit-scrollbar {
            height: 6px;
        }
        .scrollbar-hide::-webkit-scrollbar-thumb {
            background-color: #d1d5db;
            border-radius: 9999px;
        }
        .scrollbar-hide::-webkit-scrollbar-thumb:hover {
            background-color: #9ca3af;
        }

        /* Estilos para el efecto de máquina de escribir */
        .typewriter {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            border-right: 2px solid white;
            animation: typing 4s steps(40, end), blink 0.7s step-end infinite;
            font-size: 1.5rem;
            text-align: center;
            margin-top: 1rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        @keyframes typing {
            0%, 60% {
                width: 0;
            }
            80%, 100% {
                width: 100%;
            }
        }

        @keyframes blink {
            from, to { border-color: transparent; }
            50% { border-color: white; }
        }

        .hero-content {
            text-align: center;
        }

        .hero-title {
            margin-bottom: 1rem; /* Reduce la separación entre el título y el párrafo */
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="border-b bg-white/90 backdrop-blur-md sticky top-0 z-50">
        <nav class="container mx-auto px-4">
            <div class="flex h-16 items-center justify-between">
                <!-- Navbar Brand -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <img src="<?php echo e(asset('img/back/logoPenyes.png')); ?>" alt="Logo" class="h-16 w-auto">
                    </a>
                </div>

                <!-- Navbar Links -->
                <div class="flex items-center space-x-6">
                    <a href="#actividades" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                        Actividades
                    </a>
                    <a href="#contacto" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                        Contacto
                    </a>
                    <a href="#ubicacion" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                        Ubicación
                    </a>
                </div>

                <!-- Navbar Items -->
                <div class="flex items-center space-x-4">
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/log')); ?>" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                                Log
                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                                Login
                            </a>
                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                                    Register
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[70vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('<?php echo e(asset('img/home/unnamed.webp')); ?>');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative container mx-auto px-4 text-white hero-content">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-4 hero-title">
                Les Penyes En Festes
            </h1>
            <p id="typewriter" class="typewriter">
                JA ESTEM AÇÍ...
            </p>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const typewriter = document.getElementById('typewriter');
            const texts = ['JA ESTEM AÇÍ...', 'JA HEM ARRIBAT...'];
            let currentIndex = 0;

            const typingEffect = () => {
                const text = texts[currentIndex];
                let charIndex = 0;
                const interval = setInterval(() => {
                    if (charIndex < text.length) {
                        typewriter.textContent = text.substring(0, charIndex + 1);
                        charIndex++;
                    } else {
                        clearInterval(interval);
                        setTimeout(() => deletingEffect(text), 1000);
                    }
                }, 100);
            };

            const deletingEffect = (text) => {
                let charIndex = text.length;
                const interval = setInterval(() => {
                    if (charIndex > 0) {
                        typewriter.textContent = text.substring(0, charIndex - 1);
                        charIndex--;
                    } else {
                        clearInterval(interval);
                        currentIndex = (currentIndex + 1) % texts.length;
                        setTimeout(typingEffect, 500);
                    }
                }, 100);
            };

            typingEffect();
        });
    </script>

    <!-- Carousel Section -->
    <section class="py-12  bg-gray-200 ">
        <div class="container mx-auto px-4">
            <div class="flex overflow-hidden gap-4 overflow-x-auto snap-x snap-mandatory scrollbar-hide">
                <div class="snap-center shrink-0 transition-transform transform hover:scale-105">
                    <img src="<?php echo e(asset('img/home/Drons-Penyes.jpg')); ?>" alt="Fiesta 1" class="rounded-lg w-[280px] h-[180px] object-cover shadow-md">
                </div>
                <div class="snap-center shrink-0 transition-transform transform hover:scale-105">
                    <img src="<?php echo e(asset('img/home/encierro.jpg')); ?>" alt="Fiesta 2" class="rounded-lg w-[280px] h-[180px] object-cover shadow-md">
                </div>
                <div class="snap-center shrink-0 transition-transform transform hover:scale-105">
                    <img src="<?php echo e(asset('img/home/fuente_1.jpg')); ?>" alt="Fiesta 3" class="rounded-lg w-[280px] h-[180px] object-cover shadow-md">
                </div>
                <div class="snap-center shrink-0 transition-transform transform hover:scale-105">
                    <img src="<?php echo e(asset('img/home/a5cfbe07-c448-4474-b887-fdc99dd81500_16-9-aspect-ratio_default_1162671.jpg')); ?>" alt="Fiesta 4" class="rounded-lg w-[280px] h-[180px] object-cover shadow-md">
                </div>
                <div class="snap-center shrink-0 transition-transform transform hover:scale-105">
                    <img src="<?php echo e(asset('img/home/xupinassopenyes2024.jpg')); ?>" alt="Fiesta 5" class="rounded-lg w-[280px] h-[180px] object-cover shadow-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Activitats i Horaris Section -->
<!-- Activitats i Horaris Section -->
<section id="actividades" class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold tracking-tight text-gray-800 mb-6">Activitats i Horaris</h2>
            <p class="text-gray-700 text-lg mb-10">Explora les nostres activitats i troba el millor moment per a gaudir de les festes</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="img/home/Taurinas.jpg" alt="Mañanas" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Events Taurins</h3>
                    <p class="text-gray-600 text-lg">Troba tots els esdeveniments i horaris de la nostra plaça</p>
                    <a href="#" class="mt-4 inline-block px-6 py-3 bg-slate-500 text-slate-100 font-semibold rounded-full shadow-md hover:bg-slate-900  hover:shadow-lg focus:ring-2 focus:ring-blue-300">Més informació</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="img/home/Carpas.webp" alt="Tardes" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Events Musicals</h3>
                    <p class="text-gray-600 text-lg">Troba tots els esdeveniments i horaris dels nostres escenaris</p>
                    <a href="#" class="mt-4 inline-block px-6 py-3 bg-slate-500 text-slate-100 font-semibold rounded-full shadow-md hover:bg-slate-900  hover:shadow-lg focus:ring-2 focus:ring-blue-300">Més informació</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section id="contacto" class="  bg-gray-200 container mx-auto px-4 py-12 md:py-24">
        <div class="grid gap-12 md:grid-cols-2">
            <!-- FAQ Section -->
            <section class="space-y-6">
                <h1 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">Preguntes freqüents</h1>
                <div class="space-y-4">
                    <div class="rounded-lg border bg-white shadow-sm">
                        <div class="p-6">
                            <h3 class="font-semibold">¿Cuál es el costo de la membresía?</h3>
                            <p class="mt-2 text-gray-600">La membresía tiene un costo anual de $50.</p>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-white shadow-sm">
                        <div class="p-6">
                            <h3 class="font-semibold">¿Dónde puedo ver las actividades de las peñas?</h3>
                            <p class="mt-2 text-gray-600">En la sección de actividades de la página principal.</p>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-white shadow-sm">
                        <div class="p-6">
                            <h3 class="font-semibold">¿Cómo puedo unirme a una peña?</h3>
                            <p class="mt-2 text-gray-600">Debes registrarte y enviar una solicitud desde tu perfil.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Form Section -->
            <section class="space-y-6">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">Contacta amb nosaltres</h2>
                <form action="<?php echo e(route('contact.send')); ?>" method="POST" class="space-y-4">
                    <?php echo csrf_field(); ?>
                    <div class="space-y-2">
                        <label for="name" class="text-sm font-medium">Nombre</label>
                        <input type="text" id="name" name="name" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-slate-500 focus:border-slate-500">
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-slate-500 focus:border-slate-500">
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-sm font-medium">Mensaje</label>
                        <textarea id="message" name="message" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-slate-500 focus:border-slate-500""></textarea>
                    </div>

                    <button type="submit" class="w-full rounded-md bg-slate-900 py-2 px-4 text-white font-medium hover:bg-slate-700 focus:ring-2 focus:ring-slate-500 focus:ring-offset-2">
                        Enviar Mensaje
                    </button>
                </form>
            </section>
        </div>
    </section>

    <!-- Ubicaciones Section -->
    <section id="ubicacion" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <div class="flex items-center justify-center gap-2">
                    <h2 class="text-3xl font-bold tracking-tight mb-4">Ubicaciones principales</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 256 256">
                        <path fill="currentColor" d="M200 224h-49.46A267 267 0 0 0 174 200.25c27.45-31.57 42-64.85 42-96.25a88 88 0 0 0-176 0c0 31.4 14.51 64.68 42 96.25A267 267 0 0 0 105.46 224H56a8 8 0 0 0 0 16h144a8 8 0 0 0 0-16M56 104a72 72 0 0 1 144 0c0 57.23-55.47 105-72 118c-16.53-13-72-60.77-72-118m112 0a40 40 0 1 0-40 40a40 40 0 0 0 40-40m-64 0a24 24 0 1 1 24 24a24 24 0 0 1-24-24"/>
                    </svg>
                </div>
                
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Primera ubicación -->
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <p class="text-center p-4 text-gray-700">Plaça de bous y escenari La Caixa</p>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10013.642423070036!2d-0.24612779816059455!3d39.82249814992725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd600db98fde54e5%3A0xa06d38fe334b402!2sLes%20Penyes%20en%20Festes!5e0!3m2!1ses!2ses!4v1736968111448!5m2!1ses!2ses" 
                        width="100%" 
                        height="250" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
    
                <!-- Segunda ubicación -->
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <p class="text-center p-4 text-gray-700">Carpes y Recinte de concerts</p>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3064.510954133171!2d-0.2311176!3d39.8179604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd600df894dd1cd7%3A0xede27b451aade8b9!2sZona%20de%20fiesta%20-%20Les%20Penyes%20en%20Festes!5e0!3m2!1ses!2ses!4v1736967809877!5m2!1ses!2ses" 
                        width="100%" 
                        height="250" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Footer -->
    <footer class="border-t bg-gray-200 py-8">
        <div class="container mx-auto text-center">
            <p class="text-gray-600 text-sm">&copy; <?php echo e(date('Y')); ?> <span class="font-bold">Les Peñes en Festes</span>. Todos los derechos reservados.</p>
            <p class="mt-2 text-gray-600 text-sm">Diseñado por Andreu.</p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/home/home.blade.php ENDPATH**/ ?>