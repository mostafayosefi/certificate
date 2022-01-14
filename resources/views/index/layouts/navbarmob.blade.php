
        <!-- Menu mobile -->

        <div class="container mobMenuALt mob mobNBig">
            <div class="row ">
                <div class="col d-flex justify-content-between">
                    <a class="navbar-brand"  href="" >
                        <img alt="Berkeley College Logo your potential is our promise®" class=""
                        src="{{$setting->logo}}"  width="323px" height="55px"  />
                    </a>
                    <button aria-label="menu toggler" class="toggle-id-1 barsIcon" type="button">
                        <i aria-hidden="true" class="fas fa-times"></i>
                    </button>
                </div>
            </div>

        </div>

        <div class="container">
            <nav class="navbar" id="navBarMob">

                <ul class="navbar-nav">

{{--
                    <li class="nav-item">
                        <a class="nav-link mobMenuCta" href="tel:{{$setting->tell}}"> </a>
                    </li>
                 <li class="nav-item">
                        <a class="nav-link mobMenuCta" href="">Live Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mobMenuCta" href="">Request
                            Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mobMenuCta" href="">Apply Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mobMenuCta bgBlue"
                            href="" target="_blank">COVID-19
                            Resources</a>
                    </li> --}}
                    <li class="nav-item mob translatorMob">
                        <div class="topBarGooTrans">
                            <div id="google_translate_element3">
                                <span class="hide">translator</span>
                            </div>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link mobMenuCta" href="{{route('index.home')}}">Home<i class="fas fa-home "></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mobMenuCta" href="{{route('index.faqs')}}">Faqs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mobMenuCta" href="{{route('index.blogs')}}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mobMenuCta" href="{{route('index.contactus')}}">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mobMenuCta"  href="{{route('index.tracking')}}"  style="color: #ebbf14;">Traking<i class="fas fa-search searchIcon"></i></a>
                    </li>



                    <li class="nav-item dropdown">

                        <div class="dropdownIndLink topcatwrap">
                <a class="nav-link" href="/news/index.html">Service</a>
                                    <button aria-expanded="false" aria-haspopup="true" aria-label="Click to expand submenu links" class="dropdown-toggle caretDown" data-toggle="dropdown">
                      <i aria-hidden="true" class="fas fa-caret-square-down" title="click to expand open sublinks"></i>
                  </button>
              </div>
                      <div class="dropdown-menu dropdownSubMenuMob">
   @foreach ($listpages->chunk(2) as $chunk)
   <ul class="nav flex-column" itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement">
    @foreach ($chunk as $key => $page)
    <li class="nav-item" itemprop="name"><a class="nav-link" href="{{ route('index.service', $page) }}" itemprop="url">{{$page->title}}</a></li>
    @endforeach
   </ul>
    @endforeach

  </div>
</li>


<li class="nav-item dropdown">

    <div class="dropdownIndLink topcatwrap">
<a class="nav-link" href="/news/index.html">List of blogs </a>
                <button aria-expanded="false" aria-haspopup="true" aria-label="Click to expand submenu links" class="dropdown-toggle caretDown" data-toggle="dropdown">
  <i aria-hidden="true" class="fas fa-caret-square-down" title="click to expand open sublinks"></i>
</button>
</div>
  <div class="dropdown-menu dropdownSubMenuMob">
@foreach ($listblogs->chunk(2) as $chunk)
<ul class="nav flex-column" itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement">
@foreach ($chunk as $key => $blog)
<li class="nav-item" itemprop="name"><a class="nav-link" href="{{ route('index.blog', $blog) }}" itemprop="url">{{$blog->title}}</a></li>
@endforeach
</ul>
@endforeach

</div>
</li>





{{--
                    <li class="nav-item dropdown">
                        <div class="dropdownIndLink topcatwrap">
                            <a class="nav-link " href="">Service</a>
                            <button aria-expanded="false" aria-haspopup="true"
                                aria-label="Click to expand submenu links" class="dropdown-toggle caretDown"
                                data-toggle="dropdown">
                                <i aria-hidden="true" class="fas fa-caret-square-down"
                                    title="click to expand open sublinks"></i>
                            </button>
                        </div>
                        <div class="dropdown-menu dropdownSubMenuMob">



                            <ul class="nav flex-column " itemscope="itemscope"
                                itemtype="">

                                @foreach ($listpages as $page )
                                <li class="nav-item" itemprop="name"><a class="nav-link"
                                    href="{{ route('index.service', $page) }}" itemprop="url">
                                    {{$page->title}}</a></li>
                                @endforeach

                            </ul>



                        </div>
                    </li>


 --}}



                </ul>
            </nav>
        </div>
        <!-- END Menu mobile -->
        <script src="{{asset('certificate/js/newMenuMobi.js')}}"></script>
