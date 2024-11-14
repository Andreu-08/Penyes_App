@extends('back.layouts.back')

@section('content')
<div class="container">
    <h1 class="title is-3">Bienvenido, {{ Auth::user()->name }}</h1>
    <p class="subtitle">Esta es la página principal del panel de administración.</p>

    <!-- Tarjetas de Acceso Rápido -->
    <div class="columns is-multiline">
        <!-- Tarjeta de Usuarios -->
        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-content">
                    <span class="icon is-large"><i class="fas fa-users fa-2x"></i></span>
                    <h2 class="title is-4">Usuarios</h2>
                    <p>Gestiona todos los usuarios registrados en el sistema.</p>
                    <a href="{{ route('back.users.index') }}" class="button is-link mt-2">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Crews -->
        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-content">
                    <span class="icon is-large"><i class="fas fa-users-cog fa-2x"></i></span>
                    <h2 class="title is-4">Crews</h2>
                    <p>Administra los diferentes crews y sus detalles.</p>
                    <a href="{{ route('back.crews.index') }}" class="button is-link mt-2">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Plataformas -->
        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-content">
                    <span class="icon is-large"><i class="fas fa-tv fa-2x"></i></span>
                    <h2 class="title is-4">Plataformas</h2>
                    <p>Gestiona las plataformas utilizadas en el sistema.</p>
                    <a href="{{ route('back.platforms.index') }}" class="button is-link mt-2">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Sorteos -->
        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-content">
                    <span class="icon is-large"><i class="fas fa-ticket-alt fa-2x"></i></span>
                    <h2 class="title is-4">Sorteos</h2>
                    <p>Controla los sorteos y sus detalles.</p>
                    <a href="{{ route('back.draws.index') }}" class="button is-link mt-2">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Pagos -->
        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-content">
                    <span class="icon is-large"><i class="fas fa-credit-card fa-2x"></i></span>
                    <h2 class="title is-4">Pagos</h2>
                    <p>Gestiona los pagos realizados en la plataforma.</p>
                    <a href="{{ route('back.payments.index') }}" class="button is-link mt-2">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
