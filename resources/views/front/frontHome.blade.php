@extends('front.layouts.front') <!-- Extiende de un layout base -->

@section('content')
<div>
    <h1>Bienvenido a Les Penyes</h1>
    
    <div>
        <!-- Enlace a "Peñas" -->
        <div>
            <a href="{{ route('front.crews.index') }}">
                <h2>Peñas</h2>
                <p>Ver y gestionar tus peñas</p>
            </a>
        </div>
    </div>
</div>
@endsection

