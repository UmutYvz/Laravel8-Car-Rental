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
    <section class="banner-section bg_img" data-background="assets/images/banner.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7" style="
                margin-top: 75px;">
                    <div class="banner-content">
                        <h1 class="title">find your own car</h1>
                        <p>Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque
                            vehiculanulla. Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum
                            neque vehiculanulla.</p>
                        <a href="#0" class="cmn-btn">see all vehicles</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="banner-img">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reservation-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="sidebar">
                        @include('home.user_menu')
                        
                        <!-- widget end -->
                    </aside>
                </div>
                <div class="col-lg-8">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </section>

    <!-- subscribe-section start -->
    <section class="subscribe-section overlay-main bg_img pt-120 pb-120" data-background="assets/images/bg1.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe-content-area text-center">
                        <h2 class="title text-white">Subscribe Our News Latters for Get Update </h2>
                        <form class="subscribe-form">
                            <input type="email" name="subs_email" id="subs_email" placeholder="Enter your email address">
                            <button type="submit" class="form-icon"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->

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
                        <h2 class="title">Request a Free Consultation</h2>
                        <form class="consulting-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="cons_f_name" id="cons_f_name" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="cons_l_name" id="cons_l_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="email" name="cons_email" id="cons_email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" name="cons_phone" id="cons_phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Message"></textarea>
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
