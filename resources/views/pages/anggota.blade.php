@extends('template.master')
@section('title', 'Data Anggota')
@section('judul', 'Data Anggota')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Data Anggota
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    @csrf
    <div class="card">
        <div class="row mt-3 ml-3">
            <div class="col-10">
                <a href="#" class="btn btn-success mr-3"><i class="ph-user-plus-bold"></i> Tambah Data</a>
                <a href="#" class="btn btn-info"><i class="ph-pedestrian-bold"></i> Data Subject</a>
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
                <table id="example" class="table table-striped dataTable no-footer" style="width:100%">
                    <thead>
                        <tr>
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
                        <tr>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>6969</td>
                            <td>6666</td>
                            <td>6666</td>
                            <td>Naz</td>
                            <td>Laki - laki</td>
                            <td>Bisnis</td>
                            <td>20 Maret 1998</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                                <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                                <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>6969</td>
                            <td>6666</td>
                            <td>6666</td>
                            <td>Zelda</td>
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
</div>

@endsection
@push('js')
<script type="text/javascript" src="  https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js  "></script>
<script type="text/javascript" src=" https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js  "></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endpush
@push('css')
<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css  " />
@endpush