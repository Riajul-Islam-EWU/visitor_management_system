<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Visitor Management System' }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/d15fd0f500.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="icon" href="/images/Softkit_logo_32x32.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <style>

        body {
            background-color: slategrey;
        }
        
        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="d-flex h-100">
    <div class="d-flex w-100 h-100 mx-auto flex-column">
        <header class="m-0">
            @yield('nav')
        </header>

        <main class="m-0">
            @yield('content')
        </main>

        <footer class="mt-auto">
            @yield('foot')
        </footer>
    </div>
</body>

</html>
