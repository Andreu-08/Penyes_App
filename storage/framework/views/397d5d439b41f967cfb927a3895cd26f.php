<!-- resources/views/front/partials/header.blade.php -->
<header>
    <nav role="navigation" aria-label="main navigation">
        <div>
            <div>
                <a href="<?php echo e(route('front.frontHome')); ?>">
                    <img src="<?php echo e(asset('img/back/logoPenyes.png')); ?>" alt="Logo">
                </a>
                <a role="button" aria-label="menu" aria-expanded="false" data-target="navbarFrontMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <!-- Título centrado -->
            <div>
                <span>Front Office</span>
            </div>

            <!-- Menú desplegable del usuario -->
            <div>
                <div>
                    <a>
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <div>
                        <a href="<?php echo e(route('profile.edit')); ?>">
                            <span>Profile</span>
                        </a>
                        <hr>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit">
                                <span>Log Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /var/www/html/resources/views/front/partials/frontHeader.blade.php ENDPATH**/ ?>