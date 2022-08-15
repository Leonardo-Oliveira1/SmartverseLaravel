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
<header>

<body>

    <script src="/view/js/hamburger.js"></script>
    <a href="/index.php"><img src="{{ asset('css/img/logo.svg') }}" id="logo" alt="logo" style="margin-top: 4px;"></a>

    <div class="menu">

        <div class="burger" onclick="hamburguer()">
            <div class="hamburger1"></div>
            <div class="hamburger2"></div>
            <div class="hamburger3"></div>
        </div>

        <nav>
            <ul>
                <a href="/livros"><li>Livros</li></a>
                <a href="/series"><li>Séries</li></a>
                <a href="/destaques"><li>Destaques</li></a>
            </ul>
        </nav>

        <div class="search-box">
            <form action="/view/search.php" method="GET">
                <input type="search" class="input-search" placeholder="..." value="<?php if(isset($query)){ echo $query; }else{ echo ""; } ?>" name="q">
                <button class="btn-search"><i class="fas fa-search"><img src="{{ asset('css/img/search.svg') }}" alt=""></i></button>
            </form>
        </div>

    </div>
</header>

    @yield('content')

    <script src="{{ asset('js/hamburger.js') }}"></script>
</body>


<footer>&copy; Copyright 2022 - Smartverse</footer>
</html>
