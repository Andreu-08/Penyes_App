

@include('home.partials.head')
<body>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-primary">Nuevo mensaje de contacto</h1>
            
            <div class="box">
                <p><strong>Nombre del remitente:</strong> <span class="has-text-weight-semibold">{{ $details['name'] }}</span></p>
                <p><strong>Correo del remitente:</strong> <span class="has-text-weight-semibold">{{ $details['email'] }}</span></p>
                <p><strong>Asunto:</strong> <span class="has-text-weight-semibold">{{ $details['subject'] }}</span></p>
                
                <hr>
                
                <p><strong>Mensaje:</strong></p>
                <div class="content">
                    <p>{{ $details['message'] }}</p>
                </div>
            </div>
            
            <p class="has-text-grey is-italic">Este mensaje fue enviado desde el formulario de contacto en la página principal.</p>
        </div>
    </section>
</body>

