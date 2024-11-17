<div class="box mt-5">
    <h2 class="title is-5">Últimos 3 Crews Añadidos</h2>
    <table class="table is-fullwidth is-hoverable is-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lastCrews as $crew)
                <tr>
                    <td>{{ $crew->name }}</td>
                    <td>{{ $crew->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('back.crews.show', $crew->id) }}" class="button is-small is-info">Ver</a>
                        <a href="{{ route('back.crews.edit', $crew->id) }}" class="button is-small is-warning">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="has-text-centered">No se han añadido crews recientemente.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
