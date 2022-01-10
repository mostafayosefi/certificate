  @component('admin.layouts.content', [
      'title' => 'ایجاد اسلاید جدید',
      'tabTitle' => 'ایجاد اسلاید جدید',
      'breadcrumb' => [['title' => 'لیست اسلایدها', 'url' => route('admin.slider.index')], ['title' => 'ایجاد اسلاید جدید',
      'class' => 'active']],
      ])



@slot('style')
<link href="{{ asset('metronic/assets/css/pages/wizard/wizard-4.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
@endslot



<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">



		<!--begin::Card-->
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-add-square icon-2x text-success"></i></span>
                <h3 class="card-label">  ایجاد اسلاید جدید </h3>
				</div>
			</div>
			<!--begin::Form-->


            <form class="forms-sample" method="POST" action="{{ route('admin.slider.store') }}"   id="kt_form"   enctype="multipart/form-data" >
                @csrf
				<div class="card-body">


                    @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif

					<div class="form-group row">
						<label  class="col-2 col-form-label">نام اسلاید</label>
						<div class="col-10">
							<input class="form-control" name="name" type="text" value="{{ old('name') }}" />
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">تیتر اسلاید</label>
						<div class="col-10">
							<input class="form-control" name="title" type="text" value="{{ old('title') }}" />
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">متن اسلاید</label>
						<div class="col-10">
							<input class="form-control" name="text" type="text" value="{{ old('text') }}" />
						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">لینک اسلاید</label>
						<div class="col-10">
							<input class="form-control" name="link" type="text" value="{{ old('link') }}" />
						</div>
					</div>


                    @include('admin.layouts.table.avatar', [  'avatarimage' => '' , 'class'=>'image-input-wrapper' , 'style' => '' , 'id_av' => '1'  , 'label' => 'آپلود تصویر بزرگ اسلاید  '  ])


                    @include('admin.layouts.table.avatar', [  'avatarimage' => '' , 'class'=>'image-input-wrapper' , 'style' => 'image-input-circle'  , 'id_av' => '2'  , 'label' => 'آپلود تصویر موبایل اسلاید  '  ])




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
		<!--end::Card-->






    </div>
	<div class="col-md-2"></div>
</div>





@slot('script')
<script src="{{ asset('metronic/assets/js/pages/custom/user/upload_image.js?v=7.0.6')}}"></script>
 @endslot
  @endcomponent
