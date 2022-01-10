@extends('admin.master')
@section('content')


@include('admin.layouts.breadcrumb',['breadcrumb'=>$breadcrumb,'title'=>$title])
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
        <!-- begin::page-header -->
        <!-- end::page-header -->

        <!-- begin::view errors -->
        <!-- end::view errors -->
        {{ $slot }}
    </div>
</div>
@endsection

@section('style')
    {{ $style ?? '' }}
@endsection

@section('script')
    {{ $script ?? '' }}
@endsection
