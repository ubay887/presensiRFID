<div class="main-sidebar position-fixed shadow-none">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url(Auth::getDefaultDriver() . '/dashboard') }}">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url(Auth::getDefaultDriver() . '/dashboard') }}">
                <img src="{{ asset('photos/logo_epresensi.png') }}" alt="Epresensi" width="50px">
            </a>
        </div>
        @if (Auth::guard('guru')->user())
            <ul class="sidebar-menu">
                <li class="nav-item dropdown @if (Request::is('guru/dashboard')) active @endif">
                    <a href="{{ url('guru/dashboard') }}" class="nav-link">
                        <i class="ph ph-stack-simple-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/siswa', 'guru/siswa/*' )) active @endif">
                    <a href="{{ url('guru/siswa') }}" class="nav-link">
                        <i class="ph ph-users-bold"></i>
                        <span>Siswa</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/kelas', 'guru/kelas/*' )) active @endif">
                    <a href="{{ url('guru/kelas') }}" class="nav-link">
                        <i class="ph ph-buildings-bold"></i>
                        <span>Kelas</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/presensi', 'guru/presensi/*'
                    )) active @endif">
                    <a href="{{ url('guru/presensi') }}" class="nav-link">
                        <i class="ph ph-calendar-blank-bold"></i>
                        <span>Presensi</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/grafik')) active @endif">
                    <a href="{{ url('guru/grafik') }}" class="nav-link">
                        <i class="ph ph-chart-pie-slice-bold"></i>
                        <span>Grafik Presensi</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/jam', 'guru/jam/*' )) active @endif">
                    <a href="{{ url('guru/jam') }}" class="nav-link">
                        <i class="ph ph-clock-bold"></i>
                        <span>Jam Masuk</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/calendar')) active @endif">
                    <a href="{{ url('guru/calendar') }}" class="nav-link">
                        <i class="ph ph-calendar-bold"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/tagid')) active @endif">
                    <a href="{{ url('guru/tagid') }}" class="nav-link">
                        <i class="ph ph-tag-bold"></i>
                        <span>ID Card</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/quotes')) active @endif">
                    <a href="{{ url('guru/quotes') }}" class="nav-link">
                        <i class="ph ph-chat-circle-text-bold"></i>
                        <span>Quotes</span>
                    </a>
                </li>
            </ul>
        @elseif (Auth::guard('admin')->user())
            <ul class="sidebar-menu">
                <li class="nav-item dropdown @if (Request::is('admin/dashboard')) active @endif">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <i class="ph ph-stack-simple-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/guru', 'admin/guru/*' )) active @endif">
                    <a href="{{ url('admin/guru') }}" class="nav-link">
                        <i class="ph ph-user-gear-bold"></i>
                        <span>Guru</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/siswa', 'admin/siswa/*' )) active @endif">
                    <a href="{{ url('admin/siswa') }}" class="nav-link">
                        <i class="ph ph-users-bold"></i>
                        <span>Siswa</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/quotes', 'admin/quotes/*'
                    )) active @endif">
                    <a href="{{ url('admin/quotes') }}" class="nav-link">
                        <i class="ph ph-chat-circle-text-bold"></i>
                        <span>Quotes</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/calendar')) active @endif">
                    <a href="{{ url('admin/calendar') }}" class="nav-link">
                        <i class="ph ph-calendar-bold"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/autentikasi')) active @endif">
                    <a href="{{ url('admin/autentikasi') }}" class="nav-link">
                        <i class="ph ph-fingerprint-simple"></i>
                        <span>Autentikasi & notifikasi</span>
                    </a>
                </li>
            </ul>
        @else
            <ul class="sidebar-menu">
                <li class="nav-item dropdown @if (Request::is('siswa/dashboard')) active @endif">
                    <a href="{{ url('siswa/dashboard') }}" class="nav-link">
                        <i class="ph ph-stack-simple-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('siswa/calendar', 'siswa/calendar/*'
                    )) active @endif">
                    <a href="{{ url('siswa/calendar') }}" class="nav-link">
                        <i class="ph ph-calendar-bold"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('siswa/grafik')) active @endif">
                    <a href="{{ url('siswa/grafik') }}" class="nav-link">
                        <i class="ph ph-chart-pie-slice-bold"></i>
                        <span>Grafik Presensi</span>
                    </a>
                </li>
            </ul>
        @endif

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDMmRLfWchrZkBJnlvpDXslxRwvBNvJmCFJQMsRVrLpxfSXLmNqTxmkWVRQCvCLZxJQV"
                class="btn btn-primary btn-lg btn-block btn-icon-split" target="_blank">
                <i class="fas fa-rocket"></i> Email Developer
            </a>
        </div>
    </aside>
</div>
