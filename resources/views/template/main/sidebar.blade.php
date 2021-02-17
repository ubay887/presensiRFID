<div class="main-sidebar position-fixed">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/dashboard') }}">E - presensi</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/dashboard') }}">
                <img src="{{ asset('photos/logo_epresensi.png') }}" alt="Epresensi" width="50px">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown @if (Request::is('dashboard')) active @endif">
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    <i class="ph ph-stack-simple-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('anggota')) active @endif">
                <a href="{{ url('/anggota') }}" class="nav-link">
                    <i class="ph ph-users-bold"></i>
                    <span>Anggota</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('presensi')) active @endif">
                <a href="{{ url('/presensi') }}" class="nav-link">
                    <i class="ph ph-calendar-blank-bold"></i>
                    <span>Presensi</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('ruangan')) active @endif">
                <a href="{{ url('/ruangan') }}" class="nav-link">
                    <i class="ph ph-buildings-bold"></i>
                    <span>Akses Ruangan</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('grafik')) active @endif">
                <a href="{{ url('/grafik') }}" class="nav-link">
                    <i class="ph ph-chart-pie-slice-bold"></i>
                    <span>Grafik Presensi</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('jammasuk')) active @endif">
                <a href="{{ url('/jammasuk') }}" class="nav-link">
                    <i class="ph ph-clock-bold"></i>
                    <span>Jam Masuk</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('harilibur')) active @endif">
                <a href="{{ url('/harilibur') }}" class="nav-link">
                    <i class="ph ph-calendar-x-bold"></i>
                    <span>Hari Libur</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('tagid')) active @endif">
                <a href="{{ url('/tagid') }}" class="nav-link">
                    <i class="ph ph-tag-bold"></i>
                    <span>Tag ID</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('autentikasi')) active @endif">
                <a href="{{ url('/autentikasi') }}" class="nav-link">
                    <i class="ph ph-fingerprint-simple"></i>
                    <span>Autentikasi & notifikasi</span>
                </a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSKkVNQtcLFLDpVMxlhznwZFvXLbTqjLMlRcXxfQWGtmwPpHVDXBjBLHlwLrQglwTjRhHPMM"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Email Developer
            </a>
        </div>
    </aside>
</div>
