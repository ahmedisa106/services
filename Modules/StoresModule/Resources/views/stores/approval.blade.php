<input class="store_approval" data-id="{{$row->id}}" type="checkbox" {{$row->approval ==1? 'checked':''}}>


<script>

    $('.store_approval').on('change', function () {
        let checked = false;
        if ($(this).is(':checked')) {
            checked = true;
        }
        let id = $(this).data('id');

        $.ajax({
            type: "post",
            url: "{{route('stores.approval')}}",
            data: {
                id: id,
                checked: checked,
                _token: "{{csrf_token()}}"
            },

            success: function (res) {

                console.log(res)
            }
        })
    })


</script>
