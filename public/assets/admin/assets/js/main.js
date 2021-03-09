$(document).on('click', '#check_all', function () {
    $('.item_checkbox').each(function () {
        if ($('input[id="check_all"]:checkbox:checked').length === 0) {
            $(this).prop('checked', false);
        } else {
            $(this).prop('checked', true)
        }
    })

})

$(document).on('click', '#delete_all', function () {
    var item_checked = $('input[class="item_checkbox"]:checkbox').filter(':checked').length;
    if (item_checked > 0) {

    } else {

    }
})
