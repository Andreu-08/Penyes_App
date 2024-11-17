@extends('back.layouts.back')

@section('content')
<div class="container">
    <!-- Título principal -->
    <div class="content">
        <h1 class="title is-3 has-text-left mt-5">Bienvenido al BackOffice {{ Auth::user()->name }}</h1>
        <p class="subtitle has-text-left">Esta es la página principal del panel de administración.</p>
    </div>
    <hr>
    <!-- Tabla de accesos rápidos -->
    <div class="box">
        <table class="table is-fullwidth is-hoverable">
            <tbody>
                <tr>
                    <td><strong>Usuarios</strong></td>
                    <td>Gestiona todos los usuarios registrados en el sistema.</td>
                    <td>
                        <a href="{{ route('back.users.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg>                        </a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Peñas</strong></td>
                    <td>Administra los diferentes crews y sus detalles.</td>
                    <td>
                        <a href="{{ route('back.crews.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Plataformas</strong></td>
                    <td>Gestiona las plataformas utilizadas en el sistema.</td>
                    <td>
                        <a href="{{ route('back.platforms.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Sorteos</strong></td>
                    <td>Controla los sorteos y sus detalles.</td>
                    <td>
                        <a href="{{ route('back.draws.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg></a>
                    </td>
                </tr>
                <tr>
                    <td><strong>Pagos</strong></td>
                    <td>Gestiona los pagos realizados en la plataforma.</td>
                    <td>
                        <a href="{{ route('back.payments.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
</div>
@endsection
