@extends('front.layouts.front')

@section('content')
<div class="container">
    <h1 class="title">{{ $crew->name }}</h1>
    <p>Capacidad: {{ $crew->capacity }}</p>
    <p>Color: {{ $crew->color }}</p>
    <p>Eslogan: {{ $crew->slogan }}</p>
    <p>Fundación: {{ $crew->foundation }}</p>

    @auth
        @if (session('success'))
            <div class="notification is-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="notification is-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('front.crews.requestMembership', $crew) }}">
            @csrf
            <button type="submit" class="button is-primary">Solicitar Membresía</button>
        </form>
    @endauth
</div>
@endsection

