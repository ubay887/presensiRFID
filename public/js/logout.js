! function ($) {
    "use strict";
    $('#logout').click(function () {
        swal.fire({
            title: "Anda ingin keluar dari web ini?",
            icon: "question",
            showCancelButton: true,
            confirmButtonClass: 'btn-danger waves-effect waves-light',
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            closeOnConfirm: true,
            closeOnCancel: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/logout";
            }
        })
    });
}(window.jQuery);