<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>{{$settings->name}} | تسجيل الدخول</title>
    <link rel="apple-touch-icon" href="{{aurl()}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/icon/'.$settings->icon)}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/app.css">
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/custom-rtl.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/app-assets/css-rtl/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{aurl()}}/assets/css/style-rtl.css">
    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/vendors/css/extensions/toastr.css">

    <link rel="stylesheet" type="text/css" href="{{aurl('')}}/app-assets/css-rtl/plugins/extensions/toastr.css">
    <!-- END Custom CSS-->
    <link href="http://fonts.cdnfonts.com/css/cairo-2" rel="stylesheet">
    <style>
        body, h1, h2, h3, h4, h5, h6, span, div, a, p, title {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{url('/admin-panel')}}">
                        <img class="brand-logo" alt="modern admin logo" src="{{asset('images/logo/'.$settings->logo)}}">
                        <h3 class="brand-text">{{$settings->name}}</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img style="width: 150px; height: 150px;" src="{{asset('images/logo/'.$settings->logo)}}" alt="branding logo">
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>{{$settings->name}}</span>
                                </p>
                            </div>
                            <div class="card-content">


                                <div class="card-body pt-0">
                                    <form id="login_form" class="form-horizontal" action="{{route('admin.login')}}" method="post">
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="email" name="email" class="form-control input-lg" id="Email" placeholder="البريد الالكتروني"
                                            >
                                            <div class="form-control-position">
                                                <i class="la la-envelope"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password" class="form-control input-lg" id="user-password" placeholder="كلمه المرور"
                                            >
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> تسجيل الدخول</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer fixed-bottom footer-dark navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; {{date('Y')}} <a class="text-bold-800 grey darken-2" href="https://www.facebook.com/ahmed.isa.77377/"
                                                                                              target="_blank">Eng : Ahmed Issa </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<script src="{{aurl()}}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{aurl()}}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
        type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{aurl()}}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="{{aurl()}}/app-assets/js/core/app.js" type="text/javascript"></script>
<script src="{{aurl()}}/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{aurl()}}/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
<script src="{{aurl('')}}/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
<script src="{{aurl('')}}/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
<script>
    $('#login_form').on('submit', function (e) {
        e.preventDefault();

        form = $(this).serialize();
        url = $(this).attr('action');

        $.ajax({
            'type': 'post',
            'url': url,
            data: {
                'form': form,
                '_token': '{{csrf_token()}}',
            },
            beforeSend: function () {

            },
            'statusCode': {

                200: function (response) {

                    toastr.success(response.success, '', {positionClass: 'toast-bottom-left'});
                    setTimeout(function () {

                        window.location.href = '{{route('admin.dashboard')}}'
                    }, 800)


                },
                402: function (response) {

                    console.log()
                    toastr.error(response.responseJSON.errors, '', {positionClass: 'toast-bottom-left'});

                },
                404: function (xhr) {

                    $.each(xhr.responseJSON.error, function (key, value) {
                        toastr.error(value, '', {positionClass: 'toast-bottom-left'});
                    });
                }
            }


        });
    })

</script>
</body>
</html>
