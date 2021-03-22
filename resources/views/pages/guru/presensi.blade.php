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
    <div class="row">
        <div class="col-auto">
            <div class="card">
                <div class="row mt-3 mx-3">
                    <div class="col">
                        <button href="#" class="btn btn-info">Filter</button>
                    </div>
                    <div class="col text-right d-flex justify-content-between">
                        <div class="input-group rounded w-auto mx-auto">
                            <input id="searchdata" class="form-control shadow-none rounded-pill" placeholder="Masukkan Keyword" autocomplete="off" type="text">
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <button type="button" class="btn btn-danger mr-3">
                            <i class="ph-database-bold"></i> Rekap Data
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ph-download-bold"></i> Export Data
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item has-icon" href="#"><i class="far fa-file-pdf"></i> Export to PDF</a>
                                <a class="dropdown-item has-icon" href="#"><i class="far fa-file-excel"></i> Export to Excel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped dataTable no-footer text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <td scope="col" class="py-3" rowspan="2">No.</td>
                                    <td scope="col" class="py-3" rowspan="2">No. Induk</td>
                                    <td scope="col" class="py-3" rowspan="2">Nama Anggota</td>
                                    <td scope="col" class="py-3" rowspan="2">Tanggal</td>
                                    <td scope="col" class="py-1" colspan="3">Jam Masuk</td>
                                    <td scope="col" class="py-1" colspan="3">Jam Pulang</td>
                                    <td scope="col" class="py-3" rowspan="2">Keterangan</td>
                                </tr>
                                <tr>
                                    <td class="py-1">Masuk</td>
                                    <td class="py-1">Check In</td>
                                    <td class="py-1">Late In</td>
                                    <td class="py-1">Pulang</td>
                                    <td class="py-1">Check Out</td>
                                    <td class="py-1">Early Out</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>6969</td>
                                    <td>May</td>
                                    <td>02 Desember 2020</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>Mati</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@push('js')
<script type="text/javascript" src="  https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js  "></script>
<script type="text/javascript" src=" https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js  "></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "dom": 'rt<"row"<"col-lg-3 pr-0"i><"col-lg-6 text-center p-0"l><"col-lg-3 pl-0"p>>'
        })
        $('#searchdata').on('keyup', function() {
            table.search(this.value).draw();
        });
    });
</script>
@endpush
@push('css')
<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css  " />
<style>
    #search-addon {
        margin-left: -40px;
        z-index: 3;
        background: transparent;
    }
</style>
@endpush