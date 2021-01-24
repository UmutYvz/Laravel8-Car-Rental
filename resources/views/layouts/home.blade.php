<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta name="author" content="Umut Yavuz">
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/favicon.jpg" />
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightcase.css">
    <!-- animate css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
    <!-- nice select css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/nice-select.css">
    <!-- datepicker css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/datepicker.min.css">
    <!-- wickedpicker css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/wickedpicker.min.css">
    <!-- jquery ui css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery-ui.min.css">
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <style>
        @media (min-width: 992px) {
            .dropdown-menu .dropdown-toggle:after {
                border-top: .3em solid transparent;
                border-right: 0;
                border-bottom: .3em solid transparent;
                border-left: .3em solid;
            }

            .dropdown-menu .dropdown-menu {
                margin-left: 0;
                margin-right: 0;
            }

            .dropdown-menu li {
                position: relative;
            }

            .nav-item .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }

            .nav-item .submenu-left {
                right: 100%;
                left: auto;
            }

            .dropdown-menu>li:hover {
                background-color: #f1f1f1
            }

            .dropdown-menu>li:hover>.submenu {
                display: block;
            }
        }


    </style>


</head>

<body>
    @include('home._header')

    @include('home._banner')
    {{-- @include('home._slider') --}}

    @section('content')

    @show


    @include('home._footer')




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
    <!-- jquery js link -->
    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <!-- jquery migrate js link -->
    <script src="{{ asset('assets') }}/js/jquery-migrate-3.0.0.js"></script>
    <!-- bootstrap js link -->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <!-- lightcase js link -->
    <script src="{{ asset('assets') }}/js/lightcase.js"></script>
    <!-- wow js link -->
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <!-- nice select js link -->
    <script src="{{ asset('assets') }}/js/jquery.nice-select.min.js"></script>
    <!-- datepicker js link -->
    <script src="{{ asset('assets') }}/js/datepicker.min.js"></script>
    <script src="{{ asset('assets') }}/js/datepicker.en.js"></script>
    <!-- wickedpicker js link -->
    <script src="{{ asset('assets') }}/js/wickedpicker.min.js"></script>
    <!-- owl carousel js link -->
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <!-- jquery ui js link -->
    <script src="{{ asset('assets') }}/js/jquery-ui.min.js"></script>
    <!-- main js link -->
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <!-- JavaScript -->
    
</body>

</html>
