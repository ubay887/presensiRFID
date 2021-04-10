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
    <form action="" method="post">
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
                                    <div class="col">
                                        <div class="row">
                                            <div class="my-auto col">ID Telegram</div>
                                            <div class="col">
                                                <input type="text" class="form-control py-0"
                                                    value="{{ $id->idtelegram ? $id->idtelegram : '-' }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col">
                                        <div class="row">
                                            <div class="my-auto col">Email</div>
                                            <div class="col">
                                                <input type="email" class="form-control py-0"
                                                    value="{{ $id->email ? $id->email : '-' }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col">
                                        <div class="row">
                                            <div class="my-auto col">Password</div>
                                            <div class="col">
                                                <div class="input-group" id="detpass">
                                                    <input type="password"
                                                        class="form-control py-0 pr-5 shadow-none box-sizing"
                                                        value="{{ $id->passwordcrypt ? Crypt::decryptString($id->passwordcrypt) : '-' }}"
                                                        placeholder="Masukkan Password" name="password" id="password"
                                                        style="box-sizing: border-box" autocomplete="off">
                                                    <label for="password" class="input-group-text border-0 bg-transparent"
                                                        style="margin-left: -46px; z-index: 10;">
                                                        <i class="far fa-eye-slash" onclick="detailShow(this)"></i>
                                                    </label>
                                                </div>
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
                                    <div class="col">
                                        <div class="row">
                                            <div class="my-auto col">Nama</div>
                                            <div class="col">
                                                <input type="text" name="nama" class="form-control"
                                                    value="{{ $id->nama }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col">
                                        <div class="row">
                                            <div class="my-auto col">Jenis Kelamin</div>
                                            <div class="col">
                                                {{-- {{ $id->kelamin === 'l' ? 'Pria' : 'Wanita' }} --}}
                                                <span class="mr-2">
                                                    <input type="radio" id="male" name="gender" value="male"
                                                        {{ $id->kelamin === 'l' ? 'checked' : '' }}>
                                                    <label for="male">Pria</label>
                                                </span>
                                                <span>
                                                    <input type="radio" id="female" name="gender" value="female"
                                                        {{ $id->kelamin === 'p' ? 'checked' : '' }}>
                                                    <label for="female">Wanita</label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col">
                                        <div class="row">
                                            <div class="my-auto col">Role</div>
                                            <div class="col">
                                                {{ $id->role }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($id->role === 'wali kelas')
                                    <div class="row py-2 d-flex justify-content-end">
                                        <a
                                            href="{{ urL(Auth::getDefaultDriver() . '/kelas/' . $id->idWaliKelas->id . '/detail') }}">{{ $id->idWaliKelas->kelas }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-auto mr-lg-5 shadow-primary mb-3">Save Data</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('js')
    <script type="text/javascript">
        "use strict";

        function detailShow(e) {
            if ($(e).hasClass('fa-eye-slash')) {
                document.getElementsByName("password")[0].type = "text";
                $(e).addClass('fa-eye').removeClass('fa-eye-slash')
            } else {
                document.getElementsByName("password")[0].type = "password";
                $(e).addClass('fa-eye-slash').removeClass('fa-eye')
            }
        }

    </script>
@endpush
