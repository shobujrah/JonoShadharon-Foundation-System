<header style="background-color:dimgray;">
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">

            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a style="color: white;" href="{{ route('homepage') }}">Home</a></li>

                                            <li><a style="color: white;"   href="{{route('frontend.crisis')}}">Crisis</a></li>
                                            <li><a  style="color: white;"  href="{{route('volunteer.info')}}">Volunteers</a></li>


                                            <li><a style="color: white;"  href="{{url('/donate-info')}}">See Donors</a></li>
                                            {{-- <li><a href="{{route('registration')}}">Registration</a></li> --}}

                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">

                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
