@extends('commonmodule::layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/plugins/pickers/daterange/daterange.css">

    <style>
        .progress {
            margin: 10px;
            width: 100%;
        }

    </style>
@endpush
@section('content')

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
                        <h4 class="card-title">إعدادات الموقع</h4>
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
                    <div id="validation-errors"></div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form id="settings-form" action="{{route('settings.save')}}" class="steps-validation wizard-circle" method="post" enctype="multipart/form-data">
                            @csrf


                            <!-- Step 1 -->
                                <h6>الخطوه الأولي </h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="firstName3">
                                                    إسم الموقع :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" value="{{settings()->name}}" class="form-control " id="firstName3" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="lastName3">
                                                    العنوان :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" value="{{settings()->address}}" class="form-control " id="lastName3" name="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">
                                                    البريد الﻹلكتروني :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="email" value="{{settings()->email}}" class="form-control " id="email" name="email">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">
                                                    وصف الموقع :
                                                    <span class="danger">*</span>
                                                </label>
                                                <textarea name="description" id="" cols="180" rows="10">{{settings()->description}}</textarea>
                                            </div>
                                        </div>

                                    </div>

                                </fieldset>
                                <!-- Step 2 -->
                                <h6>الخطوه الثانيه</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="proposalTitle3">
                                                    الهاتف :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" value="{{settings()->mobile}}" class="form-control " id="mobile" name="mobile">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress6">
                                                    الواتس :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" value="{{settings()->whatsapp}}" class="form-control " id="whatsapp" name="whatsapp">
                                            </div>
                                            <div class="form-group">
                                                <label for="videoUrl3">فيس بوك :</label>
                                                <span class="danger">*</span>
                                                <input type="url" value="{{settings()->facebook}}" class="form-control" id="facebook" name="facebook">
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jobTitle5">
                                                    تويتر :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="url" value="{{settings()->twitter}}" class="form-control " id="twitter" name="twitter">
                                            </div>
                                            <div class="form-group">
                                                <label for="jobTitle5">
                                                    يوتيوب :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="url" value="{{settings()->youtube}}" class="form-control " id="youtube" name="youtube">
                                            </div>

                                            <div class="form-group">
                                                <label for="jobTitle5">
                                                    انستاجرام :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="url" value="{{settings()->instagram}}" class="form-control " id="instagram" name="instagram">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h6>الخطوه الثالثه</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="proposalTitle3">
                                                    لوجو الموقع :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="file" accept="image/*" onchange="loadFileLogo(event)" class="form-control " name="logo">
                                                <br>
                                                @if(settings()->logo)
                                                    <img src="{{asset('images/logo/'.settings()->logo)}}" style="width: 150px; height: 150px" id="logo"/>
                                                @else
                                                    <img src="{{asset('images/logo.png')}}" style="width: 150px; height: 150px" id="logo"/>
                                                @endif
                                                {{--End If--}}

                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jobTitle5">
                                                    الايكون :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="file" accept="image/*" onchange="loadFileIcon(event)" class="form-control " name="icon">
                                                <br>
                                                @if(settings()->icon)
                                                    <img src="{{asset('images/icon/'.settings()->icon)}}" style="width: 150px; height: 150px" id="icon"/>
                                                @else
                                                    <img src="{{asset('images/logo.png')}}" style="width: 150px; height: 150px" id="icon"/>
                                                @endif
                                                {{--End If--}}
                                            </div>


                                        </div>
                                    </div>
                                </fieldset>


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

    <script>
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
    <script>


        var loadFileLogo = function (event) {
            var output = document.getElementById('logo');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadFileIcon = function (event) {
            var output = document.getElementById('icon');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

    </script>

    <script>
        $('#settings-form').on('submit', function (e) {
            e.preventDefault();
            var url = $(this).attr('action'),
                form = new FormData($('#settings-form')[0]);


            $.ajax({

                url: url,
                type: 'post',
                contentType: false,
                cache: false,
                processData: false,
                data: form,
                beforeSend: function () {

                    $('#dynamic').removeClass('d-none');

                },

                'statusCode': {

                    200: function (response) {


                        setTimeout(function () {
                            $.notify(
                                response.success, 'success',
                            );
                            $('#dynamic').addClass('d-none');
                        }, 500)

                    },
                    404: function (xhr) {


                        $.each(xhr.responseJSON.errors, function (key, value) {


                            setTimeout(function () {
                                $.notify(
                                    value,
                                );
                                $('#dynamic').addClass('d-none');
                            }, 500)

                        });
                    }
                }


            });

        })


    </script>



@endpush
