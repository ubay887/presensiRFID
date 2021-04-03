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
    <a href="{{ url('guru/jammasuk/tambahjam') }}"><button class="btn btn-success mb-3"><i class="ph-lg ph-plus-circle"></i>Tambah Data</button></a>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-info">
                <div class="card-header align-items-start flex-column">
                    <h4>07:15 - 12:00</h4>
                    <div class="">
                        <span class="badge badge-light">S</span>
                        <span class="badge badge-light">T</span>
                        <span class="badge badge-light">F</span>
                    </div>
                </div>
                <div class="card-body">
                    <p>XI REKAYASA PERANGKAT LUNAK 1</p>
                    <p>XI REKAYASA PERANGKAT LUNAK 3</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-info">
                <div class="card-header align-items-start flex-column">
                    <h4>13:15 - 17:00</h4>
                    <div class="">
                        <span class="badge badge-light">S</span>
                        <span class="badge badge-light">T</span>
                        <span class="badge badge-light">F</span>
                    </div>
                </div>
                <div class="card-body">
                    <p>XI REKAYASA PERANGKAT LUNAK 1</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-info">
                <div class="card-header align-items-start flex-column">
                    <h4>07:15 - 15:00</h4>
                    <div class="">
                        <span class="badge badge-light">S</span>
                        <span class="badge badge-light">T</span>
                        <span class="badge badge-light">F</span>
                    </div>
                </div>
                <div class="card-body">
                    <p>XI REKAYASA PERANGKAT LUNAK 1</p>
                    <p>XI REKAYASA PERANGKAT LUNAK 2</p>
                    <p>XI REKAYASA PERANGKAT LUNAK 3</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-info">
                <div class="card-header align-items-start flex-column">
                    <h4>07:15 - 12:00</h4>
                    <div class="">
                        <span class="badge badge-light">S</span>
                        <span class="badge badge-light">T</span>
                        <span class="badge badge-light">F</span>
                    </div>
                </div>
                <div class="card-body">
                    <p>XI REKAYASA PERANGKAT LUNAK 1</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-info">
                <div class="card-header align-items-start flex-column">
                    <h4>07:15 - 12:00</h4>
                    <div class="">
                        <span class="badge badge-light">S</span>
                        <span class="badge badge-light">T</span>
                        <span class="badge badge-light">F</span>
                    </div>
                </div>
                <div class="card-body">
                    <p>XI REKAYASA PERANGKAT LUNAK 1</p>
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