<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Penyes App</title>  
    </head>
    <body>
        <h1 class="title">Bienvenido a Penyes App</h1>
        <header>
            @if (Route::has('login'))
                <nav>
                    @auth
                    <a href="{{ url('/log') }}">Log</a>
                    @else
                    <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header> 
    </body>            
</html>
