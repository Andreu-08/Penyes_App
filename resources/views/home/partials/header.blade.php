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

            <!-- Navbar Links -->
            <div class="flex items-center space-x-6">
                <a href="#actividades" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                    Actividades
                </a>
                <a href="#contacto" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                    Contacto
                </a>
                <a href="#ubicacion" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                    Ubicación
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
                        <a href="#" id="open-login-modal" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                            Login
                        </a>
                    
                        @if (Route::has('register'))
                        <a href="#" id="open-register-modal" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                            Register
                        </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>
</header>

