<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.logoSite')}}</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('images/cctirsz.png') }}" >

        <!-- Scripts -->
        <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>
    </head>
    <body>
        <div class="background-image"></div>
        @include('layouts._nave')
        <main>
            @yield('content')
        </main>
        @include('layouts._footer')

        <!-- Scripts -->
        <script src="/js/app.js"></script>
        
    </body>
</html>