@extends('dashboard.layouts.mainLayout')
@section('content')

<div class="row">
    <div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Postagens</h4>
        <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                <th> Título </th>
                <th> Data </th>
                <th> Autor </th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <td style='max-width: 240px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>
                <span><a href='/post/{{$post->category}}/{{ $post->slug }}'>{{ $post->title }}</a></span>
                </td>
                <td> {{ date('d/m/Y', strtotime($post->created_at))}} </td>
                <td> {{ $post->author }} </td>
                <td>
                <a href='editPost={{ $post->id }}'><button class='add btn btn-primary'>✏️</button></a>
                <div class='btn-group'>
                    <button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>📌
                    </button>
                    <div class='dropdown-menu'>
                    <a class='dropdown-item' href='?LeftHighlight={{ $post->id }}'>Destacar no post principal esquerdo</a>
                    <a class='dropdown-item' href='?RightHighlight={{ $post->id }}'>Destacar no post principal direito</a>
                </div>
                    <div class='btn-group'>
                    <button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>🔥
                    </button>
                    <div class='dropdown-menu'>
                        <a class='dropdown-item' href='?setMostRead1={{ $post->id }}'>Destacar nos mais lidos #1</a>
                        <a class='dropdown-item' href='?setMostRead2={{ $post->id }}'>Destacar nos mais lidos #2</a>
                        <a class='dropdown-item' href='?setMostRead3={{ $post->id }}'>Destacar nos mais lidos #3</a>
                        <a class='dropdown-item' href='?setMostRead4={{ $post->id }}'>Destacar nos mais lidos #4</a>
                        <a class='dropdown-item' href='?setMostRead5={{ $post->id }}'>Destacar nos mais lidos #5</a>
                    </div>
                <div class='btn-group'>
                    <button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>🌟
                    </button>
                    <div class='dropdown-menu'>
                        <a class='dropdown-item' href='?setRecommended1={{ $post->id }}'>Destacar nos recomendados #1</a>
                        <a class='dropdown-item' href='?setRecommended2={{ $post->id }}'>Destacar nos recomendados #2</a>
                        <a class='dropdown-item' href='?setRecommended3={{ $post->id }}'>Destacar nos recomendados #3</a>
                        <a class='dropdown-item' href='?setRecommended4={{ $post->id }}'>Destacar nos recomendados #4</a>
                        <a class='dropdown-item' href='?setRecommended5={{ $post->id }}'>Destacar nos recomendados #5</a>
                    </div>
                </div>
                <a href='?delete={{ $post->id }}'><button class='add btn btn-danger'>Deletar post</button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>


@endsection

