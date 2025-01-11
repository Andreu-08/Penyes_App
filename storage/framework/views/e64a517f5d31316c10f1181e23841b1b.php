<?php $__env->startSection('content'); ?>
<body>
    <main class="section">
        <div class="container">
            <section class="box">
                <h1 class="title has-text-centered">Registro</h1>

                <!-- Formulario de registro -->
                <form method="POST" action="<?php echo e(route('register')); ?>" class="mt-5">
                    <?php echo csrf_field(); ?>

                    <!-- Campo de nombre -->
                    <div class="field">
                        <label for="name" class="label">Nombre</label>
                        <div class="control">
                            <input id="name" type="text" class="input" name="name" value="<?php echo e(old('name')); ?>" required autofocus autocomplete="name">
                        </div>
                        <?php if($errors->has('name')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('name')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Campo de apellido -->
                    <div class="field">
                        <label for="surname" class="label">Apellido</label>
                        <div class="control">
                            <input id="surname" type="text" class="input" name="surname" value="<?php echo e(old('surname')); ?>" required autocomplete="surname">
                        </div>
                        <?php if($errors->has('surname')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('surname')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Campo de fecha de nacimiento -->
                    <div class="field">
                        <label for="birthday" class="label">Fecha de Nacimiento</label>
                        <div class="control">
                            <input id="birthday" type="date" class="input" name="birthday" value="<?php echo e(old('birthday')); ?>" required autocomplete="birthday">
                        </div>
                        <?php if($errors->has('birthday')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('birthday')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Campo de correo electrónico -->
                    <div class="field">
                        <label for="email" class="label">Correo Electrónico</label>
                        <div class="control">
                            <input id="email" type="email" class="input" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="username">
                        </div>
                        <?php if($errors->has('email')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('email')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Campo de contraseña -->
                    <div class="field">
                        <label for="password" class="label">Contraseña</label>
                        <div class="control">
                            <input id="password" type="password" class="input" name="password" required autocomplete="new-password">
                        </div>
                        <?php if($errors->has('password')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Campo de confirmar contraseña -->
                    <div class="field">
                        <label for="password_confirmation" class="label">Confirmar Contraseña</label>
                        <div class="control">
                            <input id="password_confirmation" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <?php if($errors->has('password_confirmation')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('password_confirmation')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Enlace para iniciar sesión y botón de registro -->
                    <div class="field is-grouped is-justify-content-space-between">
                        <div class="control">
                            <a href="<?php echo e(route('login')); ?>" class="is-link">¿Ya estás registrado?</a>
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/register.blade.php ENDPATH**/ ?>