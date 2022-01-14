@component('index.layouts.content', [
    'title' => 'Blogs',
    'tabTitle' => 'Blogs',
    'breadcrumb' => [
        ['title' => 'Home', 'url' => route('index.home'), 'class' => 'bcHome'],
        ['title' => 'Blogs', 'url' => route('index.blogs'), 'class' => 'bcHome'],
        ['title' => $blog->title, 'class'  => 'bcLink bcCurrentLink']],
    ])


@slot('slider')
 


@include('index.layouts.image_title', [  'title' => $blog->title , 'image_page' => $blog->image ])
 
{{-- 
<link href="{{asset('certificate/css/fulimagebg.css')}}" rel="stylesheet" />
@include('index.layouts.image_bgheader', [  'title' => $blog->title , 'image_page' => $blog->image ])
  --}}





@endslot



      <div id="mainIntroSec">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      <h1>{{$blog->title}}</h1>


                      @php
                      echo $blog->text;
                  @endphp


                  </div>
              </div>
 

 <hr>

              @foreach ($blogs->chunk(4) as $chunk)
              <div class="row"> 
                @foreach ($chunk as  $key => $blog)
                        
 <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 btsBoxWrap">
     <a href="{{route('index.blog', $blog->id ) }}">
    <article class="btsBoxContent">
        <div class="btsBoxImg"><img  src="{{$blog->image}}"  height="120px"></div>
        <div class="btsBoxTit"> {{$blog->title}}</div>
         <div class="btsBoxIntro"> </div>                        
        </article></a>
</div>
                          
          
@endforeach
</div>
@endforeach 






          </div>
      </div>








      @slot('script')
      @endslot
  @endcomponent
