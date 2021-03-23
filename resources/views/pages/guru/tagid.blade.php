@extends('template.master')
@section('title', 'Tag ID')
@section('judul', 'Tag ID')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Tag ID
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    <div class="row mt-5">
        <div class="col mt-5">
            <div class="card mt-5">
                <div class="postition-relative d-flex justify-content-center">
                        <img class="position-absolute" style="top: -45%" src="{{ asset('photos/rfid.png') }}" alt="">
                    </div>
                <div class="card-body mt-5 ">
                    <div class="form-group mt-xl-5 col-auto d-flex justify-content-center">
                        <div class="input-group p-3 col-auto">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ID Card</div>
                            </div>
                            <input type="text" class="form-control" placeholder="Masukkan ID Card Anda">
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger mr-3" data-dismiss="modal"><i class="ph-x"></i> Reset</button>
                    <button type="button" class="btn btn-success"><i class="ph-floppy-disk"></i> Simpan</button>
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