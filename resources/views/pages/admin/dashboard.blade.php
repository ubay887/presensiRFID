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
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#FF1493;">
                    <i class="ph-users-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Siswa</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3 font-weight-bold pp-font">
                            @if ($anggota)
                                {{ $anggota }}
                            @else
                                -
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#9400D3;">
                    <i class="ph-user-gear-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Guru</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3 font-weight-bold pp-font">
                            @if ($guru)
                                {{ $guru }}
                            @else
                                -
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#4CEA67;">
                    <i class="ph-chat-text-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Quotes</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3 font-weight-bold pp-font">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#6777EF;">
                    <i class="ph-reddit-logo-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Admin</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3 font-weight-bold pp-font">-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
