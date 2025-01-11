 <!-- Extiende de un layout base -->

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="title">Bienvenido a Les Penyes</h1>
    

    <div class="columns">
        <!-- Enlace a "Peñas" -->
        <div class="column">
            <a href="<?php echo e(route('front.crews.index')); ?>" class="box has-text-centered">
                <h2 class="title is-4">Peñas</h2>
                <p>Ver y gestionar tus peñas</p>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/frontHome.blade.php ENDPATH**/ ?>