<?php $__env->startSection('content'); ?>

    <!-- Slogan Section -->
    <section class="hero is-medium is-primary" style="background-image: url('<?php echo e(asset('img/home/unnamed.jpg')); ?>'); background-size: cover; background-position: center;">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title is-1 has-text-white has-text-weight-bold">Les Peñes En Festes</h1>
                <p class="subtitle has-text-white">Celebrando juntos con alegría y tradición</p>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="section">
        <div class="container">
            <div class="carousel">
                <div class="carousel-item">
                    <img src="<?php echo e(asset('img/carousel/image1.jpg')); ?>" alt="Fiesta 1" class="responsive-img">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo e(asset('img/carousel/image2.jpg')); ?>" alt="Fiesta 2" class="responsive-img">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo e(asset('img/carousel/image3.jpg')); ?>" alt="Fiesta 3" class="responsive-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Activitats i Horaris Section -->
    <section class="section has-background-light">
        <div class="container">
            <div class="box">
                <h2 class="title is-4 has-text-centered">Activitats i Horaris</h2>
                <p class="has-text-centered">Consulta el calendario de eventos y actividades programadas para no perderte nada.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section">
        <div class="container">
            <div class="box has-background-white">
                <h2 class="title is-4 has-text-centered">Sobre Nosotros</h2>
                <p class="has-text-centered">
                    Descubre el espíritu de nuestras peñas y cómo trabajamos para ofrecer las mejores fiestas del año.
                </p>
                <div class="has-text-centered">
                    <a href="<?php echo e(url('/contact')); ?>" class="button is-link is-rounded mt-4">Contáctanos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Ubicaciones Section -->
    <section class="section has-background-light">
        <div class="container">
            <div class="box">
                <h2 class="title is-4 has-text-centered">Ubicaciones</h2>
                <p class="has-text-centered">Consulta las ubicaciones de las principales actividades y eventos en nuestro mapa interactivo.</p>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home/home.blade.php ENDPATH**/ ?>