<a href='/post/{{ $MostRead1->category }}/{{ $MostRead1->slug }}'>
    <div class='post'>

        <div id='postImage'>
            <img src="{{ asset('storage/posts_banners/' . $MostRead1->thumb_image) }}" alt="{{ $MostRead1->title }}">
        </div>

        <div class='postContent'>
            <h2>{{ $MostRead1->title }}</h2>
            <p>Por {{ $MostRead1->author }}</p>

            <div class='CategoryAndLikes'>
                <p>Em {{ $MostRead1->category }} • {{ date('d/m/Y', strtotime($MostRead1->created_at))}}</p>
            </div>
        </div>

    </div>
</a>
<hr>

<a href='/post/{{ $MostRead2->category }}/{{ $MostRead2->slug }}'>
    <div class='post'>

        <div id='postImage'>
            <img src="{{ asset('storage/posts_banners/' . $MostRead2->thumb_image) }}" alt="{{ $MostRead2->title }}">
        </div>

        <div class='postContent'>
            <h2>{{ $MostRead2->title }}</h2>
            <p>Por {{ $MostRead2->author }}</p>

            <div class='CategoryAndLikes'>
                <p>Em {{ $MostRead2->category }} • {{ date('d/m/Y', strtotime($MostRead2->created_at))}}</p>
            </div>
        </div>

    </div>
</a>
<hr>

<a href='/post/{{ $MostRead3->category }}/{{ $MostRead3->slug }}'>
    <div class='post'>

        <div id='postImage'>
            <img src="{{ asset('storage/posts_banners/' . $MostRead3->thumb_image) }}" alt="{{ $post->title }}">
        </div>

        <div class='postContent'>
            <h2>{{ $MostRead3->title }}</h2>
            <p>Por {{ $MostRead3->author }}</p>

            <div class='CategoryAndLikes'>
                <p>Em {{ $MostRead3->category }} • {{ date('d/m/Y', strtotime($MostRead3->created_at))}}</p>
            </div>
        </div>

    </div>
</a>
<hr>

<a href='/post/{{ $Recommended1->category }}/{{ $Recommended1->slug }}'>
    <div class='post'>

        <div id='postImage'>
            <img src="{{ asset('storage/posts_banners/' . $Recommended1->thumb_image) }}" alt="{{ $post->title }}">
        </div>

        <div class='postContent'>
            <h2>{{ $Recommended1->title }}</h2>
            <p>Por {{ $Recommended1->author }}</p>

            <div class='CategoryAndLikes'>
                <p>Em {{ $Recommended1->category }} • {{ date('d/m/Y', strtotime($Recommended1->created_at))}}</p>
            </div>
        </div>

    </div>
</a>
<hr>

<a href='/post/{{ $Recommended2->category }}/{{ $Recommended2->slug }}'>
    <div class='post'>

        <div id='postImage'>
            <img src="{{ asset('storage/posts_banners/' . $Recommended2->thumb_image) }}" alt="{{ $post->title }}">
        </div>

        <div class='postContent'>
            <h2>{{ $Recommended2->title }}</h2>
            <p>Por {{ $Recommended2->author }}</p>

            <div class='CategoryAndLikes'>
                <p>Em {{ $Recommended2->category }} • {{ date('d/m/Y', strtotime($Recommended2->created_at))}}</p>
            </div>
        </div>

    </div>
</a>
<hr>
