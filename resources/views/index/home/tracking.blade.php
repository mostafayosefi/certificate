  @component('index.layouts.content', [
      'title' => 'Tracking',
      'tabTitle' => 'Tracking',
      'breadcrumb' => [['title' => 'Home', 'url' => route('index.home') , 'class' => 'bcHome'], ['title' => 'Tracking',
      'class' => 'bcLink bcCurrentLink']],
      ])


@slot('slider')



@endslot



      <div id="mainIntroSec">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Tracking</h1>

                    @php
                        echo $txtdese->text;
                    @endphp


                              <div class="row">
                                <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                                <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                                    <h1 class="searchPageTitle">Search for evidence</h1>
                                    <form   method="POST" action="{{ route('index.tracking.result') }}"  class="searchForm">
                                        @csrf
                                        <div class="form-group">
                                            <label for="searchInput">Search</label>
                                            <input aria-label="search" class="form-control" id="searchInput"   placeholder="type tracking code" name="codetracking" type="search" value="" required/>
                                            <span class="input-group-addon">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
                                        @method('PUT')
                                        <button class="btn btnYellow" type="submit">Search
                                            @if($tracking)
                                            {{$tracking->id}}
                                            @endif
                                        </button>
                                    </form>


@if($tracking)

@include('index.layouts.image_tracking', [  'title' => 'Contact Us' , 'image_page' => $tracking->image ])
@endif

                                </div>
                                <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                            </div>







                  </div>
              </div>
          </div>
      </div>







      @slot('script')
      @endslot
  @endcomponent
