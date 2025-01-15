<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    @vite('public/css/app.css')
</head>
<body class="min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="border-b bg-white/90 backdrop-blur-md sticky top-0 z-50">
        <nav class="container mx-auto px-4">
            <div class="flex h-16 items-center justify-between">
                <!-- Navbar Brand -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <img src="{{ asset('img/back/logoPenyes.png') }}" alt="Logo" class="h-16 w-auto">
                    </a>
                </div>

                <!-- Navbar Items -->
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/log') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                                Log
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                                Login
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <main class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-slate-800">
                    Registro
                </h2>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="space-y-4">
                    <div>
                        <label for="name" class="sr-only">Nombre</label>
                        <input id="name" name="name" type="text" required class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:border-slate-800" placeholder="Nombre" value="{{ old('name') }}" autofocus autocomplete="name">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="surname" class="sr-only">Apellido</label>
                        <input id="surname" name="surname" type="text" required class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:border-slate-800" placeholder="Apellido" value="{{ old('surname') }}" autocomplete="surname">
                        @error('surname')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="birthday" class="sr-only">Fecha de Nacimiento</label>
                        <input id="birthday" name="birthday" type="date" required class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:border-slate-800" value="{{ old('birthday') }}" autocomplete="birthday">
                        @error('birthday')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="sr-only">Correo Electrónico</label>
                        <input id="email" name="email" type="email" required class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:border-slate-800" placeholder="Correo electrónico" value="{{ old('email') }}" autocomplete="username">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="sr-only">Contraseña</label>
                        <input id="password" name="password" type="password" required class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:border-slate-800" placeholder="Contraseña" autocomplete="new-password">
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="sr-only">Confirmar Contraseña</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:border-slate-800" placeholder="Confirmar contraseña" autocomplete="new-password">
                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="text-sm">
                        <a href="{{ route('login') }}" class="font-medium text-slate-600 hover:text-slate-900">
                            ¿Ya estás registrado?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-slate-800 hover:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-800">
                        Registrar
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
