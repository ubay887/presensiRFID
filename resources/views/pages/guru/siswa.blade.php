@extends('template.master')
@section('title', 'Data Siswa')
@section('judul', 'Data Siswa')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Data Siswa
</div>
@endsection
@section('main')
<div class="container mt-5">
    @csrf
    <div class="card">
        <div class="row mt-3 ml-3">
            <div class="col-8">
                <a href="{{ url('guru/siswa/tambah') }}" class="btn btn-success mr-3"><i class="ph-user-plus-bold"></i> Tambah Data</a>
                <a href="{{ url('guru/datasubjek') }}" class="btn btn-info"><i class="ph-pedestrian-bold"></i> Data Subject</a>
            </div>
            <div class="input-group rounded w-auto mx-auto">
                <input id="searchdata" class="form-control shadow-none rounded-pill" placeholder="Masukkan Keyword" autocomplete="off" type="text">
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ph-download-bold"></i> Export Data
                    </button>
                    <div class="dropdown-menu" x-placement="bottom-start">
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
                        <tr role="row">
                            <th scope="col-1">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                </div>
                            </th>
                            <th scope="col">No</th>
                            <th scope="col">ID Card</th>
                            <th scope="col">ID Chat</th>
                            <th scope="col">No. Induk</th>
                            <th scope="col">Nama</th>
                            <th scope="col">L/P</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Terdaftar</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row">
                            <td>
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox">
                                    <label for="checkbox" class="custom-control-label">&nbsp;</label>
                                </div>
                            </td>
                            <th scope="row">1</th>
                            <td>6969</td>
                            <td>6666</td>
                            <td>6666</td>
                            <td>Jeff</td>
                            <td>Laki - laki</td>
                            <td>Bisnis</td>
                            <td>20 Maret 1998</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                                <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                                <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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