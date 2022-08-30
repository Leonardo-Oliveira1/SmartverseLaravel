@extends('dashboard.layouts.mainLayout')
@section('content')
<script>
    function popup(post_id, post_title, primitiveAction, pastVerb, URL){
    swal({

        title: 'Realmente deseja ' + primitiveAction + ' a postagem ' + post_title +'?',
        icon: 'warning',
        buttons: true,
        dangerMode: false,
    })
    .then((willDelete) => {
        if (willDelete) {
        setTimeout(function() {
            window.location.href = '?'+ URL + '=' + post_id;
        }, 1000);
        swal('Prontinho! A postagem foi ' + pastVerb + ' com sucesso!', {
            icon: 'success',
        });
        }
    });
}
</script>

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
                    <a class='dropdown-item' onclick="popup({{ $post->id }}, '{{ $post->title }}', 'fixar', 'fixada', 'LeftHighlight')">Destacar no post principal esquerdo</a>
                    <a class='dropdown-item' onclick="popup({{ $post->id }}, '{{ $post->title }}', 'fixar', 'fixada', 'RightHighlight')">Destacar no post principal direito</a>
                </div>
                    <div class='btn-group'>
                    <button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>🔥
                    </button>
                    <div class='dropdown-menu'>
                        @for ($i = 1; $i <= 5; $i++)
                            <a class='dropdown-item' onclick="popup({{ $post->id }}, '{{ $post->title }}', 'destacar', 'destacada', 'setMostRead{{$i}}')">Destacar nos mais lidos #{{ $i }}</a>
                        @endfor
                    </div>
                <div class='btn-group'>
                    <button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>🌟
                    </button>
                    <div class='dropdown-menu'>
                        @for ($i = 1; $i <= 5; $i++)
                            <a class='dropdown-item' onclick="popup({{ $post->id }}, '{{ $post->title }}', 'destacar', 'destacada', 'setRecommended1{{$i}}')">Destacar nos recomendados #{{ $i }}</a>
                        @endfor
                    </div>
                </div>
                <a onclick="popup({{ $post->id }}, '{{ $post->title }}', 'deletar', 'deletada', 'delete')"><button class='add btn btn-danger'>Deletar post</button></a>
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

