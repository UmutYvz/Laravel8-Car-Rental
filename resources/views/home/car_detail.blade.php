@php
$setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

@extends('layouts.others')


@section('title', $data->title)

@section('description')
    {{ $data->description }}
@endsection

@section('keywords', $data->keywords)



@section('content')

    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="{{ asset('assets') }}/images/inner-page-bg.jpg" st>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">reservation</h2>
                    <ol class="page-list">
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#0">car list</a></li>
                        <li>reservation</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->
    <section class="reservation-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="reservation-details-area">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                @foreach ($dataList as $item)
                                    <div class="carousel-item {{ $item->title == '1' ? 'active' : '' }}">
                                        <img src="{{ Storage::url($item->image) }}" alt="" style=>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <aside class="sidebar">
                        <div class="widget widget-all-cars">
                            <h4 class="widget-title">Car Specs</h4>
                            <ul class="cars-list">
                                <li><i style="margin-right: 10px;color: #da1c36;" class="fa fa-car"></i>Model:
                                    {{ $data->model }} {{ $data->year }}
                                </li>
                                <li><i style="margin-right: 10px;color: #da1c36;" class="fa fa-sliders"></i>Gear Type:
                                    {{ $data->gear_type }}
                                </li>
                                <li><i style="margin-right: 10px;color: #da1c36;" class="fa fa-sliders"></i>Engine
                                    Power: {{ $data->engine_power }}hp</li>
                                <li><i style="margin-right: 10px;color: #da1c36;" class="fa fa-sliders"></i>Fuel Type:
                                    {{ $data->fuel_type }}
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>

            <div class="content" style="padding-top: 50px;">
                <div class="content-block">
                    <h3 class="car-name">{{ $data->brand }} {{ $data->model }}</h3>
                    <span class="price" style="padding-top: 5px">Start form <span style="color: #da1c36;font-weight:bold">
                            ${{ $data->price }} </span> per day</span>
                    <p>{!! $data->description !!}</p>
                </div>

                <form class="reservation-form">
                    <div class="content-block" style="padding-top: 30px;">
                        <h3 class="title">extra benifit and fee</h3>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">childen seat</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                    <label class="form-check-label" for="exampleCheck4">car insurances</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                    <label class="form-check-label" for="exampleCheck5">air-condition $35 per
                                        day</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                    <label class="form-check-label" for="exampleCheck6">security &amp;
                                        safety</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <i class="fa fa-map-marker"></i>
                                <input class="form-control has-icon" type="text" placeholder="Pickup Location">
                            </div>
                            <div class="form-group col-md-6">
                                <i class="fa fa-map-marker"></i>
                                <input class="form-control has-icon" type="text" placeholder="Drop Off Location">
                            </div>
                            <div class="form-group col-md-6">
                                <i class="fa fa-calendar"></i>
                                <input type="text" class="form-control has-icon datepicker-here hasDatepicker"
                                    data-language="en" placeholder="Pickup Date" id="dp1610219160735">
                            </div>
                            <div class="form-group col-md-6">
                                <i class="fa fa-clock-o"></i>
                                <input type="text" name="timepicker"
                                    class="form-control has-icon timepicker hasWickedpicker" placeholder="Pickup Time"
                                    onkeypress="return false;" aria-showingpicker="false" tabindex="0">
                            </div>
                            <div class="form-group col-md-6">
                                <i class="fa fa-calendar"></i>
                                <input type="text" class="form-control has-icon datepicker-here hasDatepicker"
                                    data-language="en" placeholder="Drop Off Date" id="dp1610219160736">
                            </div>
                            <div class="form-group col-md-6">
                                <i class="fa fa-clock-o"></i>
                                <input type="text" name="timepicker"
                                    class="form-control has-icon timepicker hasWickedpicker" placeholder="Drop Off Time"
                                    onkeypress="return false;" aria-showingpicker="false" tabindex="0">
                            </div>
                        </div>
                    </div>
                    <div class="content-block" style="padding-top: 30px;">
                        <h3 class="title">personal information</h3>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" placeholder="Email Address">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="tel" placeholder="Phone">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" placeholder="City">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" placeholder="Zip Code">
                            </div>
                            <div class="col-lg-6 form-group">
                                <select style="display: none;">
                                    <option>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Gender</span>
                                    <ul class="list">
                                        <li data-value="Gender" class="option selected">Gender</li>
                                        <li data-value="Male" class="option">Male</li>
                                        <li data-value="Female" class="option">Female</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-block" style="padding-top: 30px;">
                        <h3 class="title">payment method</h3>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <select style="display: none;">
                                    <option>Select Payment Methos</option>
                                    <option>Paypal</option>
                                    <option>Payoneer</option>
                                    <option>Visa Card</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Select Payment
                                        Methos</span>
                                    <ul class="list">
                                        <li data-value="Select Payment Methos" class="option selected">Select
                                            Payment Methos</li>
                                        <li data-value="Paypal" class="option">Paypal</li>
                                        <li data-value="Payoneer" class="option">Payoneer</li>
                                        <li data-value="Visa Card" class="option">Visa Card</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-block" style="padding-top: 30px;">
                        <h3 class="title">addisonal information</h3>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <textarea placeholder="Write addisonal information in here"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="reset" class="cmn-btn bg-black">Cancel</button>
                                <button type="submit" class="cmn-btn">reservation</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
