<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$settings->name}}</title>
    @include('frontmodule::includes.css')

</head>
<body>

<!-- start per-loader -->
{{--<div class="loader-container">--}}
{{--    <div class="loader-ripple">--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--    </div>--}}
</div>
<!-- end per-loader -->

@yield('content')
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
@include('frontmodule::includes.footer')
<!-- ================================
       START FOOTER AREA
================================= -->


<!-- Template JS Files -->
@include('frontmodule::includes.js')
</body>
</html>
