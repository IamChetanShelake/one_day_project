@extends('layouts.master')

@section('title', 'FAQs')

@section('content')

    <!-- common banner -->
    <section class="common-banner" style="background-image: url('assets/images/12345.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-title">
                        <h3>FAQs</h3>
                        <a href="index.html">Home </a>/
                        <span> FAQs</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- common banner -->

    <!-- faq container -->
    <section class="faq-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="faq-accordion faq-page-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Ratnakukshi Bhakti Foundation?

                                    </button>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A spiritual and social initiative supporting families of Jain Sadhus and Sadhvis
                                        through structured, dignified assistance.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Who are Ratnakukshi families?
                                    </button>
                                </h4>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Families whose members have renounced worldly life and embraced monkhood or nunhood
                                        in the Jain Shasan.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How is the donation utilized?

                                    </button>
                                </h4>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Only the interest earned from the corpus fund is used for providing assistance. The
                                        capital remains intact.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What type of support is provided?
                                    </button>
                                </h4>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Food, healthcare, emergency treatment, education, housing, and livelihood
                                        support—based strictly on need.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="faq-accordion accordion-right faq-page-accordion">
                        <div class="accordion" id="accordionOne">
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Is the assistance confidential?

                                    </button>
                                </h4>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        Yes. Complete confidentiality and dignity of families is strictly maintained.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Is the foundation transparent?

                                    </button>
                                </h4>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        Absolutely. The foundation follows transparent financial practices and ethical
                                        governance.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Can I contribute annually or long-term?

                                    </button>
                                </h4>
                                <div id="collapseSeven" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        Yes. Contributors can participate annually or commit to long-term contribution
                                        plans.

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="accordion-item">
                                <h4 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        Sed mattis neque sed commodo efficitur.
                                    </button>
                                </h4>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        There are many variations of passages the majority have suffered alteration
                                        in some fo injected humour, or randomised words believable.
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq container -->

@endsection
