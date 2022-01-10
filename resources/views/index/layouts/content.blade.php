@extends('index.master')

@section('slider')
    {{ $slider ?? '' }}
@endsection

@section('content')

@include('index.layouts.breadcrumb',['breadcrumb'=>$breadcrumb,'title'=>$title])
        {{ $slot }}
@endsection

@section('style')
    {{ $style ?? '' }}
@endsection

@section('script')
    {{ $script ?? '' }}
@endsection
