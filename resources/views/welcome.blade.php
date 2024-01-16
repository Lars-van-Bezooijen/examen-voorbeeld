<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css">
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="nav-menu">

                @auth
                    <a href="{{route('dashboard')}}">Dashboard</a>
                @else
                    <a href="{{route('login')}}">Login</a>
                @endauth
            </div>
            <h1 class="text-center">SUPER SOLAR PANELS</h1>
            @livewire('form')

        </div>
    </body>
</html>
