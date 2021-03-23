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
                <button href="#" class="btn btn-info mr-3">Filter</button>
                <div class="btn-group dropright" id="action" hidden=true>
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item has-icon" href="#"><i class="ph ph-record"></i> Record</a>
                        <a class="dropdown-item has-icon" href="#" onclick="detailSelected()"><i class="ph ph-clipboard-bold"></i> Detail</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item has-icon" href="#" onclick="detailSelected()"><i class="ph ph-trash-simple-bold"></i> Delete</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-auto d-flex justify-content-between">
                <div class="input-group rounded w-auto mr-3">
                    <input id="searchdata" class="form-control shadow-none rounded-pill" placeholder="Masukkan Keyword" autocomplete="off" type="text">
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <a href="{{ url('guru/presensi/rekap') }}" class="btn btn-danger mr-3 d-flex align-items-center">
                    <i class="ph-database-bold"></i> Rekap Data
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
                <table id="example" class="table table-striped text-center dataTable no-footer" style="width:100%%" role="grid">
                    <thead>
                        <tr role="row" class="text-center">
                            <th scope="col" class="py-3" rowspan="2">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                </div>
                            </th>
                            <th scope="col" class="py-3" rowspan="2">No.</th>
                            <th scope="col" class="py-3" rowspan="2">No. Induk</th>
                            <th scope="col" class="py-3" rowspan="2">Nama Anggota</th>
                            <th scope="col" class="py-3" rowspan="2">Tanggal</th>
                            <th scope="col" class="py-2" colspan="3">Jam Masuk</th>
                            <th scope="col" class="py-2" colspan="3">Jam Pulang</th>
                            <th scope="col" class="py-3" rowspan="2">Keterangan</th>
                        </tr>
                        <tr>
                            <th class="py-1">Masuk</th>
                            <th class="py-1">Check In</th>
                            <th class="py-1">Late In</th>
                            <th class="py-1">Pulang</th>
                            <th class="py-1">Check Out</th>
                            <th class="py-1">Early Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>
                                <div class="custom-checkbox custom-control d-flex">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox">
                                    <label for="checkbox" class="custom-control-label">&nbsp;</label>
                                </div>
                            </td>
                            <th scope="row">1</th>
                            <td>6969</td>
                            <td>Keqing</td>
                            <td>02 Desember 2020</td>
                            <td>00:00:00</td>
                            <td>00:00:00</td>
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
    var detailSelected = function() {}
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