
                    <!--begin::زیر هدر-->
                    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
                        <div
                            class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::اطلاعات-->

                            <div class="d-flex align-items-baseline flex-wrap mr-5">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold my-1 mr-5"> </h5>
                                <!--end::Page Title-->

                                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">


                                        @if(isset($breadcrumb) && is_array($breadcrumb))
                                        @foreach($breadcrumb as $key=>$value)
                                            @if ($value['title'])
                                                <li class="breadcrumb-item {{ $value['class'] ?? '' }}">
                                                    @if(isset($value['class']) && $value['class'] == 'active')
                                                        <span>{{ $value['title'] }}</span>
                                                    @else
                                                        <a href="{{ $value['url'] ?? '#' }}">
                                                            <span>{{ $value['title'] }}</span>
                                                        </a>
                                                    @endif
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif


                                    </ul>
                                    <!--end::Breadcrumb-->
                            </div>



                            <!--end::اطلاعات-->
                        </div>
                    </div>
                    <!--end::زیر هدر-->



