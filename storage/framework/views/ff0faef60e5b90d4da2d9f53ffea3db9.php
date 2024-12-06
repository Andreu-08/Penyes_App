<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('breadcrumbs'); ?>
        <li>
            <a href="<?php echo e(route('back.crews.index')); ?>" class="has-text-grey">Peñas</a>
        </li>
        <li>
            <a href="<?php echo e(route('back.crews.create')); ?>" class="has-text-grey">Crear Peña</a>
        </li>
    <?php $__env->stopSection(); ?>


<body>
    <main class="section">
        <div class="container">
            <!-- Sección del formulario de creación de crew -->
            <section class="box">
                <header>
                    <h1 class="title has-text-centered">Crear Crew</h1>
                </header>

                <!-- Formulario de registro de crew -->
                <form method="POST" action="<?php echo e(route('back.crews.store')); ?>" class="mt-5">
                    <?php echo csrf_field(); ?>

                    <article class="columns is-multiline">
                        <!-- Campo de nombre -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="name" class="label">Nombre</label>
                                <div class="control">
                                    <input id="name" type="text" class="input" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                </div>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="help is-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Campo de color -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="color" class="label">Color</label>
                                <div class="control">
                                    <input id="color" type="text" class="input" name="color" value="<?php echo e(old('color')); ?>" required>
                                </div>
                                <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="help is-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Campo de slogan -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="slogan" class="label">Slogan</label>
                                <div class="control">
                                    <input id="slogan" type="text" class="input" name="slogan" value="<?php echo e(old('slogan')); ?>" required>
                                </div>
                                <?php $__errorArgs = ['slogan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="help is-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Campo de capacidad -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="capacity" class="label">Capacidad</label>
                                <div class="control">
                                    <input id="capacity" type="number" class="input" name="capacity" value="<?php echo e(old('capacity')); ?>" required>
                                </div>
                                <?php $__errorArgs = ['capacity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="help is-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Campo de fecha de fundación -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="foundation" class="label">Fecha de Fundación</label>
                                <div class="control">
                                    <input id="foundation" type="date" class="input" name="foundation" value="<?php echo e(old('foundation')); ?>" required>
                                </div>
                                <?php $__errorArgs = ['foundation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="help is-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Botón de envío -->
                        <div class="column is-full has-text-centered">
                            <button type="submit" class="button is-primary is-large">Crear Crew</button>
                        </div>
                    </article>
                </form>
            </section>
        </div>
    </main>

    <!-- Notificaciones -->
    <?php if(session('success')): ?>
        <div class="notification is-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="notification is-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/crews/create.blade.php ENDPATH**/ ?>