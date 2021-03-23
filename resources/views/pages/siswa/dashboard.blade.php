@extends('template.master')
@section('title', 'dashboard')
@section('judul', 'Dashboard')
@section('breadcrumb')
    <div class="breadcrumb-item active">
        Dashboard
    </div>
@endsection
@section('main')
    <div class="row">
        <div class="col mt-3">
            <h3>{{ $jam_masuk }}</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-5 p-0 mt-0 card profile-widget">
            <div class="profile-widget-header mb-0">
                <div class="profile-widget-items">
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Hadir</div>
                        <div class="profile-widget-item-value">187</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Sakit</div>
                        <div class="profile-widget-item-value">6,8K</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Izin</div>
                        <div class="profile-widget-item-value">2,1K</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Telat</div>
                        <div class="profile-widget-item-value">2,1K</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Alpha</div>
                        <div class="profile-widget-item-value">2,1K</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#9400D3;">
                    <i class="ph-users-fill text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Anggota</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalanggota">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#32CD32;">
                    <i class="ph-user-bold text-white ph-2x"></i>
                    <i class="ph-checks-bold text-white ph-lg"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Hadir</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalhadir">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#008B8B;">
                    <i class="ph-sign-in-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Check In</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalcheckin">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#FF1493;">
                    <i class="ph-identification-card-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Semua Kelas</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalpemberitahuan">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#32CD32;">
                    <i class="ph-user-bold text-white ph-2x"></i>
                    <i class="ph-clock-bold text-white ph-lg"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Terlambat</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalterlambat">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#DC3545;">
                    <i class="ph-user-bold text-white ph-2x"></i>
                    <i class="ph-x-bold text-white"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Tidak Hadir</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totaltdkhadir">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#DAA520;">
                    <i class="ph-sign-out-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Check Out</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalcheckout">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#DAA520;">
                    <i class="ph-chat-circle-text-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Quotes</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalquotes">-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
    </script>
@endpush
