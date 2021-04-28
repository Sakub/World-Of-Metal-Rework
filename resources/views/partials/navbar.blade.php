<nav class="navbar navbar-expand-md bg-sub fixed-top">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item p-2">
                <a class="nav-brand" href="{{url('/')}}"><img src="{{asset('/img/logo.png')}}" alt="Page logo" height="50"></a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold anim-underline" href="{{route('bands.index')}}">ARTISTS</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white font-weight-bold anim-underline" href="{{route('albums.index')}}">ALBUMS</a>
            </li>
            <li class="nav-item">
                <a href="#" class="btn bg-custom-primary text-white rounded-pill font-weight-bold navbar__button">REGISTER</a>
            </li>
        </ul>
    </div>
</nav>