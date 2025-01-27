<!-- resources/views/front/partials/header.blade.php -->
<header>
    <nav role="navigation" aria-label="main navigation">
        <div>
            <div>
                <a href="{{ route('front.frontHome') }}">
                    <img src="{{ asset('img/back/logoPenyes.png') }}" alt="Logo">
                </a>
                <a role="button" aria-label="menu" aria-expanded="false" data-target="navbarFrontMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <!-- Título centrado -->
            <div>
                <span>Front Office</span>
            </div>

            <!-- Menú desplegable del usuario -->
            <div>
                <div>
                    <a>
                        {{ Auth::user()->name }}
                    </a>
                    <div>
                        <a href="{{ route('profile.edit') }}">
                            <span>Profile</span>
                        </a>
                        <hr>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">
                                <span>Log Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
