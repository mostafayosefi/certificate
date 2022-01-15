<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="XNwbnXCnNrKdwLQ03yJJb-kR-PhvdfLK30LXZ23Q-CU" />
    <meta name="msvalidate.01" content="594385FB78084A685DFC420A86BDA033" />
    <title>
        {{$setting->title}}
         {{ $tabTitle ?? '' }}</title>

          <meta content="{{$setting->keyword}}" name="keywords" />
         <meta  content="{{$setting->description}}" name="description" />
         <meta content="index, follow" name="robots" />
         <link href="{{asset('certificate/css/jquery.bxslider.min.css')}}" rel="stylesheet" />
         <link href="{{asset('certificate/css/slick.css')}}" rel="stylesheet" />
         <link crossorigin="anonymous" href="{{asset('certificate/css/all.css')}}"
             integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" rel="stylesheet" />
         <link crossorigin="anonymous" href="{{asset('certificate/css/bootstrap.min.css')}}"
             integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" rel="stylesheet" />
         <link href="{{asset('certificate/css/component-slidebars.min.css')}}" rel="stylesheet" />
         <link href="{{asset('certificate/css/styles.css')}}" rel="stylesheet" />
         <link href="{{asset('certificate/css/hh-alerts.css')}}" rel="stylesheet" type="text/css" />
         <!-- REVOLUTION STYLE SHEETS -->
         <link href="{{asset('certificate/css/settings.css')}}" rel="stylesheet"  type="text/css" />
         <!-- REVOLUTION LAYERS STYLES -->
         <link href="{{asset('certificate/css/layers.css')}}" rel="stylesheet" type="text/css" />
         <!-- REVOLUTION NAVIGATION STYLES -->
         <link href="{{asset('certificate/css/navigation.css')}}" rel="stylesheet"
             type="text/css" />
         <script src="{{asset('certificate/js/jquery.min.js')}}"></script>
         <!-- REVOLUTION JS FILES -->
         <script src="{{asset('certificate/js/jquery.themepunch.tools.min.js')}}"
             type="text/javascript"></script>
         <script src="{{asset('certificate/js/jquery.themepunch.revolution.min.js')}}"
             type="text/javascript"></script>
         <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
         <script
             src="{{asset('certificate/js/revolution.extension.layeranimation.min.js')}}"
             type="text/javascript"></script>
         <script src="{{asset('certificate/js/revolution.extension.navigation.min.js')}}"
             type="text/javascript"></script>
         <script src="{{asset('certificate/js/revolution.extension.slideanims.min.js')}}"
             type="text/javascript"></script>
         <script src="{{asset('certificate/js/revolution.extension.video.min.js')}}"
             type="text/javascript"></script>
         <link href="#" rel="canonical" />
         <!-- Clive tracking script -->

         <link rel="shortcut icon" href="{{$setting->favicon}}"/>
         <meta name="msvalidate.01" content="594385FB78084A685DFC420A86BDA033" />
    @yield('style')
</head>


<body>
    <div canvas="container" class="mainCanvas">
        @include('index.layouts.header')

    @yield('slider')
        @yield('content')
        @include('index.layouts.footer')
    </div>
    <div class="custom-responsive-width" off-canvas="id-1 left overlay">
        @include('index.layouts.navbarmob')
    </div>
    <!-- right canvas -->
    <div off-canvas="id-2 right push">
        extra content
    </div>


    @include('sweetalert::alert')
    <!-- end of right canvas -->
    <script src="{{asset('certificate/js/jquery.bxslider.min.js')}}"></script>
    <script crossorigin="anonymous" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        src="{{asset('certificate/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('certificate/js/slidebars.min.js')}}"></script>
    <script src="{{asset('certificate/js/countUp.min.js')}}"></script>
    <script src="{{asset('certificate/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('certificate/js/main.js')}}"></script>
    <script src="{{asset('certificate/js/slick.min.js')}}"></script>
    <script src="{{asset('certificate/js/main-internal.js')}}"></script>
    <script src="{{asset('certificate/js/emergency-alert.js')}}"></script>
    <script src="{{asset('certificate/js/polyfill.min.js')}}"></script>
    <script src="{{asset('certificate/js/lodash.min.js')}}"></script>
    <script src="{{asset('certificate/js/moment.min.js')}}"></script>
    <script src="{{asset('certificate/js/moment-timezone-with-data.min.js')}}"></script>
    <script src="{{asset('certificate/js/bootstrap-datepicker.min.js')}}"></script>



    @include('index.layouts.alertswl')


@yield('script')

</body>
</html>
