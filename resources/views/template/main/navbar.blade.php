<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="
                    @if (Auth::guard('guru')->user()) {{ asset(Auth::guard('guru')->user()->foto) }}
            @elseif (Auth::guard('admin')->user())
                {{ asset(Auth::guard('admin')->user()->foto) }}
            @else
                {{ asset(Auth::guard('siswa')->user()->foto) }} @endif
                " class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">
                    @if (Auth::guard('guru')->user())
                        {{ Auth::guard('guru')->user()->nama }}
                    @elseif (Auth::guard('admin')->user())
                        {{ Auth::guard('admin')->user()->nama }}
                    @else
                        {{ Auth::guard('siswa')->user()->nama }}
                    @endif
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="
                @if (Auth::guard('guru')->user()) {{ url('guru/profile') }}
                @elseif (Auth::guard('admin')->user())
                    {{ url('admin/profile') }}
                @else
                    {{ url('siswa/profile') }} @endif
                    " class="dropdown-item has-icon">
                    <i class="ph ph-user-bold"></i> Profile
                </a>
                <a href="#" id="logout" class="dropdown-item has-icon text-danger">
                    <i class="ph ph-sign-out-bold"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
