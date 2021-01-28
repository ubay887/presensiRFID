@extends('template.master')
@section('title', 'E - Presensi | dashboard')
@section('judul', 'Dashboard')
@section('breadcrumb')
    <div class="breadcrumb-item active">
        Dashboard
    </div>
@endsection
@section('main')
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
                        <p class="card-db-text mb-3" id="totalanggota"></p>
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
                        <p class="card-db-text mb-3" id="totalhadir"></p>
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
                        <p class="card-db-text mb-3" id="totalcheckin"></p>
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
                        <p class="card-db-text mb-3" id="totalterlambat"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#FF1493;">
                    <i class="ph-buildings-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Ruangan</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalruangan"></p>
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
                        <p class="card-db-text mb-3" id="totaltdkhadir"></p>
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
                        <p class="card-db-text mb-3" id="totalcheckout"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 px-1">
            <div class="card card-statistic-1 rounded shadow-sm">
                <div class="card-icon" style="background-color:#DAA520;">
                    <i class="ph-note-pencil text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header pt-4">
                        <h4 class="card-db-title">Total Izin Pulang</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalizinplg"></p>
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
                    url: "{{ route('api.dashboard') }}",
                    type: "GET",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $('#totalanggota').html(data.anggota)
                        $('#totalhadir').html(data.hadir)
                        $('#totalcheckin').html(data.total_checkin)
                        $('#totalterlambat').html(data.terlambat)
                        $('#totalruangan').html(data.ruangan)
                        $('#totaltdkhadir').html(data.tidakhadir)
                        $('#totalcheckout').html(data.total_checkout)
                        $('#totalizinplg').html(data.izin_pulang)
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
