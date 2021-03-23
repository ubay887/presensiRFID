@extends('template.master')
@section('title', 'Dashboard')
@section('judul', 'Dashboard')
@section('main')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color:#9400D3;">
                    <i class="ph-users-fill text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4 class="card-db-title">Total Anggota</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalanggota">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color:#32CD32;">
                    <i class="ph-user-bold text-white ph-2x"></i>
                    <i class="ph-checks-bold text-white ph-lg"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4 class="card-db-title">Total Hadir</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalhadir">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color:#008B8B;">
                    <i class="ph-sign-in-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4 class="card-db-title">Total Check In</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalcheckin">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color:#FF1493;">
                    <i class="ph-identification-card-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4 class="card-db-title">Total Semua Kelas</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalpemberitahuan">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color:#32CD32;">
                    <i class="ph-user-bold text-white ph-2x"></i>
                    <i class="ph-clock-bold text-white ph-lg"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4 class="card-db-title">Total Terlambat</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalterlambat">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color:#DC3545;">
                    <i class="ph-user-bold text-white ph-2x"></i>
                    <i class="ph-x-bold text-white"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4 class="card-db-title">Total Tidak Hadir</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totaltdkhadir">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color:#DAA520;">
                    <i class="ph-sign-out-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4 class="card-db-title">Total Check Out</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-db-text mb-3" id="totalcheckout">-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon" style="background-color:#DAA520;">
                    <i class="ph-chat-circle-text-bold text-white ph-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
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
        var valueDashboard = function() {
            $.ajax({
                url: "/guru/dashboard/value",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#totalanggota').html(data.anggota)
                    // $('#totalhadir').html(data.hadir)
                    // $('#totalcheckin').html(data.total_checkin)
                    // $('#totalterlambat').html(data.terlambat)
                    // $('#totalruangan').html(data.ruangan)
                    // $('#totaltdkhadir').html(data.tidakhadir)
                    // $('#totalcheckout').html(data.total_checkout)
                    // $('#totalizinplg').html(data.izin_pulang)
                },
                error: function(data) {

                }
            });
        }
        setInterval(function() {
            valueDashboard();
        }, 100);

    </script>
@endpush
