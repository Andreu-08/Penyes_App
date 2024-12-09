@extends('front.layouts.front')

@section('content')
<div class="container is-fluid">
    <div class="box">
        <h1 class="title">{{ $crew->name }}</h1>
        <p><strong>Capacidad:</strong> {{ $crew->capacity }}</p>
        <p><strong>Color:</strong> {{ $crew->color }}</p>
        <p><strong>Eslogan:</strong> {{ $crew->slogan }}</p>
        <p><strong>Fundación:</strong> {{ $crew->foundation }}</p>

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
                <button type="submit" class="button is-info">Solicitar Membresía</button>
            </form>
        @endauth
    </div>
</div>
@endsection

