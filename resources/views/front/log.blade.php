@include('layouts.partials.head')
<!-- Navegación personalizada del Front Office -->
<header class="navbar is-light">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('log') }}">Peñes</a>
        <a class="navbar-item" href="{{ route('profile.edit') }}">Perfil</a>
    </div>
    <div class="navbar-end">
        <!-- Formulario de logout -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <a href="#" class="navbar-item" onclick="event.preventDefault(); this.closest('form').submit();">
                Cerrar Sesión
            </a>
        </form>
    </div>
</header>

<!-- Contenido principal -->
<main class="section">
    <div class="container has-text-centered">
        <p class="title is-4">Esta será la página principal del front office para {{ auth()->user()->name }}</p>
    </div>
</main>