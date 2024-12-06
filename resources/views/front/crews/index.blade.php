@extends('front.layouts.front')

@section('content')
<div class="container">
    <h1 class="title">Listado de Peñas</h1>
    <form method="GET" action="{{ route('front.crews.index') }}">
        <input type="text" name="search" placeholder="Buscar por nombre" value="{{ request('search') }}">
        <input type="number" name="capacity" placeholder="Capacidad máxima" value="{{ request('capacity') }}">
        <button type="submit">Buscar</button>
    </form>
    <table>
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
                    <td><a href="{{ route('front.crews.show', $crew) }}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $crews->links() }}
</div>
@endsection