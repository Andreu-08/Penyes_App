@include('back.partials.head') <!-- Incluye el head común con Bulma y configuraciones -->

<header class="navbar is-light">
    <nav class="navbar-menu">
        <!-- Enlace a Peñes -->
        <a class="navbar-item" href="{{ route('log') }}">Peñes</a>
        
        <!-- Enlace a Profile -->
        <a class="navbar-item" href="{{ route('profile.edit') }}">Perfil</a>

        <!-- Enlace para Log Out, que usa un formulario para enviar la solicitud POST -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <a href="#" class="navbar-item" onclick="event.preventDefault(); this.closest('form').submit();">
                Cerrar Sesión
            </a>
        </form>
    </nav>
</header>

<!-- Contenido principal -->
<main class="section">
    <div class="container has-text-centered">
        <p class="title is-4">Esta será la página principal del back office para {{ auth()->user()->name }}</p>
    </div>
</main>
