@extends('back.layouts.back')

 {{-- seccion para que aparezca el poth de la pagina en el header  --}}
    @section('breadcrumbs')
        <li>
            <a href="{{ route('back.crews.index') }}" class="has-text-light">Peñas</a>
        </li>
        <li>
            <a href="{{ route('back.crews.edit', $crew->id) }}" class="has-text-light">
                Editar: {{ $crew->name }}
            </a>
        </li>
    @endsection



@section('content')
<body>
    <main class="section">
        <div class="container">
            <section class="box">
                <h1 class="title has-text-centered">Editar Peña</h1>

                <!-- Formulario de edición -->
                <form method="POST" action="{{ route('back.crews.update', $crew->id) }}" class="mt-5">
                    @csrf
                    @method('PUT') <!-- Indica que estamos realizando una actualización -->

                    <div class="columns is-multiline">
                        <!-- Campo de nombre -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="name" class="label">Nombre</label>
                                <div class="control">
                                    <input id="name" type="text" class="input" name="name" value="{{ old('name', $crew->name) }}" required autocomplete="name">
                                </div>
                                @if ($errors->has('name'))
                                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                        </div>

                        <!-- Campo de color -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="color" class="label">Color</label>
                                <div class="control">
                                    <input id="color" type="text" class="input" name="color" value="{{ old('color', $crew->color) }}" required autocomplete="color">
                                </div>
                                @if ($errors->has('color'))
                                    <p class="help is-danger">{{ $errors->first('color') }}</p>
                                @endif
                            </div>
                        </div>

                        <!-- Campo de slogan -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="slogan" class="label">Slogan</label>
                                <div class="control">
                                    <input id="slogan" type="text" class="input" name="slogan" value="{{ old('slogan', $crew->slogan) }}" required autocomplete="slogan">
                                </div>
                                @if ($errors->has('slogan'))
                                    <p class="help is-danger">{{ $errors->first('slogan') }}</p>
                                @endif
                            </div>
                        </div>

                        <!-- Campo de capacidad -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="capacity" class="label">Capacidad</label>
                                <div class="control">
                                    <input id="capacity" type="number" class="input" name="capacity" value="{{ old('capacity', $crew->capacity) }}" required autocomplete="capacity">
                                </div>
                                @if ($errors->has('capacity'))
                                    <p class="help is-danger">{{ $errors->first('capacity') }}</p>
                                @endif
                            </div>
                        </div>

                        <!-- Campo de fecha de fundación -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="foundation" class="label">Fecha de Fundación</label>
                                <div class="control">
                                    <input id="foundation" type="date" class="input" name="foundation" value="{{ old('foundation', $crew->foundation) }}" required autocomplete="foundation">
                                </div>
                                @if ($errors->has('foundation'))
                                    <p class="help is-danger">{{ $errors->first('foundation') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Botones de acción -->
                    <div class="columns is-centered mt-4">
                        <div class="column is-narrow">
                            <a href="{{ route('back.crews.index') }}" class="button is-link is-light">Cancelar</a>
                        </div>
                        <div class="column is-narrow">
                            <button type="submit" class="button is-primary">Actualizar Peña</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
@endsection
