<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="title"><?php echo e($crew->name); ?></h1>
    <p>Capacidad: <?php echo e($crew->capacity); ?></p>
    <p>Color: <?php echo e($crew->color); ?></p>
    <p>Eslogan: <?php echo e($crew->slogan); ?></p>
    <p>Fundación: <?php echo e($crew->foundation); ?></p>

    <?php if(auth()->guard()->check()): ?>
        <?php if(session('success')): ?>
            <div class="notification is-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="notification is-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('front.crews.requestMembership', $crew)); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="button is-primary">Solicitar Membresía</button>
        </form>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/crews/show.blade.php ENDPATH**/ ?>