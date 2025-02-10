<?php $__env->startSection('content'); ?>
<div class="container is-fluid">
    <!-- Encabezado con título y formulario de búsqueda -->
    <div class="columns is-vcentered mb-5">
        <!-- Columna del título -->
        <div class="column">
            <h1 class="title">Listado de Peñas</h1>
        </div>

        <!-- Columna para el formulario de búsqueda -->
        <div class="column is-two-fifths">
            <form method="GET" action="<?php echo e(route('front.crews.index')); ?>">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <input class="input" type="text" name="search" placeholder="Buscar por nombre" value="<?php echo e(request('search')); ?>">
                    </div>
                    <div class="control is-expanded">
                        <input class="input" type="number" name="capacity" placeholder="Capacidad máxima" value="<?php echo e(request('capacity')); ?>">
                    </div>
                    <div class="control">
                        <button class="button is-info" type="submit">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabla de peñas -->
    <div class="box">
        <table class="table is-fullwidth is-hoverable is-striped">
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
                        <td>
                            <a href="<?php echo e(route('front.crews.show', $crew)); ?>" class="button is-small is-info">Ver</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
</div>

<?php echo $__env->make('front.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/crews/index.blade.php ENDPATH**/ ?>