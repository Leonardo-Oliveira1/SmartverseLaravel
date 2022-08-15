<div class="MostRead">

    <div class="divText">
        <h2>Mais lidos 🔥</h2>
    </div>

    <a href='post/{{ $MostRead1->category }}/{{ $MostRead1->slug }}'>
        <div class='classificationDiv'>
            <span id='classification'>1</span>
            <h3>{{ $MostRead1->title }}</h3>
        </div>
    </a>

    <a href='post/{{ $MostRead2->category }}/{{ $MostRead2->slug }}'>
        <div class='classificationDiv'>
            <span id='classification'>2</span>
            <h3>{{ $MostRead2->title }}</h3>
        </div>
    </a>

    <a href='post/{{ $MostRead3->category }}/{{ $MostRead3->slug }}'>
        <div class='classificationDiv'>
            <span id='classification'>3</span>
            <h3>{{ $MostRead3->title }}</h3>
        </div>
    </a>

    <a href='post/{{ $MostRead4->category }}/{{ $MostRead4->slug }}'>
        <div class='classificationDiv'>
            <span id='classification'>4</span>
            <h3>{{ $MostRead4->title }}</h3>
        </div>
    </a>

    <a href='post/{{ $MostRead5->category }}/{{ $MostRead5->slug }}'>
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

        <a href='post/{{ $Recommended1->category }}/{{ $Recommended1->slug }}'>
            <div class='classificationDiv'>
                <span id='classification'>1</span>
                <h3>{{ $Recommended1->title }}</h3>
            </div>
        </a>

        <a href='post/{{ $Recommended2->category }}/{{ $Recommended2->slug }}'>
            <div class='classificationDiv'>
                <span id='classification'>2</span>
                <h3>{{ $Recommended2->title }}</h3>
            </div>
        </a>

        <a href='post/{{ $Recommended3->category }}/{{ $Recommended3->slug }}'>
            <div class='classificationDiv'>
                <span id='classification'>3</span>
                <h3>{{ $Recommended3->title }}</h3>
            </div>
        </a>

        <a href='post/{{ $Recommended4->category }}/{{ $Recommended4->slug }}'>
            <div class='classificationDiv'>
                <span id='classification'>4</span>
                <h3>{{ $Recommended4->title }}</h3>
            </div>
        </a>

        <a href='post/{{ $Recommended5->category }}/{{ $Recommended5->slug }}'>
            <div class='classificationDiv'>
                <span id='classification'>5</span>
                <h3>{{ $Recommended5->title }}</h3>
            </div>
        </a>

    </div>
</div>
