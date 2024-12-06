<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="title">Listado de Peñas</h1>
    <form method="GET" action="<?php echo e(route('front.crews.index')); ?>">
        <input type="text" name="search" placeholder="Buscar por nombre" value="<?php echo e(request('search')); ?>">
        <input type="number" name="capacity" placeholder="Capacidad máxima" value="<?php echo e(request('capacity')); ?>">
        <button type="submit">Buscar</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($crew->name); ?></td>
                    <td><?php echo e($crew->capacity); ?></td>
                    <td><a href="<?php echo e(route('front.crews.show', $crew)); ?>">Ver</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($crews->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/crews/index.blade.php ENDPATH**/ ?>