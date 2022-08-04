
@extends('layouts.main')
@section('metadescription', 'Bem-vindo ao Smartverse. Conheça o nosso blog e veja os últimos tópicos sobre o universo de séries, filmes e livros.')
@section('title', 'Home')
@section('content')
<div class="container">

    <a href="/dashboard">Dashboard</a>

    <div class="Postshighlights">
        <!--LEFT HIGHLIGHT-->
        <a href='view/{{$LeftHighlight->slug}}/'>
            <div class='Posthighlighted'>
                <img src="{{ asset('posts_banners/'. $LeftHighlight->thumb_image) }}" alt='publicação destacada'>
                <div class='highlightContent'>
                    <h1>{{ $LeftHighlight->title }}</h1>
                </div>
            </div>
        </a>

        <!--RIGHT HIGHLIGHT-->
        <a href='view/{{$RightHighlight->slug}}/'>
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
            @include('layouts.smallLayouts.postInRow')
        </div>

        <div class="CTAs">
            @include('layouts.smallLayouts.CTAs')
        </div>

    </div>
</div>



<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/infinitescroll.js') }}"></script>
@endsection
