<div class="box mt-5">
    <h2 class="title is-5">Últimos 3 Usuarios Añadidos</h2>
    <table class="table is-fullwidth is-hoverable is-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lastUsers as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('back.users.show', $user->id) }}" class="button is-small is-info">Ver</a>
                        <a href="{{ route('back.users.edit', $user->id) }}" class="button is-small is-warning">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="has-text-centered">No se han añadido usuarios recientemente.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

