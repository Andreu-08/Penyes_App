@extends('back.layouts.back')
@section('content')

<body>
    <main class="section">
        <div class="container">
            <!-- Sección del formulario de creación de usuario -->
            <section class="box">
                <header>
                    <h1 class="title has-text-centered">Crear Usuario</h1>
                </header>

                <!-- Formulario de registro de usuario -->
                <form method="POST" action="{{ route('back.users.store') }}" class="mt-5">
                    @csrf

                    <article class="columns is-multiline">
                        <!-- Campo de nombre -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="name" class="label">Nombre</label>
                                <div class="control">
                                    <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                                </div>
                                @error('name')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de apellido -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="surname" class="label">Apellido</label>
                                <div class="control">
                                    <input id="surname" type="text" class="input" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                                </div>
                                @error('surname')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de fecha de nacimiento -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="birthday" class="label">Fecha de Nacimiento</label>
                                <div class="control">
                                    <input id="birthday" type="date" class="input" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday">
                                </div>
                                @error('birthday')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de correo electrónico -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="email" class="label">Correo Electrónico</label>
                                <div class="control">
                                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="username">
                                </div>
                                @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de contraseña -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="password" class="label">Contraseña</label>
                                <div class="control">
                                    <input id="password" type="password" class="input" name="password" required autocomplete="new-password">
                                </div>
                                @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de confirmación de contraseña -->
                        <div class="column is-half">
                            <div class="field">
                                <label for="password_confirmation" class="label">Confirmar Contraseña</label>
                                <div class="control">
                                    <input id="password_confirmation" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                @error('password_confirmation')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Botón de envío -->
                        <div class="column is-full has-text-centered">
                            <button type="submit" class="button is-primary is-large">Crear Usuario</button>
                        </div>
                    </article>
                </form>
            </section>
        </div>
    </main>

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
