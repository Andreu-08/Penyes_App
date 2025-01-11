<form method="GET" action="<?php echo e(route('back.crews.index')); ?>">
    <div class="field has-addons">
        <!-- Campo de búsqueda por nombre -->
        <div class="control is-expanded">
            <input 
                type="text" 
                name="search" 
                class="input is-small" 
                placeholder="Buscar por nombre" 
                value="<?php echo e(request('search')); ?>">
        </div>

        <!-- Campo de búsqueda por capacidad -->
        <div class="control">
            <input 
                type="number" 
                name="capacity" 
                class="input is-small" 
                placeholder="Capacidad máxima" 
                value="<?php echo e(request('capacity')); ?>">
        </div>

        <!-- Botón de búsqueda -->
        <div class="control">
            <button type="submit" class="button is-small is-primary">Buscar</button>
        </div>
    </div>
</form>


<?php /**PATH /var/www/html/resources/views/back/partials/searchCrews.blade.php ENDPATH**/ ?>