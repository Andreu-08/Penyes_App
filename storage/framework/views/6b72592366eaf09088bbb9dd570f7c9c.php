<header>
    <nav class="navbar" role="navigation" aria-label="main navigation" style="background-color: #2d2d2d; padding: 1rem;">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="<?php echo e(asset('img/back/logoPenyes.png')); ?>" alt="Logo" style="max-height: 6rem;">
                </a>

                <!-- Toggle para pantallas pequeñas -->
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <!-- Navbar Items -->
            <div id="navbarBasic" class="navbar-menu">
                <div class="navbar-end">
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/log')); ?>" class="navbar-item has-text-white">Log</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="navbar-item has-text-white">Login</a>
                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="navbar-item has-text-white">Register</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>



<?php /**PATH /var/www/html/resources/views/home/partials/homeHeader.blade.php ENDPATH**/ ?>