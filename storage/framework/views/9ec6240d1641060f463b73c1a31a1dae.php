<form method="GET" action="<?php echo e(route('back.users.index')); ?>">
    <div class="field has-addons">
        <div class="control is-expanded">
            <input 
                type="text" 
                name="search" 
                class="input is-small" 
                placeholder="Buscar por nombre o email" 
                value="<?php echo e(request('search')); ?>">
        </div>
        <div class="control">
            <button type="submit" class="button is-small is-primary">Buscar</button>
        </div>
    </div>
</form>

<?php /**PATH /var/www/html/resources/views/back/partials/searchUsers.blade.php ENDPATH**/ ?>