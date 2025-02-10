@if(isset($locations))
    <table border="1" style="border-collapse: collapse;">
        @for ($row = 0; $row < $maxHeight; $row++)
            <tr>
                @for ($col = 0; $col < $maxWidth; $col++)
                    <td style="width:50px;height:50px;text-align:center;">
                        @php
                        $cell = $locations->first(function($location) use ($col, $row) {
                            return $location->x_coordinate === $col && $location->y_coordinate === $row;
                        });
                        @endphp
                        @if($cell)
                            {{ $cell->crew->name }}
                        @endif
                    </td>
                @endfor
            </tr>
        @endfor
    </table>
@endif

@if($showDrawButton)
    <form action="{{ route('draw.regenerate') }}" method="POST">
        @csrf
        <input type="hidden" name="year" value="{{ $year }}">
        <button type="submit">Regenerar sorteo</button>
    </form>
@endif

