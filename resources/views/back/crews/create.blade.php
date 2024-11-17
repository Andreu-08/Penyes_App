@extends('back.layouts.back')
@section('content')

    @section('breadcrumbs')
        <li>
            <a href="{{ route('back.crews.index') }}" class="has-text-light">Peñas</a>
        </li>
        <li>
            <a href="{{ route('back.crews.create') }}" class="has-text-light">Crear Peña</a>
        </li>
    @endsection


<body>
    <main class="section">
        <div class="container">
            <!-- Sección del formulario de creación de crew -->
            <section class="box">
                <header>
                    <h1 class="title has-text-centered">Crear Crew</h1>
                </header>

                <!-- Formulario de registro de crew -->
                <form method="POST" action="{{ route('back.crews.store') }}" class="mt-5">
                    @csrf

                    <article class="columns is-multiline">
                        <!-- Campo de nombre -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="name" class="label">Nombre</label>
                                <div class="control">
                                    <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                @error('name')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de color -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="color" class="label">Color</label>
                                <div class="control">
                                    <input id="color" type="text" class="input" name="color" value="{{ old('color') }}" required>
                                </div>
                                @error('color')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de slogan -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="slogan" class="label">Slogan</label>
                                <div class="control">
                                    <input id="slogan" type="text" class="input" name="slogan" value="{{ old('slogan') }}" required>
                                </div>
                                @error('slogan')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de capacidad -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="capacity" class="label">Capacidad</label>
                                <div class="control">
                                    <input id="capacity" type="number" class="input" name="capacity" value="{{ old('capacity') }}" required>
                                </div>
                                @error('capacity')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de fecha de fundación -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="foundation" class="label">Fecha de Fundación</label>
                                <div class="control">
                                    <input id="foundation" type="date" class="input" name="foundation" value="{{ old('foundation') }}" required>
                                </div>
                                @error('foundation')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Botón de envío -->
                        <div class="column is-full has-text-centered">
                            <button type="submit" class="button is-primary is-large">Crear Crew</button>
                        </div>
                    </article>
                </form>
            </section>
        </div>
    </main>

    <!-- Notificaciones -->
    @if (session('success'))
        <div class="notification is-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
@endsection
