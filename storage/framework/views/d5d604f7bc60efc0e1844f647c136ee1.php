<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php echo app('Illuminate\Foundation\Vite')('public/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('public/css/homePage.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('public/js/login.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('public/js/register.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')->reactRefresh(); ?>
    


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="min-h-screen bg-gray-50">

    <?php echo $__env->make('home.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home.partials.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home.partials.carrousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home.partials.activitats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- About Section -->
    <section id="contacto" class="  bg-gray-200 container mx-auto px-4 py-12 md:py-24">
        <div class="grid gap-12 md:grid-cols-2">
            <!-- FAQ Section -->
            <?php echo $__env->make('home.partials.FAQ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Contact Form Section -->
            <?php echo $__env->make('home.partials.contactForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>

    <!-- Ubicaciones Section -->
    <?php echo $__env->make('home.partials.ubications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Footer -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="app">

    </section>

    <!--pop ups para login y registro-->
    <?php echo $__env->make('auth.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('auth.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /var/www/html/resources/views/home/home.blade.php ENDPATH**/ ?>