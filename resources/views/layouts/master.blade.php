<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <script src="https://kit.fontawesome.com/0cc7091e76.js" crossorigin="anonymous"></script>

        <script src="{{ mix('js/app.js') }}" defer></script>
        <link href="/css/app.css" rel="stylesheet">

        @livewireStyles
        
    </head>
    <body class="antialiased" id="app">

        @yield('content')
        @livewireStyles
    </body>
</html>
