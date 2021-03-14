@extends('commonmodule::layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/vendors/css/forms/selects/select2.min.css">

@endpush
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">{{$settings->name}}</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin-panel/zones')}}">المناطق</a>
                        </li>

                        <li class="breadcrumb-item active"><a href="#">إضافه منطقه جديده</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

    </div>

    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">إضافه منطقه جديده</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
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
                        <div class="card-body">
                            <form id="zones_form" action="{{route('zones.store')}}" class=" wizard-circle" method="post" enctype="multipart/form-data">
                            @csrf

                            <!-- Step 1 -->
                                <h6></h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    إسم المنطقه :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control " id="name" name="name">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="government">
                                                المحافظه :

                                            </label>
                                            <span class="danger">*</span>
                                            <select name="government_id" class="select2-rtl  form-control " id="government">
                                                <optgroup label="">
                                                    @forelse($governments as $gov)
                                                        <option value="{{$gov->id}}">{{$gov->name}}</option>

                                                    @empty
                                                    @endforelse

                                                </optgroup>

                                            </select>

                                        </div>


                                    </div>


                                </fieldset>


                                <button type="submit" class="btn btn-success"><i class="la la-save"></i>حفظ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{aurl('')}}/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="{{aurl('')}}/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
    <script type="text/javascript">

        $('#zones_form').on('submit', function (e) {
            e.preventDefault();

            var data = new FormData($('#zones_form')[0]),
                url = $(this).attr('action');
            $.ajax({
                'type': 'post',
                'url': url,
                contentType: false,
                cache: false,
                processData: false,
                data: data,

                'statusCode': {

                    200: function (response) {

                        toastr.success(response.success, '', {positionClass: 'toast-bottom-left'});


                        setTimeout(function () {

                            window.location.href = '../zones';
                        }, 800)

                    },
                    422: function (xhr) {

                        $.each(xhr.responseJSON.errors, function (key, value) {
                            toastr.error(value, '', {positionClass: 'toast-bottom-left'})
                        });
                    }
                }


            });
        })
    </script>
@endpush
