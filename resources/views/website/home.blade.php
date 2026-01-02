@extends('layouts.master')

@section('title', 'Ratnakukshi - Home')

@section('content')
    <!-- banner section starts -->
    <section class="banner">
        <div class="banner-image" style="background-image: url('{{ asset('assets/images/shape/shape-01.png') }}');">

            <div class="banner-carousel owl-theme owl-carousel">
                <div class="slide-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="banner-slide">
                                    <div class="banner-content">
                                        <div class="banner-content-wrapper">
                                            <div class="banner-content-wrapper-inner">
                                                <h4>Supporting the Roots of Renunciation</h4>
                                                <h2>A sacred initiative dedicated to the families of Jain Sadhus and Sadhvis
                                                </h2>
                                                <p>Ratnakukshi Bhakti Foundation serves the families who have selflessly
                                                    offered their children to the Jain Shasan, ensuring dignity, care, and
                                                    long-term support.
                                                </p>
                                                <div class="btn-group">
                                                    <div class="header-link-btn"><a href="" class="btn-1"> Support
                                                            the Cause<span></span></a></div>
                                                    <div class="header-link-btn"><a href="" class="btn-1 btn-2">
                                                            Learn More<span></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="banner-right-content">
                                    <div class="banner-right-image">
                                        <img src="{{ asset('assets/images/banner/banner-right-image.png') }}"
                                            alt="banner-two-image">
                                    </div>
                                    <div class="border-image">
                                        <img src="{{ asset('assets/images/shape/border-image.png') }}" alt="border">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="banner-slide">
                                    <div class="banner-content">
                                        <div class="banner-content-wrapper">
                                            <div class="banner-content-wrapper-inner">
                                                <h4>Shasan Bhakti Through Compassionate Service</h4>
                                                <h2>When a Sadhu renounces the world, a family also embraces sacrifice
                                                </h2>
                                                <p>We honor this sacrifice by providing need-based support in food, health,
                                                    education, housing, and livelihood—delivered with respect and
                                                    transparency.</p>
                                                <div class="btn-group">
                                                    <div class="header-link-btn"><a href="" class="btn-1"> Join the
                                                            Initiative<span></span></a></div>
                                                    <div class="header-link-btn"><a href="" class="btn-1 btn-2"> Our
                                                            Mission
                                                            <span></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="banner-right-content">
                                    <div class="banner-right-image">
                                        <img src="{{ asset('assets/images/banner/banner-right-image-02.png') }}"
                                            alt="banner-two-image">
                                    </div>
                                    <div class="border-image">
                                        <img src="{{ asset('assets/images/shape/border-image.png') }}" alt="border">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="banner-slide">
                                    <div class="banner-content">
                                        <div class="banner-content-wrapper">
                                            <div class="banner-content-wrapper-inner">
                                                <h4>Building a Sustainable Path of Devotion
                                                </h4>
                                                <h2>Spiritual Family Support
                                                </h2>
                                                <p>Ratnakukshi Bhakti Foundation provides dignified, need-based support to
                                                    families devoted to the Jain Shasan.
                                                </p>
                                                <div class="btn-group">
                                                    <div class="header-link-btn"><a href="" class="btn-1">
                                                            Contribute Now<span></span></a></div>
                                                    <div class="header-link-btn"><a href="" class="btn-1 btn-2"> How
                                                            We Work
                                                            <span></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="banner-right-content">
                                    <div class="banner-right-image">
                                        <img src="{{ asset('assets/images/banner/banner-right-image-03.png') }}"
                                            alt="banner-two-image">
                                    </div>
                                    <div class="border-image">
                                        <img src="{{ asset('assets/images/shape/border-image.png') }}" alt="border">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section ends -->

    <!-- services -->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>What we do</h5>
                        <h3>Education Make a Life for <br> Poor Children!</h3>
                        <div class="title-shape">
                            <img src="{{ asset('assets/images/shape/service-title-shape.png') }}" alt="map">
                        </div>
                    </div>
                </div>
                <div class="service-content-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="service-container wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="service-container-overlay"></div>
                                <div class="service-number">
                                    <span>01</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-01.png') }}" alt="shape">
                                    </div>
                                    <div class="service-icon">
                                        <span class="icon-service-icon-01"></span>
                                    </div>
                                    <h5>Support</h5>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="service-container wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="service-container-overlay service-container-overlay-active"></div>
                                <div class="service-number">
                                    <span>02</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-02.png') }}" alt="icon">
                                    </div>
                                    <div class="service-icon">
                                        <span class="icon-service-icon-02"></span>
                                    </div>
                                    <h5>Education</h5>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="service-container wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="service-container-overlay"></div>
                                <div class="service-number">
                                    <span>03</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-03.png') }}"
                                            alt="icon">
                                    </div>
                                    <div class="service-icon">
                                        <span class="icon-service-icon-03"></span>
                                    </div>
                                    <h5>Volunteers</h5>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="service-container wow fadeInUp" data-wow-delay="900ms"
                                data-wow-duration="1500ms">
                                <div class="service-container-overlay"></div>
                                <div class="service-number">
                                    <span>04</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-04.png') }}"
                                            alt="icon">
                                    </div>
                                    <div class="service-icon">
                                        <span class="icon-service-icon-04"></span>
                                    </div>
                                    <h5>Donations</h5>
                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services -->

    <!-- about -->
    <section class="about">
        <div class="vector-shape">
            <img src="{{ asset('assets/images/shape/vector-01.png') }}" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-left-container">
                        <div class="about-blank paroller" style="transform: translateY(-11px);"></div>
                        <div class="about-image-1 wow fadeInUp">
                            <img src="{{ asset('assets/images/gallery/about-image-01.jpg') }}" alt="image">
                        </div>
                        <div class="about-image-2 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <img src="{{ asset('assets/images/gallery/about-image-02.jpg') }}" alt="image">
                        </div>
                        <div class="about-left-intro paroller" style="transform: translateY(-11px);">
                            <div class="about-left-intro-inner">
                                <h5>280k</h5>
                                <p>We’ve helped our poor children</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-right-container">
                        <div class="common-title">
                            <h5>Welcome to SaveUs charity</h5>
                            <h3>We’re non-profit charity & NGO organization</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do
                            eiusmodtempor incididunt ut labore et simply free text dolore magna aliqua lonm andhn.</p>
                        <div class="about-progress">
                            <div id="skills-section">
                                <h5>Charity</h5>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="75">
                                        <span>75%</span>
                                    </div>
                                </div>
                            </div>
                            <div id="skills-section-one">
                                <h5>Donations</h5>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="45">
                                        <span>45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-link-btn"><a href="{{ route('about') }}" class="btn-1">Learn
                                More<span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <!-- causes -->
    <section class="causes">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Latest Causes</h5>
                        <h3>Find the popular cause <br> and donate them</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card">
                        <div class="causes-image-container">
                            <div class="causes-image-overlay wow"></div>
                            <div class="causes-image">
                                <a href="{{ route('causes.details') }}"><img
                                        src="{{ asset('assets/images/gallery/causes-01.jpg') }}" alt="img"></a>
                                <div class="header-link-btn"><a href="{{ route('causes') }}"
                                        class="btn-1">Education<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">Ensure Clean Water To The stn Afri. can Kids.</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar">
                            <div id="skills-section-two">
                                <div class="progress">
                                    <div class="progress-bar" data-progress="65">
                                        <span>65%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="causes-bar-info">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card">
                        <div class="causes-image-container">
                            <div class="causes-image-overlay wow"></div>
                            <div class="causes-image">
                                <a href="{{ route('causes.details') }}"><img
                                        src="{{ asset('assets/images/gallery/causes-02.jpg') }}" alt="img"></a>
                                <div class="header-link-btn"><a href="{{ route('causes') }}"
                                        class="btn-1">Medical<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">It is a long established fact that a reader</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar causes-bar-3">
                            <div id="skills-section-three">
                                <div class="progress">
                                    <div class="progress-bar" data-progress="80">
                                        <span>80%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="causes-bar-info">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card">
                        <div class="causes-image-container">
                            <div class="causes-image-overlay wow"></div>
                            <div class="causes-image">
                                <a href="{{ route('causes.details') }}"><img
                                        src="{{ asset('assets/images/gallery/causes-03.jpg') }}" alt="img"></a>
                                <div class="header-link-btn"><a href="{{ route('causes') }}"
                                        class="btn-1">Residence<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">There are many variations of passages</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar">
                            <div id="skills-section-four">
                                <div class="progress">
                                    <div class="progress-bar" data-progress="70">
                                        <span>70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="causes-bar-info">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- causes -->

    <!-- call to action -->
    <section class="call" style="background-image: url('{{ asset('assets/images/background/call-image-01.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="call-title">
                        <h2>Join the community to give <br> education for children</h2>
                        <div class="header-link-btn"><a href="{{ route('contact') }}" class="btn-1 btn-2">Join Our
                                Community<span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action -->

    <!-- our mission -->
    <section class="mission">
        <div class="vector-two">
            <img src="{{ asset('assets/images/shape/vector-02.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="common-title">
                        <h5>Our Core Values (Why Choose Us)</h5>
                        {{-- <h3>Protect People Pets and <br> the Planet</h3> --}}
                    </div>
                    <div class="mission-container">
                        <div class="mission-shape">
                            <img src="{{ asset('assets/images/shape/mission-shape.png') }}" alt="shape">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="mission-contant wow fadeInUp">
                                    <div class="mission-icon">
                                        <img src="{{ asset('assets/images/icons/mission-icon-01.png') }}" alt="icon">
                                    </div>
                                    <div class="mossion-info">
                                        <h6>Complete Confidentiality</h6>
                                        {{-- <p>Turpis egestas maecenas convallis posuere morbi</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mission-contant wow fadeInDown">
                                    <div class="mission-icon">
                                        <img src="{{ asset('assets/images/icons/mission-icon-02.png') }}" alt="icon">
                                    </div>
                                    <div class="mossion-info">
                                        <h6>Full Transparency</h6>
                                        {{-- <p>Turpis egestas maecenas convallis posuere morbi</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mission-contant wow fadeInDown">
                                    <div class="mission-icon">
                                        <img src="{{ asset('assets/images/icons/mission-icon-03.png') }}" alt="icon">
                                    </div>
                                    <div class="mossion-info">
                                        <h6>Long-Term Vision & Planning</h6>
                                        {{-- <p>Turpis egestas maecenas convallis posuere morbi</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mission-contant wow fadeInUp">
                                    <div class="mission-icon">
                                        <img src="{{ asset('assets/images/icons/mission-icon-04.png') }}" alt="icon">
                                    </div>
                                    <div class="mossion-info">
                                        <h6>Direct & Respectful Service</h6>
                                        {{-- <p>Turpis egestas maecenas convallis posuere morbi</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mission-contant wow fadeInUp">
                                    <div class="mission-icon">
                                        <img src="{{ asset('assets/images/icons/mission-icon-04.png') }}" alt="icon">
                                    </div>
                                    <div class="mossion-info">
                                        <h6>Value-Based, Non-Commercial Approach</h6>
                                        {{-- <p>Turpis egestas maecenas convallis posuere morbi</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-link-btn"><a href="{{ route('donate') }}" class="btn-1">Donate
                            Now<span></span></a></div>
                </div>

                <div class="col-xl-4">
                    <div class="mission-video-image">
                        <img src="{{ asset('assets/images/gallery/mission-video-image.jpg') }}" alt="img">
                        <div class="missiom-video-btn">
                            <a href="https://www.youtube.com/watch?v=kS0X-yIsB64" target="_blank"
                                class="hv-popup-link"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="mission-video-text">
                            <h2>Watch Video</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our mission -->

    <!-- fun fact -->
    
    <div class="fun-fact">
        <div class="container">
            <div class="fun-fact-container"
                style="background-image: url('{{ asset('assets/images/background/fun-fact-bg-image.jpg') }}');">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                        <div class="funfact-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="125">0</span>
                                    <p>Crores</p>
                                </div>
                                <p>Target Corpus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                        <div class="funfact-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="108">0</span>
                                    <p>Crores</p>
                                </div>
                                <p>200 Trusts totaling</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                        <div class="funfact-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="27">0</span>
                                    <p>Lakhs annually for 4 years</p>
                                </div>
                                <p>Contribution Plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                        <div class="funfact-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <p class="count-text" data-speed="1500">Utilization</p>
                                </div>
                                <p>Assistance provided from interest earned on the corpus</p>
                                {{-- <p>Happy Volunteers</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fun fact -->

    <!-- team starts -->
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Our Volunteers</h5>
                        <h3>Meet Our Expert Team</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="team-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="team-content-wrapper">
                            <div class="team-image">
                                <img src="{{ asset('assets/images/team/team-01.png') }}" alt="image">
                                <div class="team-media">
                                    <ul>
                                        <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-share">
                                <a href="#"><i class="flaticon-share"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <a href="{{ route('team3') }}">Floyd Miles</a>
                            <span>Volunteers</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="team-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="team-content-wrapper">
                            <div class="team-image">
                                <img src="{{ asset('assets/images/team/team-02.png') }}" alt="image">
                                <div class="team-media">
                                    <ul>
                                        <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-share">
                                <a href="#"><i class="flaticon-share"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <a href="{{ route('team3') }}">Kristin Watson</a>
                            <span>Volunteers</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="team-content wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="team-content-wrapper">
                            <div class="team-image">
                                <img src="{{ asset('assets/images/team/team-03.png') }}" alt="image">
                                <div class="team-media">
                                    <ul>
                                        <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-share">
                                <a href="#"><i class="flaticon-share"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <a href="{{ route('team3') }}">Courtney Henry</a>
                            <span>Volunteers</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="team-content wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                        <div class="team-content-wrapper">
                            <div class="team-image">
                                <img src="{{ asset('assets/images/team/team-04.png') }}" alt="image">
                                <div class="team-media">
                                    <ul>
                                        <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-share">
                                <a href="#"><i class="flaticon-share"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <a href="{{ route('team3') }}">Jenny Wilson</a>
                            <span>Volunteers</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 text-center">
                    <div class="header-link-btn"><a href="{{ route('team') }}" class="btn-1">View All
                            Team<span></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- team ends -->

    <!-- sponsor -->
    <div class="sponsor">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-carousel owl-carousel owl-theme">
                        <div class="sponsore-logo">
                            <img src="{{ asset('assets/images/brand/brand-01.png') }}" alt="logo">
                        </div>
                        <div class="sponsore-logo">
                            <img src="{{ asset('assets/images/brand/brand-02.png') }}" alt="logo">
                        </div>
                        <div class="sponsore-logo">
                            <img src="{{ asset('assets/images/brand/brand-03.png') }}" alt="logo">
                        </div>
                        <div class="sponsore-logo">
                            <img src="{{ asset('assets/images/brand/brand-04.png') }}" alt="logo">
                        </div>
                        <div class="sponsore-logo">
                            <img src="{{ asset('assets/images/brand/brand-05.png') }}" alt="logo">
                        </div>
                        <div class="sponsore-logo">
                            <img src="{{ asset('assets/images/brand/brand-03.png') }}" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sponsor -->

    <!-- testimonial -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Testimonials</h5>
                        <h3>What People Say About <br> Our Organization</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="pattern-layer" style="background-image: url('{{ asset('assets/images/shape/shape-02.png') }}');">
        </div>
        <div class="testimonial-container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-image-container">
                            <div class="testimonial-image-one">
                                <img src="{{ asset('assets/images/gallery/testimonial-01.png') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-two">
                                <img src="{{ asset('assets/images/gallery/testimonial-02.png') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-three">
                                <img src="{{ asset('assets/images/gallery/testimonial-03.png') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-four">
                                <img src="{{ asset('assets/images/gallery/testimonial-04.png') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-five">
                                <img src="{{ asset('assets/images/gallery/testimonial-05.png') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-six">
                                <img src="{{ asset('assets/images/gallery/testimonial-06.png') }}" alt="photo">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            <div class="tesstimonial-right-content">
                                <div class="testimonial-content-text">
                                    <p>There are many variations of nostrud passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or randomised
                                        enim veli amet.</p>
                                    <div class="testimonial-right-content-wrapper">
                                        <div class="testimonial-right-wrapper-inner">
                                            <img src="{{ asset('assets/images/gallery/testimonial-image-07.png') }}"
                                                alt="image">
                                            <div class="testimonial-info">
                                                <h6>Annette Black</h6>
                                                <span>Volunteers</span>
                                            </div>
                                        </div>
                                        <div class="quait">
                                            <img src="{{ asset('assets/images/shape/quote-01.png') }}" alt="quite">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesstimonial-right-content">
                                <div class="testimonial-content-text">
                                    <p>There are many variations of nostrud passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or randomised
                                        enim veli amet.</p>
                                    <div class="testimonial-right-content-wrapper">
                                        <div class="testimonial-right-wrapper-inner">
                                            <img src="{{ asset('assets/images/gallery/testimonial-06.png') }}"
                                                alt="image">
                                            <div class="testimonial-info">
                                                <h6>Donald Vaucher</h6>
                                                <span>Volunteers</span>
                                            </div>
                                        </div>
                                        <div class="quait">
                                            <img src="{{ asset('assets/images/shape/quote-01.png') }}" alt="quite">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial -->

    <!-- contact -->
    <section class="home-contact"
        style="background-image: url('{{ asset('assets/images/background/home-contact-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="call-title ">
                        <h2>How Can You Help?</h2>
                        <p>Your donation will help us save and improve lives with research, education and emergency care.
                        </p>
                        <div class="btn-group">
                            <div class="header-link-btn"><a href="{{ route('donate') }}" class="btn-1">Donate
                                    Now<span></span></a></div>
                            <div class="header-link-btn"><a href="{{ route('blog.details') }}"
                                    class="btn-1 btn-2">Discover more<span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

    <!-- blog -->
    <section class="blog">
        <div class="blank"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Latest Blog</h5>
                        <h3>Latest news & articles directly <br> coming from the blog</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <a href="{{ route('blog.details') }}" class="causes-image blog-image">
                            <img src="{{ asset('assets/images/gallery/blog-01.png') }}" alt="img">
                        </a>
                        <div class="blog-contant">
                            <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">20 Feb
                                    2022<span></span></a></div>
                            <div class="comments">
                                <ul>
                                    <li><i class="flaticon-user"></i> <span> Admin</span></li>
                                    <li><i class="flaticon-bubble-chat"></i> <span> Comment</span></li>
                                </ul>
                            </div>
                            <a href="{{ route('blog.details') }}" class="hover-content">How does the malnution affect
                                children?</a>
                            <p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
                        </div>
                        <div class="blog-btn">
                            <a href="{{ route('blog.details') }}">Read More <i class="flaticon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <a href="{{ route('blog.details') }}" class="causes-image blog-image">
                            <img src="{{ asset('assets/images/gallery/blog-02.png') }}" alt="img">
                        </a>
                        <div class="blog-contant">
                            <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">20 Feb
                                    2022<span></span></a></div>
                            <div class="comments">
                                <ul>
                                    <li><i class="flaticon-user"></i> <span> Admin</span></li>
                                    <li><i class="flaticon-bubble-chat"></i> <span> Comment</span></li>
                                </ul>
                            </div>
                            <a href="{{ route('blog.details') }}" class="hover-content">Our 10 Favourite Climate Strike
                                protest signs</a>
                            <p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
                        </div>
                        <div class="blog-btn">
                            <a href="{{ route('blog.details') }}">Read More <i class="flaticon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <a href="{{ route('blog.details') }}" class="causes-image blog-image">
                            <img src="{{ asset('assets/images/gallery/blog-03.png') }}" alt="img">
                        </a>
                        <div class="blog-contant">
                            <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">20 Feb
                                    2022<span></span></a></div>
                            <div class="comments">
                                <ul>
                                    <li><i class="flaticon-user"></i> <span> Admin</span></li>
                                    <li><i class="flaticon-bubble-chat"></i> <span> Comment</span></li>
                                </ul>
                            </div>
                            <a href="{{ route('blog.details') }}" class="hover-content">There are many variations of
                                passages of Lorem</a>
                            <p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
                        </div>
                        <div class="blog-btn">
                            <a href="{{ route('blog.details') }}">Read More <i class="flaticon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog -->

    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d48474.64872611011!2d-75.5188393826804!3d40.59313733852438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s4140%20Parker%20Rd.%20Allentown%2C%20New%20Mexico!5e0!3m2!1sen!2sbd!4v1676449615021!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- map -->
@endsection
