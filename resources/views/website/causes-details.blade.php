@extends('layouts.master')

@section('title', 'Cause Details - Save Us')

@section('content')
    <!-- common banner -->
    <section class="common-banner" style="background-image: url('{{ asset('assets/images/banner/common-banner-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-title">
                        <h3>Cause Details</h3>
                        <a href="{{ route('home') }}">Home </a>/
                        <span> Cause Details</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- common banner -->

    <!-- causes details -->
    <section class="causes-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="causes-details-card">
                        <div class="causes-image-container">
                            <div class="causes-image-overlay wow"></div>
                            <div class="causes-image">
                                <img src="{{ asset('assets/images/gallery/causes-01.jpg') }}" alt="img">
                                <div class="header-link-btn"><a href="{{ route('causes') }}" class="btn-1">Education<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-details-content">
                            <h5>Ensure Clean Water To The stn Afri. can Kids.</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="causes-bar causes-bar-details">
                            <div id="skills-section">
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

                    <div class="causes-categories">
                        <ul>
                            <li><a href="{{ route('causes') }}"><i class="flaticon-arrow-right-1"></i> Education for Children</a></li>
                            <li><a href="{{ route('causes') }}"><i class="flaticon-arrow-right-1"></i> Food for Poor Children</a></li>
                            <li><a href="{{ route('causes') }}"><i class="flaticon-arrow-right-1"></i> Medical Help for Children</a></li>
                            <li><a href="{{ route('causes') }}"><i class="flaticon-arrow-right-1"></i> Pure Water for Children</a></li>
                        </ul>
                    </div>

                    <div class="main-causes-content">
                        <div class="causes-details-title">
                            <h3>Why this cause is important</h3>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                        <div class="main-causes-content-img">
                            <img src="{{ asset('assets/images/gallery/causes-info-img-1.png') }}" alt="img">
                            <img src="{{ asset('assets/images/gallery/causes-info-img-2.png') }}" alt="img">
                        </div>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="cause-details-image">
                        <img src="{{ asset('assets/images/gallery/causes-info-img-3.png') }}" alt="img">
                    </div>
                    <div class="causes-card-form">
                        <div class="causes-card-form-input">
                            <h5>Donation Information</h5>
                            <ul>
                                <li><input type="radio" id="one-time" name="donation-type" value="one-time" checked>
                                    <label for="one-time"><span>One Time</span></label></li>
                                <li><input type="radio" id="monthly" name="donation-type" value="monthly">
                                    <label for="monthly"><span>Monthly</span></label></li>
                            </ul>
                        </div>
                        <div class="causes-form-group">
                            <input type="email" placeholder="Your Email">
                        </div>
                        <div class="causes-form-group">
                            <input type="text" placeholder="Amount">
                        </div>
                        <div class="causes-form-group">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="causes-form-group">
                            <button class="btn-1">Donate Now<span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- causes details -->

    <!-- news-letter -->
    <section class="news_letter">
        <div class="auto_container">
            <div class="news_letter_content">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="news_letter_left p_relative">
                            <h3>Newsletter</h3>
                            <h4>To get weekly & monthly news, <br>
                                Subscribe to our newsletter.</h4>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 ps-xl-0">
                        <div class="news_letter_right p_relative">
                            <div class="form-inner p_relative">
                                <form action="{{ route('home') }}" method="post" class="subscribe-form">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your mail address" required="">
                                        <div class="news-form-btn">
                                            <button type="submit" class="news_letter_btn"></button>
                                            <a href="javascript:void(0);" class="btn-1 btn-alt">Subscribe <span></span></a>
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
