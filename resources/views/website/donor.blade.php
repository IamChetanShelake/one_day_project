@extends('layouts.master')

@section('title', 'Donor')

@section('content')
    <style>
        .contact-containt {
            border: 1px solid #CECECE;
            border-radius: 0;
            box-shadow: 0 10px 20px rgba(0.5, 0.5, 0.5, 0.15);
        }


        .contact-info {
            display: block;
            text-align: center;
        }

        .contact-info img {
            display: block;
            margin: 0 auto;
        }

        .contact-info p {
            margin-top: 10px;
        }
    </style>

    <!-- common banner -->
    <section class="common-banner" style="background-image: url('assets/images/1234.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-title">
                        <h3>Donar</h3>
                        <a href="index.html">Home </a>/
                        <span> Donar</span>
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
                        <h5>Our Donors</h5>
                        <h3>Our Donors</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/1.Prithviraj kothari.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Prithvirajji Kothari (RSBL)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/2.vijay bhandari.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Vijayji Bhandari (Pune)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/3.Lalitji Dangi (Mumbai).png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Lalitji Dangi (Mumbai)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/4. Ganpatji Chaudhary (Ahmedabad).png') }}"
                                alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;

                                    line-height: 100%;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Ganpatji Chaudhary (Ahmedabad)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/5.Vikramji Jain (Speri Group, Delhi).png') }}"
                                alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;

                                    line-height: 100%;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Vikramji Jain (Speri Group, Delhi)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/6. Manoj mehta.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Manojji Mehta (MTC Group)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/7. Jignesh doshi.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Jigneshji Doshi (Vishakha Group, Ahmedabad)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/8. Rajesh chandan.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Rajeshji Chandan (Chennai)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/9. Saurab boraharan.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Saurabhji Bohra (Mumbai)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/10. Subhashji Runwal.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Subhashji Runwal (Runwal Builders)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/11. vinay jain.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Vinay jain</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/12. Gaurav singhavi.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Gauravji T. K. Singhvi (Surat)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/daulat jain.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Dolatji Jain (Chennai)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/gaurav rathod.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Gauravji Rathod</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/himanshu shah.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Himanshuji Shah (Monark Group, Ahmedabad)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/paras gundecha.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Parasji Gundecha (Gundecha Builders)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/pradeep rathod.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Pradipji Rathod Family (Cello Group) – 6 Members
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/ramesh haran.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Rameshji Hiran (Bangalore)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/sheetal.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Sheetalji Dugad (R.B.D Group, Vinodbhai)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/Sunil khatotia.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Sunil khatotia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/Suresh furetmal.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Suresh Furetmal</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-2 mt-2">
                    <div class="contact-containt wow fadeInLeft" style="margin:20px 0;">
                        {{-- <h5>Quick Contact</h5> --}}
                        <div class="contact-info text-center">
                            <img src="{{ asset('assets/images/donors/uttam jain.png') }}" alt="donor"
                                style="width: 250px;height:250px;border-radius:50%;border: 2px solid #7A1F1F;">
                            <p
                                style="font-family: Poppins;
                                    font-weight: 600;
                                    font-style: SemiBold;
                                    font-size: 22px;
                                    leading-trim: NONE;
                                    letter-spacing: 0%;
                                    text-align: center;
                                    color: #7A1F1F;
                                    margin-top:40px;">
                                Shri Uttamji Jain (Neon Group)</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- contact us -->



@endsection
