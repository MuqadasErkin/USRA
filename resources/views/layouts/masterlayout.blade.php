<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{{-- ------------- --}}
{{-- <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <script src="/../../public/js/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{-- -------------------- --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <main class="py-6">
                 @include('layouts.navbar')
                @yield('content')
                {{-- @include('layouts.footer') --}}
            </main>
</body>
</html>