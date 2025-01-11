<!-- Header -->
<header class="navbar has-background-light" style="padding: 1rem;">
    <div class="container is-fluid">
        <div class="navbar-brand" style="align-items: center;">
            <!-- Breadcrumbs para la ruta actual -->
            <nav class="breadcrumb is-small has-succeeds-separator mb-0" aria-label="breadcrumbs" style="color: #333;">
                <ul>
                    <li>
                        <a href="<?php echo e(route('back.backHome')); ?>" class="has-text-dark">
                            <span>Back Office</span>
                        </a>
                    </li>
                    <?php if(View::hasSection('breadcrumbs')): ?>
                        <?php echo $__env->yieldContent('breadcrumbs'); ?>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>

        <!-- Menú desplegable del usuario -->
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link has-text-dark">
                    <?php echo e(Auth::user()->name); ?> <!-- Mostrar el nombre del usuario -->
                </a>
                <div class="navbar-dropdown is-right">
                    <a href="<?php echo e(route('profile.edit')); ?>" class="navbar-item">
                        <span>Profile</span>
                    </a>
                    <hr class="navbar-divider">
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="button is-light is-fullwidth">
                            <span>Log Out</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<?php /**PATH /var/www/html/resources/views/back/partials/backHeader.blade.php ENDPATH**/ ?>