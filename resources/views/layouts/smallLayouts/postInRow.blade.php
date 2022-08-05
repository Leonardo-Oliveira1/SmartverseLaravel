@foreach($posts as $post)

    <a href='/view/{{ $post->slug }}'>
        <div class='post'>

            <div id='postImage'>
                <img src="{{ asset('/storage/posts_banners/' . $LeftHighlight->thumb_image) }}" alt="{{ $post->title }}">
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
