<!-- resources/views/layouts/back.blade.php -->
<!DOCTYPE html>
<html lang="es">
    @include('back.partials.head')
<body>
    <!-- Aside (Menú lateral) -->
    @include('back.partials.backAside')
    <!-- Header -->
    @include('back.partials.backHeader')
    <!-- Content -->
    <div class="container" style="margin-left: 200px; padding: 2rem;">
        @yield('content')
    </div>

</body>
</html>