@extends('frontend.layouts.app')
@section('content')

<main>
    <div class="main-banner position-relative">
        <img src="./assets/images/destination-banner.jpg" alt="" />
        <div class="banner-heading">
            <h1>Bhutan</h1>
        </div>
        <div class="weather-section">
            <img src="./assets/images/weather.jpg" alt="" class="w-100 mb-3" />
            <p>28.3949° N, 84.1240° E</p>
        </div>
        <div class="banner-rating-section">
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard
                dummy text ever since the 1500s</p>
            <div class="d-flex align-items-center ">
                <div>
                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                </div>
                <p class="fst-italic m-0 ms-4 ">Rated 4.5 from 45 reviews </p>
            </div>
        </div>
    </div>

    <div class="p-5 destinations">
        <div class="row m-0">
            <div class="col-9 p-0 destination-tabs">
                <div class="me-5 h-100 section-border">
                    <div class="row h-100">
                        <div class="col-3">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs flex-column h-100" id="myTab" flex-column role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="general-tab" data-bs-toggle="tab"
                                        data-bs-target="#general" type="button" role="tab" aria-controls="general"
                                        aria-selected="true">General</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="environment-tab" data-bs-toggle="tab"
                                        data-bs-target="#environment" type="button" role="tab"
                                        aria-controls="environment" aria-selected="false">Environment</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="sports-tab" data-bs-toggle="tab"
                                        data-bs-target="#sports" type="button" role="tab" aria-controls="sports"
                                        aria-selected="false">Sports & Nature</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nightlife-tab" data-bs-toggle="tab"
                                        data-bs-target="#nightlife" type="button" role="tab"
                                        aria-controls="nightlife" aria-selected="false">Nightlife</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="culture-tab" data-bs-toggle="tab"
                                        data-bs-target="#culture" type="button" role="tab" aria-controls="culture"
                                        aria-selected="false">Culture & History</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="accomodations-tab" data-bs-toggle="tab"
                                        data-bs-target="#accomodations" type="button" role="tab"
                                        aria-controls="accomodations" aria-selected="false">Accomodations</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tours-tab" data-bs-toggle="tab"
                                        data-bs-target="#tours" type="button" role="tab" aria-controls="tours"
                                        aria-selected="false">Tours</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="cruises-tab" data-bs-toggle="tab"
                                        data-bs-target="#cruises" type="button" role="tab" aria-controls="cruises"
                                        aria-selected="false">Cruises</button>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                        </div>
                        <div class="col-9">
                            <div class="tab-content h-100">
                                <div class="tab-pane active" id="general" role="tabpanel"
                                    aria-labelledby="general-tab">
                                    <h5 class="fw-bold mb-4">GENERAL</h5>
                                    <p class="mb-4">Muse about dispassionate extraterrestrial observer rings of
                                        Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.<br />
                                        Muse about dispassionate extraterrestrial observer rings of Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.</p>

                                    <img src="./assets/images/sports-and-nature.jpg" alt="" class="w-100" />
                                </div>
                                <div class="tab-pane" id="environment" role="tabpanel"
                                    aria-labelledby="environment-tab">
                                    <h5 class="fw-bold mb-4">ENVIRONMENT</h5>
                                    <p class="mb-4">Muse about dispassionate extraterrestrial observer rings of
                                        Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.<br />
                                        Muse about dispassionate extraterrestrial observer rings of Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.</p>

                                    <img src="./assets/images/sports-and-nature.jpg" alt="" class="w-100" />
                                </div>
                                <div class="tab-pane" id="sports" role="tabpanel" aria-labelledby="sports-tab">
                                    <h5 class="fw-bold mb-4">SPORTS & NATURE</h5>
                                    <p class="mb-4">Muse about dispassionate extraterrestrial observer rings of
                                        Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.<br />
                                        Muse about dispassionate extraterrestrial observer rings of Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.</p>

                                    <img src="./assets/images/sports-and-nature.jpg" alt="" class="w-100" />
                                </div>
                                <div class="tab-pane" id="nightlife" role="tabpanel"
                                    aria-labelledby="nightlife-tab">
                                    <h5 class="fw-bold mb-4">NIGHTLIFE</h5>
                                    <p class="mb-4">Muse about dispassionate extraterrestrial observer rings of
                                        Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.<br />
                                        Muse about dispassionate extraterrestrial observer rings of Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.</p>

                                    <img src="./assets/images/sports-and-nature.jpg" alt="" class="w-100" />
                                </div>
                                <div class="tab-pane" id="culture" role="tabpanel" aria-labelledby="culture-tab">
                                    <h5 class="fw-bold mb-4">CULTURE & HISTORY</h5>
                                    <p class="mb-4">Muse about dispassionate extraterrestrial observer rings of
                                        Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.<br />
                                        Muse about dispassionate extraterrestrial observer rings of Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.</p>

                                    <img src="./assets/images/sports-and-nature.jpg" alt="" class="w-100" />
                                </div>
                                <div class="tab-pane" id="accomodations" role="tabpanel"
                                    aria-labelledby="accomodations-tab">
                                    <h5 class="fw-bold mb-4">ACCOMODATIONS</h5>
                                    <p class="mb-4">Muse about dispassionate extraterrestrial observer rings of
                                        Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.<br />
                                        Muse about dispassionate extraterrestrial observer rings of Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.</p>

                                    <img src="./assets/images/sports-and-nature.jpg" alt="" class="w-100" />
                                </div>
                                <div class="tab-pane" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                                    <h5 class="fw-bold mb-4">TOURS</h5>
                                    <p class="mb-4">Muse about dispassionate extraterrestrial observer rings of
                                        Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.<br />
                                        Muse about dispassionate extraterrestrial observer rings of Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.</p>

                                    <img src="./assets/images/sports-and-nature.jpg" alt="" class="w-100" />
                                </div>
                                <div class="tab-pane" id="cruises" role="tabpanel" aria-labelledby="cruises-tab">
                                    <h5 class="fw-bold mb-4">CRUISES</h5>
                                    <p class="mb-4">Muse about dispassionate extraterrestrial observer rings of
                                        Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.<br />
                                        Muse about dispassionate extraterrestrial observer rings of Uranus at the
                                        edge of forever the only home
                                        we've ever known bits of moving fluff. Not a sunrise but a galaxyrise
                                        Tunguska event two ghostly white
                                        figures in coveralls and helmets are soflty dancing Cambrian explosion two
                                        ghostly white figures in coveralls
                                        and helmets are soflty dancing dream of the mind's eye.</p>

                                    <img src="./assets/images/sports-and-nature.jpg" alt="" class="w-100" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0">
                <div class="siderbar">
                    <div class="sidebar-box bg-white section-border mb-5">
                        <div class="sidebar-box-heading fs-5 p-4">Need help booking ?</div>
                        <div class="siderbar-box-body p-4 px-5">
                            <button class="inquiry-button" onclick="toggleInquiryModal()">Quick Inquiry</button>
                        </div>
                    </div>
                    <div class="sidebar-box bg-white section-border ">
                        <div class="sidebar-box-heading fs-5 p-4">Why book with us ?</div>
                        <div class="siderbar-box-body p-4">
                            <div class="d-flex mb-2">
                                <img src="./assets/images/rates-icon.png" alt="" />
                                <h6 class="m-0 ms-2 primarycolor">Best Rates</h6>
                            </div>
                            <div class="mb-4">
                                <small> Get best rates, or get a refund.<br />
                                    No booking fees. Save money
                                </small>
                            </div>
                            <div class="d-flex mb-2">
                                <img src="./assets/images/selection-icon.png" alt="" />
                                <h6 class="m-0 ms-2 primarycolor">Largest Selection</h6>
                            </div>
                            <div class="mb-4">
                                <small>140,000+ hotels worldwide</small><br />
                                <small>130+ airlines</small><br />
                                <small>Over 3 million guest reviews</small>
                            </div>
                            <div class="d-flex mb-2">
                                <img src="./assets/images/24-7-icon.png" alt="" />
                                <h6 class="m-0 ms-2 primarycolor">We're Always Here</h6>
                            </div>
                            <div class="">
                                <small>Call or email us, anytime <br />
                                    Get 24-hour support before, during, and
                                    after your trip
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 mt-5">
            <div class="col-3 p-0">
                <div class="sidebar">
                    <div class="sidebar-box bg-white section-border mb-5">
                        <div class="sidebar-box-heading fs-5 p-4">SEARCH TOUR</div>
                        <div class="siderbar-box-body p-4">
                            <div class="search-input mb-4">
                                <i class="fa fa-search primarycolor fs-4" aria-hidden="true"></i>
                                <input type="text" placeholder="Search Here" class="w-100" />
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box bg-white section-border mb-5">
                        <div class="sidebar-box-heading fs-5 p-4">FILTER BY</div>
                        <div class="siderbar-box-body">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            Review Score
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <div class="tour-checks">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="5">
                                                    <label class="form-check-label" for="5">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="4">
                                                    <label class="form-check-label" for="4">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="3">
                                                    <label class="form-check-label" for="3">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star  second-color" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                                    <label class="form-check-label" for="2">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="1">
                                                    <label class="form-check-label" for="1">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            Activity
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <div class="tour-checks">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="paragliding">
                                                    <label class="form-check-label" for="paragliding">
                                                        Paragliding
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="rockClimbing">
                                                    <label class="form-check-label" for="rockClimbing">
                                                        Rock Climbing
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="mountainClimbing">
                                                    <label class="form-check-label" for="mountainClimbing">
                                                        Mountain Climbing
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="skyDiving">
                                                    <label class="form-check-label" for="skyDiving">
                                                        Sky Diving
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="trekking">
                                                    <label class="form-check-label" for="trekking">
                                                        Trekking
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseThree">
                                            Duration
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <div class="tour-checks">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="1-3">
                                                    <label class="form-check-label" for="1-3">
                                                        01 - 03 Days
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="4-8">
                                                    <label class="form-check-label" for="4-8">
                                                        04 - 08 Days
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="8-12">
                                                    <label class="form-check-label" for="8-12">
                                                        08 - 12 Days
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="12-15">
                                                    <label class="form-check-label" for="12-15">
                                                        12 - 15 Days
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="15-30">
                                                    <label class="form-check-label" for="15-30">
                                                        15 - 30 Days
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseFour">
                                            Language
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingFour">
                                        <div class="accordion-body">
                                            <div class="tour-checks">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="english">
                                                    <label class="form-check-label" for="english">
                                                        English
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="tibetian">
                                                    <label class="form-check-label" for="tibetian">
                                                        Tibetian
                                                    </label>
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
            <div class="col-9 p-0">
                <div class="ms-5">
                    <div class="sorting-row d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center" onclick="sorting(this)"><i class="fa fa-download"
                                aria-hidden="true"></i>
                            <p class="m-0 ms-2">PRICE LOW TO HIGH</p>
                        </div>
                        <div class="d-flex align-items-center active" onclick="sorting(this)"><i
                                class="fa fa-upload"></i>
                            <p class="m-0 ms-2">PRICE HIGH TO LOW</p>
                        </div>
                        <div class="d-flex align-items-center" onclick="sorting(this)"><i
                                class="bi bi-sort-down-alt"></i>
                            <p class="m-0 ms-2">NEWEST</p>
                        </div>
                        <div class="d-flex align-items-center" onclick="sorting(this)"><i
                                class="bi bi-sort-up-alt"></i>
                            <p class="m-0 ms-2">OLDEST</p>
                        </div>
                        <div class="d-flex align-items-center" onclick="sorting(this)"><i
                                class="fa fa-sort-alpha-down"></i>
                            <p class="m-0 ms-2">NAME ( A - Z )</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <p>Tibet: 40 Tours Available</p>
                        <div id="grid-icons" class="grid-icons">
                            <button class="btn" onclick="listView()"><i class="fa fa-list-ul"></i></button>
                            <button class="btn active" onclick="gridView()"><i class="fa fa-th"></i></button>
                        </div>
                    </div>
                    <div class="destination-cards grid mt-1" id="destination-cards">

                        <div class="deal-card shadow mb-5">
                            <div class=" position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-1.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-2.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-3.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-4.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-5.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-1.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-2.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-3.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-4.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="./assets/images/deal-5.jpg" alt="" class="w-100" />
                                    <div class="deal-percentage">10% Off</div>
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-marker.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Nepal</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-clock.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">5 Days</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="./assets/images/primary-filter.png" alt="" />
                                            <small class="fw-bold m-0 ms-2">Trekking</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        <small>(2 review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4>
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <div class="get-started-section mt-5">
        <h1>Your Trusted Travel Partner</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br />incididunt
            ut labore
            et dolore magna aliqua. Ut enim ad minim</p>
        <button onclick="toggleInquiryModal()">GET STARTED NOW</button>
    </div>

    <div class="mb-5">
        <div class="mb-0 p-5 pb-0">
            <h2 class="mb-4" style="color: #3484f5;"><strong>Reviews</strong> Tours <strong>Awesome
                    Peoples</strong>
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiu smod tempor incididunt</p>
        </div>
        <div class="tour-review-section p-5">
            <div class="tour-review-container">
                <div>
                    <div class="name-overlay">
                        <h5>Akirpoy Rous</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Akirpoy Rous</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="name-overlay">
                        <h5>Carapie Leme</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Carapie Leme</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="name-overlay">
                        <h5>Anabelle Clarisie</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Anabelle Clarisie</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="name-overlay">
                        <h5>Anoria Koinch</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Anoria Koinch</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="name-overlay">
                        <h5>Anoria Koinch</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Anoria Koinch</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="name-overlay">
                        <h5>Amitur Lawus</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Amitur Lawus</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="name-overlay">
                        <h5>Biraj Gautam</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Biraj Gautam</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="name-overlay">
                        <h5>Shiva Timalsina</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Shiva Timalsina</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="name-overlay">
                        <h5>Anoria Koinc</h5>
                        <div>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="name-with-review-overlay">
                        <div class="text-center">

                            <h4>“ Going to the
                                mountains is going
                                home “</h4>
                        </div>
                        <div class="text-center">
                            <h5>- Anoria Koinc</h5>

                            <div>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribtion-section p-5">
        <p>Don’t wait any longer. Contact Us</p>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-end">
                <img src="./assets/images/phone-icon-blue.png" alt="" />
                <h5>+1800-333 578 </h5>
            </div>
            <div class="d-flex  align-items-end">
                <img src="./assets/images/mail-icon-blue.png" alt="" />
                <h5>info@himalayanleisure.com</h5>
            </div>
            <div class="d-flex  align-items-center">
                <input type="text" />
                <button>SUBSCRIBE</button>
            </div>
        </div>
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
