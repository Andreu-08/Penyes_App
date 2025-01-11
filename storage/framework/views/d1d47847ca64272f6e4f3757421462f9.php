<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('breadcrumbs'); ?>
        <li>
            <a href="<?php echo e(route('back.users.index')); ?>" class="has-text-grey">Usuarios</a>
        </li>
        <li>
            <a href="<?php echo e(route('back.users.create')); ?>" class="has-text-grey">Crear Usuario</a>
        </li>
    <?php $__env->stopSection(); ?>


<body>
    <main class="section">
        <div class="container">
            <!-- Sección del formulario de creación de usuario -->
            <section class="box">
                <header>
                    <h1 class="title has-text-centered">Crear Usuario</h1>
                </header>

                <!-- Formulario de registro de usuario -->
                <form method="POST" action="<?php echo e(route('back.users.store')); ?>" class="mt-5">
                    <?php echo csrf_field(); ?>

                    <article class="columns is-multiline">
                        <!-- Campo de nombre -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="name" class="label">Nombre</label>
                                <div class="control">
                                    <input id="name" type="text" class="input" name="name" value="<?php echo e(old('name')); ?>" required autofocus autocomplete="name">
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

                        <!-- Campo de apellido -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="surname" class="label">Apellido</label>
                                <div class="control">
                                    <input id="surname" type="text" class="input" name="surname" value="<?php echo e(old('surname')); ?>" required autocomplete="surname">
                                </div>
                                <?php $__errorArgs = ['surname'];
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

                        <!-- Campo de fecha de nacimiento -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="birthday" class="label">Fecha de Nacimiento</label>
                                <div class="control">
                                    <input id="birthday" type="date" class="input" name="birthday" value="<?php echo e(old('birthday')); ?>" required autocomplete="birthday">
                                </div>
                                <?php $__errorArgs = ['birthday'];
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

                        <!-- Campo de correo electrónico -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="email" class="label">Correo Electrónico</label>
                                <div class="control">
                                    <input id="email" type="email" class="input" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="username">
                                </div>
                                <?php $__errorArgs = ['email'];
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

                        <!-- Campo de contraseña -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="password" class="label">Contraseña</label>
                                <div class="control">
                                    <input id="password" type="password" class="input" name="password" required autocomplete="new-password">
                                </div>
                                <?php $__errorArgs = ['password'];
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

                        <!-- Campo de confirmación de contraseña -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="password_confirmation" class="label">Confirmar Contraseña</label>
                                <div class="control">
                                    <input id="password_confirmation" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <?php $__errorArgs = ['password_confirmation'];
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
                            <button type="submit" class="button is-primary is-large">Crear Usuario</button>
                        </div>
                    </article>
                </form>
            </section>
        </div>
    </main>

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

<?php echo $__env->make('back.layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/users/create.blade.php ENDPATH**/ ?>