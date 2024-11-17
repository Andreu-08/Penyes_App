 <!-- Aside del backoffice-->
 <aside class="menu is-dark" style="width: 200px; float: left; height: 100vh;">
    <p class="menu-label">Penyes App</p>
    <ul class="menu-list">
        <li><a href="{{ route('back.users.index') }}">Users</a></li>
        <li><a href="{{ route('back.crews.index') }}">Crews</a></li>
        <li><a href="{{ route('back.platforms.index') }}">Platforms</a></li>
        <li><a href="{{ route('back.draws.index') }}">Draws</a></li>
        <li><a href="{{ route('back.payments.index') }}">Payments</a></li>
    </ul>
</aside>