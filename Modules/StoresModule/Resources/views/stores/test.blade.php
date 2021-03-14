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

    <script>
        const videoSrc = document.querySelector("#video-source");
        const videoTag = document.querySelector("#video-tag");
        const inputTag = document.querySelector("#input-tag");

        inputTag.addEventListener('change', readVideo)

        function readVideo(event) {
            console.log(event.target.files)
            if (event.target.files && event.target.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    console.log('loaded')
                    videoSrc.src = e.target.result
                    videoTag.load()
                }.bind(this)

                reader.readAsDataURL(event.target.files[0]);
            }
        }
    </script>
@endpush
