/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
if (Boolean(sessionStorage.getItem("sidebar-mini"))) {
    $('body').addClass('sidebar-mini');
    $('body').removeClass('sidebar-show');
    var sidebar_nicescroll = null;
    $(".main-sidebar .sidebar-menu > li").each(function () {
        let me = $(this);

        if (me.find('> .dropdown-menu').length) {
            me.find('> .dropdown-menu').hide();
            me.find('> .dropdown-menu').prepend('<li class="dropdown-title pt-3">' + me.find('> a').text() + '</li>');
        } else {
            me.find('> a').attr('data-toggle', 'tooltip');
            me.find('> a').attr('data-original-title', me.find('> a').text());
            $("[data-toggle='tooltip']").tooltip({
                placement: 'right'
            });
        }
    });
}

$('a[data-toggle="sidebar"]').click(function () {
    if (Boolean(sessionStorage.getItem("sidebar-mini"))) {
        sessionStorage.setItem("sidebar-mini", "");
    } else {
        sessionStorage.setItem("sidebar-mini", "1");
    }
});
