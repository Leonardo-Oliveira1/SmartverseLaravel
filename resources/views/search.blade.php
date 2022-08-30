
@extends('layouts.main')
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

