<header>
    <nav>
        <!-- Enlace a Peñes -->
        <a href="{{ route('log') }}">Peñes</a>
        
        <!-- Enlace a Profile -->
        <a href="{{ route('profile.edit') }}">Profile</a>

        <!-- Enlace para Log Out, que usa un formulario para enviar la solicitud POST -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                Log Out
            </a>
        </form>
    </nav>
</header>
