<aside class="menu has-background-light has-text-dark" style="width: 150px; padding: 1rem;">
    <!-- Logo -->
    <p class="menu-label has-text-centered">
        <a href="<?php echo e(route('back.backHome')); ?>">
            <img src="<?php echo e(asset('img/back/logoPenyes.png')); ?>" alt="Penyes App Logo" style="width: 100%; max-width: 100px; height: auto; margin: 0 auto;">
        </a>
    </p>

    <!-- Espacio entre el logo y los enlaces -->
    <hr class="has-background-dark" style="opacity: 0.2;">

    <!-- Enlaces del menú -->
    <ul class="menu-list">
        <li>
            <a href="<?php echo e(route('back.users.index')); ?>" class="has-text-dark" style="text-decoration: none;">Usuarios</a>
        </li>
        <li>
            <a href="<?php echo e(route('back.crews.index')); ?>" class="has-text-dark" style="text-decoration: none;">Peñas</a>
        </li>
        <li>
            <a href="<?php echo e(route('back.platforms.index')); ?>" class="has-text-dark" style="text-decoration: none;">Carafales</a>
        </li>
        <li>
            <a href="<?php echo e(route('back.draws.index')); ?>" class="has-text-dark" style="text-decoration: none;">Sorteos</a>
        </li>
        <li>
            <a href="<?php echo e(route('back.payments.index')); ?>" class="has-text-dark" style="text-decoration: none;">Pagos</a>
        </li>
    </ul>
</aside>

<?php /**PATH /var/www/html/resources/views/back/partials/backAside.blade.php ENDPATH**/ ?>