<section>
    <header>
        <h2><?php echo e(__('Profile Information')); ?></h2>
    </header>

    <!-- Formulario para enviar verificación de email -->
    <form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
        <?php echo csrf_field(); ?>
    </form>

    <!-- Formulario para actualizar el perfil -->
    <form method="post" action="<?php echo e(route('profile.update')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>

        <section>
            <label for="name"><?php echo e(__('Name')); ?></label>
            <input id="name" name="name" type="text" value="<?php echo e(old('name', $user->name)); ?>" required autofocus>
            <?php if($errors->has('name')): ?>
                <p><?php echo e($errors->first('name')); ?></p>
            <?php endif; ?>
        </section>

        <section>
            <label for="surname"><?php echo e(__('Surname')); ?></label>
            <input id="surname" name="surname" type="text" value="<?php echo e(old('surname', $user->surname)); ?>" required>
            <?php if($errors->has('surname')): ?>
                <p><?php echo e($errors->first('surname')); ?></p>
            <?php endif; ?>
        </section>

        <section>
            <label for="email"><?php echo e(__('Email')); ?></label>
            <input id="email" name="email" type="email" value="<?php echo e(old('email', $user->email)); ?>" required>
            <?php if($errors->has('email')): ?>
                <p><?php echo e($errors->first('email')); ?></p>
            <?php endif; ?>

            <?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
                <div>
                    <p><?php echo e(__('Your email address is unverified.')); ?></p>
                    <button form="send-verification"><?php echo e(__('Click here to re-send the verification email.')); ?></button>
                    <?php if(session('status') === 'verification-link-sent'): ?>
                        <p><?php echo e(__('A new verification link has been sent to your email address.')); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </section>

        <section>
            <button type="submit"><?php echo e(__('Save')); ?></button>

            <?php if(session('status') === 'profile-updated'): ?>
                <p><?php echo e(__('Saved.')); ?></p>
            <?php endif; ?>
        </section>
    </form>
</section>

<?php /**PATH /var/www/html/resources/views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>