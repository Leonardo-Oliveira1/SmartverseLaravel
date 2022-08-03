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
            @include('layouts.smallLayouts.postInRow')
        </div>

        <div class="CTAs">
            @include('layouts.smallLayouts.CTAs')
        </div>

    </div>

</div>

@endsection
