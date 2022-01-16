<!-- Header section -->
<div class="sticky-top mobileCtas">
    <div aria-label="Skip to the Main Content" id="skip" role="navigation">
        <a class="element-invisible element-focusable" href="#degreeCert">Skip to Main Content</a>
    </div>



    <!-- Top CTA bar -->
    <div class="hp-cta-bar">
        <div class="row no-gutters  topCtasBg" id="mobileCtaGroup">


            <div class="mob col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="hp-cta-bar-sect2">
                    <a class="lineSepBtnR" href="{{ route('index.home') }}">
                        <i class="fas fa-home centerBlockIcon"></i>Home</a>
                </div>
            </div>



            <div class="mob col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div id="livechatV2Btn"></div>
            </div>




            <div class="mob col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="hp-cta-bar-sect2">
                    <a class="lineSepBtn" href="{{ route('index.tracking') }}"><i
                            class="fa fa-search centerBlockIcon"></i>Tracking</a>
                </div>
            </div>




        </div>
    </div>
    <!-- end Top CTA bar -->


    <!-- Logo section -->
    <header class="des desOnly" id="header">
        <div class="container">
        </div>
    </header>
    <!-- end logo -->
    <div class="berkMenu des desOnly" id="menu">
        <div class="container">
            <!-- Menu section -->


            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="mainLogo mainLogo2">
                    <a href="#">
                        <img alt="" class="imgRes" src="{{ $setting->logo }}"  />
                    </a>
                </div>
            </div>


            <div class="col-12 col-sm-12 col-md-9 col-lg-1 col-xl-9">

                <nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">









                            {{-- onlineLink --}}

                            <li class="nav-item dropdown  ">
                                <a class="nav-link dropdown-toggle" href="{{ route('index.home') }}">Home</a>
                            </li>



                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#">Service</a>

                                <div class="dropdown-menu">

                                    <div class="">
                                        <div class="row">



                                            @foreach ($listpages->chunk(1) as $chunk)
                                            <div class="col-md-6">
                                                <ul class="nav flex-column" itemscope="itemscope"
                                                    itemtype="http://www.schema.org/SiteNavigationElement">



                                                    @foreach ($chunk as $key => $page)
                                                    <li class="nav-item" itemprop="name"><a class="nav-link"
                                                            href="{{ route('index.service', $page) }}"
                                                            itemprop="url">{{ $page->title }}</a></li>
                                                    @endforeach





                                                </ul>
                                            </div>
                                            @endforeach



                                        </div>
                                    </div>
                                </div>
                            </li>










                            <li class="nav-item dropdown  ">
                                <a class="nav-link dropdown-toggle" href="{{ route('index.faqs') }}">Faqs</a>
                            </li>

                            <li class="nav-item dropdown  ">
                                <a class="nav-link dropdown-toggle" href="{{ route('index.blogs') }}">Blogs</a>
                            </li>



                            <li class="nav-item dropdown  ">
                                <a class="nav-link dropdown-toggle" href="{{ route('index.contactus') }}">Contact Us</a>
                            </li>


                            <li class="nav-item dropdown">

                                <a class="nav-link" href="{{ route('index.tracking') }}"
                                    style="color: #ebbf14;">Traking<i class="fas fa-search searchIcon"></i></a>
                            </li>
                        </ul>
                        <!-- Top bar Mobile -->
                    </div>
                </nav>


            </div>
            <!-- END Menu section -->
        </div>
    </div>
</div>
<!-- end Header section -->




<div class="container mobMenuALt mob mobNBig mobileCtas">
    <div class="row ">
        <div class="col d-flex justify-content-between">
            <a class="#">
                <img alt="" class="" {{-- src="{{$setting->logo}}"  width="373px" height="90px" --}} />
            </a>
            <button aria-label="menu toggle" class="toggle-id-1 barsIcon">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

</div>
<!-- search -->
<div id="searchBox">
    <button class="close" type="button">×</button>
    <form action="#">
        <input aria-label="search" name="q" placeholder="type keyword(s) here" type="search" value="" />
        <button class="btn btnYellow" type="submit">Search</button>
    </form>
</div>

<!-- end search -->
