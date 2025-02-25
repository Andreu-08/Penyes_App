<?php $__env->startSection('breadcrumbs'); ?>
    <li>
        <a href="<?php echo e(route('back.crews.index')); ?>" class="has-text-grey">Peñas</a>
    </li>
    <li>
        <a href="<?php echo e(route('back.crews.show', $crew->id)); ?>" class="has-text-grey"><?php echo e($crew->name); ?></a>
    </li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<body>
    <main class="section">
        <div class="container">
            <!-- Título -->
            <h1 class="title has-text-centered">Detalles de la Peña</h1>

            <!-- Tarjeta con información de la peña -->
            <div class="card mt-5">
                <div class="card-content">
                    <!-- Imagen e Información lado a lado -->
                    <div class="columns is-vcentered">
                       

                        <!-- Columna de la información -->
                        <div class="column">
                            <h2 class="title is-4"><?php echo e($crew->name); ?></h2>
                            <p><strong>Color:</strong> <?php echo e($crew->color); ?></p>
                            <p><strong>Slogan:</strong> <?php echo e($crew->slogan); ?></p>
                            <p><strong>Capacidad:</strong> <?php echo e($crew->capacity); ?> miembros</p>
                            <p><strong>Fecha de Fundación:</strong> <?php echo e($crew->foundation); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Botón para volver atrás -->
                <div class="card-footer">
                    <div class="card-footer-item">
                        <a href="<?php echo e(route('back.crews.index')); ?>" class="button is-primary">Volver a la Lista</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/crews/show.blade.php ENDPATH**/ ?>