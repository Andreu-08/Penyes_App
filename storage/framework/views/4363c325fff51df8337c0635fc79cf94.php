 <!-- Extiende de un layout base -->

<?php $__env->startSection('content'); ?>
<div>
    <h1>Bienvenido a Les Penyes</h1>
    
    <div>
        <!-- Enlace a "Peñas" -->
        <div>
            <a href="<?php echo e(route('front.crews.index')); ?>">
                <h2>Peñas</h2>
                <p>Ver y gestionar tus peñas</p>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/frontHome.blade.php ENDPATH**/ ?>