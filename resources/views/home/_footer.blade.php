
@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
<!-- footer-section start -->
<footer class="footer-section">
    <div class="footer-top pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8">
                    <div class="footer-widget widget-about">
                        <div class="widget-about-content">
                            <a href="index.html" class="footer-logo"><img src="{{asset('assets')}}/images/logo-footer.png"
                                    alt="logo"></a>
                            <p>Lorem ipsum dolor sit amet, congue placeranec. Leo faucibus sed eleifend bibendum n
                                vehicula nulla mauris nulla ipsum neque sed. Gravida egestas fermentum urna, velit sed.
                            </p>
                            <ul class="social-links">
                                <li><a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{$setting->youtube}}"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="footer-widget widget-menu">

                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="footer-widget widget-menu">
                        <h4 class="widget-title">useful link</h4>
                        <ul>
                            <li><a href="{{ route('aboutus') }}">about</a></li>
                            <li><a href="{{route('all_cars')}}">Car List</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('references') }}">References</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8">
                    <div class="footer-widget widget-address">
                        <h4 class="widget-title">contact with us</h4>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>{{$setting->address}}</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>{{$setting->email}}</span>
                            </li>
                            <li>
                                <i class="fa fa-phone-square"></i>
                                <span>{{$setting->phone}} <br>  {{$setting->fax}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6">
                    <p class="copy-right-text"><a href="templateshub.net">{{ $setting->company }}</a></p>
                </div>
                <div class="col-sm-6">
                    <ul class="payment-method d-flex justify-content-end">
                        <li><a href="{{route('admin_login')}}"> Login </a> </li>
                        <li><a href="{{route('admin_login')}}"> Log Out </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-section end -->


<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
        <i class="fa fa-rocket"></i>
    </span>
</div>
<!-- scroll-to-top end -->


</body>

</html>
