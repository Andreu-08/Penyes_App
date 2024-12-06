 
    <?php $__env->startSection('breadcrumbs'); ?>
        <li>
            <a href="<?php echo e(route('back.crews.index')); ?>" class="has-text-grey">Peñas</a>
        </li>
        <li>
            <a href="<?php echo e(route('back.crews.edit', $crew->id)); ?>" class="has-text-grey">
                Editar: <?php echo e($crew->name); ?>

            </a>
        </li>
    <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<body>
    <main class="section">
        <div class="container">
            <section class="box">
                <h1 class="title has-text-centered">Editar Peña</h1>

                <!-- Formulario de edición -->
                <form method="POST" action="<?php echo e(route('back.crews.update', $crew->id)); ?>" class="mt-5">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?> <!-- Indica que estamos realizando una actualización -->

                    <div class="columns is-multiline">
                        <!-- Campo de nombre -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="name" class="label">Nombre</label>
                                <div class="control">
                                    <input id="name" type="text" class="input" name="name" value="<?php echo e(old('name', $crew->name)); ?>" required autocomplete="name">
                                </div>
                                <?php if($errors->has('name')): ?>
                                    <p class="help is-danger"><?php echo e($errors->first('name')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Campo de color -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="color" class="label">Color</label>
                                <div class="control">
                                    <input id="color" type="text" class="input" name="color" value="<?php echo e(old('color', $crew->color)); ?>" required autocomplete="color">
                                </div>
                                <?php if($errors->has('color')): ?>
                                    <p class="help is-danger"><?php echo e($errors->first('color')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Campo de slogan -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="slogan" class="label">Slogan</label>
                                <div class="control">
                                    <input id="slogan" type="text" class="input" name="slogan" value="<?php echo e(old('slogan', $crew->slogan)); ?>" required autocomplete="slogan">
                                </div>
                                <?php if($errors->has('slogan')): ?>
                                    <p class="help is-danger"><?php echo e($errors->first('slogan')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Campo de capacidad -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="capacity" class="label">Capacidad</label>
                                <div class="control">
                                    <input id="capacity" type="number" class="input" name="capacity" value="<?php echo e(old('capacity', $crew->capacity)); ?>" required autocomplete="capacity">
                                </div>
                                <?php if($errors->has('capacity')): ?>
                                    <p class="help is-danger"><?php echo e($errors->first('capacity')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Campo de fecha de fundación -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="foundation" class="label">Fecha de Fundación</label>
                                <div class="control">
                                    <input id="foundation" type="date" class="input" name="foundation" value="<?php echo e(old('foundation', $crew->foundation)); ?>" required autocomplete="foundation">
                                </div>
                                <?php if($errors->has('foundation')): ?>
                                    <p class="help is-danger"><?php echo e($errors->first('foundation')); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Botones de acción -->
                    <div class="columns is-centered mt-4">
                        <div class="column is-narrow">
                            <a href="<?php echo e(route('back.crews.index')); ?>" class="button is-link is-light">Cancelar</a>
                        </div>
                        <div class="column is-narrow">
                            <button type="submit" class="button is-primary">Actualizar Peña</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/crews/edit.blade.php ENDPATH**/ ?>