@extends('back.layouts.back')

@section('content')
<body>
    <main class="section">
        <div class="container is-fluid">
            <!-- Encabezado con título y botón -->
            <div class="columns is-vcentered mb-5">
                <div class="column">
                    <h1 class="title">Lista de Usuarios</h1>
                </div>
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
                            <td>{{ $user->role == 1 ? 'Admin' : 'Usuario' }}</td>
                            <td>
                                <a href="{{ route('back.users.show', $user->id) }}" class="button is-small is-info">Ver</a>
                                <a href="{{ route('back.users.edit', $user->id) }}" class="button is-small is-warning">Editar</a>
                                <form action="{{ route('back.users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-small is-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?')">Eliminar</button>
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