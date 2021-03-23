@extends('template.master')
@section('title', 'Detail Siswa')
@section('judul')
    {{ $id->nama ? "Detail | $id->nama" : 'Detail Siswa' }}
@endsection

@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('admin/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url('admin/siswa') }}">Data Siswa</a>
    </div>
    <div class="breadcrumb-item active">
        Detail
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <div class="card profile-widget">
            <div class="profile-widget-header">
                <img alt="image" src="{{ asset($id->foto) }}" class="rounded profile-widget-picture">
            </div>
            <div class="profile-widget-items">
                <div class="profile-widget-item">
                    @if ($id->created_at)
                        Tanggal dibuat {{ \Carbon\Carbon::parse($id->created_at)->format('d M Y') }}
                    @else
                        Tanggal dibuat ?
                    @endif
                </div>
                <div class="profile-widget-item">
                    @if ($id->updated_at)
                        Terakhir diubah {{ \Carbon\Carbon::parse($id->updated_at)->format('d M Y') }}
                    @else
                        Belum pernah diubah
                    @endif
                </div>
            </div>
            <div class="card-body row d-flex justify-content-center pt-5">
                <div class="card col-6 border col-6">
                    <div class="card-body">
                        <div class="row">
                            <div class="text-center d-flex justify-content-between"><span>ID Telegram</span><span>{{ $id->idtelegram }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
