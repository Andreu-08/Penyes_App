<!-- Aside del backoffice -->
<aside class="menu has-background-dark has-text-light" style="width: 200px; float: left; height: 100vh; padding: 1rem;">
    <p class="menu-label has-text-light">
        <a href="{{ route('back.backHome') }}" class="has-text-light">Penyes App</a>
    </p>
    <ul class="menu-list">
        <li><a href="{{ route('back.users.index') }}" class="has-text-light">Users</a></li>
        <li><a href="{{ route('back.crews.index') }}" class="has-text-light">Crews</a></li>
        <li><a href="{{ route('back.platforms.index') }}" class="has-text-light">Platforms</a></li>
        <li><a href="{{ route('back.draws.index') }}" class="has-text-light">Draws</a></li>
        <li><a href="{{ route('back.payments.index') }}" class="has-text-light">Payments</a></li>
    </ul>
</aside>
