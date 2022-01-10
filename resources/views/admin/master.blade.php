<!DOCTYPE html>


<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{-- سیستم خدمات هاست و دامنه --}}
         {{ $tabTitle ?? '' }}</title>


        <meta name="description" content="Headers datatables examples"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->



        <!--begin::Global تم Styles(used by all pages)-->
                    <link href="{{ asset('metronic/assets/plugins/global/plugins.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
                    <link href="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
                    <link href="{{ asset('metronic/assets/css/style.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
                <!--end::Global تم Styles-->

        <!--begin::چیدمان تم ها(used by all pages)-->

<link href="{{ asset('metronic/assets/css/themes/layout/header/base/light.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('metronic/assets/css/themes/layout/header/menu/light.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('metronic/assets/css/themes/layout/brand/dark.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('metronic/assets/css/themes/layout/aside/dark.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>        <!--end::چیدمان تم ها-->

        <link rel="shortcut icon" href="{{ asset('metronic/assets/media/logos/favicon.ico')}}"/>



    @yield('style')
</head>


<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

    <!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed " >
<!--begin::Logo-->
<a href="index.html">
    <img alt="Logo"  src="{{$setting->logo}}" width="92px" height="32px" />
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
        <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <polygon points="0 0 24 0 24 24 0 24"/>
    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
</g>
</svg><!--end::Svg Icon--></span>		</button>
    <!--end::Topbar Mobile Toggle-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
@include('admin.layouts.sidebar')


<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

@include('admin.layouts.navbar')


<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        @yield('content')

    </div>


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
</div>
</div>


    	<!--begin::Global تم Bundle(used by all pages)-->
        <script src="{{ asset('metronic/assets/plugins/global/plugins.bundle.js?v=7.0.6')}}"></script>
        <script src="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6')}}"></script>
        <script src="{{ asset('metronic/assets/js/scripts.bundle.js?v=7.0.6')}}"></script>
     <!--end::Global تم Bundle-->


@include('sweetalert::alert')

@yield('script')

</body>
</html>
