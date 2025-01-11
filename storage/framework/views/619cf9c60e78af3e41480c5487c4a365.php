<?php $__env->startSection('content'); ?>
    <!-- FAQ Section -->
    <section class="section">
        <div class="container">
            <h1 class="title">Preguntas Frecuentes (FAQ)</h1>
            <div class="box">
                <p><strong>¿Cuál es el costo de la membresía?</strong> La membresía tiene un costo anual de $50.</p>
                <p><strong>¿Dónde puedo ver las actividades de las peñas?</strong> En la sección de actividades de la página principal.</p>
                <p><strong>¿Cómo puedo unirme a una peña?</strong> Debes registrarte y enviar una solicitud desde tu perfil.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section">
        <div class="container">
            <h2 class="title">Formulario de Contacto</h2>
            <div class="box">
                <form action="<?php echo e(route('contact.send')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control">
                            <input class="input" type="text" name="name" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Correo Electrónico</label>
                        <div class="control">
                            <input class="input" type="email" name="email" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Mensaje</label>
                        <div class="control">
                            <textarea class="textarea" name="message" required></textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home/contact.blade.php ENDPATH**/ ?>