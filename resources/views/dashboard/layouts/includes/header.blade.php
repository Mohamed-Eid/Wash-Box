<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<!-- START::HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Wash Box Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->

    <!-- START:: DATATABLE STYLES -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- END:: DATATABLE STYLES -->

    <!-- START:: SIMPLESELECT STYLE -->
    <link href="{{ asset('assets/css/jquery.simpleselect.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END:: SIMPLESELECT STYLE -->

    <!-- START:: UPLOADFILES STYLE -->
    <link href="{{ asset('assets/plugins/custom/uppy/uppy.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!-- END:: UPLOADFILES STYLE -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <link rel="shortcut icon" href="{{ asset('assets/pics/fav-icon.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap">
</head>
<!-- END::HEAD -->

<!-- START::BODY -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- START:: HEADER MOBILE -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">

        <div class="kt-header-mobile__logo">
            <a href="{{ route('home') }}">
                <h3 class="logo"> Wash <span> Box </span> </h3>
            </a>
        </div>

        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
        </div>

    </div>
    <!-- END:: HEADER MOBILE -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- START:: ASIDE -->
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
                id="kt_aside">

                <!-- START:: ASIDE -->
                <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                    <div class="kt-aside__brand-logo">
                        <a href="{{ route('home') }}" style="color: #fff;">
                            <h3 class="logo"> Wash <span> Box </span> </h3>
                        </a>
                    </div>
                    <div class="kt-aside__brand-tools">
                        <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
                    </div>
                </div>
                <!-- END:: ASIDE -->

                <!-- SART:: ASIDE MENU -->
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
                        data-ktmenu-dropdown-timeout="500">
                        <ul class="kt-menu__nav ">

                            <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true">
                                <a href="{{ route('home') }}" class="kt-menu__link ">
                                    <i class="kt-menu__link-icon la la-home la-2x"></i>
                                    <span class="kt-menu__link-text">الرئيسية</span>
                                </a>
                            </li>

                            <li class="kt-menu__item" aria-haspopup="false">
                                <a href="{{ route('users.index') }}" class="kt-menu__link ">
                                    <i class="kt-menu__link-icon la la-user la-2x" style="font-size: 20px"></i>
                                    <span class="kt-menu__link-text">إدارة المستخدمين</span>
                                </a>
                            </li>
                            
                            <li class="kt-menu__item" aria-haspopup="false">
                                <a href="{{ route('projects.index') }}" class="kt-menu__link ">
                                    <i class="kt-menu__link-icon la la-user la-2x" style="font-size: 20px"></i>
                                    <span class="kt-menu__link-text">إدارة المشاريع</span>
                                </a>
                            </li>
                            
                            <li class="kt-menu__item" aria-haspopup="false">
                                <a href="{{ route('packages.index') }}" class="kt-menu__link ">
                                    <i class="kt-menu__link-icon la la-user la-2x" style="font-size: 20px"></i>
                                    <span class="kt-menu__link-text">إدارة الباقات والعروض</span>
                                </a>
                            </li>
                            
                            <li class="kt-menu__item" aria-haspopup="false">
                                <a href="{{ route('services.index') }}" class="kt-menu__link ">
                                    <i class="kt-menu__link-icon la la-user la-2x" style="font-size: 20px"></i>
                                    <span class="kt-menu__link-text">قائمة الاسعار</span>
                                </a>
                            </li>
                            
                            <li class="kt-menu__item" aria-haspopup="false">
                                <a href="{{ route('drivers.index') }}" class="kt-menu__link ">
                                    <i class="kt-menu__link-icon la la-user la-2x" style="font-size: 20px"></i>
                                    <span class="kt-menu__link-text">إدارة السائقين</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
                <!-- END:: ASIDE MENU -->

            </div>
            <!-- END:: ASIDE -->

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- START:: HEADER -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                    <!-- START:: HEADER TOPBAR -->
                    <div class="kt-header__topbar">

                        <!--START:: SEARCH -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
                            id="kt_quick_search_toggle">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-icon">
                                    <i class="flaticon2-search-1"></i>
                                </span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                                    id="kt_quick_search_dropdown">
                                    <form method="get" class="kt-quick-search__form">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="flaticon2-search-1"></i></span></div>
                                            <input type="text" class="form-control kt-quick-search__input"
                                                placeholder="Search...">
                                            <div class="input-group-append"><span class="input-group-text"><i
                                                        class="la la-close kt-quick-search__close"></i></span></div>
                                        </div>
                                    </form>
                                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325"
                                        data-mobile-height="200">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END:: SEARCH -->



                        <!--START:: USER BAR -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user">
                                    <span class="kt-header__topbar-username kt-hidden-mobile">{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                                <!--START: HEAD -->
                                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                    style="background-image: url(assets/media/bg/bg-8.jpg)">
                                    <div class="kt-user-card__avatar">
                                    </div>
                                    <div class="kt-user-card__name">
                                        {{ auth()->user()->name }}
                                    </div>
                                </div>
                                <!--END: HEAD -->

                                <!--START: NAVIGATION -->
                                <div class="kt-notification">
                                    <a href="userProfile.php" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                الصفحة الشخصية
                                            </div>
                                        </div>
                                    </a>

                                    <a href="edit-profile.php" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon-cogwheel-1 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                تعديل الصفحة الشخصية
                                            </div>
                                        </div>
                                    </a>


                                    <div class="kt-notification__custom kt-space-between">
                                        <a href="custom/user/login-v2.html" target="_blank"
                                            class="btn btn-label btn-label-brand btn-sm btn-bold"> تسجيل خروج </a>
                                    </div>
                                </div>
                                <!--END: NAVIGATION -->

                            </div>
                        </div>
                        <!--END:: USER BAR -->

                    </div>
                    <!-- END:: HEADER TOPBAR -->

                </div>
                <!-- END:: HEADER -->

                <!-- START:: SUBHEADER -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content"
                    style="flex: 0 0 auto">

                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                        <div class="kt-container  kt-container--fluid ">

                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">
                                    <a href="{{ route('home') }}"> الرئيسية </a>
                                </h3>
                                <span class="kt-subheader__separato"></span>
                                <div class="kt-subheader__breadcrumbs">
                                    <a href="#" class="kt-subheader__breadcrumbs-home"><i
                                            class="flaticon2-shelter"></i></a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link"> الصفحة الحالية </a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- END:: SUBHEADER -->
