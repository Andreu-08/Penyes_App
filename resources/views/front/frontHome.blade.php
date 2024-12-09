@extends('front.layouts.front') <!-- Extiende de un layout base -->

@section('content')
<div class="container">
    <h1 class="title">Bienvenido a Les Penyes</h1>
    

    <div class="columns">
        <!-- Enlace a "Peñas" -->
        <div class="column">
            <a href="{{ route('front.crews.index') }}" class="box has-text-centered">
                <h2 class="title is-4">Peñas</h2>
                <p>Ver y gestionar tus peñas</p>
            </a>
        </div>
    </div>
</div>
@endsection
