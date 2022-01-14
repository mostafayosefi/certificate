  @component('admin.layouts.content', [
      'title' => 'پروفایل مدیریت',
      'tabTitle' => ' پروفایل مدیریت',
      'breadcrumb' => [['title' => 'داشبورد مدیریت', 'url' => route('admin.faq.index')], ['title' => 'پروفایل مدیریت ',
      'class' => 'active']],
      ])




      @slot('style')
          <link href="{{ asset('metronic/assets/css/pages/wizard/wizard-4.rtl.css?v=7.0.6') }}" rel="stylesheet"
              type="text/css" />

      @endslot





      <div class="d-flex flex-column-fluid">
          <!--begin::Container-->
          <div class=" container ">
              <!--begin::پروفایل اطلاعات شخصی-->
              <div class="d-flex flex-row">



                @include('admin.layouts.table.sidebar_profile', [$profile,'route' => route('admin.page.create')  , 'myname' => $profile->name ])







                  <!--begin::Content-->
                  <div class="flex-row-fluid ml-lg-8">
                      <!--begin::Card-->
                      <div class="card card-custom card-stretch">
                          <!--begin::Header-->
                          <div class="card-header py-3">
                              <div class="card-title align-items-start flex-column">
                                  <h3 class="card-label font-weight-bolder text-dark">اطلاعات شخصی</h3>
                                  <span class="text-muted font-weight-bold font-size-sm mt-1">اطلاعات شخصی خود را به روز
                                      کنید</span>
                              </div>
                          </div>
                          <!--end::Header-->

                          <!--begin::Form-->
                          <form class="forms-sample" method="POST" action="{{ route('admin.profile.edit') }}"
                              id="kt_form" enctype="multipart/form-data">
                              @csrf
                              <!--begin::Body-->
                              <div class="card-body">
                                  <div class="row">
                                      <label class="col-xl-3"></label>
                                      <div class="col-lg-9 col-xl-6">
                                          @if (count($errors) > 0) <x-alert type="danger" :message="$errors"/>@endif
                                      </div>
                                  </div>





                                  <div class="form-group row">
                                      <label class="col-xl-3 col-lg-3 col-form-label text-right">نام و نام خانوادگی</label>
                                      <div class="col-lg-9 col-xl-6">
                                          <input class="form-control form-control-lg form-control-solid" name="name"
                                              type="text" value="{{ $profile->name }}">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-xl-3 col-lg-3 col-form-label text-right">نام کاربری</label>
                                      <div class="col-lg-9 col-xl-6">
                                          <input class="form-control form-control-lg form-control-solid" name="username"
                                              type="text" value="{{ $profile->username }}">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-xl-3 col-lg-3 col-form-label text-right">نام شرکت</label>
                                      <div class="col-lg-9 col-xl-6">
                                          <input class="form-control form-control-lg form-control-solid" name="company"
                                              type="text" value="{{ $profile->company }}">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-xl-3 col-lg-3 col-form-label text-right"> تلفن</label>
                                      <div class="col-lg-9 col-xl-6">
                                          <div class="input-group input-group-lg input-group-solid">
                                              <div class="input-group-prepend"><span class="input-group-text"><i
                                                          class="la la-phone"></i></span></div>
                                              <input type="text" class="form-control form-control-lg form-control-solid"
                                                  name="tell" value="{{ $profile->tell }}" placeholder="تلفن">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-xl-3 col-lg-3 col-form-label text-right">نشانی پست
                                          الکترونیکی</label>
                                      <div class="col-lg-9 col-xl-6">
                                          <div class="input-group input-group-lg input-group-solid">
                                              <div class="input-group-prepend"><span class="input-group-text"><i
                                                          class="la la-at"></i></span></div>
                                              <input type="text" class="form-control form-control-lg form-control-solid"
                                                  name="email" value="{{ $profile->email }}" placeholder="پست الکترونیک">
                                          </div>
                                      </div>
                                  </div>

                                  @method('PUT')

                                  @include('admin.layouts.table.avatar', [ 'avatarimage' => $profile->image ,
                                  'class'=>'image-input-wrapper' , 'style' => '' , 'id_av' => '1' , 'label' => 'آپلود عکس
                                  پروفایل' ])

                                  <div class="card-toolbar">
                                      <button type="submit" class="btn btn-success mr-2">ذخیره تغییرات</button>
                                  </div>




                              </div>
                              <!--end::Body-->
                          </form>
                          <!--end::Form-->
                      </div>
                  </div>
                  <!--end::Content-->
              </div>
              <!--end::پروفایل اطلاعات شخصی-->
          </div>
          <!--end::Container-->
      </div>


















      @slot('script')
          <script src="{{ asset('metronic/assets/js/pages/custom/user/upload_image.js?v=7.0.6') }}"></script>
          <script src="{{ asset('metronic/assets/js/pages/crud/forms/editors/summernote.js?v=7.0.6') }}"></script>

      @endslot



  @endcomponent
