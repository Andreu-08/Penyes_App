<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Título principal -->
    <div class="content">
        <h1 class="title is-3 has-text-left mt-5">Bienvenido al BackOffice <?php echo e(Auth::user()->name); ?></h1>
        <p class="subtitle has-text-left">Esta es la página principal del panel de administración.</p>
    </div>
    <hr>
    <!-- Tabla de accesos rápidos -->
    <div class="box">
        <table class="table is-fullwidth is-hoverable">
            <tbody>
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-width="1.05"><circle cx="12" cy="6" r="4"/><path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" opacity="0.5"/></g></svg>
                        <strong>Usuarios</strong>
                    </td>
                    <td>Gestiona todos los usuarios registrados en el sistema.</td>
                    <td>
                        <a href="<?php echo e(route('back.users.index')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg>                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36"><path fill="black" d="M17.9 17.3c2.7 0 4.8-2.2 4.8-4.9s-2.2-4.8-4.9-4.8S13 9.8 13 12.4c0 2.7 2.2 4.9 4.9 4.9m-.1-7.7q.15 0 0 0c1.6 0 2.9 1.3 2.9 2.9s-1.3 2.8-2.9 2.8S15 14 15 12.5c0-1.6 1.3-2.9 2.8-2.9" class="clr-i-outline clr-i-outline-path-1"/><path fill="black" d="M32.7 16.7c-1.9-1.7-4.4-2.6-7-2.5h-.8q-.3 1.2-.9 2.1c.6-.1 1.1-.1 1.7-.1c1.9-.1 3.8.5 5.3 1.6V25h2v-8z" class="clr-i-outline clr-i-outline-path-2"/><path fill="black" d="M23.4 7.8c.5-1.2 1.9-1.8 3.2-1.3c1.2.5 1.8 1.9 1.3 3.2c-.4.9-1.3 1.5-2.2 1.5c-.2 0-.5 0-.7-.1c.1.5.1 1 .1 1.4v.6c.2 0 .4.1.6.1c2.5 0 4.5-2 4.5-4.4c0-2.5-2-4.5-4.4-4.5c-1.6 0-3 .8-3.8 2.2c.5.3 1 .7 1.4 1.3" class="clr-i-outline clr-i-outline-path-3"/><path fill="black" d="M12 16.4q-.6-.9-.9-2.1h-.8c-2.6-.1-5.1.8-7 2.4L3 17v8h2v-7.2c1.6-1.1 3.4-1.7 5.3-1.6c.6 0 1.2.1 1.7.2" class="clr-i-outline clr-i-outline-path-4"/><path fill="black" d="M10.3 13.1c.2 0 .4 0 .6-.1v-.6c0-.5 0-1 .1-1.4c-.2.1-.5.1-.7.1c-1.3 0-2.4-1.1-2.4-2.4S9 6.3 10.3 6.3c1 0 1.9.6 2.3 1.5c.4-.5 1-1 1.5-1.4c-1.3-2.1-4-2.8-6.1-1.5s-2.8 4-1.5 6.1c.8 1.3 2.2 2.1 3.8 2.1" class="clr-i-outline clr-i-outline-path-5"/><path fill="black" d="m26.1 22.7l-.2-.3c-2-2.2-4.8-3.5-7.8-3.4c-3-.1-5.9 1.2-7.9 3.4l-.2.3v7.6c0 .9.7 1.7 1.7 1.7h12.8c.9 0 1.7-.8 1.7-1.7v-7.6zm-2 7.3H12v-6.6c1.6-1.6 3.8-2.4 6.1-2.4c2.2-.1 4.4.8 6 2.4z" class="clr-i-outline clr-i-outline-path-6"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                            <strong>Peñas</strong>
                        </td>
                    <td>Administra los diferentes peñas y sus detalles.</td>
                    <td>
                        <a href="<?php echo e(route('back.crews.index')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg></a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="black" d="M495.24 267.592L445.066 41.083A32.04 32.04 0 0 0 406.9 16.76L180.393 66.934a32 32 0 0 0-24.322 38.166l21.021 94.9H48a32.036 32.036 0 0 0-32 32v232a32.036 32.036 0 0 0 32 32h232a32.036 32.036 0 0 0 32-32V340.957l158.917-35.2a32.04 32.04 0 0 0 24.323-38.165M280 464H48V232h136.181l22.063 99.606a32.03 32.03 0 0 0 31.18 25.092a32.3 32.3 0 0 0 6.984-.769l35.6-7.886L280.02 464Zm184-189.487l-226.513 50.173l-50.173-226.51L413.824 48l50.193 226.505Z"/><path fill="black" d="M80 264h40v40H80zm0 128h40v40H80zm128 0h40v40h-40zm-64-64h40v40h-40zm81.456-205.433l39.054-8.644l8.644 39.055l-39.054 8.644zm152.672 97.223l39.054-8.65l8.65 39.054l-39.054 8.65zm-76.324-48.649l39.053-8.65l8.65 39.053l-39.052 8.65z"/></svg>
                        <strong>Sorteos</strong>
                    </td>
                    <td>Controla los sorteos</td>
                    <td>
                        <a href="<?php echo e(route('back.draws.index')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="black" d="M7.5 1a7.5 7.5 0 1 0 0 15a7.5 7.5 0 0 0 0-15m0 13.5a6 6 0 1 1 0-12a6 6 0 0 1 0 12"/><path fill="black" d="M10.482 10.068a.5.5 0 0 0-.684.181A1.51 1.51 0 0 1 8.5 11h-2a1.5 1.5 0 0 1-1.414-1H7.5a.5.5 0 0 0 0-1H5V8h2.5a.5.5 0 0 0 0-1H5.086c.206-.582.762-1 1.414-1h2a1.51 1.51 0 0 1 1.298.751a.5.5 0 1 0 .865-.503a2.51 2.51 0 0 0-2.162-1.249h-2c-1.207 0-2.217.86-2.45 2h-.55a.5.5 0 0 0 0 1h.5v1h-.5a.5.5 0 0 0 0 1h.55c.232 1.14 1.242 2 2.45 2h2a2.51 2.51 0 0 0 2.162-1.249a.5.5 0 0 0-.181-.684z"/></svg>
                        <strong>Pagos</strong>
                    </td>
                    <td>Gestiona los pagos realizados en la plataforma.</td>
                    <td>
                        <a href="<?php echo e(route('back.payments.index')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/backHome.blade.php ENDPATH**/ ?>