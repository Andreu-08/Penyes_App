
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ...existing meta y configuración... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favico.ico')); ?>">
    <title>Penyes App</title>
    <link rel="icon" href="/path/to/favicon.ico">
    <?php echo app('Illuminate\Foundation\Vite')('public/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')->reactRefresh(); ?>
    <?php echo app('Illuminate\Foundation\Vite')('public/js/components/index.jsx'); ?>
    <!-- Opcional: incluir fuentes o iconos externos -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
</head>
<body class="min-h-screen bg-gray-50 font-roboto">
    <!-- Header -->
    <header class="border-b bg-white/90 backdrop-blur-md sticky top-0 z-50">
        <nav class="container mx-auto px-4 flex h-16 items-center justify-between">
            <!-- Logo a la izquierda -->
            <div class="flex items-center space-x-2 order-first">
                <a href="<?php echo e(route('front.frontHome')); ?>" aria-label="Inicio">
                    <img src="<?php echo e(asset('img/back/logoPenyes.png')); ?>" alt="Logo Les Penyes" class="h-16 w-auto object-contain">
                </a>
            </div>
            <!-- Iconos de enlaces a la derecha, con menor espaciamiento -->
            <div class="flex items-center space-x-2 order-last">
                <a href="<?php echo e(route('profile.edit')); ?>" class="transition-colors hover:text-indigo-600" aria-label="Mi Perfil">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </a>
                <form method="POST" action="<?php echo e(route('logout')); ?>" class="inline">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="transition-colors hover:text-indigo-600 p-2" aria-label="Cerrar Sesión">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[70vh] bg-cover bg-center" style="background-image: url('<?php echo e(asset('img/home/unnamed.webp')); ?>');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent backdrop-blur-sm"></div>
        <div class="relative container mx-auto px-4 py-40 text-white max-w-6xl flex flex-col items-center justify-center text-center">
            <h1 class="text-6xl md:text-7xl font-bold mb-4">
                <?php if(!Auth::user()->confirmedCrew()): ?>
                    Bienvenido, <?php echo e(Auth::user()->name); ?>!
                <?php else: ?>
                    Bienvenido a la peña <span class="text-4xl md:text-5xl font-extrabold text-yellow-300"><?php echo e(Auth::user()->confirmedCrew()->name); ?></span>!
                <?php endif; ?>
            </h1>
            <p class="mb-6 text-xl">
                <?php if(!Auth::user()->confirmedCrew()): ?>
                    Descubre nuestras peñas, explora detalles y apúntate fácilmente. ¡Vive la experiencia única!
                <?php else: ?>
                    Descubre el sorteo y mantente al día.
                <?php endif; ?>
            </p>
            <?php if(!Auth::user()->confirmedCrew()): ?>
                <a href="#peñas" class="inline-block bg-slate-200 text-slate-700 font-semibold px-6 py-3 rounded-md hover:bg-slate-300 transition">
                    Explorar Peñas
                </a>
            <?php else: ?>
                <a href="#draw" class="inline-block bg-slate-200 text-slate-700 font-semibold px-6 py-3 rounded-md hover:bg-slate-300 transition">
                    Ver Sorteo
                </a>
            <?php endif; ?>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <?php if(session('success')): ?>
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(!Auth::user()->confirmedCrew()): ?>
            <div id="peñas" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <?php $__currentLoopData = $crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $available = $crew->capacity - $crew->users->count(); ?>
                <div class="bg-white rounded-lg shadow hover:shadow-xl transition relative group">
                    <!-- Contenido de la tarjeta -->
                    <div class="p-2">
                        <h3 class="text-sm font-bold text-gray-800 text-center w-full truncate"><?php echo e($crew->name); ?></h3>
                        <p class="text-xs text-gray-600 text-center w-full mt-1"><?php echo e($crew->slogan); ?></p>
                        <p class="text-xs text-gray-500 text-center w-full mt-1">
                            <?php if($available > 0): ?>
                                Capacidad: <?php echo e($available); ?>

                            <?php else: ?>
                                peña llena
                            <?php endif; ?>
                        </p>
                    </div>
                    <!-- Overlay desplegable en hover -->
                    <div class="absolute inset-0 bg-white bg-opacity-95 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">
                        <?php if(auth()->guard()->check()): ?>
                            <?php if($available > 0): ?>
                            <form method="POST" action="<?php echo e(route('front.crews.requestMembership', $crew)); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                    Solicitar Membresía
                                </button>
                            </form>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <?php if(Auth::user()->confirmedCrew()): ?>
            <!-- Dibujo de la gráfica solo si el usuario tiene una peña asignada -->
            <div id="draw" class="mt-8">
                <!-- Aquí va el contenido de tu gráfica -->
            </div>
        <?php endif; ?>
    </main>

    <!-- Footer -->
    <footer class="border-t bg-gray-200 py-6">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm text-gray-600">
                &copy; <?php echo e(date('Y')); ?> <span class="font-semibold">Les Penyes en Festes</span>. Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <!-- Script para el dropdown de las tarjetas -->
    <script>
        document.querySelectorAll('.toggle-card').forEach(button => {
            button.addEventListener('click', () => {
                const cardInfo = button.parentElement.nextElementSibling;
                cardInfo.classList.toggle('hidden');
                button.querySelector('svg').classList.toggle('rotate-180');
            });
        });
    </script>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/front/frontHome.blade.php ENDPATH**/ ?>