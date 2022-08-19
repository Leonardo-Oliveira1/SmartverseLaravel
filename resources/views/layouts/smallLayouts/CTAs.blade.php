<div class="MostRead">

    <div class="divText">
        <h2>Mais lidos 🔥</h2>
    </div>

    @for ($i = 1; $i <= 5; $i++)

        <a href='post/{{ $CTA[$i]->category }}/{{ $CTA[$i]->slug }}'>
            <div class='classificationDiv'>
                <span id='classification'>{{ $i }}</span>
                <h3>{{ $CTA[$i]->title }}</h3>
            </div>
        </a>

    @endfor

</div>

<div class="Recommended">

    <div class="divText">
        <h2>Recomendados 🌟</h2>
    </div>

    <!-- {{ $Position = 1 }} -->

    @for ($i = 6; $i <= 10; $i++)

        <a href='post/{{ $CTA[$i]->category }}/{{ $CTA[$i]->slug }}'>
            <div class='classificationDiv'>
                <span id='classification'>{{ $Position++ }}</span>
                <h3>{{ $CTA[$i]->title }}</h3>
            </div>
        </a>

    @endfor

</div>
