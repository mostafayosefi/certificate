@component('admin.layouts.content',[
    'title'=>'مشاهده صفحات سایت',
    'tabTitle'=>'مشاهده صفحات سایت ',
    'breadcrumb'=>[
            ['title'=>'مشاهده صفحات سایت','class' => 'active']
    ]])




@slot('style')
<link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.rtl.css?v=7.0.6') }}"  rel="stylesheet" type="text/css" />
@endslot





<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon"><i class="flaticon2-list-3 icon-2x text-primary"></i></span>
            <h3 class="card-label">  لیست صفحات سایت </h3>
        </div>
        <div class="card-toolbar">

             <a href="{{ route('admin.page.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>ایجاد صفحه جدید </a>
         </div>
    </div>
    <div class="card-body">
         <table class="table table-separate table-head-custom table-foot-custom table-checkable" id="kt_datatable">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>عنوان صفحه</th>
                    <th>تاریخ ایجاد</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>

            <tbody>



                @foreach($pages as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
<td>{{$admin->title}}</td>
<td>{{ date_frmat($admin->created_at) }}</td>

<td>

    @include('admin.layouts.table.statusacount', [$admin ,'route' =>
    route('admin.page.status', $admin->id ) , 'myname' => ' صفحه '.$admin->title.' ' ]) </td>

                        <td nowrap="">
                            <a href="{{ route('admin.page.edit', $admin) }}" class="btn btn-icon btn-outline-primary btn-circle btn-sm mr-2">
                                <i class="flaticon2-pen"></i></a>
                                @php $admin['title'] = $admin->title;  @endphp
                                @include('admin.layouts.table.modal', [$admin ,'route' => route('admin.page.destroy', $admin)  , 'myname' => $admin->title ])
                        </td>
                    </tr>
                @endforeach

                </tfoot>
        </table>
     </div>
</div>



  @slot('script')
  <script src="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.6') }}"></script>
  {{-- <script src="{{ asset('metronic/assets/js/pages/crud/datatables/basic/headers.js?v=7.0.6')}}"></script> --}}
  <script src="{{ asset('metronic/assets/js/pages/crud/datatables/advanced/footer-callback.js?v=7.0.6') }}"></script>

@endslot

@endcomponent
