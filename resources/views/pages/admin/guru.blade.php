@extends('template.master')
@section('title', 'Data Guru')
@section('judul', 'Data Guru')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('admin/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item active">
        Data guru
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <div class="card">
            <div class="row mt-3 mx-3">
                <div class="col">
                    <button href="#" class="btn btn-success mr-3" data-toggle="modal" data-target="#modal"><i
                            class="ph-user-plus-bold"></i> Tambah Data</button>
                    <button href="#" class="btn btn-info" data-toggle="modal" data-target="#modal2"><i
                            class="ph-pedestrian-bold"></i> Data Subject</button>
                </div>
                <div class="col text-right d-flex justify-content-between">
                    <div class="input-group rounded w-50 mx-auto">
                        <input id="searchdata" class="form-control shadow-none rounded-pill"
                            placeholder="Masukkan Keyword..." autocomplete="off" type="text">
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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
                    <table id="example" class="table table-striped dataTable no-footer cell-border text-capitalize" style="width:100%">
                        <thead>
                            <tr role="row">
                                <th scope="col-1">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Role</th>
                                <th scope="col-1">L/P</th>
                                <th scope="col">Wali kelas</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $user)
                                <tr role="row">
                                    <th>{{$loop->iteration}}</th>
                                    <td><img class="img-table mx-auto" src="{{asset($user->foto)}}" alt="{{$user->nama}}"></td>
                                    <td>{{$user->nama}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>{{$user->kelamin}}</td>
                                    <td>
                                        @if ($user->idWaliKelas)
                                            {{$user->idWaliKelas->kelas}}
                                        @else
                                            none
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Rekaman"><i class="ph-clipboard-bold"></i></i></a>
                                        <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Edit"><i class="ph-note-pencil-bold"></i></a>
                                        <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Delete"><i class="ph-trash-simple-bold"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="ph-user-plus-bold"></i> Form Tambah Anggota
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">ID</div>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>ID Chat Bot Telegram</label>
                            <input type="text" class="form-control" placeholder="Masukkan ID Chat Bot Telegram">
                        </div>
                        <div class="form-group">
                            <label>Nomor Induk Pegawai</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nomor Induk Pegawai">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group row ml-1 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="laki">
                                <label class="form-check-label">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="perempuan">
                                <label class="form-check-label">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pilih Kelas</label>
                            <select class="form-control">
                                <option selected>...</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="ph-x"></i>
                            Batal</button>
                        <button type="button" class="btn btn-success"><i class="ph-floppy-disk"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- Modal -->
    <div class="modal" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal2"><i class="ph-identification-card-bold"></i> Tambah Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Subject</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Subject yang baru">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="ph-x"></i> Batal</button>
                    <button type="button" class="btn btn-success"><i class="ph-floppy-disk"></i> Simpan</button>
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
        $('#modal').appendTo('body');
        $('#modal2').appendTo('body');

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
