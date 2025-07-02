/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$('.trigger--modal-delete').on('click', function () {
    $('#modal--delete').modal('show');
    $('#modal--delete form').attr('action', $(this).data('url'));
})

$(".price").inputmask({
    alias : "currency",
    groupSeparator: ".",
    radixPoint: ",",
    prefix: "Rp. ",
    placeholder: "",
    allowPlus: false,
    allowMinus: false,
    rightAlign: false,
    digits: 0,
    removeMaskOnSubmit: true,
});

$('.number').inputmask({
    alias: "numeric",
    groupSeparator: ".",
    radixPoint: ",",
    placeholder: "_",
    allowPlus: false,
    allowMinus: false,
    rightAlign: false,
    digits: 0,
    removeMaskOnSubmit: true,
});

$("a.image-zoom").fancybox({
    'transitionIn': 'elastic',
    'transitionOut': 'elastic',
    'speedIn': 600,
    'speedOut': 200,
    'overlayShow': false
});
