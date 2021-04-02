@extends('template.master')
@section('title', 'Tambah Siswa')
@section('judul', 'Tambah Siswa')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver() . '/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver() . '/siswa') }}">Data Siswa</a>
    </div>
    <div class="breadcrumb-item active">
        Tambah Siswa
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <form action="{{ url(Auth::getDefaultDriver() . '/siswa/tambah') }}" method="post">
            @csrf
            <section id="formid">
                @for ($i = 1; $i <= ($count = 5); $i++)
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mx-auto d-flex align-items-center"><i class="ph-user-circle-plus ph-lg"></i> Form
                                Tambah Siswa {{ $count > 1 ? $i : '' }}</h3>
                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse-{{ $i }}" class="btn btn-icon btn-info">
                                    <i class="fas fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="collapse show" id="mycard-collapse-{{ $i }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>ID RFID</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nomor RFID">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor NISN</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan NISN">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" class="d-block">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                                        </div>
                                        <div class="form-group row ml-1 ">
                                            <div class="form-check">
                                                <input class="form-check-input" id="kelaminl" name="kelamin" type="radio"
                                                    value="laki">
                                                <label class="form-check-label" for="kelaminl">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" id="kelaminp" name="kelamin" type="radio"
                                                    value="perempuan">
                                                <label class="form-check-label" for="kelaminp">
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
                @endfor
            </section>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-info mr-2" onclick="tambahForm()"><i class="ph-file-plus ph-lg"></i>
                    Tambah Form</button>
                <button type="button" class="btn btn-success" type="submit"><i class="ph-floppy-disk ph-lg"></i>
                    Simpan</button>
            </div>
        </form>
    </div>
@endsection
@push('css')

@endpush
@push('js')
    <script src="{{ asset('js/form.js') }}"></script>
@endpush
