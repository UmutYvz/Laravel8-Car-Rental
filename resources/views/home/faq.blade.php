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
                    <h2 class="page-title">Frequently Asked Questions</h2>
                    <ol class="page-list">
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li>FAQs</li>
                    </ol>
                </div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-lg-6">
                    <div class="car-search-filter-area">
                        <div class="car-search-filter-form-area">
                            <form class="car-search-filter-form" action="{{route('getcar')}}" method="POST">
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
            @foreach ($dataList as $item)
                <div class="row" style="margin-bottom: 30px">
                    <div class="col-lg-12">
                        <div class="feature-content" style="border-bottom:1px solid rgba(201, 201, 201, 0.452);padding-top:10px">
                            <h2 class="title title--border" style="font-size: 25px">{{$item->question}}</h2>
                            <p style="margin-top: 0px"> {!!$item->answer!!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- features-section end -->


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
