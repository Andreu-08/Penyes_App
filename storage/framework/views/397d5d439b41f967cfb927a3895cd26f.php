<!-- resources/views/front/partials/header.blade.php -->
<header>
    <nav class="navbar has-background-info" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a href="<?php echo e(route('front.frontHome')); ?>" class="navbar-item has-text-white">
                    <img src=<?php echo e(asset('img/back/logoPenyes.png')); ?> alt="Logo" style="max-height: 3rem;">
        
                </a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarFrontMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarFrontMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a href="<?php echo e(route('profile.edit')); ?>" class="navbar-item has-text-white">
                        Perfil
                    </a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="button is-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /var/www/html/resources/views/front/partials/frontHeader.blade.php ENDPATH**/ ?>