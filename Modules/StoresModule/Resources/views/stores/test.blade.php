@extends('commonmodule::layouts.master')
@push('css')


    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->

    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/css-rtl/plugins/file-uploaders/dropzone.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->


    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
@endPush
@section('content')

    <!-- Dropzone section start -->
    <section id="dropzone-examples">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                    <strong>Warning!</strong> Don’t forget to specify an url option if you’re
                    not using a form element, since Dropzone doesn’t know where to post
                    to without an action attribute.
                </div>
                <div class="alert alert-warning" role="alert">
                    <strong>Warning!</strong> Dropzone does not handle your file uploads on the
                    server. You have to implement the code to receive and store the file
                    yourself. See the section <a href="http://www.dropzonejs.com/#server-side-implementation"
                                                 class="alert-link">Server side implementation</a> for more information.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Files Upload</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <p class="card-text">This example uploads a multiple files using dropzone js library.
                                By default, dropzone is a multiple file uploader. User can
                                either click on the dropzone area and select multiple files
                                or just drop all selected files in the dropzone area. This
                                example is the most basic setup for dropzone.</p>
                            <form action="#" class="dropzone dropzone-area" id="dpz-multiple-files">
                                <div class="dz-message">Drop Files Here To Upload</div>
                            </form>
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


    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{aurl('')}}/app-assets/vendors/js/extensions/dropzone.min.js" type="text/javascript"></script>
    <script src="{{aurl('')}}/app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{aurl('')}}/app-assets/js/scripts/extensions/dropzone.js" type="text/javascript"></script>
@endpush
