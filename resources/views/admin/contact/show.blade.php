  @component('admin.layouts.content', [
      'title' => 'پیام کاربر',
      'tabTitle' => ' پیام کاربر',
      'breadcrumb' => [['title' => 'مشاهده پیامهای کاربران ', 'url' => route('admin.contact.index')], ['title' => 'پیام کاربر  ',
      'class' => 'active']],
      ])






<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">



		<!--begin::Card-->
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-pen icon-2x text-primary"></i></span>
                <h3 class="card-label">  پیام کاربر </h3>
				</div>
			</div>
			<!--begin::Form-->


            
            <div class="card-body">
                <!--begin::Scroll-->
                <div class="scroll scroll-pull" data-height="375" data-mobile-height="300" style="height: auto; overflow: hidden;">
                    <!--begin::پیامs-->
                    <div class="messages">
                        <!--begin::پیام In-->
                        <div class="d-flex flex-column mb-5 align-items-start">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-40 mr-3">
                                    <img alt="Pic"  src="{{ asset('metronic/assets/media/svg/avatars/011-boy-5.svg')}}" >
                                </div>
                                <div>
                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">{{$contact->name}}  </a>
                                   
                                </div>
                            </div>
                            <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                              {{$contact->text}}
                            </div>
                            <span class="text-muted font-size-sm"> {{ date_frmat($contact->created_at) }}  </span>
                            <span class="text-muted font-size-md"> {{$contact->email}}  </span>

                        </div>
                        <!--end::پیام In-->

                        

                        

                        
                    </div>
                    <!--end::پیامs-->
                </div>
                <!--end::Scroll-->
            </div>







		</div>
		<!--end::Card-->






    </div>
	<div class="col-md-2"></div>
</div>




















      @slot('script')
      @endslot
  @endcomponent
