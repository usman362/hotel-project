@section('title','Support')
@extends('frontend.layouts.app')
@section('content')

  <main>
        <div class="main-banner position-relative">
            <img src="./assets/images/contact-banner.jpg" alt="" />
            <div class="banner-heading">
                <h1>FAQ</h1>
            </div>
        </div>


        <div class="contact-section  my-5 mx-4">
            <div class="row m-0">
                <div class="col-4">
                    <div class="contact-detail py-5">
                        <h4>FREQUENTLY ASKED QUESTION</h4>
                        <h2 class="mt-4"><i class="bi bi-question-circle me-2"></i> Got Any Questions?</h2>
                        <small class="mt-4 d-block">Veniam quis nostrud exercitation ullamco laboris nist aute irure
                            dolor in reprehenderit in voluptate velit esse nulla pariatur
                            excepteur sint occaecat aboris nisi ut aliquip ex ea consequat uis
                            aute.</small>
                        <button class="get-help-button">GET MORE HELP</button>
                    </div>
                </div>
                <div class="col-8">
                    <div class="ms-5">
                        <div class="row m-0 faqs-search">
                            <div class="col-4">
                                <input type="text" placeholder="Search Here...." />
                            </div>
                            <div class="col-4">
                                <div class="select-dropdown">

                                    <button></button>

                                    <div class="options">
                                        <input id="radio-africa" type="radio" name="region" value="africa" checked>
                                        <label style="--index: 1" for="radio-africa">Africa</label>

                                        <input id="radio-asia" type="radio" name="region" value="asia">
                                        <label style="--index: 2" for="radio-asia">Asia</label>

                                        <input id="radio-australia" type="radio" name="region" value="australia">
                                        <label style="--index: 3" for="radio-australia">Australia</label>

                                        <input id="radio-europe" type="radio" name="region" value="europe">
                                        <label style="--index: 4" for="radio-europe">Europe</label>

                                        <input id="radio-namerica" type="radio" name="region" value="namerica">
                                        <label style="--index: 5" for="radio-namerica">North America</label>

                                        <input id="radio-samerica" type="radio" name="region" value="samerica">
                                        <label style="--index: 6" for="radio-samerica">South America</label>

                                        <input id="radio-antarctica" type="radio" name="region" value="antarctica">
                                        <label style="--index: 7" for="radio-antarctica">Antarctica</label>
                                    </div>

                                    <svg viewBox="0 0 24 24">
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>

                                </div>
                            </div>
                            <!-- <div class="col-2">
                                <select>
                                    <option>Country</option>
                                    <option>Country</option>
                                    <option>Country</option>
                                </select>
                            </div> -->
                            <div class="col-4">
                                <button onclick="expandAll(this)">Expand All</button>
                            </div>
                        </div>
                        <div class="accordion faqs mt-4" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How to analyze marketing strategies?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                        purto zril laoreet. Ae arror omnium
                                        interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                        qloriatur temporibus qui. Etiam rhoncus.
                                        Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                        rationibus definiebas, eu qui purto zril
                                        laoreet. Ae arror omnium interpretaris pr.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How can I customize projects to add members?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordiTwoxample">
                                        <div class="accordion-body">
                                            Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                            purto zril laoreet. Ae arror omnium
                                            interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                            qloriatur temporibus qui. Etiam rhoncus.
                                            Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                            rationibus definiebas, eu qui purto zril
                                            laoreet. Ae arror omnium interpretaris pr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Why you respond so much late?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordiThreexample">
                                        <div class="accordion-body">
                                            Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                            purto zril laoreet. Ae arror omnium
                                            interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                            qloriatur temporibus qui. Etiam rhoncus.
                                            Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                            rationibus definiebas, eu qui purto zril
                                            laoreet. Ae arror omnium interpretaris pr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            How can I customize projects to add members?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordiFourxample">
                                        <div class="accordion-body">
                                            Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                            purto zril laoreet. Ae arror omnium
                                            interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                            qloriatur temporibus qui. Etiam rhoncus.
                                            Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                            rationibus definiebas, eu qui purto zril
                                            laoreet. Ae arror omnium interpretaris pr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Why you respond so much late?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordiFivexample">
                                        <div class="accordion-body">
                                            Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                            purto zril laoreet. Ae arror omnium
                                            interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                            qloriatur temporibus qui. Etiam rhoncus.
                                            Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                            rationibus definiebas, eu qui purto zril
                                            laoreet. Ae arror omnium interpretaris pr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            How can I customize projects to add members?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordiSixexample">
                                        <div class="accordion-body">
                                            Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                            purto zril laoreet. Ae arror omnium
                                            interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                            qloriatur temporibus qui. Etiam rhoncus.
                                            Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                            rationibus definiebas, eu qui purto zril
                                            laoreet. Ae arror omnium interpretaris pr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">
                                            Why you respond so much late?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#accordiSevenxample">
                                        <div class="accordion-body">
                                            Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                            purto zril laoreet. Ae arror omnium
                                            interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                            qloriatur temporibus qui. Etiam rhoncus.
                                            Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                            rationibus definiebas, eu qui purto zril
                                            laoreet. Ae arror omnium interpretaris pr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="false" aria-controls="collapseEight">
                                            How can I customize projects to add members?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#accordiEightexample">
                                        <div class="accordion-body">
                                            Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                            purto zril laoreet. Ae arror omnium
                                            interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                            qloriatur temporibus qui. Etiam rhoncus.
                                            Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                            rationibus definiebas, eu qui purto zril
                                            laoreet. Ae arror omnium interpretaris pr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                            aria-expanded="false" aria-controls="collapseNine">
                                            Why you respond so much late?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#accordiNinexample">
                                        <div class="accordion-body">
                                            Woe facilisis arbauitoc moderatius id. Uis ei rationibus definiebas, eu qui
                                            purto zril laoreet. Ae arror omnium
                                            interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te tidens
                                            qloriatur temporibus qui. Etiam rhoncus.
                                            Maecenas tempus, tellus aget. Woe facilisis arbauitoc moderatius id. Uis ei
                                            rationibus definiebas, eu qui purto zril
                                            laoreet. Ae arror omnium interpretaris pr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="get-started-section mt-5">
            <h1>Your Trusted Travel Partner</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br />incididunt ut
                labore
                et dolore magna aliqua. Ut enim ad minim</p>
            <button onclick="toggleInquiryModal()">GET STARTED NOW</button>
        </div>
        <div class="reviews-section position-relative">
            <div class="reviews">
                <div class="review">
                    <div class="review-image">
                        <img src="./assets/images/rev-1.jpg" alt="" />
                    </div>
                    <div class="review-text">
                        <p>"Great things are done when men and mountains are meet"</p>
                        <h5>- Willam Koinas</h5>
                    </div>
                </div>
                <div class="review">
                    <div class="review-image">
                        <img src="./assets/images/rev-2.jpg" alt="" />
                    </div>
                    <div class="review-text">
                        <p>"Great things are done when men and mountains are meet"</p>
                        <h5>- Willam Koinas</h5>
                    </div>
                </div>
                <div class="review">
                    <div class="review-image">
                        <img src="./assets/images/rev-3.jpg" alt="" />
                    </div>
                    <div class="review-text">
                        <p>"Great things are done when men and mountains are meet"</p>
                        <h5>- Willam Koinas</h5>
                    </div>
                </div>
            </div>
            <img src="./assets/images/review-banner.jpg" alt="" class="w-100" />
        </div>
    </main>

@endsection
