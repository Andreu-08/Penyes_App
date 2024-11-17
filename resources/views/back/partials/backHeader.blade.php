<!-- Header -->
<header class="navbar is-dark" style="padding: 1rem;">
    <div class="container is-fluid">
        <div class="navbar-brand" style="align-items: center;">
            <!-- Breadcrumbs para la ruta actual -->
            <nav class="breadcrumb is-small has-succeeds-separator mb-0" aria-label="breadcrumbs" style="color: #ffffff;">
                <ul>
                    <li>
                        <a href="{{ route('back.backHome') }}" class="has-text-light">

                            <span>Back Office</span>
                        </a>
                    </li>
                    @if(View::hasSection('breadcrumbs'))
                        @yield('breadcrumbs')
                    @endif
                </ul>
            </nav>
        </div>

        <!-- Menú desplegable del usuario -->
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link has-text-light">
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
</header>

