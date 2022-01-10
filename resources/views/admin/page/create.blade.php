  @component('admin.layouts.content', [
      'title' => 'ایجاد صفحه جدید',
      'tabTitle' => 'ایجاد صفحه جدید',
      'breadcrumb' => [['title' => 'لیست صفحات سایت', 'url' => route('admin.page.index')], ['title' => 'ایجاد صفحه جدید',
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
                    <span class="card-icon"><i class="flaticon2-add-square icon-2x text-success"></i></span>
                <h3 class="card-label">  ایجاد صفحه جدید </h3>
				</div>
			</div>
			<!--begin::Form-->


            <form class="forms-sample" method="POST" action="{{ route('admin.page.store') }}"   id="kt_form"   enctype="multipart/form-data" >
                @csrf
				<div class="card-body">


                    @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif

					<div class="form-group row">
						<label  class="col-2 col-form-label">عنوان</label>
						<div class="col-10">
							<input class="form-control" name="title" type="text" value="{{ old('title') }}" />
						</div>
					</div>




			<div class="form-group row">
				<label class="col-form-label text-right col-lg-2 col-sm-12">متن</label>
				<div class="col-lg-10 col-md-10 col-sm-12">
                    <textarea class="summernote" name="text"   id="kt_summernote_1"     rows="12">{{old('text')}}</textarea>
				</div>
			</div>




  @include('admin.layouts.table.avatar', [  'avatarimage' => '' , 'class'=>'image-input-wrapper' , 'style' => '' , 'id_av' => '1'  , 'label' => 'آپلود عکس صفحه  '  ])



					<div class="row">
						<div class="col-2">
						</div>
						<div class="col-10">
							<button type="submit" class="btn btn-success mr-2">ثبت</button>
						</div>
					</div>
            </div>
			</form>
		</div>


    </div>
</div>








      @slot('script')
      <script src="{{ asset('metronic/assets/js/pages/custom/user/upload_image.js?v=7.0.6')}}"></script>
     <script src="{{ asset('metronic/assets/js/pages/crud/forms/editors/summernote.js?v=7.0.6')}}"></script>
      @endslot
  @endcomponent
