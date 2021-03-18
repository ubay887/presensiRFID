@extends('template.master')
@section('title', 'Data Siswa')
@section('judul', 'Data Siswa')
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
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                
            </div>
        </div>
    @endsection
    @push('css')
        
    @endpush
    @push('js')
        
    @endpush
