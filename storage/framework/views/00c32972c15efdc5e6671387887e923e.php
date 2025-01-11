<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <?php echo $__env->make('home.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

    <main class="section">
        <div class="container">
            <header class="has-text-centered">
                <h2 class="title is-3"><?php echo e(__('Perfil')); ?></h2>
            </header>

            <!-- Sección de actualización de información de perfil -->
            <section class="box mt-5">
                <h3 class="title is-4"><?php echo e(__('Actualizar Información del Perfil')); ?></h3>
                <?php echo $__env->make('profile.partials.update-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>

            <!-- Sección de actualización de contraseña -->
            <section class="box mt-5">
                <h3 class="title is-4"><?php echo e(__('Actualizar Contraseña')); ?></h3>
                <?php echo $__env->make('profile.partials.update-password-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>

            <!-- Sección de eliminación de usuario -->
            <section class="box mt-5">
                <h3 class="title is-4"><?php echo e(__('Eliminar Cuenta')); ?></h3>
                <?php echo $__env->make('profile.partials.delete-user-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
        </div>
    </main>

   
</body>
</html>
<?php /**PATH /var/www/html/resources/views/profile/edit.blade.php ENDPATH**/ ?>