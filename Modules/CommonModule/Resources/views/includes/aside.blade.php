<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" {{active('admin.dashboard')}} nav-item"><a href="{{url('/admin-panel')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">الرئيسيه</span></a>

            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">القائمه</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" {{active('admin.settings')}} nav-item"><a href="{{url('/admin-panel/settings')}}"><i class="la la-gears"></i><span class="menu-title" data-i18n="nav.dash.main">الإعدادات</span></a>

            <li class=" nav-item"><a href="#"><i class="la la-align-right"></i><span class="menu-title" data-i18n="nav.page_layouts.main">الأقسام</span></a>
                <ul class="menu-content">


                    <li class="{{active('categories')}}"><a class="menu-item" href="{{route('categories.index')}}" data-i18n="nav.page_layouts.3_columns.main">الأقسام الرئيسيه</a>

                    </li>
                    <li class="{{active('sub-categories')}}"><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">الأقسام الفرعيه</a>

                    </li>

                </ul>
            </li>


        </ul>
    </div>
</div>
