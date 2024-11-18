@extends('back.layouts.back')

@section('breadcrumbs')
    <li>
        <a href="{{ route('back.users.index') }}" class="has-text-light">Usuarios</a>
    </li>
@endsection


@section('content')
<body>
    <main class="section">

        <div class="container is-fluid">
            <!-- Encabezado con título y botón -->
            <div class="columns is-vcentered mb-5">
                <!-- Columna del título -->
                <div class="column">
                    <h1 class="title">Lista de Usuarios</h1>
                </div>
            
                <!-- Columna para el formulario de búsqueda -->
                <div class="column is-two-fifths">
                    @include('back.partials.searchUsers')
                </div>
            
                <!-- Columna para el botón de "Crear Usuario" -->
                <div class="column is-narrow">
                    <a href="{{ route('back.users.create') }}" class="button is-success">Crear Usuario</a>
                </div>
            </div>

            <!-- Tabla de usuarios -->
            <div class="box">
                <table class="table is-fullwidth is-hoverable is-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Peña</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>
                                @if ($user->crew)
                                    {{ $user->crew->name }}
                                @else
                                    Sin peña
                                @endif
                            </td>
                            <td>{{ $user->role == 1 ? 'Admin' : 'Usuario' }}</td>
                            <td>
                                <a href="{{ route('back.users.show', $user->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path fill="#3498db" d="M12 4a5 5 0 1 1-5 5a5 5 0 0 1 5-5m0-2a7 7 0 1 0 7 7a7 7 0 0 0-7-7m10 28h-2v-5a5 5 0 0 0-5-5H9a5 5 0 0 0-5 5v5H2v-5a7 7 0 0 1 7-7h6a7 7 0 0 1 7 7zm0-26h10v2H22zm0 5h10v2H22zm0 5h7v2h-7z"/></svg>
                                </a>
                                <a href="{{ route('back.users.edit', $user->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#f39c12" stroke-linecap="round" stroke-linejoin="round" d="m5 16l-1 4l4-1L19.586 7.414a2 2 0 0 0 0-2.828l-.172-.172a2 2 0 0 0-2.828 0zM15 6l3 3m-5 11h8"/></svg>
                                </a>
                                <form action="{{ route('back.users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?')"
                                    style="border: none; background: none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><path fill="#e74c3c" d="M20 10.5v.5h8v-.5a4 4 0 0 0-8 0m-2.5.5v-.5a6.5 6.5 0 1 1 13 0v.5h11.25a1.25 1.25 0 1 1 0 2.5h-2.917l-2 23.856A7.25 7.25 0 0 1 29.608 44H18.392a7.25 7.25 0 0 1-7.224-6.644l-2-23.856H6.25a1.25 1.25 0 1 1 0-2.5zm-3.841 26.147a4.75 4.75 0 0 0 4.733 4.353h11.216a4.75 4.75 0 0 0 4.734-4.353L36.324 13.5H11.676zM21.5 20.25a1.25 1.25 0 1 0-2.5 0v14.5a1.25 1.25 0 1 0 2.5 0zM27.75 19c.69 0 1.25.56 1.25 1.25v14.5a1.25 1.25 0 1 1-2.5 0v-14.5c0-.69.56-1.25 1.25-1.25"/></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="pagination is-centered mt-7">
                {{ $users->links('pagination::bootstrap-4') }}
            </div>

            @include('back.partials.lastUsers')
        
        </div>
    </main>
</body>
@endsection