<div class="top-left">
    <div class="navbar-header">
        {{--        <a class="navbar-brand" href="#"><img class="align-content" width="130px" src="{{ asset('img/zoologiclogo.jpg') }}" alt="Logo"></a>--}}
        {{--        <a class="navbar-brand hidden" href="./"><img width="130px" src="{{ asset('img/zoologiclogo.jpg') }}" alt="Logo"></a>--}}
        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
    </div>
</div>
<div class="top-right">
    <div class="header-menu">
        <div class="header-left">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ asset('assets/img/admin.png')  }}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
