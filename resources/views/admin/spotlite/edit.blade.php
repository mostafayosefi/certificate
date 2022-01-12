  @component('admin.layouts.content', [
    'title'=>'مدیریت اسپوتلایتها',
    'tabTitle'=>'مدیریت اسپوتلایتها ',
      'breadcrumb' => [['title' => 'لیست اسپوتلایتها ', 'url' => route('admin.manegement.spotlites')], ['title' => 'ویرایش اسپوتلایت  ',
      'class' => 'active']],
      ])


@slot('style')
<link href="{{ asset('metronic/assets/css/pages/wizard/wizard-4.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
@endslot














      <div class="row">
        <div class="col-md-12">



            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon"><i class="flaticon2-pen icon-2x text-primary"></i></span>
                    <h3 class="card-label">  {{$spotlite->title}} </h3>
                    </div>
                </div>
                <!--begin::Form-->


                <form class="forms-sample" method="POST" action="{{ route('admin.manegement.spotlites_update', $spotlite) }}"   id="kt_form"  enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">


                        @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif



                <div class="form-group row">
                    <label class="col-form-label text-right ">متن</label>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea class="summernote" name="text"   id="kt_summernote_1"     rows="12">{{$spotlite->text}}</textarea>
                    </div>
                </div>
                        @include('admin.layouts.table.avatar', [  'avatarimage' => $spotlite->image , 'class'=>'image-input-wrapper' , 'style' => '' , 'id_av' => '1'  , 'label' => 'آپلود عکس اسپوتلایت'  ])

                        
					<div class="form-group row">
						<label  class="col-2 col-form-label">لینک عکس</label>
						<div class="col-10">
							<input class="form-control"  type="text"  value="{{asset($spotlite->image)}}" />
						</div>
					</div>


                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mr-2">ویرایش</button>
                            </div>
                        </div> 
                </form>
            </div>
            <!--end::Card-->






        </div>
    </div>











@slot('script')
<script src="{{ asset('metronic/assets/js/pages/custom/user/upload_image.js?v=7.0.6')}}"></script>
 <script src="{{ asset('metronic/assets/js/pages/crud/forms/editors/summernote.js?v=7.0.6')}}"></script>

@endslot

  @endcomponent
