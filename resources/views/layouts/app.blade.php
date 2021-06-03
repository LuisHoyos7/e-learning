<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'e-learning') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C700&ver=5.6.2" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
    <link href="{{ asset('css/app-gth.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('components.header')

        <main class="animate__animated animate__fadeInLeft">
            @yield('content')
        </main>
        @include('components.footer')
    </div>
    @yield('scripts')
</body>

</html>
