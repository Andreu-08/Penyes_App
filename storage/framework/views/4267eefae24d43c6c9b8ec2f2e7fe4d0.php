<section>
    <header>
        <h2>Actualizar Contraseña</h2>
    </header>

    <form method="post" action="<?php echo e(route('password.update')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <section>
            <label for="update_password_current_password">Contraseña Actual</label>
            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password">
        </section>

        <section>
            <label for="update_password_password">Nueva Contraseña</label>
            <input id="update_password_password" name="password" type="password" autocomplete="new-password">
        </section>

        <section>
            <label for="update_password_password_confirmation">Confirmar Contraseña</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password">
        </section>

        <section>
            <button type="submit"><?php echo e(__('Save')); ?></button>

            <?php if(session('status') === 'password-updated'): ?>
                <p><?php echo e(__('Saved.')); ?></p>
            <?php endif; ?>
        </section>
    </form>
</section>

<?php /**PATH /var/www/html/resources/views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>