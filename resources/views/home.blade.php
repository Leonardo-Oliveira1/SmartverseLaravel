
@extends('layouts.main')
@section('metadescription', 'Bem-vindo ao Smartverse. Conheça o nosso blog e veja os últimos tópicos sobre o universo de séries, filmes e livros.')
@section('title', 'Home')
@section('content')
<div class="container">
    <a href="/dashboard">Dashboard</a>

<div class="Postshighlights">

    <!--LEFT HIGHLIGHT-->
    <a href='view/{{$LeftHighlight->post_link}}/'>
        <div class='Posthighlighted'>
            <img src="{{ asset('posts_banners/'. $LeftHighlight->thumb_image) }}" alt='publicação destacada'>
            <div class='highlightContent'>
                <h1>{{ $LeftHighlight->title }}</h1>
            </div>
        </div>
    </a>


    <!--RIGHT HIGHLIGHT-->
    <a href='view/{{$RightHighlight->post_link}}/'>
        <div class='Posthighlighted'>
            <img src="{{ asset('posts_banners/'. $RightHighlight->thumb_image) }}" alt='publicação destacada'>
            <div class='highlightContent2'>
                <h1>{{ $RightHighlight->title }}</h1>
            </div>
        </div>
    </a>

</div>


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
                        <p>Em {{ $post->category }} • {{ date('d/m/Y', strtotime($post->created_at))}}</p>
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



<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/infinitescroll.js') }}"></script>
@endsection
