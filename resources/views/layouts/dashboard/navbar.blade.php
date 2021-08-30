<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="index.html">
                <b>
                    <img src="{{asset('frontend/images/logouin.png')}}" alt="home" style="height: 50px;"/>
                </b>
                <span>
                    PUSKA Melayu
                </span>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li>
                <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
            </li>
            {{-- <li>
                <form role="search" class="app-search hidden-xs">
                    <i class="icon-magnifier"></i>
                    <input type="text" placeholder="Search..." class="form-control">
                </form>
            </li> --}}
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            @if (auth()->user()->role == 1)
            <li class="">
                <a href="{{route('getUsers')}}">Manajemen Pengguna</a>
            </li>
            @endif
            <li class="">
                <a href="{{route('profile')}}"><i class="fa fa-user"></i></a>
            </li>
            <li class="">
                <a href="{{route('logout')}}"><i class="icon-logout" title="logout"></i></a>
            </li>
        </ul>
    </div>
</nav>
