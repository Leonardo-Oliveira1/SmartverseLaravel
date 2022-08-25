@extends('dashboard.layouts.mainLayout')
@section('content')

<div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">{{ $posts->count() }}</h3>
            </div>
            </div>
            <div class="col-3">
            <div class="icon icon-box-success ">
                <span class="mdi mdi-access-point icon-item"></span>
            </div>
            </div>
        </div>
        <h6 class="text-muted font-weight-normal">Total de postagens</h6>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">{{ $users->count() }}</h3>
            </div>
            </div>
            <div class="col-3">
            <div class="icon icon-box-success">
                <span class="mdi mdi-account-multiple"></span>
            </div>
            </div>
        </div>
        <h6 class="text-muted font-weight-normal">Total de autores</h6>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">0</h3>
            </div>
            </div>
            <div class="col-3">
            <div class="icon icon-box-danger">
                <span class="mdi mdi-polymer icon-item"></span>
            </div>
            </div>
        </div>
        <h6 class="text-muted font-weight-normal">Nenhuma informação</h6>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">0</h3>
            </div>
            </div>
            <div class="col-3">
            <div class="icon icon-box-danger ">
                <span class="mdi mdi-polymer icon-item"></span>
            </div>
            </div>
        </div>
        <h6 class="text-muted font-weight-normal">Nenhuma informação</h6>
        </div>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card"></div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="d-flex flex-row justify-content-between">
            <h4 class="card-title">Autores</h4>
        </div>
        <?php
            setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
            date_default_timezone_set('America/Sao_Paulo');
        ?>

        @foreach($users as $user)
        <div class="preview-list">
            <div class='preview-item border-bottom'>
                <div class='preview-thumbnail'>
                <img src="{{ asset('css/users_profile_photo/')}}/{{ $user->profile_photo_path }}" alt='image' class='rounded-circle' />
                </div>
                <div class='preview-item-content d-flex flex-grow'>
                <div class='flex-grow'>
                    <div class='d-flex d-md-block d-xl-flex justify-content-between'>
                    <h6 class='preview-subject'>{{ $user->name }}</h6>
                    </div>
                    <p class='text-muted'>Desde {{ strftime('%d de %B de %Y', strtotime($user->created_at))}}</p>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Posts</h4>
        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">

            @foreach($posts as $post)
            <div class='item'>
                <a href='/post/{{$post->category}}/{{ $post->slug }}'>
                    <img src="{{ asset('storage/posts_banners/' . $post->thumb_image) }}" alt=''>
                    <br>
                    <p>{{ $post->title }}</p>
                </a>
            <div class='preview-list w-100'>
                <div class='preview-item p-0'>
                    <div class='preview-item-content d-flex flex-grow'>
                        <div class='flex-grow'>
                            <div class='d-flex d-md-block d-xl-flex justify-content-between'>
                                <h6 class='preview-subject'>{{ $post->author }}</h6>
                                <p>{{ date('d/m/Y', strtotime($post->created_at))}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach

        </div>
        <div class="d-flex py-4">
            <div class="preview-list w-100">
            </div>
        </div>
        <p class="text-muted">Algumas postagens do Smartverse. </p>
        <div class="progress progress-md portfolio-progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="d-flex flex-row justify-content-between">
            <h4 class="card-title">Postagens destacadas</h4>
        </div>
        <div class="preview-list">
        </div>
        </div>
    </div>
    </div>
</div>

@endsection
