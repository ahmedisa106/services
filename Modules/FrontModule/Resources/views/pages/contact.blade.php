@extends('frontmodule::layouts.master')

@section('content')

    <!-- ================================
             END HEADER AREA
    ================================= -->

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg bread-overlay overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading">
                            <h2 class="sec__title text-white font-size-40 mb-0">قائمة نتائج البحث</h2>
                        </div>
                        <ul class="list-items bread-list">
                            <li><a href="{{url('/')}}">الصفحة الرئيسية</a></li>
                            <li>البحث</li>
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
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START CARD AREA
    ================================= -->
    <section class="card-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-bar d-flex flex-wrap justify-content-center align-items-center margin-bottom-30px">
                        <p class="result-text font-weight-medium "> عدد النتائج : {{$stores->count()}} </p>
                        <div class="filter-bar-action d-flex flex-wrap align-items-center">
                            {{--                            <a href="#" class="search-filter" data-toggle="modal" data-target="#searchFilterModal">--}}
                            {{--                                <i class="la la-sliders mr-1"></i>بحث مفصل--}}
                            {{--                            </a>--}}
                            {{--                            <div class="user-chosen-select-container ml-3">--}}
                            {{--                                <select class="user-chosen-select">--}}
                            {{--                                    <option value="sort-by-default">فرز بشكل افتراضي</option>--}}
                            {{--                                    <option value="high-rated">تصنيف عالي</option>--}}
                            {{--                                    <option value="most-reviewed">الأكثر مراجعة</option>--}}
                            {{--                                    <option value="popular-Listing">قائمة شعبية</option>--}}
                            {{--                                    <option value="newest-Listing">أحدث قائمة</option>--}}
                            {{--                                    <option value="older-Listing">قائمة أقدم</option>--}}
                            {{--                                    <option value="price-low-to-high">السعر من الارخص للاعلى</option>--}}
                            {{--                                    <option value="price-high-to-low">السعر الاعلى الى الادنى</option>--}}
                            {{--                                    <option value="all-listings">عشوائي</option>--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            {{--                            <ul class="filter-nav ml-1">--}}
                            {{--                                <li><a href="listing-grid.html" data-toggle="tooltip" data-placement="top" title="Grid View"><span class="la la-th-large"></span></a></li>--}}
                            {{--                                <li><a href="listing-list.html" data-toggle="tooltip" data-placement="top" title="List View" class="active"><span class="la la-list"></span></a></li>--}}
                            {{--                            </ul>--}}
                        </div><!-- end filter-bar-action -->
                    </div><!-- end filter-bar -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-8">
                    <div class="row">
                        @forelse($stores as $store)
                            <div class="col-lg-12">
                                <div class="card-item card-item-list">
                                    <div class="card-image">
                                        <a href="listing-details.html" class="d-block">
                                            <img title="{{$store->name}}" src="{{asset('assets/front')}}/images/img-loading.png" data-src="{{$store->cover}}" class="card__img lazy" alt="">
                                            <span class="badge {{$store->status==='مغلق'? 'bg-10':''}}">{{$store->status}} الان</span>
                                        </a>
                                        <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                    <i class="la la-bookmark"></i>
                                 </span>
                                    </div>
                                    <div class="card-content">
                                        <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="{{$store->name}}">
                                            <img src="{{$store->photo}}" style="width: 50px" alt="author-img">
                                        </a>
                                        <h4 class="card-title pt-3">
                                            <a title="{{$store->name}}" href="listing-details.html">{{$store->name}}</a>
                                            <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                        </h4>
                                        <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>{{$store->address}}</a></p>
                                        <ul class="listing-meta d-flex align-items-center">
                                            {{--                                            <li class="d-flex align-items-center">--}}
                                            {{--                                                <span class="rate flex-shrink-0">4.7</span>--}}
                                            {{--                                                <span class="rate-text">5 التقييمات</span>--}}
                                            {{--                                            </li>--}}
                                            <li>
                                                {{--                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Pricey">--}}
                                                {{--                                        <strong class="font-weight-medium">$</strong>--}}
                                                {{--                                        <strong class="font-weight-medium">$</strong>--}}
                                                {{--                                        <strong class="font-weight-medium">$</strong>--}}
                                                {{--                                    </span>--}}
                                            </li>

                                            <li class="d-flex align-items-center">
                                                @foreach($store->category->random(1) as $cat)
                                                    <i class="{{$cat->icon}} mr-1 listing-icon"></i> <a href="#" class="listing-cat-link">{{$cat->name}} </a>

                                                @endforeach
                                                {{--End Foreach--}}
                                            </li>
                                        </ul>
                                        <ul class="info-list padding-top-20px">
                                            <li><span class="la la-link icon"></span>
                                                <a href="#"> {{$store->email}}</a>
                                            </li>
                                            <li><span class="la la-whatsapp icon"></span>
                                                {{$store->whatsapp}}
                                            </li>
                                            <li><span class="la la-phone icon"></span>
                                                {{$store->mobile}}
                                            </li>
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

                                            {{$stores->links()}}

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
                            <form action="#" class="form-box">
                                <div class="form-group">
                                    <span class="la la-search form-icon"></span>
                                    <input class="form-control" type="search" placeholder="عما تبحث؟">
                                </div>
                                <div class="form-group user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="0">اختر موقعا</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua &amp; Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AC">Ascension Island</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia &amp; Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="VG">British Virgin Islands</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="BQ">Caribbean Netherlands</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo - Brazzaville</option>
                                        <option value="CD">Congo - Kinshasa</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d’Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czechia</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="SZ">Eswatini</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong SAR China</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao SAR China</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar (Burma)</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="MK">North Macedonia</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PS">Palestinian Territories</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn Islands</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">São Tomé &amp; Príncipe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                        <option value="KR">South Korea</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="BL">St. Barthélemy</option>
                                        <option value="SH">St. Helena</option>
                                        <option value="KN">St. Kitts &amp; Nevis</option>
                                        <option value="LC">St. Lucia</option>
                                        <option value="MF">St. Martin</option>
                                        <option value="PM">St. Pierre &amp; Miquelon</option>
                                        <option value="VC">St. Vincent &amp; Grenadines</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad &amp; Tobago</option>
                                        <option value="TA">Tristan da Cunha</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks &amp; Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican City</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="WF">Wallis &amp; Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div><!-- end form-group -->
                                <div class="form-group user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="0">اختر تصنيف</option>
                                        <option value="1">كل الفئات</option>
                                        <option value="2">محلات</option>
                                        <option value="3">الفنادق</option>
                                        <option value="4">أغذية ومطاعم</option>
                                        <option value="5">اللياقه البدنيه</option>
                                        <option value="6">السفر</option>
                                        <option value="7">صالونات</option>
                                        <option value="8">حدث</option>
                                        <option value="9">اعمال</option>
                                        <option value="10">وظائف</option>
                                    </select>
                                </div><!-- end form-group -->
                                <div class="form-group user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="0">نطاق السعر</option>
                                        <option value="1">$ غير مكلف</option>
                                        <option value="2">$$ معتدل</option>
                                        <option value="3">$$$ الثمن</option>
                                        <option value="4">$$$$ عالية جدا</option>
                                    </select>
                                </div><!-- end form-group -->
                                <div class="btn-box">
                                    <a href="#" class="btn-gray btn-gray-lg open-filter-btn w-100"><i class="la la-clock mr-2"></i>مفتوح الان</a>
                                    <button type="submit" class="theme-btn gradient-btn border-0 w-100 mt-3">
                                        <i class="la la-search mr-2"></i>ابحث الآن
                                    </button>
                                </div><!-- end btn-box -->
                            </form>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">تصفية حسب الميزات</h3>
                            <div class="stroke-shape mb-4"></div>
                            <div class="checkbox-wrap">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="elevatorInBuildingChb2">
                                    <label for="elevatorInBuildingChb2">مصعد في المبنى</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="goodForKidsChb">
                                    <label for="goodForKidsChb">جيد للأطفال</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="goodForGroupsChb">
                                    <label for="goodForGroupsChb">جيد للمجموعات</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="likedBy-20-SomethingsChb">
                                    <label for="likedBy-20-SomethingsChb">أحبها 20 سميثينغز</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="likedBy-30-SomethingsChb">
                                    <label for="likedBy-30-SomethingsChb">أحبها 30 سميثينغز</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="likedBy-40-SomethingsChb">
                                    <label for="likedBy-40-SomethingsChb">أحبها 40 سميثينغز</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="wirelessInternetChb">
                                    <label for="wirelessInternetChb">انترنت لاسلكي</label>
                                </div><!-- end custom-checkbox -->
                                <div class="collapse collapse-content" id="showMoreOptionCollapse">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="friendlyWorkspaceChb2">
                                        <label for="friendlyWorkspaceChb2">مساحة عمل ودية</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="instantBookChb2">
                                        <label for="instantBookChb2">الحجز الفوري</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="freeParkingChb2">
                                        <label for="freeParkingChb2">موقف سيارات مجاني</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="smokingAllowedChb2">
                                        <label for="smokingAllowedChb2">مسموح التدخين</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="eventsChb">
                                        <label for="eventsChb">الأحداث</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="wheelchairAccessibleChb2">
                                        <label for="wheelchairAccessibleChb2">تسهيلات لدخول المعاقين</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="alarmSystemChb">
                                        <label for="alarmSystemChb">نظام إنذار </label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="electricityChb">
                                        <label for="electricityChb">كهرباء</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="attachedGarageChb">
                                        <label for="attachedGarageChb">مرآب ملحق</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="securityCamerasChb">
                                        <label for="securityCamerasChb">كاميرات مراقبة</label>
                                    </div><!-- end custom-checkbox -->
                                </div>
                                <a class="collapse-btn" data-toggle="collapse" href="#showMoreOptionCollapse" role="button" aria-expanded="false" aria-controls="showMoreOptionCollapse">
                                    <span class="collapse-btn-hide">أظهر المزيد <i class="la la-plus ml-1"></i></span>
                                    <span class="collapse-btn-show">عرض أقل <i class="la la-minus ml-1"></i></span>
                                </a>
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">تصفية حسب الأحياء</h3>
                            <div class="stroke-shape mb-4"></div>
                            <div class="checkbox-wrap">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="outerSunsetChb">
                                    <label for="outerSunsetChb">غروب الشمس الخارجي</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="forestHillChb">
                                    <label for="forestHillChb">تلة الغابة</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="stonestownChb">
                                    <label for="stonestownChb">ستونستاون</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="innerRichmondChb">
                                    <label for="innerRichmondChb">ريتشموند الداخلية</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="alamoSquareChb">
                                    <label for="alamoSquareChb">ساحة ألامو</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="fisherman'sWharfChb">
                                    <label for="fisherman'sWharfChb">رصيف الصياد</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="glenParkChb">
                                    <label for="glenParkChb">جلين بارك</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="civicCenterChb">
                                    <label for="civicCenterChb">مركز المدينة</label>
                                </div><!-- end custom-checkbox -->
                                <div class="collapse collapse-content" id="showMoreOptionCollapse3">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="coleValleyChb">
                                        <label for="coleValleyChb">وادي كول</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="crocker-AmazonChb">
                                        <label for="crocker-AmazonChb">كروكر أمازون</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="diamondHeightsChb">
                                        <label for="diamondHeightsChb">دايموند هايتس</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="duboceTriangleChb">
                                        <label for="duboceTriangleChb">مثلث دوبوس</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="fillmoreChb">
                                        <label for="fillmoreChb">فيلمور</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="japantownChb">
                                        <label for="japantownChb">جابانتاون</label>
                                    </div><!-- end custom-checkbox -->
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="westwoodParkChb">
                                        <label for="westwoodParkChb">ويستوود بارك</label>
                                    </div><!-- end custom-checkbox -->
                                </div>
                                <a class="collapse-btn" data-toggle="collapse" href="#showMoreOptionCollapse3" role="button" aria-expanded="false" aria-controls="showMoreOptionCollapse3">
                                    <span class="collapse-btn-hide">أظهر المزيد <i class="la la-plus ml-1"></i></span>
                                    <span class="collapse-btn-show">عرض أقل <i class="la la-minus ml-1"></i></span>
                                </a>
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">تصفية حسب الفئة</h3>
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
                            <h3 class="widget-title">تصفية حسب السعر</h3>
                            <div class="stroke-shape mb-4"></div>
                            <form action="#" class="form-box price-range-wrap price-range-wrap-2">
                                <div class="input-box d-flex align-items-center">
                                    <div class="form-group mb-0">
                                        <span class="form-icon dollar-icon text-color">$</span>
                                        <input class="form-control form-control-sm padding-left-25px" type="text" name="text" placeholder="5">
                                    </div>
                                    <span class="px-2">-</span>
                                    <div class="form-group mb-0">
                                        <span class="form-icon dollar-icon text-color">$</span>
                                        <input class="form-control form-control-sm padding-left-25px" type="text" name="text" placeholder="29">
                                    </div>
                                    <button class="btn-gray ml-3">تطبيق</button>
                                </div>
                            </form>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">تصفية حسب العلامات</h3>
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
                            <h3 class="widget-title">تصفية حسب التقييمات</h3>
                            <div class="stroke-shape mb-4"></div>
                            <ul class="custom-radio">
                                <li class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <label class="radio-label">
                                            <input type="radio" checked="checked" name="rating-radio">
                                            <span class="radio-mark"></span>
                                        </label>
                                        <div class="font-weight-medium">
                                            عرض الكل
                                        </div>
                                    </div>
                                    <span class="font-size-14 font-weight-medium">
                                    48,473
                                </span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <label class="radio-label">
                                            <input type="radio" name="rating-radio">
                                            <span class="radio-mark"></span>
                                        </label>
                                        <div class="stars">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                        </div>
                                    </div>
                                    <span class="font-size-14 font-weight-medium">
                                    23,403
                                </span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <label class="radio-label">
                                            <input type="radio" name="rating-radio">
                                            <span class="radio-mark"></span>
                                        </label>
                                        <div class="stars">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-o text-gray"></span>
                                        </div>
                                    </div>
                                    <span class="font-size-14 font-weight-medium">
                                    1403
                                </span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <label class="radio-label">
                                            <input type="radio" name="rating-radio">
                                            <span class="radio-mark"></span>
                                        </label>
                                        <div class="stars">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-o text-gray"></span>
                                            <span class="la la-star-o text-gray"></span>
                                        </div>
                                    </div>
                                    <span class="font-size-14 font-weight-medium">
                                    988
                                </span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <label class="radio-label">
                                            <input type="radio" name="rating-radio">
                                            <span class="radio-mark"></span>
                                        </label>
                                        <div class="stars">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star-o text-gray"></span>
                                            <span class="la la-star-o text-gray"></span>
                                            <span class="la la-star-o text-gray"></span>
                                        </div>
                                    </div>
                                    <span class="font-size-14 font-weight-medium">
                                    200
                                </span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <label class="radio-label">
                                            <input type="radio" name="rating-radio">
                                            <span class="radio-mark"></span>
                                        </label>
                                        <div class="stars">
                                            <span class="la la-star"></span>
                                            <span class="la la-star-o text-gray"></span>
                                            <span class="la la-star-o text-gray"></span>
                                            <span class="la la-star-o text-gray"></span>
                                            <span class="la la-star-o text-gray"></span>
                                        </div>
                                    </div>
                                    <span class="font-size-14 font-weight-medium">
                                    100
                                </span>
                                </li>
                            </ul>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">مسافة</h3>
                            <div class="stroke-shape mb-4"></div>
                            <div class="checkbox-wrap">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="birdEyeViewChb">
                                    <label for="birdEyeViewChb">نظرة عامة</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="drivingChb">
                                    <label for="drivingChb">القيادة (5 mi.)</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="bikingChb">
                                    <label for="bikingChb">ركوب الدراجة (2 mi.)</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="walkingChb">
                                    <label for="walkingChb">المشي (1 mi.)</label>
                                </div><!-- end custom-checkbox -->
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="withinFourblocksChb">
                                    <label for="withinFourblocksChb">في حدود 4 كتل</label>
                                </div><!-- end custom-checkbox -->
                            </div><!-- end check-box-list -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <div class="btn-box">
                                <button type="submit" class="theme-btn gradient-btn w-100 border-0">
                                    تطبيق عامل التصفية <i class="la la-arrow-right ml-1"></i>
                                </button>
                                <button type="submit" class="btn-gray btn-gray-lg mt-3 w-100">
                                    <i class="la la-redo-alt mr-1"></i> إعادة تعيين المرشحات
                                </button>
                            </div>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end card-area -->
@endsection
