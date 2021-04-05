@extends('template.master')
@section('title', 'Jam Masuk')
@section('judul', 'Jam Masuk')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('guru/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item active">
        Jam Kerja
    </div>
@endsection
@section('main')
    <div class="container-fluid mt-5">
        @csrf
        <a href="{{ url('guru/jammasuk/tambahjam') }}"><button class="btn btn-success mb-3"><i
                    class="fa fa-plus-circle"></i> Tambah Data</button></a>
        <div class="row">
            @foreach ($jam as $jam)
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="card card-info flex-fill">
                        <div class="card-header align-items-start flex-column">
                            <h4>{{ $jam->jam_masuk->format('H:i') }} - {{ $jam->jam_keluar->format('H:i') }}</h4>
                            <div class="col px-0">
                                @foreach ($jam->getHariMasuk() as $hari)
                                    <span class="badge badge-light" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="{{ \Carbon\Carbon::parse($hari)->format('l') }}">{{ \Carbon\Carbon::parse($hari)->isoFormat('dd') }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach ($jam->getKelasInTagJam() as $kelas)
                                <p class="mb-0">{{ $kelas }}</p>

                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
@push('js')
    <script>

    </script>
@endpush
<style>
    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        justify-content: center;
    }

    * {
        box-sizing: border-box;
    }

</style>
@push('css')
