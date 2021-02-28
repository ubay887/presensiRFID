@extends('template.master')
@section('title', 'profile')
@section('judul', 'Profile')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('admin/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item active">
        Profile
    </div>
@endsection
@section('main')
    <h2 class="section-title">You're the king on this website.</h2>
    <p class="section-lead">
        your code look like copypasta from stackoverflow LMAO. change your code ASAP!
    </p>
    <div class="container mt-5">
        <div class="card profile-widget">
            <div class="profile-widget-header">
                <img alt="image" src="{{ asset(Auth::guard('admin')->user()->foto) }}"
                    class="rounded profile-widget-picture">
            </div>
            <form method="post" class="needs-validation" enctype="multipart/form-data" action="/admin/profile/update">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4 col-12">
                            <label>ID Chat</label>
                            <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->idchat }}"
                                required name="idchat">
                            <div class="invalid-feedback">
                                Please fill in the Id Chat
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->nama }}"
                                required name="fullname">
                            <div class="invalid-feedback">
                                Please fill in the first name
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->username }}"
                                autocomplete="off" name="username">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="form-group col-md-10 col-12">
                            <label>Upload New Picture</label>
                            <div class="clsbox-1" runat="server">
                                <div class="dropzone clsbox dz-clickable" id="mydropzone">
                                    <div class="dz-default dz-message">
                                        <span>Drop files here or click to upload image</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('/profile/changepassword') }}" class="btn btn-primary mr-2">Change Password</a>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    <script>
        "use strict";

        var dropzone = new Dropzone("#mydropzone", {
            required: true,
            url: '/admin/profile/update',
            maxFiles: 1,
            addRemoveLinks: true,
            maxfilesexceeded: function(file) {
                this.removeAllFiles();
                this.addFile(file);
            },
            init: function() {
                this.hiddenFileInput.removeAttribute('multiple');
            }
        });

    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('css/dropzone.min.css') }}">
    <style>
        .dropzone {
            border: 2px dashed #6777ef;
        }

    </style>

@endpush
