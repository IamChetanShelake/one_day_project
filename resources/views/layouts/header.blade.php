<!-- preloader -->
<div class="loader-wrap">
    <div class="preloader">
        <div class="preloader-close">x</div>
        <div id="handle-preloader" class="handle-preloader home-1">
            <div class="loading">
                <span></span>
                <span></span>
                <span></span>
                <h2>Save Us</h2>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- main header -->
<header class="main-header style-one">

    <div class="header-lower">

        <!-- header-top -->
        <div class="header_top">
            <div class="auto_container">
                <div class="header_top_left">
                    <ul class="top_left">
                        <li><a href="tel:081243256"><i class="flaticon-phone-call"></i>(208) 555-0112</a></li>
                        <li><a href="mailto:jennings@example.com"><i class="flaticon-email"></i> jennings@example.com</a></li>
                        <li><i class="icon-location-dot"></i> 6391 Elgin St. Celina, Delaware 10299</li>
                    </ul>
                </div>
                <div class="header_top_right">
                    <div class="header_right_info">
                        <ul class="top_right">
                            <li><a href="#"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                            <li><a href="#"><i class="flaticon-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top -->

        <div class="header_bottom p_relative">
            <div class="logo__shape"></div>
            <div class="auto_container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="{{ route('home') }}" class="active">Home</a>
                                        <ul>
                                            <li><a href="{{ route('home') }}" class="active">Home One</a></li>
                                            <li><a href="{{ route('home2') }}">Home Two</a></li>
                                            <li><a href="{{ route('home3') }}">Home Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li class="dropdown"><a href="{{ route('causes') }}">Causes</a>
                                        <ul>
                                            <li><a href="{{ route('causes') }}" >Causes</a></li>
                                            <li><a href="{{ route('causes.details') }}">Cause Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li class="dropdown"><a href="#">Events</a>
                                                <ul>
                                                    <li><a href="{{ route('events') }}">Events</a></li>
                                                    <li><a href="{{ route('events.carousel') }}">Events Carousel</a></li>
                                                    <li><a href="{{ route('events.details') }}">Event Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Team</a>
                                                <ul>
                                                    <li><a href="{{ route('team') }}">Team</a></li>
                                                    <li><a href="{{ route('team2') }}">Become A Volunteer</a></li>
                                                    <li><a href="{{ route('team3') }}">Volunteer Details </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                                            <li><a href="{{ route('error') }}">404 Error</a></li>
                                            <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                                            <li><a href="{{ route('donate') }}">Donate</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('blog.grid') }}">Blog</a>
                                        <ul>
                                            <li><a href="{{ route('blog.grid') }}">Blog Grid</a></li>
                                            <li><a href="{{ route('blog.carousel') }}">Blog Carousel</a></li>
                                            <li><a href="{{ route('blog.details') }}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}"> Contact </a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header__right">
                        <div class="header__right__button">
                            <div class="header-link-btn"><a href="{{ route('donate') }}" target="_blank" class="btn-1 btn-alt">Donate Now <span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto_container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="{{ route('home') }}"><span class="fab fa-twitter"></span></a></li>
                <li><a href="{{ route('home') }}"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="{{ route('home') }}"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="{{ route('home') }}"><span class="fab fa-instagram"></span></a></li>
                <li><a href="{{ route('home') }}"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
