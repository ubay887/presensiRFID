@extends('template.master')
@section('title', 'detail anggota')
@if ($id)
    @section('judul', "Detail | $id->nama")
@else
    @section('judul', 'Detail Anggota')
@endif

@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('admin/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url('admin/anggota') }}">Anggota</a>
    </div>
    <div class="breadcrumb-item active">
        Detail
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <div class="card profile-widget">
            <div class="profile-widget-header">
                <img alt="image" src="{{ asset($id->foto) }}"
                    class="rounded profile-widget-picture">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4 col-12">
                        <label>ID Chat</label>
                        <input type="text" class="form-control" value="@if(is_numeric($id->idchat)){{ $id->idchat }}@else-@endif" readonly>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label>NIPD</label>
                        <input type="text" class="form-control" value="@if($id->nipd){{ $id->nipd }}@else-@endif" readonly>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label>ID Card</label>
                        <input type="text" class="form-control" value="@if(is_numeric($id->tagid)){{ $id->tagid }}@else-@endif" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-12">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="@if($id->nama){{ $id->nama }}@else-@endif" readonly>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" value="@if($id->kelamin === 'l') Pria @elseif ($id->kelamin === 'p') Perempuan @else unknown @endif" readonly>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" value="@if($id->tanggal_lahir){{  \Carbon\Carbon::parse($id->tanggal_lahir)->format('d F Y') }}@else-@endif" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-12">
                        <label>Tanggal Dibuat</label>
                        <input type="text" class="form-control" value="@if($id->created_at){{  \Carbon\Carbon::parse($id->created_at)->format('d F Y') }}@else-@endif" readonly>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label>Tanggal Diperbaharui</label>
                        <input type="text" class="form-control" value="@if($id->updated_at){{  \Carbon\Carbon::parse($id->updated_at)->format('d F Y') }}@else-@endif" readonly>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label>Password</label>
                        <input type="text" class="form-control" value="@if($id->password){{ $id->password }}@else-@endif" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label>Kelas</label>
                        <input type="text" class="form-control" value="@if($id->idkelas){{ $id->idkelas->kelas }}@else-@endif" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
