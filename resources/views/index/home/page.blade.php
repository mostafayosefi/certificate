  @component('index.layouts.content', [
      'title' => 'Service',
      'tabTitle' => ' Service',
      'breadcrumb' => [['title' => 'Home', 'url' => route('index.home') , 'class' => 'bcHome'], ['title' => 'Service',
      'class' => 'bcLink bcCurrentLink']],
      ])


@slot('slider')

@include('index.layouts.image_title', [  'title' => $page->title , 'image_page' => $page->image ])


@endslot



      <div id="mainIntroSec">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      <h1>{{$page->title}}</h1>


                      @php
                      echo $page->text;
                  @endphp


                  </div>
              </div>
          </div>
      </div>








      @slot('script')
      @endslot
  @endcomponent
