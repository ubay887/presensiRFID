"use strict";
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function valueAuth() {
    $.ajax({
        url: '/logtime',
        type: "GET",
        dataType: "json",
        success: function (data) {
            $('#timeago').html(data.time);
        },
        error: function (data) {
        }
    });
}
