<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php echo app('Illuminate\Foundation\Vite')('public/css/app.css'); ?>
    <style>
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
            text-align: left;
            margin-top: 1rem;
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
        <div class="relative container mx-auto px-4 text-white">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-4">
                Les Peñes En Festes
            </h1>
            <p id="typewriter" class="typewriter">
                JA ESTEM AISÍ...
            </p>
        </div>
    </section>

    <script>

        document.addEventListener('DOMContentLoaded', () => {
            const typewriter = document.getElementById('typewriter');
            const texts = ['JA ESTEM AISÍ...', 'JA HEM ARRIBAT...'];
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
    <section id="actividades" class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold tracking-tight mb-4">Activitats i Horaris</h2>
                <p class="text-gray-600 mb-8">Consulta el calendario de eventos y actividades programadas para no perderte nada.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-2">Mañanas</h3>
                        <p class="text-gray-500">10:00 - 14:00</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-2">Tardes</h3>
                        <p class="text-gray-500">17:00 - 21:00</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-2">Noches</h3>
                        <p class="text-gray-500">22:00 - 02:00</p>
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
                <h1 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">Preguntas Frecuentes (FAQ)</h1>
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
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">Formulario de Contacto</h2>
                <form action="<?php echo e(route('contact.send')); ?>" method="POST" class="space-y-4">
                    <?php echo csrf_field(); ?>
                    <div class="space-y-2">
                        <label for="name" class="text-sm font-medium">Nombre</label>
                        <input type="text" id="name" name="name" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-sm font-medium">Mensaje</label>
                        <textarea id="message" name="message" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>

                    <button type="submit" class="w-full rounded-md bg-slate-900 py-2 px-4 text-white font-medium hover:bg-slate-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Enviar Mensaje
                    </button>
                </form>
            </section>
        </div>
    </section>

    <!-- Ubicaciones Section -->
    <section id="ubicacion" class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold tracking-tight mb-4">Ubicaciones</h2>
                <p class="text-gray-600">Consulta las ubicaciones de las principales actividades y eventos en nuestro mapa interactivo.</p>
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