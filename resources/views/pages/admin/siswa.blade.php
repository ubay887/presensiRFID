@extends('template.master')
@section('title', 'Data Siswa')
@section('judul', 'Data Siswa')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('admin/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item active">
        Data Siswa
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <div class="card">
            <div class="row mt-3 mx-3 d-lg-flex justify-content-lg-between d-md-flex justify-content-md-between">
                <div class="col-lg-auto col-md-auto p-lg-0">
                    <a href="{{url('admin/siswa/tambah')}}"><button class="btn btn-success mr-3"><i class="ph-user-plus-bold"></i> Tambah Data</button></a>
                    <div class="btn-group dropright" id="action" hidden=true>
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item has-icon" href="#"><i class="ph ph-record"></i> Record</a>
                            <a class="dropdown-item has-icon" href="#" onclick="detailSelected()"><i
                                    class="ph ph-clipboard-bold"></i> Detail</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item has-icon" href="#" onclick="detailSelected()"><i
                                    class="ph ph-trash-simple-bold"></i> Delete</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto col-md-auto p-lg-0 d-flex justify-content-between">
                    <div class="input-group rounded mr-lg-2 mr-md-2">
                        <input id="searchDataTables" class="form-control shadow-none rounded-pill pr-4"
                            placeholder="Masukkan Keyword..." autocomplete="off" type="text">
                        <label for="searchDataTables" class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </label>
                    </div>
                    <div class="btn-group d-block">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ph ph-download"></i> Export Data
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item has-icon" href="#"><i class="far fa-file-pdf"></i> Export to PDF</a>
                            <a class="dropdown-item has-icon" href="#"><i class="far fa-file-excel"></i> Export to
                                Excel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTables" class="table table-striped dataTable no-footer cell-border text-capitalize"
                        style="width:100%" role="grid">
                        <thead>
                            <tr role="row">
                                <th scope="col-1">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                            class="custom-control-input" id="checkbox-all">
                                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No. Induk</th>
                                <th scope="col-1">L/P</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $user)
                                <tr role="row">
                                    <td>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-{{ $loop->iteration }}">
                                            <label for="checkbox-{{ $loop->iteration }}"
                                                class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><img class="img-table mx-auto" src="{{ asset($user->foto) }}"
                                            alt="{{ $user->nama }}"></td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->nipd }}</td>
                                    <td>{{ $user->kelamin }}</td>
                                    <td>{{ $user->idKelas->kelas }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-success mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Record"><i class="ph-record"></i></a>
                                        <a href="{{ url('/admin/siswa/' . $user->id . '/detail') }}"
                                            class="btn btn-primary" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Detail"><i class="ph-clipboard-bold"></i></i></a>
                                        <a href="#" class="btn btn-danger ml-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
    @push('css')
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
    @endpush
    @push('js')
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/dataTables-custom.js') }}"></script>
    @endpush
