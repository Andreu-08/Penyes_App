<!-- resources/views/layouts/back.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Office - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
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