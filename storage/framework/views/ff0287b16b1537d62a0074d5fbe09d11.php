    
    
    <?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Iniciar Sesión</h1>

            <!-- Estado de la sesión (si existe un mensaje de estado) -->
            <?php if(session('status')): ?>
                <div class="notification is-success has-text-centered">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <!-- Formulario de inicio de sesión -->
            <form method="POST" action="<?php echo e(route('login')); ?>" class="box mt-5">
                <?php echo csrf_field(); ?>

                <!-- Campo de correo electrónico -->
                <div class="field">
                    <label for="email" class="label">Correo Electrónico</label>
                    <div class="control">
                        <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" class="input" required autofocus autocomplete="username">
                    </div>
                    <?php if($errors->has('email')): ?>
                        <p class="help is-danger"><?php echo e($errors->first('email')); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Campo de contraseña -->
                <div class="field">
                    <label for="password" class="label">Contraseña</label>
                    <div class="control">
                        <input id="password" type="password" name="password" class="input" required autocomplete="current-password">
                    </div>
                    <?php if($errors->has('password')): ?>
                        <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Opción de recordar sesión -->
                <div class="field">
                    <label class="checkbox">
                        <input type="checkbox" name="remember">
                        Recordarme
                    </label>
                </div>

                <!-- Botón de inicio de sesión y enlace de recuperación -->
                <div class="field is-grouped is-justify-content-space-between">
                    <div class="control">
                        <?php if(Route::has('password.request')): ?>
                            <a class="is-link" href="<?php echo e(route('password.request')); ?>">¿Olvidaste tu contraseña?</a>
                        <?php endif; ?>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">Iniciar Sesión</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/login.blade.php ENDPATH**/ ?>