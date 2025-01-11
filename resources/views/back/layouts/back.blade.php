<!DOCTYPE html>
<html lang="es">
    @include('back.partials.head')
<body style="margin: 0; display: flex; flex-direction: column; min-height: 100vh;">

    <!-- Contenedor Principal -->
    <div style="display: flex; flex: 1;">

        <!-- Aside (Menú lateral) -->
        @include('back.partials.backAside')

        <!-- Contenido Principal -->
        <div style="flex: 1; display: flex; flex-direction: column;">

            <!-- Header -->
            @include('back.partials.backHeader')

            <!-- Main Content -->
            <div style="flex: 1; padding: 2rem;">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('back.partials.footer')
        </div>

    </div>

</body>
</html>
