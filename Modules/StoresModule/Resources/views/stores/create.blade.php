@extends('commonmodule::layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/plugins/forms/wizard.css">

    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->

    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/css-rtl/plugins/file-uploaders/dropzone.css">

@endPush
@section('content')

    <!-- Dropzone section start -->
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">{{$settings->name}}</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin-panel/stores')}}">المحلات</a>
                        </li>

                        <li class="breadcrumb-item active"><a href="#">إضافه محل جديد</a>
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


                            @if($categories->count()>0)
                                <form id="stores_form" action="{{route('stores.store')}}" class=" wizard-circle" method="post" enctype="multipart/form-data">
                                @csrf

                                <!-- Step 1 -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">
                                                    إسم المحل :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control " id="name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">
                                                    وصف المحل :
                                                    <span class="danger">*</span>
                                                </label>
                                                <textarea class="form-control" name="description" id="description" cols="150" rows="10"></textarea>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address">
                                                    العنوان :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control " id="address" name="address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">
                                                    البريد الألكتروني :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="email" class="form-control " id="email" name="email">
                                            </div>
                                        </div>


                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="video">
                                                    مسار الفيديو :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="url" class="form-control " id="video" name="video">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile">
                                                    الموبايل :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="mobile" name="mobile">


                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="whatsapp">
                                                    الواتس :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="whatsapp" name="whatsapp">


                                            </div>


                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="facebook">
                                                    الفيس بوك :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="url" class="form-control" id="facebook" name="facebook">


                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="instagram">
                                                    انستاجرام :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="url" class="form-control" id="instagram" name="instagram">


                                            </div>


                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="twitter">
                                                    تويتر :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="url" class="form-control" id="twitter" name="twitter">


                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="youtube">
                                                    يوتيوب :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="url" class="form-control" id="youtube" name="youtube">


                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="category">
                                                القسم :

                                            </label>
                                            <span class="danger">*</span>
                                            <select name="category_id" class="select2-rtl  form-control " id="category">
                                                <optgroup label="">

                                                    @forelse($categories as $index=>$category)
                                                        <option value="">إختر قسم من فضلك</option>
                                                        <option value="{{$index}}">{{$category}}</option>
                                                    @empty
                                                        <option selected value="">لا يوجد أقسام حاليا</option>

                                                    @endforelse


                                                </optgroup>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="autoswitch"> من : </label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="work_from" class="form-control input-lg" id="autoswitch" placeholder="Date Dropper">
                                                <div class="form-control-position">
                                                    <i class="ft-clock"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="timeformat"> إلي :</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="work_to" class="form-control input-lg" id="timeformat" placeholder="Date Dropper">
                                                <div class="form-control-position">
                                                    <i class="ft-clock"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="switchBootstrap18">حاله المحل :</label>
                                            <span class="danger">*</span>
                                            <div class="position-relative has-icon-left">
                                                <input type="checkbox" value="open" name="status" class="switchBootstrap form-control" id="switchBootstrap18" data-on-color="success" data-off-color="danger" checked/></div>

                                        </div>
                                    </div>

                                    <h6></h6>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="photo">
                                                    الصوره :
                                                    <span class="danger">*</span>
                                                </label>
                                                <input type="file" accept="image/*" onchange="loadFileLogo(event)" id="photo" class="form-control " name="photo">
                                                <br>

                                                <img src="{{asset('images/logo.png')}}" style="width: 150px; height: 150px" id="logo"/>


                                            </div>


                                        </div>


                                    </div>

                                    <input type="hidden" name="store_id" id="store_id">
                                </form>




                                <section id="dropzone-examples">
                                    <div class="card">

                                        <div class="card-content ">

                                            <label for="photo">
                                                الألبوم :
                                                <span class="danger">*</span>
                                            </label>
                                            <form action="#" class="dropzone dropzone-area" id="dpzMultipleFiles">
                                                <div class="dz-message">إسحب صورك هنا</div>
                                            </form>

                                        </div>
                                    </div>
                                </section>
                                <button type="submit" id="btn-submit" class="btn btn-success form-control"><i class="la la-save"></i>حفظ</button>
                            @else
                                <div class="text-center text-danger">لا يوجد أقسام حاليا الرجاء إنشاء قسم أولا
                                    <a href="{{route('categories.create')}}"><i class="la la-plus"></i>إنشاء</a>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>





    <!-- // Dropzone section end -->
@endSection
@push('js')
    <!-- BEGIN VENDOR JS-->
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

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{aurl('')}}/app-assets/vendors/js/extensions/dropzone.min.js" type="text/javascript"></script>
    <script src="{{aurl('')}}/app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{aurl('')}}/app-assets/js/scripts/extensions/dropzone.js" type="text/javascript"></script>


    <script> /*form submit*/

        $('#btn-submit').on('click', function () {
            $('#stores_form').submit();

        })
        $('#stores_form').on('submit', function (e) {
            e.preventDefault();


            form = new FormData($('#stores_form')[0]);
            url = $(this).attr('action');
            $.ajax({
                'type': 'post',
                'url': url,
                data: form,
                contentType: false,
                cache: false,
                processData: false,

                'statusCode': {

                    200: function (response) {


                        console.log(response.store_id)
                        $('#stores_form').trigger("reset");
                        var dropzone = 0;

                        dropzone = myDropzone.getQueuedFiles().length;

                        if (dropzone > 0) {
                            store_id = response.store_id;
                            $('#store_id').val(response.store_id);
                            myDropzone.processQueue();
                        }
                        var message = 'تم حفظ البيانات بنجاح'

                        toastr.success(message, '', {positionClass: 'toast-bottom-left'})

                        setTimeout(function () {

                            window.location.href = '../stores';
                        }, 800)

                    },

                    422: function (xhr) {

                        $.each(xhr.responseJSON.errors, function (key, value) {
                            toastr.error(value, '', {positionClass: 'toast-bottom-left'})

                        });

                    },
                    500: function (xhr) {
                        value = xhr.responseJSON.message;

                        toastr.error(value, '', {positionClass: 'toast-bottom-left'})


                    }
                }


            });
        })
    </script>
    <!-- end form-->
    <script>

        $("#dpzMultipleFiles").dropzone({
            url: "{{route('stores.uploadAlbum')}}",
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            paramName: "file",
            maxFilesize: 10,
            maxFiles: 10,
            acceptedFiles: "image/*",
            addRemoveLinks: true,
            autoProcessQueue: false,
            uploadMultiple: true,
            dictRemoveFile: 'حذف',

            parallelUploads: 10,
            init: function () {

                myDropzone = this;
                this.on("success", function (file, response) {
                    if (response.status == 'fail') {
                        toastr.error(response.message, 'error');
                        return;
                    }
                })
            }
        });

        myDropzone.on('sending', function (file, xhr, formData) {

            var ids = $('#store_id').val();
            formData.append('store_id', ids);
        });
        myDropzone.on('completemultiple', function () {
            // var msgs = "تم رفع الصور بنجاح";
            // toastr.success(msgs);
        });
    </script>


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



@endpush
