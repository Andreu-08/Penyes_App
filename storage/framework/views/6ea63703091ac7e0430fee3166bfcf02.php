<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo $__env->make('front.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <?php echo $__env->make('front.partials.frontHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="section">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </section>

    <?php echo $__env->make('front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/front/layouts/front.blade.php ENDPATH**/ ?>