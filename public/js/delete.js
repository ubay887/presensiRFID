$('a[data-original-title="Delete"]').click(function () {
    const id = $(this).data('id');
    const name = $(this).data('name');

    swal.fire({
        title: "Anda ingin menghapus data siswa ini?",
        icon: "question",
        showCancelButton: true,
        confirmButtonClass: 'btn-danger waves-effect waves-light',
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/admin/" + name + "/delete",
                type: "POST",
                data: {
                    id: id
                },
                success: function (data) {
                    location.reload();
                }
            });
        }
    })
});
