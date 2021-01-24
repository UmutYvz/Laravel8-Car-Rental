@php
$setting = \App\Http\Controllers\HomeController::getSetting();

@endphp
@extends('layouts.home')

@section('title', $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords', $setting->keywords)


@section('content')
    <!-- search-section start -->
    <section class="search-section" style="padding-top: 30px; margin-bottom:40px; margin-left:250px;margin-right:auto">
        <div class="container justify-content-center">
            @include('home._slider')
        </div>
    </section>



    <!-- search-section end -->
    <!-- choose-car-section start -->

    <section class="choose-car-section pb-120 section-bg">
        <div class="container">
            {{-- @include('home._slider') --}}
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title" style="color: #4c6aff">en son eklenenler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-car-slider owl-carousel">

                        @foreach ($last as $item)
                            <div class="car-item" >
                                <div class="thumb">
                                    <img src="{{ Storage::url($item->image) }}" alt="image" style="min-height: 270px">
                                </div>
                                <div class="car-item-body">
                                    <div class="content">
                                        <h4 class="title">{{ $item->model }} {{ $item->brand }}</h4>
                                        <span class="price">start form <span style="color: #4c6aff;font-weight:bold">
                                                ${{ $item->price }} </span> per day</span>
                                        <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                                        <a href="{{ route('cardetail', ['id' => $item->id, 'slug' => $item->slug]) }}"
                                            class="cmn-btn">rent car</a>
                                    </div>
                                    <div class="car-item-meta">
                                        <ul class="details-list">
                                            <li><i class="fa fa-car"></i>{{ $item->model }} {{ $item->year }}</li>
                                            <li><i class="fa fa-sliders"></i>{{ $item->gear_type }}</li>
                                            <li><i class="fa fa-sliders"></i>{{ $item->engine_power }}hp</li>
                                            <li><i class="fa fa-sliders"></i>{{ $item->fuel_type }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- car-item end -->
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>
    <!-- choose-car-section end -->

    <!-- choose-car-section start -->
    <section class="choose-car-section pb-120 section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title" style="color: #4c6aff">rasgele araçlar</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-car-slider owl-carousel">

                        @foreach ($picked as $item)
                            <div class="car-item">
                                <div class="thumb">
                                    <img src="{{ Storage::url($item->image) }}" alt="image" style="min-height: 270px">
                                </div>
                                <div class="car-item-body">
                                    <div class="content">
                                        <h4 class="title">{{ $item->model }} {{ $item->brand }}</h4>
                                        <span class="price">start form <span style="color: #4c6aff;font-weight:bold">
                                            ${{ $item->price }} </span> per day</span>
                                        <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                                        <a href="{{ route('cardetail', ['id' => $item->id, 'slug' => $item->slug]) }}"
                                            class="cmn-btn">rent car</a>
                                    </div>
                                    <div class="car-item-meta">
                                        <ul class="details-list">
                                            <li><i class="fa fa-car"></i>{{ $item->model }} {{ $item->year }}</li>
                                            <li><i class="fa fa-sliders"></i>{{ $item->gear_type }}</li>
                                            <li><i class="fa fa-sliders"></i>{{ $item->engine_power }}hp</li>
                                            <li><i class="fa fa-sliders"></i>{{ $item->fuel_type }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- car-item end -->
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>
    <!-- choose-car-section end -->

    <!-- features-section start -->
    <section class="features-section pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">our awsome features</h2>
                        <p> Augue urna molestie mi adipiscing vulputate pede sedmassa Praesquam massa, sodales velit turpis
                            in tellu.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-item text-center">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <div class="content">
                            <h4 class="title">expert drivers</h4>
                            <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
                        </div>
                    </div>
                </div><!-- icon-item end -->
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-item text-center">
                        <div class="icon"><i class="fa fa-rocket"></i></div>
                        <div class="content">
                            <h4 class="title">fast services</h4>
                            <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
                        </div>
                    </div>
                </div><!-- icon-item end -->
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-item text-center">
                        <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
                        <div class="content">
                            <h4 class="title">customer support</h4>
                            <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
                        </div>
                    </div>
                </div><!-- icon-item end -->
            </div>
        </div>
    </section>
    <!-- features-section end -->

    <!-- rent-step-section start -->
    <section class="rent-step-section pb-120">
        <div class="element-one"><img src="assets/images/elements/car.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="block-area">
                        <div class="block-header">
                            <h2 class="title">Well Come to Renten For Rent </h2>
                            <p>Lorem ipsum dolor sit amet, sit lectus risus dis aptent, vitae odio nec. Justo volutpat
                                rutrum purus, augue cursus, turpis felis nonummy nisl. Vel justrus sed volutpat, tristique
                                tempor scelerisque dictum dui donec urna, consequat scelerisque eu ut, ornare ut. Rutrum
                                eget</p>
                        </div>
                        <div class="block-body">
                            <ul class="num-list">
                                <li><span class="num">01</span>Download Car rent app</li>
                                <li><span class="num">02</span>choose the car you like</li>
                                <li><span class="num">03</span>car reservation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rent-step-section end -->



    <!-- overview-section start -->
    <section class="overview-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="block-area">
                        <div class="block-header">
                            <h2 class="title">We provided all Kind of Rental Services</h2>
                            <p>Feugiat tortor mauris, vitae magna parturient nec, velit bibensectetuer eros urna nunc
                                suspendisse. Elit odio lobortis adipiscing tristiqucursus eu, hendrerit nulla voluptatem
                                wisi Lorem ipsum dolor sit amet, velum magna, fusce ut dolor sit sed et habitant. Sociis
                                tincidunt velit. Collis dictum fames mauris magna, nulla nunc amet, in magna. Amet nmmy eget
                                et, orci nunc nam, condimentum donec tortor et magna </p>
                        </div>
                        <div class="block-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="counter-item">
                                        <span class="title">total car</span>
                                        <span>3497</span>
                                    </div>
                                </div><!-- counter-item end -->
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="counter-item">
                                        <span class="title">car rent</span>
                                        <span>4574</span>
                                    </div>
                                </div><!-- counter-item end -->
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="counter-item">
                                        <span class="title">experience</span>
                                        <span>25</span><span class="counter-text">Y</span>
                                    </div>
                                </div><!-- counter-item end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overview-img">
                        <div class="img-container"><img src="assets/images/overview/2.jpg" alt="image"></div>
                        <div class="img-container"><img src="assets/images/overview/1.jpg" alt="image"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview-section end -->

    <!-- team-section start -->
    <section class="team-section pb-120 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">expert support team</h2>
                        <p> Augue urna molestie mi adipiscing vulputate pede sedmassa Praesquam massa, sodales velit turpis
                            in tellu.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-4 col-sm-6">
                    <div class="team-item">
                        <div class="thumb">
                            <img src="assets/images/team/1.jpg" alt="image">
                            <div class="content">
                                <h3 class="name">William cook</h3>
                                <span class="designation">Support Manager</span>
                                <ul class="social-list d-flex justify-content-center">
                                    <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--team-item end -->
                <div class="col-lg-4 col-sm-6">
                    <div class="team-item">
                        <div class="thumb">
                            <img src="assets/images/team/2.jpg" alt="image">
                            <div class="content">
                                <h3 class="name">William cook</h3>
                                <span class="designation">Support Manager</span>
                                <ul class="social-list d-flex justify-content-center">
                                    <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--team-item end -->
                <div class="col-lg-4 col-sm-6">
                    <div class="team-item">
                        <div class="thumb">
                            <img src="assets/images/team/3.jpg" alt="image">
                            <div class="content">
                                <h3 class="name">William cook</h3>
                                <span class="designation">Support Manager</span>
                                <ul class="social-list d-flex justify-content-center">
                                    <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--team-item end -->
            </div>
        </div>
    </section>
    <!-- team-section end -->

    <!-- testimonial-section start -->
    <section class="testimonial-section overlay-black pt-120 pb-120 bg_img"
        data-background="assets/images/testimonial-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-slider owl-carousel">
                        <div class="testimonial-item text-center">
                            <div class="testimonial-item--header">
                                <div class="thumb"><img src="assets/images/testimonial/1.jpg" alt="image"></div>
                                <h3 class="name">martin hook</h3>
                                <span class="designation">business man</span>
                            </div>
                            <div class="testimonial-item--body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>
                            <div class="testimonial-item--ratings">
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div><!-- testimonial-item end -->
                        <div class="testimonial-item text-center">
                            <div class="testimonial-item--header">
                                <div class="thumb"><img src="assets/images/testimonial/1.jpg" alt="image"></div>
                                <h3 class="name">martin hook</h3>
                                <span class="designation">business man</span>
                            </div>
                            <div class="testimonial-item--body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>
                            <div class="testimonial-item--ratings">
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div><!-- testimonial-item end -->
                        <div class="testimonial-item text-center">
                            <div class="testimonial-item--header">
                                <div class="thumb"><img src="assets/images/testimonial/1.jpg" alt="image"></div>
                                <h3 class="name">martin hook</h3>
                                <span class="designation">business man</span>
                            </div>
                            <div class="testimonial-item--body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>
                            <div class="testimonial-item--ratings">
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star"></i></a>
                                <a href="#0"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div><!-- testimonial-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->

    <!-- blog-section start -->
    <section class="blog-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">latest news & tips</h2>
                        <p> Augue urna molestie mi adipiscing vulputate pede sedmassa Praesquam massa, sodales velit turpis
                            in tellu.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-6">
                    <div class="post-item post-item--grid">
                        <div class="thumb bg_img" data-background="assets/images/blog/1.jpg">
                            <ul class="post-meta d-flex">
                                <li><a href="#0">25 Jan 2019</a></li>
                                <li><a href="#0">03 Comments</a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="post-title"><a href="#0">Elementum cutur. Velit sed. Congue</a></h5>
                            <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and
                                overviews</p>
                            <a href="#0" class="text-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="post-item post-item--grid">
                        <div class="thumb bg_img" data-background="assets/images/blog/2.jpg">
                            <ul class="post-meta d-flex">
                                <li><a href="#0">25 Jan 2019</a></li>
                                <li><a href="#0">03 Comments</a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="post-title"><a href="#0">Aliquam id arccrupti eget velit, est vitae</a></h5>
                            <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and
                                overviews</p>
                            <a href="#0" class="text-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="post-item post-item--grid">
                        <div class="thumb bg_img" data-background="assets/images/blog/3.jpg">
                            <ul class="post-meta d-flex">
                                <li><a href="#0">25 Jan 2019</a></li>
                                <li><a href="#0">03 Comments</a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="post-title"><a href="#0">Quam magna iugiat urna in feugiat</a></h5>
                            <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and
                                overviews</p>
                            <a href="#0" class="text-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="post-item post-item--grid">
                        <div class="thumb bg_img" data-background="assets/images/blog/4.jpg">
                            <ul class="post-meta d-flex">
                                <li><a href="#0">25 Jan 2019</a></li>
                                <li><a href="#0">03 Comments</a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="post-title"><a href="#0">consectetu volutpat vitae alias ante leo</a></h5>
                            <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and
                                overviews</p>
                            <a href="#0" class="text-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-section end  -->



    <!-- consulting-section start -->
    <section class="consulting-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row mb-none-30">
                        <div class="col-sm-6">
                            <div class="brand-item">
                                <div class="brand-item--inner">
                                    <img src="assets/images/brand-logo/1.png" alt="image">
                                </div>
                            </div>
                        </div><!-- brand-item end -->
                        <div class="col-sm-6">
                            <div class="brand-item">
                                <div class="brand-item--inner">
                                    <img src="assets/images/brand-logo/2.png" alt="image">
                                </div>
                            </div>
                        </div><!-- brand-item end -->
                        <div class="col-sm-6">
                            <div class="brand-item">
                                <div class="brand-item--inner">
                                    <img src="assets/images/brand-logo/3.png" alt="image">
                                </div>
                            </div>
                        </div><!-- brand-item end -->
                        <div class="col-sm-6">
                            <div class="brand-item">
                                <div class="brand-item--inner">
                                    <img src="assets/images/brand-logo/4.png" alt="image">
                                </div>
                            </div>
                        </div><!-- brand-item end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="consulting-from-area">
                        <h2 class="title">Contact Us</h2>
                        @include('home.message')
                        <form class="consulting-form" method="POST" action="{{ route('sendmessage') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" id="name" placeholder="Name & Surname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" name="phone" id="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 ">
                                    <input type="text" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="cmn-btn">submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- consulting-section end -->
@endsection
