@extends('template.master')
@section('title', 'Change Password')
@section('judul', 'Change Password')
@section('breadcrumb')
    <div class="breadcrumb-item">
        <a href="{{ url('guru/dashboard') }}">Dashboard</a>
    </div>
    <div class="breadcrumb-item">
        <a href="{{ url('guru/profile') }}">Profile</a>
    </div>
    <div class="breadcrumb-item active">
        Change Password
    </div>
@endsection
@section('main')
    <h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
    <p class="section-lead">
        Change information about yourself on this page.
    </p>
    <div class="container mt-5">
        <div class="card">
            <form method="post" class="needs-validation" enctype="multipart/form-data" action="profile/update">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4 col-12">
                            <label>Current password</label>
                            <input type="password" class="form-control" value="" required
                                name="currentpass">
                            <div class="invalid-feedback">
                                Please fill in the Id Chat
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label>New password</label>
                            <input type="password" class="form-control" value="" required name="newpass">
                            <div class="invalid-feedback">
                                Please fill in the first name
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" value="" required name="confirmpass">
                            <div class="invalid-feedback">
                                Please fill in the last name
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('/guru/profile') }}" class="btn btn-secondary mr-2">Back</a>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection

