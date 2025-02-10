<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Peña - Les Penyes</title>
    <link rel="icon" href="/path/to/favicon.ico">
    @vite('public/css/app.css')
</head>
<body class="min-h-screen bg-background">
    <!-- Header -->
    <header class="border-b bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60 sticky top-0 z-50">
        <nav class="container mx-auto px-4">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a href="{{ route('front.frontHome') }}" class="flex items-center space-x-2">
                        <img src="{{ asset('img/back/logoPenyes.png') }}" alt="Logo" class="h-16 w-auto">
                    </a>
                </div>
                <div class="text-lg font-semibold">Detalles de la Peña</div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">
                        {{ Auth::user()->name }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- Información de la Peña -->
            <section class="rounded-lg border bg-card text-card-foreground shadow-sm">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h1 class="text-2xl font-bold">{{ $crew->name }}</h1>
                        @auth
                        <form method="POST" action="{{ route('front.crews.requestMembership', $crew) }}">
                            @csrf
                            <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                Solicitar Membresía
                            </button>
                        </form>
                        @endauth
                    </div>
                    <p class="text-muted-foreground mb-4"><strong>Color:</strong> {{ $crew->color }}</p>
                    <p class="text-muted-foreground mb-4"><strong>Eslogan:</strong> {{ $crew->slogan }}</p>
                    <div class="grid gap-4 md:grid-cols-3">
                        <div>
                            <div class="text-sm font-medium text-muted-foreground">Capacidad</div>
                            <div class="mt-1 font-medium">{{ $crew->capacity }}</div>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-muted-foreground">Fundación</div>
                            <div class="mt-1 font-medium">{{ $crew->foundation }}</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mensajes de éxito/error -->
            @auth
            @if (session('success'))
                <div class="rounded-lg border bg-green-100 text-green-800 p-4">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="rounded-lg border bg-red-100 text-red-800 p-4">{{ session('error') }}</div>
            @endif
            @endauth

        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t bg-muted/40 mt-auto">
        <div class="container mx-auto px-4 py-8 text-center">
            <p class="text-sm text-muted-foreground">
                &copy; {{ date('Y') }} <span class="font-semibold">Les Penyes en Festes</span>. Todos los derechos reservados.
            </p>
        </div>
    </footer>
</body>
</html>
