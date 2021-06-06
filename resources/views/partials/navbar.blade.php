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
                <a class="nav-link text-white font-weight-bold anim-underline" href="{{url('/search/bands')}}">ARTISTS</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white font-weight-bold anim-underline" href="{{url('/search/albums')}}">ALBUMS</a>
            </li>
            <li class="nav-item">
                @guest
                    <a href="#" class="btn bg-custom-primary text-white rounded-pill font-weight-bold navbar__button" data-toggle="modal" data-target="#registerModal">REGISTER</a>
                @endguest
                @auth
                <div class="btn-group">
                    <a class="nav-link text-white font-weight-bold" style="cursor: pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}} <i class="bi bi-caret-down-fill"></i>
                    </a>
                    <div class="dropdown-menu bg-sub">
                        <a class="dropdown-item text-white" href="#">Profile</a>
                        <div class="dropdown-divider border-custom-primary"></div>
                        <form action="{{url('logout')}}" method="post" id="logout-form">
                            {{ csrf_field() }}
                            <a class="dropdown-item text-white" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" type="submit" href="{{route('logout')}}">Log out</a>
                        </form>
                        
                    </div>
                  </div>
                @endauth
            </li>
            
        </ul>
    </div>
</nav>