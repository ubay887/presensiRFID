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
            <div class="col-10">
                <button href="#" class="btn btn-success mr-3" data-toggle="modal" data-target="#modal"><i class="ph-user-plus-bold"></i> Tambah Data</button>
                <a href="{{ url('guru/datasubjek') }}" class="btn btn-info"><i class="ph-pedestrian-bold"></i> Data Subject</a>
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

    <!-- Modal -->
    <div class="modal" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="ph-user-plus-bold"></i> Form Tambah siswa</h5>
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="ph-x"></i> Batal</button>
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
        $('#example').DataTable();
    });
    $('#modal').appendTo('body');
    $('#modal2').appendTo('body');
</script>
</script>
@endpush
@push('css')
<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css  " />
<style>
</style>
@endpush