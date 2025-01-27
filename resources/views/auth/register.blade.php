<!-- Modal Overlay -->
<div id="modal-register-overlay" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 z-40"></div>

<!-- Modal -->
<div id="modal-register" class="hidden fixed inset-0 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        <!-- Close Button -->
        <button id="close-register-modal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 text-2xl font-bold">
            &times;
        </button>

        <!-- Register Form -->
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
                        <a href="#" id="open-login-modal" class="font-medium text-slate-600 hover:text-slate-900">
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
    </div>
</div>
