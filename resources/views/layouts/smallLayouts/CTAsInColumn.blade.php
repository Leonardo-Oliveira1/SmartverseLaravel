@for ($i = 1; $i <= 6; $i++)

<a href='/post/{{ $CTA[$i]->category }}/{{ $CTA[$i]->slug }}'>
    <div class='post'>

        <div id='postImage'>
            <img src="{{ asset('storage/posts_banners/' . $CTA[$i]->thumb_image) }}" alt="{{ $CTA[$i]->title }}">
        </div>

        <div class='postContent'>
            <h2>{{ $CTA[$i]->title }}</h2>
            <p>Por {{ $CTA[$i]->author }}</p>

            <div class='CategoryAndLikes'>
                <p>Em {{ $CTA[$i]->category }} • {{ date('d/m/Y', strtotime($CTA[$i]->created_at))}}</p>
            </div>
        </div>

    </div>
</a>
<hr>

@endfor
