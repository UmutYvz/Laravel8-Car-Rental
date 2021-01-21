@php
$setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

<!--  header-section start  -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <ul class="social-links">
                        @if ($setting->facebook != null)
                            <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                        @endif
                        @if ($setting->twitter != null)
                            <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        @endif
                        @if ($setting->instagram != null)
                            <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                        @endif
                        @if ($setting->youtube != null)
                            <li><a href="{{ $setting->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="header-info d-flex justify-content-center">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <p>{{$setting->address}}</p>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <p>Sat - Fri Day 08:00 am - 5.00 pm Sunday Holyday</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="header-action d-flex align-items-center justify-content-end">
                        <div class="lag-select-area">
                            <select>
                                <option>ENG</option>
                                <option>RUS</option>
                                <option>BAN</option>
                            </select>
                        </div>
                        <div class="login-reg">
                            @auth
                                <a href="{{ route('myprofile') }}">{{ Auth::user()->name }}</a>
                                <a href="{{ route('logout') }}">Log Out</a>
                            @endauth
                            @guest
                                <a href="/register">Sign Up</a>
                                <a href="/login">Sign in</a>
                            @endguest

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger" style="padding: 0;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <a class="site-logo site-title" href="{{ route('home') }}"><img
                            src="{{ asset('assets') }}/images/logo1.png" alt="site-logo"><span class="logo-icon"><i
                                class="flaticon-fire"></i></span></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a href="{{ route('home') }}" class="nav-link"
                                style="margin-left: 30px;color: white;" href="#"> <b>HOME</b> </a> </li>
                        <li class="nav-item"> <a href="{{ route('aboutus') }}" class="nav-link"
                                style="margin-left: 15px;color: white;" href="#"> <b>ABOUT</b> </a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="margin-left: 15px;color: white;" href="#"
                                data-toggle="dropdown"> <b>CARS</b> </a>
                            @include('home._category')

                        </li>
                        <li class="nav-item"> <a href="{{ route('contactus') }}" class="nav-link"
                                style="margin-left: 15px;color: white;" href="#">
                                <b>CONTACT US</b> </a></li>
                        <li class="nav-item"> <a href="{{ route('references') }}" class="nav-link"
                                style="margin-left: 15px;color: white;" href="#">
                                <b>REFERENCES</b> </a></li>
                        <li class="nav-item"> <a href="{{ route('faq') }}" class="nav-link"
                                style="margin-left: 15px;color: white;" href="#">
                                <b>FAQ</b> </a></li>
                    </ul>

                </div> <!-- navbar-collapse.// -->
            </nav>
        </div>
    </div><!-- header-bottom end -->

</header>
<!--  header-section end  -->
<script>
    // Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function(e) {
        e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
        $('.dropdown-menu a').click(function(e) {
            e.preventDefault();
            if ($(this).next('.submenu').length) {
                $(this).next('.submenu').toggle();
            }
            $('.dropdown').on('hide.bs.dropdown', function() {
                $(this).find('.submenu').hide();
            })
        });
    }

</script>
