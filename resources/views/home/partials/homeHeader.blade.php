<header>
    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/path/to/logo.png" alt="Logo" style="max-height: 3rem;">
            </a>
        </div>

        <!-- Navbar items: esta sección siempre estará visible en todas las resoluciones -->
        <div class="navbar-end">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/log') }}" class="navbar-item">Log</a>
                @else
                    <a href="{{ route('login') }}" class="navbar-item">Login</a>
                    @if (Route::has('register'))
                        <span class="navbar-item">|</span>
                        <a href="{{ route('register') }}" class="navbar-item">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>
</header>


