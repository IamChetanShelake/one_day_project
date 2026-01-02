@extends('layouts.master')

@section('title', 'Causes - Save Us')

@section('content')
    <!-- common banner -->
    <section class="common-banner" style="background-image: url('{{ asset('assets/images/banner/common-banner-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-title">
                        <h3>Latest Causes</h3>
                        <a href="{{ route('home') }}">Home </a>/
                        <span> Causes</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- common banner -->

     <!-- causes -->
     <section class="causes causes-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card">
                        <div class="causes-image-container">
                            <div class="causes-image-overlay wow"></div>
                            <div class="causes-image">
                                <a href="{{ route('causes.details') }}"><img src="{{ asset('assets/images/gallery/causes-01.jpg') }}" alt="img"></a>
                                <div class="header-link-btn"><a href="{{ route('causes.details') }}" class="btn-1">Education<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">Ensure Clean Water To The stn Afri. can Kids.</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar">
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
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card">
                        <div class="causes-image-container">
                            <div class="causes-image-overlay wow"></div>
                            <div class="causes-image">
                                <a href="{{ route('causes.details') }}"><img src="{{ asset('assets/images/gallery/causes-02.jpg') }}" alt="img"></a>
                            <div class="header-link-btn"><a href="{{ route('causes.details') }}" class="btn-1">Medical<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">It is a long established fact that a reader</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar causes-bar-3">
                            <div id="skills-section-one">
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
                                <a href="{{ route('causes.details') }}"><img src="{{ asset('assets/images/gallery/causes-03.jpg') }}" alt="img"></a>
                            <div class="header-link-btn"><a href="{{ route('causes.details') }}" class="btn-1">Residence<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">There are many variations of passages</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar">
                            <div id="skills-section-two">
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
                <div class="col-xl-4 col-lg-4">
                    <div class="causes-card">
                        <div class="causes-image-container">
                            <div class="causes-image-overlay wow"></div>
                            <div class="causes-image">
                                <a href="{{ route('causes.details') }}"><img src="{{ asset('assets/images/gallery/causes-07.png') }}" alt="img"></a>
                                <div class="header-link-btn"><a href="{{ route('causes.details') }}" class="btn-1">Education<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">Ensure Clean Water To The stn Afri. can Kids.</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar">
                            <div id="skills-section-three">
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
                                <a href="{{ route('causes.details') }}"><img src="{{ asset('assets/images/gallery/causes-08.png') }}" alt="img"></a>
                            <div class="header-link-btn"><a href="{{ route('causes.details') }}" class="btn-1">Medical<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">It is a long established fact that a reader</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar causes-bar-3">
                            <div id="skills-section-four">
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
                                <a href="{{ route('causes.details') }}"><img src="{{ asset('assets/images/gallery/causes-09.png') }}" alt="img"></a>
                            <div class="header-link-btn"><a href="{{ route('causes.details') }}" class="btn-1">Residence<span></span></a></div>
                            </div>
                        </div>
                        <div class="causes-content">
                            <a href="{{ route('causes.details') }}">There are many variations of passages</a>
                            <p>There are many of lorem, but majori have suffered alteration in some form.</p>
                        </div>
                        <div class="causes-bar">
                            <div id="skills-section-five">
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
                <div class="col-xl-12">
                    <div class="paigenition">
                        <ul>
                            <li><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0">3</a></li>
                            <li><a href="#0"><i class="flaticon-right-arrow-1"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- causes -->

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
