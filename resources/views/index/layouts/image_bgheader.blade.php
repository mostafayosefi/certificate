
<style>
    @media screen and (max-width: 992px) {
        .page-header-bg {
            height: 100%;
            margin: 0px auto;
            background-color: #000000;
            padding: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            max-width: 100%;
            height: auto;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
            border: 0;
        }
    }

</style>
<style>
    @media screen and (min-width: 992px) {
        .page-header-bg {
            margin-top: -100px;
            margin-bottom: 0px;
            max-width: 100%;
            height: auto;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
            border: 0;

        }
    }

</style>



<div class="page-header " id="post-header">
    <div class="page-header-bg"   style="background-image: url({{ asset($image_page . '') }})"    ></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
           <div class="post-category">
                                            </div>
                     <h1 class="bts-bannerTitle">{{$title}}</h1>
                     
                            </div>
        </div>
    </div>
</div>