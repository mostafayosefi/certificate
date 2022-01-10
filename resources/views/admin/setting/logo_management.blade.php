@component('admin.layouts.content',[
    'title'=>'مدیریت لوگو و هدر  ',
    'tabTitle'=>'مدیریت لوگو و هدر ',
    'breadcrumb'=>[
            ['title'=>'مدیریت لوگو و هدر','class' => 'active']
    ]])



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
                <h3 class="card-label">  تنظیمات هدر و لوگو   </h3>
				</div>
			</div>
			<!--begin::Form-->


            <form class="forms-sample" method="POST" action="{{ route('admin.setting.update_logo', $setting) }}"   id="kt_form"  enctype="multipart/form-data" >
                @csrf
				<div class="card-body">


                    @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif
 
  
                    @include('admin.layouts.table.avatar', [  'avatarimage' => $setting->favicon , 'class'=>'image-input-wrapper' , 'style' => 'image-input-circle' , 'id_av' => '1'  , 'label' => 'آپلود فایوآیکن سایت'   ])
                    @include('admin.layouts.table.avatar', [  'avatarimage' => $setting->logo , 'class'=>'image-input-wrapper' , 'style' => '' , 'id_av' => '2'  , 'label' => 'آپلود لوگو سایت'  ])
 


                    @method('PUT')
					<div class="row">
						<div class="col-2">
						</div>
						<div class="col-10">
							<button type="submit" class="btn btn-success mr-2">ویرایش</button>
						</div>
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
