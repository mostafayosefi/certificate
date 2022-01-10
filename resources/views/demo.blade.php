<!DOCTYPE html>
<!--
Template نام: مترونیک - بوت استرپ 4  جی اس, React, آنگولار 9 & Vueجی اس Admin داشبورد تم
Author: Keenthemes
 طرح: http://www.keenthemes.com/
مخاطب: support@keenthemes.com
دنبال کردن: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
خرید: https://www.rtl-theme.com/metronic-admin-html-template/
Renew حمایت کردن: https://www.rtl-theme.com/metronic-admin-html-template/
مجوز: شما must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->

<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css?v=7.0.6') }}"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->


    <!--begin::Global تم Styles(used by all pages)-->
    <link href="{{ asset('metronic/assets/plugins/global/plugins.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/css/style.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <!--end::Global تم Styles-->

    <!--begin::چیدمان تم ها(used by all pages)-->

    <link href="{{ asset('metronic/assets/css/themes/layout/header/base/light.rtl.css?v=7.0.6') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/css/themes/layout/header/menu/light.rtl.css?v=7.0.6') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/css/themes/layout/brand/dark.rtl.css?v=7.0.6') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/css/themes/layout/aside/dark.rtl.css?v=7.0.6') }}" rel="stylesheet"
        type="text/css" />
    <!--end::چیدمان تم ها-->

    <link rel="shortcut icon" href="{{ asset('metronic/assets/media/logos/favicon.ico') }}" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed ">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="{{ asset('metronic/assets/media/logos/logo-light.png') }}" />
        </a>
        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->

            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->

            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/User.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span> </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page"> 
            <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto " id="kt_brand">
                    <!--begin::Logo-->
                    <a href="index.html" class="brand-logo">
                        <img alt="Logo" src="{{ asset('metronic/assets/media/logos/logo-light.png') }}" />
                    </a>
                    <!--end::Logo-->

                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span> </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->

                <!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

                    <!--begin::Menu Container-->
                    <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1"
                        data-menu-dropdown-timeout="500">
                        <!--begin::Menu Nav-->
                        <ul class="menu-nav ">
                            <li class="menu-item  menu-item-active" aria-haspopup="true"><a href="index.html"
                                    class="menu-link "><span class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/desgin/Layers.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <path
                                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">داشبورد</span></a></li>
                            <li class="menu-section ">
                                <h4 class="menu-text">سفارشی</h4>
                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/layout/layout-4-blocks.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                <path
                                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">اپلیکیشن ها</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">اپلیکیشن
                                                    ها</span></span></li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">کاربران</span><span
                                                    class="menu-label"><span
                                                        class="label label-rounded label-primary">6</span></span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/user/list-default.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - پیش فرض</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/user/list-datatable.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - قابل استفاده</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/user/list-columns-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - ستون 1</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/user/list-columns-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - ستون 2</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/user/add-user.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">افزودن کاربر</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/user/edit-user.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویرایش کاربر</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">پروفایل</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                                        data-menu-toggle="hover"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پروفایل 1</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div class="menu-submenu "><i class="menu-arrow"></i>
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/profile/profile-1/overview.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">بررسی</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/profile/profile-1/personal-information.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">اطلاعات
                                                                            شخصی</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/profile/profile-1/account-information.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">اطلاعات
                                                                            حساب</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/profile/profile-1/change-password.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">تغییر رمز
                                                                            عبور</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/profile/profile-1/email-settings.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">پست الکترونیک
                                                                            تنظیمات</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/profile/profile-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پروفایل 2</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/profile/profile-3.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پروفایل 3</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/profile/profile-4.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پروفایل 4</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">مخاطب</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/contacts/list-columns.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - ستون ها</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/contacts/list-datatable.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - قابل استفاده</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/contacts/view-contact.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">مشاهده مخاطب</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/contacts/add-contact.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">افزودن مخاطب</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/contacts/edit-contact.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویرایش مخاطب</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">پروژه ها</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/projects/list-columns-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - ستون 1</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/projects/list-columns-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - ستون 2</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/projects/list-columns-3.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - ستون ها 3</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/projects/list-columns-4.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - ستون ها 4</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/projects/list-datatable.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لیست - قابل استفاده</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/projects/view-project.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">مشاهده پروژه</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/projects/add-project.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">افزودن پروژه</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/projects/edit-project.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویرایش پروژه</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">مرکز پشتیبانی</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/support-center/home-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خانه 1</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/support-center/home-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خانه 2</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/support-center/faq-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">سؤالات متداول 1</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/support-center/faq-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">سؤالات متداول 2</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/support-center/faq-3.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">سؤالات متداول 3</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/support-center/feedback.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">بازخورد</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/support-center/license.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">مجوز</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">چت</span><i class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/chat/private.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خصوصی</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/chat/group.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">گروه</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/chat/popup.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پاپ آپ</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">انجام دادن</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/todo/tasks.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">وظایف</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/todo/docs.html" class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">اسناد</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/todo/files.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پرونده ها</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">تحصیلات</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                                        data-menu-toggle="hover"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">مدرسه</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div class="menu-submenu "><i class="menu-arrow"></i>
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/school/dashboard.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">داشبورد</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/school/statistics.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">آمار</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/school/calendar.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">تقویم</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/school/library.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">کتابخانه</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/school/teachers.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">معلمان</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/school/students.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">دانش
                                                                            آموزان</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                                        data-menu-toggle="hover"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">دانشجو</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div class="menu-submenu "><i class="menu-arrow"></i>
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/student/dashboard.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">داشبورد</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/student/profile.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">پروفایل</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/student/calendar.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">تقویم</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/apps/education/student/classmates.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">کلاس های
                                                                            من</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/apps/education/class/dashboard.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">کلاس</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="custom/apps/inbox.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-line"><span></span></i><span
                                                    class="menu-text">صندوق ورودی</span><span
                                                    class="menu-label"><span
                                                        class="label label-danger label-inline">جدید</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
                                                <path
                                                    d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">صفحات</span><i class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span
                                                    class="menu-text">صفحات</span></span></li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">لاگین</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/login/login-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لاگین 1</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/login/login-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لاگین 2</span></a></li>
                                                    <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                                        data-menu-toggle="hover"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لاگین 3</span><span
                                                                class="menu-label"><span
                                                                    class="label label-inline label-info">ویزارد</span></span><i
                                                                class="menu-arrow"></i></a>
                                                        <div class="menu-submenu "><i class="menu-arrow"></i>
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-3/signup.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">ثبت نام</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-3/signin.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">ورود</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-3/forgot.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">رمز عبور را فراموش
                                                                            کرده اید</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                                        data-menu-toggle="hover"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">لاگین 4</span><span
                                                                class="menu-label"><span
                                                                    class="label label-inline label-info">ویزارد</span></span><i
                                                                class="menu-arrow"></i></a>
                                                        <div class="menu-submenu "><i class="menu-arrow"></i>
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-4/signup.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">ثبت نام</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-4/signin.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">ورود</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/login-4/forgot.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">رمز عبور را فراموش
                                                                            کرده اید</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                                        data-menu-toggle="hover"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">کلاسیک</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div class="menu-submenu "><i class="menu-arrow"></i>
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-1.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">لاگین 1</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-2.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">لاگین 2</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-3.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">لاگین 3</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-4.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">لاگین 4</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-5.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">لاگین 5</span></a>
                                                                </li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="custom/pages/login/classic/login-6.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                            class="menu-text">لاگین 6</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ویزارد</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/wizard/wizard-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویزارد 1</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/wizard/wizard-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویزارد 2</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/wizard/wizard-3.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویزارد 3</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/wizard/wizard-4.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویزارد 4</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/wizard/wizard-5.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویزارد 5</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/wizard/wizard-6.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویزارد 6</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">جداول قیمت گذاری</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/pricing/pricing-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جداول قیمت گذاری 1</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/pricing/pricing-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جداول قیمت گذاری 2</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/pricing/pricing-3.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جداول قیمت گذاری 3</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/pricing/pricing-4.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جداول قیمت گذاری 4</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">فاکتور</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/invoices/invoice-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">فاکتور 1</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/invoices/invoice-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">فاکتور 2</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">خطا</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/error/error-1.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خطا 1</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/error/error-2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خطا 2</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/error/error-3.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خطا 3</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/error/error-4.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خطا 4</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/error/error-5.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خطا 5</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="custom/pages/error/error-6.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">خطا 6</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-section ">
                                <h4 class="menu-text">چیدمان</h4>
                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/desgin/Bucket.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) " />
                                                <path
                                                    d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">تم ها</span><i class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">تم
                                                    ها</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/themes/aside-light.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ساید بار روشن</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/themes/header-dark.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">هدر تیره</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/کد/Compiling.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">زیر هدرها</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">زیر
                                                    هدرها</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/subheader/toolbar.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">نوار ابزار</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/subheader/actions.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">دکمه های عملیاتی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/subheader/tabbed.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">تب های ناوبری</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/subheader/classic.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کلاسیک</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/subheader/none.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">هیچ </span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                    fill="#000000" />
                                                <path
                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">عمومی</span><i class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span
                                                    class="menu-text">عمومی</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/general/fluid-content.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">محتوای سیال</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/general/minimized-aside.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کمینه کردن سایدبار</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/general/no-aside.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">بدون ساید بار</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/general/empty-page.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">صفحه خالی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/general/fixed-footer.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">فوتر ثابت</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="layout/general/no-header-menu.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">بدون هدر منو</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item " aria-haspopup="true"><a target="_blank"
                                    href="https://preview.keenthemes.com/metronic/preview/demo1/builder.html"
                                    class="menu-link "><span class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                    fill="#000000" />
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                    x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">سازنده</span></a></li>
                            <li class="menu-section ">
                                <h4 class="menu-text">کراد</h4>
                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/desgin/PenAndRuller.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">فرم ها</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">فرم
                                                    ها</span></span></li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کنترل های فرم</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/controls/base.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">اینپوت های پایه</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/controls/input-group.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">اینپوت گروپ</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/controls/checkbox.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">چک باکس</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/controls/radio.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">رادیو</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/controls/switch.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">سوئیچ</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/controls/option.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">گزینه های مگا</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ابزارکهای فرم</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-datetimepicker.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">انتخابگر تاریخ و زمان</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-datepicker.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">انتخابگر تاریخ</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-timepicker.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">انتخاب گر زمان</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-daterangepicker.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">انتخابگر رنج تاریخ</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/tagify.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">مشخص کردن</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-touchspin.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">تاچ اسپین</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-maxlength.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">بیشترین طول</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-switch.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">سوئیچ</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-multipleselectsplitter.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جداکننده چندگانه</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/bootstrap-select.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">انتخابگر بوت استرپ</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/select2.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">انتخابگر2</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/typeahead.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">تایپ هد</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/nouislider.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">noUiSlider</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/form-repeater.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">تکرار فرم</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/ion-range-slider.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">اسلایدر Ion</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/input-mask.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">اینپوت ماسک</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/autosize.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">اندازه اتوماتیک</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/clipboard.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">کلیپ بورد</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/widgets/recaptcha.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">گوگل ریکپچا</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ویرایشگر متن</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/editors/tinymce.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">TinyMCE</span></a></li>
                                                    <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                                        data-menu-toggle="hover"><a href="javascript:;"
                                                            class="menu-link menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">CKEditor</span><i
                                                                class="menu-arrow"></i></a>
                                                        <div class="menu-submenu "><i class="menu-arrow"></i>
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="crud/forms/editors/ckeditor-classic.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">CKEditor
                                                                            کلاسیک</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="crud/forms/editors/ckeditor-inline.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">CKEditor
                                                                            Inline</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="crud/forms/editors/ckeditor-balloon.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">بالون
                                                                            CKEditor</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="crud/forms/editors/ckeditor-balloon-block.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">بالون بلاک
                                                                            CKEditor</span></a></li>
                                                                <li class="menu-item " aria-haspopup="true"><a
                                                                        href="crud/forms/editors/ckeditor-document.html"
                                                                        class="menu-link "><i
                                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                            class="menu-text">سند
                                                                            CKEditor</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/editors/quill.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویرایشگر متن Quill</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/editors/summernote.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">WYSIWYG Summer</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/editors/bootstrap-markdown.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ویرایشگر مارک دان</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">چیدمان فرم ها</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/layouts/default-forms.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">فرم های پیش فرض</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/layouts/multi-column-forms.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">فرم های چند ستونی</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/layouts/action-bars.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">نوار ابزار پایه</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/layouts/sticky-action-bar.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">نوار ابزار چسبنده</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">اعتبار سنجی فرم</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/validation/states.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text"> اعتبارسنجی</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/validation/form-controls.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">کنترل های فرم</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/forms/validation/form-widgets.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ابزارکهای فرم</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/layout/layout-left-panel-2.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z"
                                                    fill="#000000" />
                                                <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16"
                                                    rx="1" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">جدول داده ها</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">جدول داده
                                                    ها</span></span></li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">پایه</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/base/data-local.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">داده محلی</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/base/data-json.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">داده های جیسون</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/base/data-ajax.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">داده های آژاکس</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/base/html-table.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جدول جی اس</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/base/local-sort.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">مرتب سازی محلی</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/base/translation.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ترجمه</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">پیشرفته</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/advanced/record-selection.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">انتخاب رکوردر</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/advanced/row-details.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جزئیات سطر</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/advanced/modal.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">نمونه مودال</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/advanced/column-rendering.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">رندرینگ ستون</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/advanced/column-width.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">عرض ستون</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/advanced/vertical.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پیمایش عمودی</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">جدول داده های کوچک</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/child/data-local.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">داده محلی</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/child/data-ajax.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">داده های از راه دور</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">API</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/api/methods.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">روشهای API</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/ktdatatable/api/events.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">رویدادها</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/چیدمان/چیدمان-horizontal.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6"
                                                    rx="1.5" />
                                                <rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">جدول داده ها</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">جدول داده
                                                    ها</span></span></li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">پایه ای</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/basic/basic.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جداول پایه ای</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/basic/scrollable.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جداول قابل پیمایش</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/basic/headers.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">هدرهای پیچیده</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/basic/paginations.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">گزینه های صفحه بندی</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">پیشرفته</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/advanced/column-rendering.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">رندرینگ ستون</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/advanced/multiple-controls.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">کنترل های چندگانه</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/advanced/column-visibility.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">قابلیت مشاهده ستون</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/advanced/row-callback.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">کال بک سطر</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/advanced/row-grouping.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">سطرهای گروه بندی</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/advanced/footer-callback.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">کال بک فوتر</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">منابع اطلاعات</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/data-sources/html.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text"> جی اس</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/data-sources/javascript.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جاوا اسکریپت</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/data-sources/ajax-client-side.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">اژکس کلاینت ساید</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/data-sources/ajax-server-side.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">اژکس سرور ساید</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">جستجو گزینه ها</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/search-options/column-search.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ستون جستجو</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/search-options/advanced-search.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پیشرفته جستجو</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">برنامه های افزودنی</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/extensions/buttons.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">دکمه ها</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/extensions/colreorder.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ستون رکوردر</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/extensions/keytable.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">جدول کلید</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/extensions/responsive.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ریسپانسیو</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/extensions/rowgroup.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">گروبندی سطر</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/extensions/rowreorder.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">سطر رکوردر</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/extensions/scroller.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">پیمایشگر</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="crud/datatables/extensions/select.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">انتخاب</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/پرونده ها/بارگذاری.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14"
                                                    rx="1" />
                                                <path
                                                    d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">فایل بارگذاری</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="crud/file-upload/image-input.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">اینپوت عکس</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="crud/file-upload/dropzonejs.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">دراپ زون</span><span
                                                    class="menu-label"><span
                                                        class="label label-danger label-inline">جدید</span></span></a>
                                        </li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="crud/file-upload/uppy.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">یوپی</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-section ">
                                <h4 class="menu-text">امکانات</h4>
                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                    fill="#000000" />
                                                <path
                                                    d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">بوت استرپ</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">بوت
                                                    استرپ</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/typography.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">تایپوگرافی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/buttons.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">دکمه ها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/button-group.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">دکمه گروه</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/dropdown.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">دراپ دان</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/navs.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ناوبری ها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/tables.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">جداول</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/progress.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">پیشرفت</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/modal.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">مودال</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/alerts.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">هشدارها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/popover.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">پاپ آور</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/bootstrap/tooltip.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">تولتیپ</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/پرونده ها/Pictures1.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
                                                <polygon fill="#000000" points="11 19 15 14 19 19" />
                                                <path
                                                    d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">سفارشی</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span
                                                    class="menu-text">سفارشی</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/utilities.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ابزارها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/label.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">برچسب ها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/pulse.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ضربان</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/line-tabs.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">تب های خطی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/advance-navs.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ناوبری های پیشرفته</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/timeline.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">تایم لاین</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/pagination.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">صفحه بندی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/symbol.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">سیمبل</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/overlay.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">اورلی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/spinners.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">اسپینرها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/iconbox.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">جعبه آیکون</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/callout.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کال اوت</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/ribbons.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ریبون</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/custom/accordions.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">آکاردئونها</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/layout/layout-arrange.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z"
                                                    fill="#000000" />
                                                <path
                                                    d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">کارت</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span
                                                    class="menu-text">کارت</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/cards/general.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کارت عمومی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/cards/stacked.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کارت متراکم</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/cards/tabbed.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کارت تب بندی شده</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/cards/draggable.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کارت با قابلیت درگ</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/cards/tools.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ابزارهای کارت</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/cards/sticky.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کارت چسبنده</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/cards/stretched.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کارت کشیده</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Diagnostics.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="18"
                                                    rx="2" />
                                                <path
                                                    d="M9.9486833,13.3162278 C9.81256925,13.7245699 9.43043041,14 9,14 L5,14 C4.44771525,14 4,13.5522847 4,13 C4,12.4477153 4.44771525,12 5,12 L8.27924078,12 L10.0513167,6.68377223 C10.367686,5.73466443 11.7274983,5.78688777 11.9701425,6.75746437 L13.8145063,14.1349195 L14.6055728,12.5527864 C14.7749648,12.2140024 15.1212279,12 15.5,12 L19,12 C19.5522847,12 20,12.4477153 20,13 C20,13.5522847 19.5522847,14 19,14 L16.118034,14 L14.3944272,17.4472136 C13.9792313,18.2776054 12.7550291,18.143222 12.5298575,17.2425356 L10.8627389,10.5740611 L9.9486833,13.3162278 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <circle fill="#000000" opacity="0.3" cx="19" cy="6" r="1" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">ابزارک ها</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">ابزارک
                                                    ها</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/lists.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">لیست ها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/stats.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">آمار</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/charts.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">نمودار</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/mixed.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ترکیبی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/tiles.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کاشی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/engage.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">مشغول کردن</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/base-tables.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">جداول پایه</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/advance-tables.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">پیشرفت جداول</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/forms.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">فرم ها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/widgets/nav-panels.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ناوبری پنل</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/Attachment2.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                                    fill="#000000" opacity="0.3"
                                                    transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) " />
                                                <path
                                                    d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                                    fill="#000000"
                                                    transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) " />
                                                <path
                                                    d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                                    fill="#000000" opacity="0.3"
                                                    transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) " />
                                                <path
                                                    d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                                    fill="#000000" opacity="0.3"
                                                    transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) " />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">آیکون</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/icons/svg.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">SVG آیکون</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/icons/custom-icons.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">سفارشی آیکون</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/icons/flaticon.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Flaticon</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/icons/fontawesome5.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Fontawesome 5</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/icons/lineawesome.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Fontawesome</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/icons/socicons.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Socicons</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/design/select.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">تقویم</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span
                                                    class="menu-text">تقویم</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/calendar/basic.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">تقویه پایه</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/calendar/list-view.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">نمایش لیست ها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/calendar/google.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">گوگل تقویم</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/calendar/external-events.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">اکسترنال رویدادها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/calendar/background-events.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">بک گراند رویدادها</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16"
                                                    rx="1.5" />
                                                <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">نمودار</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span
                                                    class="menu-text">نمودار</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/charts/apexcharts.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">ایپکس چارت</span></a></li>
                                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"
                                            data-menu-toggle="hover"><a href="javascript:;"
                                                class="menu-link menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">چارت am</span><i
                                                    class="menu-arrow"></i></a>
                                            <div class="menu-submenu "><i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="features/charts/amcharts/charts.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">نمودار چارت am</span></a></li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="features/charts/amcharts/stock-charts.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">نمودار استوک چارت am</span></a>
                                                    </li>
                                                    <li class="menu-item " aria-haspopup="true"><a
                                                            href="features/charts/amcharts/maps.html"
                                                            class="menu-link "><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">نمودار مپ am</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/charts/flotcharts.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Flot نمودار</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/charts/google-charts.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">گوگل نمودار</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/home/Book-open.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z"
                                                    fill="#000000" />
                                                <path
                                                    d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">نقشه ها</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span class="menu-text">نقشه
                                                    ها</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/maps/google-maps.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">گوگل نقشه ها</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/maps/leaflet.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Leaflet</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/maps/jqvmap.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">JQVMap</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                        class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/home/Mirror.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <path
                                                    d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span><span class="menu-text">متفرقه</span><i
                                        class="menu-arrow"></i></a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item  menu-item-parent" aria-haspopup="true"><span
                                                class="menu-link"><span
                                                    class="menu-text">متفرقه</span></span></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/kanban-board.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کانبان برد</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/sticky-panels.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">پنل چسبنده</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/blockui.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">رابط کاربری بلاک</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/perfect-scrollbar.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">اسکرول بار</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/treeview.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">نمای درختی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/bootstrap-notify.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">بوت استرپ نوتیفی</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/toastr.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">توئستر</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/sweetalert2.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">سوئیت آلارت</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/dual-listbox.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">لیست دوگانه</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/session-timeout.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">تایم اوت سشن</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/idle-timer.html"
                                                class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">تایمر</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a
                                                href="features/miscellaneous/cropper.html" class="menu-link "><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">کراپر</span></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!--end::Menu Nav-->
                    </div>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header  header-fixed ">
                    <!--begin::Container-->
                    <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--begin::Header Menu-->
                            <div id="kt_header_menu"
                                class="header-menu header-menu-mobile  header-menu-layout-default ">
                                <!--begin::Header Nav-->
                                <ul class="menu-nav ">
                                    <li class="menu-item  menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active"
                                        data-menu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                            class="menu-link menu-toggle"><span
                                                class="menu-text">صفحات</span><i
                                                class="menu-arrow"></i></a>
                                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                            <ul class="menu-subnav">
                                                <li class="menu-item  menu-item-active " aria-haspopup="true"><a
                                                        href="index.html" class="menu-link "><span
                                                            class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">اکانت من</span></a></li>
                                                <li class="menu-item " aria-haspopup="true"><a href="javascript:;"
                                                        class="menu-link "><span class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/کد/Compiling.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <path
                                                                        d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">مدیریت وظایف</span><span
                                                            class="menu-label"><span
                                                                class="label label-success label-rounded">2</span></span></a>
                                                </li>
                                                <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                    aria-haspopup="true"><a href="javascript:;"
                                                        class="menu-link menu-toggle"><span
                                                            class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/کد/CMD.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">مدیریت تیم</span><i
                                                            class="menu-arrow"></i></a>
                                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                        <ul class="menu-subnav">
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">افزودن عضو
                                                                        تیم</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">ویرایش عضو</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">حذف عضو</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">گزارش عضو</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">وظایف
                                                                        اختصاصی</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">عضو تیم</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                    aria-haspopup="true"><a href="#"
                                                        class="menu-link menu-toggle"><span
                                                            class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Mail-box.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L4,21 C2.8954305,21 2,20.1045695 2,19 L2,15 L6.27924078,15 L6.82339262,16.6324555 C7.09562072,17.4491398 7.8598984,18 8.72075922,18 L15.381966,18 C16.1395101,18 16.8320364,17.5719952 17.1708204,16.8944272 L18.118034,15 L22,15 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M2.5625,13 L5.92654389,7.01947752 C6.2807805,6.38972356 6.94714834,6 7.66969497,6 L16.330305,6 C17.0528517,6 17.7192195,6.38972356 18.0734561,7.01947752 L21.4375,13 L18.118034,13 C17.3604899,13 16.6679636,13.4280048 16.3291796,14.1055728 L15.381966,16 L8.72075922,16 L8.17660738,14.3675445 C7.90437928,13.5508602 7.1401016,13 6.27924078,13 L2.5625,13 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">مدیریت پروژه ها</span><i
                                                            class="menu-arrow"></i></a>
                                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                        <ul class="menu-subnav">
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">آخرین پروژه
                                                                        ها</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">پروژه های در دست
                                                                        اقدام</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">پروژه های
                                                                        فوری</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">پروژه های کامل
                                                                        شده</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">پروژه های تمام
                                                                        شده</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu-item " aria-haspopup="true"><a href="javascript:;"
                                                        class="menu-link "><span class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/هرزنامه ها.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z M10.5857864,14 L9.17157288,15.4142136 C8.78104858,15.8047379 8.78104858,16.4379028 9.17157288,16.8284271 C9.56209717,17.2189514 10.1952621,17.2189514 10.5857864,16.8284271 L12,15.4142136 L13.4142136,16.8284271 C13.8047379,17.2189514 14.4379028,17.2189514 14.8284271,16.8284271 C15.2189514,16.4379028 15.2189514,15.8047379 14.8284271,15.4142136 L13.4142136,14 L14.8284271,12.5857864 C15.2189514,12.1952621 15.2189514,11.5620972 14.8284271,11.1715729 C14.4379028,10.7810486 13.8047379,10.7810486 13.4142136,11.1715729 L12,12.5857864 L10.5857864,11.1715729 C10.1952621,10.7810486 9.56209717,10.7810486 9.17157288,11.1715729 C8.78104858,11.5620972 8.78104858,12.1952621 9.17157288,12.5857864 L10.5857864,14 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">ایجاد پروژه
                                                            جدید</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item  menu-item-submenu" data-menu-toggle="click"
                                        aria-haspopup="true"><a href="javascript:;"
                                            class="menu-link menu-toggle"><span
                                                class="menu-text">امکانات</span><i
                                                class="menu-arrow"></i></a>
                                        <div class="menu-submenu  menu-submenu-fixed menu-submenu-left"
                                            style="width:1000px">
                                            <div class="menu-subnav">
                                                <ul class="menu-content">
                                                    <li class="menu-item ">
                                                        <h3 class="menu-heading menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">گزارش کارها</span><i
                                                                class="menu-arrow"></i></h3>
                                                        <ul class="menu-inner">
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span><span class="menu-text">آخرین
                                                                        کارهای</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Crown.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <path
                                                                                    d="M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                                <path
                                                                                    d="M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z"
                                                                                    fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span><span class="menu-text">کارهای در حال
                                                                        انجام</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/کد/Lock-overturning.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                                <path
                                                                                    d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z"
                                                                                    fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span><span class="menu-text">کارهای
                                                                        فوری</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Thumbtack.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z"
                                                                                    fill="#000000" />
                                                                                <polygon fill="#000000" opacity="0.3"
                                                                                    transform="translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747) "
                                                                                    points="5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span><span class="menu-text">کارهای انجام
                                                                        شده</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Outgoing-box.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                                <path
                                                                                    d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) " />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span><span class="menu-text">کارها انجام
                                                                        نشد</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item ">
                                                        <h3 class="menu-heading menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">حاشیه های سود</span><i
                                                                class="menu-arrow"></i></h3>
                                                        <ul class="menu-inner">
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">سود کل</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">سود ناخالص</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">سود خالص</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">گزارشات
                                                                        سالانه</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">سود سه ماهه</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">سود ماهانه</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item ">
                                                        <h3 class="menu-heading menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">مدیریت نیروی انسانی</span><i
                                                                class="menu-arrow"></i></h3>
                                                        <ul class="menu-inner">
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">مدیریت ارشد</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">مدیریت پروژه</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">واحد توسعه</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">خدمات مشتری</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">فروش و
                                                                        بازاریابی</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">مدیران</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item ">
                                                        <h3 class="menu-heading menu-toggle"><i
                                                                class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                class="menu-text">ابزارها</span><i
                                                                class="menu-arrow"></i></h3>
                                                        <ul class="menu-inner">
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="menu-text">آنالیز
                                                                        گزارشات</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="menu-text">مدیریت مشتری</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="menu-text">رشد عملیاتی</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="menu-text">حضور در شبکه های
                                                                        اجتماعی</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="menu-text">فایل های و پوشه
                                                                        ها</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><span
                                                                        class="menu-text">حسابرسی و گزارش
                                                                        ها</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="click"
                                        aria-haspopup="true"><a href="javascript:;"
                                            class="menu-link menu-toggle"><span class="menu-text">اپلیکیشن
                                                ها</span><i class="menu-arrow"></i></a>
                                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                            <ul class="menu-subnav">
                                                <li class="menu-item " aria-haspopup="true"><a href="javascript:;"
                                                        class="menu-link "><span class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Safe-chat.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <path
                                                                        d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">گزارش نویسی</span></a>
                                                </li>
                                                <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                    aria-haspopup="true"><a href="javascript:;"
                                                        class="menu-link menu-toggle"><span
                                                            class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/send.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M3,13.5 L19,12 L3,10.5 L3,3.7732928 C3,3.70255344 3.01501031,3.63261921 3.04403925,3.56811047 C3.15735832,3.3162903 3.45336217,3.20401298 3.70518234,3.31733205 L21.9867539,11.5440392 C22.098181,11.5941815 22.1873901,11.6833905 22.2375323,11.7948177 C22.3508514,12.0466378 22.2385741,12.3426417 21.9867539,12.4559608 L3.70518234,20.6826679 C3.64067359,20.7116969 3.57073936,20.7267072 3.5,20.7267072 C3.22385763,20.7267072 3,20.5028496 3,20.2267072 L3,13.5 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">حضور اجتماعی</span><i
                                                            class="menu-arrow"></i></a>
                                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                        <ul class="menu-subnav">
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">کاربران دریافت
                                                                        کننده</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">رتبه سئو</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">کاربران انتخاب
                                                                        شده</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">بخش های
                                                                        بازار</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">میزان رشد</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu-item " aria-haspopup="true"><a href="javascript:;"
                                                        class="menu-link "><span class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Mail-at.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">فروش و
                                                            بازاریابی</span></a></li>
                                                <li class="menu-item " aria-haspopup="true"><a href="javascript:;"
                                                        class="menu-link "><span class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/chat-locked.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <polygon fill="#000000" opacity="0.3"
                                                                        points="5 15 3 21.5 9.5 19.5" />
                                                                    <path
                                                                        d="M16,10 L16,9.5 C16,8.11928813 14.8807119,7 13.5,7 C12.1192881,7 11,8.11928813 11,9.5 L11,10 C10.4477153,10 10,10.4477153 10,11 L10,14 C10,14.5522847 10.4477153,15 11,15 L16,15 C16.5522847,15 17,14.5522847 17,14 L17,11 C17,10.4477153 16.5522847,10 16,10 Z M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M13.5,8 L13.5,8 C14.3284271,8 15,8.67157288 15,9.5 L15,10 L12,10 L12,9.5 C12,8.67157288 12.6715729,8 13.5,8 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">کمپین ها</span><span
                                                            class="menu-label"><span
                                                                class="label label-success label-rounded">3</span></span></a>
                                                </li>
                                                <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                    aria-haspopup="true"><a href="javascript:;"
                                                        class="menu-link menu-toggle"><span
                                                            class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/group-chat.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span><span class="menu-text">مرکز توسعه</span><i
                                                            class="menu-arrow"></i></a>
                                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                        <ul class="menu-subnav">
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">ادغام شعبه</span><span
                                                                        class="menu-label"><span
                                                                            class="label label-danger label-rounded">3</span></span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">کنترل نسخه</span></a>
                                                            </li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">مدیر پایگاه
                                                                        داده</span></a></li>
                                                            <li class="menu-item " aria-haspopup="true"><a
                                                                    href="javascript:;" class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-line"><span></span></i><span
                                                                        class="menu-text">سیستم
                                                                        تنظیمات</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <!--end::Header Nav-->
                            </div>
                            <!--end::Header Menu-->
                        </div>
                        <!--end::Header Menu Wrapper-->

                        <!--begin::Topbar-->
                        <div class="topbar">
                            <!--begin::جستجو-->
                            <div class="dropdown" id="kt_quick_search_toggle">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </div>
                                <!--end::Toggle-->

                                <!--begin::دراپ دان-->
                                <div
                                    class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                    <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                        <!--begin:Form-->
                                        <form method="get" class="quick-search-form">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                    <path
                                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="جستجو..." />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i
                                                            class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Form-->

                                        <!--begin::Scroll-->
                                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325"
                                            data-mobile-height="200">
                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                </div>
                                <!--end::دراپ دان-->
                            </div>
                            <!--end::جستجو-->

                            <!--begin::اعلان ها-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/کد/Compiling.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span> <span class="pulse-ring"></span>
                                    </div>
                                </div>
                                <!--end::Toggle-->

                                <!--begin::دراپ دان-->
                                <div
                                    class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                    <form>
                                        <!--begin::Header-->
                                        <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
                                            style="background-image: url(assets/media/misc/bg-1.jpg)">
                                            <!--begin::Title-->
                                            <h4 class="d-flex flex-center rounded-top">
                                                <span class="text-white">اعلان های کاربر</span>
                                                <span
                                                    class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23
                                                    جدید</span>
                                            </h4>
                                            <!--end::Title-->

                                            <!--begin::تب ها-->
                                            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="tab"
                                                        href="#topbar_notifications_notifications">هشدارها</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                        href="#topbar_notifications_events">رویدادها</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                        href="#topbar_notifications_logs">لاگ ها</a>
                                                </li>
                                            </ul>
                                            <!--end::تب ها-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Content-->
                                        <div class="tab-content">
                                            <!--begin::Tabpane-->
                                            <div class="tab-pane active show p-8"
                                                id="topbar_notifications_notifications" role="tabpanel">
                                                <!--begin::Scroll-->
                                                <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300"
                                                    data-mobile-height="200">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::سیمبل-->
                                                        <div class="symbol symbol-40 symbol-light-primary mr-5">
                                                            <span class="symbol-label">
                                                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                                fill="#000000" />
                                                                            <rect fill="#000000" opacity="0.3"
                                                                                transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                                                x="16.3255682" y="2.94551858" width="3"
                                                                                height="18" rx="1" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span> </span>
                                                        </div>
                                                        <!--end::سیمبل-->

                                                        <!--begin::متن-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#"
                                                                class="text-dark text-hover-primary mb-1 font-size-lg">برنامه
                                                                جالب</a>
                                                            <span class="text-muted">کمپین های بازاریابی</span>
                                                        </div>
                                                        <!--end::متن-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::سیمبل-->
                                                        <div class="symbol symbol-40 symbol-light-warning mr-5">
                                                            <span class="symbol-label">
                                                                <span class="svg-icon svg-icon-lg svg-icon-warning">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                                            <path
                                                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span> </span>
                                                        </div>
                                                        <!--end::سیمبل-->

                                                        <!--begin::متن-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#"
                                                                class="text-dark-75 text-hover-primary mb-1 font-size-lg">پر
                                                                شدن حافظه</a>
                                                            <span class="text-muted">جلسه به روزرسانی وضعیت
                                                                پروژه</span>
                                                        </div>
                                                        <!--end::متن-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::سیمبل-->
                                                        <div class="symbol symbol-40 symbol-light-success mr-5">
                                                            <span class="symbol-label">
                                                                <span class="svg-icon svg-icon-lg svg-icon-success">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/group-chat.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                                fill="#000000" />
                                                                            <path
                                                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span> </span>
                                                        </div>
                                                        <!--end::سیمبل-->

                                                        <!--begin::متن-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#"
                                                                class="text-dark text-hover-primary mb-1 font-size-lg">وضعیت
                                                                سیستم</a>
                                                            <span class="text-muted">استقرار و راه اندازی
                                                                پروژه</span>
                                                        </div>
                                                        <!--end::متن-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::سیمبل-->
                                                        <div class="symbol symbol-40 symbol-light-danger mr-5">
                                                            <span class="symbol-label">
                                                                <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/Attachment2.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                                                                fill="#000000" opacity="0.3"
                                                                                transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) " />
                                                                            <path
                                                                                d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                                                                fill="#000000"
                                                                                transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) " />
                                                                            <path
                                                                                d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                                                                fill="#000000" opacity="0.3"
                                                                                transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) " />
                                                                            <path
                                                                                d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                                                                fill="#000000" opacity="0.3"
                                                                                transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) " />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span> </span>
                                                        </div>
                                                        <!--end::سیمبل-->

                                                        <!--begin::متن-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#"
                                                                class="text-dark text-hover-primary mb-1 font-size-lg">سرویس
                                                                Trilo</a>
                                                            <span class="text-muted">تجزیه و تحلیل </span>
                                                        </div>
                                                        <!--end::متن-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::سیمبل-->
                                                        <div class="symbol symbol-40 symbol-light-info mr-5">
                                                            <span class="symbol-label">
                                                                <span class="svg-icon svg-icon-lg  svg-icon-info">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Shield-user.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                            <path
                                                                                d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                            <path
                                                                                d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span> </span>
                                                        </div>
                                                        <!--end::سیمبل-->

                                                        <!--begin::متن-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#"
                                                                class="text-dark text-hover-primary mb-1 font-size-lg">آنالیز
                                                                سیستم ها</a>
                                                            <span class="text-muted">گزارش نویسی اپلیکیشن</span>
                                                        </div>
                                                        <!--end::متن-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::سیمبل-->
                                                        <div class="symbol symbol-40 symbol-light-danger mr-5">
                                                            <span class="symbol-label">
                                                                <span class="svg-icon svg-icon-lg  svg-icon-danger">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Mail-notification.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                                fill="#000000" />
                                                                            <circle fill="#000000" opacity="0.3"
                                                                                cx="19.5" cy="17.5" r="2.5" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span> </span>
                                                        </div>
                                                        <!--end::سیمبل-->

                                                        <!--begin::متن-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#"
                                                                class="text-dark text-hover-primary mb-1 font-size-lg">بهترین
                                                                بازخوردها</a>
                                                            <span class="text-muted">انالیز و طراحی نرم
                                                                افزار</span>
                                                        </div>
                                                        <!--end::متن-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::سیمبل-->
                                                        <div class="symbol symbol-40 symbol-light-success mr-5">
                                                            <span class="symbol-label">
                                                                <span class="svg-icon svg-icon-lg  svg-icon-success">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/desgin/Bucket.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) " />
                                                                            <path
                                                                                d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span> </span>
                                                        </div>
                                                        <!--end::سیمبل-->

                                                        <!--begin::متن-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#"
                                                                class="text-dark text-hover-primary mb-1 font-size-lg">تناسب
                                                                اندام بروک</a>
                                                            <span class="text-muted">طراحی وب و توسعه</span>
                                                        </div>
                                                        <!--end::متن-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Scroll-->

                                                <!--begin::اکشن-->
                                                <div class="d-flex flex-center pt-7"><a href="#"
                                                        class="btn btn-light-primary font-weight-bold text-center">مشاهده
                                                        همه</a></div>
                                                <!--end::اکشن-->
                                            </div>
                                            <!--end::Tabpane-->

                                            <!--begin::Tabpane-->
                                            <div class="tab-pane" id="topbar_notifications_events"
                                                role="tabpanel">
                                                <!--begin::Nav-->
                                                <div class="navi navi-hover scroll my-4" data-scroll="true"
                                                    data-height="300" data-mobile-height="200">
                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-line-chart text-success"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    گزارش جدید دریافت شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    23 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-paper-plane text-danger"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    گزارش مالی تهیه شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    25 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i
                                                                    class="flaticon2-user flaticon2-line- text-success"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    سفارش جدید دریافت شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    2 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-pin text-primary"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    مشتری جدید ثبت شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    3 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-sms text-danger"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    اپلیکیشن تایید شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    3 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-pie-chart-3 text-warning"></i>
                                                            </div>
                                                            <div class="navinavinavi-text">
                                                                <div class="font-weight-bold">
                                                                    پرونده جدید بارگذاری شد
                                                                </div>
                                                                <div class="text-muted">
                                                                    5 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon-pie-chart-1 text-info"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    بازخورد کاربر جدید دریافت شد
                                                                </div>
                                                                <div class="text-muted">
                                                                    8 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-settings text-success"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    سیستم راه اندازی مجدد با موفقیت انجام شد
                                                                </div>
                                                                <div class="text-muted">
                                                                    12 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i
                                                                    class="flaticon-safe-shield-protection text-primary"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    سفارش جدید درج شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    15 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-notification text-primary"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    جلسه شرکت لغو شد
                                                                </div>
                                                                <div class="text-muted">
                                                                    19 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-fax text-success"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    گزارش جدید دریافت شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    23 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon-download-1 text-danger"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    گزارش مالی تهیه شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    25 ساعت قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon-security text-warning"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    نظر مشتری جدید دریافت شد
                                                                </div>
                                                                <div class="text-muted">
                                                                    2 چند روز قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <a href="#" class="navi-item">
                                                        <div class="navi-link">
                                                            <div class="navi-icon mr-2">
                                                                <i class="flaticon2-analytics-1 text-success"></i>
                                                            </div>
                                                            <div class="navi-text">
                                                                <div class="font-weight-bold">
                                                                    مشتری جدید ثبت شده است
                                                                </div>
                                                                <div class="text-muted">
                                                                    3 چند روز قبل
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Nav-->
                                            </div>
                                            <!--end::Tabpane-->

                                            <!--begin::Tabpane-->
                                            <div class="tab-pane" id="topbar_notifications_logs"
                                                role="tabpanel">
                                                <!--begin::Nav-->
                                                <div class="d-flex flex-center text-center text-muted min-h-200px">
                                                    همه گرفتار شدند!
                                                    <br />
                                                    هیچ اعلان جدیدی وجود ندارد
                                                </div>
                                                <!--end::Nav-->
                                            </div>
                                            <!--end::Tabpane-->
                                        </div>
                                        <!--end::Content-->
                                    </form>
                                </div>
                                <!--end::دراپ دان-->
                            </div>
                            <!--end::اعلان ها-->

                            <!--begin::اقدامات سریع-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                        height="16" rx="1.5" />
                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </div>
                                <!--end::Toggle-->

                                <!--begin::دراپ دان-->
                                <div
                                    class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                    <!--begin:Header-->
                                    <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top"
                                        style="background-image: url(assets/media/misc/bg-1.jpg)">
                                        <h4 class="text-white font-weight-bold">
                                            اقدامات سریع
                                        </h4>
                                        <span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23
                                            وظایف در انتظار</span>
                                    </div>
                                    <!--end:Header-->

                                    <!--begin:Nav-->
                                    <div class="row row-paddingless">
                                        <!--begin:Item-->
                                        <div class="col-6">
                                            <a href="#"
                                                class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
                                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span> <span
                                                    class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">حسابداری</span>
                                                <span class="d-block text-dark-50 font-size-lg">تجارت الکترونیک</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->

                                        <!--begin:Item-->
                                        <div class="col-6">
                                            <a href="#"
                                                class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
                                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Mail-attachment.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span> <span
                                                    class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">مدیریت</span>
                                                <span class="d-block text-dark-50 font-size-lg">کنسول</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->

                                        <!--begin:Item-->
                                        <div class="col-6">
                                            <a href="#"
                                                class="d-block py-10 px-5 text-center bg-hover-light border-right">
                                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span> <span
                                                    class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">پروژه
                                                    ها</span>
                                                <span class="d-block text-dark-50 font-size-lg">کارهای در حال
                                                    انجام</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->

                                        <!--begin:Item-->
                                        <div class="col-6">
                                            <a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
                                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/گروه.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path
                                                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path
                                                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span> <span
                                                    class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">مشتریان</span>
                                                <span class="d-block text-dark-50 font-size-lg">آخرین موارد</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->
                                    </div>
                                    <!--end:Nav-->
                                </div>
                                <!--end::دراپ دان-->
                            </div>
                            <!--end::اقدامات سریع-->

                            <!--begin::Cart-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1"
                                    id="kt_quick_cart_toggle">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </div>
                            <!--end::Cart-->

                            <!--begin::Quick panel-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/layout/layout-4-blocks.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                <path
                                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </div>
                            <!--end::Quick panel-->

                            <!--begin::چت-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-clean btn-lg mr-1" data-toggle="modal"
                                    data-target="#kt_chat_modal">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/group-chat.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                    fill="#000000" />
                                                <path
                                                    d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </div>
                            <!--end::چت-->

                            <!--begin::زبان ها-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                        <img class="h-20px w-20px rounded-sm"
                                            src="{{ asset('metronic/assets/media/svg/flags/226-united-states.svg') }}"
                                            alt="" />
                                    </div>
                                </div>
                                <!--end::Toggle-->

                                <!--begin::دراپ دان-->
                                <div
                                    class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Nav-->
                                    <ul class="navi navi-hover py-4">
                                        <!--begin::Item-->
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="symbol symbol-20 mr-3">
                                                    <img src="{{ asset('metronic/assets/media/svg/flags/226-united-states.svg') }}"
                                                        alt="" />
                                                </span>
                                                <span class="navi-text">انگلیسی</span>
                                            </a>
                                        </li>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <li class="navi-item active">
                                            <a href="#" class="navi-link">
                                                <span class="symbol symbol-20 mr-3">
                                                    <img src="{{ asset('metronic/assets/media/svg/flags/128-spain.svg') }}"
                                                        alt="" />
                                                </span>
                                                <span class="navi-text">اسپانیایی</span>
                                            </a>
                                        </li>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="symbol symbol-20 mr-3">
                                                    <img src="{{ asset('metronic/assets/media/svg/flags/162-germany.svg') }}"
                                                        alt="" />
                                                </span>
                                                <span class="navi-text">آلمانی</span>
                                            </a>
                                        </li>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="symbol symbol-20 mr-3">
                                                    <img src="{{ asset('metronic/assets/media/svg/flags/063-japan.svg') }}"
                                                        alt="" />
                                                </span>
                                                <span class="navi-text">ژاپنی</span>
                                            </a>
                                        </li>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="symbol symbol-20 mr-3">
                                                    <img src="{{ asset('metronic/assets/media/svg/flags/195-france.svg') }}"
                                                        alt="" />
                                                </span>
                                                <span class="navi-text">فرانسه</span>
                                            </a>
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                </div>
                                <!--end::دراپ دان-->
                            </div>
                            <!--end::زبان ها-->

                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">سلام,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">محسن</span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">م</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::زیر هدر-->
                    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
                        <div
                            class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::اطلاعات-->
                            <div class="d-flex align-items-center flex-wrap mr-2">

                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                                    داشبورد </h5>
                                <!--end::Page Title-->

                                <!--begin::اقدامات-->
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200">
                                </div>

                                <span class="text-muted font-weight-bold mr-4">#XRS-45670</span>

                                <a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">
                                    افزودن جدید
                                </a>
                                <!--end::اقدامات-->
                            </div>
                            <!--end::اطلاعات-->

                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::اقدامات-->
                                <a href="#" class="btn btn-clean  btn-sm font-weight-bold font-size-base mr-1">
                                    امروز
                                </a>
                                <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base  mr-1">
                                    ماه
                                </a>
                                <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">
                                    سال
                                </a>
                                <!--end::اقدامات-->

                                <!--begin::تاریخrange-->
                                <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2"
                                    id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="انتخاب تاریخ"
                                    data-placement="left">
                                    <span class="text-muted font-size-base font-weight-bold mr-2"
                                        id="kt_dashboard_daterangepicker_title">امروز</span>
                                    <span class="text-primary font-size-base font-weight-bolder"
                                        id="kt_dashboard_daterangepicker_date">Aug 16</span>
                                </a>
                                <!--end::تاریخrange-->

                                <!--begin::دراپ دانs-->
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="اقدامات سریع"
                                    data-placement="left">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-success svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/پرونده ها/فایل-plus.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span> </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-drop"></i></span>
                                                    <span class="navi-text">گروه جدید</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-list-3"></i></span>
                                                    <span class="navi-text">مخاطب</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-rocket-1"></i></span>
                                                    <span class="navi-text">گروه ها</span>
                                                    <span class="navi-link-badge">
                                                        <span
                                                            class="label label-light-primary label-inline font-weight-bold">جدید</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-bell-2"></i></span>
                                                    <span class="navi-text">تماس ها</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-gear"></i></span>
                                                    <span class="navi-text">تنظیمات</span>
                                                </a>
                                            </li>

                                            <li class="navi-separator my-3"></li>

                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-magnifier-tool"></i></span>
                                                    <span class="navi-text">راهنما</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-bell-2"></i></span>
                                                    <span class="navi-text">حریم خصوصی</span>
                                                    <span class="navi-link-badge">
                                                        <span
                                                            class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::دراپ دانs-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <!--end::زیر هدر-->

                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::داشبورد-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-lg-6 col-xxl-4">
                                    <!--begin::ترکیبی Widget 1-->
                                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 bg-danger py-5">
                                            <h3 class="card-title font-weight-bolder text-white">آمار فروش</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        خروجی گرفتن
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span
                                                                    class="text-primary text-uppercase font-weight-bold font-size-sm">جدید
                                                                    اضافه کن:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-shopping-cart-1"></i></span>
                                                                    <span class="navi-text">سفارش</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-calendar-8"></i></span>
                                                                    <span class="navi-text">رویداد</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-graph-1"></i></span>
                                                                    <span class="navi-text">گزارش</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">پست</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-writing"></i></span>
                                                                    <span class="navi-text">فایل</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body p-0 position-relative overflow-hidden">
                                            <!--begin::Chart-->
                                            <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger"
                                                style="height: 200px"></div>
                                            <!--end::Chart-->

                                            <!--begin::آمار-->
                                            <div class="card-spacer mt-n25">
                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                                                        <span
                                                            class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" opacity="0.3" x="13" y="4"
                                                                        width="3" height="16" rx="1.5" />
                                                                    <rect fill="#000000" x="8" y="9" width="3"
                                                                        height="11" rx="1.5" />
                                                                    <rect fill="#000000" x="18" y="11" width="3"
                                                                        height="9" rx="1.5" />
                                                                    <rect fill="#000000" x="3" y="13" width="3"
                                                                        height="7" rx="1.5" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> <a href="#"
                                                            class="text-warning font-weight-bold font-size-h6">
                                                            فروش هفتگی
                                                        </a>
                                                    </div>
                                                    <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                                        <span
                                                            class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Add-user.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                    <path
                                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> <a href="#"
                                                            class="text-primary font-weight-bold font-size-h6 mt-2">
                                                            کاربران جدید
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                                        <span
                                                            class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/desgin/Layers.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                    <path
                                                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> <a href="#"
                                                            class="text-danger font-weight-bold font-size-h6 mt-2">
                                                            سفارشات مورد
                                                        </a>
                                                    </div>
                                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                                        <span
                                                            class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/فوری-mail.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <path
                                                                        d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> <a href="#"
                                                            class="text-success font-weight-bold font-size-h6 mt-2">
                                                            گزارشات
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::آمار-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::ترکیبی Widget 1-->
                                </div>
                                <div class="col-lg-6 col-xxl-4">

                                    <!--begin::لیست Widget 9-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0 mt-4">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="font-weight-bolder text-dark">فعالیت من</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344
                                                    حراجی</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-4">
                                            <div class="timeline timeline-5 mt-3">
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::برچسب-->
                                                    <div
                                                        class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        08:42</div>
                                                    <!--end::برچسب-->

                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-warning icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->

                                                    <!--begin::متن-->
                                                    <div
                                                        class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">
                                                        طرح ها شما را صداقت می کند. و ساختار را حفظ کنید
                                                    </div>
                                                    <!--end::متن-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::برچسب-->
                                                    <div
                                                        class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        10:00</div>
                                                    <!--end::برچسب-->

                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-success icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->

                                                    <!--begin::Content-->
                                                    <div class="timeline-content d-flex">
                                                        <span
                                                            class="font-weight-bolder text-dark-75 pl-3 font-size-lg">جلسه</span>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::برچسب-->
                                                    <div
                                                        class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        14:37</div>
                                                    <!--end::برچسب-->

                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->

                                                    <!--begin::Desc-->
                                                    <div
                                                        class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">
                                                        واریز کنید
                                                        <a href="#" class="text-primary">دلار 700</a>.
                                                        . به ESL
                                                    </div>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::برچسب-->
                                                    <div
                                                        class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        16:50</div>
                                                    <!--end::برچسب-->

                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-primary icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->

                                                    <!--begin::متن-->
                                                    <div
                                                        class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                                                        غرق شدن در رانندگی ضعیف و حفظ ساختار عالی است
                                                    </div>
                                                    <!--end::متن-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::برچسب-->
                                                    <div
                                                        class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        21:03</div>
                                                    <!--end::برچسب-->

                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->

                                                    <!--begin::Desc-->
                                                    <div
                                                        class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">
                                                        سفارش جدید قرار داده شده است <a href="#"
                                                            class="text-primary">#XF-2356</a>.
                                                    </div>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::برچسب-->
                                                    <div
                                                        class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        23:07</div>
                                                    <!--end::برچسب-->

                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-info icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->

                                                    <!--begin::متن-->
                                                    <div
                                                        class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                                                        طرح ها حفظ می شود و شما صادق هستید. تلقین در رانندگی ضعیف
                                                    </div>
                                                    <!--end::متن-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::برچسب-->
                                                    <div
                                                        class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        16:50</div>
                                                    <!--end::برچسب-->

                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-primary icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->

                                                    <!--begin::متن-->
                                                    <div
                                                        class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                                                        غرق شدن در رانندگی ضعیف و حفظ ساختار عالی است
                                                    </div>
                                                    <!--end::متن-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::برچسب-->
                                                    <div
                                                        class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        21:03</div>
                                                    <!--end::برچسب-->

                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->

                                                    <!--begin::Desc-->
                                                    <div
                                                        class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">
                                                        سفارش جدید قرار داده شده است <a href="#"
                                                            class="text-primary">#XF-2356</a>.
                                                    </div>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end: Items-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end: Card-->
                                    <!--end: لیست Widget 9-->
                                </div>
                                <div class="col-lg-6 col-xxl-4">
                                    <!--begin::آمار Widget 11-->
                                    <div class="card card-custom card-stretch card-stretch-half gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                                <span class="symbol  symbol-50 symbol-light-success mr-2">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-xl svg-icon-success">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/layout/layout-4-blocks.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" x="4" y="4" width="7"
                                                                        height="7" rx="1.5" />
                                                                    <path
                                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> </span>
                                                </span>
                                                <div class="d-flex flex-column text-right">
                                                    <span
                                                        class="text-dark-75 font-weight-bolder font-size-h3">750دلار</span>
                                                    <span class="text-muted font-weight-bold mt-2">درامد هفتگی</span>
                                                </div>
                                            </div>
                                            <div id="kt_stats_widget_11_chart" class="card-rounded-bottom"
                                                data-color="success" style="height: 150px"></div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::آمار Widget 11-->
                                    <!--begin::آمار Widget 12-->
                                    <div class="card card-custom card-stretch card-stretch-half gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                                <span class="symbol  symbol-50 symbol-light-primary mr-2">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/گروه.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                    <path
                                                                        d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> </span>
                                                </span>
                                                <div class="d-flex flex-column text-right">
                                                    <span
                                                        class="text-dark-75 font-weight-bolder font-size-h3">+6,5K</span>
                                                    <span class="text-muted font-weight-bold mt-2">کاربران جدید</span>
                                                </div>
                                            </div>
                                            <div id="kt_stats_widget_12_chart" class="card-rounded-bottom"
                                                data-color="primary" style="height: 150px"></div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::آمار Widget 12-->
                                </div>

                                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">
                                    <!--begin::لیست Widget 1-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">وظایف
                                                    بررسی</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">در انتظار
                                                    10 کار</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#"
                                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-ver"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-drop"></i></span>
                                                                    <span class="navi-text">گروه جدید</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-list-3"></i></span>
                                                                    <span class="navi-text">مخاطب</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">گروه ها</span>
                                                                    <span class="navi-link-badge">
                                                                        <span
                                                                            class="label label-light-primary label-inline font-weight-bold">جدید</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-bell-2"></i></span>
                                                                    <span class="navi-text">تماس ها</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-gear"></i></span>
                                                                    <span class="navi-text">تنظیمات</span>
                                                                </a>
                                                            </li>

                                                            <li class="navi-separator my-3"></li>

                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-magnifier-tool"></i></span>
                                                                    <span class="navi-text">راهنما</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-bell-2"></i></span>
                                                                    <span class="navi-text">حریم خصوصی</span>
                                                                    <span class="navi-link-badge">
                                                                        <span
                                                                            class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-8">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-primary mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                        fill="#000000" />
                                                                    <rect fill="#000000" opacity="0.3"
                                                                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                                        x="16.3255682" y="2.94551858" width="3"
                                                                        height="18" rx="1" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">گزارش
                                                        پروژه</a>
                                                    <span class="text-muted">مدیر پروژه</span>
                                                </div>
                                                <!--end::متن-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-warning mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-warning">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                                    <path
                                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary mb-1 font-size-lg">طرح
                                                        جامع</a>
                                                    <span class="text-muted">کارگردان هنری</span>
                                                </div>
                                                <!--end::متن-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-success">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/group-chat.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">منطق
                                                        عملکردی</a>
                                                    <span class="text-muted">توسعه دهنده</span>
                                                </div>
                                                <!--end::متن-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-danger mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/Attachment2.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                                                        fill="#000000" opacity="0.3"
                                                                        transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) " />
                                                                    <path
                                                                        d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                                                        fill="#000000"
                                                                        transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) " />
                                                                    <path
                                                                        d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                                                        fill="#000000" opacity="0.3"
                                                                        transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) " />
                                                                    <path
                                                                        d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                                                        fill="#000000" opacity="0.3"
                                                                        transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) " />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">توسعه</a>
                                                    <span class="text-muted">برنامه نویس</span>
                                                </div>
                                                <!--end::متن-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-info mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg  svg-icon-info">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Shield-user.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <path
                                                                        d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <path
                                                                        d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">آزمایش
                                                        کردن</a>
                                                    <span class="text-muted">مدیران مالی</span>
                                                </div>
                                                <!--end::متن-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::لیست Widget 1-->
                                </div>
                                <div class="col-xxl-8 order-2 order-xxl-1">
                                    <!--begin::پیشرفت Table Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">تازه رسیده
                                                    ها</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">بیش از
                                                    400+ عضو جدید</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_1_1">ماه</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_1_2">هفته</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                                            href="#kt_tab_pane_1_3">روز</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-3 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width: 200px"></th>
                                                            <th class="p-0" style="min-width: 100px"></th>
                                                            <th class="p-0" style="min-width: 125px"></th>
                                                            <th class="p-0" style="min-width: 110px"></th>
                                                            <th class="p-0" style="min-width: 150px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="pl-0 py-4">
                                                                <div class="symbol symbol-50 symbol-light mr-1">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('metronic/assets/media/svg/misc/006-plurk.svg') }}"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">سان
                                                                    برجسته</a>
                                                                <div>
                                                                    <span class="font-weight-bolder">پست
                                                                        الکترونیک:</span>
                                                                    <a class="text-muted font-weight-bold text-hover-primary"
                                                                        href="#">bprow@bnc.cc</a>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    2,000,000دلار
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    پرداخت شده
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    جی اس, جی اس
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-primary label-inline">تایید
                                                                    شده</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                                                <path
                                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                    fill="#000000"
                                                                                    fill-rule="nonzero" />
                                                                                <path
                                                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-4">
                                                                <div class="symbol symbol-50 symbol-light">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('metronic/assets/media/svg/misc/015-telegram.svg') }}"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">اپلیکیشن
                                                                    توسعه</a>
                                                                <div>
                                                                    <span class="font-weight-bolder">پست
                                                                        الکترونیک:</span>
                                                                    <a class="text-muted font-weight-bold text-hover-primary"
                                                                        href="#">app@dev.com</a>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    4,600,000دلار
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    پرداخت شده
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    دیتابیس
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-warning label-inline">میزان
                                                                    پیشرفت</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                                                <path
                                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                    fill="#000000"
                                                                                    fill-rule="nonzero" />
                                                                                <path
                                                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-4">
                                                                <div class="symbol symbol-50 symbol-light">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('metronic/assets/media/svg/misc/003-puzzle.svg') }}"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">دستمزد
                                                                    اپلیکیشن</a>
                                                                <div>
                                                                    <span class="font-weight-bolder">پست
                                                                        الکترونیک:</span>
                                                                    <a class="text-muted font-weight-bold text-hover-primary"
                                                                        href="#">شرکت@dev.com</a>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    560,000دلار
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    پرداخت شده
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    لاراول, مترونیک
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-success label-inline">موفقیت</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                                                <path
                                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                    fill="#000000"
                                                                                    fill-rule="nonzero" />
                                                                                <path
                                                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-4">
                                                                <div class="symbol symbol-50 symbol-light">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('metronic/assets/media/svg/misc/005-bebo.svg') }}"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">مدیریت
                                                                    منابع انسانی سیستم</a>
                                                                <div>
                                                                    <span class="font-weight-bolder">پست
                                                                        الکترونیک:</span>
                                                                    <a class="text-muted font-weight-bold text-hover-primary"
                                                                        href="#">hr@demo.com</a>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    دلار57,000
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    پرداخت شده
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">
                                                                    آنگولارجی اس, C#
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-danger label-inline">رد
                                                                    شد</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                                                <path
                                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                    fill="#000000"
                                                                                    fill-rule="nonzero" />
                                                                                <path
                                                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-4">
                                                                <div class="symbol symbol-50 symbol-light">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('metronic/assets/media/svg/misc/014-kickstarter.svg') }}"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">اپلیکیشن
                                                                    موبایل</a>
                                                                <div>
                                                                    <span class="font-weight-bolder">پست
                                                                        الکترونیک:</span>
                                                                    <a class="text-muted font-weight-bold text-hover-primary"
                                                                        href="#">ktr@demo.com</a>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                    45,200,000دلار
                                                                </span>
                                                                <span class="text-muted font-weight-bold">
                                                                    پرداخت شده
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    ری اکت
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-warning label-inline">میزان
                                                                    پیشرفت</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                                                <path
                                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span
                                                                        class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                    fill="#000000"
                                                                                    fill-rule="nonzero" />
                                                                                <path
                                                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::پیشرفت Table Widget 2-->
                                </div>

                                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
                                    <!--begin::لیست Widget 3-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">نویسندگان</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-light-primary btn-sm font-weight-bolder dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        ایجاد کردن
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span
                                                                    class="text-primary text-uppercase font-weight-bold font-size-sm">جدید
                                                                    اضافه کن:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-shopping-cart-1"></i></span>
                                                                    <span class="navi-text">سفارش</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-calendar-8"></i></span>
                                                                    <span class="navi-text">رویداد</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-graph-1"></i></span>
                                                                    <span class="navi-text">گزارش</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">پست</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-writing"></i></span>
                                                                    <span class="navi-text">فایل</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-2">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="{{ asset('metronic/assets/media/svg/avatars/009-boy-4.svg') }}"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">علیرضا
                                                        مرادی</a>
                                                    <span class="text-muted"> طراح دیتابیس</span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin::دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="{{ asset('metronic/assets/media/svg/avatars/006-girl-3.svg') }}"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">زینب
                                                        غلامی</a>
                                                    <span class="text-muted"> طراح دیتابیس</span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin::دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="{{ asset('metronic/assets/media/svg/avatars/011-boy-5.svg') }}"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">محمد
                                                        زندی</a>
                                                    <span class="text-muted"> طراح دیتابیس</span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin::دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end:دراپ دان-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="{{ asset('metronic/assets/media/svg/avatars/015-boy-6.svg') }}"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">علیرضا
                                                        مرادی</a>
                                                    <span class="text-muted"> طراح دیتابیس</span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin::دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::سیمبل-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="{{ asset('metronic/assets/media/svg/avatars/016-boy-7.svg') }}"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::سیمبل-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#"
                                                        class="text-dark text-hover-primary mb-1 font-size-lg">علی
                                                        جمشیدی</a>
                                                    <span class="text-muted"> طراح دیتابیس</span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin::دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::لیست Widget 3-->
                                </div>

                                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">

                                    <!--begin::لیست Widget 4-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">انجام دادن</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        ایجاد کردن
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span
                                                                    class="text-primary text-uppercase font-weight-bold font-size-sm">جدید
                                                                    اضافه کن:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-shopping-cart-1"></i></span>
                                                                    <span class="navi-text">سفارش</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-calendar-8"></i></span>
                                                                    <span class="navi-text">رویداد</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-graph-1"></i></span>
                                                                    <span class="navi-text">گزارش</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">پست</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-writing"></i></span>
                                                                    <span class="navi-text">فایل</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-2">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::چک باکس-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" name="select" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::چک باکس-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        ایجاد کردن آرم
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        موعد 2 روز
                                                    </span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin::دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end:Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::چک باکس-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::چک باکس-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        جلسه ذینفعان
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        موعد 3 روز
                                                    </span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin::دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-warning align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::چک باکس-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::چک باکس-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">
                                                        اسکوپ و تخمین ها
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        موعد 5 روز
                                                    </span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin: دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-info align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::چک باکس-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-info checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::چک باکس-->

                                                <!--begin::متن-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        ویترین اسپرینت
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        موعد 1 روز
                                                    </span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin::دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-drop"></i></span>
                                                                    <span class="navi-text">گروه جدید</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-list-3"></i></span>
                                                                    <span class="navi-text">مخاطب</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">گروه ها</span>
                                                                    <span class="navi-link-badge">
                                                                        <span
                                                                            class="label label-light-primary label-inline font-weight-bold">جدید</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-bell-2"></i></span>
                                                                    <span class="navi-text">تماس ها</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-gear"></i></span>
                                                                    <span class="navi-text">تنظیمات</span>
                                                                </a>
                                                            </li>

                                                            <li class="navi-separator my-3"></li>

                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-magnifier-tool"></i></span>
                                                                    <span class="navi-text">راهنما</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-bell-2"></i></span>
                                                                    <span class="navi-text">حریم خصوصی</span>
                                                                    <span class="navi-link-badge">
                                                                        <span
                                                                            class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-danger align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::چک باکس-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::چک باکس:-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        پروژه یکپارچه سازی با سیستم عامل
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        موعد 12 روز
                                                    </span>
                                                </div>
                                                <!--end::متن-->

                                                <!--begin: دراپ دان-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="اقدامات سریع" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">انتخاب کنید:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="برای اطلاعات بیشتر کلیک کنید..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">مشتری</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">شریک</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">برتر</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">عضو</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">کارمندان</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    جدید اضافه کن
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::دراپ دان-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end:لیست Widget 4-->
                                </div>

                                <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
                                    <!--begin::لیست Widget 8-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">ترندها</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-ver"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span
                                                                    class="text-primary text-uppercase font-weight-bold font-size-sm">جدید
                                                                    اضافه کن:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-shopping-cart-1"></i></span>
                                                                    <span class="navi-text">سفارش</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-calendar-8"></i></span>
                                                                    <span class="navi-text">رویداد</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-graph-1"></i></span>
                                                                    <span class="navi-text">گزارش</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">پست</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-writing"></i></span>
                                                                    <span class="navi-text">فایل</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Item-->
                                            <div class="mb-10">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::سیمبل-->
                                                    <div class="symbol symbol-45 symbol-light mr-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('metronic/assets/media/svg/misc/006-plurk.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::سیمبل-->

                                                    <!--begin::متن-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <a href="#"
                                                            class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">نویسندگان
                                                            برتر</a>
                                                        <span class="text-muted font-weight-bold">5 روز پیش</span>
                                                    </div>
                                                    <!--end::متن-->
                                                </div>
                                                <!--end::Section-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">
                                                    خلاصه ای در مورد سایت های برتر در مورد آن بنویسید
                                                    در این بخش متناسب است
                                                </p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="mb-10">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::سیمبل-->
                                                    <div class="symbol symbol-45 symbol-light mr-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('metronic/assets/media/svg/misc/015-telegram.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::سیمبل-->

                                                    <!--begin::متن-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <a href="#"
                                                            class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">نویسندگان
                                                            محبوب</a>
                                                        <span class="text-muted font-weight-bold">5 روز پیش</span>
                                                    </div>
                                                    <!--end::متن-->
                                                </div>
                                                <!--end::Section-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">
                                                    خلاصه نوشتن در مورد شهرت محبوب که
                                                    در این بخش متناسب است
                                                </p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::سیمبل-->
                                                    <div class="symbol symbol-45 symbol-light mr-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('metronic/assets/media/svg/misc/014-kickstarter.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::سیمبل-->

                                                    <!--begin::متن-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <a href="#"
                                                            class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">کاربران
                                                            جدید</a>
                                                        <span class="text-muted font-weight-bold">5 روز پیش</span>
                                                    </div>
                                                    <!--end::متن-->
                                                </div>
                                                <!--end::Section-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">
                                                    خلاصه نوشتن در مورد شهرت محبوب که
                                                    در این بخش متناسب است
                                                </p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end: Card-->
                                    <!--end::لیست Widget 8-->
                                </div>
                            </div>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-lg-4">
                                    <!--begin::ترکیبی Widget 14-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title font-weight-bolder ">اقدام لازم است</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-clean btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-drop"></i></span>
                                                                    <span class="navi-text">گروه جدید</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-list-3"></i></span>
                                                                    <span class="navi-text">مخاطب</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">گروه ها</span>
                                                                    <span class="navi-link-badge">
                                                                        <span
                                                                            class="label label-light-primary label-inline font-weight-bold">جدید</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-bell-2"></i></span>
                                                                    <span class="navi-text">تماس ها</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-gear"></i></span>
                                                                    <span class="navi-text">تنظیمات</span>
                                                                </a>
                                                            </li>

                                                            <li class="navi-separator my-3"></li>

                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-magnifier-tool"></i></span>
                                                                    <span class="navi-text">راهنما</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-bell-2"></i></span>
                                                                    <span class="navi-text">حریم خصوصی</span>
                                                                    <span class="navi-link-badge">
                                                                        <span
                                                                            class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1">
                                                <div id="kt_mixed_widget_14_chart" style="height: 200px"></div>
                                            </div>
                                            <div class="pt-5">
                                                <p class="text-center font-weight-normal font-size-lg pb-7">
                                                    یادداشت ها: حداکثر سرعت فعلی نیاز به سهامداران دارد<br />
                                                    برای تصویب سیاستهای تازه اصلاح شده
                                                </p>
                                                <a href="#"
                                                    class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">گزارش
                                                    عمومی</a>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::ترکیبی Widget 14-->
                                </div>
                                <div class="col-lg-8">
                                    <!--begin::پیشرفت Table Widget 4-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 py-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">نمایندگان
                                                    آمار</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">بیش از
                                                    400+ عضو جدید</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <a href="#"
                                                    class="btn btn-info font-weight-bolder font-size-sm mr-3">گزارش
                                                    جدید</a>
                                                <a href="#"
                                                    class="btn btn-danger font-weight-bolder font-size-sm">ایجاد
                                                    کردن</a>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <div class="tab-content">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                                        <thead>
                                                            <tr class="text-left text-uppercase">
                                                                <th style="min-width: 250px" class="pl-7">
                                                                    <span class="text-dark-75">محصولات</span></th>
                                                                <th style="min-width: 100px">درآمد</th>
                                                                <th style="min-width: 100px">کمیسیون</th>
                                                                <th style="min-width: 100px">شرکت</th>
                                                                <th style="min-width: 130px">رتبه بندی</th>
                                                                <th style="min-width: 80px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="pl-0 py-8">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="{{ asset('metronic/assets/media/svg/avatars/001-boy.svg') }}"
                                                                                    class="h-75 align-self-end"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#"
                                                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">حسین
                                                                                ذبیحی</a>
                                                                            <span
                                                                                class="text-muted font-weight-bold d-block">
                                                                                ری اکت جی اس</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        دلار8,000,000
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        در جریان
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        دلار520
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        پرداخت شده
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        پشتاز
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        طراح رابط کاربری
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <img src="{{ asset('metronic/assets/media/logos/stars.png') }}"
                                                                        alt="image" style="width: 5.5rem" />
                                                                    <span
                                                                        class="text-muted font-weight-bold d-block font-size-sm">
                                                                        رتبه برتر
                                                                    </span>
                                                                </td>
                                                                <td class="pr-0 text-right">
                                                                    <a href="#"
                                                                        class="btn btn-light-success font-weight-bolder font-size-sm">مشاهده
                                                                        پیشنهاد</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-0 py-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="{{ asset('metronic/assets/media/svg/avatars/018-girl-9.svg') }}"
                                                                                    class="h-75 align-self-end"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#"
                                                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">مینا
                                                                                حسینی</a>
                                                                            <span
                                                                                class="text-muted font-weight-bold d-block">سی
                                                                                شارپ</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        23,000,000دلار
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        در انتظار
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        1,600دلار
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        رد شد
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        بهران موتور
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        خانه ها و هتل ها
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <img src="{{ asset('metronic/assets/media/logos/stars.png') }}"
                                                                        alt="image" style="width: 5.5rem" />
                                                                    <span
                                                                        class="text-muted font-weight-bold d-block font-size-sm">
                                                                        بالای میانگین
                                                                    </span>
                                                                </td>
                                                                <td class="pr-0 text-right">
                                                                    <a href="#"
                                                                        class="btn btn-light-success font-weight-bolder font-size-sm">مشاهده
                                                                        پیشنهاد</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-0 py-8">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="{{ asset('metronic/assets/media/svg/avatars/047-girl-25.svg') }}"
                                                                                    class="h-75 align-self-end"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#"
                                                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">مریم
                                                                                موسوی</a>
                                                                            <span
                                                                                class="text-muted font-weight-bold d-block">
                                                                                لاراول</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        دلار34,000,000
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        پرداخت شده
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        دلار6,700
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        پرداخت شده
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        ساتراس
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        پرداخت شده
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <img src="{{ asset('metronic/assets/media/logos/stars.png') }}"
                                                                        alt="image" style="width: 5.5rem" />
                                                                    <span
                                                                        class="text-muted font-weight-bold d-block font-size-sm">
                                                                        رتبه برتر
                                                                    </span>
                                                                </td>
                                                                <td class="pr-0 text-right">
                                                                    <a href="#"
                                                                        class="btn btn-light-success font-weight-bolder font-size-sm">مشاهده
                                                                        پیشنهاد</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-0 py-0 ">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="{{ asset('metronic/assets/media/svg/avatars/014-girl-7.svg') }}"
                                                                                    class="h-75 align-self-end"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#"
                                                                                class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">بهناز
                                                                                محمدزاده</a>
                                                                            <span
                                                                                class="text-muted font-weight-bold d-block">
                                                                                پی اچ پی</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left pr-0">
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        2,600,000دلار
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        پرداخت شده
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        14,000دلار
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        در انتظار
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                        پردازشگران
                                                                    </span>
                                                                    <span class="text-muted font-weight-bold">
                                                                        بیمه
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <img src="{{ asset('metronic/assets/media/logos/stars.png') }}"
                                                                        alt="image" style="width: 5.5rem" alt="" />
                                                                    <span
                                                                        class="text-muted font-weight-bold d-block font-size-sm">
                                                                        میانگین
                                                                    </span>
                                                                </td>
                                                                <td class="pr-0 text-right">
                                                                    <a href="#"
                                                                        class="btn btn-light-success font-weight-bolder font-size-sm"
                                                                        style="width: 7rem">مشاهده پیشنهاد</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::پیشرفت Table Widget 4-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--end::داشبورد-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::کپی رایت-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2020&copy;</span>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="text-dark-75 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::کپی رایت-->

                        <!--begin::Nav-->
                        <div class="nav nav-dark">
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">درباره
                                ما</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pl-0 pr-5">تیم</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pl-0 pr-0">مخاطب</a>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->




     </div>


    </div>
  <!--end::Wrapper-->


 </div>
 <!--end::Content-->
</div>
<!--end::نسخه ی نمایشی Panel-->



    <!--begin::Global تم Bundle(used by all pages)-->
    <script src="{{ asset('metronic/assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
  <script src="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
  <script src="{{ asset('metronic/assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global تم Bundle-->

                    <!--begin::Page Vendors(used by this page)-->
                            <script src="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6') }}"></script>
                        <!--end::Page Vendors-->

                    <!--begin::Page Scripts(used by this page)-->
                            <script src="{{ asset('metronic/assets/js/pages/widgets.js?v=7.0.6') }}"></script>
                        <!--end::Page Scripts-->
            </body>
    <!--end::Body-->
</html>
