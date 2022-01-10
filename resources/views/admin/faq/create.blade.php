  @component('admin.layouts.content', [
      'title' => 'ایجاد سوال جدید',
      'tabTitle' => 'ایجاد سوال جدید',
      'breadcrumb' => [['title' => 'لیست سوالات متداول', 'url' => route('admin.faq.index')], ['title' => 'ایجاد سوال جدید',
      'class' => 'active']],
      ])






<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">



		<!--begin::Card-->
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-add-square icon-2x text-success"></i></span>
                <h3 class="card-label">  ایجاد سوال جدید </h3>
				</div>
			</div>
			<!--begin::Form-->


            <form class="forms-sample" method="POST" action="{{ route('admin.faq.store') }}" >
                @csrf
				<div class="card-body">


                    @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif

					<div class="form-group row">
						<label  class="col-2 col-form-label">سوال</label>
						<div class="col-10">
							<input class="form-control" name="question" type="text" value="{{ old('question') }}" />
						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">پاسخ</label>
						<div class="col-10">
                            <textarea class="form-control" name="answer"   rows="3">{{old('answer')}}</textarea>
						</div>
					</div>



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
      @endslot
  @endcomponent
