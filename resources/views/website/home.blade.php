@extends('layouts.master')

@section('title', 'Ratnakukshi - Home')

@section('content')
    <style>
        @media (min-width: 1200px) {
            .custom-xl-width {
                width: 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }
    </style>
    <!-- banner section starts -->
    <section class="banner">
        <div class="banner-image" style="background-image: url('{{ asset('assets/images/shape/Group 148.png') }}');">

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
                                                {{-- <h2>A sacred initiative dedicated to the families of Jain Sadhus and Sadhvis
                                                </h2> --}}
                                                {{-- <h2>A Sacred Initiative for Jain Sadhu–Sadhvi Families</h2> --}}
                                                <h2 style="font-size:50px !important;">Serving Jain Sadhu–Sadhvi Families
                                                </h2>
                                                <p style="font-weight:300 !important;">Ratnakukshi Bhakti Foundation serves
                                                    the families who have selflessly
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
                                        <img src="{{ asset('assets/images/baner1.jpeg') }}" alt="banner-two-image">
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
                                                {{-- <h2>When a Sadhu renounces the world, a family also embraces sacrifice
                                                </h2> --}}
                                                <h2 style="font-size:50px !important;">Renunciation Shared by the Family
                                                </h2>
                                                <p style="font-weight:300 !important;">We honor this sacrifice by providing
                                                    need-based support in food, health,
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
                                        <img src="{{ asset('assets/images/baner2.jpeg') }}" alt="banner-two-image">
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
                                                <h2 style="font-size:50px !important;">Spiritual Family Support
                                                </h2>
                                                <p style="font-weight:300 !important;">Ratnakukshi Bhakti Foundation
                                                    provides dignified, need-based support to
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
                                        <img src="{{ asset('assets/images/baner3.jpeg') }}" alt="banner-two-image">
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
                        <h3>How We Support Ratnakukshi Families</h3>
                        <div class="title-shape">
                            <img src="{{ asset('assets/images/shape/service-title-shape.png') }}" alt="map">
                        </div>
                    </div>
                </div>
                <div class="service-content-wrapper">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-6 custom-xl-width">
                            <div class="service-container wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="service-container-overlay"></div>
                                <div class="service-number">
                                    <span>01</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-04.png') }}" alt="shape">
                                    </div>
                                    <div class="service-icon">
                                        <svg width="60" height="60" viewBox="0 0 34 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.14284 11.0992V11.077C2.14281 8.88888 2.79471 6.74973 4.0163 4.92948C5.23788 3.10923 6.97442 1.68943 9.00683 0.849195C11.0392 0.00896325 13.2765 -0.214049 15.4362 0.208293C17.596 0.630635 19.5815 1.67941 21.1424 3.2223C22.3704 2.61975 23.7421 2.3664 25.106 2.49026C26.4698 2.61412 27.7726 3.11035 28.8705 3.92414C29.9684 4.73793 30.8187 5.83759 31.3273 7.10163C31.8359 8.36567 31.9831 9.74488 31.7527 11.0869C32.0915 11.1181 32.4202 11.2185 32.7183 11.3817C33.0164 11.5448 33.2774 11.7673 33.4851 12.0353C33.6928 12.3032 33.8428 12.6108 33.9256 12.9389C34.0084 13.267 34.0223 13.6086 33.9664 13.9422C32.8471 20.6351 30.0788 24.8714 25.6663 26.6536V28.3077C25.6663 29.287 25.275 30.2261 24.5784 30.9186C23.8819 31.611 22.9371 32 21.9521 32H12.0475C11.0624 32 10.1176 31.611 9.42109 30.9186C8.72454 30.2261 8.33322 29.287 8.33322 28.3077V26.6536C3.92072 24.8714 1.15238 20.6351 0.0331573 13.9422C-0.0208581 13.6174 -0.00878001 13.2851 0.0686767 12.9651C0.146133 12.645 0.287395 12.3436 0.484101 12.0787C0.680807 11.8139 0.92896 11.5909 1.21388 11.4231C1.49879 11.2553 1.81468 11.146 2.14284 11.1016V11.0992ZM4.61899 11.077H7.09515C7.09515 9.44494 7.74734 7.87969 8.90827 6.72563C10.0692 5.57156 11.6437 4.92321 13.2855 4.92321C14.9273 4.92321 16.5019 5.57156 17.6628 6.72563C18.8237 7.87969 19.4759 9.44494 19.4759 11.077H21.9521C21.9521 8.7921 21.039 6.60075 19.4137 4.98506C17.7884 3.36937 15.584 2.46169 13.2855 2.46169C10.987 2.46169 8.78265 3.36937 7.15736 4.98506C5.53207 6.60075 4.61899 8.7921 4.61899 11.077ZM9.5713 11.077H16.9998C16.9998 10.0978 16.6084 9.15863 15.9119 8.46619C15.2153 7.77375 14.2706 7.38474 13.2855 7.38474C12.3005 7.38474 11.3557 7.77375 10.6592 8.46619C9.96262 9.15863 9.5713 10.0978 9.5713 11.077ZM26.5726 11.077H29.2245C29.4115 10.3496 29.4289 9.58931 29.2755 8.85415C29.1221 8.11899 28.8019 7.42834 28.3393 6.83483C27.8767 6.24132 27.2839 5.76062 26.6062 5.42934C25.9284 5.09806 25.1835 4.92496 24.4282 4.92321C23.8339 4.92321 23.2694 5.0266 22.7444 5.21614C23.1827 5.91521 23.5442 6.66844 23.8216 7.45859C24.2932 7.3423 24.7888 7.36625 25.2468 7.52745C25.7049 7.68864 26.1052 7.98 26.3982 8.36536C26.6912 8.75072 26.8639 9.21312 26.8949 9.69518C26.9259 10.1772 26.8138 10.6577 26.5726 11.077ZM23.1901 27.077H10.8094V28.3077C10.8094 28.6341 10.9398 28.9472 11.172 29.178C11.4042 29.4088 11.7191 29.5385 12.0475 29.5385H21.9521C22.2804 29.5385 22.5953 29.4088 22.8275 29.178C23.0597 28.9472 23.1901 28.6341 23.1901 28.3077V27.077ZM9.93777 24.6154H24.0617C27.9889 23.36 30.475 19.8105 31.5249 13.5386H2.47464C3.52453 19.8105 6.01059 23.36 9.93777 24.6154Z"
                                                fill="#883333" />
                                        </svg>

                                    </div>
                                    <h5 style="font-size:25px !important;"> Food </h5>
                                    <p>Providing essential food support.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 custom-xl-width">
                            <div class="service-container wow fadeInUp" data-wow-delay="900ms"
                                data-wow-duration="1500ms">
                                <div class="service-container-overlay"></div>
                                <div class="service-number">
                                    <span>02</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-04.png') }}" alt="icon">
                                    </div>
                                    <div class="service-icon">
                                        {{-- <span class="icon-service-icon-04"></span> --}}


                                        <svg width="65" height="60" viewBox="0 0 38 31" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M29.25 29.25L35.942 22.558C36.139 22.3613 36.2498 22.0944 36.25 21.816V12.625C36.25 11.9288 35.9734 11.2611 35.4812 10.7688C34.9889 10.2766 34.3212 10 33.625 10C32.9288 10 32.2611 10.2766 31.7688 10.7688C31.2766 11.2611 31 11.9288 31 12.625V20.5"
                                                stroke="#883333" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M29.25 22.25L30.7515 20.7485C30.8307 20.67 30.8935 20.5764 30.9361 20.4734C30.9788 20.3703 31.0005 20.2598 31 20.1482C30.9988 19.9911 30.9544 19.8373 30.8717 19.7037C30.789 19.57 30.6711 19.4617 30.531 19.3905L29.7557 19.0038C29.099 18.6754 28.3555 18.5619 27.6306 18.6793C26.9058 18.7968 26.2362 19.1392 25.7167 19.6583L24.1505 21.2245C23.4941 21.8807 23.1252 22.7708 23.125 23.699V29.25M8.25 29.25L1.558 22.558C1.36103 22.3613 1.25025 22.0944 1.25 21.816V12.625C1.25 11.9288 1.52656 11.2611 2.01884 10.7688C2.51113 10.2766 3.17881 10 3.875 10C4.57119 10 5.23887 10.2766 5.73116 10.7688C6.22344 11.2611 6.5 11.9288 6.5 12.625V20.5"
                                                stroke="#883333" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.25 22.25L6.7485 20.7485C6.59171 20.5877 6.50273 20.3728 6.5 20.1482C6.5 19.828 6.682 19.5358 6.969 19.3905L7.74425 19.0038C8.40104 18.6754 9.14449 18.5619 9.86935 18.6793C10.5942 18.7968 11.2638 19.1392 11.7833 19.6583L13.3495 21.2245C14.0059 21.8807 14.3748 22.7708 14.375 23.699V29.25M21.6672 15.25H15.8328V11.1672H11.75V5.33275H15.8328V1.25H21.6672V5.33275H25.75V11.1672H21.6672V15.25Z"
                                                stroke="#883333" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <h5 style="font-size:25px !important;">Health</h5>
                                    <p>Emergency Medical Help </p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-2 col-lg-6 col-md-6">
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
                        </div> --}}
                        <div class="col-xl-2 col-lg-2 col-md-6 custom-xl-width">
                            <div class="service-container wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="service-container-overlay"></div>
                                <div class="service-number">
                                    <span>03</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-04.png') }}"
                                            alt="icon">
                                    </div>
                                    <div class="service-icon">
                                        {{-- <span class="icon-service-icon-03"></span> --}}

                                        <svg width="60" height="58" viewBox="0 0 36 29" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.62929 7.03058C1.25425 7.20451 0.937154 7.48009 0.715048 7.82511C0.492943 8.17014 0.375 8.57036 0.375 8.97902C0.375 9.38768 0.492943 9.7879 0.715048 10.1329C0.937154 10.4779 1.25425 10.7535 1.62929 10.9275L4.7551 12.3823V20.8313C4.7551 22.4305 5.2819 24.2152 6.81858 25.3144C8.75528 26.6938 12.2833 28.375 17.8792 28.375C23.475 28.375 26.9943 26.6831 28.9397 25.3144C30.4764 24.2195 31.0032 22.4478 31.0032 20.8313V12.3823L33.1891 11.3628V20.8248C33.1891 21.1106 33.3043 21.3847 33.5092 21.5868C33.7142 21.7889 33.9922 21.9025 34.2821 21.9025C34.5719 21.9025 34.8499 21.7889 35.0549 21.5868C35.2598 21.3847 35.375 21.1106 35.375 20.8248V8.9704C35.3751 8.56221 35.2576 8.1624 35.0363 7.81746C34.8149 7.47253 34.4988 7.19666 34.1247 7.02196L21.6214 1.20252C20.4528 0.657623 19.1762 0.375 17.8835 0.375C16.5909 0.375 15.3143 0.657623 14.1457 1.20252L1.6424 7.02196L1.62929 7.03058ZM6.94099 20.8248V13.3889L14.1326 16.7512C15.3012 17.2961 16.5777 17.5787 17.8704 17.5787C19.1631 17.5787 20.4397 17.2961 21.6083 16.7512L28.7999 13.3889V20.8248C28.7999 22.0232 28.4064 23.0017 27.6413 23.5406C26.0588 24.6678 22.9854 26.2132 17.8704 26.2132C12.7554 26.2132 9.67335 24.6786 8.09951 23.5406C7.33664 22.9974 6.94099 22.0124 6.94099 20.8248ZM15.0725 3.15096C15.9471 2.74247 16.9027 2.53057 17.8704 2.53057C18.8381 2.53057 19.7938 2.74247 20.6684 3.15096L33.1716 8.9704L20.6684 14.7898C19.7938 15.1983 18.8381 15.4102 17.8704 15.4102C16.9027 15.4102 15.9471 15.1983 15.0725 14.7898L2.56922 8.9704L15.0725 3.15096Z"
                                                fill="#883333" stroke="#883333" stroke-width="0.75" />
                                        </svg>


                                    </div>
                                    <h5 style="font-size:25px !important;">Education
                                    </h5>
                                    <p>Enabling access to learning.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 custom-xl-width">
                            <div class="service-container wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="service-container-overlay"></div>
                                <div class="service-number">
                                    <span>04</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-04.png') }}"
                                            alt="shape">
                                    </div>
                                    <div class="service-icon">
                                        {{-- <span class="icon-service-icon-01"></span> --}}


                                        <svg width="65" height="60" viewBox="0 0 47 35" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.3583 34.375C11.3099 34.375 10.4169 34.0084 9.67937 33.2751C8.9403 32.5419 8.57077 31.6533 8.57077 30.6094V13.2797L2.26133 17.9517C1.98477 18.1304 1.69961 18.2057 1.40585 18.1778C1.11054 18.1498 0.858193 17.9983 0.648816 17.7234C0.437876 17.4484 0.348813 17.1649 0.381626 16.8729C0.414438 16.5793 0.569127 16.3276 0.845693 16.1179L21.0701 1.08574C21.4092 0.834082 21.7709 0.653102 22.1553 0.542806C22.5397 0.43251 22.9397 0.376585 23.3553 0.375031C23.7709 0.373478 24.1717 0.429403 24.5576 0.542806C24.9436 0.656209 25.3045 0.836411 25.6405 1.08341L33.5413 6.93222V3.94956C33.5413 3.33594 33.7554 2.81631 34.1835 2.39066C34.6117 1.96501 35.1335 1.75218 35.7492 1.75218C36.3648 1.75218 36.8875 1.96501 37.3171 2.39066C37.7468 2.81631 37.9609 3.33516 37.9593 3.94723V10.2295L45.9094 16.1202C46.1766 16.3284 46.329 16.5793 46.3665 16.8729C46.404 17.1665 46.318 17.45 46.1086 17.7234C45.8993 17.9968 45.6469 18.1483 45.3516 18.1778C45.0563 18.2073 44.7703 18.1319 44.4938 17.9517L38.1843 13.2774V30.6117C38.1843 31.6525 37.8156 32.5404 37.0781 33.2751C36.3406 34.0084 35.4476 34.375 34.3991 34.375H30.0257C28.9772 34.375 28.0842 34.0084 27.3467 33.2751C26.6092 32.5419 26.2405 31.6533 26.2405 30.6094V23.6188C26.2405 23.2009 26.1053 22.8576 25.835 22.5888C25.5647 22.3201 25.2194 22.1857 24.7991 22.1857H21.9139C21.492 22.1857 21.1459 22.3201 20.8756 22.5888C20.6053 22.8576 20.4701 23.2009 20.4701 23.6188V30.6094C20.4701 31.6533 20.1014 32.5419 19.3638 33.2751C18.6263 34.0084 17.7334 34.375 16.6849 34.375H12.3583ZM12.3583 32.0448H16.6849C17.1052 32.0448 17.4505 31.9104 17.7209 31.6417C17.9912 31.3729 18.1263 31.0296 18.1263 30.6117V23.6211C18.1263 22.5787 18.4951 21.6902 19.2326 20.9554C19.9717 20.2221 20.8654 19.8555 21.9139 19.8555H24.7967C25.8467 19.8555 26.7405 20.2221 27.478 20.9554C28.2155 21.6902 28.5842 22.5787 28.5842 23.6211V30.6117C28.5842 31.0296 28.7194 31.3729 28.9897 31.6417C29.26 31.9104 29.6054 32.0448 30.0257 32.0448H34.3991C34.8195 32.0448 35.1648 31.9104 35.4351 31.6417C35.7054 31.3729 35.8406 31.0296 35.8406 30.6117V11.5623L24.2108 2.97554C23.9733 2.79689 23.6881 2.70756 23.3553 2.70756C23.0225 2.70756 22.7373 2.79689 22.4998 2.97554L10.9145 11.5623V30.6117C10.9145 31.0296 11.0505 31.3729 11.3224 31.6417C11.5927 31.9104 11.938 32.0448 12.3583 32.0448ZM19.1177 13.4172H27.5928C27.5928 12.3235 27.1694 11.4233 26.3225 10.7165C25.4741 10.0096 24.485 9.65622 23.3553 9.65622C22.2256 9.65622 21.2373 10.0096 20.3904 10.7165C19.5435 11.4233 19.1193 12.3235 19.1177 13.4172ZM17.7209 31.6417C17.9912 31.3729 18.1263 31.0296 18.1263 30.6117V23.6211C18.1263 22.5787 18.4951 21.6902 19.2326 20.9554C19.9717 20.2221 20.8654 19.8555 21.9139 19.8555H24.7967C25.8467 19.8555 26.7405 20.2221 27.478 20.9554C26.7405 20.2206 25.8475 19.854 24.7991 19.8555H21.9139C20.8654 19.8555 19.9717 20.2221 19.2326 20.9554C18.4951 21.6902 18.1263 22.5787 18.1263 23.6211V30.6117C18.1263 31.0296 17.9912 31.3729 17.7209 31.6417Z"
                                                fill="#883333" />
                                            <path
                                                d="M21.9139 19.8555C20.8654 19.8555 19.9717 20.2221 19.2326 20.9554C18.4951 21.6902 18.1263 22.5787 18.1263 23.6211V30.6117C18.1263 31.0296 17.9912 31.3729 17.7209 31.6417C17.4505 31.9104 17.1052 32.0448 16.6849 32.0448H12.3583C11.938 32.0448 11.5927 31.9104 11.3224 31.6417C11.0505 31.3729 10.9145 31.0296 10.9145 30.6117V11.5623L22.4998 2.97554C22.7373 2.79689 23.0225 2.70756 23.3553 2.70756C23.6881 2.70756 23.9733 2.79689 24.2108 2.97554L35.8406 11.5623V30.6117C35.8406 31.0296 35.7054 31.3729 35.4351 31.6417C35.1648 31.9104 34.8195 32.0448 34.3991 32.0448H30.0257C29.6054 32.0448 29.26 31.9104 28.9897 31.6417C28.7194 31.3729 28.5842 31.0296 28.5842 30.6117V23.6211C28.5842 22.5787 28.2155 21.6902 27.478 20.9554M21.9139 19.8555H24.7967C25.8467 19.8555 26.7405 20.2221 27.478 20.9554M21.9139 19.8555H24.7991C25.8475 19.854 26.7405 20.2206 27.478 20.9554M12.3583 34.375C11.3099 34.375 10.4169 34.0084 9.67937 33.2751C8.9403 32.5419 8.57077 31.6533 8.57077 30.6094V13.2797L2.26133 17.9517C1.98477 18.1304 1.69961 18.2057 1.40585 18.1778C1.11054 18.1498 0.858193 17.9983 0.648816 17.7234C0.437876 17.4484 0.348813 17.1649 0.381626 16.8729C0.414438 16.5793 0.569127 16.3276 0.845693 16.1179L21.0701 1.08574C21.4092 0.834082 21.7709 0.653102 22.1553 0.542806C22.5397 0.43251 22.9397 0.376585 23.3553 0.375031C23.7709 0.373478 24.1717 0.429403 24.5576 0.542806C24.9436 0.656209 25.3045 0.836411 25.6405 1.08341L33.5413 6.93222V3.94956C33.5413 3.33594 33.7554 2.81631 34.1835 2.39066C34.6117 1.96501 35.1335 1.75218 35.7492 1.75218C36.3648 1.75218 36.8875 1.96501 37.3171 2.39066C37.7468 2.81631 37.9609 3.33516 37.9593 3.94723V10.2295L45.9094 16.1202C46.1766 16.3284 46.329 16.5793 46.3665 16.8729C46.404 17.1665 46.318 17.45 46.1086 17.7234C45.8993 17.9968 45.6469 18.1483 45.3516 18.1778C45.0563 18.2073 44.7703 18.1319 44.4938 17.9517L38.1843 13.2774V30.6117C38.1843 31.6525 37.8156 32.5404 37.0781 33.2751C36.3406 34.0084 35.4476 34.375 34.3991 34.375H30.0257C28.9772 34.375 28.0842 34.0084 27.3467 33.2751C26.6092 32.5419 26.2405 31.6533 26.2405 30.6094V23.6188C26.2405 23.2009 26.1053 22.8576 25.835 22.5888C25.5647 22.3201 25.2194 22.1857 24.7991 22.1857H21.9139C21.492 22.1857 21.1459 22.3201 20.8756 22.5888C20.6053 22.8576 20.4701 23.2009 20.4701 23.6188V30.6094C20.4701 31.6533 20.1014 32.5419 19.3638 33.2751C18.6263 34.0084 17.7334 34.375 16.6849 34.375H12.3583ZM19.1177 13.4172H27.5928C27.5928 12.3235 27.1694 11.4233 26.3225 10.7165C25.4741 10.0096 24.485 9.65622 23.3553 9.65622C22.2256 9.65622 21.2373 10.0096 20.3904 10.7165C19.5435 11.4233 19.1193 12.3235 19.1177 13.4172Z"
                                                stroke="#883333" stroke-width="0.75" />
                                        </svg>
                                    </div>
                                    <h5 style="font-size:25px !important;">Home</h5>
                                    <p>Supporting safe housing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 custom-xl-width">
                            <div class="service-container wow fadeInUp" data-wow-delay="900ms"
                                data-wow-duration="1500ms">
                                <div class="service-container-overlay"></div>
                                <div class="service-number">
                                    <span>05</span>
                                </div>
                                <div class="service-container-inner">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/images/icons/service-shape-04.png') }}"
                                            alt="icon">
                                    </div>
                                    <div class="service-icon">
                                        {{-- <span class="icon-service-icon-04"></span> --}}
                                        <svg width="60" height="65" viewBox="0 0 37 38" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.5045 16.8456C13.8757 16.8456 12.2835 16.3626 10.9292 15.4577C9.5749 14.5528 8.51936 13.2666 7.89605 11.7618C7.27274 10.257 7.10965 8.60118 7.42741 7.00369C7.74517 5.40619 8.52951 3.9388 9.68124 2.78707C10.833 1.63534 12.3004 0.851004 13.8979 0.533243C15.4953 0.215482 17.1512 0.378568 18.656 1.00188C20.1608 1.62519 21.447 2.68073 22.3519 4.03502C23.2568 5.38931 23.7398 6.98153 23.7398 8.61032C23.7398 10.7945 22.8722 12.8891 21.3277 14.4336C19.7833 15.978 17.6886 16.8456 15.5045 16.8456ZM15.5045 2.82207C14.3411 2.82207 13.2038 3.16706 12.2364 3.81343C11.2691 4.45979 10.5151 5.37849 10.0699 6.45335C9.62467 7.52821 9.50817 8.71096 9.73515 9.85203C9.96212 10.9931 10.5224 12.0412 11.345 12.8639C12.1677 13.6866 13.2158 14.2468 14.3569 14.4738C15.498 14.7007 16.6807 14.5843 17.7556 14.139C18.8304 13.6938 19.7491 12.9399 20.3955 11.9725C21.0419 11.0052 21.3869 9.86786 21.3869 8.70444C21.3869 7.93195 21.2347 7.16703 20.9391 6.45335C20.6435 5.73967 20.2102 5.0912 19.6639 4.54497C19.1177 3.99875 18.4692 3.56545 17.7556 3.26984C17.0419 2.97422 16.277 2.82207 15.5045 2.82207ZM22.0574 18.2692C15.6909 16.8357 9.03015 17.5257 3.09269 20.2339C2.2761 20.6239 1.58712 21.238 1.10598 22.0044C0.624848 22.7709 0.371361 23.6583 0.375039 24.5633V31.5633C0.375039 31.7178 0.40547 31.8708 0.464593 32.0135C0.523717 32.1563 0.610375 32.286 0.71962 32.3952C0.828866 32.5044 0.95856 32.5911 1.1013 32.6502C1.24403 32.7094 1.39702 32.7398 1.55151 32.7398C1.70601 32.7398 1.85899 32.7094 2.00173 32.6502C2.14447 32.5911 2.27416 32.5044 2.3834 32.3952C2.49265 32.286 2.57931 32.1563 2.63843 32.0135C2.69756 31.8708 2.72799 31.7178 2.72799 31.5633V24.5633C2.71774 24.1053 2.84142 23.6543 3.08384 23.2656C3.32627 22.8768 3.67689 22.5673 4.0927 22.3751C7.66937 20.7232 11.5648 19.8758 15.5045 19.8927C17.7119 19.8901 19.9118 20.1508 22.0574 20.6692V18.2692ZM22.2221 29.4574H29.4457V31.1045H22.2221V29.4574Z"
                                                fill="#883333" stroke="#883333" stroke-width="0.75" />
                                            <path
                                                d="M35.1986 22.4692H29.1162V24.8221H34.0221V34.6692H17.3515V24.8221H24.7633V25.3162C24.7633 25.6283 24.8872 25.9275 25.1078 26.1481C25.3285 26.3688 25.6277 26.4927 25.9397 26.4927C26.2518 26.4927 26.551 26.3688 26.7716 26.1481C26.9923 25.9275 27.1162 25.6283 27.1162 25.3162V20.7397C27.1162 20.4277 26.9923 20.1285 26.7716 19.9079C26.551 19.6872 26.2518 19.5633 25.9397 19.5633C25.6277 19.5633 25.3285 19.6872 25.1078 19.9079C24.8872 20.1285 24.7633 20.4277 24.7633 20.7397V22.4692H16.175C15.863 22.4692 15.5637 22.5931 15.3431 22.8137C15.1225 23.0344 14.9985 23.3336 14.9985 23.6456V35.8457C14.9985 36.1577 15.1225 36.4569 15.3431 36.6776C15.5637 36.8982 15.863 37.0221 16.175 37.0221H35.1986C35.5106 37.0221 35.8098 36.8982 36.0305 36.6776C36.2511 36.4569 36.3751 36.1577 36.3751 35.8457V23.6456C36.3751 23.3336 36.2511 23.0344 36.0305 22.8137C35.8098 22.5931 35.5106 22.4692 35.1986 22.4692Z"
                                                fill="#883333" stroke="#883333" stroke-width="0.75" />
                                        </svg>
                                    </div>
                                    <h5 style="font-size:25px !important;"> Work</h5>
                                    <p>We help families find ways to earn.</p>
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
        {{-- <div class="vector-shape">
            <img src="{{ asset('assets/images/shape/vector-01.png') }}" alt="shape">
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-left-container">
                        <div class="about-blank paroller" style="transform: translateY(-11px);"></div>
                        <div class="about-image-1 wow fadeInUp">
                            <img src="{{ asset('assets/images/image22.jpeg') }}" alt="image">
                        </div>
                        <div class="about-image-2 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <img src="{{ asset('assets/images/image21.jpeg') }}" alt="image">
                        </div>
                        <div class="about-left-intro paroller" style="transform: translateY(-11px);background:#883333;">
                            <div class="about-left-intro-inner">
                                <h5>1k</h5>
                                <p>We’ve helped sadharmic family</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-right-container">
                        <div class="common-title">
                            <h5>Why This Cause Matters</h5>
                            <h4>Supporting Ratnakukshi Families is the Highest Form of Shasan Bhakti</h4>
                        </div>
                        <p>The divine renunciation of Sadhus and Sadhvis is made possible by the immense sacrifice of their
                            families. Serving these families is not charity—it is devotion.</p>
                        {{-- <p>Ratnakukshi Bhakti Foundation ensures that no family is left unsupported while their loved ones
                            serve humanity selflessly.</p> --}}
                        <p>Ratnakukshi Bhakti Foundation is devoted to ensuring that no family is left unsupported while
                            their loved ones dedicate their lives to spiritual upliftment and service to humanity. We
                            recognize that behind every renunciate stands a family that has chosen sacrifice over
                            attachment.</p>
                        <p>Through timely medical assistance, educational support, and essential care, the Foundation walks
                            alongside these families with dignity and respect. Our mission is to uphold their well-being,
                            honor their sacrifice, and serve them as an expression of true bhakti—where service becomes a
                            sacred responsibility.</p>
                        {{-- <div class="about-progress">
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
                        </div> --}}
                        <div class="header-link-btn"><a href="{{ route('about') }}" class="btn-1">Learn
                                More<span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    {{-- <!-- causes -->
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
    <!-- causes --> --}}

    <!-- call to action -->
    <section class="call" style="background-image: url('{{ asset('assets/images/section5.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="call-title">
                        <h2>“Helping a Sadharmic family <br> with dignity and compassion.”</h2>
                        <div class="header-link-btn"><a href="#" class="btn-1 btn-2">Join Our
                                Community<span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action -->

    <!-- our our -->
    <section class="mission">
        {{-- <div class="vector-two">
            <img src="{{ asset('assets/images/shape/vector-02.png') }}" alt="img">
        </div> --}}
        <div class="container" style="margin-bottom: -100px;">
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
                                        {{-- <img src="{{ asset('assets/images/icons/mission-icon-01.png') }}" alt="icon"> --}}
                                        <svg width="60" height="60" viewBox="0 0 25 29" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.27029 28.5C2.50229 28.5 1.84857 28.2553 1.30914 27.7658C0.769715 27.2763 0.5 26.6836 0.5 25.9878V12.3456C0.5 11.6507 0.769715 11.0581 1.30914 10.5676C1.84857 10.0781 2.50229 9.83333 3.27029 9.83333H5.64286V6.72222C5.64286 4.98933 6.30857 3.51933 7.64 2.31222C8.97029 1.10407 10.5903 0.5 12.5 0.5C14.4097 0.5 16.0303 1.10407 17.3617 2.31222C18.6931 3.52037 19.3583 4.99037 19.3571 6.72222V9.83333H21.7314C22.4971 9.83333 23.1503 10.0781 23.6909 10.5676C24.2303 11.057 24.5 11.6502 24.5 12.3471V25.9878C24.5 26.6826 24.2303 27.2753 23.6909 27.7658C23.1514 28.2553 22.4983 28.5 21.7314 28.5H3.27029ZM3.27029 26.9444H21.7314C22.0389 26.9444 22.2914 26.8547 22.4891 26.6753C22.6869 26.4959 22.7857 26.2667 22.7857 25.9878V12.3456C22.7857 12.0666 22.6869 11.8374 22.4891 11.658C22.2914 11.4786 22.0389 11.3889 21.7314 11.3889H3.26857C2.96114 11.3889 2.70857 11.4786 2.51086 11.658C2.31314 11.8374 2.21429 12.0671 2.21429 12.3471V25.9878C2.21429 26.2667 2.31314 26.4959 2.51086 26.6753C2.70857 26.8547 2.96171 26.9444 3.27029 26.9444ZM12.5 21.5C13.2234 21.5 13.8326 21.275 14.3274 20.8249C14.8234 20.3759 15.0714 19.8231 15.0714 19.1667C15.0714 18.5102 14.8234 17.9575 14.3274 17.5084C13.8314 17.0594 13.2223 16.8344 12.5 16.8333C11.7777 16.8323 11.1686 17.0573 10.6726 17.5084C10.1766 17.9575 9.92857 18.5102 9.92857 19.1667C9.92857 19.8231 10.1766 20.3759 10.6726 20.8249C11.1674 21.275 11.7766 21.5 12.5 21.5ZM7.35714 9.83333H17.6429V6.72222C17.6429 5.42593 17.1429 4.32407 16.1429 3.41667C15.1429 2.50926 13.9286 2.05556 12.5 2.05556C11.0714 2.05556 9.85714 2.50926 8.85714 3.41667C7.85714 4.32407 7.35714 5.42593 7.35714 6.72222V9.83333Z"
                                                fill="#883333" />
                                            <path
                                                d="M2.21429 26.9444V11.3889M3.27029 28.5C2.50229 28.5 1.84857 28.2553 1.30914 27.7658C0.769715 27.2763 0.5 26.6836 0.5 25.9878V12.3456C0.5 11.6507 0.769715 11.0581 1.30914 10.5676C1.84857 10.0781 2.50229 9.83333 3.27029 9.83333H5.64286V6.72222C5.64286 4.98933 6.30857 3.51933 7.64 2.31222C8.97029 1.10407 10.5903 0.5 12.5 0.5C14.4097 0.5 16.0303 1.10407 17.3617 2.31222C18.6931 3.52037 19.3583 4.99037 19.3571 6.72222V9.83333H21.7314C22.4971 9.83333 23.1503 10.0781 23.6909 10.5676C24.2303 11.057 24.5 11.6502 24.5 12.3471V25.9878C24.5 26.6826 24.2303 27.2753 23.6909 27.7658C23.1514 28.2553 22.4983 28.5 21.7314 28.5H3.27029ZM3.27029 26.9444H21.7314C22.0389 26.9444 22.2914 26.8547 22.4891 26.6753C22.6869 26.4959 22.7857 26.2667 22.7857 25.9878V12.3456C22.7857 12.0666 22.6869 11.8374 22.4891 11.658C22.2914 11.4786 22.0389 11.3889 21.7314 11.3889H3.26857C2.96114 11.3889 2.70857 11.4786 2.51086 11.658C2.31314 11.8374 2.21429 12.0671 2.21429 12.3471V25.9878C2.21429 26.2667 2.31314 26.4959 2.51086 26.6753C2.70857 26.8547 2.96171 26.9444 3.27029 26.9444ZM12.5 21.5C13.2234 21.5 13.8326 21.275 14.3274 20.8249C14.8234 20.3759 15.0714 19.8231 15.0714 19.1667C15.0714 18.5102 14.8234 17.9575 14.3274 17.5084C13.8314 17.0594 13.2223 16.8344 12.5 16.8333C11.7777 16.8323 11.1686 17.0573 10.6726 17.5084C10.1766 17.9575 9.92857 18.5102 9.92857 19.1667C9.92857 19.8231 10.1766 20.3759 10.6726 20.8249C11.1674 21.275 11.7766 21.5 12.5 21.5ZM7.35714 9.83333H17.6429V6.72222C17.6429 5.42593 17.1429 4.32407 16.1429 3.41667C15.1429 2.50926 13.9286 2.05556 12.5 2.05556C11.0714 2.05556 9.85714 2.50926 8.85714 3.41667C7.85714 4.32407 7.35714 5.42593 7.35714 6.72222V9.83333Z"
                                                stroke="#883333" />
                                        </svg>

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
                                        {{-- <img src="{{ asset('assets/images/icons/mission-icon-02.png') }}" alt="icon"> --}}
                                        <svg width="60" height="60" viewBox="0 0 28 23" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.84375 15.37C1.78125 13.99 1.25 13.2988 1.25 11.25C1.25 9.2 1.78125 8.51125 2.84375 7.13C4.965 4.375 8.5225 1.25 13.75 1.25C18.9775 1.25 22.535 4.375 24.6563 7.13C25.7188 8.5125 26.25 9.20125 26.25 11.25C26.25 13.3 25.7188 13.9887 24.6563 15.37C22.535 18.125 18.9775 21.25 13.75 21.25C8.5225 21.25 4.965 18.125 2.84375 15.37Z"
                                                stroke="#883333" stroke-width="2.5" />
                                            <path
                                                d="M17.5 11.25C17.5 12.2446 17.1049 13.1984 16.4017 13.9017C15.6984 14.6049 14.7446 15 13.75 15C12.7554 15 11.8016 14.6049 11.0983 13.9017C10.3951 13.1984 10 12.2446 10 11.25C10 10.2554 10.3951 9.30161 11.0983 8.59835C11.8016 7.89509 12.7554 7.5 13.75 7.5C14.7446 7.5 15.6984 7.89509 16.4017 8.59835C17.1049 9.30161 17.5 10.2554 17.5 11.25Z"
                                                stroke="#883333" stroke-width="2.5" />
                                        </svg>

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
                                        {{-- <img src="{{ asset('assets/images/icons/mission-icon-03.png') }}" alt="icon"> --}}
                                        <svg width="60" height="60" viewBox="0 0 24 29" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 5.5H20.375C20.8391 5.5 21.2842 5.68437 21.6124 6.01256C21.9406 6.34075 22.125 6.78587 22.125 7.25V25.625C22.125 26.0891 21.9406 26.5342 21.6124 26.8624C21.2842 27.1906 20.8391 27.375 20.375 27.375H2.875C2.41087 27.375 1.96575 27.1906 1.63756 26.8624C1.30937 26.5342 1.125 26.0891 1.125 25.625V7.25C1.125 6.78587 1.30937 6.34075 1.63756 6.01256C1.96575 5.68437 2.41087 5.5 2.875 5.5H7.25C7.25 4.33968 7.71094 3.22688 8.53141 2.40641C9.35188 1.58594 10.4647 1.125 11.625 1.125C12.7853 1.125 13.8981 1.58594 14.7186 2.40641C15.5391 3.22688 16 4.33968 16 5.5Z"
                                                stroke="#883333" stroke-width="2.25" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M11.625 5.5C11.509 5.5 11.3977 5.45391 11.3156 5.37186C11.2336 5.28981 11.1875 5.17853 11.1875 5.0625C11.1875 4.94647 11.2336 4.83519 11.3156 4.75314C11.3977 4.67109 11.509 4.625 11.625 4.625M11.625 5.5C11.741 5.5 11.8523 5.45391 11.9344 5.37186C12.0164 5.28981 12.0625 5.17853 12.0625 5.0625C12.0625 4.94647 12.0164 4.83519 11.9344 4.75314C11.8523 4.67109 11.741 4.625 11.625 4.625"
                                                stroke="#883333" stroke-width="2.25" />
                                            <path
                                                d="M5.5 12.5H11.625M15.125 12.5H17.75M17.75 16.875H11.625M8.125 16.875H5.5M5.5 21.25H11.625M15.125 21.25H17.75"
                                                stroke="#883333" stroke-width="2.25" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
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
                                        {{-- <img src="{{ asset('assets/images/icons/mission-icon-04.png') }}" alt="icon"> --}}
                                        <svg width="60" height="60" viewBox="0 0 28 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.375 20.163V7.9905C0.375 7.3005 0.6065 6.724 1.0695 6.261C1.5325 5.798 2.1085 5.567 2.7975 5.568H7.125V2.7975C7.125 2.1075 7.3565 1.531 7.8195 1.068C8.2825 0.605003 8.859 0.374003 9.549 0.375003H18.2025C18.8925 0.375003 19.469 0.606003 19.932 1.068C20.395 1.53 20.626 2.1065 20.625 2.7975V5.5665H24.9525C25.6425 5.5665 26.2185 5.798 26.6805 6.261C27.1425 6.724 27.374 7.3005 27.375 7.9905V20.163C27.375 20.507 27.259 20.795 27.027 21.027C26.795 21.259 26.507 21.375 26.163 21.375H1.587C1.243 21.375 0.955 21.259 0.723 21.027C0.491 20.795 0.375 20.507 0.375 20.163ZM6.9525 14.2215V14.9715C6.9525 15.1835 6.8805 15.3615 6.7365 15.5055C6.5925 15.6495 6.414 15.7215 6.201 15.7215C5.988 15.7215 5.81 15.6495 5.667 15.5055C5.524 15.3615 5.4525 15.1835 5.4525 14.9715V14.2215H1.875V19.875H25.875V14.22H22.299V14.97C22.299 15.183 22.227 15.3615 22.083 15.5055C21.939 15.6495 21.7605 15.7215 21.5475 15.7215C21.3345 15.7215 21.1565 15.6495 21.0135 15.5055C20.8705 15.3615 20.7985 15.1835 20.7975 14.9715V14.2215H6.9525ZM1.875 7.9905V12.7215H5.4525V11.9715C5.4525 11.7585 5.5245 11.5805 5.6685 11.4375C5.8125 11.2945 5.9905 11.2225 6.2025 11.2215C6.4145 11.2205 6.5925 11.2925 6.7365 11.4375C6.8805 11.5825 6.9525 11.7605 6.9525 11.9715V12.7215H20.7975V11.9715C20.7975 11.7585 20.8695 11.5805 21.0135 11.4375C21.1575 11.2935 21.336 11.2215 21.549 11.2215C21.762 11.2215 21.94 11.2935 22.083 11.4375C22.226 11.5815 22.298 11.7595 22.299 11.9715V12.7215H25.875V7.9905C25.875 7.7605 25.779 7.549 25.587 7.356C25.394 7.164 25.182 7.068 24.951 7.068H2.799C2.568 7.068 2.356 7.164 2.163 7.356C1.97 7.548 1.874 7.7595 1.875 7.9905ZM8.625 5.5665H19.125V2.7975C19.125 2.5675 19.029 2.356 18.837 2.163C18.645 1.97 18.4335 1.874 18.2025 1.875H9.5475C9.3175 1.875 9.106 1.971 8.913 2.163C8.72 2.355 8.624 2.567 8.625 2.799V5.5665Z"
                                                fill="#883333" stroke="#883333" stroke-width="0.75" />
                                        </svg>

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
                                        {{-- <img src="{{ asset('assets/images/icons/mission-icon-04.png') }}" alt="icon"> --}}
                                        <svg width="60" height="60" viewBox="0 0 29 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.9699 1.3521C7.79014 0.74962 8.79815 0.375 10.1471 0.375H15.1987C15.9893 0.375 16.6646 0.664655 17.1472 1.1899C17.3757 1.43641 17.5581 1.73581 17.6829 2.06919C17.8076 2.40257 17.872 2.76267 17.872 3.12672C17.872 3.49078 17.8076 3.85088 17.6829 4.18426C17.5581 4.51764 17.3757 4.81704 17.1472 5.06355C16.6629 5.58879 15.9893 5.87845 15.1987 5.87845H11.9045C11.4763 5.87845 11.2325 6.03872 11.0958 6.19707C11.0247 6.28075 10.9686 6.38021 10.9307 6.48963C10.8928 6.59905 10.8739 6.71622 10.8751 6.83431C10.8751 7.07569 10.9525 7.30548 11.0958 7.47155C11.2325 7.63183 11.4779 7.7921 11.9045 7.7921H16.8474C18.2441 7.7921 19.5585 7.22052 20.8597 6.35348C21.8529 5.69307 22.7868 4.89941 23.7322 4.09417C24.0418 3.83026 24.3537 3.56764 24.6677 3.30631L24.7254 3.2619C25.9739 2.40065 27.2849 2.93748 27.9372 4.00341C28.26 4.53059 28.4362 5.20838 28.3555 5.91514C28.2765 6.61417 27.9586 7.26493 27.42 7.77666L27.3969 7.80562L27.2158 8.01803C26.273 9.10838 25.2598 10.1116 24.1851 11.0189C22.2663 12.6351 19.5849 14.375 16.8474 14.375H1.19854C0.980122 14.375 0.770652 14.2733 0.616209 14.0922C0.461766 13.9111 0.375 13.6656 0.375 13.4095V6.65086C0.375 6.39479 0.461766 6.14921 0.616209 5.96814C0.770652 5.78707 0.980122 5.68534 1.19854 5.68534C2.29549 5.68534 3.01856 5.39569 3.57033 4.9979C4.14681 4.58466 4.58493 4.02659 5.10211 3.35072L5.14329 3.29665C5.62917 2.65941 6.19742 1.9179 6.9699 1.3521ZM26.2621 6.40176L26.3576 6.30135C26.6261 6.0561 26.7035 5.82438 26.7233 5.66217C26.7395 5.47274 26.6956 5.28294 26.5998 5.12921C26.4021 4.80672 26.0249 4.62327 25.5868 4.90907C25.3167 5.13436 25.0389 5.36865 24.7534 5.61197C23.7931 6.43072 22.7538 7.31321 21.6733 8.03348C20.2404 8.98741 18.6394 9.72314 16.8474 9.72314H11.9045C11.0975 9.72314 10.4156 9.40259 9.93299 8.84066C9.70847 8.57763 9.53059 8.26509 9.40959 7.92107C9.2886 7.57705 9.2269 7.20836 9.22804 6.83624C9.22804 6.11404 9.45863 5.38217 9.93299 4.82796C10.4156 4.26796 11.0958 3.94741 11.9045 3.94741H15.2003C15.645 3.94741 15.8971 3.791 16.0305 3.64617C16.0928 3.58082 16.1426 3.50076 16.1767 3.41123C16.2107 3.32171 16.2283 3.22475 16.2281 3.12672C16.2283 3.0287 16.2107 2.93174 16.1767 2.84222C16.1426 2.75269 16.0928 2.67263 16.0305 2.60728C15.8971 2.46245 15.645 2.30603 15.2003 2.30603H10.1471C9.08145 2.30603 8.38144 2.59569 7.8412 2.98962C7.2779 3.40286 6.84801 3.96093 6.32589 4.64065L6.31436 4.6561C5.81859 5.30686 5.23552 6.06576 4.43175 6.64507C3.69926 7.16465 2.87492 7.48042 2.02208 7.5681V12.444H16.8474C19.0496 12.444 21.3769 11.0092 23.2282 9.45086C24.2914 8.55155 25.2901 7.5518 26.2143 6.46162L26.2522 6.41528L26.2605 6.40369L26.2621 6.40176Z"
                                                fill="#883333" stroke="#883333" stroke-width="0.75" />
                                        </svg>

                                    </div>
                                    <div class="mossion-info">
                                        <h6>Value-Based, Non-Commercial Approach</h6>
                                        {{-- <p>Turpis egestas maecenas convallis posuere morbi</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-link-btn"><a href="#" class="btn-1">Donate
                            Now<span></span></a></div>
                </div>

                <div class="col-xl-4">
                    <div class="mission-video-image">
                        <img src="{{ asset('assets/images/image20.jpeg') }}" alt="img"
                            style="border-radius: 15px;">
                        <div class="missiom-video-btn">
                            {{-- <a href="https://www.youtube.com/watch?v=kS0X-yIsB64" target="_blank"
                                class="hv-popup-link"><i class="fas fa-play"></i></a> --}}
                        </div>
                        {{-- <div class="mission-video-text">
                            <h2>Watch Video</h2>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our mission -->

    <!-- fun fact -->

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-xl-12">
                <div class="align-title">
                    <h5>Our Plan / Initiative Section</h5>
                    <h3>The Ratnakukshi Bhakti Initiative</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-fact">
        <div class="container" style="margin-top: 60px;">
            <div class="fun-fact-container"
                style="background-image: url('{{ asset('assets/images/background/Frame 4.png') }}');">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center"
                        style="text-align:center;">
                        <div class="funfact-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="125">0</span>
                                    <p>Crores</p>
                                </div>
                                <p style="padding: 0 10px;">Target Corpus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center"
                        style="text-align:center;">
                        <div class="funfact-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="108">0</span>
                                    <p>Crores</p>
                                </div>
                                <p style="padding: 0 10px;">200 Trusts totaling</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center"
                        style="text-align:center;">
                        <div class="funfact-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="27">0</span>
                                    <p>Lakhs annually for 4 years</p>
                                </div>
                                <p style="padding: 0 10px;">Contribution Plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex align-items-center justify-content-center"
                        style="text-align:center;">
                        <div class="funfact-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <p class="count-text" data-speed="1500">Utilization</p>
                                </div>
                                <p style="padding: 0 10px;">Assistance provided from interest earned on the corpus</p>
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
        <div class="container" style="margin-bottom: -100px;">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Our BOD</h5>
                        <h3>Meet Our Expert BOD</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="team-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="team-content-wrapper">
                            <div class="team-image">
                                <img src="{{ asset('assets/images/team/Sukhraj nahar2.png') }}" alt="image">
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
                            <a href="{{ route('team3') }}">Sukhrajji Nahar</a>
                            {{-- <span>BOD</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="team-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="team-content-wrapper">
                            <div class="team-image">
                                <img src="{{ asset('assets/images/team/Ellipse 67.png') }}" alt="image">
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
                            <a href="{{ route('team3') }}">Hiteshji Doshi</a>
                            {{-- <span>BOD</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="team-content wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="team-content-wrapper">
                            <div class="team-image">
                                <img src="{{ asset('assets/images/team/Ellipse 68.png') }}" alt="image">
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
                            <a href="{{ route('team3') }}">Manojji Mehta</a>
                            {{-- <span>BOD</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex justify-content-center">
                    <div class="team-content wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                        <div class="team-content-wrapper">
                            <div class="team-image">
                                <img src="{{ asset('assets/images/team/Ellipse 69.png') }}" alt="image">
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
                            <a href="{{ route('team3') }}">Prithvirajji Kothari</a>
                            {{-- <span>BOD</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 text-center">
                    <div class="header-link-btn"><a href="#" class="btn-1">View All
                            Team<span></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- team ends -->

    {{-- <!-- sponsor -->
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
    <!-- sponsor --> --}}

    <!-- testimonial -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="align-title">
                        <h5>Testimonials</h5>
                        <h3>What Our Donor Says</h3>
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
                                <img src="{{ asset('assets/images/team/VIJAY_BHANDARI.png') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-two">
                                <img src="{{ asset('assets/images/team/Pradeep_Singhi.jpg') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-three">
                                <img src="{{ asset('assets/images/team/RAJESH_CHANDAN.jpeg') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-four">
                                <img src="{{ asset('assets/images/team/SHEETAL_DUGAR1.png') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-five">
                                <img src="{{ asset('assets/images/team/Sunil_Kathotia.jpg') }}" alt="photo">
                            </div>
                            <div class="testimonial-image-six">
                                <img src="{{ asset('assets/images/team/1409_UTTAM_JAIN.jpg') }}" alt="photo">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            <div class="tesstimonial-right-content">
                                <div class="testimonial-content-text">
                                    <p>“Serving Ratnakukshi families is not just service—it is devotion.”</p>
                                    <div class="testimonial-right-content-wrapper">
                                        <div class="testimonial-right-wrapper-inner">
                                            {{-- <img src="{{ asset('assets/images/gallery/testimonial-image-07.png') }}"
                                                    alt="image"> --}}
                                            <div class="testimonial-info">
                                                <h6>Foundation Trustee</h6>
                                                {{-- <span>Volunteers</span> --}}
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
                                    <p>“A transparent and spiritually aligned initiative for true Shasan Bhakti.”</p>
                                    <div class="testimonial-right-content-wrapper">
                                        <div class="testimonial-right-wrapper-inner">
                                            {{-- <img src="{{ asset('assets/images/gallery/testimonial-06.png') }}"
                                                    alt="image"> --}}
                                            <div class="testimonial-info">
                                                <h6>Well-wisher</h6>
                                                {{-- <span>Volunteers</span> --}}
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

    {{-- <!-- contact -->
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
    <!-- blog --> --}}

    {{-- <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d48474.64872611011!2d-75.5188393826804!3d40.59313733852438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s4140%20Parker%20Rd.%20Allentown%2C%20New%20Mexico!5e0!3m2!1sen!2sbd!4v1676449615021!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- map --> --}}
@endsection
