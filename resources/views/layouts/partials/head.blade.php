{{-- head para las vistas con la configuracion de blade y el icono de la aplicacion --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyes App</title>
    <link rel="icon" href="/path/to/favicon.ico"> <!-- Cambia este path según tu favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"> <!-- Enlace al CDN de Bulma -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>