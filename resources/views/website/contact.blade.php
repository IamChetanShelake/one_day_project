@extends('layouts.master')

@section('title', 'Contact-US')

@section('content')


    <!-- common banner -->
    <section class="common-banner" style="background-image: url('assets/images/123.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-title">
                        <h3>Contact us</h3>
                        <a href="index.html">Home </a>/
                        <span> Contact us</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- common banner -->

    <!-- contact us -->
    <section class="contact-us">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-02.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Contact with us</h5>
                        <h3>Send Us A Message </h3>
                    </div>
                </div>
                <div class="col-xl-6">
                    <form>
                        <input type="text" name="name" class="contuct-us-input" placeholder="Your Name">
                    </form>
                </div>
                <div class="col-xl-6">
                    <form>
                        <input type="email" name="email" class="contuct-us-input" placeholder="Your Email">
                    </form>
                </div>
                <div class="col-xl-6">
                    <form>
                        <input type="number" name="number" class="contuct-us-input" placeholder="Phone Number">
                    </form>
                </div>
                <div class="col-xl-6">
                    <form>
                        <input type="text" name="sub" class="contuct-us-input" placeholder="Subject">
                    </form>
                </div>
                <div class="col-xl-12">
                    <form>
                        <textarea name="textarea" class="contuct-us-input contuct-us-textarea">Your Message</textarea>
                    </form>
                </div>
                <div class="col-xl-12">
                    <div class="contact-us-btn">
                        <form>
                            <button type="submit" class="btn-1">Send Message <span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us -->

    <!-- contact container -->
    <section class="contact-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-containt wow fadeInLeft">
                        <h5>Quick Contact</h5>
                        <div class="contact-info">
                            <div class="contact-info-left">
                                <a href="#"><i class="fa fa-phone"></i></a>
                            </div>
                            <div class="contact-info-right">
                                <p>Main Office</p>
                                <a href="tel:(+233)456-789-01">(+233)456-789-01</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-containt wow fadeInRight">
                        <h5>Ratnakukshi Bhakti Foundation
                            Office Address</h5>
                        <div class="contact-info">
                            <div class="contact-info-left">
                                <a href="#"><i class="flaticon-location"></i></a>
                            </div>
                            <div class="contact-info-right">
                                <p>
                                    Shop No. 2, 11th Floor, A-wing, Oberoi Garden City,
                                    International Business Park, Goregaon East,
                                    Mumbai – 400063</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="contact-containt wow fadeInUp">
                        <h5>Email Address</h5>
                        <div class="contact-info">
                            <div class="contact-info-left">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                            <div class="contact-info-right">
                                <p>Mail to</p>
                                <a href="mailto: info@ratnakukshi.org"> info@ratnakukshi.org
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- contact container -->

    <!-- map -->
    <div class="map">
        {{-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d48474.64872611011!2d-75.5188393826804!3d40.59313733852438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s4140%20Parker%20Rd.%20Allentown%2C%20New%20Mexico!5e0!3m2!1sen!2sbd!4v1676449615021!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.511023647916!2d72.85574239678957!3d19.172869799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b790fe48b1f3%3A0x7898206e56df0bd!2sOberoi%20Realty%20Limited!5e0!3m2!1sen!2sin!4v1767439492985!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- map -->
@endsection
