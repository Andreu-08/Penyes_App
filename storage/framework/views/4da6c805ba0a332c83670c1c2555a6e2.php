<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Peña - Les Penyes</title>
    <link rel="icon" href="/path/to/favicon.ico">
    <?php echo app('Illuminate\Foundation\Vite')('public/css/app.css'); ?>
</head>
<body class="min-h-screen bg-background">
    <!-- Header -->
    <header class="border-b bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60 sticky top-0 z-50">
        <nav class="container mx-auto px-4">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a href="<?php echo e(route('front.frontHome')); ?>" class="flex items-center space-x-2">
                        <img src="<?php echo e(asset('img/back/logoPenyes.png')); ?>" alt="Logo" class="h-16 w-auto">
                    </a>
                </div>
                <div class="text-lg font-semibold">Detalles de la Peña</div>
                <div class="flex items-center space-x-4">
                    <a href="<?php echo e(route('profile.edit')); ?>" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>" class="inline">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- Información de la Peña -->
            <section class="rounded-lg border bg-card text-card-foreground shadow-sm">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h1 class="text-2xl font-bold"><?php echo e($crew->name); ?></h1>
                        <?php if(auth()->guard()->check()): ?>
                        <form method="POST" action="<?php echo e(route('front.crews.requestMembership', $crew)); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                Solicitar Membresía
                            </button>
                        </form>
                        <?php endif; ?>
                    </div>
                    <p class="text-muted-foreground mb-4"><strong>Color:</strong> <?php echo e($crew->color); ?></p>
                    <p class="text-muted-foreground mb-4"><strong>Eslogan:</strong> <?php echo e($crew->slogan); ?></p>
                    <div class="grid gap-4 md:grid-cols-3">
                        <div>
                            <div class="text-sm font-medium text-muted-foreground">Capacidad</div>
                            <div class="mt-1 font-medium"><?php echo e($crew->capacity); ?></div>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-muted-foreground">Fundación</div>
                            <div class="mt-1 font-medium"><?php echo e($crew->foundation); ?></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mensajes de éxito/error -->
            <?php if(auth()->guard()->check()): ?>
            <?php if(session('success')): ?>
                <div class="rounded-lg border bg-green-100 text-green-800 p-4"><?php echo e(session('success')); ?></div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="rounded-lg border bg-red-100 text-red-800 p-4"><?php echo e(session('error')); ?></div>
            <?php endif; ?>
            <?php endif; ?>

        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t bg-muted/40 mt-auto">
        <div class="container mx-auto px-4 py-8 text-center">
            <p class="text-sm text-muted-foreground">
                &copy; <?php echo e(date('Y')); ?> <span class="font-semibold">Les Penyes en Festes</span>. Todos los derechos reservados.
            </p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/front/crews/show.blade.php ENDPATH**/ ?>