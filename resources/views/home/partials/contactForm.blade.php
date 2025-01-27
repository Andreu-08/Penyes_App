<section class="space-y-6">
    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">Contacta amb nosaltres</h2>
    <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
        @csrf
        <div class="space-y-2">
            <label for="name" class="text-sm font-medium">Nombre</label>
            <input type="text" id="name" name="name" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-slate-500 focus:border-slate-500">
        </div>

        <div class="space-y-2">
            <label for="email" class="text-sm font-medium">Correo Electrónico</label>
            <input type="email" id="email" name="email" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-slate-500 focus:border-slate-500">
        </div>

        <div class="space-y-2">
            <label for="message" class="text-sm font-medium">Mensaje</label>
            <textarea id="message" name="message" required class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:ring-2 focus:ring-slate-500 focus:border-slate-500""></textarea>
        </div>

        <button type="submit" class="w-full rounded-md bg-slate-900 py-2 px-4 text-white font-medium hover:bg-slate-700 focus:ring-2 focus:ring-slate-500 focus:ring-offset-2">
            Enviar Mensaje
        </button>
    </form>
</section>