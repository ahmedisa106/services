@extends('frontmodule::layouts.master')

@section('content')

    <header class="header-area position-inherit top-auto bg-white">
        <div class="header-top-bar bg-dark py-2 padding-right-30px padding-left-30px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center header-top-info font-size-14 font-weight-medium">
                        <p class="login-and-signup-wrap">
                            <a href="#">
                                <span class="mr-1 la la-whatsapp"> {{$settings->whatsapp}}</span>
                            </a>
                            <a href="#">
                                <span class="mr-1 la la-phone"> {{$settings->mobile}}</span>
                            </a>


                        </p>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 d-flex align-items-center justify-content-end header-top-info">
                        <span class="mr-2 text-white font-weight-semi-bold font-size-14">اتبعنا:</span>
                        <ul class="social-profile social-profile-colored">
                            <li><a href="#" class="facebook-bg"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#" class="instagram-bg"><i class="lab la-instagram"></i></a></li>
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
                                <a href="index.html" class="sticky-logo-hide"><img src="{{asset('assets/front')}}/images/logo-black.png" alt="logo"></a>
                                <a href="index.html" class="sticky-logo-show"><img src="{{asset('assets/front')}}/images/logo-white.png" alt="logo"></a>
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
                                <a href="add-listing.html" class="theme-btn gradient-btn add-listing-btn-hide">
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
            @foreach($store->album as $album)
                <a href="{{asset('images/stores/album/'.$album->photo)}}" class="fs-slider-item d-block" data-fancybox="gallery" data-caption="Showing image - 01">
                    <img style="height: 250px; " class="lazy" src="{{asset('images/stores/album/'.$album->photo)}}" data-src="" alt="single listing image">
                </a><!-- end fs-slider-item -->
            @endforeach
            {{--End Foreach--}}

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
                                    <span class="text-color-4 mr-2">افتح:</span>
                                    <span>{{$store->work_from}}</span>
                                </div>
                            </div>
                            <div class="btn-box pt-3">
                                <a href="#review" class="btn-gray mr-1"><i class="la la-star mr-1"></i>أكتب مراجعة</a>
                                <a href="#" class="btn-gray mr-1"><i class="la la-bookmark mr-1"></i>حفظ</a>
                                <a href="#" class="btn-gray" data-toggle="modal" data-target="#shareModal"><i class="la la-external-link mr-1"></i>شارك</a>
                            </div>
                        </div>
                        <div class="btn-box d-flex align-items-center">
                            <span class="btn-gray mr-2"><i class="la la-eye mr-1"></i>ينظر - 255</span>
                            <span class="btn-gray mr-2"><i class="la la-heart mr-1"></i>تم الحفظ - 124</span>
                            <div class="dropdown dot-action-wrap">
                                <button class="dot-action-btn dropdown-toggle after-none border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reportModal"><i class="la la-flag mr-1"></i>نقل</a>
                                </div>
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

                        <div class="block-card mb-4">
                            <div class="block-card-header">
                                <h2 class="widget-title">فيديو ترويجي</h2>
                                <div class="stroke-shape"></div>
                            </div><!-- end block-card-header -->
                            <div class="block-card-body">
                                <div class="video-box">
                                    <img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/single-listing-img7.jpg" alt="video image">
                                    <div class="video-content">
                                        <a class="icon-element icon-element-lg icon-element-white hover-scale mx-auto" href="https://www.youtube.com/watch?v=GlrxcuEDyF8" data-fancybox="" title="Play Video">
                                            <i class="la la-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end block-card-body -->
                        </div><!-- end block-card -->
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
                                    <li><a href="{{$store->facebook}}" class="facebook-bg" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="{{$store->twitter}}" class="twitter-bg" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="{{$store->instagram}}" class="instagram-bg" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="{{$store->youtube}}" class="youtube-bg" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="la la-youtube"></i></a></li>

                                </ul>
                            </div><!-- end block-card-body -->
                        </div><!-- end block-card -->


                        <div class="block-card" id="review">
                            <div class="block-card-header">
                                <h2 class="widget-title pb-1">إضافة إلى استعراض</h2>
                                <p>لن يتم نشر عنوان بريدك الإلكتروني. الحقول المطلوبة محددة *</p>
                            </div><!-- end block-card-header -->
                            <div class="block-card-body">
                                <div class="add-rating-bars review-bars d-flex flex-row flex-wrap flex-grow-1 align-items-center justify-content-between">
                                    <div class="review-bars-item mx-0 mt-0">
                                        <span class="review-bars-name">الخدمات</span>
                                        <div class="review-bars-inner pt-1">
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-1" value="1">
                                                <label for="rating-1" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-2" value="2">
                                                <label for="rating-2" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-3" value="3">
                                                <label for="rating-3" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-4" value="4">
                                                <label for="rating-4" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-5" value="5">
                                                <label for="rating-5" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div><!-- end review-bars-item -->
                                    <div class="review-bars-item mx-0 mt-0">
                                        <span class="review-bars-name">قيمة المال</span>
                                        <div class="review-bars-inner pt-1">
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-6" value="1">
                                                <label for="rating-6" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-7" value="2">
                                                <label for="rating-7" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-8" value="3">
                                                <label for="rating-8" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-9" value="4">
                                                <label for="rating-9" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-10" value="5">
                                                <label for="rating-10" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div><!-- end review-bars-item -->
                                    <div class="review-bars-item mx-0 mt-0">
                                        <span class="review-bars-name">جودة</span>
                                        <div class="review-bars-inner pt-1">
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-11" value="1">
                                                <label for="rating-11" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-12" value="2">
                                                <label for="rating-12" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-13" value="3">
                                                <label for="rating-13" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-14" value="4">
                                                <label for="rating-14" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-15" value="5">
                                                <label for="rating-15" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div><!-- end review-bars-item -->
                                    <div class="review-bars-item mx-0 mt-0">
                                        <span class="review-bars-name">موقعك</span>
                                        <div class="review-bars-inner pt-1">
                                            <form class="leave-rating">
                                                <input type="radio" name="rating" id="rating-16" value="1">
                                                <label for="rating-16" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-17" value="2">
                                                <label for="rating-17" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-18" value="3">
                                                <label for="rating-18" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-19" value="4">
                                                <label for="rating-19" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-20" value="5">
                                                <label for="rating-20" class="fa fa-star"></label>
                                            </form>
                                        </div>
                                    </div><!-- end review-bars-item -->
                                </div><!-- end review-bars -->
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
                            <div class="d-flex align-items-center pb-3">
                                <svg class="mr-2" width="55" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 316.658 316.658" xml:space="preserve">
                                 <g>
                                     <path style="fill:#222220;" d="M257.591,183.075c-11.104-12.792-26.45-21.154-43.217-23.551l-38.492-6.036V86.313
                                            c0-15.952-12.979-28.93-28.931-28.93h-0.433c-15.952,0-28.931,12.978-28.931,28.93v107.881L77.794,177.14
                                            c-7.993-3.425-17.104-2.614-24.367,2.176c-7.262,4.788-11.597,12.841-11.597,21.539v0.363c0,7.361,3.155,14.389,8.656,19.28
                                            l67.102,59.669v28.989c0,4.143,3.357,7.5,7.5,7.5s7.5-3.357,7.5-7.5V276.8c0-2.142-0.916-4.182-2.517-5.604l-69.618-61.906
                                            c-2.303-2.048-3.623-4.989-3.623-8.071v-0.363c0-3.695,1.77-6.982,4.854-9.017c3.087-2.035,6.807-2.366,10.201-0.911l50.24,21.532
                                            c0.462,0.199,0.948,0.355,1.453,0.458c0.751,0.155,1.509,0.189,2.25,0.114c0.084-0.008,0.166-0.024,0.249-0.035
                                            c0.155-0.021,0.311-0.041,0.464-0.071c0.134-0.026,0.265-0.063,0.396-0.096c0.1-0.026,0.2-0.047,0.299-0.077
                                            c0.149-0.044,0.294-0.098,0.439-0.152c0.08-0.029,0.162-0.056,0.241-0.088c0.142-0.058,0.28-0.124,0.417-0.19
                                            c0.081-0.039,0.164-0.075,0.243-0.117c0.123-0.065,0.241-0.137,0.36-0.208c0.091-0.055,0.184-0.107,0.273-0.166
                                            c0.1-0.066,0.194-0.138,0.291-0.208c0.102-0.075,0.205-0.147,0.304-0.227c0.079-0.064,0.153-0.134,0.23-0.201
                                            c0.106-0.094,0.214-0.187,0.315-0.287c0.068-0.067,0.131-0.139,0.196-0.208c0.1-0.106,0.2-0.21,0.293-0.323
                                            c0.072-0.086,0.136-0.177,0.204-0.265c0.078-0.102,0.157-0.201,0.23-0.307c0.092-0.135,0.175-0.275,0.258-0.416
                                            c0.04-0.067,0.083-0.13,0.121-0.198c0.36-0.652,0.628-1.362,0.782-2.114c0.104-0.503,0.152-1.01,0.152-1.512V86.313
                                            c0-7.681,6.249-13.93,13.931-13.93h0.433c7.682,0,13.931,6.249,13.931,13.93v72.025c0,0.277,0.018,0.551,0.047,0.82
                                            c-0.396,3.933,2.339,7.535,6.291,8.154l44.88,7.037c0.036,0.006,0.071,0.011,0.107,0.017c27.148,3.857,47.621,27.444,47.621,54.866
                                            v0.766c0,12.69-3.097,25.349-8.956,36.606l-20.345,39.088c-1.913,3.675-0.484,8.203,3.189,10.115c1.106,0.576,2.29,0.85,3.457,0.85
                                            c2.707,0,5.322-1.472,6.658-4.039l20.345-39.088c6.969-13.388,10.651-28.44,10.651-43.532v-0.766
                                            C274.828,212.275,268.706,195.883,257.591,183.075z"/>
                                     <path style="fill:#222220;" d="M146.735,37.79c4.143,0,7.5-3.357,7.5-7.5V7.5c0-4.143-3.357-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v22.79
                                            C139.235,34.433,142.593,37.79,146.735,37.79z"/>
                                     <path style="fill:#222220;" d="M193.189,98.897c0,4.143,3.357,7.5,7.5,7.5h22.79c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5
                                            h-22.79C196.547,91.397,193.189,94.755,193.189,98.897z"/>
                                     <path style="fill:#222220;" d="M194.744,56.468c1.919,0,3.839-0.732,5.304-2.196l16.115-16.115c2.929-2.93,2.929-7.678,0-10.607
                                            c-2.93-2.928-7.678-2.928-10.607,0L189.44,43.664c-2.929,2.93-2.929,7.678,0,10.607C190.905,55.735,192.825,56.468,194.744,56.468z
                                            "/>
                                     <path style="fill:#222220;" d="M87.521,54.271c1.465,1.464,3.385,2.196,5.304,2.196s3.839-0.732,5.304-2.196
                                            c2.929-2.93,2.929-7.678,0-10.607L82.013,27.549c-2.93-2.928-7.678-2.928-10.607,0c-2.929,2.93-2.929,7.678,0,10.607L87.521,54.271
                                            z"/>
                                     <path style="fill:#222220;" d="M64.419,106.397h22.79c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5h-22.79
                                            c-4.143,0-7.5,3.357-7.5,7.5S60.276,106.397,64.419,106.397z"/>
                                 </g>
                            </svg>
                                <h3 class="widget-title pb-0 line-height-26">الجودة فقط ، المكونات الطازجة تدخل في طعامنا!</h3>
                            </div>
                            <a href="#" class="theme-btn gradient-btn w-100">أعرف أكثر<i class="la la-arrow-right ml-2"></i></a>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">معلومات عامة</h3>
                            <div class="stroke-shape mb-4"></div>
                            <ul class="list-items list-items-style-2">
                                <li><i class="la la-external-link mr-2 text-color-2 font-size-18"></i><a href="#">www.techydevs.com</a></li>
                                <li><i class="la la-phone mr-2 text-color-2 font-size-18"></i><a href="#">+(0) 880 222 4465</a></li>
                                <li><i class="la la-map-signs mr-2 text-color-2 font-size-18"></i><a href="#">احصل على الاتجاهات</a></li>
                                <li><i class="la la-cutlery mr-2 text-color-2 font-size-18"></i><a href="#">قائمة كاملة <i class="la la-external-link ml-1"></i></a></li>
                                <li><i class="la la-comment mr-2 text-color-2 font-size-18"></i><a href="#" data-toggle="modal" data-target="#messageModal">أرسل رسالة إلى الشركة</a></li>
                            </ul>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">ساعات العمل</h3>
                            <div class="stroke-shape mb-4"></div>
                            <ul class="list-items">
                                <li class="d-flex justify-content-between"> يوم الاثنين<span>9am - 5pm</span></li>
                                <li class="d-flex justify-content-between">الثلاثاء <span>9am - 5pm</span></li>
                                <li class="d-flex justify-content-between">الأربعاء <span>9am - 5pm</span></li>
                                <li class="d-flex justify-content-between">الخميس <span>9am - 5pm</span></li>
                                <li class="d-flex justify-content-between">يوم الجمعة <span>9am - 5am</span></li>
                                <li class="d-flex justify-content-between">يوم السبت <span>9am - 5am</span></li>
                                <li class="d-flex justify-content-between">الأحد <span class="text-color-2">مغلق</span></li>
                            </ul>
                        </div><!-- end sidebar-widget -->
                        <div class="card-item card-item-layout-4">
                            <a href="#" class="card-image d-block">
                                <img src="{{asset('assets/front')}}/images/single-listing-img1.jpg" class="card__img" alt="">
                                <span class="badge gradient-btn font-size-16 font-weight-semi-bold">50% off</span>
                                <div class="card-content">
                                    <h4 class="card-title pb-3">اطلب 1 برجر واحصل على خصم 50٪ في الثانية!</h4>
                                    <span class="bg-white text-color py-1 px-2 rounded font-size-15 font-weight-medium">Expires 14/10/2020</span>
                                </div>
                            </a>
                        </div><!-- end card-item -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">الحجز</h3>
                            <div class="stroke-shape mb-4"></div>
                            <form method="post" class="form-box">
                                <div class="form-group">
                                    <span class="la la-calendar-o form-icon"></span>
                                    <input class="date-dropper-input form-control" type="text" placeholder="Check in"/>
                                </div>
                                <div class="user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="0">Time Slots</option>
                                        <option value="1">8:00am - 8:30am</option>
                                        <option value="2">9:00am - 9:30am</option>
                                        <option value="3">10:00am - 10:30am</option>
                                        <option value="4">11:00am - 11:30am</option>
                                        <option value="5">12:00pm - 12:30pm</option>
                                        <option value="6">13:00pm - 13:30pm</option>
                                        <option value="7">14:00pm - 14:30pm</option>
                                        <option value="8">15:00pm - 15:30pm</option>
                                        <option value="8">16:00pm - 16:30pm</option>
                                    </select>
                                </div><!-- end user-chosen-select-container -->
                            </form>
                            <div class="quantity-wrap d-flex align-items-center justify-content-between py-4">
                                <span class="font-weight-semi-bold"><i class="la la-user-plus mr-1"></i>الأشخاص:</span>
                                <div class="quantity-item d-flex align-items-center justify-content-end">
                                    <button class="qtyDec"><i class="la la-minus"></i></button>
                                    <input class="qtyInput" type="text" name="qty-input" value="0">
                                    <button class="qtyInc"><i class="la la-plus"></i></button>
                                </div>
                            </div><!-- end quantity-wrap -->
                            <div class="btn-box">
                                <a href="booking.html" class="theme-btn gradient-btn w-100">طلب الحجز<i class="la la-arrow-right ml-2"></i></a>
                            </div><!-- end btn-box -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">التصنيفات</h3>
                            <div class="stroke-shape mb-4"></div>
                            <div class="category-list">
                                <a href="#" class="generic-img-card d-block hover-y overflow-hidden mb-3">
                                    <img src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/generic-small-img.jpg" alt="image" class="generic-img-card-img lazy">
                                    <div class="generic-img-card-content d-flex align-items-center justify-content-between">
                                        <span class="badge">مطاعم</span>
                                        <span class="generic-img-card-counter">238</span>
                                    </div>
                                </a>
                                <a href="#" class="generic-img-card d-block hover-y overflow-hidden mb-3">
                                    <img src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/generic-small-img-2.jpg" alt="image" class="generic-img-card-img lazy">
                                    <div class="generic-img-card-content d-flex align-items-center justify-content-between">
                                        <span class="badge">طعام</span>
                                        <span class="generic-img-card-counter">111</span>
                                    </div>
                                </a>
                                <a href="#" class="generic-img-card d-block hover-y overflow-hidden mb-3">
                                    <img src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/generic-small-img-3.jpg" alt="image" class="generic-img-card-img lazy">
                                    <div class="generic-img-card-content d-flex align-items-center justify-content-between">
                                        <span class="badge">الفندق</span>
                                        <span class="generic-img-card-counter">222</span>
                                    </div>
                                </a>
                                <a href="#" class="generic-img-card d-block hover-y overflow-hidden mb-3">
                                    <img src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/generic-small-img-4.jpg" alt="image" class="generic-img-card-img lazy">
                                    <div class="generic-img-card-content d-flex align-items-center justify-content-between">
                                        <span class="badge">الأحداث</span>
                                        <span class="generic-img-card-counter">123</span>
                                    </div>
                                </a>
                                <div class="collapse collapse-content" id="showMoreOptionCollapse2">
                                    <a href="#" class="generic-img-card d-block hover-y overflow-hidden mb-3">
                                        <img src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/generic-small-img-5.jpg" alt="image" class="generic-img-card-img lazy">
                                        <div class="generic-img-card-content d-flex align-items-center justify-content-between">
                                            <span class="badge">التسوق</span>
                                            <span class="generic-img-card-counter">321</span>
                                        </div>
                                    </a>
                                    <a href="#" class="generic-img-card d-block hover-y overflow-hidden mb-3">
                                        <img src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/generic-small-img-6.jpg" alt="image" class="generic-img-card-img lazy">
                                        <div class="generic-img-card-content d-flex align-items-center justify-content-between">
                                            <span class="badge">السفر</span>
                                            <span class="generic-img-card-counter">12</span>
                                        </div>
                                    </a>
                                    <a href="#" class="generic-img-card d-block hover-y overflow-hidden mb-3">
                                        <img src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/generic-small-img-7.jpg" alt="image" class="generic-img-card-img lazy">
                                        <div class="generic-img-card-content d-flex align-items-center justify-content-between">
                                            <span class="badge">وظائف</span>
                                            <span class="generic-img-card-counter">133</span>
                                        </div>
                                    </a>
                                </div>
                                <a class="collapse-btn" data-toggle="collapse" href="#showMoreOptionCollapse2" role="button" aria-expanded="false" aria-controls="showMoreOptionCollapse2">
                                    <span class="collapse-btn-hide">أظهر المزيد <i class="la la-plus ml-1"></i></span>
                                    <span class="collapse-btn-show">عرض أقل <i class="la la-minus ml-1"></i></span>
                                </a>
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">علامة الغيوم</h3>
                            <div class="stroke-shape mb-4"></div>
                            <ul class="tag-list">
                                <li><a href="#">تقنية</a></li>
                                <li><a href="#">موضه</a></li>
                                <li><a href="#">فن</a></li>
                                <li><a href="#">التصميم</a></li>
                                <li><a href="#">طعام</a></li>
                                <li><a href="#">تطوير</a></li>
                                <li><a href="#">تسويق</a></li>
                                <li><a href="#">فيديو</a></li>
                                <li><a href="#">موسيقى</a></li>
                                <li><a href="#">نمط الحياة</a></li>
                                <li><a href="#">مغامرة</a></li>
                            </ul>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <div class="section-tab section-tab-layout-2 mb-4">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">
                                            جمع
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">
                                            الأخيرة
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img1.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">ميل في السيارة</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-medium">
                                            <a href="#">وجبة عشاء</a>,
                                            <a href="#">وجبة افطار</a>
                                        </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img2.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">بيتزا سوما</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-medium">
                                            <a href="#">بيتزا</a>,
                                            <a href="#">برجر</a>,
                                            <a href="#">الطعام السريع</a>
                                        </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img3.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">بيرلز ديلوكس برجر</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-medium">
                                            <a href="#">وجبة افطار</a>
                                        </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img4.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">بوكس مطبخ</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star-o"></i></span>
                                                    <span class="ml-n1"><i class="la la-star-o"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-medium">
                                            <a href="#">أكشاك الطعام</a>,
                                            <a href="#">برجر</a>
                                        </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                </div>
                                <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img3.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">بيرلز ديلوكس برجر</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-medium">
                                            <a href="#">وجبة افطار</a>
                                        </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img4.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">بوكس مطبخ</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star-o"></i></span>
                                                    <span class="ml-n1"><i class="la la-star-o"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-medium">
                                            <a href="#">أكشاك الطعام</a>,
                                            <a href="#">برجر</a>
                                        </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img1.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">ميل في السيارة</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-medium">
                                            <a href="#">وجبة عشاء</a>,
                                            <a href="#">وجبة افطار</a>
                                        </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img2.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">بيتزا سوما</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-medium">
                                            <a href="#">بيتزا</a>,
                                            <a href="#">برجر</a>,
                                            <a href="#">الطعام السريع</a>
                                        </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                </div>
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title pb-1">قد تفكر أيضًا</h3>
                            <div class="hover-tooltip-box mb-4 d-inline-block">
                                <span class="text-gray">برعاية <i class="la la-exclamation-circle"></i></span>
                                <div class="hover-tooltip">
                                    <p>دفع أصحاب الأعمال مقابل هذه الإعلانات. للمزيد من المعلومات قم بزيارة <a href="#">ليسثب للأعمال</a>.</p>
                                </div>
                            </div>
                            <div class="sponsor-list">
                                <div class="sponsor-item mb-4">
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img3.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">ليرس روس تاي</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-bold text-color">
                                        1.8 ميل
                                    </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                    <p class="font-size-14 font-weight-medium pt-2">"سأأخذ نجمة واحدة مقابل خدمة رهيبة. التشدق أولاً: لقد صنعنا ...
                                        <a href="listing-details.html" class="text-color-2">اقرأ أكثر</a>
                                    </p>
                                </div><!-- end sponsor-item -->
                                <div class="sponsor-item">
                                    <div class="mini-list-card">
                                        <div class="mini-list-img">
                                            <a href="listing-details.html" class="d-block">
                                                <img src="{{asset('assets/front')}}/images/single-listing-small-img4.jpg" alt="similar listing image">
                                            </a>
                                        </div><!-- end mini-list-img -->
                                        <div class="mini-list-body">
                                            <h4 class="mini-list-title"><a href="listing-details.html">مطعم كام لوك</a></h4>
                                            <div class="star-rating-wrap d-flex align-items-center">
                                                <div class="star-rating text-color-5 font-size-16">
                                                    <span><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                                </div>
                                                <p class="font-size-14 pl-2 font-weight-medium">عدد التعليقات 1348</p>
                                            </div>
                                            <span class="category-link after-none pl-0 font-size-14 font-weight-bold text-color">
                                       1.8 ميل
                                    </span>
                                        </div><!-- end mini-list-body -->
                                    </div><!-- end mini-list-card -->
                                    <p class="font-size-14 font-weight-medium pt-2">"يبدو أن هذا المكان هو المفضل لدى السكان المحليين. أتيت إلى هنا مرتين وتعرضت للانفجار ..."
                                        <a href="listing-details.html" class="text-color-2">اقرأ أكثر</a>
                                    </p>
                                </div><!-- end sponsor-item -->
                            </div><!-- end sponsor-list -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">الإشتراك</h3>
                            <div class="stroke-shape mb-4"></div>
                            <form method="post" class="form-box">
                                <div class="form-group">
                                    <span class="la la-envelope-o form-icon"></span>
                                    <input class="form-control form-control-styled" type="text" name="email" placeholder="أدخل بريدك الإلكتروني"/>
                                </div>
                            </form>
                            <div class="btn-box">
                                <button type="submit" class="theme-btn gradient-btn w-100 border-0">إشترك الآن<i class="la la-arrow-right ml-2"></i></button>
                                <span class="font-size-13 font-weight-medium">يمكنك إلغاء الاشتراك في أي وقت</span>
                            </div><!-- end btn-box -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">اتبع واتصل</h3>
                            <div class="stroke-shape mb-4"></div>
                            <div class="icon-block-wrap d-flex flex-wrap align-items-center ml-n1">
                                <a href="#" class="icon-block d-flex align-items-center flex-grow-1 hover-scale-2">
                                <span class="icon-element icon-element-sm f-bg-rgb">
                                    <i class="la la-facebook"></i>
                                </span>
                                    <div class="pl-2 flex-grow-1">
                                        <span class="text-color font-weight-bold font-size-17 d-block line-height-20">9,809</span>
                                        <span class="text-gray font-weight-medium font-size-13 d-block line-height-20">متابعون</span>
                                    </div>
                                </a><!-- end icon-block -->
                                <a href="#" class="icon-block d-flex align-items-center flex-grow-1 hover-scale-2">
                                <span class="icon-element icon-element-sm t-bg-rgb">
                                    <i class="la la-twitter"></i>
                                </span>
                                    <div class="pl-2 flex-grow-1">
                                        <span class="text-color font-weight-bold font-size-17 d-block line-height-20">789</span>
                                        <span class="text-gray font-weight-medium font-size-13 d-block line-height-20">متابعون</span>
                                    </div>
                                </a><!-- end icon-block -->
                                <a href="#" class="icon-block d-flex align-items-center flex-grow-1 hover-scale-2">
                                <span class="icon-element icon-element-sm i-bg-rgb">
                                    <i class="la la-instagram"></i>
                                </span>
                                    <div class="pl-2 flex-grow-1">
                                        <span class="text-color font-weight-bold font-size-17 d-block line-height-20">12,809</span>
                                        <span class="text-gray font-weight-medium font-size-13 d-block line-height-20">متابعون</span>
                                    </div>
                                </a><!-- end icon-block -->
                                <a href="#" class="icon-block d-flex align-items-center flex-grow-1 hover-scale-2">
                                <span class="icon-element icon-element-sm y-bg-rgb">
                                    <i class="la la-youtube"></i>
                                </span>
                                    <div class="pl-2 flex-grow-1">
                                        <span class="text-color font-weight-bold font-size-17 d-block line-height-20">20,876</span>
                                        <span class="text-gray font-weight-medium font-size-13 d-block line-height-20">مشتركين</span>
                                    </div>
                                </a><!-- end icon-block -->
                            </div><!-- end icon-block-wrap -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">برعاية</h3>
                            <div class="stroke-shape mb-4"></div>
                            <div class="hosted-by d-flex align-items-center">
                                <a href="user-profile.html" class="user-thumb user-thumb-md flex-shrink-0 mr-3">
                                    <img src="{{asset('assets/front')}}/images/avatar-img.jpg" alt="author-img">
                                </a>
                                <div>
                                    <h4 class="font-size-18"><a href="user-profile.html" class="text-color">مارك هاردسون</a></h4>
                                    <span class="font-size-13 text-gray font-weight-medium d-block line-height-22">استضافت 20 قائمة</span>
                                </div>
                            </div>
                            <ul class="list-items py-4">
                                <li><i class="la la-phone mr-2 text-color-2 font-size-18"></i><a href="#" class="before-none">+ 61 23 8093 3400</a></li>
                                <li><i class="la la-envelope mr-2 text-color-2 font-size-18"></i><a href="#" class="before-none">listhub@gmail.com</a></li>
                            </ul>
                            <div class="btn-box">
                                <a href="user-profile.html" class="theme-btn gradient-btn w-100"><i class="la la-user mr-2"></i>عرض الصفحة الشخصية</a>
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
                        <div class="card-item border border-color">
                            <div class="card-image">
                                <a href="listing-details.html" class="d-block">
                                    <img src="{{asset('assets/front')}}/images/img4.jpg" class="card__img" alt="">
                                    <span class="badge">مفتوح الان</span>
                                </a>
                                <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                            </div>
                            <div class="card-content">
                                <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                    <img src="{{asset('assets/front')}}/images/listing-logo.jpg" alt="author-img">
                                </a>
                                <h4 class="card-title pt-3">
                                    <a href="listing-details.html">المكان المفضل بنك الطعام</a>
                                    <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                </h4>
                                <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>Bishop Avenue, New York</a></p>
                                <ul class="listing-meta d-flex align-items-center">
                                    <li class="d-flex align-items-center">
                                        <span class="rate flex-shrink-0">4.7</span>
                                        <span class="rate-text">5 التقييمات</span>
                                    </li>
                                    <li>
                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Pricey">
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                    </span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="la la-cutlery mr-1 listing-icon"></i><a href="#" class="listing-cat-link">مطعم</a>
                                    </li>
                                </ul>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-link icon"></span>
                                        <a href="#"> www.techydevs.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o icon"></span>
                                        افتتح منذ 1 شهر
                                    </li>
                                </ul>
                            </div>
                        </div><!-- end card-item -->
                        <div class="card-item border border-color">
                            <div class="card-image">
                                <a href="listing-details.html" class="d-block">
                                    <img src="{{asset('assets/front')}}/images/img5.jpg" class="card__img" alt="">
                                    <span class="badge bg-10">مغلق</span>
                                </a>
                                <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                            </div>
                            <div class="card-content">
                                <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                    <img src="{{asset('assets/front')}}/images/listing-logo2.jpg" alt="author-img">
                                </a>
                                <h4 class="card-title pt-3">
                                    <a href="listing-details.html">بيتش بلو بوردووك</a>
                                </h4>
                                <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>Bishop Avenue, New York</a></p>
                                <ul class="listing-meta d-flex align-items-center">
                                    <li class="d-flex align-items-center">
                                        <span class="rate flex-shrink-0">4.7</span>
                                        <span class="rate-text">5 التقييمات</span>
                                    </li>
                                    <li>
                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Moderate">
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                    </span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="la la-plane mr-1 listing-icon"></i><a href="#" class="listing-cat-link">السفر</a>
                                    </li>
                                </ul>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-link icon"></span>
                                        <a href="#"> www.techydevs.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o icon"></span>
                                        افتتح منذ 1 شهر
                                    </li>
                                </ul>
                            </div>
                        </div><!-- end card-item -->
                        <div class="card-item border border-color">
                            <div class="card-image">
                                <a href="listing-details.html" class="d-block">
                                    <img src="{{asset('assets/front')}}/images/img6.jpg" class="card__img" alt="">
                                    <span class="badge">مفتوح الان</span>
                                </a>
                                <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                            </div>
                            <div class="card-content">
                                <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                    <img src="{{asset('assets/front')}}/images/listing-logo3.jpg" alt="author-img">
                                </a>
                                <h4 class="card-title pt-3">
                                    <a href="listing-details.html">فندق جوفيندور</a>
                                </h4>
                                <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>Bishop Avenue, New York</a></p>
                                <ul class="listing-meta d-flex align-items-center">
                                    <li class="d-flex align-items-center">
                                        <span class="rate flex-shrink-0">4.7</span>
                                        <span class="rate-text">5 التقييمات</span>
                                    </li>
                                    <li>
                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Inexpensive">
                                        <strong class="font-weight-medium">$</strong>
                                    </span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="la la-hotel mr-1 listing-icon"></i><a href="#" class="listing-cat-link">الفنادق</a>
                                    </li>
                                </ul>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-link icon"></span>
                                        <a href="#"> www.techydevs.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o icon"></span>
                                        افتتح منذ 1 شهر
                                    </li>
                                </ul>
                            </div>
                        </div><!-- end card-item -->
                        <div class="card-item border border-color">
                            <div class="card-image">
                                <a href="listing-details.html" class="d-block">
                                    <img src="{{asset('assets/front')}}/images/img7.jpg" class="card__img" alt="">
                                    <span class="badge">مفتوح الان</span>
                                </a>
                                <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                            </div>
                            <div class="card-content">
                                <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                    <img src="{{asset('assets/front')}}/images/anywhere.png" alt="author-img">
                                </a>
                                <h4 class="card-title pt-3">
                                    <a href="listing-details.html">حزب الفرقة اللزجة</a>
                                    <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                </h4>
                                <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>Bishop Avenue, New York</a></p>
                                <ul class="listing-meta d-flex align-items-center">
                                    <li class="d-flex align-items-center">
                                        <span class="rate flex-shrink-0">4.7</span>
                                        <span class="rate-text">5 التقييمات</span>
                                    </li>
                                    <li>
                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Pricey">
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                    </span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="la la-music mr-1 listing-icon"></i><a href="#" class="listing-cat-link">حدث</a>
                                    </li>
                                </ul>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-link icon"></span>
                                        <a href="#"> www.techydevs.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o icon"></span>
                                        افتتح منذ 1 شهر
                                    </li>
                                </ul>
                            </div>
                        </div><!-- end card-item -->
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

    <!-- Modal -->
    <div class="modal fade modal-container login-form" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center mh-bg">
                    <h5 class="modal-title" id="loginModalTitle">مرحبًا بك مرة أخرى!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" class="form-box">
                        <div class="input-box">
                            <label class="label-text">اسم المستخدم أو البريد الالكتروني</label>
                            <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input class="form-control form-control-styled" type="text" name="text" placeholder="اسم المستخدم أو البريد الالكتروني">
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">كلمه السر</label>
                            <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input class="form-control form-control-styled" type="text" name="text" placeholder="أدخل كلمة المرور">
                            </div>
                        </div>
                        <div class="input-box d-flex align-items-center justify-content-between pb-4 user-action-meta">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="keepMeSignedChb">
                                <label for="keepMeSignedChb" class="font-size-14">ابقني مسجل</label>
                            </div>
                            <a href="javascript:void(0)" class="margin-bottom-10px lost-pass-btn font-size-14">كلمة مرور مفقودة؟</a>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="theme-btn gradient-btn w-100">
                                <i class="la la-sign-in mr-1"></i> تسجيل الدخول إلى الحساب
                            </button>
                            <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                                هل أنت جديد في Listhub؟ <a class="text-color-2 signup-btn" href="javascript:void(0)">إنشاء حساب</a>
                            </p>
                        </div>
                        <div class="icon-element font-size-16 font-weight-semi-bold mt-5 mb-4 mx-auto">
                            أو
                        </div>
                        <div class="text-center">
                            <p class="font-size-15 font-weight-medium">تسجيل الدخول مع الشبكة الاجتماعية الخاصة بك</p>
                            <ul class="social-profile social-profile-colored py-3">
                                <li>
                                    <a href="#" class="google-bg mx-1" data-toggle="tooltip" data-placement="top" title="Google">
                                        <i class="lab la-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="facebook-bg mx-1" data-toggle="tooltip" data-placement="top" title="Facebook">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter-bg mx-1" data-toggle="tooltip" data-placement="top" title="Twitter">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram-bg mx-1" data-toggle="tooltip" data-placement="top" title="Instagram">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-container signup-form" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center mh-bg-2">
                    <h5 class="modal-title" id="signUpModalTitle">أهلا بك! إنشاء حساب listhub الخاص بك</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" class="form-box">
                        <div class="input-box">
                            <label class="label-text">اسم المستخدم</label>
                            <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input class="form-control form-control-styled" type="text" name="text" placeholder="اسم المستخدم">
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">البريد الإلكتروني</label>
                            <div class="form-group">
                                <span class="la la-envelope form-icon"></span>
                                <input class="form-control form-control-styled" type="email" name="text" placeholder="البريد الإلكتروني">
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">كلمه السر</label>
                            <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input class="form-control form-control-styled" type="text" name="text" placeholder="كلمه السر">
                            </div>
                            <p class="font-size-14 mt-n2">يجب أن تتكون كلمة المرور الخاصة بك من 6 أحرف على الأقل ويجب أن تحتوي على أحرف وأرقام وأحرف خاصة. لا يمكن أن تحتوي على مسافات.</p>
                        </div>
                        <div class="input-box py-4 user-action-meta">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="agreeChb">
                                <label for="agreeChb" class="font-size-14"> بالتسجيل ، فإنك توافق على<a href="privacy-policy.html" class="text-color-2">سياسة خاصة.</a></label>
                            </div>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="theme-btn gradient-btn w-100">
                                <i class="la la-user-plus mr-1"></i> تسجيل حساب
                            </button>
                            <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                                بالفعل على Listhub؟ <a class="text-color-2 login-btn" href="javascript:void(0)">تسجيل الدخول</a>
                            </p>
                        </div>
                        <div class="icon-element font-size-16 font-weight-semi-bold mt-5 mb-4 mx-auto">
                            أو
                        </div>
                        <div class="text-center">
                            <p class="font-size-15 font-weight-medium">تواصل مع الشبكة الاجتماعية</p>
                            <ul class="social-profile social-profile-colored py-3">
                                <li>
                                    <a href="#" class="google-bg mx-1" data-toggle="tooltip" data-placement="top" title="Google">
                                        <i class="lab la-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="facebook-bg mx-1" data-toggle="tooltip" data-placement="top" title="Facebook">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter-bg mx-1" data-toggle="tooltip" data-placement="top" title="Twitter">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram-bg mx-1" data-toggle="tooltip" data-placement="top" title="Instagram">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="font-size-15 pb-3">لا تقلق ، فنحن لا ننشر أي شيء على ملفك الشخصي على وسائل التواصل الاجتماعي.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-container recover-form" id="recoverModal" tabindex="-1" role="dialog" aria-labelledby="recoverModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center mh-bg">
                    <h5 class="modal-title" id="recoverModalTitle">إعادة تعيين كلمة المرور</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="font-size-15 font-weight-medium pb-3">
                        أدخل اسم المستخدم الخاص بك أو البريد الإلكتروني لإعادة تعيين كلمة المرور الخاصة بك.
                        ستتلقى رسالة بريد إلكتروني تحتوي على إرشادات حول كيفية إعادة تعيين كلمة المرور الخاصة بك. إذا كنت تواجه مشاكل
                        إعادة تعيين كلمة المرور الخاصة بك<a href="contact.html" class="text-color-2">اتصل بنا</a> أو<a href="#" class="text-color-2">مراسلتنا على البريد الاليكتروني</a>
                    </p>
                    <form method="post" class="form-box">
                        <div class="input-box">
                            <label class="label-text">عنوان بريد الكتروني</label>
                            <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input class="form-control form-control-styled" type="text" name="text" placeholder="عنوان بريد الكتروني">
                            </div>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="theme-btn gradient-btn w-100">
                                احصل على كلمة سر جديدة <i class="la la-arrow-right ml-1"></i>
                            </button>
                            <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                                ليس عضوا؟ <a class="text-color-2 signup-btn" href="javascript:void(0)">انشئ حساب</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-container" id="replayModal" tabindex="-1" role="dialog" aria-labelledby="replayModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center mh-bg-2">
                    <h5 class="modal-title" id="replayModalTitle">إعادة على هذا التعليق</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" class="form-box">
                        <div class="input-box">
                            <label class="label-text">رسالة</label>
                            <div class="form-group">
                                <span class="la la-pencil form-icon"></span>
                                <textarea class="message-control form-control" name="message" placeholder="رسالة"></textarea>
                            </div>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="theme-btn gradient-btn w-100">
                                إعادة <i class="la la-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end modal -->
    <div class="modal fade modal-container" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center mh-bg">
                    <h5 class="modal-title" id="shareModalTitle">شارك هذه القائمة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="copy-to-clipboard mb-3">
                        <form action="#" class="form-box d-flex align-items-center">
                            <span class="text-success-message">تم نسخ الرابط!</span>
                            <input type="text" class="form-control copy-input pl-3" value="{{route('front.getStore',$store->id)}}">
                            <div class="btn-box pl-2">
                                <button type="button" class="theme-btn gradient-btn copy-text">نسخ</button>
                            </div>
                        </form>
                    </div><!-- end copy-to-clipboard -->
                    <h3 class="widget-title">مشاركه فى</h3>
                    <ul class="social-profile social-profile-colored">
                        <li><a href="#" class="facebook-bg"><i class="la la-facebook-f"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                        <li><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                        <li><a href="#" class="youtube-bg"><i class="la la-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-container" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center mh-bg-2">
                    <h5 class="modal-title" id="reportModalTitle">الإبلاغ عن هذه القائمة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="font-size-15 font-weight-medium pb-3">
                        تتم مراجعة المحتوى الذي تم الإبلاغ عنه بواسطة موظفي Dirto لتحديد ما إذا كان ينتهك شروط الخدمة أو إرشادات المجتمع. إذا كان لديك سؤال أو مشكلة فنية ، يرجى الاتصال بنا
                        <a href="contact.html" class="text-color-2">فريق الدعم هنا</a>
                    </p>
                    <form method="post" class="form-box">
                        <div class="input-box">
                            <label class="label-text">نوع القضية</label>
                            <div class="form-group user-chosen-select-container">
                                <select class="user-chosen-select">
                                    <option value="0">حدد مشكلة</option>
                                    <option value="1">محتوى قائمة غير لائق</option>
                                    <option value="2">سلوك غير لائق</option>
                                    <option value="3">انتهاك سياسة Listhub</option>
                                    <option value="4">محتوى غير مرغوب فيه</option>
                                    <option value="5">سلوك فظ مع العميل</option>
                                    <option value="Other">آخر</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">تفاصيل المشكلة</label>
                            <div class="form-group">
                                <span class="la la-pencil form-icon"></span>
                                <textarea class="message-control form-control" name="message" placeholder="اشرح مشكلة التقرير بشكل واضح قدر الإمكان"></textarea>
                            </div>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="theme-btn gradient-btn w-100">
                                قائمة التقرير <i class="la la-arrow-right ml-2"></i>
                            </button>
                            <p class="font-size-13 font-weight-medium pt-1 text-center"><span class="text-warning">تحذير:</span> يمكن أن يتم حظرك بسبب الرسائل العنيفة.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-container message-form" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center mh-bg-2">
                    <h5 class="modal-title" id="messageModalTitle">ارسل رسالة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-times-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="font-size-15 font-weight-medium pb-2">
                        <span class="text-color">To:</span> TechyDevs
                    </p>
                    <form method="post" class="form-box">
                        <div class="input-box">
                            <label class="label-text">شارك ببعض التفاصيل حتى نتمكن من الاتصال بالعمل التجاري</label>
                            <div class="form-group">
                                <span class="la la-pencil form-icon"></span>
                                <textarea class="message-control form-control" name="message" placeholder="هل يمكن أن تخبرني عن خدماتك؟"></textarea>
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text d-block">قم بتضمين معلوماتك
                                <span class="text-gray">أو</span> <a class="text-color-2 login-btn" href="javascript:void(0)">تسجيل الدخول</a>
                            </label>
                            <label class="label-text">عنوان بريد الكتروني</label>
                            <div class="form-group">
                                <span class="la la-envelope-o form-icon"></span>
                                <input class="form-control form-control-styled" type="email" name="email" placeholder="البريد الإلكتروني">
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="label-text">الاسم الاول</label>
                            <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input class="form-control form-control-styled" type="text" name="text" placeholder="Fالاسم الاول">
                            </div>
                        </div>
                        <div class="btn-box">
                            <p class="font-size-13 font-weight-medium pb-2 line-height-16">سنرسل معلوماتك إلى الشركة للمساعدة في الحصول على رد.</p>
                            <button type="submit" class="theme-btn gradient-btn w-100">
                                ارسل رسالة <i class="la la-arrow-right ml-2"></i>
                            </button>
                            <p class="font-size-13 font-weight-medium pt-1">بالمتابعة ، فإنك توافق على
                                <a href="terms-and-conditions.html" class="text-color-2">شروط الخدمة</a> و
                                <a href="privacy-policy.html" class="text-color-2">سياسة خاصة</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
