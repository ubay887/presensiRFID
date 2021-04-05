@extends('template.master')
@section('title', 'Data Subjek')
@section('judul', 'Data Subjek')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver() . '/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item active">
        Kelas
    </div>
@endsection
@section('main')
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="row mt-3 mx-3 d-flex justify-content-lg-between ">
                <div class="col col-lg-8 col-md-7 col-sm-4">
                    <button href="#" class="btn btn-success mr-3" data-toggle="modal" data-target="#modal2"><i
                            class="fa fa-user-plus"></i> Tambah Kelas</button>
                    <div class="btn-group dropright" id="action" hidden=true>
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item has-icon" href="javascript:void(0)" onclick="detailSelected()"><i
                                    class="ph ph-clipboard-bold"></i> Detail</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item has-icon" href="javascript:void(0)" onclick="detailSelected()"><i
                                    class="ph ph-trash-simple-bold"></i> Delete</a>
                        </div>
                    </div>
                </div>
                <div class="col-auto ml-auto">
                    <div class="input-group rounded w-auto">
                        <input id="searchDataTables" class="form-control shadow-none rounded-pill"
                            placeholder="Masukkan Keyword" autocomplete="off" type="text">
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTables_kelas" class="table table-striped dataTable no-footer" style="width:100%"
                        role="grid">
                        <thead>
                            <tr role="row">
                                <th scope="col-1">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                            class="custom-control-input" id="checkbox-all">
                                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Wali Kelas</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $data)
                                <tr role="row">
                                    <td>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-{{ $data->id }}">
                                            <label for="checkbox-{{ $data->id }}"
                                                class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>{{ $data->kelas }}</td>
                                    <td>{{ $data->getSiswa->count() }}</td>
                                    <td>{{ $data->getGuru->nama }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ url(Auth::getDefaultDriver() . '/kelas/' . $data->id . '/detail') }}"
                                            class="btn btn-primary" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Detail"><i class="ph-clipboard-bold"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger ml-2" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Delete"><i
                                                class="ph-trash-simple-bold"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal2"><i class="ph-identification-card-bold"></i> Tambah Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="guru/kelas" method="post">
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Kelas">
                            </div>
                            <div class="form-group">
                                <label>Nama Wali Kelas</label>
                                <input list="namaGuru" name="namaGuru" class="form-control"
                                    placeholder="Masukkan Nama Wali Kelas">
                                <datalist id="namaGuru">
                                    @foreach ($guru as $user)
                                        <option value="{{ $user->nama }}">
                                    @endforeach
                                </datalist>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><i class="ph-floppy-disk"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.24/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('js/dataTables-custom.js') }}"></script>
    <script>
        $('#modal').appendTo('body');
        $('#modal2').appendTo('body');

    </script>
@endpush
@push('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.24/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.css" />
@endpush
