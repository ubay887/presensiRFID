@extends('template.master')
@section('title', 'Data Siswa')
@section('judul', 'Data Siswa')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver() . '/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver() . '/siswa') }}">Data Siswa</a>
    </div>
    <div class="breadcrumb-item active">
        Record
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <div class="card">
            <div class="row mt-3 mx-3 d-lg-flex justify-content-lg-between d-md-flex justify-content-md-between">
                <div class="col-lg-auto col-md-auto p-lg-0 d-flex justify-content-between">
                    <!-- XXX: need filter? -->
                </div>
                <div class="col-lg-auto col-md-auto p-lg-0">
                    {{-- <div class="btn-toolbar fc" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="fc-button-group btn-group" role="group">
                            <button type="button" class="fc-button fc-button-primary fc-button-active">Semester</button>
                            <button type="button" class="fc-button fc-button-primary">Bulanan</button>
                            <button type="button" class="fc-button fc-button-primary">Mingguan</button>
                        </div>
                    </div> --}}
                    <div class="btn-group d-block">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ph ph-download"></i> Export Data
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item has-icon" href="#"><i class="far fa-file-pdf"></i> Export to PDF</a>
                            <a class="dropdown-item has-icon" onclick="siswaExcel()" href="javascript:void(0)"><i
                                    class="far fa-file-excel"></i> Export to
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
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam Masuk</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Jam Pulang</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($siswa as $user)
                                <tr role="row">
                                    <td>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-{{ $user->id }}">
                                            <label for="checkbox-{{ $user->id }}"
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
                                        <a href="{{ url(Auth::getDefaultDriver() . '/siswa/' . $user->id . '/detail') }}"
                                            class="btn btn-primary" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Detail"><i class="ph-clipboard-bold"></i></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger ml-2" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Delete" data-name="siswa" data-id="{{$user->id}}">
                                            <i class="ph-trash-simple-bold"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.24/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.css" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush
@push('js')
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.24/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('js/dataTables-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/delete.js') }}"></script>
@endpush
