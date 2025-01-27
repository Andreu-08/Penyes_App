
<body>
    <main class="section">
        <div class="container">
            <section class="box">
                <h1 class="title has-text-centered">Restablecer Contraseña</h1>

                <!-- Formulario de restablecimiento de contraseña -->
                <form method="POST" action="<?php echo e(route('password.store')); ?>" class="mt-5">
                    <?php echo csrf_field(); ?>

                    <!-- Token de Restablecimiento de Contraseña -->
                    <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">

                    <!-- Campo de correo electrónico -->
                    <div class="field">
                        <label for="email" class="label">Correo Electrónico</label>
                        <div class="control">
                            <input id="email" type="email" class="input" name="email" value="<?php echo e(old('email', $request->email)); ?>" required autofocus autocomplete="username">
                        </div>
                        <?php if($errors->has('email')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('email')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Campo de nueva contraseña -->
                    <div class="field">
                        <label for="password" class="label">Nueva Contraseña</label>
                        <div class="control">
                            <input id="password" type="password" class="input" name="password" required autocomplete="new-password">
                        </div>
                        <?php if($errors->has('password')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Campo de confirmación de nueva contraseña -->
                    <div class="field">
                        <label for="password_confirmation" class="label">Confirmar Nueva Contraseña</label>
                        <div class="control">
                            <input id="password_confirmation" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <?php if($errors->has('password_confirmation')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('password_confirmation')); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Botón de restablecimiento -->
                    <div class="field is-grouped is-justify-content-center">
                        <div class="control">
                            <button type="submit" class="button is-primary">Restablecer Contraseña</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/auth/reset-password.blade.php ENDPATH**/ ?>