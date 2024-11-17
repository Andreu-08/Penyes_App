@extends('back.layouts.back')

@section('content')
<div class="container">
    <h1 class="title">Usuarios</h1>
    <a href="{{ route('back.users.create') }}" class="button is-primary mb-4">Añadir Nuevo Usuario</a>

    <table class="table is-striped is-fullwidth">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role == 1 ? 'Admin' : 'Usuario' }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('back.users.edit', $user->id) }}" class="button is-small is-info">Editar</a>
                        <form action="{{ route('back.users.destroy', $user->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-small is-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
