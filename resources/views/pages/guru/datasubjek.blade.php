@extends('template.master')
@section('title', 'Data Subjek')
@section('judul', 'Data Subjek')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item">
    <a href="{{ url('guru/siswa') }}">Data Anggota</a>
</div>
<div class="breadcrumb-item active">
    Data Subjek
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    @csrf
    <div class="row">
        <div class="col-8">
            <a href="{{ url('guru/siswa') }}" class="btn btn-light mb-3"><i class="ph-caret-left"></i> Kembali</a>
            <div class="card">
                <div class="row mt-3 ml-2">
                    <div class="col-8">
                        <button href="#" class="btn btn-success mr-3" data-toggle="modal" data-target="#modal2"><i class="ph-user-plus-bold"></i> Tambah Subjek</button>
                    </div>
                    <div class="input-group rounded w-auto mx-auto">
                        <input id="searchdata" class="form-control shadow-none rounded-pill" placeholder="Masukkan Keyword" autocomplete="off" type="text">
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped dataTable text-center no-footer" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col-1">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th scope="col">No</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Opsi</th>
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
                                    <th scope="row">1</th>
                                    <td>Bisnis</td>
                                    <td>47</td>
                                    <td>
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
    </div>


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
        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
    @endpush