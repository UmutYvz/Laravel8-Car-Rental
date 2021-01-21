{{--
<!-- banner-section start  -->
<section class="banner-section bg_img" data-background="assets/images/banner.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7" style="margin-top: 75px;margin-bottom: 75px;">

            </div>

        </div>
    </div>
</section>
<!-- banner-section end  --> --}}



{{-- <div class="main-carousel">
    @foreach ($slider as $item)
        <div class="carousel-cell">
            <img src="{{ Storage::url($item->image) }}" alt="" style="height: 500px">
        </div>
    @endforeach
</div> --}}

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="reservation-details-area">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            @foreach($slider as $key => $item)
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }} ">
                                    <a href="{{route('cardetail',['id'=>$item->id,'slug'=>$item->slug])}}"> <img src="{{ Storage::url($item->image) }}" alt="" class="d-block w-100"  style="max-height: 550px"></a>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    {{-- <a style="
                    width: 350px;
                    height: 45px;
                    padding-bottom: 5px;
                    padding-top: 10px;
                    padding-left:70px;
                margin-left:220px;
                color:white"  class="cmn-btn">Şimdi Kiralamak İçin Tıklayın!!!</a> --}}
                </div>
            </div>
            
        </div>
    </div>