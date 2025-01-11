<!-- resources/views/front/partials/header.blade.php -->
<header>
    <nav class="navbar has-background-info" role="navigation" aria-label="main navigation" style="padding: 1rem;">
        <div class="container is-fluid">
            <div class="navbar-brand" style="align-items: center;">
                <a href="{{ route('front.frontHome') }}" class="navbar-item has-text-white">
                    <img src="{{ asset('img/back/logoPenyes.png') }}" alt="Logo" style="max-height: 3rem;">
                </a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarFrontMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <!-- Título centrado -->
            <div class="navbar-item is-expanded has-text-centered">
                <span class="has-text-grey" style="font-size: 1.5rem;">Front Office</span>
            </div>

            <!-- Menú desplegable del usuario -->
            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link has-text-grey">
                        {{ Auth::user()->name }} <!-- Mostrar el nombre del usuario -->
                    </a>
                    <div class="navbar-dropdown is-right">
                        <a href="{{ route('profile.edit') }}" class="navbar-item">
                            <span>Profile</span>
                        </a>
                        <hr class="navbar-divider">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="button is-light is-fullwidth">
                                <span>Log Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
