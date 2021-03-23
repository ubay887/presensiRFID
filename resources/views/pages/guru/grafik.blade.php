@extends('template.master')
@section('title', 'E - Presensi | Grafik')
@section('judul', 'Grafik Presensi')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Grafik
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    @csrf
    <div class="card">
        <div class="card-body">
            <canvas id="myChart" height="100px"></canvas>
        </div>
    </div>
</div>

@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script>
    var chartCanvas = document.getElementById("myChart");
    Chart.defaults.global.defaultFontSize = 14;

    var chartData = {
        labels: [
            "Hadir",
            "Izin",
            "Sakit",
            "Telat",
            "Alpha"
        ],
        datasets: [{
            data: [500, 22, 50, 300, 20],
            backgroundColor: [
                "#63ED7A",
                "#6777EF",
                "#82d3f8",
                "#FF990D",
                "#FE2329"
            ]
        }]
    };

    var pieChart = new Chart(chartCanvas, {
        type: 'pie',
        data: chartData
    });
</script>
@endpush
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />@endpush