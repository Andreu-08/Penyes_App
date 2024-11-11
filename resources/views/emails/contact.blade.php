{{-- resources/views/emails/contact.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" rel="stylesheet">
</head>
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
