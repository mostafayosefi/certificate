@component('index.layouts.content', [
    'title' => 'Home',
    'tabTitle' => ' Home',
    'breadcrumb' => [['title' => 'Home', 'url' => route('index.home') , 'class' => 'bcHome'], ['title' => 'My Page ',
    'class' => 'bcLink bcCurrentLink']],
    ])


@slot('slider')

<style>
    #slider iframe {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

</style>
<!-- Slider -->
<div class="mainContent" id="slider" style="max-height:600px;  ">
    <div class="rev_slider_wrapper fullwidthbanner-container" data-alias="vimeo-hero" data-source="gallery"
        id="rev_slider_1040_1_wrapper"
        style="margin:0px auto;background-color:#000000;padding:0px;margin-top:-50px;margin-bottom:0px">
        <div class="rev_slider fullwidthabanner" data-version="5.4.1" id="rev_slider_1040_1">
            <ul>

                @if ($sliders)
@foreach ($sliders as $key => $slider )

<li data-index="rs-1{{ $key + 1 }}" data-thumb="{{$slider->image_desktop}}"
data-transition="slotfade-horizontal">
<img alt="{{$slider->title}}"
    class="rev-slidebg" data-bgfit="cover" data-bgposition="right top"
    data-bgrepeat="no-repeat"
    data-lazyload="{{$slider->image_desktop}}"
    src="{{$slider->image_desktop}}" />
<div class="tp-caption tp-shape tp-shapewrapper" data-basealign="slide"
    data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
    data-height="full" data-type="shape" data-width="full" id="slide-2896-layer-1"
    style="z-index: 5; background-color: rgba(0, 0, 0, 0); border: none;">
</div>
<div class="rev_row_zone rev_row_zone_middle" id="slide-2896" style="z-index: 6;">
    <div class="tp-caption"
        data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
        data-type="row">
        <div class="tp-caption"
            data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
            data-type="column">
            <div class="tp-caption white" data-fontsize="['40','30','25','20']"
                data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;power3.inOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;power3.inOut&quot;}]"
                data-hoffset="80" data-lineheight="['40','30','25','20']"
                data-paddingleft="[140,80,40,20]" data-responsive="off"
                data-responsive_offset="off" data-type="text" data-voffset="0"
                data-whitespace="normal" data-width="['75%','80%','90%','100%']"
                data-x="left" data-y="middle" id="slide-2896-layer-2"
                style="z-index: 6; display: block;">
                <div class="slide--text">
                    <div class="w70">
                        <div class="sliderYellowLine">
                            <p class="sliderTitle1">  {{$slider->title}}</p>
                            <p class="sliderText blue">{{$slider->text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-caption"
        data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
        data-type="row">
        <div class="tp-caption"
            data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
            data-type="column">
            <div class="tp-caption" data-fontsize="['40','30','25','24']"
                data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;power3.inOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;power3.inOut&quot;}]"
                data-hoffset="80" data-lineheight="['40','30','25','24']"
                data-paddingleft="[140,80,40,20]" data-paddingtop="25" data-responsive="off"
                data-responsive_offset="off" data-textAlign="left" data-type="text"
                data-voffset="0" data-whitespace="normal"
                data-width="['75%','80%','90%','100%']" data-x="left" data-y="middle"
                id="slide-2896-layer-3" style="z-index: 7; display: block;">
                <div class="slide--cta">
                    <a class="btn btnYellow"
                        href="{{$slider->link}}"
                        style="display: inline-block; font-size: .5em; text-decoration: none"
                        target="_parent">
                        More information
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</li>

@endforeach
                @else

                @endif


            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    var tpj = jQuery;
    var revapi1040;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1040_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1040_1");
        } else {
            revapi1040 = tpj("#rev_slider_1040_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "/_files/revolution-slider/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                responsiveLevels: [1440, 992, 600, 450],
                visibilityLevels: [1440, 992, 600, 450],
                gridwidth: [1440, 992, 600, 450],
                gridheight: [600, 600, 600, 420],
                lazyType: "smart",
                shadow: 0,
                spinner: "spinner3",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off", // toggled to on (off)
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLimit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                },
                navigation: {
                    onHoverStop: "off",
                    arrows: {
                        enable: true,
                        style: "uranus",
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 600
                    },
                    bullets: {
                        enable: true,
                        style: "hermes",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 25,
                        space: 5,
                        hide_onleave: false
                    },
                    touch: {
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    }
                }
            });
        }
    }); /*ready*/
</script>






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



@endslot





<!-- Degree and certificates section -->
<a aria-hidden="true" class="anchor" id="programs"></a>



@foreach ($spotlites as $key => $spotlite)
@if($spotlite->id=='1')

<div class="homeSection" id="degreeCert">
    <div class="container">
        <div class="row">

            @php echo $spotlite->text; @endphp

        </div>
    </div>
</div>

@endif
@if($spotlite->id=='2')

<div class="homeSection" id="hp-recognitions">
    <div class="container">
        <div class="row">
            <div class="col center">



            @php echo $spotlite->text; @endphp
        </div>
    </div>
    </div>
</div>
@endif
@if($spotlite->id=='3')


<div id="featureSec">
<div class="container">
    <div class="row">


        @php echo $spotlite->text; @endphp

                </div>
  </div>
</div>


@endif

@endforeach









      @slot('script')
      @endslot
  @endcomponent
