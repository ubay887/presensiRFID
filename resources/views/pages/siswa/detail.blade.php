@extends('template.master')
@section('title', 'Detail Siswa')
@section('judul')
    {{ $id->nama ? "Detail | $id->nama" : 'Detail Siswa' }}
@endsection

@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver().'/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver().'/siswa') }}">Data Siswa</a>
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
                        Tanggal dibuat {{ $id->created_at->format('d M Y') }}
                    @else
                        Tanggal dibuat ?
                    @endif
                </div>
                <div class="profile-widget-item">
                    @if ($id->updated_at)
                        Terakhir diubah {{ $id->updated_at->format('d M Y') }}
                    @else
                        Belum pernah diubah
                    @endif
                </div>
            </div>
            <div class="card-body row pt-5">
                <div class="col-12 d-flex justify-content-center">
                    <div class="card border col-6">
                        <div class="card-body">
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div>ID Telegram</div>
                                    <div>{{ $id->idtelegram ? $id->idtelegram : '-' }}</div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div>ID Card</div>
                                    <div>{{ $id->idrfid ? $id->idrfid : '-' }}</div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div>Password</div>
                                    <div id="detpass">
                                        @if ($id->passwordcrypt)
                                            <i class="far fa-eye-slash mr-1" onclick="detailShow()"></i>
                                            <span>{{ str_repeat('*', strlen(Crypt::decryptString($id->passwordcrypt))) }}</span>
                                        @else
                                            -
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="card border col-6">
                        <div class="card-body">
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div>NIPD</div>
                                    <div>{{ $id->nipd ? $id->nipd : '-' }}</div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div>Nama</div>
                                    <div>{{ $id->nama }}</div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div>Jenis Kelamin</div>
                                    <div>{{ $id->kelamin === 'l' ? 'Pria' : 'Wanita' }}</div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div>Tanggal Lahir</div>
                                    <div>{{ $id->tanggal_lahir ? $id->tanggal_lahir->format('d M Y') : '-' }}</div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div>Kelas</div>
                                    <div><a
                                            href="{{ urL(Auth::getDefaultDriver().'/kelas/' . $id->id_kelas . '/detail') }}">{{ $id->idKelas->kelas }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary ml-auto mr-lg-5 shadow-primary mb-3">Edit Data</button>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        "use strict";

        function detailShow() {
            var password_parent = $('#detpass');
            if (password_parent.children('i').hasClass('fa-eye-slash')) {
                password_parent.children('span').html('{{ Crypt::decryptString($id->passwordcrypt) }}')
                password_parent.children('i').addClass('fa-eye').removeClass('fa-eye-slash')
            } else {
                password_parent.children('span').html(
                    '{{ str_repeat('*', strlen(Crypt::decryptString($id->passwordcrypt))) }}')
                password_parent.children('i').addClass('fa-eye-slash').removeClass('fa-eye')
            }

        }

    </script>
@endpush
