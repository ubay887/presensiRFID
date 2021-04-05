@extends('template.master')
@section('title', 'Data Presensi')
@section('judul', 'Data Presensi')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('guru/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item active">
        Data Presensi
    </div>
@endsection
@section('main')
    <div class="container-fluid mt-5">
        @csrf
        <div class="card">
            <div class="row mt-3 mx-3 d-flex justify-content-lg-between">
                <div class="col-auto">
                    <div class="input-group">
                        <input type="date" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-lg-auto d-flex justify-content-between">
                    <div class="input-group rounded w-auto mr-3">
                        <input id="searchDataTables" class="form-control shadow-none rounded-pill" placeholder="Masukkan Keyword"
                            autocomplete="off" type="text">
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <a href="{{ url('guru/presensi/rekap') }}">
                        <button class="btn btn-danger mr-3"><i class="fa fa-database"></i> Rekap Data</button>
                    </a>

                    <a onclick="siswaExcel()" href="javascript:void(0)">
                        <button class="btn btn-primary"><i class="fa fa-download"></i> Export Data</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="presensi" class="table table-striped text-center dataTable no-footer" style="width:100%"
                        role="grid">
                        <thead>
                            <tr role="row" class="text-center">
                                <th scope="col" class="py-3">No.</th>
                                <th scope="col" class="py-3">No. Induk</th>
                                <th scope="col" class="py-3">Nama Anggota</th>
                                <th scope="col" class="py-3">Tanggal</th>
                                <th scope="col" class="py-2">Jam Masuk</th>
                                <th scope="col" class="py-1">Check In</th>
                                <th scope="col" class="py-1">Check Out</th>
                                <th scope="col" class="py-2">Jam Pulang</th>
                                <th scope="col" class="py-3">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row">1</th>
                                <td>6969</td>
                                <td>Keqing</td>
                                <td>02/12/2020</td>
                                <td>00:00:00</td>
                                <td>00:00:00</td>
                                <td>00:00:00</td>
                                <td>00:00:00</td>
                                <td>Wangy</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="{{asset('js/dataTables-custom.js')}}"></script>
@endpush
@push('css')
    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css  " />
@endpush
