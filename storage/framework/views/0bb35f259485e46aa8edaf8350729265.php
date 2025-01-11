<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo $__env->make('home.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Incluye head.blade.php con Bulma y meta tags -->

<body>
    <?php echo $__env->make('home.partials.homeHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Incluye el header con los enlaces de autenticación -->

    <section class="section">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?> <!-- Aquí se inserta el contenido específico de cada vista -->
        </div>
    </section>
    <?php echo $__env->make('home.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Incluye el footer con los derechos de autor y créditos -->
</body>
</html>

<?php /**PATH /var/www/html/resources/views/home/layouts/home.blade.php ENDPATH**/ ?>