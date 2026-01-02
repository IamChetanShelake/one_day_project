@extends('layouts.master')

@section('title', 'About Us - Save Us')

@section('content')
    <!-- common banner -->
    <section class="common-banner" style="background-image: url('{{ asset('assets/images/banner/common-banner-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-title">
                        <h3>About us</h3>
                        <a href="{{ route('home') }}">Home </a>/
                        <span> About</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- common banner -->

    <!-- about -->
    <section class="about home-two-about">
        <div class="home-two-about-shape">
            <img src="{{ asset('assets/images/shape/home-two-about-shape.png') }}" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-left-container">
                        <div class="home-two-about-image-top paroller" style="transform: translateY(11px);">
                            <img src="{{ asset('assets/images/gallery/home-two-about-top.png') }}" alt="image">
                        </div>
                        <div class="about-image-1 wow fadeInUp">
                            <img src="{{ asset('assets/images/gallery/home-two-about-image.png') }}" alt="image">
                        </div>
                        <div class="home-two-about-image-bottom paroller" style="transform: translateY(-11px);">
                            <img src="{{ asset('assets/images/gallery/home-two-about-bottom.png') }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="home-two-about-wrapper">
                        <div class="about-right-container">
                            <div class="common-title">
                                <h5>Get to know about SaveUs</h5>
                                <h3>Who We Are</h3>
                            </div>
                            <h6>Ratnakukshi Bhakti Foundation is a spiritual and social initiative rooted in Jain values,
                                established to serve the families of Sadhus and Sadhvis who have dedicated their lives to
                                the upliftment of humanity.</h6>
                            {{-- <p>Ratnakukshi Bhakti Foundation is a spiritual and social initiative rooted in Jain values,
                                established to serve the families of Sadhus and Sadhvis who have dedicated their lives to
                                the upliftment of humanity.</p> --}}
                            <p>
                                In the Jain Shasan tradition, Sadhus and Sadhvis propagate the timeless teachings of
                                Tirthankars through renunciation, discipline, and compassion. Today, more than 15,000 Sadhus
                                and Sadhvis continue this sacred mission, guiding society toward righteousness and spiritual
                                growth.
                            </p>
                            <p>Behind every renunciate lies a family that has made an extraordinary sacrifice. Our
                                foundation recognizes this silent contribution and works to support these families with
                                respect, dignity, and long-term planning.</p>
                            {{-- <div class="header-link-btn"><a href="{{ route('about') }}" target="_blank"
                                    class="btn-1">Discover more<span></span></a></div> --}}
                            <div class="common-title mt-4">
                                <h5>Our Vision</h5>
                                <p>To create a sustainable and transparent support system for Ratnakukshi families, ensuring
                                    their well-being while strengthening the spirit of Shasan Bhakti.</p>
                            </div>

                            <div class="common-title mt-4">
                                <h5>Our Mission</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center border-0 px-0">
                                        <i class="fa fa-check-circle  me-3" style="color: #7a1f1f;"></i>
                                        <span style="color:#6F7775;">To provide need-based assistance to Sadhu–Sadhvi
                                            families</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center border-0 px-0">
                                        <i class="fa fa-check-circle  me-3" style="color: #7a1f1f;"></i>
                                        <span style="color:#6F7775;">To establish a long-term corpus fund for continuous
                                            support</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center border-0 px-0">
                                        <i class="fa fa-check-circle  me-3" style="color: #7a1f1f;"></i>
                                        <span style="color:#6F7775;">To deliver aid with confidentiality, respect, and
                                            transparency</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center border-0 px-0">
                                        <i class="fa fa-check-circle  me-3" style="color: #7a1f1f;"></i>
                                        <span style="color:#6F7775;">To encourage collective participation in Shasan
                                            service</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <!-- faq -->
    <section class="faq">
        <div class="faq-left" style="background-image: url('{{ asset('assets/images/gallery/faq1.png') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="faq-content">
                            <div class="common-title">
                                <h5>Recently asked questions</h5>
                                <h3>We inspire and help <br> them live better</h3>
                            </div>
                            <div class="faq-accordion ">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Why is it important to support them
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                There are many variations of passages the majority have suffered alteration
                                                in some fo injected humour, or randomised words believable.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Start a fundraiser for yourself
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                There are many variations of passages the majority have suffered alteration
                                                in some fo injected humour, or randomised words believable.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                How can i find my campaign?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                There are many variations of passages the majority have suffered alteration
                                                in some fo injected humour, or randomised words believable.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-right wow fadeInRightBig"></div>
    </section>
    <!-- faq -->

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial -->

    <!-- call to action -->
    <section class="call" style="background-image: url('{{ asset('assets/images/background/call-image-01.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="call-title">
                        <h2>Join the community to give <br> education for children</h2>
                        <div class="header-link-btn"><a href="{{ route('contact') }}" target="_blank"
                                class="btn-1 btn-2">Join Our Community<span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action -->

    <!-- events -->
    <section class="blog events">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Upcoming Events</h5>
                        <h3>Join our latest upcoming <br> events</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card event-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="causes-image blog-image event-image">
                            <img src="{{ asset('assets/images/gallery/event-1.png') }}" alt="img">
                        </div>
                        <div class="blog-contant event-content about-event-content">
                            <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">30 March
                                    2023<span></span></a></div>
                            <div class="comments">
                                <ul>
                                    <li><i class="fa fa-clock"></i> <span> 8:00pm</span></li>
                                    <li><i class="flaticon-pin"></i> <span> Dhaka</span></li>
                                </ul>
                            </div>
                            <a href="{{ route('events.details') }}" class="hover-content">Contrary to popular belief</a>
                            <div class="blog-btn event-btn opacity-btn">
                                <a href="{{ route('events') }}">Read More <i class="flaticon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card event-card wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="causes-image blog-image event-image">
                            <img src="{{ asset('assets/images/gallery/event-2.png') }}" alt="img">
                        </div>
                        <div class="blog-contant event-content about-event-content">
                            <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">30 March
                                    2023<span></span></a></div>
                            <div class="comments">
                                <ul>
                                    <li><i class="fa fa-clock"></i> <span> 8:00pm</span></li>
                                    <li><i class="flaticon-pin"></i> <span> New York</span></li>
                                </ul>
                            </div>
                            <a href="{{ route('events.details') }}" class="hover-content">Developing Low Carbon</a>
                            <div class="blog-btn event-btn opacity-btn">
                                <a href="{{ route('events') }}">Read More <i class="flaticon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card event-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="causes-image blog-image event-image">
                            <img src="{{ asset('assets/images/gallery/event-3.png') }}" alt="img">
                        </div>
                        <div class="blog-contant event-content about-event-content">
                            <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">30 March
                                    2023<span></span></a></div>
                            <div class="comments">
                                <ul>
                                    <li><i class="fa fa-clock"></i> <span> 8:00pm</span></li>
                                    <li><i class="flaticon-pin"></i> <span> Khulna</span></li>
                                </ul>
                            </div>
                            <a href="{{ route('events.details') }}" class="hover-content">Play for the world</a>
                            <div class="blog-btn event-btn opacity-btn">
                                <a href="{{ route('events') }}">Read More <i class="flaticon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-bottom-btn">
                        <div class="header-link-btn"><a href="{{ route('events') }}" class="btn-1">View All
                                Events<span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- events -->

    <!-- volunteers starts -->
    <section class="volunteers about-volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Our Volunteers</h5>
                        <h3>Meet Our Expert Team</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="volunteers-content-inner">
                            <div class="volunteers-content-wrapper">
                                <div class="volunteers-image">
                                    <a href="{{ route('team3') }}"><img
                                            src="{{ asset('assets/images/team/team-05.png') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="volunteers-info">
                                <a href="{{ route('team3') }}" class="volunteers-info-link">Wade Warren</a>
                                <p>Volunteers</p>
                                <div class="volunteers-media">
                                    <ul>
                                        <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="volunteers-content-inner">
                            <div class="volunteers-content-wrapper">
                                <div class="volunteers-image">
                                    <a href="{{ route('team3') }}"><img
                                            src="{{ asset('assets/images/team/team-06.png') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="volunteers-info">
                                <a href="{{ route('team3') }}" class="volunteers-info-link">Courtney Henry</a>
                                <p>Volunteers</p>
                                <div class="volunteers-media">
                                    <ul>
                                        <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="volunteers-content-inner">
                            <div class="volunteers-content-wrapper">
                                <div class="volunteers-image">
                                    <a href="{{ route('team3') }}"><img
                                            src="{{ asset('assets/images/team/team-07.png') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="volunteers-info">
                                <a href="{{ route('team3') }}" class="volunteers-info-link">Robert Fox</a>
                                <p>Volunteers</p>
                                <div class="volunteers-media">
                                    <ul>
                                        <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="volunteers-content-inner">
                            <div class="volunteers-content-wrapper">
                                <div class="volunteers-image">
                                    <a href="{{ route('team3') }}"><img
                                            src="{{ asset('assets/images/team/team-08.png') }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="volunteers-info">
                                <a href="{{ route('team3') }}" class="volunteers-info-link">Devon Lane</a>
                                <p>Volunteers</p>
                                <div class="volunteers-media">
                                    <ul>
                                        <li><a href="#0"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 text-center">
                    <div class="header-link-btn"><a href="{{ route('team') }}" target="_blank" class="btn-1">View All
                            Team<span></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- volunteers ends -->

    <!-- news-letter -->
    <section class="home-three-news_letter">
        <div class="auto_container">
            <div class="news_letter_content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="news_letter_left p_relative">
                            <h3>Newsletter</h3>
                            <h4>To get weekly & monthly news, <br>
                                Subscribe to our newsletter.</h4>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 ps-xl-0">
                        <div class="news_letter_right p_relative">
                            <div class="form-inner p_relative">
                                <form action="{{ route('home') }}" method="post" class="subscribe-form">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your mail address"
                                            required="">
                                        <div class="news-form-btn">
                                            <button type="submit" class="news_letter_btn"></button>
                                            <a href="javascript:void(0);" class="btn-1 btn-alt btn-3">Subscribe
                                                <span></span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-letter-end -->
@endsection
