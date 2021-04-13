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
        @csrf
        <div class="container mt-5">
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="dropdown dropright mx-auto" style="width: fit-content;">
                        <img alt="image" id="profilemenu" src="{{ asset($id->foto) }}"
                            class="rounded shadow dropdown-toggle profile-widget-picture" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" data-toggle="modal" data-target="#viewModal"
                                style="cursor: default">View Photo</a>
                            <a class="p-0 dropdown-item" href="#">
                                <label for="img" class="d-block mb-0" style="padding: 10px 20px">Upload Photo</label>
                            </a>
                            <a class="dropdown-item text-danger" href="javascript:void(0)" id="resetphoto">Reset Photo</a>
                        </div>
                    </div>
                    <input type="file" hidden accept="image/*" id="img" name="photo" onclick="fileClicked(event)"
                        onchange="fileChanged(event)">
                    <input type="file" hidden accept="image/*" id="img2" onclick="fileClicked(event)"
                        onchange="fileChanged(event)">
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
                                                <div class="selectgroup w-100">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="role" value="wali kelas"
                                                            class="selectgroup-input" @if ($id->role === 'wali kelas') checked @endif>
                                                        <span class="selectgroup-button">wali kelas</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="role" value="kesiswaan"
                                                            class="selectgroup-input" @if ($id->role === 'kesiswaan') checked @endif>
                                                        <span class="selectgroup-button">kesiswaan</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($id->role === 'wali kelas')
                                    <div class="row py-2 d-flex justify-content-end">
                                        <select class="form-control select2">
                                            @foreach ($kelas as $kls)
                                                <option @if ($id->idWaliKelas->id === $kls->id) selected @endif>{{ $kls->kelas }}</option>
                                            @endforeach
                                        </select>
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

    <!-- modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="viewModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center" role="document">
            <img id="profilemodal" src="{{ asset(Auth::guard('admin')->user()->foto) }}"
                style="width: 25vw; height: 50vh;object-fit: cover;" alt="">
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        "use strict";

        $('#viewModal').appendTo("body");

        function detailShow(e) {
            if ($(e).hasClass('fa-eye-slash')) {
                document.getElementsByName("password")[0].type = "text";
                $(e).addClass('fa-eye').removeClass('fa-eye-slash')
            } else {
                document.getElementsByName("password")[0].type = "password";
                $(e).addClass('fa-eye-slash').removeClass('fa-eye')
            }
        }

        $(function() {
            $('#img').change(function() {
                var input = this;
                var url = $(this).val();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#profilemenu').attr('src', e.target.result);
                    $('#profilemodal').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            });

            $('#resetphoto').click(function() {
                $('#profilemenu').attr('src', "{{ asset($id->foto) }}");
                $('#profilemodal').attr('src', "{{ asset($id->foto) }}");
                $('#img').replaceWith($('#img2').clone());
            });
        });

        var clone = {};

        // FileClicked()
        function fileClicked(event) {
            var fileElement = event.target;
            if (fileElement.value != "") {
                clone[fileElement.id] = $(fileElement).clone(); //'Saving Clone'
            }
            //What ever else you want to do when File Chooser Clicked
        }

        // FileChanged()
        function fileChanged(event) {
            var fileElement = event.target;
            if (fileElement.value == "") {
                clone[fileElement.id].insertBefore(fileElement); //'Restoring Clone'
                $(fileElement).remove(); //'Removing Original'
                if (eventMoreListeners) {
                    addEventListenersTo(clone[fileElement.id])
                } //If Needed Re-attach additional Event Listeners
            }
            //What ever else you want to do when File Chooser Changed
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
