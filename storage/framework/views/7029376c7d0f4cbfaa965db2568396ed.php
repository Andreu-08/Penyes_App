<?php echo $__env->make('back.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <section class="section">
        <div class="container">
            <!-- Título -->
            <h1 class="title has-text-primary">Mensaje del Administrador</h1>

            <!-- Asunto -->
            <div class="box">
                <p><strong>Asunto:</strong> <?php echo e($details['subject']); ?></p>
            </div>

            <!-- Mensaje -->
            <div class="content">
                <p><strong>Mensaje:</strong></p>
                <p class="box"><?php echo e($details['message']); ?></p>
            </div>

            <!-- Pie de mensaje -->
            <div class="notification is-info is-light">
                <p>Este mensaje fue enviado por el administrador desde el sistema de back-office.</p>
            </div>
        </div>
    </section>
</body>

<?php /**PATH /var/www/html/resources/views/emails/adminToUser.blade.php ENDPATH**/ ?>