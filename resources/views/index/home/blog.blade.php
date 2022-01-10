  @component('index.layouts.content', [
      'title' => 'Blogs',
      'tabTitle' => 'Blogs',
      'breadcrumb' => [
          ['title' => 'Home', 'url' => route('index.home'), 'class' => 'bcHome'],
          ['title' => 'Blogs', 'url' => route('index.blogs'), 'class' => 'bcHome'],
          ['title' => $blog->title, 'class'  => 'bcLink bcCurrentLink']],
      ])


      @slot('slider')



      @endslot



                                                                                                                                                                                                                                   <!-- Main content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <!-- left col -->
        <div class="btsLeftCol publiCol">
            <p class="btsCatTitle">List All Blog</p>
@foreach ($blogs as $listblog )

<p><a href="{{route('index.blog', $listblog->id ) }}" target="_top">{{$listblog->title}}</a></p>
@endforeach

        </div>
        <!-- end left col -->
      </div>
      <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <!-- main stories grid (6 per row)-->
        <div class="row">

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 btsBoxWrap">
                        <article class="btsBoxContent">
                             <div class="btsBoxTit"><h2>{{$blog->title}}</h2></div>
<hr>
@php echo $blog->text; @endphp

                            </div>




                    </div>
        <!-- end main stories grid -->
        <a class="loadmoreBtn" href="{{route('index.blogs')}}">VIEW ALL BLOGS</a>
      </div>
    </div>
  </div>







      @slot('script')
      @endslot
  @endcomponent
