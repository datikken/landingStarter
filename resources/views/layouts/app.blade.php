<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Case') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        id="fa-css"
        href="http://pn-techno.ru/wp-content/themes/tempelate/css/font-awesome.css?ver=4.9.3"
        rel="stylesheet"
        type="text/css"
        media="all"
    >

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <main class="main">
        @include('components.navbar')
        @yield('content')
    </main>

    <script src="{{ asset('js/vendor/gsap/gsap.min.js') }}" defer></script>
</body>
</html>
