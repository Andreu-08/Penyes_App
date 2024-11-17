@extends('back.layouts.back')

@section('breadcrumbs')
    <li>
        <a href="{{ route('back.crews.index') }}" class="has-text-light">Peñas</a>
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
                    <h1 class="title">Lista de Peñas</h1>
                </div>
            
                <!-- Columna para el formulario de búsqueda -->
                <div class="column is-two-fifths">
                    @include('back.partials.searchCrews')
                </div>
            
                <!-- Columna para el botón de "Crear Usuario" -->
                <div class="column is-narrow">
                    <a href="{{ route('back.crews.create') }}" class="button is-success">Crear Peña</a>
                </div>
            </div>

            <!-- Tabla de crews -->
            <div class="box">
                <table class="table is-fullwidth is-hoverable is-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Color</th>
                            <th>Slogan</th>
                            <th>Capacidad</th>
                            <th>Fundación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($crews as $crew)
                        <tr>
                            <td>{{ $crew->name }}</td>
                            <td>{{ $crew->color }}</td>
                            <td>{{ $crew->slogan }}</td>
                            <td>{{ $crew->capacity }}</td>
                            <td>{{ $crew->foundation }}</td>
                            <td>
                                <a href="{{ route('back.crews.show', $crew->id) }}" class="button is-small is-info">Ver</a>
                                <a href="{{ route('back.crews.edit', $crew->id) }}" class="button is-small is-warning">Editar</a>
                                <form action="{{ route('back.crews.destroy', $crew->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-small is-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este crew?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="has-text-centered has-text-grey-light">No hay crews disponibles.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="pagination is-centered mt-7">
                {{ $crews->links('pagination::bootstrap-4') }}
            </div>
            @include('back.partials.lastCrews')
        </div>
    </main>
</body>
@endsection
