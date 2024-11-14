


<body>
    <section class="section">
        <div class="container box" style="border: 1px solid #dbdbdb; padding: 20px; max-width: 600px; margin: 0 auto;">
            <h1 class="title is-4 has-text-primary">Nuevo Mensaje de Contacto</h1>

            <div class="content">
                <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
                <p><strong>Email:</strong> {{ $details['email'] }}</p>
                <p><strong>Mensaje:</strong></p>
                <div class="box" style="background-color: #f5f5f5; padding: 10px;">
                    {{ $details['message'] }}
                </div>
            </div>
        </div>
    </section>
</body>
</html>
