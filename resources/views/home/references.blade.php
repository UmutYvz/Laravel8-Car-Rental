@php
$setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

@extends('layouts.others')


@section('title', $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords', $setting->keywords)


@section('content')
    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Our References</h2>
                    <ol class="page-list">
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li>References</li>
                    </ol>
                </div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-lg-6">
                    <div class="car-search-filter-area">
                        <div class="car-search-filter-form-area">
                            <form class="car-search-filter-form" action="{{ route('getcar') }}" method="POST">
                                @csrf
                                <div class="row justify-content-between">
                                    <div class="col-lg-12 col-md-7 col-sm-4 d-flex">
                                        @livewire('search')

                                        <button class="search-submit-btn">Search</button>
                                    </div>
                                </div>
                            </form>
                            @livewireScripts
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <!-- features-section start -->
    <section class="features-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-content">
                        <h2 class="title title--border">our awsome references</h2>
                        <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, vehicula
                            adipiscing quam. Nibh vestibulum tempor, magna maecenas, vehicula donec ut nonummy cras
                            suscipit.</p>
                    </div>
                    <div class="row " style="padding-top: 50px;">
                        <h5 class="title title--border">REFERANSLARIMIZ</h5>

                        <div class="row">
                            {!! $setting->references !!}
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-4">
                                <img src="assets/images/clubcar-01.png" alt="">
                            </div>

                            <div class="col-md-4">
                                <img src="assets/images/delphY-01.png" alt="">
                            </div>

                            <div class="col-md-4">
                                <img src="assets/images/contYnental-01-01.png" alt="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets/images/tsY-01-01.png" alt="">
                            </div>

                            <div class="col-md-4">
                                <img src="assets/images/wabco-01.png" alt="">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- features-section end -->

    <!-- call-action-section start -->
    <section class="call-action-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="call-action-img text-lg-left text-center">
                        <img src="assets/images/elements/call-action-personj.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="call-cation-content">
                        <h3 class="top-title">Call Us for Suport</h3>
                        <span class="call-number">+90 541 743 54 00</span>
                        <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, ve adiping quam.
                            Nibh vestibulum tempor, magna maecenas, vehicula donec ut nonummy crascipit. Amet aliquam ut
                            elit semper urna metus, pede.</p>
                        <a href="{{ route('contactus') }}" class="cmn-btn">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call-action-section end -->



    <!-- company-char-section start -->
    <section class="company-char-section pt-120 pb-120">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-6">
                    <div class="company-char-content">
                        <h2 class="title title--border text-capitalize">our company charateristics</h2>
                        <p>Lorem ipsum dolor sit amet, phasellus ut curabitur vestibulum sit vitae aenean, morbi quam
                            blandit ad. Quis ac, eu enim pulvinar ante nam, sed purus, ut metus ligula imperdiet orci nibh.
                            Id dolor id, congue mauris eu arcu nibh, suspendisse vitae, et sociosqu. Eros vivamus </p>
                        <blockquote>
                            <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, vehicula
                                adipiscing quam. Nibh vestibulutempormagna maecenas vehicula donec ligula.Quisque cras
                                molestie dictum, aliquam litora. Tempus amet pellentesque vitae.</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="company-char-thumb">
                        <img src="assets/images/elements/company-char.jpg" alt="image">
                        <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection"
                            class="yt-icon"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-4 col-sm-6">
                    <div class="text-item">
                        <h3 class="title">We are Seen Form 1965</h3>
                        <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet pelltesque
                            vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
                    </div>
                </div><!-- text-item end -->
                <div class="col-lg-4 col-sm-6">
                    <div class="text-item">
                        <h3 class="title">Provided Best Services</h3>
                        <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet pelltesque
                            vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
                    </div>
                </div><!-- text-item end -->
                <div class="col-lg-4 col-sm-6">
                    <div class="text-item">
                        <h3 class="title">Our Mission</h3>
                        <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet pelltesque
                            vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
                    </div>
                </div><!-- text-item end -->
            </div>
        </div>
    </section>
    <!-- company-char-section end -->

    <!-- team-section start -->
    <section class="team-section pb-120">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item team-item--style2">
                        <div class="thumb">
                            <img src="assets/images/team/4.jpg" alt="image">
                        </div>
                        <div class="content">
                            <h5 class="name">martin hook</h5>
                            <span class="designation">support manager</span>
                            <ul class="details-list">
                                <li><a href="mailto:www.support/martin.com">www.support/martin.com</a></li>
                                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                                <li>
                                    <a href="#0"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa fa-linkedin"></i></a>
                                    <a href="#0"><i class="fa fa-twitter"></i></a>
                                    <a href="#0"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- team-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item team-item--style2">
                        <div class="thumb">
                            <img src="assets/images/team/5.jpg" alt="image">
                        </div>
                        <div class="content">
                            <h5 class="name">luthar king</h5>
                            <span class="designation">luthar king</span>
                            <ul class="details-list">
                                <li><a href="mailto:www.support/luthar.com">www.support/luthar.com</a></li>
                                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                                <li>
                                    <a href="#0"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa fa-linkedin"></i></a>
                                    <a href="#0"><i class="fa fa-twitter"></i></a>
                                    <a href="#0"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- team-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item team-item--style2">
                        <div class="thumb">
                            <img src="assets/images/team/6.jpg" alt="image">
                        </div>
                        <div class="content">
                            <h5 class="name">harbrt tony</h5>
                            <span class="designation">support manager</span>
                            <ul class="details-list">
                                <li><a href="mailto:www.support/harbrt.com">www.support/harbrt.com</a></li>
                                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                                <li>
                                    <a href="#0"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa fa-linkedin"></i></a>
                                    <a href="#0"><i class="fa fa-twitter"></i></a>
                                    <a href="#0"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- team-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item team-item--style2">
                        <div class="thumb">
                            <img src="assets/images/team/7.jpg" alt="image">
                        </div>
                        <div class="content">
                            <h5 class="name">tom jekson</h5>
                            <span class="designation">support manager</span>
                            <ul class="details-list">
                                <li><a href="mailto:www.support/jekson.com">www.support/jekson.com</a></li>
                                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                                <li>
                                    <a href="#0"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fa fa-linkedin"></i></a>
                                    <a href="#0"><i class="fa fa-twitter"></i></a>
                                    <a href="#0"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- team-item end -->
            </div>
        </div>
    </section>
    <!-- team-section end -->

    <!-- consulting-section start -->
    <section class="consulting-section pb-120">
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
