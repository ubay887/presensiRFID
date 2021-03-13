/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
function valueAuth (route) {
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