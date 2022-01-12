<!-- Recognitions section -->
<div class="homeSection" id="hp-recognitions">
    <div class="container">
        <div class="row">
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

@foreach ($awards as $award )

<div class="col-6 col-sm-6 col-md-1 col-lg-1" id="applyTrigg">
        <img  class="img-fluid" src="{{$award->image}}" />
</div>
@endforeach




        </div>




    </div>
</div>




<footer id="footer">
    <div class="container">



        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

            <ul class="socialIcons">
                <li class="facebook">
                    <a href="{{ $setting->facebook }}">
                        <i class="fab fa-facebook-f"></i>Facebook
                    </a>
                </li>
                <li class="twitter">
                    <a href="{{ $setting->twitter }}">
                        <i class="fab fa-twitter"></i>Twitter
                    </a>
                </li>
                <li class="LinkedIn">
                    <a href="">
                        <i class="fab fa-linkedin-in"></i>LinkedIn
                    </a>
                </li>
                <li class="instagram">
                    <a href="{{ $setting->instagram }}">
                        <i class="fab fa-instagram"></i>Instagram
                    </a>
                </li>
                <div class="mobSpacer mob"></div>
                <li class="blog">
                    <a href="">
                        <i class="fas fa-blog"></i>Blog
                    </a>
                </li>
                <li class="snapchat">
                    <a href="">
                        <i class="fab fa-snapchat-ghost"></i>Snapchat
                    </a>
                </li>
                <li class="YouTube">
                    <a href="{{ $setting->youtube }}">
                        <i class="fab fa-youtube"></i>YouTube
                    </a>
                </li>
            </ul>
            <div class="footerInfoTxt sep50">


                <p class="footerTxt">{{ $setting->fcopy }}</p>
                <br />


            </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="footerLinks">


                <p class="footerTit2">QUICK LINKS</p>
                <ul>
                    <li><a href="{{route('index.home')}}">Home</a></li>
                    <li><a href="{{route('index.tracking')}}">Tracking</a></li>
                    <li><a href="{{route('index.faqs')}}">Faqs</a></li>
                    <li><a href="{{route('index.blogs')}}">Blogs</a></li>
                    <li><a href="{{route('index.contactus')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="footerLinks">


                <p>&#160;</p>
                <p class="footerTit2">Myservice</p>
                <ul>
                    @foreach ($limit_listpages as $page)
                        <li><a href="{{ route('index.service', $page) }}">{{ $page->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </div>
</footer>
