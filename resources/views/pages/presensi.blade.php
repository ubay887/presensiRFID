@extends('template.master')
@section('title', 'E - Presensi | Data Presensi')
@section('judul', 'Data Presensi')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Data Presnsi
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    @csrf
    <div class="card">
        <div class="card-header">
            <a href="#" class="btn btn-success mr-3"><i class="ph-user-plus-bold"></i> Tambah Data</a>
            <a href="#" class="btn btn-info"><i class="ph-pedestrian-bold"></i> Data Subject</a>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Card</th>
                        <th scope="col">ID Chat</th>
                        <th scope="col">No. Induk</th>
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
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
                            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>6969</td>
                        <td>6666</td>
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
                            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>6969</td>
                        <td>6666</td>
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
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

<!-- <div class="card">
        <div class="row mt-3">
            <div class="col mx-4">
                <div class="d-flex justify-content-start">
                    <a href="#" class="btn btn-success mr-3"><i class="ph-user-plus-bold"></i> Tambah Data</a>
                    <a href="#" class="btn btn-info"><i class="ph-pedestrian-bold"></i> Data Subject</a>
                </div>
            </div>
            <div class="col mx-4">
                <div class="d-flex justify-content-end">
                    <form class="card-header-form">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle" aria-expanded="false">Export Data</a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->



<!-- <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Card</th>
                        <th scope="col">ID Chat</th>
                        <th scope="col">No. Induk</th>
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
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
                            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>6969</td>
                        <td>6666</td>
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
                            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>6969</td>
                        <td>6666</td>
                        <td>Jeff</td>
                        <td>Laki - laki</td>
                        <td>Bisnis</td>
                        <td>20 Maret 1998</td>
                        <td>
                            <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->

@endsection
@push('js')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endpush
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css" />
@endpush