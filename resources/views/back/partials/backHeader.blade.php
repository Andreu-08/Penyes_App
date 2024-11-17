<!-- Header -->
<header class="navbar is-dark" style="padding: 1rem;">
    <div class="navbar-brand">
        <span class="navbar-item"><a href="{{route('back.backHome')}}">Back Office</a> - @yield('title')</span>
        <div class="navbar-end">
            <a href="{{ route('profile.edit') }}" class="navbar-item">{{ Auth::user()->name }}</a>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="button is-light is-small">Log Out</button>
            </form>
        </div>
    </div>
</header>