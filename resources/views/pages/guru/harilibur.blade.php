@extends('template.master')
@section('title', 'Hari Libur')
@section('judul', 'Hari Libur')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Hari Libur
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    @csrf
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" style="width:100%;">
                            <tbody>
                                <tr>
                                    <td class="col-4">Hari Libur 1</td>
                                    <td class="col-4">Monday</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select name="H_LIBUR_1" class="custom-select col-8">
                                                <option selected="">---Pilih Hari---</option>
                                                <option selected="">Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>
                                                <option>Sunday</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hari Libur 2</td>
                                    <td>Sunday</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select name="H_LIBUR_2" class="custom-select col-8">
                                                <option selected="">---Pilih Hari---</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>
                                                <option selected="">Sunday</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hari Libur 2</td>
                                    <td>Sunday</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select name="H_LIBUR_2" class="custom-select col-8">
                                                <option selected="">---Pilih Hari---</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>
                                                <option selected="">Sunday</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hari Libur 2</td>
                                    <td>Sunday</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select name="H_LIBUR_2" class="custom-select col-8">
                                                <option selected="">---Pilih Hari---</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>
                                                <option selected="">Sunday</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hari Libur 2</td>
                                    <td>Sunday</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select name="H_LIBUR_2" class="custom-select col-8">
                                                <option selected="">---Pilih Hari---</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>
                                                <option selected="">Sunday</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><i class="ph-x"></i> Reset</button>
                    <button type="button" class="btn btn-primary mr-2" data-dismiss="modal"><i class="ph-arrows-clockwise"></i></i> Sync</button>
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