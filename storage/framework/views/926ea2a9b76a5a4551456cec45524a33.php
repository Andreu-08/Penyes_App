<!DOCTYPE html>
<html lang="es">
    <?php echo $__env->make('back.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body style="margin: 0; display: flex; flex-direction: column; min-height: 100vh;">

    <!-- Contenedor Principal -->
    <div style="display: flex; flex: 1;">

        <!-- Aside (Menú lateral) -->
        <?php echo $__env->make('back.partials.backAside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Contenido Principal -->
        <div style="flex: 1; display: flex; flex-direction: column;">

            <!-- Header -->
            <?php echo $__env->make('back.partials.backHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Main Content -->
            <div style="flex: 1; padding: 2rem;">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <!-- Footer -->
            <?php echo $__env->make('back.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>

</body>
</html>
<?php /**PATH /var/www/html/resources/views/back/layouts/back.blade.php ENDPATH**/ ?>