var index = 1;

function tambahForm() {
    index += 1;
    if (index <= 4) {
        const sectionForm = document.getElementById('formid');
        sectionForm.innerHTML +=
            '<div class="card">' +
            '<div class="card-header">' +
            '<h3 class="mx-auto d-flex align-items-center">' +
            '<i class="ph-user-circle-plus ph-lg"></i> Form Tambah Siswa</h3>' +
            '<div class="card-header-action">' +
            '<a data-collapse="#mycard-collapse-' + index + '" class="btn btn-icon btn-info" href="javascript:void(0)">' +
            '<i class="fas fa-minus"></i></a>' +
            '</div>' +
            '</div>' +
            '<div class="collapse show" id="mycard-collapse-' + index + '">' +
            '<div class="card-body">' +
            '<div class="row">' +
            '<div class="col">' +
            '<div class="form-group">' +
            '<label>ID RFID</label>' +
            '<input type="text" class="form-control" placeholder="Masukkan Nomor RFID">' +
            '</div>' +
            '<div class="form-group">' +
            '<label>Nomor Induk Pegawai</label>' +
            '<input type="text" class="form-control" placeholder="Masukkan Nomor Induk Pegawai">' +
            '</div>' +
            '<div class="form-group">' +
            '<label>Nama Lengkap</label>' +
            '<input type="text" class="form-control" placeholder="Masukkan Nama Lengkap">' +
            '</div>' +
            '<div class="form-group row ml-1 ">' +
            '<div class="form-check">' +
            '<input class="form-check-input" type="radio" value="laki">' +
            '<label class="form-check-label">' +
            'Laki-laki' +
            '</label>' +
            '</div>' +
            '<div class="form-check ml-3">' +
            '<input class="form-check-input" type="radio" value="perempuan">' +
            '<label class="form-check-label">' +
            'Perempuan' +
            '</label>' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label>Pilih Kelas</label>' +
            '<select class="form-control">' +
            '<option selected>...</option>' +
            '<option>Option 1</option>' +
            '<option>Option 2</option>' +
            '<option>Option 3</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';
    }
}
