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
            <form method="POST" class="needs-validation" enctype="multipart/form-data"
                action="{{ url('/admin/profile/' . Auth::guard('admin')->user()->id . '/update') }}">
                @csrf
                <div class="profile-widget-header">
                    <div class="dropdown dropright">
                        <img alt="image" id="profilemenu" src="{{ asset(Auth::guard('admin')->user()->foto) }}"
                            class="rounded shadow dropdown-toggle profile-widget-picture" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu position-absolute" id="profilemenuitems"
                            aria-labelledby="dropdownMenuButton" style="will-change: unset">
                            <a class="dropdown-item" data-toggle="modal" data-target="#viewModal"
                                style="cursor: default">View Photo</a>

                            <a class="p-0 dropdown-item" href="#"><label for="img" class="d-block mb-0"
                                    style="padding: 10px 20px">Upload Photo</label></a>
                            <a class="dropdown-item" href="#" id="removephoto">Remove Photo</a>
                        </div>
                    </div>
                    <input type="file" hidden accept="img/*" id="img" name="photo">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4 col-12">
                            <label>ID Telegram</label>
                            <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->idtelegram }}"
                                required name="idtelegram" autocomplete="off">
                            <div class="invalid-feedback">
                                Please fill in the Id Chat
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->nama }}"
                                required name="fullname" autocomplete="off">
                            <div class="invalid-feedback">
                                Please fill in the full name
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->username }}"
                                autocomplete="off" name="username" autocomplete="off">
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

    <!-- modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="viewModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <img id="profilemodal" src="{{ asset(Auth::guard('admin')->user()->foto) }}" style="width: auto;" alt="">
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        // $('#profilemenu').on('click', function(e) {
        //     var img = $(this).offset();
        //     var tempX = e.pageX - img.left;
        //     var tempY = e.pageY - img.top;
        //     console.log(-tempX, -tempY)

        //     document.getElementById('profilemenuitems').style.willChange = 'unset';
        //     $("div.dropdown-menu#profilemenuitems").css({
        //         'top': tempY,
        //         'left': tempX,
        //         'will-change': 'unset',
        //         'transform': 'translate3d(' + tempX + ', ' + tempX + ', "0 px")'
        //     });
        // });

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
                    closeOnConfirm: true,
                    closeOnCancel: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href =
                            "{{ url('/admin/profile/' . Auth::guard('admin')->user()->id . '/delete') }}";
                    }
                })
            });
        });

        $('#viewModal').appendTo("body").modal('show.bs.modal');

    </script>
@endpush
@push('css')
    {{-- <style>
        div.dropdown-menu#profilemenuitems{
            will-change: unset;
            transform: translate3d(100px,200px,0px);
        }
    </style> --}}
@endpush
