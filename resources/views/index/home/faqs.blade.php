@component('index.layouts.content', [
    'title' => 'FAQS',
    'tabTitle' => ' FAQS',
    'breadcrumb' => [['title' => 'Home', 'url' => route('index.home') , 'class' => 'bcHome'], ['title' => 'FAQS ',
    'class' => 'bcLink bcCurrentLink']],
    ])


@slot('slider')


@include('index.layouts.image_title', [  'title' => 'Faqs' , 'image_page' => $txtdese->image ])

@endslot




    <div id="mainIntroSec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <h1>Faqs</h1>

                    @php
                        echo $txtdese->text;
                    @endphp
                </div>
            </div>
        </div>
    </div>






    <!-- main content -->
    <div class="mainCont">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">


                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="panel-group newAccordion" id="newAccordion">

                                @foreach ($faqs as $faq)

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title accPanelTitBerk"><a
                                                class="accordion-toggle btnTitLink btn-block" data-parent="#newAccordion"
                                                data-toggle="collapse" href="#collapseOne{{$faq->id}}">{{$faq->question}}</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapseOne{{$faq->id}}">
                                        <div class="panel-body">
                                            {{$faq->answer}}

                                        </div>
                                    </div>
                                </div>

                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end main content -->








    @slot('script')
    @endslot
@endcomponent
