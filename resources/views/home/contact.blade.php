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
                    <h2 class="page-title">Contact Us</h2>
                    <ol class="page-list">
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li>Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->


    <!-- consulting-section start -->
    <section class="consulting-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="consulting-from-area">
                        <h2 class="title">Contact Us</h2>
                        @include('home.message')
                        <form class="consulting-form" method="POST" action="{{route('sendmessage')}}">
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

    <!-- company-char-section start -->
    <section class="company-char-section pt-120 pb-120">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-6">
                    <div class="col-md-6" style="padding-bottom: 50px">
                        {!!$setting->contact!!}
                        {{-- <div class="text-item">
                            <p><i style="padding-right: 10px;color:#ca0b25" class="title fa fa-map-marker fa-lg" aria-hidden="true"></i>Atıfbey Mahallesi 63/2 Sokak No:1/A Gaziemir-İzmir/TÜRKİYE </p>
                            <p><i style="color:#ca0b25" class="title fa fa-phone fa-lg" aria-hidden="true"></i><a style="padding-left: 10px;padding-top:10px" href="tel:02322200400">0 (232) 220 04 00</a></p>
                            <p><i style="color:#ca0b25" class=" title fa fa-phone fa-lg" aria-hidden="true"></i><a style="padding-left: 10px" href="tel:08503994600">0 (850) 399 46 00</a></p>
                            <p><i style="color:#ca0b25" class="title fa fa-whatsapp fa-lg" aria-hidden="true"></i><a style="padding-left: 10px" href="https://api.whatsapp.com/send?phone=905321114600">0 (532) 111 46 00</a></p>
                            <p><i style="color:#ca0b25" class=" title fa fa-envelope fa-lg" aria-hidden="true"></i><a style="padding-left: 10px" href="mailto:info@otoby.com.tr">info@otoby.com.tr</a></p>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="company-char-thumb">
                        <img src="assets/images/elements/company-char.jpg" alt="image">
                        <a href="https://www.youtube.com/embed/3uknUTtyd5s" data-rel="lightcase:myCollection"
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




@endsection
