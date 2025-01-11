<main>
    <header>
        <h2><?php echo e(__('Delete Account')); ?></h2>
    </header>
    <!-- Botón para abrir el modal de confirmación -->
    <button onclick="document.getElementById('confirm-user-deletion').style.display='block'">
        <?php echo e(__('Delete Account')); ?>

    </button>

    <!-- Modal de confirmación de eliminación -->
    <section id="confirm-user-deletion" style="display: none;">
        <form method="post" action="<?php echo e(route('profile.destroy')); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>

            <h2><?php echo e(__('Are you sure you want to delete your account?')); ?></h2>
            <section>
                <label for="password"><?php echo e(__('Password')); ?></label>
                <input id="password" name="password" type="password" placeholder="<?php echo e(__('Password')); ?>">
                <?php if($errors->userDeletion->has('password')): ?>
                    <p><?php echo e($errors->userDeletion->first('password')); ?></p>
                <?php endif; ?>
            </section>

            <section>
                <!-- Botón para cancelar el modal -->
                <button type="button" onclick="document.getElementById('confirm-user-deletion').style.display='none'">
                    <?php echo e(__('Cancel')); ?>

                </button>

                <!-- Botón para confirmar la eliminación -->
                <button type="submit">
                    <?php echo e(__('Delete Account')); ?>

                </button>
            </section>
        </form>
    </section>
</main>
<?php /**PATH /var/www/html/resources/views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>