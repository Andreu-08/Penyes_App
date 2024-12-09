<?php $__env->startSection('content'); ?>
<div class="container is-fluid">
    <div class="box">
        <h1 class="title"><?php echo e($crew->name); ?></h1>
        <p><strong>Capacidad:</strong> <?php echo e($crew->capacity); ?></p>
        <p><strong>Color:</strong> <?php echo e($crew->color); ?></p>
        <p><strong>Eslogan:</strong> <?php echo e($crew->slogan); ?></p>
        <p><strong>Fundación:</strong> <?php echo e($crew->foundation); ?></p>

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
                <button type="submit" class="button is-info">Solicitar Membresía</button>
            </form>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/crews/show.blade.php ENDPATH**/ ?>