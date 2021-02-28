@extends('template.master')
@section('title', 'E - Presensi | Grafik')
@section('judul', 'Jam Masuk')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Jam Masuk
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    @csrf
    <div class="row">
        <div class="col-auto">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Zona Waktu</label>
                        <select class="form-control">
                            <option selected>WIB</option>
                            <option>WITA</option>
                            <option>WIT</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><i class="ph-x"></i> Batal</button>
                    <button type="button" class="btn btn-success"><i class="ph-floppy-disk"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Mulai Masuk</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jam Masuk</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Akhir Masuk</label>
                        <input type="time" class="form-control">
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><i class="ph-x"></i> Batal</button>
                    <button type="button" class="btn btn-success"><i class="ph-floppy-disk"></i> Simpan</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Mulai Pulang</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jam Pulang</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Akhir Pulang</label>
                        <input type="time" class="form-control">
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><i class="ph-x"></i> Batal</button>
                    <button type="button" class="btn btn-success"><i class="ph-floppy-disk"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
<script>

</script>
@endpush
<style>
    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        justify-content: center;
    }

    * {
        box-sizing: border-box;
    }
</style>
@push('css')