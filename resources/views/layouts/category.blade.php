@extends('layouts.main')
@section('metadescription', 'Bem-vindo ao Smartverse. Conheça o nosso blog e veja os últimos tópicos sobre o universo de séries, filmes e livros.')
@section('content')

<div class="container">

    <h1 id="categoryTitle"><center>Bem-vindo(a) à categoria de <span id="highlightText">@yield('category')</span></h1>
    <h2 id="categoryText"> Últimas postagens </h2>

    <style>

       @media only screen and (max-width: 951px){
           .content{
               flex-direction: column !important;
            }
        }

    </style>

    <div class="content">
        <div class="posts">
            @foreach($posts as $post)
            <a href='/view/{{ $post->post_link }}'>
                <div class='post'>
                    <div id='postImage'>
                        <img src="{{ asset('posts_banners/'. $post->thumb_image) }}" alt="{{ $post->title }}">
                    </div>
                    <div class='postContent'>
                        <h2>{{ $post->title }}</h2>
                        <p>Por {{ $post->author }}</p>

                        <div class='CategoryAndLikes'>
                            <p>Em {{ $post->category }} • {{ date('d/m/Y', strtotime($post->publication_date))}}</p>
                        </div>

                    </div>
                </div>
            </a>
            <hr>
            @endforeach
            </div>

            <div class="CTAs">
                <div class="MostRead">
                    <div class="divText">
                        <h2>Mais lidos 🔥</h2>
                    </div>

                    <a href='{{ $MostRead1->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>1</span>
                            <h3>{{ $MostRead1->title }}</h3>
                        </div>
                    </a>

                    <a href='{{ $MostRead2->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>2</span>
                            <h3>{{ $MostRead2->title }}</h3>
                        </div>
                    </a>

                    <a href='{{ $MostRead3->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>3</span>
                            <h3>{{ $MostRead3->title }}</h3>
                        </div>
                    </a>

                    <a href='{{ $MostRead4->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>4</span>
                            <h3>{{ $MostRead4->title }}</h3>
                        </div>
                    </a>

                    <a href='{{ $MostRead5->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>5</span>
                            <h3>{{ $MostRead5->title }}</h3>
                        </div>
                    </a>

                </div>

                <div class="Recommended">
                    <div class="divText">
                        <h2>Recomendados 🌟</h2>
                    </div>

                    <a href='{{ $Recommended1->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>1</span>
                            <h3>{{ $Recommended1->title }}</h3>
                        </div>
                    </a>

                    <a href='{{ $Recommended2->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>2</span>
                            <h3>{{ $Recommended2->title }}</h3>
                        </div>
                    </a>

                    <a href='{{ $Recommended3->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>3</span>
                            <h3>{{ $Recommended3->title }}</h3>
                        </div>
                    </a>

                    <a href='{{ $Recommended4->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>4</span>
                            <h3>{{ $Recommended4->title }}</h3>
                        </div>
                    </a>

                    <a href='{{ $Recommended5->post_link }}/'>
                        <div class='classificationDiv'>
                            <span id='classification'>5</span>
                            <h3>{{ $Recommended5->title }}</h3>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>

@endsection
