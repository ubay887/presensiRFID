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
        <div class="col-sm-12 col-md-6 col-lg-6 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#FF1493;">
                    <i class="ph-users-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Siswa</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalanggota">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#9400D3;">
                    <i class="ph-user-gear-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Guru</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalguru">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#4CEA67;">
                    <i class="ph-chat-text-bold text-white ph-2x"></i>
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
        <div class="col-sm-12 col-md-6 col-lg-6 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#6777EF;">
                    <i class="ph-megaphone-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Pemberitahuan</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalpemberitahuan">-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            var valueDashboard = function() {
                $.ajax({
                    url: "{{ route('value.dashboard') }}",
                    type: "GET",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $('#totalanggota').html(data.anggota)
                        $('#totalguru').html(data.guru)
                    },
                    error: function(data) {
                        console.log(data)
                    }
                });
            }
            setInterval(function() {
                valueDashboard();
            }, 100);
        })

    </script>
@endpush
