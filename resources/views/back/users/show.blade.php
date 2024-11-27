{{-- resources/views/back/users/show.blade.php --}}
@extends('back.layouts.back')

@section('breadcrumbs')
    <li>
        <a href="{{ route('back.users.index') }}" class="has-text-grey">Usuarios</a>
    </li>
    <li>
        <a href="{{ route('back.users.show', $user->id) }}" class="has-text-grey">{{ $user->name }}</a>
    </li>
@endsection

@section('content')
<main class="section">
    <div class="container">
        <section class="box">
            <h1 class="title has-text-centered">Detalles del Usuario</h1>
            
            <!-- Información del usuario en formato de tabla -->
            <div class="content is-medium mt-5">
                <table class="table is-fullwidth is-striped">
                    <tbody>
                        <tr>
                            <th class="has-text-weight-semibold">Nombre:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Apellido:</th>
                            <td>{{ $user->surname }}</td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Fecha de Nacimiento:</th>
                            <td>{{ \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Correo Electrónico:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Rol:</th>
                            <td>{{ $user->role_id == 1 ? 'Admin' : 'Usuario' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Solicitudes de membresía -->
            <div class="content is-medium mt-5">
                <h2 class="title is-4">Solicitudes de Membresía</h2>
                @if($membershipRequests->isEmpty())
                    <p>No hay solicitudes de membresía pendientes.</p>
                @else
                    <table class="table is-fullwidth is-striped">
                        <thead>
                            <tr>
                                <th>Peña</th>
                                <th>Año</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($membershipRequests as $crew)
                                <tr>
                                    <td>{{ $crew->name }}</td>
                                    <td>{{ $crew->pivot->year }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('back.memberships.confirm', [$crew, $user]) }}">
                                            @csrf
                                            <button type="submit" class="button is-primary">Confirmar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </section>
    </div>
</main>
@endsection
