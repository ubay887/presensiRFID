@extends('template.master')
@section('title', 'Detail Siswa')
@section('judul')
    {{ $id->nama ? "Edit | $id->nama" : 'Edit Siswa' }}
@endsection

@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver() . '/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url(Auth::getDefaultDriver() . '/siswa') }}">Data Guru</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url()->previous() }}">Detail</a>
    </div>
    <div class="breadcrumb-item active">
        Edit
    </div>
@endsection
@section('main')
    <div class="container mt-5">
        <div class="card profile-widget">
            <div class="profile-widget-header">
                <img alt="image" src="{{ asset($id->foto) }}" class="rounded profile-widget-picture">
            </div>
            <div class="card-body row pt-5">
                <div class="col-12 d-flex justify-content-center">
                    <div class="card border col-6">
                        <div class="card-body">
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div class="my-auto">ID Telegram</div>
                                    <div><input type="text" class="form-control py-0"
                                            value="{{ $id->idtelegram ? $id->idtelegram : '-' }}" readonly></div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div class="my-auto">Email</div>
                                    <div><input type="email" class="form-control py-0"
                                            value="{{ $id->email ? $id->email : '-' }}"></div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div class="my-auto">Password</div>
                                    <div>
                                        <div class="input-group" id="detpass">
                                            <span class="input-group-text border" style="margin-right: -30px; z-index: 10;"
                                                onclick="detailShow(this)" id="eye">
                                                <i class="far fa-eye-slash"></i>
                                            </span>
                                            <input type="password" class="form-control py-0 shadow-none"
                                                style="padding-left: 40px;" autocomplete="off"
                                                value="{{ $id->passwordcrypt ? Crypt::decryptString($id->passwordcrypt) : '-' }}"
                                                placeholder="Masukkan Password" name="password" onfocus="focusIn()">
                                        </div>
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
                                    <div class="my-auto">Nama</div>
                                    <div><input type="text" name="nama" class="form-control" value="{{ $id->nama }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col text-center d-flex justify-content-between">
                                    <div class="my-auto">Jenis Kelamin</div>
                                    <div>{{ $id->kelamin === 'l' ? 'Pria' : 'Wanita' }}</div>
                                </div>
                            </div>
                            @if ($id->role === 'wali kelas')
                                <div class="row py-2">
                                    <div class="col text-center d-flex justify-content-between">
                                        <div class="my-auto">Role</div>
                                        <div>
                                            {{ $id->role }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col text-center d-flex justify-content-between">
                                        <div></div>
                                        <div>
                                            <a
                                                href="{{ urL(Auth::getDefaultDriver() . '/kelas/' . $id->idWaliKelas->id . '/detail') }}">{{ $id->idWaliKelas->kelas }}</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row py-2">
                                    <div class="col text-center d-flex justify-content-between">
                                        <div>Role</div>
                                        <div>
                                            {{ $id->role }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-auto mr-lg-5 shadow-primary mb-3">Save Data</button>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        "use strict";

        function detailShow(e) {
            if ($(e).children('i').hasClass('fa-eye-slash')) {
                document.getElementsByName("password")[0].type = "text";
                $(e).children('i').addClass('fa-eye').removeClass('fa-eye-slash')
            } else {
                document.getElementsByName("password")[0].type = "password";
                $(e).children('i').addClass('fa-eye-slash').removeClass('fa-eye')
            }
        }

        // focus eye
        function focusIn() {
            $("span#eye").css({
                'background-color': '#fefeff',
                'border-color': '#95a0f4'
            });
        }

    </script>
@endpush
