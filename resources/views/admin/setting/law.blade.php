@component('admin.layouts.content', [
    'title' => 'قوانین سایت  ',
    'tabTitle' => 'قوانین سایت  ',
    'breadcrumb' => [['title' => 'قوانین سایت  ', 'class' => 'active']],
    ])




@slot('style') 

@endslot







<div class="row">
	<div class="col-md-12">



		<!--begin::Card-->
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-pen icon-2x text-primary"></i></span>
                <h3 class="card-label">  قوانین سایت </h3>
				</div>
			</div>
			<!--begin::Form-->


            <form class="forms-sample" method="POST" action="{{ route('admin.setting.update_laws', $setting) }}"   id="kt_form"  enctype="multipart/form-data" >
                @csrf
				<div class="card-body">


                    @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif
  
 

			<div class="form-group">
                <label>&nbsp;</label>
                     <textarea class="summernote" name="text"   id="kt_summernote_1"     rows="12">{{$setting->law->text}}</textarea> 
			</div>
 
 
 

                    @method('PUT')
					<div class="row"> 
						<div class="col-12">
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
 <script src="{{ asset('metronic/assets/js/pages/crud/forms/editors/summernote.js?v=7.0.6')}}"></script>

@endslot


@endcomponent
