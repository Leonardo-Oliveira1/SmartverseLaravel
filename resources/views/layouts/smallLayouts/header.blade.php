<header>
    <script src="/view/js/hamburger.js"></script>
    <a href="/"><img src="{{ asset('css/img/logo.svg') }}" id="logo" alt="logo" style="margin-top: 4px;"></a>

    <div class="menu">

        <div class="burger" onclick="hamburguer()">
            <div class="hamburger1"></div>
            <div class="hamburger2"></div>
            <div class="hamburger3"></div>
        </div>

        <nav>
            <ul>
                <a href="/categoria/livros"><li>Livros</li></a>
                <a href="/categoria/cinema"><li>Cinema</li></a>
                <a href="/categoria/destaques"><li>Destaques</li></a>
            </ul>
        </nav>

        <div class="search-box">
            <form action="/buscar" method="GET">
                <input type="search" class="input-search" placeholder="..." value="<?php if(isset($query)){ echo $query; }else{ echo ""; } ?>" name="q">
                <button class="btn-search"><i class="fas fa-search"><img src="{{ asset('css/img/search.svg') }}" alt=""></i></button>
            </form>
        </div>

    </div>
</header>
