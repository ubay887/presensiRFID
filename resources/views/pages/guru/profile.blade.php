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
    <h2 class="section-title">Hi, {{ Auth::guard('guru')->user()->nama }}!</h2>
    <p class="section-lead">
        Change information about yourself on this page.
    </p>
    <div class="container mt-5">
        <div class="card profile-widget">
            <form method="POST" class="needs-validation" enctype="multipart/form-data"
                action="{{ url('/guru/profile/' . Auth::guard('guru')->user()->id . '/update') }}">
                @csrf
                <div class="profile-widget-header">
                    <div class="dropdown dropright mx-auto" style="width: fit-content;">
                        <img alt="image" id="profilemenu" src="{{ asset(Auth::guard('guru')->user()->foto) }}"
                            class="rounded shadow dropdown-toggle profile-widget-picture" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" data-toggle="modal" data-target="#viewModal"
                                style="cursor: default">View Photo</a>
                            <a class="p-0 dropdown-item" href="javascript:void(0)"><label for="img" class="d-block mb-0"
                                    style="padding: 10px 20px">Upload Photo</label></a>
                            <a class="dropdown-item text-danger" href="javascript:void(0)" id="removephoto">Remove Photo</a>
                        </div>
                    </div>
                    <input type="file" hidden accept="image/*" id="img" name="photo" onclick="fileClicked(event)"
                        onchange="fileChanged(event)">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4 col-12">
                            <label>ID Chat</label>
                            <input type="text" class="form-control" value="{{ Auth::guard('guru')->user()->idchat }}"
                                required name="idchat">
                            <div class="invalid-feedback">
                                Please fill in the Id Chat
                            </div>
                        </div>
                        <div class="form-group col-lg-8 col-md-4 col-12">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value="{{ Auth::guard('guru')->user()->nama }}"
                                required name="fullname">
                            <div class="invalid-feedback">
                                Please fill in the full name
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" value="{{ Auth::guard('guru')->user()->username }}"
                                autocomplete="off" name="username">
                        </div>
                        <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{ Auth::guard('guru')->user()->email }}"
                                required="">
                            <div class="invalid-feedback">
                                Please fill in the email
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button href="javascript:void(0)" class="btn btn-primary mr-2">Change Password</button>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>


    <!-- modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="viewModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center" role="document">
            <img id="profilemodal" src="{{ asset(Auth::guard('guru')->user()->foto) }}"
                style="width: 25vw; height: 50vh;object-fit: cover;" alt="">
        </div>
    </div>
@endsection
@push('js')
    <script>
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

            $('#removephoto').click(function() {
                swal.fire({
                    title: "Hapus foto profile?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-danger waves-effect waves-light',
                    confirmButtonText: "Submit",
                    cancelButtonText: "Cancel",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.post("{{ url('/guru/profile/' . Auth::guard('guru')->user()->id . '/delete') }}",
                            function(data) {
                                location.reload();
                            });
                    }
                })
            });
        });
        $('#viewModal').appendTo("body");

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
            console.log(event.target.files);
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
@endpush
@push('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
