@extends('back.layouts.back')

@section('breadcrumbs')
    <li>
        <a class="has-text-grey">Sorteos</a>
    </li>
@endsection

@section('content')
<div class="container">
    <h1 class="title is-4">Sorteo del año {{ $year }}</h1>

    <!-- Mostrar grilla con Blade usando clases Bulma -->
    @if(isset($locations))
        <table class="table is-bordered is-striped is-narrow is-fullwidth">
            @for ($row = 0; $row < $matrixHeight; $row++)
                <tr>
                    @for ($col = 0; $col < $matrixWidth; $col++)
                        <td class="has-text-centered andreu">
                            @php
                            $cell = $locations->first(function($location) use ($col, $row) {
                                return $location->x_coordinate === $col && $location->y_coordinate === $row;
                            });
                            @endphp
                            @if($cell)
                                <p>{{ $cell->crew->name }}</p>
                            @endif
                        </td>
                    @endfor
                </tr>
            @endfor
        </table>
    @endif

    <!-- Formulario para regenerar el sorteo -->
    <form action="{{ route('draw.regenerate') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="year" value="{{ $year }}">
        <button type="submit" class="button is-primary">Regenerar sorteo</button>
    </form>

    <!-- Opción de componente React -->
    <div id="draw-grid-root" class="mt-5"></div>
</div>

<!-- Inyección de datos para React -->
<script>
    window.drawGridData = @json($locations->map(function($loc) {
        return [
            'x' => $loc->x_coordinate,
            'y' => $loc->y_coordinate,
            'crew' => [
                'name' => $loc->crew ? $loc->crew->name : ''
            ]
        ];
    }));
    window.matrixWidth = {{ $matrixWidth }};
    window.matrixHeight = {{ $matrixHeight }};
</script>
@endsection
