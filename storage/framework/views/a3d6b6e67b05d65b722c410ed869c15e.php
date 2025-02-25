<?php $__env->startSection('breadcrumbs'); ?>
    <li>
        <a href="<?php echo e(route('back.crews.index')); ?>" class="has-text-grey">Peñas</a>
    </li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<body>
    <!-- Bloque de estilos para mostrar SVG en línea -->
    <style>
        td svg {
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }
        /* Añadimos estilo para mantener la fecha en una sola línea */
        td.foundation {
            white-space: nowrap;
        }
    </style>
    <main class="section">

        <div class="container is-fluid">
            <!-- Encabezado con título y botón -->
            <div class="columns is-vcentered mb-5">
                <!-- Columna del título -->
                <div class="column">
                    <h1 class="title">Lista de Peñas</h1>
                </div>

                <!-- Columna para el formulario de búsqueda -->
                <div class="column is-two-fifths">
                    <?php echo $__env->make('back.partials.searchCrews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <!-- Columna para el botón de "Crear Usuario" -->
                <div class="column is-narrow">
                    <a href="<?php echo e(route('back.crews.create')); ?>" class="button is-success">Crear Peña</a>
                </div>
            </div>

            <!-- Tabla de crews -->
            <div class="box">
                <table class="table is-fullwidth is-hoverable is-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Color</th>
                            <th>Slogan</th>
                            <th>Capacidad</th>
                            <th>Fundación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($crew->name); ?></td>
                            <td><?php echo e($crew->color); ?></td>
                            <td><?php echo e($crew->slogan); ?></td>
                            <!-- Modificamos columna de Capacidad -->
                            <td>
                                <?php $count = $crew->users->count(); ?>
                                <?php if($count === 0): ?>
                                    <?php echo e($crew->capacity); ?>

                                <?php else: ?>
                                    <a href="#" onclick="showUsers(event, <?php echo e($crew->id); ?>)"><?php echo e($count . '/' . $crew->capacity); ?></a>
                                    <div id="crew-users-<?php echo e($crew->id); ?>" style="display: none;">
                                        <ul style="list-style-type: none; padding: 0;">
                                            <?php $__currentLoopData = $crew->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li style="margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center;">
                                                    <span style="font-weight: bold;"><?php echo e($user->name); ?></span>
                                                    <div>
                                                        <button class="button is-small is-danger" onclick="removeUser(event, <?php echo e($crew->id); ?>, <?php echo e($user->id); ?>)">Eliminar</button>
                                                        <a href="<?php echo e(route('back.users.show', $user->id)); ?>" class="button is-small is-success">Ver</a>
                                                    </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td class="foundation"><?php echo e($crew->foundation); ?></td>
                            <td>
                                <!-- Se envuelven los botones SVG en un contenedor flex -->
                                <div style="display: flex; align-items: center; gap: 8px; flex-wrap: nowrap;">
                                    <a href="<?php echo e(route('back.crews.show', $crew->id)); ?>" >
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.05" d="M2.5 12c0-4.478 0-6.718 1.391-8.109S7.521 2.5 12 2.5c4.478 0 6.718 0 8.109 1.391S21.5 7.521 21.5 12c0 4.478 0 6.718-1.391 8.109S16.479 21.5 12 21.5c-4.478 0-6.718 0-8.109-1.391S2.5 16.479 2.5 12M11 7h6M7 7h1m-1 5h1m-1 5h1m3-5h6m-6 5h6" color="#3498db"/></svg>                                </a>
                                    <a href="<?php echo e(route('back.crews.edit', $crew->id)); ?>" >
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#f39c12" stroke-linecap="round" stroke-linejoin="round" d="m5 16l-1 4l4-1L19.586 7.414a2 2 0 0 0 0-2.828l-.172-.172a2 2 0 0 0-2.828 0zM15 6l3 3m-5 11h8"/></svg>
                                    </a>
                                    <form action="<?php echo e(route('back.crews.destroy', $crew->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        
                                        <button
                                            type="submit"
                                            onclick="deleteCrew(event, <?php echo e($crew->id); ?>)"
                                            style="border: none; background: none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><path fill="#e74c3c" d="M20 10.5v.5h8v-.5a4 4 0 0 0-8 0m-2.5.5v-.5a6.5 6.5 0 1 1 13 0v.5h11.25a1.25 1.25 0 1 1 0 2.5h-2.917l-2 23.856A7.25 7.25 0 0 1 29.608 44H18.392a7.25 7.25 0 0 1-7.224-6.644l-2-23.856H6.25a1.25 1.25 0 1 1 0-2.5zm-3.841 26.147a4.75 4.75 0 0 0 4.733 4.353h11.216a4.75 4.75 0 0 0 4.734-4.353L36.324 13.5H11.676zM21.5 20.25a1.25 1.25 0 1 0-2.5 0v14.5a1.25 1.25 0 1 0 2.5 0zM27.75 19c.69 0 1.25.56 1.25 1.25v14.5a1.25 1.25 0 1 1-2.5 0v-14.5c0-.69.56-1.25 1.25-1.25"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="has-text-centered has-text-grey-light">No hay crews disponibles.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="pagination is-centered mt-7">
                <?php echo e($crews->links('pagination::bootstrap-4')); ?>

            </div>
            <?php echo $__env->make('back.partials.lastCrews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Se define la función deleteCrew de forma global y se previene el envío por defecto
        window.deleteCrew = function(event, id) {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Se envía el formulario manualmente
                    event.target.closest('form').submit();
                }
            });
        }

        // Función para mostrar la lista de usuarios
        function showUsers(event, crewId) {
            event.preventDefault();
            const userList = document.getElementById(`crew-users-${crewId}`).innerHTML;
            Swal.fire({
                title: 'Usuarios en la Peña',
                html: userList,
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText: 'Cerrar'
            });
        }

        // Función para eliminar la relación de un usuario con la peña con confirmación
        function removeUser(event, crewId, userId) {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/back/crews/${crewId}/users/${userId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire('Eliminado', 'El usuario ha sido eliminado de la peña.', 'success');
                            // Recargar la página para actualizar la lista de usuarios
                            location.reload();
                        } else {
                            Swal.fire('Error', 'No se pudo eliminar al usuario.', 'error');
                        }
                    });
                }
            });
        }
    </script>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/crews/index.blade.php ENDPATH**/ ?>