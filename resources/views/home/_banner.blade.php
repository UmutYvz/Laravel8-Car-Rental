<!-- banner-section start  -->
<section class="banner-section bg_img" data-background="assets/images/banner.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12" style="
            margin-top: 75px;
            margin-bottom: 0px;">
                <div class="banner-content">
                    <h1 class="title">find your own car</h1>
                    <p>Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque
                        vehiculanulla. Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum
                        neque vehiculanulla.</p>
                    <a href="{{route('all_cars')}}" class="cmn-btn">see all vehicles</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
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
<!-- banner-section end  -->
