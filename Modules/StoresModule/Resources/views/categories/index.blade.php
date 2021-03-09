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
                        <h4 class="card-title">الأقسام الرئيسيه</h4>
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
                                    <a href="{{route('categories.create')}}" class="btn btn-success"><i class="la la-plus"> </i>إضافه جديد</a>
                                </h1>
                            </div>

                            <table id="categories_table" class="table table-striped table-bordered file-export text-center">


                                <thead>

                                <tr>

                                    <th>


                                        <label for="check_all">حذف الكل</label>
                                        <input type="checkbox" id="check_all">

                                        <button class="btn btn-danger" id="delete_all"><i class="la la-trash"></i></button>

                                    </th>
                                    <th>الإسم</th>
                                    <th>الصوره</th>
                                    <th>القسم الرئيسي</th>
                                    <th>العمليات</th>

                                </tr>
                                </thead>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- File export table -->
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
            $('#categories_table').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    {extend: 'print', messageBottom: ' <strong>All rights Reserved  .</strong>'},
                    {extend: 'excel'},
                    {extend: 'pdf'},
                    {extend: 'copy'},
                ],
                "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                "processing": true,
                "serverSide": true,

                "ajax": {
                    "url": "{{route('categories.dataTable')}}",
                    "type": "GET"
                },
                "columns": [
                    {data: 'check', name: 'check', orderable: false, searchable: false},
                    {data: 'name', name: 'name'},
                    {data: 'photo', name: 'photo'},
                    {data: 'parent_id', name: 'parent_id'},

                    {data: 'operations', name: 'operations', orderable: false, searchable: false},

                ],
                'language': {!! yajra_lang() !!}
            });

        });
    </script>


@endpush
