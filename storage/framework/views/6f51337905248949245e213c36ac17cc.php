<?php $__env->startSection('breadcrumbs'); ?>
    <li>
        <a href="<?php echo e(route('back.users.index')); ?>" class="has-text-grey">Usuarios</a>
    </li>
    <li>
        <a href="<?php echo e(route('back.users.show', $user->id)); ?>" class="has-text-grey"><?php echo e($user->name); ?></a>
    </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="section">
    <div class="container">
        <section class="box">
            <h1 class="title has-text-centered">Detalles del Usuario</h1>
            
            <!-- Información del usuario en formato de tabla -->
            <div class="content is-medium mt-5">
                <table class="table is-fullwidth is-striped">
                    <tbody>
                        <tr>
                            <th class="has-text-weight-semibold">Nombre:</th>
                            <td><?php echo e($user->name); ?></td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Apellido:</th>
                            <td><?php echo e($user->surname); ?></td>
                        </tr>
                        <!-- Otros campos del usuario -->
                    </tbody>
                </table>
            </div>

            <!-- Solicitudes de membresía -->
            <div class="content is-medium mt-5">
                <h2 class="title is-4">Solicitudes de Membresía</h2>
                <?php if($membershipRequests->isEmpty()): ?>
                    <p>No hay solicitudes de membresía pendientes.</p>
                <?php else: ?>
                    <table class="table is-fullwidth is-striped">
                        <thead>
                            <tr>
                                <th>Peña</th>
                                <th>Año</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $membershipRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($crew->name); ?></td>
                                    <td><?php echo e($crew->pivot->year); ?></td>
                                    <td>
                                        <form method="POST" action="<?php echo e(route('back.memberships.confirm', [$crew, $user])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="button is-primary">Confirmar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
            <!-- Formulario para enviar correo -->
            <div class="content is-medium mt-5">
                <h2 class="title is-4">Enviar Correo</h2>
                <form method="POST" action="<?php echo e(route('back.users.contact', $user->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="field">
                        <label class="label">Asunto</label>
                        <div class="control">
                            <input class="input" type="text" name="subject" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Mensaje</label>
                        <div class="control">
                            <textarea class="textarea" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">Enviar</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/users/show.blade.php ENDPATH**/ ?>