@extends('template.master')
@section('title', 'Tambah Siswa')
@section('judul', 'Tambah Siswa')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url(Auth::getDefaultDriver().'/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item">
    <a href="{{ url(Auth::getDefaultDriver().'/siswa') }}">Data Siswa</a>
</div>
<div class="breadcrumb-item active">
    Tambah Siswa
</div>
@endsection
@section('main')
<div class="container mt-5">
    <form action="{{ url(Auth::getDefaultDriver().'/siswa/tambah') }}" method="post">
        <a href="{{ url(Auth::getDefaultDriver().'/siswa') }}" class="btn btn-light mb-3"><i class="ph-caret-left"></i> Kembali</a>
        <div class="card">
            <div class="card-header">
                <h3 class="mx-auto d-flex align-items-center"><i class="ph-user-circle-plus ph-lg"></i> Form Tambah Siswa</h3>
                <div class="card-header-action">
                    <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#">
                        <i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="mycard-collapse">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            ID
                                        </div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-success d-flex align-items-center"><i class="ph-floppy-disk ph-lg"></i> Simpan</button>
        </div>

    </form>
</div>
@endsection
@push('css')

@endpush
@push('js')

@endpush