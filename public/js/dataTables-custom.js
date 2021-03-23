"use strict";

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
$('#searchDataTables').on('keyup', function () {
    table.search(this.value).draw();
});

var checked_length, total;
$("[data-checkboxes]").each(function () {
    var me = $(this),
        group = me.data('checkboxes'),
        role = me.data('checkbox-role');

    me.change(function () {
        var all = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'),
            checked = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"]):checked'),
            dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]');
        total = all.length;
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

}

//guru
var table = $('#dataTablesGuru').DataTable({
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
        "targets": [0, 9]
    }],
    "dom": 'rt<"row"<"col-3 pr-0 pl-3"i><"col-6 text-center p-0"l><"col-3 pl-0 pr-3"p>>'
})
$('#searchDataTables').on('keyup', function () {
    table.search(this.value).draw();
});