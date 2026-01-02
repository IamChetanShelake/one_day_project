<!-- news-letter -->
{{-- <section class="news_letter">
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
</section> --}}
<!-- news-letter-end -->

<!-- main-footer -->
<footer class="main__footer p_relative">
    <div class="main__footer__top" style="background-image: url('{{ asset('assets/images/shape/shape-01.png') }}');">
        <div class="footer__middle  p_relative d_block">
            <div class="auto_container">
                <div class="footer__middle__content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer_column">
                            <div class="footer_widget left">
                                <div class="footer__logo">
                                    <figure>
                                        <img src="{{ asset('assets/images/ratnakukshi_logo.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="widget_content">
                                    <p>
                                        Ratnakukshi Bhakti Foundation is a spiritual and social initiative rooted in
                                        Jain values.
                                    </p>
                                </div>
                                <div class="widget_media">
                                    <ul>
                                        <li><a href="#0"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-linkedin"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer_column">
                            <div class="footer_widget links_widget ml_100">
                                <div class="widget_title">
                                    <h4>Services</h4>
                                </div>
                                <div class="widget_content">
                                    <ul class="links_list clearfix">
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('causes') }}">Causes</a></li>
                                        <li><a href="{{ route('team') }}">Our Team</a></li>
                                        <li><a href="{{ route('events.details') }}">Latest News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer_column">
                            <div class="footer_widget links_widget">
                                <div class="widget_title">
                                    <h4>Fundraising</h4>
                                </div>
                                <div class="widget_content">
                                    <ul class="links_list clearfix">
                                        <li><a href="{{ route('events') }}">Education</a></li>
                                        <li><a href="{{ route('causes') }}">Food Donation</a></li>
                                        <li><a href="{{ route('team') }}">Medical Help</a></li>
                                        <li><a href="{{ route('events.carousel') }}">Technology</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer_column">
                            <div class="footer_widget links_widget">
                                <div class="widget_title">
                                    <h4>Contact</h4>
                                </div>
                                <div class="widget_content">
                                    <ul class="links_list right">
                                        <li> <b>Ratnakukshi Bhakti Foundation</b> Shop No. 2, 11th Floor, A-wing, Oberoi
                                            Garden City,
                                            International Business Park, Goregaon East,
                                            Mumbai – 400063
                                        </li>
                                        <li><a href="info@ratnakukshi.org"><i class="flaticon-email"></i>
                                                info@ratnakukshi.org</a></li>
                                        {{-- <li><a href="tel:081243256"><i class="flaticon-phone-call"></i>(208)
                                                555-0112</a></li> --}}
                                        <li>
                                            <div class="header-link-btn footer-donate"><a href="{{ route('donate') }}"
                                                    target="_blank" class="btn-1 btn-alt">Donate Now <span></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom p_relative">
        <div class="auto_container">
            <div class="bottom_inner  p_relative">
                <div class="copyright">
                    <p> Ratnakukshi Trust © {{ date('Y') }}. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="icon-42"><i class="fa fa-angle-double-right"></i></span>
</button>
<!--Scroll to top-->
