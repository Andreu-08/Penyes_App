<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <?php echo app('Illuminate\Foundation\Vite')('public/css/app.css'); ?>
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

                <!-- Navbar Items -->
                <div class="flex items-center space-x-4">
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/log')); ?>" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">
                                Log
                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">
                                Login
                            </a>
                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">
                                    Register
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-12 md:py-24">
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
    </main>

    <!-- Footer -->
    <footer class="border-t bg-gray-100">
        <div class="container mx-auto px-4 py-8 text-center">
            <p class="text-sm text-gray-600">
                &copy; <?php echo e(date('Y')); ?> 
                <span class="font-semibold">Les Penyes en Festes</span>. 
                Todos los derechos reservados.
            </p>
            <p class="mt-2 text-sm text-gray-600">
                Diseñado por Andreu.
            </p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/home/contact.blade.php ENDPATH**/ ?>