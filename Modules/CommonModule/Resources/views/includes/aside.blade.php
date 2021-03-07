<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" {{active('admin.dashboard')}} nav-item"><a href="{{url('/admin-panel')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">الرئيسيه</span></a>
            <li class=" {{active('admin.settings')}} nav-item"><a href="{{url('/admin-panel/settings')}}"><i class="la la-gears"></i><span class="menu-title" data-i18n="nav.dash.main">الإعدادات</span></a>

            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Layouts</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Page layouts</span><span class="badge badge badge-pill badge-danger float-right mr-2">New</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
                    </li>

                    <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Content Sidebar</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="layout-content-left-sidebar.html" data-i18n="nav.page_layouts.3_columns.left_sidebar">Left sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-left-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Left sticky sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-right-sidebar.html" data-i18n="nav.page_layouts.3_columns.right_sidebar">Right sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-right-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar">Right sticky sidebar</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


        </ul>
    </div>
</div>
