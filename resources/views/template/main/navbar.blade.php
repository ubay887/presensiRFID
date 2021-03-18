<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        @if (Auth::guard('guru')->user())
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" onclick="valueAuth()"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ asset(Auth::guard('guru')->user()->foto) }}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('guru')->user()->nama }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Logged in <span id="timeago">0 second ago</span></div>
                    <a href="{{ url('guru/profile') }}" class="dropdown-item has-icon">
                        <i class="ph ph-user-bold"></i> Profile
                    </a>
                    <a href="{{ url('guru/settings') }}" class="dropdown-item has-icon">
                        <i class="ph ph-gear"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" id="logout" class="dropdown-item has-icon text-danger">
                        <i class="ph ph-sign-out-bold"></i> Logout
                    </a>
                </div>
            </li>
        @elseif (Auth::guard('admin')->user())
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" onclick="valueAuth()"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ asset(Auth::guard('admin')->user()->foto) }}"
                        class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('admin')->user()->nama }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Logged in <span id="timeago">0 second ago</span></div>
                    <a href="{{ url('admin/profile') }}" class="dropdown-item has-icon">
                        <i class="ph ph-user-bold"></i> Profile
                    </a>
                    <a href="{{url('admin/activities')}}" class="dropdown-item has-icon">
                        <i class="ph ph-activity-bold"></i> Activities
                    </a>
                    <a href="{{ url('admin/settings') }}" class="dropdown-item has-icon">
                        <i class="ph ph-gear-bold"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" id="logout" class="dropdown-item has-icon text-danger">
                        <i class="ph ph-sign-out-bold"></i> Logout
                    </a>
                </div>
            </li>
        @else
        <li class="dropdown">
                <a href="#" data-toggle="dropdown" onclick="valueAuth('{{ route('value.auth') }}')"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ asset(Auth::guard('siswa')->user()->foto) }}"
                        class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('siswa')->user()->nama }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Logged in <span id="timeago">0 second ago</span></div>
                    <a href="{{ url('siswa/profile') }}" class="dropdown-item has-icon">
                        <i class="ph ph-user-bold"></i> Profile
                    </a>
                    <a href="{{ url('siswa/settings') }}" class="dropdown-item has-icon">
                        <i class="ph ph-gear-bold"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" id="logout" class="dropdown-item has-icon text-danger">
                        <i class="ph ph-sign-out-bold"></i> Logout
                    </a>
                </div>
            </li>
        @endif
    </ul>
</nav>
