@extends('frontmodule::layouts.master')

@section('content')

    <header class="header-area position-inherit top-auto bg-white">
        <div class="header-top-bar bg-dark py-2 padding-right-30px padding-left-30px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center header-top-info font-size-14 font-weight-medium">
                        <p class="login-and-signup-wrap">
                            <a href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&amp" target="_blank">
                                <span class="mr-1 la la-whatsapp"> {{$settings->whatsapp}}</span>
                            </a>
                            <a href="tel:{{$settings->mobile}}">
                                <span class="mr-1 la la-phone"> {{$settings->mobile}}</span>
                            </a>


                        </p>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 d-flex align-items-center justify-content-end header-top-info">
                        <span class="mr-2 text-white font-weight-semi-bold font-size-14">اتبعنا:</span>
                        <ul class="social-profile social-profile-colored">
                            <li><a target="_blank" href="{{$settings->facebook}}" class="facebook-bg"><i class="lab la-facebook-f"></i></a></li>
                            <li><a target="_blank" href="{{$settings->twitter}}" class="twitter-bg"><i class="lab la-twitter"></i></a></li>
                            <li><a target="_blank" href="{{$settings->instagram}}" class="instagram-bg"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-top-bar -->
        <div class="header-menu-wrapper padding-right-30px padding-left-30px">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-full-width">
                            <div class="logo">
                                <a href="{{url('/')}}" class="sticky-logo-hide"><img src="{{asset('assets/front')}}/images/logo-black.png" alt="logo"></a>
                                <a href="{{url('/')}}" class="sticky-logo-show"><img src="{{asset('assets/front')}}/images/logo-white.png" alt="logo"></a>
                                <div class="d-flex align-items-center">
                                    <a href="add-listing.html" class="btn-gray add-listing-btn-show font-size-24 mr-2 flex-shrink-0 text-color" data-toggle="tooltip" data-placement="left" title="Add Listing">
                                        <i class="la la-plus"></i>
                                    </a>
                                    <div class="menu-toggle menu-toggle-black">
                                        <span class="menu__bar"></span>
                                        <span class="menu__bar"></span>
                                        <span class="menu__bar"></span>
                                    </div><!-- end menu-toggle -->
                                </div>
                            </div><!-- end logo -->
                            <div class="main-menu-content main-menu-content-2 border-left-color">
                                <nav class="main-menu main-menu-2">

                                    <ul>
                                        <li>
                                            <a href="{{url('/')}}">الصفحة الرئيسية </a>

                                        </li>
                                        <li class="active">
                                            <a href="#">عن موقعنا </a>

                                        </li>
                                        <li>

                                            <a href="#">المدونه </a>

                                        </li>
                                        <li>
                                            <a href="#"> إتصل بنا</a>

                                        </li>
                                    </ul>

                                </nav>
                            </div><!-- end main-menu-content -->
                            <div class="nav-right-content ml-auto">
                                <a href="{{route('front.addStore')}}" class="theme-btn gradient-btn add-listing-btn-hide">
                                    <i class="la la-plus mr-2"></i>إضافة قائمة
                                </a>
                            </div><!-- end nav-right-content -->
                        </div><!-- end menu-full-width -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-wrapper -->
    </header>

    <section class="full-screen-slider-area">
        <div class="full-screen-slider owl-trigger-action owl-trigger-action-2">

            @if ($store->album->count()>=4 )
                @foreach($store->album as $album)
                    <a href="{{asset('images/stores/album/'.$album->photo)}}" class="fs-slider-item d-block" data-fancybox="gallery" data-caption="Showing image - 01">
                        <img style="height: 250px; " class="lazy" src="{{asset('images/stores/album/'.$album->photo)}}" data-src="" alt="single listing image">
                    </a><!-- end fs-slider-item -->
                @endforeach
                {{--End Foreach--}}

            @else
                <a href="{{asset('images/default/store4.jpg')}}" class="fs-slider-item d-block" data-fancybox="gallery" data-caption="Showing image - 01">
                    <img style="height: 250px; " class="lazy" src="{{asset('images/default/store4.jpg')}}" data-src="" alt="single listing image">
                </a>
                <!-- end fs-slider-item -->
                <a href="{{asset('images/default/store3.jpg')}}" class="fs-slider-item d-block" data-fancybox="gallery" data-caption="Showing image - 01">
                    <img style="height: 250px; " class="lazy" src="{{asset('images/default/store3.jpg')}}" data-src="" alt="single listing image">
                </a>
                <!-- end fs-slider-item -->
                <a href="{{asset('images/default/store2.jpg')}}" class="fs-slider-item d-block" data-fancybox="gallery" data-caption="Showing image - 01">
                    <img style="height: 250px; " class="lazy" src="{{asset('images/default/store2.jpg')}}" data-src="" alt="single listing image">
                </a>
                <!-- end fs-slider-item -->
                <a href="{{asset('images/default/store1.jpg')}}" class="fs-slider-item d-block" data-fancybox="gallery" data-caption="Showing image - 01">
                    <img style="height: 250px; " class="lazy" src="{{asset('images/default/store1.jpg')}}" data-src="" alt="single listing image">
                </a><!-- end fs-slider-item -->
            @endif


        </div>
    </section><!-- end full-screen-slider-area -->

    <section class="breadcrumb-area bg-gradient-gray py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content breadcrumb-content-2 d-flex flex-wrap align-items-end justify-content-between">
                        <div class="section-heading">
                            <ul class="list-items bread-list bread-list-2 bg-transparent rounded-0 p-0">
                                <li><a href="{{url('')}}">الصفحة الرئيسية</a></li>

                                <li>{{$store->name}}</li>
                            </ul>
                            <div class="d-flex align-items-center pt-1">
                                <h2 class="sec__title mb-0">{{$store->name}}</h2>
                                <div class="hover-tooltip-box ml-2 pt-2">

                                </div>
                            </div>
                            <p class="sec__desc py-2 font-size-17"><i class="la la-map-marker mr-1 text-color-2"></i>{{$store->address}}</p>
                            <p class="pb-2 font-weight-medium">


                            </p>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="star-rating-wrap d-flex align-items-center">
                                    <div class="star-rating text-color-5 font-size-18">
                                        <span><i class="la la-star"></i></span>
                                        <span class="ml-n1"><i class="la la-star"></i></span>
                                        <span class="ml-n1"><i class="la la-star"></i></span>
                                        <span class="ml-n1"><i class="la la-star"></i></span>
                                        <span class="ml-n1"><i class="la la-star"></i></span>
                                    </div>
                                    <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                </div>
                                <div class="timestamp font-weight-medium ml-3 pl-3 border-left border-left-color line-height-20">
                                    <span class="text-color-4 mr-2">افتح من :</span>
                                    <span>{{$store->work_from}}</span>
                                </div>
                            </div>
                            <div class="btn-box pt-3">
                                <a href="#review" class="btn-gray mr-1"><i class="la la-star mr-1"></i>أكتب مراجعة</a>

                                <div class="sharethis-sticky-share-buttons">شارك</div>

                            </div>
                        </div>
                        <div class="btn-box d-flex align-items-center">
                            <span class="btn-gray mr-2"><i class="la la-eye mr-1"></i>ينظر - 255</span>

                            <div class="dropdown dot-action-wrap">
                                <button class="dot-action-btn dropdown-toggle after-none border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-v"></i>
                                </button>

                            </div>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START LISTING DETAIL AREA
    ================================= -->
    <section class="listing-detail-area padding-top-60px padding-bottom-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing-detail-wrap">

                        <div class="block-card mb-4">
                            <div class="block-card-header">
                                <h2 class="widget-title">معلومات قد تفيدك</h2>
                                <div class="stroke-shape"></div>
                            </div><!-- end block-card-header -->
                            <div class="block-card-body">
                                <p class="pb-3 font-weight-medium line-height-30">
                                    {{$store->description}}
                                </p>

                            </div><!-- end block-card-body -->
                        </div><!-- end block-card -->

                        @if ($store->video != null)
                            <div class="block-card mb-4">
                                <div class="block-card-header">
                                    <h2 class="widget-title">فيديو ترويجي</h2>
                                    <div class="stroke-shape"></div>
                                </div><!-- end block-card-header -->
                                <div class="block-card-body">
                                    <div class="video-box">
                                        <img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{$store->cover}}" alt="video image">
                                        <div class="video-content">
                                            <a class="icon-element icon-element-lg icon-element-white hover-scale mx-auto" href="{{getYoutubeId($store->video)}}" data-fancybox="" title="Play Video">
                                                <i class="la la-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end block-card-body -->
                            </div><!-- end block-card -->
                        @endif

                        <div class="block-card mb-4">
                            <div class="block-card-header">
                                <h2 class="widget-title">الموقع / الاتصال</h2>
                                <div class="stroke-shape"></div>
                            </div><!-- end block-card-header -->
                            <div class="block-card-body">

                                <ul class="list-items list--items list-items-style-2 py-4">
                                    <li><span class="text-color"><i class="la la-map mr-2 text-color-2 font-size-18"></i>عنوان:</span> {{$store->address}}</li>
                                    <li><span class="text-color"><i class="la la-phone mr-2 text-color-2 font-size-18"></i>هاتف:</span><a href="#">{{$store->mobile}}</a></li>
                                    <li><span class="text-color"><i class="la la-envelope mr-2 text-color-2 font-size-18"></i>البريد الإلكتروني:</span><a href="#">{{$store->email}}</a></li>
                                </ul>
                                <ul class="social-profile social-profile-styled">
                                    @if ($store->facebook)
                                        <li><a target="_blank" href="{{$store->facebook}}" class="facebook-bg" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="lab la-facebook-f"></i></a></li>
                                    @endif
                                    @if ($store->twitter)
                                        <li><a target="_blank" href="{{$store->twitter}}" class="twitter-bg" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="lab la-twitter"></i></a></li>

                                    @endif
                                    @if ($store->instagram)
                                        <li><a target="_blank" href="{{$store->instagram}}" class="instagram-bg" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="lab la-instagram"></i></a></li>

                                    @endif
                                    @if ($store->youtube)
                                        <li><a target="_blank" href="{{$store->youtube}}" class="youtube-bg" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="la la-youtube"></i></a></li>

                                    @endif

                                </ul>
                            </div><!-- end block-card-body -->
                        </div><!-- end block-card -->


                        <div class="block-card" id="review">
                            <div class="block-card-header">
                                <h2 class="widget-title pb-1">إضافة إلى استعراض</h2>
                                <p>لن يتم نشر عنوان بريدك الإلكتروني. الحقول المطلوبة محددة *</p>
                            </div><!-- end block-card-header -->
                            <div class="block-card-body">

                                <form method="post" class="form-box row pt-3">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">اسم</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="name" placeholder="اسمك">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">البريد الإلكتروني</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <input class="form-control" type="email" name="email" placeholder="البريد الإلكتروني">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">مراجعة</label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <textarea class="message-control form-control" name="message" placeholder="أخبر عن تجربتك أو اترك نصيحة للآخرين"></textarea>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="file-upload-wrap file-upload-wrap-2">
                                            <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple>
                                            <span class="file-upload-text"><i class="la la-photo mr-2"></i>إضافة الصور</span>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="btn-box pt-1">
                                            <button class="theme-btn gradient-btn border-0">إرسال المراجعة<i class="la la-arrow-right ml-2"></i></button>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                </form>
                            </div><!-- end block-card-body -->
                        </div><!-- end block-card -->
                    </div><!-- end listing-detail-wrap -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar mb-0">

                        <div class="sidebar-widget">
                            <h3 class="widget-title">معلومات عامة</h3>
                            <div class="stroke-shape mb-4"></div>
                            <ul class="list-items list-items-style-2">
                                @if ($store->email)

                                    <li><i class="la la-external-link mr-2 text-color-2 font-size-18"></i><a target="_blank" href="mailTo:{{$store->email}}">{{$store->email}}</a></li>
                                @endif
                                @if ($store->mobile)

                                    <li><i class="la la-phone mr-2 text-color-2 font-size-18"></i><a target="_blank" href="tel:{{$store->mobile}}">{{$store->mobile}}</a></li>
                                @endif
                            </ul>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">ساعات العمل</h3>
                            <div class="stroke-shape mb-4"></div>
                            <ul class="list-items">
                                @foreach ($store->workingDates as $index => $date)
                                    <li class="d-flex justify-content-between"> يوم {{$date->day}}<span> {{$date->from}} - {{$date->to}}</span></li>
                                @endforeach


                            </ul>
                        </div><!-- end sidebar-widget -->


                        <div class="sidebar-widget">
                            <h3 class="widget-title">التصنيفات</h3>
                            <div class="stroke-shape mb-4"></div>
                            <div class="category-list">

                                @foreach ($categories as $cat)
                                    <a href="{{route('front.getCategory',$cat->id)}}" class="generic-img-card d-block hover-y overflow-hidden mb-3">
                                        <img src="{{asset('assets/front')}}/images/img-loading.png" style="height: 100px" data-src="{{$cat->cover}}" alt="image" class="generic-img-card-img lazy">
                                        <div class="generic-img-card-content d-flex align-items-center justify-content-between">
                                            <span class="badge">{{$cat->name}}</span>
                                            <span class="generic-img-card-counter">{{$cat->stores->count()}}</span>
                                        </div>
                                    </a>

                                @endforeach

                            </div>

                        </div>
                    </div><!-- end sidebar-widget -->


                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end listing-detail-area -->

    <section class="card-area bg-gradient-gray section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading rtl-text-right">
                        <h2 class="sec__title font-size-24 line-height-30">الناس شاهدوا أيضا</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            <div class="row pt-1">
                <div class="col-lg-12">
                    <div class="card-carousel owl-trigger-action">
                        @foreach ($cat_stores->random(6) as $store)
                            <div class="card-item border border-color">
                                <div class="card-image">
                                    <a href="{{route('front.getStore',$store->id)}}" class="d-block">
                                        <img src="{{asset('assets/front')}}/images/img-loading.png" style="height: 270px" data-src="{{$store->cover}}" class="card__img lazy" alt="">
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="{{route('front.getStore',$store->id)}}" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                        <img src="{{$store->photo}}" alt="author-img">
                                    </a>
                                    <h4 class="card-title pt-3">
                                        <a href="{{route('front.getStore',$store->id)}}">{{$store->name}}</a>
                                        <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>
                                    <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>{{$store->address}}</a></p>
                                    <ul class="listing-meta d-flex align-items-center">
                                        <li class="d-flex align-items-center">
                                            <span class="rate flex-shrink-0">4.7</span>
                                            <span class="rate-text">عدد التعليقات 5</span>
                                        </li>
                                        <li>
                                <span class="price-range" data-toggle="tooltip" data-placement="top" title="Pricey">

                                </span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="la la-{{$store->category->first()->icon}} mr-1 listing-icon"></i><a href="{{route('front.getCategory',$store->category()->first()->id)}}" class="listing-cat-link">{{$store->category->first()->name}}</a>
                                        </li>
                                    </ul>
                                    <ul class="info-list padding-top-20px">
                                        <li><span class="la la-calendar-check-o icon"></span>
                                            {{$store->created_at->diffForHumans()}}
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- end card-item -->
                        @endforeach


                    </div><!-- end card-carousel -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end card-area -->


    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

@endsection
