{{-- head para las vistas con la configuracion de blade y el icono de la aplicacion --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyes App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"> <!-- Enlace al CDN de Bulma -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('public/css/app.css')
</head>
