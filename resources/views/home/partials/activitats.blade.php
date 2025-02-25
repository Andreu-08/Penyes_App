<!-- Activitats i Horaris Section -->
<section id="actividades" class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold tracking-tight text-gray-800 mb-6">Activitats i Horaris</h2>
            <p class="text-gray-700 text-lg mb-10">Explora les nostres activitats i troba el millor moment per a gaudir de les festes</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="img/home/Taurinas.jpg" alt="Mañanas" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Events Taurins</h3>
                    <p class="text-gray-600 text-lg">Troba tots els esdeveniments i horaris de la nostra plaça</p>
                    <a href="#" onclick="showFakeEvents(event)" class="mt-4 inline-block px-6 py-3 bg-slate-500 text-slate-100 font-semibold rounded-full shadow-md hover:bg-slate-900  hover:shadow-lg focus:ring-2 focus:ring-blue-300">Més informació</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="img/home/Carpas.webp" alt="Tardes" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-semibold mb-3">Events Musicals</h3>
                    <p class="text-gray-600 text-lg">Troba tots els esdeveniments i horaris dels nostres escenaris</p>
                    <a href="#" onclick="showFakeEvents(event)" class="mt-4 inline-block px-6 py-3 bg-slate-500 text-slate-100 font-semibold rounded-full shadow-md hover:bg-slate-900  hover:shadow-lg focus:ring-2 focus:ring-blue-300">Més informació</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Función para mostrar eventos falsos en un SweetAlert con un diseño centrado y estilizado
    function showFakeEvents(event) {
        event.preventDefault();
        const eventsList = `
            <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; width: 100%;">
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 1</strong> - 2023-10-01
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 2</strong> - 2023-10-02
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 3</strong> - 2023-10-03
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 4</strong> - 2023-10-04
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 5</strong> - 2023-10-05
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 6</strong> - 2023-10-06
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 7</strong> - 2023-10-07
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 8</strong> - 2023-10-08
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 9</strong> - 2023-10-09
                </div>
                <div style="width: 80%; background: #f3f4f6; padding: 10px; border-radius: 6px; text-align: center;">
                    <strong>Evento 10</strong> - 2023-10-10
                </div>
            </div>
        `;
        Swal.fire({
            title: 'Listado de Eventos',
            html: eventsList,
            width: '600px',
            showCloseButton: true,
            focusConfirm: false,
            confirmButtonText: 'Cerrar',
            customClass: {
                confirmButton: 'bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded'
            },
            buttonsStyling: false
        });
    }
</script>
