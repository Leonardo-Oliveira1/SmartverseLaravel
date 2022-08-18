<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="{{ asset('css/img/moon_logo.svg') }}">
        <meta name="description" content="@yield('metadescription')">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <title>@yield('title') - Smartverse</title>
    </head>

    <body>
    @include('layouts.smallLayouts.header')

    @yield('content')

    <script src="{{ asset('js/hamburger.js') }}"></script>
</body>


    @include('layouts.smallLayouts.footer')
</html>
