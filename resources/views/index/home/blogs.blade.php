  @component('index.layouts.content', [
      'title' => 'Blogs',
      'tabTitle' => 'Blogs',
      'breadcrumb' => [['title' => 'Home', 'url' => route('index.home'), 'class' => 'bcHome'], ['title' => 'Blogs', 'class'
      => 'bcLink bcCurrentLink']],
      ])


      @slot('slider')



      @endslot




      <div class="homeSection" id="todayStories">
        <div class="container-fluid">


          @foreach ($blogs->chunk(3) as $chunk)
            <div class="row no-gutters">

                @foreach ($chunk as  $key => $blog)
         <div class="col-12 col-sm-6 col-md-4 col-lg-4 " current-page="pagination.current" ng-repeat="person in filteredFaculty = (faculty | filter:search.departments:deptFilter | filter:search) | orderBy:sortProperty:reverse | itemsPerPage:pageSize">
            <div class="panel panel-default">
                <div class="panel-body">

                    <a class="btsLinkWrapper"
                    href="{{route('index.blog', $blog->id ) }}">
                    <div class="{{ fmod_blog($key + 1) }} center btsImg">
                        <img alt="{{$blog->title}}" class="imgRes dramaPhoto"
                            src="{{$blog->image}}" height="240px"  />


                        <p style="background-color: rgba(67, 65, 180, 0.582); color:#fff "> {{$blog->title}}</p>

                    </div>
                </a>

                </div>
                <!-- ngIf: person.tags -->
            </div>
        </div>
        @endforeach


    </div>

    @endforeach
</div>
</div>



 
      @slot('script')
      @endslot
  @endcomponent
