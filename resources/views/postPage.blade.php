<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="{{ asset('css/img/moon_logo.svg') }}">
        <meta name="description" content="{{ $post->metadescription }}">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <title>{{ $post->title }} - Smartverse</title>
    </head>

<body>
    @include('layouts.smallLayouts.header')

    <div class='container'>
        <div class='postImage'>
            <img src="{{ asset('storage/posts_banners/' . $post->thumb_image) }}" alt='Capa da postagem'>

            <div class='firstInfo'>
                <h1>{{ $post->title }}</h1>
                <span id='post_date'>{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
            </div>

        </div>

        <div class='authorImage'>
            <img src="{{ asset('css/users_profile_photo/')}}/{{ $authorPhoto }}" alt=''>
            <span id='author_name'>Por {{ $post->author }}</span>
        </div>


        <div class='share'>
            <img width='25' height='25'style='padding-right: 10px;' src="{{ asset('css/img/icons/share.svg') }}" alt='Compartilhar'>

            <a href='https://www.facebook.com/sharer/sharer.php?u=smartverse.com.br/post/{{ $post->category }}/{{ $post->slug }}'>
                <img width='25' height='25'style='padding-right: 10px;' src="{{ asset('css/img/icons/facebook.svg') }}" alt='Compartilhar no Facebook'>
            </a>

            <a href='https://api.whatsapp.com/send?text=www.smartverse.com.br/post/{{ $post->category }}/{{ $post->slug }}'>
                <img width='33' height='33' src="{{ asset('css/img/icons/whatsapp.svg') }}" alt='Compartilhar no WhatsApp'>
            </a>

            <a href='https://twitter.com/intent/tweet?url=www.smartverse.com.br/post/{{ $post->category }}/{{ $post->slug }}'>
                <img width='38' height='38' src="{{ asset('css/img/icons/twitter.svg') }}" alt='Compartilhar no Twitter'>
            </a>
        </div>

        <div class='text'>
            {!! $post->text !!}
        </div>


        <div class='seeMoreLines'>
        <span id='seeMoreText' style='color: black;'>Comentários</span>
        </div>

        <div class='facebookdiv'>
            <div class='fb-comments' data-href='www.smartverse.com.br/view/$link' data-width='100%' data-numposts='5'></div>
        </div>

        <div class='seeMoreLines'>
            <hr size='1'>
            <span id='seeMoreText'>Veja mais</span>
            <hr size='1'>
        </div>

        <div class='posts' style='margin-left: -1%;'>
            @include('layouts.smallLayouts.CTAsInColumn')
        </div>
    </div>




    <div id='fb-root'></div>
    <script async defer crossorigin='anonymous' src='https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0' nonce='s4yF0ayA'></script>
    <script src="{{ asset('js/hamburger.js') }}"></script>
</body>


    @include('layouts.smallLayouts.footer')
</html>
