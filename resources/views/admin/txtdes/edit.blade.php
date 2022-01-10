  @component('admin.layouts.content', [
      'title' => 'ویرایش متن پیش فرض',
      'tabTitle' => ' ویرایش متن پیش فرض  ',
      'breadcrumb' => [['title' => 'مدیریت متن های پیش فرض', 'url' => route('admin.setting.txtdes_management')], ['title' => 'ویرایش متن پیش فرض  ',
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
                <h3 class="card-label">  {{$txtdese->title}} </h3>
				</div>
			</div>
			<!--begin::Form-->


            <form class="forms-sample" method="POST" action="{{ route('admin.setting.txtdes_management_update', $txtdese) }}"   id="kt_form"  enctype="multipart/form-data" >
                @csrf
				<div class="card-body">


                    @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif
  



                    <div class="form-group">
                        <label>&nbsp;</label>
                    <textarea class="summernote" name="text"   id="kt_summernote_1"     rows="12">{{$txtdese->text}}</textarea>
				</div> 
 
 
                    @include('admin.layouts.table.avatar', [  'avatarimage' => $txtdese->image , 'class'=>'image-input-wrapper' , 'style' => '' , 'id_av' => '1'  , 'label' => 'آپلود عکس '  ])


                    @method('PUT')
					<div class="row"> 
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
