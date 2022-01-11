

@if($image_page)
<div class="container" style="max-height:600px;  ">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 bannerWrap"  >
            <div class="bannerCont-r">
                <img alt="{{$title}}" class="center img-fluid des"
                style="margin:0px auto;background-color:#000000;padding:0px;margin-top:-49px;margin-bottom:0px"
                    src="{{asset($image_page)}}" />
                <img alt="{{$title}}" class="center img-fluid mob"
                    src="{{asset($image_page)}}" />
            </div>
            <div class="bannerCont-l">
                <div class="sliderCaption2">

                  <span class="captionTitleTxt2" style="background-color: rgba(0, 0, 0, 0.808); color:darkkhaki " >{{$title}}</span>

                </div>
            </div>
        </div>
    </div>
</div>
</div>



      <!-- CTA bar -->
      <div class="hp-cta-bar">
        <div class="row no-gutters ">





            <div class="hide col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>





            <div class="des col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="hp-cta-bar-sect">
                    <a href="{{route('index.home')}}"  class="">
                    <i aria-hidden="true" class="fas fa-home"></i>Home </a>
                </div>
            </div>






            <div class="des col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="hp-cta-bar-sect"><a href="{{route('index.tracking')}}"><i aria-hidden="true"
                            class="fa fa-search"></i>Tracking</a></div>
            </div>





            <div class="des col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="hp-cta-bar-sect"><a href="{{route('index.faqs')}}"><i aria-hidden="true"
                            class="fas fa-question-circle"></i>Faqs</a></div>
            </div>






            <div class="mob col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div id="livechatV2Btn"></div>
            </div>





            <div class="mob col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="hp-cta-bar-sect2"><a href="{{route('index.blogs')}}"><i aria-hidden="true"
                            class="fas fa-file-export"></i>Blog</a></div>
            </div>


        </div>
    </div>
    <!-- end CTA bar -->



@endif




