<header class="header-area ">
    <div class="header-top-bar bg-dark py-2 padding-right-30px padding-left-30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center header-top-info font-size-14">

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
                        <li><a href="{{$settings->facebook}}" target="_blank" class="facebook-bg"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="{{$settings->twitter}}" target="_blank" class="twitter-bg"><i class="lab la-twitter"></i></a></li>
                        <li><a href="{{$settings->instagram}}" target="_blank" class="instagram-bg"><i class="lab la-instagram"></i></a></li>
                        <li><a href="{{$settings->youtube}}" target="_blank" class="youtube-bg"><i class="la la-youtube"></i></a></li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top-bar -->
    <div class="header-menu-wrapper padding-right-30px padding-left-30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('assets/front')}}/images/logo-white.png" alt="logo"></a>
                            <div class="d-flex align-items-center">
                                <a href="add-listing.html" class="btn-gray add-listing-btn-show font-size-24 mr-2 flex-shrink-0" data-toggle="tooltip" data-placement="left" title="Add Listing">
                                    <i class="la la-plus"></i>
                                </a>
                                <div class="menu-toggle">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div><!-- end menu-toggle -->
                            </div>
                        </div><!-- end logo -->
                        <div class="quick-search-form d-flex align-items-center">
                            <form action="#" class="w-100">
                                <div class="header-search position-relative">
                                    <i class="la la-search form-icon"></i>
                                    <input type="search" placeholder="ما الذي تبحث عنه؟">
                                    <div class="instant-results">
                                        <ul class="instant-results-list">
                                            @foreach($categories->take(5) as $index=>$category)
                                                <li><a href="{{route('front.getCategory',$category->id)}}" class="d-flex align-items-center"><span class="icon-element bg-{{$index}} mr-2"><i class="{{$category->icon}}"></i></span>{{$category->name}}</a></li>

                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end quick-search-form -->
                        <div class="main-menu-content ml-auto">
                            <nav class="main-menu">
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
                        <div class="nav-right-content">
                            <a href="{{route('front.addStore')}}" class="theme-btn gradient-btn shadow-none add-listing-btn-hide">
                                <i class="la la-plus mr-2"></i>إضافة قائمة
                            </a>
                        </div><!-- end nav-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>

