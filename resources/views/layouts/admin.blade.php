<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('meta_title')
    </title>

    <!-- Scripts -->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!--
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('INC/jodit')
    @yield('tag_in_head')
</head>
<body>
    @include('layouts.admin_menu')
    <div class="pt-4">
        @include('INC.flash_message')
    </div>
    
    <div class="container">
        <div id="app">
        </div>
        
        @yield('content')
    </div>
    
</body>
</html>
