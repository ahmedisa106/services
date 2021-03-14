@extends('commonmodule::layouts.master')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    {{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">--}}


@endpush
@section('content')



    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">المحافظات</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>


                    </div>

                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">

                            <div class="pull-left">
                                <h1 class="card-title">
                                    <a href="{{route('governments.create')}}" class="btn btn-success"><i class="la la-plus"> </i>إضافه جديد</a>
                                    <a id="delete_all" href="javascript:event" class="btn btn-danger"><i class="la la-trash"> </i>حذف الكل</a>
                                </h1>

                            </div>
                            <form id="form_data" action="{{route('governments.deleteAll')}}" method="post">

                                @csrf
                                <table id="governments_table" class="table table-striped table-bordered file-export ">


                                    <thead>

                                    <tr>

                                        <th>


                                            <label for="check_all"> الكل</label>
                                            <input type="checkbox" id="check_all">

                                            {{--                                            <button class="btn btn-outline-danger" id="delete_all"><i class="la la-trash"></i></button>--}}


                                        </th>
                                        <th>الإسم</th>
                                        <th>العمليات</th>

                                    </tr>
                                    </thead>


                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- File export table -->

    <!-- Modal -->
    <div class="modal hidden  animated jello text-left" id="jello" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel45" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel45">تأكيد الحذف</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">هل تريد الحذف !</h5>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">لا</button>
                    <button type="button" onclick="delete_form()" class=" btn btn-outline-primary">نعم</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal hidden  animated jello text-left" id="jello_single" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel45" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel45">تأكيد الحذف</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">هل تريد الحذف !</h5>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">لا</button>
                    <button type="button" class="delete_btn btn btn-outline-primary">نعم</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal    animated jello text-left" id="jello_no_data" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel45" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel45">تأكيد الحذف</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body alert alert-danger">
                    <h5 class="text-center"> من فضلك قم بإختيار بعض العناصر أولا !</h5>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script src="{{aurl('')}}/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="{{aurl('')}}/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"
            type="text/javascript"></script>
    {{--    <script src="{{aurl('')}}/app-assets/js/scripts/tables/datatables/datatable-advanced.js" type="text/javascript"></script>--}}
    <!-- END PAGE LEVEL JS-->
    <script>

        $(document).ready(function () {
            $('#governments_table').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    {extend: 'print', messageBottom: ' <strong>All rights Reserved  .</strong>'},
                    {extend: 'excel'},
                    {extend: 'pdf'},
                    {extend: 'copy'},
                ],
                "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
                "processing": true,
                "serverSide": true,

                "ajax": {
                    "url": "{{route('governments.dataTable')}}",
                    "type": "GET",

                },
                "columns": [
                    {data: 'check', name: 'check', orderable: false, searchable: false},
                    {data: 'name', name: 'name'},
                    {data: 'operations', name: 'operations', orderable: false, searchable: false},

                ],
                'language': {!! yajra_lang() !!}
            });

        });
    </script>

    <script>
        $(document).on('click', '.deleteBtn', function (e) {
            e.preventDefault();

            form = $(this).parent().parent().find('.deleteForm');
            id = form.find('.model_id').val();
            url = form.attr('action');


            $confirm = confirm('هل تريد حذف المحافظه !');
            if ($confirm) {


                $.ajax({
                    'type': 'delete',
                    'url': url,
                    data: {
                        'id': id,
                        '_token': '{{csrf_token()}}',

                    },
                    beforeSend: function () {

                    },
                    'statusCode': {

                        200: function (response) {
                            toastr.success(response.success, '', {positionClass: 'toast-bottom-left'});

                            $('#governments_table').DataTable().ajax.reload();


                        },
                        404: function (xhr) {
                            $.each(xhr.responseJSON.errors, function (key, value) {
                                $('#validation-errors').append('<div class="alert alert-danger">' + value + '</div');
                            });
                        }
                    }


                });

            }


        })
    </script>


@endpush
