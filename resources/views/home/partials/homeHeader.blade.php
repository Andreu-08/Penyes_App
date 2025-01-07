<header>
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" style="background-color: #2AB7CA;">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="{{ asset('img/back/logoPenyes.png') }}" alt="Logo" style="max-height: 4rem;">
                </a>

                <!-- Navbar Burger para móviles -->
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <!-- Navbar Items -->
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/log') }}" class="navbar-item">Log</a>
                        @else
                            <a href="{{ route('login') }}" class="navbar-item">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="navbar-item">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>


