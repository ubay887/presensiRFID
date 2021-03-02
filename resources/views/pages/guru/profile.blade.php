@extends('template.master')
@section('title', 'profile')
@section('judul', 'Profile')
@section('breadcrumb')
<div class="breadcrumb-item">
    <a href="{{ url('guru/dashboard') }}">Dashboard</a>
</div>
<div class="breadcrumb-item active">
    Profile
</div>
@endsection
@section('main')
<h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
<p class="section-lead">
    Change information about yourself on this page.
</p>
<div class="container mt-5">
    <div class="card profile-widget">
        <div class="profile-widget-header">
            <img alt="image" src="{{ asset(Auth::user()->gambar) }}" class="rounded profile-widget-picture">
        </div>
        <form method="post" class="needs-validation" enctype="multipart/form-data" action="profile/update">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4 col-12">
                        <label>ID Chat</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->id_chat }}" required name="idchat">
                        <div class="invalid-feedback">
                            Please fill in the Id Chat
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label>First Name</label>
                        <input type="text" class="form-control" value="" required name="firstname">
                        <div class="invalid-feedback">
                            Please fill in the first name
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label>Last Name</label>
                        <input type="text" class="form-control" value="" required name="lastname">
                        <div class="invalid-feedback">
                            Please fill in the last name
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-5 col-12">
                        <label>Username</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->username }}" autocomplete="off" name="username">
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ Auth::user()->email }}" required="">
                        <div class="invalid-feedback">
                            Please fill in the email
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-md-10 col-12">
                        <label>Upload New Picture</label>
                        <div class="dropzone dz-clickable" id="mydropzone">
                            <div class="dz-default dz-message"><span>Drop files here or click to upload image</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer text-right">
                <a href="{{ url('/guru/profile/changepass') }}" class="btn btn-primary mr-2">Change Password</a>
                <button type="submit" class="btn btn-success">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script>
    var name = '{{ Auth::user()->name }}'
    $('input[name="firstname"]').val(name.split(' ')[0])
    $('input[name="lastname"]').val(name.split(' ')[1])
    "use strict";

    var dropzone = new Dropzone("#mydropzone", {
        url: "#",
        maxFiles: 1,
        init: function() {
            this.hiddenFileInput.removeAttribute('multiple');
        }
    });

    var minSteps = 6,
        maxSteps = 60,
        timeBetweenSteps = 100,
        bytesPerStep = 100000;

    dropzone.uploadFiles = function(files) {
        var self = this;

        for (var i = 0; i < files.length; i++) {

            var file = files[i];
            totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

            for (var step = 0; step < totalSteps; step++) {
                var duration = timeBetweenSteps * (step + 1);
                setTimeout(function(file, totalSteps, step) {
                    return function() {
                        file.upload = {
                            progress: 100 * (step + 1) / totalSteps,
                            total: file.size,
                            bytesSent: (step + 1) * file.size / totalSteps
                        };

                        self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                        if (file.upload.progress == 100) {
                            file.status = Dropzone.SUCCESS;
                            self.emit("success", file, 'success', null);
                            self.emit("complete", file);
                            self.processQueue();
                        }
                    };
                }(file, totalSteps, step), duration);
            }
        }
    }
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