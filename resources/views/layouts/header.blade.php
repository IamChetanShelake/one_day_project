<style>
    /* ===== HEADER MENU STYLE (MATCH IMAGE) ===== */

    .main-header .navigation {
        display: flex;
        align-items: center;
    }

    .main-header .navigation>li {
        position: relative;
        padding: 0 0px;
    }

    .main-header .logo-box .logo img {
        width: 159px;
        height: 145px;
    }

    .main-header .logo-box .logo,
    .main-header .sticky-header .logo-box .logo {
        padding: 0px;
    }


    .main-header .navigation>li>a {
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #6b6b6b;
        padding: 0;
    }

    .main-header .navigation>li.current>a,
    .main-header .navigation>li>a:hover {
        color: #7a1f1f;
    }

    /* ===== LOGIN BUTTON ===== */

    .header__right__button .btn-1 {
        background: #7a1f1f;
        color: #fff;
        border-radius: 10px;
        padding: 10px 26px;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 1.1);
    }

    .header__right__button .btn-1:hover {
        background: #611818;
    }

    /* ===== BOTTOM BORDER ===== */

    .header_bottom {
        border-bottom: 3px solid #1e73be;
    }
</style>
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
        {{-- <div class="header_top">
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
        </div> --}}
        <!-- header-top -->

        <div class="header_bottom p_relative">
            <div class="logo__shape"></div>
            <div class="auto_container" style="max-width:1370px;">
                <div class="outer-box">
                    <div class="logo-box" style="padding: 0px 35px 0px 0px;">
                        <figure class="logo"><a href="{{ route('home') }}"><img
                                    src="{{ asset('assets/images/ratnakukshi_logo.png') }}" alt=""></a></figure>
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
                                    <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                                        <a href="{{ route('home') }}"
                                            class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                                    </li>
                                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a
                                            href="{{ route('about') }}"
                                            class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                                    <li><a href="#">OUR INITIATIVE</a></li>
                                    <li><a href="#">DONOR</a></li>
                                    <li><a href="#">TRUSTEES</a></li>
                                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header__right">
                        <div class="header__right__button">
                            <div class="header-link-btn"><a href="{{ route('donate') }}" target="_blank"
                                    class="btn-1 btn-alt">CONTACT US <span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto_container" style="max-width:1370px;">
            <div class="outer-box">
                <div class="logo-box" style="padding: 0px 35px 0px 0px;">
                    <figure class="logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('assets/images/ratnakukshi_logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="header__right">
                    <div class="header__right__button">
                        <div class="header-link-btn"><a href="#" target="_blank" class="btn-1 btn-alt">CONTACT
                                US<span></span></a></div>
                    </div>
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
        <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                    alt="logo"></a></div>
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
