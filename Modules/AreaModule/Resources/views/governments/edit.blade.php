@extends('commonmodule::layouts.master')
@push('css')
@endpush
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">{{$settings->name}}</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin-panel/governments')}}">المحافظات</a>
                        </li>

                        <li class="breadcrumb-item active"><a href="#">إضافه محافطه جديده</a>
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
                        <h4 class="card-title">إضافه محافطه جديده</h4>
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
                            <form id="governments_form" action="{{route('governments.update',$government->id)}}" class=" wizard-circle" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <!-- Step 1 -->
                                <h6></h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" value="{{$government->id}}" name="id">
                                                <label for="name">
                                                    إسم الحافظه :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input value="{{$government->name}}" type="text" class="form-control " id="name" name="name">
                                            </div>
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
    <script type="text/javascript">

        $('#governments_form').on('submit', function (e) {
            e.preventDefault();

            var data = new FormData($('#governments_form')[0]),
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

                            window.location.href = '../../governments';
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
