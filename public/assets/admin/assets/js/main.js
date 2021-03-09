$(document).on('click', '#check_all', function () {
    $('.item_checkbox').each(function () {
        if ($('input[id="check_all"]:checkbox:checked').length === 0) {
            $(this).prop('checked', false);
        } else {
            $(this).prop('checked', true)
        }
    })

})

function delete_form() {
    form = $('#form_data');
    url = form.attr('action');

    $.ajax({
        'type': 'post',
        'url': url,
        data: form.serialize(),
        beforeSend: function () {

        },
        'statusCode': {

            200: function (response) {
                $('#jello').modal().hide();

                toastr.success(response.success, '', {positionClass: 'toast-bottom-left'});
                $('.modal-backdrop').removeClass('modal-backdrop').removeClass('show');


                $('#categories_table').DataTable().ajax.reload();

            },
            404: function (xhr) {
                $.each(xhr.responseJSON.errors, function (key, value) {
                    $('#validation-errors').append('<div class="alert alert-danger">' + value + '</div');
                });
            }
        }


    });
}

$(document).on('click', '#delete_all', function () {
    var item_checked = $('input[class="item_checkbox"]:checkbox').filter(':checked').length;
    if (item_checked > 0) {

        $('#jello').removeClass('hidden').modal().show();

    } else {

        $('#jello_no_data').modal().show();


    }
})

