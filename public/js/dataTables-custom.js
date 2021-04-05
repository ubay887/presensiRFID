"use strict";
// admin
var table = $('#dataTables').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "order": [
        [2, "asc"]
    ],
    "columnDefs": [{
        "sortable": false,
        "targets": [0, 1, 6]
    }],
    "dom": 'rt<"row"<"col-3 pr-0 pl-3"i><"col-6 text-center p-0"l><"col-3 pl-0 pr-3"p>>'
})

//presensi
var tablePresensi = $('#dataTables_presensi').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "columnDefs": [{
        "sortable": false,
        "targets": [4, 5, 6, 7]
    }],
    "dom": 'rt<"row"<"col-3 pr-0 pl-3"i><"col-6 text-center p-0"l><"col-3 pl-0 pr-3"p>>'
})

var tableKelas = $('#dataTables_kelas').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "order": [
        [1, "asc"]
    ],
    "columnDefs": [{
        "sortable": false,
        "targets": [0, 4]
    }],
    "dom": 'rt<"row"<"col-3 pr-0 pl-3"i><"col-6 text-center p-0"l><"col-3 pl-0 pr-3"p>>'
})

$('#searchDataTables').on('keyup', function () {
    table.search(this.value).draw();
    tablePresensi.search(this.value).draw();
    tableKelas.search(this.value).draw();
});

var checked, all;
$("[data-checkboxes]").each(function () {
    var me = $(this),
        group = me.data('checkboxes'),
        role = me.data('checkbox-role');

    me.change(function () {
        var dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]');
        all = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])');
        checked = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"]):checked');
        var total = all.length,
            checked_length = checked.length;
        if (role == 'dad') {
            if (me.is(':checked')) {
                all.prop('checked', true);
                $("div.btn-group.dropright#action").removeAttr('hidden');
            } else {
                all.prop('checked', false);
                $("div.btn-group.dropright#action").attr('hidden', true);
            }
        } else {
            if (checked_length >= total) {
                dad.prop('checked', true);
                $("div.btn-group.dropright#action").removeAttr('hidden');
            } else if (checked_length === 0) {
                $("div.btn-group.dropright#action").attr('hidden', true);
            } else {
                dad.prop('checked', false);
                $("div.btn-group.dropright#action").removeAttr('hidden');
            }
        }
    });
});


var detailSelected = function () {
    if (checked.length === 0) {
        $(all).each(function () {
            var id = this.id.split('-')[1];
            window.open('/admin/siswa/' + id + '/detail', '_blank');
        })
    } else {
        $(checked).each(function () {
            var id = this.id.split('-')[1];
            window.open('/admin/siswa/' + id + '/detail', '_blank');
        });
    }
}
var siswaExcel = function () {
    if (checked === undefined) {
        window.open('/admin/siswa/export');
    }
}
