@extends('frontmodule::layouts.master')
@push('css')

@endpush
@section('content')
    @include('frontmodule::includes.header')


    <section class="breadcrumb-area bread-bg bread-overlay overflow-hidden" style="background-image: url({{$category->cover}}); height: 601px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading">
                            <h2 class="sec__title text-white font-size-40 mb-0">{{$category->name}} </h2>
                        </div>
                        <ul class="list-items bread-list">
                            <li><a href="{{url('/')}}">الصفحة الرئيسية</a></li>
                            <li>{{$category->name}}</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="bread-svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="50px" viewBox="0 0 1200 150" preserveAspectRatio="none">
                <g>
                    <path fill-opacity="0.2" d="M0,150 C600,100 1000,50 1200,-1.13686838e-13 C1200,6.8027294 1200,56.8027294 1200,150 L0,150 Z"></path>
                </g>
                <g class="pix-waiting animated" data-anim-type="fade-in-up" data-anim-delay="300">
                    <path fill="rgba(255,255,255,0.8)" d="M0,150 C600,120 1000,80 1200,30 C1200,36.8027294 1200,76.8027294 1200,150 L0,150 Z"></path>
                </g>
                <path fill="#fff" d="M0,150 C600,136.666667 1000,106.666667 1200,60 C1200,74 1200,104 1200,150 L0,150 Z"></path>
                <defs></defs>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->


    <section class="card-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-bar d-flex flex-wrap justify-content-center align-items-center margin-bottom-30px">
                        <p class="result-text font-weight-medium "> عدد النتائج : {{$category->stores->count()}} </p>
                        <div class="filter-bar-action d-flex flex-wrap align-items-center">

                        </div><!-- end filter-bar-action -->
                    </div><!-- end filter-bar -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-8">
                    <div class="row">
                        @forelse($category->stores as $store)
                            <div class="col-lg-12">
                                <div class="card-item card-item-list">
                                    <div class="card-image">
                                        <a href="{{route('front.getStore',$store->id)}}" class="d-block">
                                            <img title="{{$store->name}}" src="{{asset('assets/front')}}/images/img-loading.png" style="height: 370px ;" data-src="{{$store->cover ??asset('images/default/store.jpg')}}" class="card__img lazy" alt="">
                                            <span class="badge {{$store->status==='مغلق'? 'bg-10':''}}">{{$store->status}} الان</span>
                                        </a>
                                        <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                    <i class="la la-bookmark"></i>
                                 </span>
                                    </div>
                                    <div class="card-content">
                                        <a href="{{route('front.getStore',$store->id)}}" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="{{$store->name}}">
                                            <img src="{{$store->photo??asset('images/default/store.jpg')}}" style="width: 50px" alt="author-img">
                                        </a>
                                        <h4 class="card-title pt-3">
                                            <a title="{{$store->name}}" href="{{route('front.getStore',$store->id)}}">{{$store->name}}</a>
                                            <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                        </h4>
                                        <p class="card-sub"><a href=""><i class="la la-map-marker mr-1 text-color-2"></i>{{$store->address}}</a></p>
                                        <ul class="listing-meta d-flex align-items-center">

                                            <li>

                                            </li>

                                            <li class="d-flex align-items-center">

                                                <i class="{{$category->icon}} mr-1 listing-icon"></i> <a href="{{route('front.getCategory',$category->id)}}" class="listing-cat-link">{{$category->name}} </a>


                                                {{--End Foreach--}}
                                            </li>
                                        </ul>
                                        <ul class="info-list padding-top-20px">
                                            @if ($store->email)
                                                <li><span class="la la-link icon"></span>
                                                    <a href="{{$store->email}}" target="_blank"> {{$store->email}}</a>
                                                </li>
                                            @endif
                                            @if ($store->whatsapp)
                                                <li><span class="la la-whatsapp icon"></span>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{$store->whatsapp}}&amp">{{$store->whatsapp}}</a>
                                                </li>
                                            @endif
                                            @if ($store->mobile)
                                                <li><span class="la la-phone icon"></span>
                                                    <a href="tel:{{$store->mobile}}">{{$store->mobile}}</a>

                                                </li>
                                            @endif


                                        </ul>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-12 -->

                        @empty

                            <div class=" alert alert-danger col-md-12 text-center"><i class=" la la-exclamation-triangle"></i> عفوا لم يتم العثور علي اي بيانات !</div>
                        @endforelse
                        {{--End Foreach--}}


                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-lg-12 pt-3 text-center">
                            <div class="pagination-wrapper d-inline-block">
                                <div class="section-pagination">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination flex-wrap justify-content-center">


                                        </ul>
                                    </nav>
                                </div><!-- end section-pagination -->

                            </div>
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar mb-0">
                        <div class="sidebar-widget">
                            <h3 class="widget-title">بحث</h3>
                            <div class="stroke-shape mb-4"></div>
                            <form action="{{route('front.search')}}" class="form-box" method="get">
                                @csrf
                                <div class="form-group">
                                    <span class="la la-search form-icon"></span>
                                    <input name="search_text" class="form-control" type="search" placeholder="عما تبحث؟">
                                </div>
                                <div class="form-group user-chosen-select-container">
                                    <select name="zone_id" class="user-chosen-select">
                                        <option value="">اختر موقعا</option>
                                        @foreach($zones as $zone)
                                            <option value="{{$zone->id}}">{{$zone->name}}</option>
                                        @endforeach

                                    </select>
                                </div><!-- end form-group -->
                                <div class="form-group user-chosen-select-container">
                                    <select name="category_id" class="user-chosen-select">
                                        <option value="0">اختر تصنيف</option>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>

                                        @endforeach

                                    </select>
                                </div><!-- end form-group -->

                                <div class="btn-box">


                                    <div class="form-group user-chosen-select-container">
                                        <select name="status" class="user-chosen-select">

                                            <option value="">الحاله</option>
                                            <option value="open">مفتوح الأن</option>
                                            <option value="close">مغلق</option>


                                        </select>
                                    </div><!-- end form-group -->


                                    <button type="submit" class="theme-btn gradient-btn border-0 w-100 mt-3">
                                        <i class="la la-search mr-2"></i>ابحث الآن
                                    </button>
                                </div><!-- end btn-box -->
                            </form>
                        </div><!-- end sidebar-widget -->

                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end card-area -->
@endsection
