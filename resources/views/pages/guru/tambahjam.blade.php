@extends('template.master')
@section('title', 'Tambah Jam Masuk')
@section('judul', 'Tambah Jam Masuk')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    <a href="{{ url('guru/jammasuk') }}">Jam Masuk</a>
</div>
<div class="breadcrumb-item active">
    Tambah Jam Masuk
</div>
@endsection
@section('main')
<div class="container-fluid mt-5">
    @csrf
    <a href="{{ url('guru/jammasuk') }}" class="btn btn-light mb-3"><i class="ph-caret-left"></i> Kembali</a>
    <div class="card">
        <div class="card-header">
            <h4>Form Tambah</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Zona Waktu</label>
                <select class="form-control">
                    <option>WIB</option>
                    <option>WIT</option>
                    <option>WITA</option>
                </select>
            </div>
            <div class="section-title">Masuk</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Mulai Masuk</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <input type="time" class="form-control timepicker">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Jam Masuk</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <input type="time" class="form-control timepicker">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Akhir Masuk</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <input type="time" class="form-control timepicker">
                    </div>
                </div>
            </div>
            <div class="section-title">Pulang</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Mulai Pulang</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <input type="time" class="form-control timepicker">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Jam Pulang</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <input type="time" class="form-control timepicker">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Akhir Pulang</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <input type="time" class="form-control timepicker">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-danger mr-3 d-flex align-items-center"><i class="ph-lg ph-clock-clockwise"></i> Reset</button>
            <button class="btn btn-success d-flex align-items-center"><i class="ph-floppy-disk ph-lg"></i> Simpan</button>
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