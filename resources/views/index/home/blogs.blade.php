  @component('index.layouts.content', [
      'title' => 'Blogs',
      'tabTitle' => 'Blogs',
      'breadcrumb' => [['title' => 'Home', 'url' => route('index.home'), 'class' => 'bcHome'], ['title' => 'Blogs', 'class'
      => 'bcLink bcCurrentLink']],
      ])


      @slot('slider')



      @endslot



                  <!-- bts feature section -->
                  <div class="container">
                      <div class="row align-items-center">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <h2 class="btsTit">All Blogs</h2>
                          </div>
                      </div>
                  </div>
                  <div class="btsFeature">
                      <div class="container">
                          <div class="row">

                            @foreach ($blogs as $key => $blog )

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <a class="btsLinkWrapper2"
                                    href="{{route('index.blog', $blog->id ) }}" target="_top">
                                    <div class="storiesCont center btsImg">
                                        <img alt="woman in a zoom meeting" class="imgRes dramaPhoto"
                                            src="{{$blog->image}}" height="200px" />
                                        <p class="todStoTxtInv">{{$blog->title}}</p>
                                    </div>
                                </a>
                            </div>

                            @endforeach

                          </div>
                      </div>
                  </div>
                  <!-- end bts feature section -->











      @slot('script')
      @endslot
  @endcomponent
