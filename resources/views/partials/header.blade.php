{{-- aqui configuraremos el header principal de la app --}}
<header>
    @if (Route::has('login'))
        <nav>
            @auth
            <a href="{{ url('/log') }}">Log</a>
            @else
            <a href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </nav>
    @endif
</header> 