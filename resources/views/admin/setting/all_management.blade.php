@component('admin.layouts.content', [
    'title' => 'تنظیمات سایت ',
    'tabTitle' => 'تنظیمات سایت ',
    'breadcrumb' => [['title' => 'تنظیمات سایت ', 'class' => 'active']],
    ])









<div class="row"> 
	<div class="col-md-12">



		<!--begin::Card-->
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-pen icon-2x text-primary"></i></span>
                <h3 class="card-label">  ویرایش تنظیمات سایت </h3>
				</div>
			</div>
			<!--begin::Form-->


            <form class="forms-sample" method="POST"  action="{{ route('admin.setting.update_management', $setting) }}" >
                @csrf
				<div class="card-body">


                    @if(count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif
 






					<div class="form-group row">
						<label  class="col-2 col-form-label">عنوان سایت </label>
						<div class="col-10">
							<input class="form-control" name="title" type="text"  value="{{$setting->title}}" />
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">اینستاگرام </label>
						<div class="col-10">
							<input class="form-control" name="instagram" type="text"  value="{{$setting->instagram}}" />
						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">فیسبوک </label>
						<div class="col-10">
							<input class="form-control" name="facebook" type="text"  value="{{$setting->facebook}}" />
						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">توییتر </label>
						<div class="col-10">
							<input class="form-control" name="twitter" type="text"  value="{{$setting->twitter}}" />
						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">یوتیوب </label>
						<div class="col-10">
							<input class="form-control" name="youtube" type="text"  value="{{$setting->youtube}}" />
						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">تلفن </label>
						<div class="col-10">
							<input class="form-control" name="tell" type="text"  value="{{$setting->tell}}" />
						</div>
					</div>


					<div class="form-group row">
						<label  class="col-2 col-form-label">ایمیل </label>
						<div class="col-10">
							<input class="form-control" name="email" type="text"  value="{{$setting->email}}" />
						</div>
					</div>


  
 

					<div class="form-group row">
						<label  class="col-2 col-form-label">آدرس شرکت</label>
						<div class="col-10">
                            <textarea class="form-control" name="address"   rows="6">{{$setting->address}}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">توضیحات سایت</label>
						<div class="col-10">
                            <textarea class="form-control" name="description"   rows="6">{{$setting->description}}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">کلمات کلیدی</label>
						<div class="col-10">
                            <textarea class="form-control" name="keyword"   rows="6">{{$setting->keyword}}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">فوتر سایت</label>
						<div class="col-10">
                            <textarea class="form-control" name="fcopy"   rows="6">{{$setting->fcopy}}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">کدآنالتیک</label>
						<div class="col-10">
                            <textarea class="form-control" name="analatik"   rows="6">{{$setting->analatik}}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-2 col-form-label">کدپشتیبانی</label>
						<div class="col-10">
                            <textarea class="form-control" name="codetiket"   rows="6">{{$setting->codetiket}}</textarea>
						</div>
					</div>



 



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




    @endslot
@endcomponent
