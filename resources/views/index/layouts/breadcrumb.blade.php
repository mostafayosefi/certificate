
@if(isset($breadcrumb) && is_array($breadcrumb))
<div class="breadcrumb" id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12">
                <ul class="breadcrumbs" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">




@foreach($breadcrumb as $key=>$value)
@if ($value['title'])


                    <li>

                    @if(isset($value['class']) && $value['class'] == 'bcLink bcCurrentLink')
                    <a class="bcLink bcCurrentLink" href="{{ $value['url'] ?? '#' }}" itemprop="item">
                        <span>{{ $value['title'] }}</span>
                    </a>
                    @else
                    <a class="bcHome" href="{{ $value['url'] ?? '#' }}">
                            <span>{{ $value['title'] }}</span>
                        </a>
                    @endif


                    </li>



    @endif
    @endforeach


                </ul>
            </div>
        </div>
    </div>
</div>
@endif
