@extends('frontmodule::layouts.master')

@section('content')

    @include('frontmodule::includes.header')
    <section class="hero-wrapper overflow-hidden">
        <div class="overlay"></div><!-- end overlay -->
        <div id="fullscreen-slide-container">
            <ul class="slides-container">
                <li><img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('images/logo/'.$settings->logo)}}" alt=""></li>
                <li><img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('images/logo/'.$settings->logo)}}" alt=""></li>
                {{--                <li><img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/hero-bg2.jpg" alt=""></li>--}}
                {{--                <li><img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/hero-bg3.jpg" alt=""></li>--}}
                {{--                <li><img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/hero-bg4.jpg" alt=""></li>--}}
                {{--                <li><img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/hero-bg5.jpg" alt=""></li>--}}
            </ul>
        </div><!-- End fullscreen-slide-container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-heading text-center">
                        <div class="section-heading">
                            <h2 class="sec__title cd-headline slide">
                                ماالذي تهتم به
                                <span class="cd-words-wrapper py-0">

                                    @forelse($categories as $cat)

                                        <b class="{{$loop->first ?'is-visible':''}}">{{$cat->name}}</b>

                                    @empty
                                        <b class="is-visible">لا يوجد أقسام</b>
                                    @endforelse

                        </span>
                            </h2>
                            <p class="sec__desc">
                                اكتشف أفضل الأماكن للإقامة وتناول الطعام والتسوق وزيارة أقرب مدينة إليك.
                            </p>
                        </div>
                    </div><!-- end hero-heading -->
                    <form action="{{route('front.search')}}" class="form-box" method="get">
                        @csrf
                        <div class="main-search-input">
                            <div class="main-search-input-item">

                                <div class="form-group mb-0">
                                    <span class="la la-search form-icon"></span>
                                    <input class="form-control" type="search" name="search_text" placeholder="عما تبحث؟">
                                </div>

                            </div><!-- end main-search-input-item -->
                            <div class="main-search-input-item user-chosen-select-container">
                                <select class="user-chosen-select" name="government">
                                    <option value="0">اختر محافظه</option>
                                    @foreach($governments as $government)

                                        <option value="{{$government->id}}">{{$government->name}}</option>
                                    @endforeach
                                    {{--End Foreach--}}

                                </select>
                            </div><!-- end main-search-input-item -->
                            <div class="main-search-input-item user-chosen-select-container">
                                <label hidden for="category_id"></label>
                                <select required class="user-chosen-select" id="category_id" name="category_id">
                                    <option value="0">اختر تصنيف</option>

                                    @foreach($categories as $index=> $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    {{--End Foreach--}}


                                </select>
                            </div><!-- end main-search-input-item -->

                    </form>

                    <div class="main-search-input-item">
                        <button class="theme-btn gradient-btn border-0 w-100" type="submit"><i class="la la-search mr-2"></i>ابحث الآن</button>
                    </div><!-- end main-search-input-item -->
                </div><!-- end main-search-input -->
                <div class="highlighted-categories">
                    <div class="d-flex align-items-end justify-content-center highlight-search-desc py-5 text-center">
                        <img src="{{asset('assets/front')}}/images/arrow-shape.png" alt="" class="mr-5 cat-arrow-icon">
                        <h5 class="highlighted__title">مجرد النظر حولك؟ دعنا نقترح <br>عليك شيئًا ساخنًا ويحدث!</h5>
                    </div>
                    <div class="highlight-lists d-flex justify-content-center mt-4">
                        @foreach($categories->take(5) as $index=> $category)
                            <div class="hero-category-item">
                                <a href="{{route('front.getCategory',$category->id)}}" class="d-block hero-cat-link hover-y">
                                    <span class="icon-element bg-{{$index+1}} mx-auto"><i class="la la-{{$category->icon}}"></i></span>
                                    {{$category->name}}
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div><!-- end highlighted-categories -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        </div><!-- end container -->
        <div class="svg-bg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path fill="#F5F7FC" class="elementor-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
            </svg>
        </div>
    </section><!-- end hero-wrapper -->

    <section class="category-area bg-gray arrow-down-shape position-relative section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <div class="section-icon gradient-icon mb-3 mx-auto">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 438.891 438.891" xml:space="preserve">
                            <defs>
                                <linearGradient id="svg-gradient">
                                    <stop offset="5%" stop-color="#ff6b6b"/>
                                    <stop offset="95%" stop-color="#ffbb3d"/>
                                </linearGradient>
                            </defs>
                                <g>
                                    <path d="M347.968,57.503h-39.706V39.74c0-5.747-6.269-8.359-12.016-8.359h-30.824c-7.314-20.898-25.6-31.347-46.498-31.347
                                                c-20.668-0.777-39.467,11.896-46.498,31.347h-30.302c-5.747,0-11.494,2.612-11.494,8.359v17.763H90.923
                                                c-23.53,0.251-42.78,18.813-43.886,42.318v299.363c0,22.988,20.898,39.706,43.886,39.706h257.045
                                                c22.988,0,43.886-16.718,43.886-39.706V99.822C390.748,76.316,371.498,57.754,347.968,57.503z M151.527,52.279h28.735
                                                c5.016-0.612,9.045-4.428,9.927-9.404c3.094-13.474,14.915-23.146,28.735-23.51c13.692,0.415,25.335,10.117,28.212,23.51
                                                c0.937,5.148,5.232,9.013,10.449,9.404h29.78v41.796H151.527V52.279z M370.956,399.185c0,11.494-11.494,18.808-22.988,18.808
                                                H90.923c-11.494,0-22.988-7.314-22.988-18.808V99.822c1.066-11.964,10.978-21.201,22.988-21.42h39.706v26.645
                                                c0.552,5.854,5.622,10.233,11.494,9.927h154.122c5.98,0.327,11.209-3.992,12.016-9.927V78.401h39.706
                                                c12.009,0.22,21.922,9.456,22.988,21.42V399.185z"/>
                                    <path d="M179.217,233.569c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437,31.869l-14.106-14.629
                                                c-3.919-4.131-10.425-4.363-14.629-0.522c-4.047,4.24-4.047,10.911,0,15.151l21.42,21.943c1.854,2.076,4.532,3.224,7.314,3.135
                                                c2.756-0.039,5.385-1.166,7.314-3.135l40.751-38.661c4.04-3.706,4.31-9.986,0.603-14.025
                                                C179.628,233.962,179.427,233.761,179.217,233.569z"/>
                                    <path d="M329.16,256.034H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16
                                                c5.771,0,10.449-4.678,10.449-10.449S334.931,256.034,329.16,256.034z"/>
                                    <path d="M179.217,149.977c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437,31.869l-14.106-14.629
                                                c-3.919-4.131-10.425-4.364-14.629-0.522c-4.047,4.24-4.047,10.911,0,15.151l21.42,21.943c1.854,2.076,4.532,3.224,7.314,3.135
                                                c2.756-0.039,5.385-1.166,7.314-3.135l40.751-38.661c4.04-3.706,4.31-9.986,0.603-14.025
                                                C179.628,150.37,179.427,150.169,179.217,149.977z"/>
                                    <path d="M329.16,172.442H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16
                                                c5.771,0,10.449-4.678,10.449-10.449S334.931,172.442,329.16,172.442z"/>
                                    <path d="M179.217,317.16c-3.919-4.131-10.425-4.363-14.629-0.522l-33.437,31.869l-14.106-14.629
                                                c-3.919-4.131-10.425-4.363-14.629-0.522c-4.047,4.24-4.047,10.911,0,15.151l21.42,21.943c1.854,2.076,4.532,3.224,7.314,3.135
                                                c2.756-0.039,5.385-1.166,7.314-3.135l40.751-38.661c4.04-3.706,4.31-9.986,0.603-14.025
                                                C179.628,317.554,179.427,317.353,179.217,317.16z"/>
                                    <path d="M329.16,339.626H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16
                                                c5.771,0,10.449-4.678,10.449-10.449S334.931,339.626,329.16,339.626z"/>
                                </g>
                        </svg>
                        </div>
                        <h2 class="sec__title">الفئات الأكثر شهرة</h2>
                        <p class="sec__desc">

                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                @foreach($categories->take(8) as $index=> $category)
                    <div class="col-lg-3 responsive-column">
                        <div class="category-item overflow-hidden">

                            <img src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{$category->photo ?? asset("assets/front/images/cat-img-2.jpg") }}" style="height: 175px;" alt="category-image" class="cat-img lazy">
                            <div class="category-content d-flex align-items-center justify-content-center">
                                <a href="{{route('front.getCategory',$category->id)}}" class="category-link d-flex flex-column justify-content-center w-100 h-100">
                                    <div class="icon-element mb-3 mx-auto">
                                        <span class="la la-{{$category->icon}}"></span>
                                    </div>
                                    <div class="cat-content">
                                        <h4 class="cat__title mb-3">{{$category->name}}</h4>
                                        <span class="badge">{{$category->stores->count()}} القوائم</span>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end category-item -->
                    </div><!-- end col-lg-3 -->
                @endforeach
                {{--End Foreach--}}


            </div><!-- end row -->
            <div class="more-btn-box pt-3 text-center">
                <a href="{{route('front.categories')}}" class="btn-gray hover-scale-2">تصفح جميع الفئات <i class="la la-arrow-right ml-2"></i></a>
            </div>
        </div><!-- end container -->
    </section><!-- end category-area -->
    <!-- ================================
        END CATEGORY AREA
    ================================= -->

    <!-- ================================
        START CARD AREA
    ================================= -->
    <section class="card-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <div class="section-icon gradient-icon mb-3 mx-auto">
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="svg-gradient11">
                                        <stop offset="5%" stop-color="#ff6b6b"/>
                                        <stop offset="95%" stop-color="#ffbb3d"/>
                                    </linearGradient>
                                </defs>
                                <g>
                                    <path
                                        d="m507.786 64.62c-.304-.286-60.445-57.641-60.445-57.641-2.299-2.206-4.677-4.486-9.117-4.486h-242.12c-7.072 0-12.826 5.753-12.826 12.825v39.383l-85.335 14.628c-6.84 1.2-11.44 7.746-10.255 14.579l4.331 25.252c-27.737 9.334-56.214 18.956-83.705 28.831-6.496 2.375-9.905 9.598-7.587 16.133l54.685 152.016c1.1 3.059 3.983 4.964 7.058 4.964.842 0 1.7-.143 2.538-.445 3.898-1.402 5.921-5.698 4.519-9.596l-53.876-149.768c25.9-9.273 52.722-18.349 78.935-27.172l25.771 150.245 29.654 173.032c1.071 6.108 6.44 10.454 12.5 10.454.686 0 1.382-.056 2.08-.171l80.316-13.783 62.76-10.758-94.391 33.927-74.435 26.763-57.808-160.789c-1.401-3.898-5.696-5.921-9.595-4.52-3.898 1.401-5.921 5.697-4.52 9.595l58.628 163.074c1.875 5.128 6.733 8.316 11.868 8.316 1.419 0 2.86-.244 4.264-.757l76.671-27.566 174.094-62.574 33.259-5.701h73.471c7.072 0 12.826-5.766 12.826-12.854v-326.985c.001-4.489-2.435-6.779-4.213-8.451zm-19.871 1.776h-37.53l-.93.004c-1.797.012-6.004.043-7.071-1.017-.246-.245-.534-1.063-.534-2.582l-.087-40.415zm9.085 331.512h-298.722v-146.167c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v148.313c0 7.087 5.754 12.854 12.826 12.854h140.812l-94.545 16.206-77.982 13.383-29.248-170.665-32.269-188.13 80.405-13.783v147.022c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-199.449h228.475l.098 45.326c0 5.494 1.671 9.938 4.966 13.21 5.063 5.027 12.22 5.377 16.663 5.377.382 0 .744-.003 1.083-.005l47.438-.003z"/>
                                    <path d="m234.43 118.949c0 4.142 3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-214.436c-4.142 0-7.5 3.358-7.5 7.5z"/>
                                    <path d="m456.366 164.731h-214.436c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/>
                                    <path d="m456.366 218.013h-214.436c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/>
                                    <path d="m456.366 271.295h-214.436c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/>
                                    <path d="m456.366 324.578h-214.436c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h214.436c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/>
                                </g>
                            </svg>
                        </div>
                        <h2 class="sec__title">تحقق من أحدث أعمالنا</h2>
                        <p class="sec__desc">
                            <br>

                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                @foreach($stores->random(3) as $store)
                    <div class="col-lg-4 responsive-column">
                        <div class="card-item">
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
                    </div><!-- end col-lg-4 -->

                @endforeach

            </div><!-- end row -->
            <div class="more-link-wrap text-right">
                <a href="#" class="btn-text font-weight-medium">عرض المزيد من الأعمال الساخنة والجديدة <i class="la la-arrow-right icon"></i></a>
            </div>
        </div><!-- end container -->
    </section><!-- end card-area -->
    <!-- ================================
        END CARD AREA
    ================================= -->

    <!-- ================================
        START HIW AREA
    ================================= -->
    <section class="hiw-area padding-top-100px bg-gradient-gray hiw-bottom-left-round">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <div class="section-icon gradient-icon mb-3 mx-auto">
                            <svg id="Layer_1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="svg-gradient2">
                                        <stop offset="5%" stop-color="#ff6b6b"/>
                                        <stop offset="95%" stop-color="#ffbb3d"/>
                                    </linearGradient>
                                </defs>
                                <path d="m80.075 233.13h57.425a8.752 8.752 0 0 0 8.743-8.74v-19.414a6 6 0 0 0 -12 0v16.154h-50.911v-50.83h25.455a6 6 0 0 0 0-12h-28.712a8.751 8.751 0 0 0 -8.743 8.74v57.35a8.752 8.752 0 0 0 8.743 8.74z"/>
                                <path d="m151.2 154.933a6 6 0 0 0 -8.45.774l-28.622 34.393-9.184-7.431a6 6 0 1 0 -7.544 9.331l11.04 8.932a9.512 9.512 0 0 0 12.71-.562l.241-.231 30.584-36.754a6 6 0 0 0 -.775-8.452z"/>
                                <path d="m442.1 162.482h-234.125a6 6 0 0 0 0 12h234.125a6 6 0 0 0 0-12z"/>
                                <path d="m442.1 212.193h-234.125a6 6 0 0 0 0 12h234.125a6 6 0 0 0 0-12z"/>
                                <path d="m140.243 326.144a6 6 0 0 0 -6 6v16.156h-50.911v-50.832h25.455a6 6 0 0 0 0-12h-28.712a8.752 8.752 0 0 0 -8.743 8.74v57.35a8.752 8.752 0 0 0 8.743 8.741h57.425a8.752 8.752 0 0 0 8.743-8.741v-19.414a6 6 0 0 0 -6-6z"/>
                                <path d="m151.2 282.1a6 6 0 0 0 -8.45.775l-28.619 34.392-9.184-7.43a6 6 0 1 0 -7.548 9.328l11.04 8.932a9.513 9.513 0 0 0 12.71-.561l.241-.232 30.584-36.754a6 6 0 0 0 -.774-8.45z"/>
                                <path d="m442.1 289.65h-48.748a6 6 0 0 0 0 12h48.748a6 6 0 1 0 0-12z"/>
                                <path d="m284.014 289.65h-76.039a6 6 0 0 0 0 12h76.039a6 6 0 0 0 0-12z"/>
                                <path d="m228.468 339.362h-20.493a6 6 0 1 0 0 12h20.493a6 6 0 1 0 0-12z"/>
                                <path
                                    d="m472.364 10h-432.728a27.665 27.665 0 0 0 -27.636 27.632v358.6a27.656 27.656 0 0 0 27.594 27.631l228.837 1.619 11.592 45.552c.02.081.043.162.067.243a42.821 42.821 0 0 0 41.266 30.723h83.659a43.143 43.143 0 0 0 43.085-43.1v-33.7l24.439-1.333a27.666 27.666 0 0 0 27.461-27.632v-358.603a27.665 27.665 0 0 0 -27.636-27.632zm-432.728 12h432.728a15.651 15.651 0 0 1 15.636 15.632v60.749h-464v-60.749a15.651 15.651 0 0 1 15.636-15.632zm396.464 436.9a31.13 31.13 0 0 1 -31.085 31.1h-83.659a30.891 30.891 0 0 1 -29.736-22.051l-12.7-49.911a212.685 212.685 0 0 0 -11.938-34.3l-.982-2.33a39.484 39.484 0 0 1 32.5 17.06l10.318 14.949v22.283a6 6 0 0 0 12 0v-163.071a11.286 11.286 0 1 1 22.572 0v106.507a5.989 5.989 0 0 0 .256 1.73v24.459a6 6 0 0 0 12 0v-33.511a8.95 8.95 0 1 1 17.9 0v6.8a21.7 21.7 0 0 0 -.234 3.163v23.552a6 6 0 0 0 6 6h.117s.077 0 .117 0a6 6 0 0 0 6-6v-25.642a9.628 9.628 0 0 1 19.031 2.086v29.775a6 6 0 0 0 12 0v-20.371a9.761 9.761 0 1 1 19.521 0zm36.266-47.029c-.109 0-.218 0-.327.01l-23.939 1.3v-22a21.741 21.741 0 0 0 -33.459-18.341 21.609 21.609 0 0 0 -30.925-9.553 20.858 20.858 0 0 0 -28.324-10.267v-80.391a23.286 23.286 0 1 0 -46.572 0v119.663l-.442-.64a51.476 51.476 0 0 0 -42.378-22.244 12.043 12.043 0 0 0 -10.99 16.963l1.011 2.262a200.728 200.728 0 0 1 9.18 24.829l-225.569-1.6a15.651 15.651 0 0 1 -15.632-15.627v-285.854h464v285.854a15.651 15.651 0 0 1 -15.636 15.631z"/>
                                <path d="m62.2 82.431a23 23 0 1 0 -23-23 23.024 23.024 0 0 0 23 23zm0-33.992a11 11 0 1 1 -11 11 11.01 11.01 0 0 1 11-11z"/>
                                <path d="m122.833 82.431a23 23 0 1 0 -23-23 23.024 23.024 0 0 0 23 23zm0-33.992a11 11 0 1 1 -11 11 11.01 11.01 0 0 1 11-11z"/>
                                <path d="m183.467 82.431a23 23 0 1 0 -23-23 23.024 23.024 0 0 0 23 23zm0-33.992a11 11 0 1 1 -11 11 11.01 11.01 0 0 1 11-11z"/>
                                <path d="m273 64.3h194.933a6 6 0 0 0 0-12h-194.933a6 6 0 0 0 0 12z"/>
                            </svg>
                        </div>
                        <h2 class="sec__title">بحث سريع وسهل</h2>
                        <p class="sec__desc">
                            كرة القدم شرب الوادي لسحب القدر. قسم التصوير المجاني Tellus <br>
                            بواسطة feugiat. الآن هذا التنورة المتخصصين
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-4 responsive-column">
                    <div class="info-box">
                        <span class="info-number">1</span>
                        <div class="info-icon">
                            <span class="la la-map-marked"></span>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">البحث عن مكان رائع</h4>
                            <p class="info__desc">
                                لاعبي كرة القدم بروتين الأرز Diam varius ecos time. ياسمين من
                                من الحداد ، حتى نهايات الأرض ، إيروس كونفاليس.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="info-box">
                        <span class="info-number">2</span>
                        <div class="info-icon">
                            <span class="la la-list"></span>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">اختر فئة</h4>
                            <p class="info__desc">
                                لاعبي كرة القدم بروتين الأرز Diam varius ecos time. ياسمين من
                                من الحداد ، حتى نهايات الأرض ، إيروس كونفاليس.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="info-box">
                        <span class="info-number">3</span>
                        <div class="info-icon">
                            <span class="la la-thumbs-up"></span>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">اذهب واستمتع</h4>
                            <p class="info__desc">
                                لاعبي كرة القدم بروتين الأرز Diam varius ecos time. ياسمين من
                                من الحداد ، حتى نهايات الأرض ، إيروس كونفاليس.
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4 mx-auto padding-top-30px">
                    <div class="icon-element icon-element-white mx-auto shadow-sm font-size-20 margin-bottom-45px">
                        أو
                    </div>
                    <a class="video-box video-box-negative hover-scale-2" href="https://www.youtube.com/watch?v=GlrxcuEDyF8" data-fancybox title="Play Video">
                        <img class="lazy" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{asset('assets/front')}}/images/video-img.jpg" alt="video image">
                        <div class="video-content d-flex align-items-center justify-content-center">
                            <span class="d-block mr-3 font-weight-semi-bold">انقر لمشاهدة كيف يعمل</span>
                            <span class="icon-element icon-element-white">
                             <i class="la la-play"></i>
                        </span>
                        </div>
                    </a><!-- end video-box -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end hiw-area -->
    <!-- ================================
        END HIW AREA
    ================================= -->

    <!-- ================================
        START CARD AREA
    ================================= -->
    <section class="card-area padding-top-160px padding-bottom-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <div class="section-icon gradient-icon mb-3 mx-auto">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                            <defs>
                                <linearGradient id="svg-gradient3">
                                    <stop offset="5%" stop-color="#ff6b6b"/>
                                    <stop offset="95%" stop-color="#ffbb3d"/>
                                </linearGradient>
                            </defs>
                                <g>
                                    <path d="M444.519,17.067h-25.6V8.533c0-4.713-3.82-8.533-8.533-8.533s-8.533,3.82-8.533,8.533v8.533h-102.4V8.533
                                                c0-4.713-3.82-8.533-8.533-8.533s-8.533,3.82-8.533,8.533v8.533h-102.4V8.533c0-4.713-3.82-8.533-8.533-8.533
                                                s-8.533,3.82-8.533,8.533v8.533h-25.6c-14.132,0.015-25.585,11.468-25.6,25.6V204.8c0,4.713,3.82,8.533,8.533,8.533
                                                s8.533-3.821,8.533-8.533V42.667c0.006-4.71,3.823-8.527,8.533-8.533h25.6v18.639c-11.755,4.156-18.806,16.176-16.698,28.465
                                                c2.108,12.289,12.763,21.271,25.231,21.271s23.123-8.982,25.231-21.271s-4.943-24.309-16.698-28.465V34.133h102.4v18.639
                                                c-11.755,4.156-18.806,16.176-16.698,28.465s12.763,21.271,25.231,21.271s23.123-8.982,25.231-21.271
                                                s-4.943-24.309-16.698-28.465V34.133h102.4v18.639c-11.755,4.156-18.806,16.176-16.698,28.465
                                                c2.108,12.289,12.763,21.271,25.231,21.271s23.123-8.982,25.231-21.271s-4.943-24.309-16.698-28.465V34.133h25.6
                                                c4.71,0.006,8.527,3.823,8.533,8.533V486.4c-0.006,4.71-3.823,8.527-8.533,8.533h-307.2c-4.71-0.006-8.527-3.823-8.533-8.533
                                                V366.933c0-4.713-3.82-8.533-8.533-8.533s-8.533,3.82-8.533,8.533V486.4c0.015,14.132,11.468,25.585,25.6,25.6h307.2
                                                c14.132-0.015,25.585-11.468,25.6-25.6V42.667C470.104,28.535,458.651,17.082,444.519,17.067z M171.452,85.333
                                                c-4.713,0-8.533-3.82-8.533-8.533s3.82-8.533,8.533-8.533s8.533,3.82,8.533,8.533C179.98,81.51,176.163,85.327,171.452,85.333z
                                                 M290.919,85.333c-4.713,0-8.533-3.82-8.533-8.533s3.82-8.533,8.533-8.533s8.533,3.82,8.533,8.533
                                                C299.446,81.51,295.629,85.327,290.919,85.333z M410.386,85.333c-4.713,0-8.533-3.82-8.533-8.533s3.82-8.533,8.533-8.533
                                                s8.533,3.82,8.533,8.533C418.913,81.51,415.096,85.327,410.386,85.333z"/>
                                    <path d="M171.452,179.2c0.2,0,0.404-0.009,0.604-0.021c2.467-0.175,4.737-1.413,6.221-3.392l25.6-34.133
                                                c1.83-2.438,2.219-5.667,1.022-8.471c-1.197-2.804-3.799-4.756-6.825-5.121c-3.026-0.365-6.018,0.912-7.847,3.35l-19.7,26.263
                                                l-10.109-10.108c-3.341-3.281-8.701-3.256-12.012,0.054s-3.335,8.671-0.054,12.012l17.067,17.067
                                                C167.018,178.301,169.189,179.201,171.452,179.2z"/>
                                    <path d="M148.353,253.5l17.067,17.067c1.599,1.602,3.77,2.501,6.033,2.5c0.2,0,0.404-0.008,0.604-0.021
                                                c2.467-0.175,4.737-1.413,6.221-3.392l25.6-34.133c2.828-3.769,2.065-9.118-1.704-11.946c-3.769-2.828-9.118-2.065-11.946,1.704
                                                l-19.7,26.263l-10.109-10.108c-3.341-3.281-8.701-3.256-12.012,0.054C145.096,244.799,145.072,250.159,148.353,253.5z"/>
                                    <path d="M231.186,170.667h196.267c4.713,0,8.533-3.82,8.533-8.533s-3.82-8.533-8.533-8.533H231.186
                                                c-4.713,0-8.533,3.82-8.533,8.533S226.473,170.667,231.186,170.667z"/>
                                    <path d="M231.186,264.533h196.267c4.713,0,8.533-3.82,8.533-8.533s-3.82-8.533-8.533-8.533H231.186
                                                c-4.713,0-8.533,3.82-8.533,8.533S226.473,264.533,231.186,264.533z"/>
                                    <path d="M231.186,358.4h196.267c4.713,0,8.533-3.82,8.533-8.533s-3.82-8.533-8.533-8.533H231.186
                                                c-4.713,0-8.533,3.82-8.533,8.533S226.473,358.4,231.186,358.4z"/>
                                    <path d="M231.186,452.267h196.267c4.713,0,8.533-3.82,8.533-8.533s-3.82-8.533-8.533-8.533H231.186
                                                c-4.713,0-8.533,3.82-8.533,8.533S226.473,452.267,231.186,452.267z"/>
                                    <path d="M167.724,349.671l6.229,6.229c2.15,2.18,5.304,3.041,8.264,2.255c2.96-0.786,5.271-3.097,6.057-6.057
                                                c0.786-2.96-0.075-6.114-2.255-8.264l-6.072-6.072c-0.173-16.55-6.488-32.446-17.719-44.603l-74.133-80.313
                                                c-4.565-4.933-10.844-7.933-17.55-8.384c-0.498-0.038-0.975-0.168-1.479-0.178h-0.004c-5.376-0.041-10.648,1.487-15.168,4.397
                                                c-1.509,0.986-2.911,2.125-4.186,3.399c-10.141,10.087-10.467,26.395-0.738,36.879l12.787,13.854l0.003,0.002l60.468,65.506
                                                C134.057,341.06,150.366,348.713,167.724,349.671z M61.511,237.383c-2.574-2.788-3.254-6.834-1.734-10.31
                                                c1.52-3.476,4.953-5.724,8.747-5.727l0.2,0.004c2.6,0.041,5.069,1.152,6.825,3.071l6.246,6.767l-13.519,13.523L61.511,237.383z
                                                 M93.382,243.737l56.304,60.996c6.981,7.542,11.453,17.062,12.8,27.25c-10.643-1.95-20.368-7.296-27.717-15.237l-54.91-59.486
                                                L93.382,243.737z"/>
                                </g>
                        </svg>
                        </div>
                        <h2 class="sec__title">أعلى القوائم حول العالم</h2>
                        <p class="sec__desc">
                            كرة القدم شرب الوادي لسحب القدر. قسم التصوير المجاني Tellus <br>
                            بواسطة feugiat. الآن هذا التنورة المتخصصين
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-12">
                    <div class="card-carousel owl-trigger-action">
                        @foreach($stores->random(6) as $store)
                            <div class="card-item border border-color">
                                <div class="card-image">
                                    <a href="{{route('front.getStore',$store->id)}}" class="d-block">
                                        <img src="{{$store->cover}}" style=" height: 246px; width: 370px" class="card__img" alt="">
                                        <span class="badge {{$store->status==='مغلق'? 'bg-10':''}}">{{$store->status}} الان</span>
                                    </a>
                                    <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                                </div>
                                <div class="card-content">
                                    <a href="{{route('front.getStore',$store->id)}}" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                        <img src="{{$store->photo}}" alt="author-img">
                                    </a>
                                    <h4 class="card-title pt-3">
                                        <a href="{{route('front.getStore',$store->id)}}">{{$store->name}}</a>
                                        <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>
                                    <p class="card-sub"><a><i class="la la-map-marker mr-1 text-color-2"></i>{{$store->address}}</a></p>
                                    <ul class="listing-meta d-flex align-items-center">


                                        <li class="d-flex align-items-center">
                                            @foreach($store->category->take(1) as $cat)
                                                <i class="la la-{{$cat->icon}} mr-1 listing-icon"></i> <a href="{{route('front.getCategory',$cat->id)}}" class="listing-cat-link"> {{$cat->name}} </a>

                                            @endforeach
                                            {{--End Foreach--}}
                                        </li>
                                    </ul>
                                    <ul class="info-list padding-top-20px">
                                        @if ($store->email)
                                            <li><span class="la la-link icon"></span>
                                                <a target="_blank" href="mailTo:{{$store->email}}"> {{$store->email}}</a>
                                            </li>
                                        @endif

                                        @if ($store->whatsapp)
                                            <li><span class="la la-whatsapp icon"></span>
                                                <a target="_blank" href="https://api.whatsapp.com/send?phone={{$store->whatsapp}}&amp">{{$store->whatsapp}}</a>
                                            </li>
                                        @endif

                                        @if ($store->mobile)
                                            <li>
                                                <span class="la la-phone icon"></span>
                                                <a href="tel:{{$store->mobile}}" target="_blank">{{$store->mobile}}</a>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div><!-- end card-item -->
                        @endforeach
                        {{--End Foreach--}}


                    </div><!-- end card-carousel -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end card-area -->
    <!-- ================================
        END CARD AREA
    ================================= -->

    <!-- ================================
        START FUN-FACT AREA
    ================================= -->
    <section class="funfact-area bg-gradient-gray section--padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="section-icon gradient-icon mb-3 mx-auto">
                            <svg id="_x31_px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="svg-gradient54">
                                        <stop offset="5%" stop-color="#ff6b6b"/>
                                        <stop offset="95%" stop-color="#ffbb3d"/>
                                    </linearGradient>
                                </defs>
                                <path d="m21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.378 1.121-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.378-1.121 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5z"/>
                                <path d="m23.5 18h-23c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h23c.276 0 .5.224.5.5s-.224.5-.5.5z"/>
                                <path d="m20.5 21h-17c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h17c.276 0 .5.224.5.5s-.224.5-.5.5z"/>
                                <path d="m8.5 22c-.276 0-.5-.224-.5-.5v-2c0-.276.224-.5.5-.5s.5.224.5.5v2c0 .276-.224.5-.5.5z"/>
                                <path d="m7 13c-.276 0-.5-.224-.5-.5v-6c0-.276.224-.5.5-.5s.5.224.5.5v6c0 .276-.224.5-.5.5z"/>
                                <path d="m12 13h-3c-.276 0-.5-.224-.5-.5v-1c0-1.378 1.121-2.5 2.5-2.5.275 0 .5-.224.5-.5v-1c0-.276-.225-.5-.5-.5h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.827 0 1.5.673 1.5 1.5v1c0 .827-.673 1.5-1.5 1.5s-1.5.673-1.5 1.5v.5h2.5c.276 0 .5.224.5.5s-.224.5-.5.5z"/>
                                <path d="m16 13h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.275 0 .5-.224.5-.5v-1c0-.276-.225-.5-.5-.5h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.827 0 1.5.673 1.5 1.5v1c0 .827-.673 1.5-1.5 1.5z"/>
                                <path d="m16 10h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.275 0 .5-.224.5-.5v-1c0-.276-.225-.5-.5-.5h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.827 0 1.5.673 1.5 1.5v1c0 .827-.673 1.5-1.5 1.5z"/>
                            </svg>
                        </div>
                        <h2 class="sec__title">منذ عام 2004 وما زال العد</h2>
                        <p class="sec__desc">
                            كرة القدم شرب الوادي لسحب القدر. قسم التصوير المجاني Tellus <br>
                            بواسطة feugiat. الآن هذا التنورة المتخصصين
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-3 responsive-column">
                    <div class="counter-item d-flex align-items-center">
                        <div class="counter-icon section-icon flex-shrink-0 bg-opacity-1">
                            <svg class="svg-icon-color" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 438.891 438.891" xml:space="preserve">
                            <g>
                                <path d="M347.968,57.503h-39.706V39.74c0-5.747-6.269-8.359-12.016-8.359h-30.824c-7.314-20.898-25.6-31.347-46.498-31.347
                                                c-20.668-0.777-39.467,11.896-46.498,31.347h-30.302c-5.747,0-11.494,2.612-11.494,8.359v17.763H90.923
                                                c-23.53,0.251-42.78,18.813-43.886,42.318v299.363c0,22.988,20.898,39.706,43.886,39.706h257.045
                                                c22.988,0,43.886-16.718,43.886-39.706V99.822C390.748,76.316,371.498,57.754,347.968,57.503z M151.527,52.279h28.735
                                                c5.016-0.612,9.045-4.428,9.927-9.404c3.094-13.474,14.915-23.146,28.735-23.51c13.692,0.415,25.335,10.117,28.212,23.51
                                                c0.937,5.148,5.232,9.013,10.449,9.404h29.78v41.796H151.527V52.279z M370.956,399.185c0,11.494-11.494,18.808-22.988,18.808
                                                H90.923c-11.494,0-22.988-7.314-22.988-18.808V99.822c1.066-11.964,10.978-21.201,22.988-21.42h39.706v26.645
                                                c0.552,5.854,5.622,10.233,11.494,9.927h154.122c5.98,0.327,11.209-3.992,12.016-9.927V78.401h39.706
                                                c12.009,0.22,21.922,9.456,22.988,21.42V399.185z"></path>
                                <path d="M179.217,233.569c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437,31.869l-14.106-14.629
                                                c-3.919-4.131-10.425-4.363-14.629-0.522c-4.047,4.24-4.047,10.911,0,15.151l21.42,21.943c1.854,2.076,4.532,3.224,7.314,3.135
                                                c2.756-0.039,5.385-1.166,7.314-3.135l40.751-38.661c4.04-3.706,4.31-9.986,0.603-14.025
                                                C179.628,233.962,179.427,233.761,179.217,233.569z"></path>
                                <path d="M329.16,256.034H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16
                                                c5.771,0,10.449-4.678,10.449-10.449S334.931,256.034,329.16,256.034z"></path>
                                <path d="M179.217,149.977c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437,31.869l-14.106-14.629
                                                c-3.919-4.131-10.425-4.364-14.629-0.522c-4.047,4.24-4.047,10.911,0,15.151l21.42,21.943c1.854,2.076,4.532,3.224,7.314,3.135
                                                c2.756-0.039,5.385-1.166,7.314-3.135l40.751-38.661c4.04-3.706,4.31-9.986,0.603-14.025
                                                C179.628,150.37,179.427,150.169,179.217,149.977z"></path>
                                <path d="M329.16,172.442H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16
                                                c5.771,0,10.449-4.678,10.449-10.449S334.931,172.442,329.16,172.442z"></path>
                                <path d="M179.217,317.16c-3.919-4.131-10.425-4.363-14.629-0.522l-33.437,31.869l-14.106-14.629
                                                c-3.919-4.131-10.425-4.363-14.629-0.522c-4.047,4.24-4.047,10.911,0,15.151l21.42,21.943c1.854,2.076,4.532,3.224,7.314,3.135
                                                c2.756-0.039,5.385-1.166,7.314-3.135l40.751-38.661c4.04-3.706,4.31-9.986,0.603-14.025
                                                C179.628,317.554,179.427,317.353,179.217,317.16z"></path>
                                <path d="M329.16,339.626H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16
                                                c5.771,0,10.449-4.678,10.449-10.449S334.931,339.626,329.16,339.626z"></path>
                            </g>
                        </svg>
                        </div>
                        <div class="counter-content pl-3">
                            <h3 class="counter__number text-color-3 mb-2">
                                <span class="counter">40,000</span>
                                <span class="count-symbol">+</span>
                            </h3>
                            <p class="counter__title">صفحات القوائم</p>
                        </div><!-- end counter-content -->
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="counter-item d-flex align-items-center">
                        <div class="counter-icon section-icon flex-shrink-0 bg-opacity-2">
                            <svg class="svg-icon-color-2" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">
                            <g>
                                <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                            C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                            c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"></path>
                            </g>
                                <g>
                                    <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                            S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                            C426.667,241.643,412.309,256,394.667,256z"></path>
                                </g>
                                <g>
                                    <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                            S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                            C129.515,241.643,115.157,256,97.515,256z"></path>
                                </g>
                                <g>
                                    <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                            c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                            c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"></path>
                                </g>
                                <g>
                                    <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                            c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                            c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"></path>
                                </g>
                                <g>
                                    <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                            c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                            c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"></path>
                                </g>
                        </svg>
                        </div>
                        <div class="counter-content pl-3">
                            <h3 class="counter__number text-color-4 mb-2">
                                <span class="counter">25,100</span>
                                <span class="count-symbol">+</span>
                            </h3>
                            <p class="counter__title">عملاء سعداء</p>
                        </div><!-- end counter-content -->
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="counter-item d-flex align-items-center">
                        <div class="counter-icon section-icon flex-shrink-0 bg-opacity-3">
                            <svg class="svg-icon-color-3" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path
                                            d="m475.571 189.773c-.912-.912-1.839-1.802-2.774-2.682v-28.821c0-28.659-23.316-51.975-51.975-51.975h-91.169v-26.12c0-27.886-22.687-50.572-50.572-50.572h-85.363c-27.886 0-50.572 22.686-50.572 50.572v26.12h-91.171c-28.659 0-51.975 23.316-51.975 51.975v231.351c0 28.659 23.316 51.975 51.975 51.975h108.516c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-108.516c-20.389 0-36.976-16.587-36.976-36.976v-151.3c14.686 21.784 38.844 36.677 66.519 38.728v27.306c0 15.595 12.688 28.283 28.283 28.283 15.596 0 28.284-12.688 28.284-28.283v-27.061h125.329c0 .12-.004.239-.004.359 0 25.539 7.659 49.898 21.877 70.467l-15.922 15.922c-5.56-1.573-11.79-.184-16.157 4.185l-61.159 61.159c-12.106 12.106-12.106 31.804 0 43.91 12.134 12.134 31.775 12.136 43.91 0l61.159-61.159c4.368-4.368 5.758-10.597 4.185-16.157l15.936-15.936c42.143 29.025 98.319 29.117 140.56.235v9.343c0 20.389-16.587 36.976-36.976 36.976h-118.464c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h118.463c28.659 0 51.975-23.316 51.975-51.975v-21.407c.934-.878 1.861-1.768 2.774-2.681 48.569-48.569 48.575-127.186 0-175.761zm-317.427-109.598c0-19.615 15.958-35.573 35.573-35.573h85.363c19.615 0 35.573 15.958 35.573 35.573v26.12h-15.999v-26.12c0-10.793-8.781-19.574-19.574-19.574h-85.363c-10.793 0-19.574 8.781-19.574 19.574v26.12h-15.999zm30.998 26.12v-26.12c0-2.522 2.052-4.574 4.575-4.574h85.363c2.523 0 4.575 2.052 4.575 4.574v26.12zm-66.056 175.007h-26.568v-25.248c0-7.325 5.959-13.284 13.284-13.284s13.284 5.959 13.284 13.284zm-13.284 36.337c-7.325 0-13.284-5.959-13.284-13.284v-8.054h26.568v8.054c0 7.325-5.959 13.284-13.284 13.284zm28.283-55.344v-6.241c0-15.595-12.688-28.283-28.284-28.283-15.595 0-28.283 12.688-28.283 28.283v5.931c-37.233-3.336-66.519-34.696-66.519-72.782v-30.933c0-20.389 16.587-36.976 36.976-36.976h368.847c20.389 0 36.976 16.587 36.976 36.976v16.731c-47.425-32.537-114.229-28.988-157.987 14.771-19.815 19.814-32.114 45.141-35.467 72.522h-126.259zm87.267 200.395c-6.272 6.272-16.425 6.273-22.698 0-3.032-3.032-4.701-7.062-4.701-11.349s1.669-8.318 4.701-11.349l42.369-42.369 22.698 22.698zm61.159-61.159-8.184 8.184-22.698-22.698 8.184-8.184c.288-.287.665-.431 1.042-.431s.754.144 1.041.43c.002.001.003.003.005.004l20.61 20.61c.574.575.574 1.51 0 2.085zm5.662-17.635-10.726-10.726 13.167-13.167c1.672 1.885 3.4 3.733 5.197 5.529 1.801 1.801 3.649 3.527 5.531 5.194zm18.244-28.969c-20.641-20.64-32.008-48.084-32.008-77.274s11.367-56.634 32.008-77.274c42.706-42.707 111.836-42.713 154.548 0 42.707 42.706 42.713 111.836 0 154.548-42.708 42.708-111.836 42.713-154.548 0z"></path>
                                        <path d="m469.969 287.951c-4.047-.88-8.043 1.686-8.922 5.735-3.052 14.034-10.06 26.848-20.268 37.055-29.341 29.34-76.832 29.343-106.176 0-29.273-29.273-29.273-76.903 0-106.176 29.341-29.341 76.832-29.344 106.176 0 10.197 10.197 17.203 22.997 20.26 37.016.882 4.047 4.879 6.616 8.925 5.73 4.047-.882 6.612-4.878 5.73-8.925-3.67-16.832-12.076-32.194-24.308-44.427-35.203-35.203-92.181-35.207-127.388 0-35.121 35.121-35.121 92.267 0 127.388 35.12 35.12 92.265 35.122 127.388 0 12.245-12.245 20.654-27.624 24.318-44.474.879-4.047-1.688-8.041-5.735-8.922z"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="counter-content pl-3">
                            <h3 class="counter__number text-color-5 mb-2">
                                <span class="counter">12,100</span>
                                <span class="count-symbol">+</span>
                            </h3>
                            <p class="counter__title">انضمت الشركة</p>
                        </div><!-- end counter-content -->
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="counter-item d-flex align-items-center">
                        <div class="counter-icon section-icon flex-shrink-0 bg-opacity-4">
                            <svg class="svg-icon-color-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g id="outline12">
                                    <path
                                        d="M344,273.992H320a23.865,23.865,0,0,0-5.14.585A7.919,7.919,0,0,0,312,274H280V222.641A36.684,36.684,0,0,0,243.359,186H232a8,8,0,0,0-8,8v28.562a62.323,62.323,0,0,1-8.859,32.032l-12.616,20.979-36.048,14.419H120a8,8,0,0,0-8,8v104a8,8,0,0,0,8,8h47.961c.014,0,.025.008.039.008h31.016l31.046,7.758A7.71,7.71,0,0,0,232,418h72a7.924,7.924,0,0,0,2.89-.583,23.916,23.916,0,0,0,5.11.575h24a24.026,24.026,0,0,0,24-24,23.708,23.708,0,0,0-3.211-11.766,23.767,23.767,0,0,0,4.969-36.234,23.627,23.627,0,0,0,0-32,23.9,23.9,0,0,0-17.758-40Zm-184,120H128v-88h32Zm142.242-48a23.438,23.438,0,0,0-3.031,27.767A23.948,23.948,0,0,0,288,393.992,23.7,23.7,0,0,0,289.477,402H232.984l-31.046-7.758A7.71,7.71,0,0,0,200,394H176V303.414l34.969-13.984c.105-.042.17-.133.273-.179a7.9,7.9,0,0,0,2.342-1.534c.061-.06.1-.134.158-.2a7.967,7.967,0,0,0,1.117-1.4l14.008-23.3A78.464,78.464,0,0,0,240,222.562V202h3.359A20.662,20.662,0,0,1,264,222.641v64.273a55.368,55.368,0,0,1-34.969,51.648,8,8,0,0,0,5.938,14.86A71.156,71.156,0,0,0,279.769,290h17.7a23.244,23.244,0,0,0,4.77,23.992,23.627,23.627,0,0,0,0,32Zm33.758,56H312a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16Zm8-32H320a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16Zm0-32H320a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16Zm0-32H320a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16Z"></path>
                                    <path d="M206.609,113.969l15.282,11.093-5.836,17.954a16,16,0,0,0,24.625,17.89l15.273-11.1,15.281,11.1a15.756,15.756,0,0,0,18.805.008,15.767,15.767,0,0,0,5.813-17.891l-5.836-17.961L305.3,113.969a16.006,16.006,0,0,0-9.406-28.953l-18.883.007-5.836-17.961v-.007a16,16,0,0,0-30.438.007L234.9,85.016H216.016a16.008,16.008,0,0,0-9.407,28.953ZM234.9,101.016a15.965,15.965,0,0,0,15.219-11.055l5.8-18.055a.843.843,0,0,1,.039.1l5.836,17.953a15.967,15.967,0,0,0,15.219,11.055h18.883L280.6,112.125A15.964,15.964,0,0,0,274.8,130l5.844,17.969-15.289-11.11a15.984,15.984,0,0,0-18.8.008l-15.274,11.094L237.109,130a15.968,15.968,0,0,0-5.812-17.891l-15.281-11.093Z"></path>
                                    <path d="M136.047,205.805l15.273,11.109a16,16,0,0,0,24.625-17.891l-5.836-17.961,15.282-11.1a16,16,0,0,0-9.407-28.945l-18.882.007-5.836-17.961v-.007a16,16,0,0,0-30.438.007l-5.836,17.954H96.109A16.006,16.006,0,0,0,86.7,169.969l15.281,11.093-5.836,17.954a15.774,15.774,0,0,0,5.813,17.9,15.756,15.756,0,0,0,18.805-.008Zm-24.656-37.7L96.109,157.016h18.883a15.967,15.967,0,0,0,15.219-11.055l5.8-18.055s.015.032.039.1l5.836,17.953A15.965,15.965,0,0,0,157.1,157.016h18.882l-15.281,11.1A15.953,15.953,0,0,0,154.891,186l5.836,17.969-15.282-11.11a15.983,15.983,0,0,0-18.8.008l-15.274,11.094L117.2,186A15.988,15.988,0,0,0,111.391,168.109Z"></path>
                                    <path d="M391.266,123.062v-.007a16,16,0,0,0-30.438.007l-5.836,17.954H336.109a16.006,16.006,0,0,0-9.406,28.953l15.281,11.093-5.836,17.954a15.774,15.774,0,0,0,5.813,17.9,15.756,15.756,0,0,0,18.805-.008l15.281-11.1,15.273,11.109a16,16,0,0,0,24.625-17.891l-5.836-17.961,15.282-11.1a16,16,0,0,0-9.407-28.945l-18.882.007Zm9.437,45.055A15.953,15.953,0,0,0,394.891,186l5.836,17.969-15.282-11.11a15.983,15.983,0,0,0-18.8.008l-15.274,11.094L357.2,186a15.988,15.988,0,0,0-5.812-17.891l-15.282-11.093h18.883a15.967,15.967,0,0,0,15.219-11.055l5.8-18.055s.015.032.039.1l5.836,17.953A15.965,15.965,0,0,0,397.1,157.016h18.882Z"></path>
                                    <path d="M256,16C123.664,16,16,123.664,16,256S123.664,496,256,496,496,388.336,496,256,388.336,16,256,16Zm0,464C132.484,480,32,379.516,32,256S132.484,32,256,32,480,132.484,480,256,379.516,480,256,480Z"></path>
                                    <path d="M432,256a175.64,175.64,0,0,1-25.82,91.82,8,8,0,1,0,13.64,8.36A191.6,191.6,0,0,0,448,256a193.977,193.977,0,0,0-1.625-25.031,8,8,0,1,0-15.859,2.062A179.013,179.013,0,0,1,432,256Z"></path>
                                    <path d="M80,256a179.013,179.013,0,0,1,1.484-22.969,8,8,0,1,0-15.859-2.062A193.977,193.977,0,0,0,64,256a190.874,190.874,0,0,0,15.258,75.133,8,8,0,0,0,14.719-6.266A175,175,0,0,1,80,256Z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="counter-content pl-3">
                            <h3 class="counter__number text-color-6 mb-2">
                                <span class="counter">18,200</span>
                                <span class="count-symbol">+</span>
                            </h3>
                            <p class="counter__title">تصنيفات خمس نجوم</p>
                        </div><!-- end counter-content -->
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end funfact-area -->
    <!-- ================================
        END FUN-FACT AREA
    ================================= -->


@endsection
