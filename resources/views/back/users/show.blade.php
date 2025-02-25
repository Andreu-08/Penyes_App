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
                        <!-- Otros campos del usuario -->
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

            <!-- Peñas a las que pertenece el usuario -->
            @if($membershipRequests->isEmpty())
                <div class="content is-medium mt-5">
                    <h2 class="title is-4">Peña</h2>
                    @if($user->crews->isEmpty())
                        <p>No pertenece a ninguna peña.</p>
                    @else
                        <ul style="list-style-type: none; padding: 0;">
                            @foreach ($user->crews as $crew)
                                <li style="margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-weight: bold;">{{ $crew->name }}</span>
                                    <div>
                                        <button class="button is-small is-danger" onclick="removeUserFromCrew(event, {{ $crew->id }}, {{ $user->id }})">Eliminar</button>
                                        <a href="{{ route('back.crews.show', $crew->id) }}" class="button is-small is-success">Ver</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endif

            <!-- Formulario para enviar correo -->
            <div class="content is-medium mt-5">
                <h2 class="title is-4">Enviar Correo</h2>
                <form method="POST" action="{{ route('back.users.contact', $user->id) }}">
                    @csrf
                    <div class="field">
                        <label class="label">Asunto</label>
                        <div class="control">
                            <input class="input" type="text" name="subject" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Mensaje</label>
                        <div class="control">
                            <textarea class="textarea" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">Enviar</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Función para eliminar la relación de un usuario con una peña con confirmación
    function removeUserFromCrew(event, crewId, userId) {
        event.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminarlo'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/back/crews/${crewId}/users/${userId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire('Eliminado', 'El usuario ha sido eliminado de la peña.', 'success');
                        // Recargar la página para actualizar la lista de peñas
                        location.reload();
                    } else {
                        Swal.fire('Error', 'No se pudo eliminar al usuario.', 'error');
                    }
                });
            }
        });
    }
</script>
@endsection
