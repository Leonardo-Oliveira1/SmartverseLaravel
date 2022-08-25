<nav class="sidebar sidebar-offcanvas" id="sidebar">
<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="/dashboard"><img src="{{ asset('css/img/logo.svg') }}" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="/dashboard"><img src="{{ asset('css/img/moon_logo.svg') }}" alt="logo" /></a>
</div>
<ul class="nav">
    <li class="nav-item profile">
    <div class="profile-desc">
        <div class="profile-pic">
        <div class="count-indicator">
            <img class="img-xs rounded-circle " src="{{ asset('css/users_profile_photo/')}}/{{$user_profile_photo_path}}" alt="User profile photo">
            <span class="count bg-success"></span>
        </div>
        <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">{{ $user_name }}</h5>
            <span>Autor</span>
        </div>
        </div>
    </div>
    </li>
    <li class="nav-item nav-category">
    <span class="nav-link">Navegação</span>
    </li>
    <li class="nav-item menu-items">
    <a href="/dashboard" class="nav-link">
        <span class="menu-icon">
        <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
    </li>
</nav>
