<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
    <a class="navbar-brand" href="dashboard"><img src="{{ asset('css/img/moon_logo.svg') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
        <form action="search.php" method="GET" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
            <input type="text" class="form-control" placeholder="Pesquisar posts" name="q">
        </form>
        </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-lg-block">
        <a class="nav-link btn btn-info create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Postagens</a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            <h6 class="p-3 mb-0">Posts</h6>
            <div class="dropdown-divider"></div>
            <a href="/dashboard/create" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-file-outline text-primary"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Criar novo post</p>
            </div>
            </a>
            <a href="/dashboard/posts" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-animation text-primary"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Ações com os posts</p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/index.php" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-web text-primary"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Ir para o site</p>
            </div>
            </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
            <div class="navbar-profile">
            <img class="img-xs rounded-circle" src="{{ asset('css/users_profile_photo/')}}/{{$user_profile_photo_path}}" alt="User profile picture">
            <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ $user_name }}</p>
            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <h6 class="p-3 mb-0">Perfil</h6>
            <div class="dropdown-divider"></div>
            </a>
            <div class="dropdown-divider"></div>

            <a href="{{Auth::logout()}}" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-logout text-danger"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject mb-1">Desconectar</p>
            </div>
            </a>
        </div>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
    </button>
    </div>
</nav>
