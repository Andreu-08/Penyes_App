<!-- resources/views/front/partials/header.blade.php -->
<header>
    <nav class="navbar has-background-info" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a href="{{ route('front.frontHome') }}" class="navbar-item has-text-white">
                    <img src={{ asset('img/back/logoPenyes.png') }} alt="Logo" style="max-height: 3rem;">
        
                </a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarFrontMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarFrontMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a href="{{ route('profile.edit') }}" class="navbar-item has-text-white">
                        Perfil
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="button is-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
