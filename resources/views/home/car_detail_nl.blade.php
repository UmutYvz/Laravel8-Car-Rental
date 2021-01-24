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
            @include('home.message')
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
                                        <img src="{{ Storage::url($item->image) }}" alt="" style="min-height: 400px">
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
                                <li><i style="margin-right: 10px;color: #4c6aff;" class="fa fa-car"></i>Model:
                                    {{ $data->model }} {{ $data->year }}
                                </li>
                                <li><i style="margin-right: 10px;color: #4c6aff;" class="fa fa-sliders"></i>Gear Type:
                                    {{ $data->gear_type }}
                                </li>
                                <li><i style="margin-right: 10px;color: #4c6aff;" class="fa fa-sliders"></i>Engine
                                    Power: {{ $data->engine_power }}hp</li>
                                <li><i style="margin-right: 10px;color: #4c6aff;" class="fa fa-sliders"></i>Fuel Type:
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
                    <span class="price" style="padding-top: 5px">Start form <span style="color: #4c6aff;font-weight:bold">
                            ${{ $data->price }} </span> per day</span>
                    <p>{!! $data->description !!}</p>
                </div>  

                <form class="reservation-form" action="{{route('login')}}" method="POST">
                    @csrf 
                    <div class="content-block" style="padding-top: 30px;">
                        <h3 class="title">Reservation Info</h3>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <input required type="date" name="r_start_date" class="form-control has-icon datepicker-here hasDatepicker"
                                    data-language="en" placeholder="Pickup Date" id="dp1610219160735">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <input required type="date" name="r_end_date"  class="form-control has-icon datepicker-here hasDatepicker"
                                    data-language="en" placeholder="Drop Off Date" id="dp1610219160736">
                            </div>
                            
                        </div>
                    </div>
                    <div class="content-block" style="padding-top: 30px;">
                        <div class="row">
                            
                            <div class="col-lg-6 form-group">
                                <input required type="tel"  name="phone" placeholder="Phone">
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="content-block" style="padding-top: 30px;">
                        <h3 class="title">Payment Method</h3>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <select required name="payment_method" style="display: none;">
                                    <option>Select Payment Methos</option>
                                    <option value="paypal" >Paypal</option>
                                    <option value="cash" >Payoneer</option>
                                    <option value="visacard" >Visa Card</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Select Payment
                                        Methos</span>
                                    <ul class="list">
                                        <li data-value="Select Payment Methos" class="option selected">Select
                                            Payment Methos</li>
                                        <li data-value="paypal" class="option">Paypal</li>
                                        <li data-value="cash" class="option">Cash</li>
                                        <li data-value="visacard" class="option">Visa Card</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-block" style="padding-top: 30px;">
                        <h3 class="title">Addisonal Information</h3>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <textarea name="comment" placeholder="Write addisonal information in here"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="reset" class="cmn-btn bg-black">Cancel</button>
                                <button type="submit" class="cmn-btn">reservation </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
