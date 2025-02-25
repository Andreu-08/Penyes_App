{{-- filepath: /home/andreuor/Proyecto_2DAW/Penyes_App/resources/views/profile/edit.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ...existing meta y configuración... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil - Les Penyes</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favico.ico') }}">
    @vite('public/css/app.css')
</head>
<body class="min-h-screen bg-background">
    <header class="border-b bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60 sticky top-0 z-50" role="banner">
        <nav class="container mx-auto px-4" aria-label="Navegación principal">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a href="{{ route('front.frontHome') }}" class="flex items-center space-x-2" aria-label="Inicio">
                        <!-- Se aumenta el logo a h-20 y se añade object-contain para que se ajuste sin afectar el header -->
                        <img src="{{ asset('img/back/logoPenyes.png') }}" alt="Logo Les Penyes" class="h-20 w-auto object-contain">
                    </a>
                </div>
                <div class="text-lg font-semibold">Mi Perfil</div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors" aria-label="Editar perfil">
                        {{ Auth::user()->name }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline" aria-label="Cerrar sesión">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8" role="main">
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- Datos del Usuario -->
            <section class="rounded-lg border bg-card text-card-foreground shadow-sm" aria-labelledby="datos-personales">
                <div class="p-6">
                    <h2 id="datos-personales" class="text-2xl font-bold mb-6 text-center">Datos Personales</h2>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="flex flex-col items-center text-center p-4 border rounded-lg bg-gray-100">
                            <span class="text-lg font-semibold text-gray-800">Nombre</span>
                            <span class="mt-2 text-gray-600">{{ $user->name }}</span>
                        </div>
                        <div class="flex flex-col items-center text-center p-4 border rounded-lg bg-gray-100">
                            <span class="text-lg font-semibold text-gray-800">Email</span>
                            <span class="mt-2 text-gray-600">{{ $user->email }}</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Información del perfil -->
            <section class="rounded-lg border bg-card text-card-foreground shadow-sm" aria-labelledby="info-perfil">
                <div class="p-6">
                    <h2 id="info-perfil" class="text-xl font-semibold mb-4">Información del Perfil</h2>
                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>
                    <form method="post" action="{{ route('profile.update') }}" novalidate aria-describedby="profile-update-desc">
                        @csrf
                        @method('patch')
                        <!-- ...Campos de nombre y apellido... -->
                        <div class="grid gap-4 md:grid-cols-2">
                            <div>
                                <label for="name" class="text-sm font-medium text-muted-foreground">Nombre</label>
                                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus class="mt-1 block w-full border rounded-md p-2">
                                @if ($errors->has('name'))
                                    <p role="alert" class="text-red-500 text-sm">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div>
                                <label for="surname" class="text-sm font-medium text-muted-foreground">Apellido</label>
                                <input id="surname" name="surname" type="text" value="{{ old('surname', $user->surname) }}" required class="mt-1 block w-full border rounded-md p-2">
                                @if ($errors->has('surname'))
                                    <p role="alert" class="text-red-500 text-sm">{{ $errors->first('surname') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="email" class="text-sm font-medium text-muted-foreground">Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required class="mt-1 block w-full border rounded-md p-2">
                            @if ($errors->has('email'))
                                <p role="alert" class="text-red-500 text-sm">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div class="mt-2 bg-yellow-100 p-3 rounded-md" role="alert">
                                <p class="text-yellow-800 text-sm">Tu dirección de correo no está verificada.</p>
                                <button form="send-verification" class="text-blue-500 hover:underline text-sm">
                                    Haz clic aquí para reenviar el email de verificación.
                                </button>
                                @if (session('status') === 'verification-link-sent')
                                    <p class="text-green-500 text-sm mt-2">Se ha enviado un nuevo enlace de verificación a tu correo electrónico.</p>
                                @endif
                            </div>
                        @endif
                        <div class="mt-4 flex space-x-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Guardar</button>
                            @if (session('status') === 'profile-updated')
                                <p class="text-green-500 text-sm mt-2">Guardado.</p>
                            @endif
                        </div>
                    </form>
                </div>
            </section>

            <!-- Actualización de contraseña -->
            <section class="rounded-lg border bg-card text-card-foreground shadow-sm" aria-labelledby="update-password">
                <div class="p-6">
                    <h2 id="update-password" class="text-xl font-semibold mb-4">Actualizar Contraseña</h2>
                    <form method="post" action="{{ route('password.update') }}" novalidate>
                        @csrf
                        @method('put')
                        <div class="grid gap-4">
                            <div>
                                <label for="update_password_current_password" class="text-sm font-medium text-muted-foreground">Contraseña Actual</label>
                                <input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full border rounded-md p-2" autocomplete="current-password">
                            </div>
                            <div>
                                <label for="update_password_password" class="text-sm font-medium text-muted-foreground">Nueva Contraseña</label>
                                <input id="update_password_password" name="password" type="password" class="mt-1 block w-full border rounded-md p-2" autocomplete="new-password">
                            </div>
                            <div>
                                <label for="update_password_password_confirmation" class="text-sm font-medium text-muted-foreground">Confirmar Contraseña</label>
                                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full border rounded-md p-2" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Guardar</button>
                            @if (session('status') === 'password-updated')
                                <p class="text-green-500 text-sm mt-2">Guardado.</p>
                            @endif
                        </div>
                    </form>
                </div>
            </section>

            <!-- Eliminación de usuario -->
            <section class="rounded-lg border bg-card text-card-foreground shadow-sm" aria-labelledby="delete-account">
                <div class="p-6">
                    <h2 id="delete-account" class="text-xl font-semibold mb-4">Eliminar Cuenta</h2>
                    <button id="open-delete-modal" type="button" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700">
                        Eliminar Cuenta
                    </button>
                    <section id="confirm-user-deletion" class="hidden mt-4 p-4 border rounded-lg bg-red-50" aria-modal="true" role="dialog">
                        <form method="post" action="{{ route('profile.destroy') }}" novalidate>
                            @csrf
                            @method('delete')
                            <h2 class="text-lg font-bold">¿Estás seguro de que deseas eliminar tu cuenta?</h2>
                            <div class="mt-2">
                                <label for="password" class="block text-sm font-medium">Contraseña</label>
                                <input id="password" name="password" type="password" class="mt-1 block w-full border rounded-md p-2" placeholder="Introduce tu contraseña">
                                @if ($errors->userDeletion->has('password'))
                                    <p role="alert" class="text-red-500 text-sm mt-1">{{ $errors->userDeletion->first('password') }}</p>
                                @endif
                            </div>
                            <div class="mt-4 flex space-x-4">
                                <button id="cancel-delete" type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                                    Cancelar
                                </button>
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700">
                                    Confirmar Eliminación
                                </button>
                            </div>
                        </form>
                    </section>
                </div>
            </section>
        </div>
    </main>

    <footer class="border-t bg-muted/40 mt-auto" role="contentinfo">
        <div class="container mx-auto px-4 py-8 text-center">
            <p class="text-sm text-muted-foreground">
                &copy; {{ date('Y') }} <span class="font-semibold">Les Penyes en Festes</span>. Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <!-- Se sugiere mover los scripts a un fichero JS externo -->
    <script>
        // Ejemplo de reemplazo del onclick inline para mostrar/ocultar el modal de eliminación
        document.getElementById('open-delete-modal').addEventListener('click', function() {
            document.getElementById('confirm-user-deletion').classList.remove('hidden');
        });
        document.getElementById('cancel-delete').addEventListener('click', function() {
            document.getElementById('confirm-user-deletion').classList.add('hidden');
        });
    </script>
</body>
</html>
