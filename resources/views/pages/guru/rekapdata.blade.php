@extends('template.master')
@section('title', 'Rekap Data')
@section('judul', 'Rekapitulasi Presensi')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item">
    <a href="{{ url('guru/presensi') }}">Data Presensi</a>
</div>
<div class="breadcrumb-item active">
    Rekap Data
</div>
@endsection
@section('main')
<a href="{{ url('guru/presensi') }}" class="btn btn-light"><i class="ph-caret-left"></i> Kembali</a>
<div class="container-fluid mt-3">
    @csrf
    <p class="font-italic">
        H = <span class="font-weight-bold">Hadir</span>; S = <span class="font-weight-bold">Sakit</span>; I = <span class="font-weight-bold">Izin</span>; A = <span class="font-weight-bold">Alfa</span>; <br> B = <span class="font-weight-bold">Bolos</span>; L = <span class="font-weight-bold">Lupa Tap</span>; T = <span class="font-weight-bold">Terlambat</span>; P = <span class="font-weight-bold">Pulang Cepat</span>;
    </p>
    <div class="card">
        <div class="row mt-3 mx-3 d-flex justify-content-lg-between">
            <div class="col-auto">
                <button href="#" class="btn btn-info">Filter</button>
            </div>
            <div class="col-lg-auto d-flex justify-content-between">
                <div class="input-group rounded w-auto mr-3">
                    <input id="searchdata" class="form-control shadow-none rounded-pill" placeholder="Masukkan Keyword" autocomplete="off" type="text">
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <a href="#" class="btn btn-info mr-3 d-flex align-items-center">
                    <i class="ph-database-bold"></i> Detail
                </a>
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
                <table id="example" class="table table-striped dataTable no-footer" style="width:100%">
                    <thead>
                        <tr role="row">
                            <th scope="col">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                </div>
                            </th>
                            <th scope="col">No.</th>
                            <th scope="col">No. Induk</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">H</th>
                            <th scope="col">S</th>
                            <th scope="col">I</th>
                            <th scope="col">A</th>
                            <th scope="col">B</th>
                            <th scope="col">L</th>
                            <th scope="col">T</th>
                            <th scope="col">P</th>
                            <th scope="col">Late In</th>
                            <th scope="col">Early Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox">
                                    <label for="checkbox" class="custom-control-label">&nbsp;</label>
                                </div>
                            </td>
                            <td>1</td>
                            <td>2000002</td>
                            <td>Shinji Ikari</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>00:05:10</td>
                            <td>00:00:00</td>
                        </tr>
                    </tbody>
                </table>
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
            "columnDefs": [{
                "sortable": false,
                "targets": [0]
            }],
            "dom": 'rt<"row"<"col-lg-3 pr-0"i><"col-lg-6 text-center p-0"l><"col-lg-3 pl-0"p>>'
        })
        $('#searchdata').on('keyup', function() {
            table.search(this.value).draw();
        });
    });

    var checked_length, total;
    $("[data-checkboxes]").each(function() {
        var me = $(this),
            group = me.data('checkboxes'),
            role = me.data('checkbox-role');

        me.change(function() {
            var all = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'),
                checked = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"]):checked'),
                dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]');
            total = all.length;
            checked_length = checked.length;

            if (role == 'dad') {
                if (me.is(':checked')) {
                    all.prop('checked', true);
                    $("div.btn-group.dropright#action").removeAttr('hidden');
                } else {
                    all.prop('checked', false);
                    $("div.btn-group.dropright#action").attr('hidden', true);
                }
            } else {
                if (checked_length >= total) {
                    dad.prop('checked', true);
                    $("div.btn-group.dropright#action").removeAttr('hidden');
                } else if (checked_length === 0) {
                    $("div.btn-group.dropright#action").attr('hidden', true);
                } else {
                    dad.prop('checked', false);
                    $("div.btn-group.dropright#action").removeAttr('hidden');
                }
            }
        });
    });

    var detailSelected = function() {

    }
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