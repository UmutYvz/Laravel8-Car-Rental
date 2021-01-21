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
                    <h2 class="page-title">about comapny</h2>
                    <ol class="page-list">
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li>About us</li>
                    </ol>
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
                        <h2 class="title title--border">our awsome features</h2>
                        <p>{!!$setting->aboutus!!}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-header">
                                    <i class="fa fa-user"></i>
                                    <h5 class="title">expert drivers</h5>
                                </div>
                                <div class="feature-item-body">
                                    <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                                </div>
                            </div>
                        </div><!-- feature-item end -->
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-header">
                                    <i class="fa fa-user"></i>
                                    <h5 class="title">24 hours suport</h5>
                                </div>
                                <div class="feature-item-body">
                                    <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                                </div>
                            </div>
                        </div><!-- feature-item end -->
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-header">
                                    <i class="fa fa-user"></i>
                                    <h5 class="title">free registration</h5>
                                </div>
                                <div class="feature-item-body">
                                    <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                                </div>
                            </div>
                        </div><!-- feature-item end -->
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <div class="feature-item-header">
                                    <i class="fa fa-user"></i>
                                    <h5 class="title">low rent cost</h5>
                                </div>
                                <div class="feature-item-body">
                                    <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                                </div>
                            </div>
                        </div><!-- feature-item end -->
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

    <!-- choose-car-section start -->
    <section class="choose-car-section section-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-car-slider-two owl-carousel">
                        <div class="car-item border-none">
                            <div class="thumb">
                                <img src="assets/images/cars/s1.jpg" alt="image">
                                <a href="#0" class="cmn-btn">reservation now</a>
                            </div>
                            <div class="content px-0 pb-0">
                                <h4 class="title">mistubishi lancer</h4>
                                <span class="price">$70 per day </span>
                                <div class="review-starts">
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                </div>
                            </div>
                        </div><!-- car-item end -->
                        <div class="car-item border-none">
                            <div class="thumb">
                                <img src="assets/images/cars/s2.jpg" alt="image">
                                <a href="#0" class="cmn-btn">reservation now</a>
                            </div>
                            <div class="content px-0 pb-0">
                                <h4 class="title">mistubishi lancer</h4>
                                <span class="price">$70 per day </span>
                                <div class="review-starts">
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                </div>
                            </div>
                        </div><!-- car-item end -->
                        <div class="car-item border-none">
                            <div class="thumb">
                                <img src="assets/images/cars/s3.jpg" alt="image">
                                <a href="#0" class="cmn-btn">reservation now</a>
                            </div>
                            <div class="content px-0 pb-0">
                                <h4 class="title">mistubishi lancer</h4>
                                <span class="price">$70 per day </span>
                                <div class="review-starts">
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                </div>
                            </div>
                        </div><!-- car-item end -->
                        <div class="car-item border-none">
                            <div class="thumb">
                                <img src="assets/images/cars/s4.jpg" alt="image">
                                <a href="#0" class="cmn-btn">reservation now</a>
                            </div>
                            <div class="content px-0 pb-0">
                                <h4 class="title">mistubishi lancer</h4>
                                <span class="price">$70 per day </span>
                                <div class="review-starts">
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                </div>
                            </div>
                        </div><!-- car-item end -->
                        <div class="car-item border-none">
                            <div class="thumb">
                                <img src="assets/images/cars/s1.jpg" alt="image">
                                <a href="#0" class="cmn-btn">reservation now</a>
                            </div>
                            <div class="content px-0 pb-0">
                                <h4 class="title">mistubishi lancer</h4>
                                <span class="price">$70 per day </span>
                                <div class="review-starts">
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                </div>
                            </div>
                        </div><!-- car-item end -->
                        <div class="car-item border-none">
                            <div class="thumb">
                                <img src="assets/images/cars/s2.jpg" alt="image">
                                <a href="#0" class="cmn-btn">reservation now</a>
                            </div>
                            <div class="content px-0 pb-0">
                                <h4 class="title">mistubishi lancer</h4>
                                <span class="price">$70 per day </span>
                                <div class="review-starts">
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                    <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                                </div>
                            </div>
                        </div><!-- car-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-car-section end -->

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
