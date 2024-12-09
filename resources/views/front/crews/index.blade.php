@extends('front.layouts.front')

@section('content')
<div class="container is-fluid">
    <!-- Encabezado con título y formulario de búsqueda -->
    <div class="columns is-vcentered mb-5">
        <!-- Columna del título -->
        <div class="column">
            <h1 class="title">Listado de Peñas</h1>
        </div>

        <!-- Columna para el formulario de búsqueda -->
        <div class="column is-two-fifths">
            <form method="GET" action="{{ route('front.crews.index') }}">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <input class="input" type="text" name="search" placeholder="Buscar por nombre" value="{{ request('search') }}">
                    </div>
                    <div class="control is-expanded">
                        <input class="input" type="number" name="capacity" placeholder="Capacidad máxima" value="{{ request('capacity') }}">
                    </div>
                    <div class="control">
                        <button class="button is-info" type="submit">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabla de peñas -->
    <div class="box">
        <table class="table is-fullwidth is-hoverable is-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($crews as $crew)
                    <tr>
                        <td>{{ $crew->name }}</td>
                        <td>{{ $crew->capacity }}</td>
                        <td>
                            <a href="{{ route('front.crews.show', $crew) }}" class="button is-small is-info">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
    <div class="pagination is-centered mt-7">
        {{ $crews->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection