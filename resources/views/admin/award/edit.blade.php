  @component('admin.layouts.content', [
      'title' => 'ویرایش لوگو فوتر',
      'tabTitle' => ' ویرایش لوگو فوتر',
      'breadcrumb' => [['title' => 'مشاهده لوگوهای فوتر   ', 'url' => route('admin.award.index')], ['title' => 'ویرایش لوگو فوتر  ',
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
                    <span class="card-icon"><i class="flaticon2-pen icon-2x text-primary"></i></span>
                <h3 class="card-label">  ویرایش لوگو فوتر </h3>
				</div>
			</div>
			<!--begin::Form-->


            <form class="forms-sample" method="POST" action="{{ route('admin.award.update', $award) }}"   id="kt_form"  enctype="multipart/form-data">
                @csrf
				<div class="card-body">


                    @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif



					<div class="form-group row">
						<label  class="col-4 col-form-label">نام </label>
						<div class="col-8">
							<input class="form-control" name="title" type="text" value="{{$award->title}}" />
						</div>
					</div>


                    @include('admin.layouts.table.avatar', [  'avatarimage' => $award->image , 'class'=>'image-input-wrapper' , 'style' => '' , 'id_av' => '1'  , 'label' => 'آپلود لوگو فوتر    '  ])


                    @method('PUT')
					<div class="row">
						<div class="col-4">
						</div>
						<div class="col-8">
							<button type="submit" class="btn btn-success mr-2">ویرایش</button>
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
 <script src="{{ asset('metronic/assets/js/pages/crud/forms/editors/summernote.js?v=7.0.6')}}"></script>
 @endslot
  @endcomponent
