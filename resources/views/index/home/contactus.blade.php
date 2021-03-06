  @component('index.layouts.content', [
      'title' => 'Contact Us',
      'tabTitle' => 'Contact Us',
      'breadcrumb' => [['title' => 'Home', 'url' => route('index.home'), 'class' => 'bcHome'], ['title' => 'Contact Us',
      'class' => 'bcLink bcCurrentLink']],
      ])

      @slot('style')
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      @endslot

      @slot('slider')

          @include('index.layouts.image_title', [ 'title' => 'Contact Us' , 'image_page' => $txtdese->image ])

      @endslot



      <div id="mainIntroSec">
          <div class="container">





 
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">



                      <style>
                          .active {
                              background-color: #FFF;
                              color: #363c41;
                          }

                          .nav-pills>li>a {
                              background-color: #E9ECEF;
                              text-decoration: none;
                          }

                          .nav-pills>li>a:hover {
                              background-color: #172e81;
                              color: white;
                              text-decoration: none;
                          }

                          .nav-pills>li.active>a,
                          .nav-pills>li.active>a:focus,
                          .nav-pills>li.active>a:hover {
                              background-color: #172E81;
                          }

                          ul {
                              margin-bottom: 3%;
                          }

                          .nav-pills {
                              margin-top: 30px;
                          }

                          .red {
                              color: red;
                          }

                      </style>
                      <div>
                          <h1>Contact Us</h1>
                          <ul class="nav nav-pills">
                              <li class="active"><a class="facRentLink" data-toggle="pill" href="#NYC">Contact Us</a></li>
                              <li class=""><a class="facRentLink" data-toggle="pill" href="#NWK">Contact Information</a></li> 
                          </ul> 
                          <hr>
                          <div class="tab-content">
                              <div class="tab-pane fade active in" id="NYC">

                                 
                                        <h2>Contact Us</h2>
                  
                                        @php
                                            echo $txtdese->text;
                                        @endphp
                  
                  
                  
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-6">
                  
                  
                                            <form method="POST" action="{{ route('index.contact.store') }}">
                  
                                                @csrf
                  
                                                @if (count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif
                  
                                                <input class="form-control" placeholder="Fullname" type="text" name="name"
                                                    value="{{ old('name') }}" required>
                  
                                                <br>
                                                <input class="form-control" placeholder="email" type="text" name="email"
                                                    value="{{ old('email') }}" required>
                  
                                                <br>
                  
                  
                  
                  
                                                <textarea class="form-control" rows="8" name="text" required>{{ old('text') }}</textarea>
                                                <br>
                  
                                                <div class="row">
                                                    <div class="captcha">
                  
                                                        <div class="col-12 col-sm-6 ">
                                                            <input class="form-control" placeholder="Enter Captcha" name="captcha"
                                                                id="captcha" required>
                  
                                                        </div>
                                                        <div class="col-12 col-sm-6  ">
                                                            <span>{!! captcha_img() !!}</span>
                                                            <button type="button" class="btn btn-danger" class="refresh-captcha"
                                                                id="refresh-captcha">
                                                                &#x21bb;
                                                            </button>
                                                        </div>
                  
                  
                                                    </div>
                                                </div>
                                                @method('PUT')
                                                <br><button class="btn lg" type="submit">Send </button>
                                                <h1>&nbsp;</h1>
                                            </form>
                                        </div>
                  
                  
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-6"></div>
                  
                   


                                  
                              </div>

                              <div class="tab-pane fade" id="NWK"> 
                                  <h2>Contact Information</h2>
                  
                                        @php
                                            echo $infocontact->text;
                                        @endphp



@include('index.layouts.image_title', [  'title' => '' , 'image_page' => $infocontact->image ])
 

                  
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>



 




          </div>
      </div>







      @slot('script')

          <script type="text/javascript">
              $('#refresh-captcha').click(function() {
                  $.ajax({
                      type: 'GET',
                      url: '../refresh-captcha',
                      success: function(data) {
                          $(".captcha span").html(data.captcha);
                      }
                  });
              });
          </script>
      @endslot
  @endcomponent
