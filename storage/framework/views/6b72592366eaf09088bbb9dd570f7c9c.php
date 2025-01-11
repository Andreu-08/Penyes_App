<header>
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" style="background-color: #2AB7CA;">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="<?php echo e(asset('img/back/logoPenyes.png')); ?>" alt="Logo" style="max-height: 4rem;">
                </a>

                <!-- Navbar Burger para móviles -->
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <!-- Navbar Items -->
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/log')); ?>" class="navbar-item">Log</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="navbar-item">Login</a>
                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="navbar-item">Register</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>


<?php /**PATH /var/www/html/resources/views/home/partials/homeHeader.blade.php ENDPATH**/ ?>