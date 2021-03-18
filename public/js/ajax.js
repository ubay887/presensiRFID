"use strict";

function valueAuth(route) {
    $.ajax({
        url: route,
        type: "GET",
        dataType: "json",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#timeago').html(data.time)
        },
        error: function (data) {
            console.log(data)
        }
    });
}