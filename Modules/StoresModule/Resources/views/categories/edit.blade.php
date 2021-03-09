@extends('commonmodule::layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/plugins/pickers/daterange/daterange.css">

@endpush

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">{{settings()->name}}</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin-panel/categories')}}">الاقسام</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">{{$cat->name}}</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">تعديل</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

    </div>
    <div class="">
        <div id="dynamic" class="progress-bar d-none progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
            <span id="current-progress"></span>
        </div>
    </div>
    <br>
    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$cat->name}}</h4>
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
                            <form id="categories_form" action="{{route('categories.update',$cat->id)}}" class=" wizard-circle" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <!-- Step 1 -->
                                <h6></h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" value="{{$cat->id}}">
                                            <div class="form-group">
                                                <label for="name">
                                                    إسم القسم :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" value="{{$cat->name}}" class="form-control " id="name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">
                                                    وصف القسم :
                                                    <span class="danger">*</span>
                                                </label>
                                                <textarea class="form-control" name="description" id="" cols="150" rows="10">{{$cat->description}}</textarea>
                                            </div>
                                        </div>


                                    </div>


                                </fieldset>

                                <h6></h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="proposalTitle3">
                                                    الصوره :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="file" accept="image/*" onchange="loadFileLogo(event)" class="form-control " name="photo">
                                                <br>

                                                @if($cat->photo)
                                                    <img src="{{$cat->photo}}" style="width: 150px; height: 150px" id="logo"/>
                                                @else
                                                    <img src="{{asset('images/logo.png')}}" style="width: 150px; height: 150px" id="logo"/>
                                                @endif
                                                {{--End If--}}


                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jobTitle5">
                                                    الغلاف :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="file" accept="image/*" onchange="loadFileIcon(event)" class="form-control " name="cover">
                                                <br>

                                                @if($cat->photo)
                                                    <img src="{{$cat->cover}}" style="width: 150px; height: 150px" id="icon"/>
                                                @else
                                                    <img src="{{asset('images/logo.png')}}" style="width: 150px; height: 150px" id="icon"/>
                                                @endif
                                                {{--End If--}}


                                            </div>


                                        </div>
                                    </div>
                                </fieldset>
                                <h6></h6>
                                <fieldset>

                                    <div class="row">
                                        <div class="form-group">
                                            <label for="jobTitle5">
                                                القسم :

                                            </label>
                                            <span class="danger">*</span>
                                            <select name="parent_id" class="select2-rtl form-control" id="select2-rtl-multi" style="width: 1500px;">
                                                <optgroup label="إختر قسم ">
                                                    <option value="0">قسم رئيسي</option>
                                                    @foreach($categories as $index=>$category)
                                                        <option value="{{$index}}" {{$cat->parent_id == $index ?'selected':''}}>{{$category}}</option>
                                                    @endforeach
                                                    {{--End Foreach--}}


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

    <script src="{{aurl('app-assets/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
    <script src="{{aurl('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}" type="text/javascript"></script>
    <script src="{{aurl('app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{aurl('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <script src="{{aurl('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{aurl('app-assets/js/scripts/forms/wizard-steps.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="{{aurl('')}}/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="{{aurl('')}}/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>


    <script> /*progress Bar*/
        $(function () {
            var current_progress = 0;
            var interval = setInterval(function () {
                current_progress += 10;
                $("#dynamic")
                    .css("width", current_progress + "%")
                    .attr("aria-valuenow", current_progress)
                    .text(current_progress + " % جاري التحميل ..");
                if (current_progress >= 100)
                    clearInterval(interval);
            }, 500);
        });
    </script>
    {{--End progress Bar--}}

    <script> /*image viewer*/


        var loadFileLogo = function (event) { /*for photo*/
            var output = document.getElementById('logo');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadFileIcon = function (event) { /*for cover*/
            var output = document.getElementById('icon');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

    </script>
    {{--    End image viewer--}}

    <script> /*form submit*/

        $('#categories_form').on('submit', function (e) {
            e.preventDefault();

            form = new FormData($('#categories_form')[0]);
            url = $(this).attr('action');

            $.ajax({

                'type': 'post',
                'url': url,
                data: form,
                'contentType': false,
                'cache': false,
                'processData': false,
                'statusCode': {

                    200: function (response) {

                        toastr.success(response.success, '', {positionClass: 'toast-bottom-left'})
                        setTimeout(function () {
                            window.location.replace('../../categories');
                        }, 1000)
                    },

                    422: function (xhr) {
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            toastr.error(value, '', {positionClass: 'toast-bottom-left'})
                        });
                    },

                    500: function (xhr) {
                        console.log(xhr.responseJSON.message)
                        toastr.warning(xhr.responseJSON.message, '', {positionClass: 'toast-bottom-left'})
                    }
                }


            });
        })
    </script>
    <!-- end form-->



@endpush
