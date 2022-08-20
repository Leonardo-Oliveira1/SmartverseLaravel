
@extends('layouts.main')
@section('metadescription', 'Bem-vindo ao Smartverse. Conheça o nosso blog e veja os últimos tópicos sobre o universo de séries, filmes e livros.')
@section('title', 'Resultado da pesquisa')
@section('content')

    <h1 id="categoryTitle" style="padding-bottom: 30px"><center>RESULTADOS DA BUSCA POR: <span id="highlightText">{{ $query }}</center></span></h1>

    <div class="container">
        <div class="content">
                <div class="posts">
                    @include('layouts.smallLayouts.postInColumn')
                </div>
        </div>
    </div>

    <style>

        footer{
            margin-top: 100vh !important;
        }

    </style>

@endsection

