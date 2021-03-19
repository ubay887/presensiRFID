@extends('template.master')
@section('title', 'Tambah Siswa')
@section('judul', 'Tambah Siswa')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('admin/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url('admin/siswa') }}">Data Siswa</a>
    </div>
    <div class="breadcrumb-item active">
        Tambah Siswa
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <form action="{{ url('admin/siswa/tambah') }}" method="post">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto">Form Tambah Siswa</h3>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('css')

@endpush
@push('js')

@endpush
