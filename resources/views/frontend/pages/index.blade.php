@section('title','Home')
@extends('frontend.layouts.app')
@section('content')
 <main>

        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('assets/images/main-banner.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <h2>Find Your Paradise</h2>
                        <h1>Take Memories,<br />
                            Leave Footprints.</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/main-banner.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <h2>Find Your Paradise</h2>
                        <h1>Take Memories,<br />
                            Leave Footprints.</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/main-banner.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <h2>Find Your Paradise</h2>
                        <h1>Take Memories,<br />
                            Leave Footprints.</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <i class="bi bi-arrow-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <i class="bi bi-arrow-right"></i>
            </button>

            <div class="tour-search-bar d-none d-md-flex">
                <div class="search-input w-50">
                    <img src="{{asset('assets/images/marker-icon.png')}}" />
                    <input type="text" placeholder="Where are you going?" />
                </div>
                <div class="search-input">
                    <img src="{{asset('assets/images/activities-icon.png')}}" />
                    <input type="text" placeholder="Activities" />
                </div>
                <div class="search-input">
                    <img src="{{asset('assets/images/clock-icon-main.png')}}" />
                    <!-- <input type="text" placeholder="Duration" /> -->
                    <select>
                        <option selected disabled>Duration</option>
                        <option>Day Tour</option>
                        <option>2 - 6 Days</option>
                        <option>7 - 12 Days</option>
                        <option>13 - 20 Days</option>
                        <option>21+ Days</option>
                    </select>
                </div>
                <div class="search-input">
                    <img src="{{asset('assets/images/price-icon.png')}}" />
                    <!-- <input type="text" placeholder="Price Range" /> -->
                    <select>
                        <option selected disabled>Price Range</option>
                        <option>Below $500</option>
                        <option>$501 - $1000</option>
                        <option>$1001 - $1600</option>
                        <option>$1601 - $2500</option>
                        <option>About $2500</option>
                    </select>
                </div>
                <button class="search-button">
                    Search
                </button>
            </div>

            <div class="carousel-bottom-section d-none d-md-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="me-3 w-25">
                        <img src="{{asset('assets/images./destinations-icon.png')}}" class="w-100 d-block" alt="" />
                    </div>
                    <div class="">
                        <h5 class="fw-bold">10+ DESTINATIONS</h5>
                        <p class="m-0 fw-light">Our Expert Team handpicked tours in
                            5 different locations</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="me-3 w-25">
                        <img src="{{asset('assets/images/best-price-icon.png')}}" class="w-100 d-block" alt="" />
                    </div>
                    <div class="">
                        <h5 class="fw-bold">BEST PRICE GUARANTEE</h5>
                        <p class="m-0 fw-light">We have the most reasonable /best prices
                            for tours/treks</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="me-3 w-25">
                        <img src="{{asset('assets/images/support-icon.png')}}" class="w-100 d-block" alt="" />
                    </div>
                    <div class="">
                        <h5 class="fw-bold">TOP NOTCH SUPPORT</h5>
                        <p class="m-0 fw-light">We provide Support 24/7, before, during
                            and even after your trip.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row m-0 card-carousel-desktop">
            <div class="col-3 p-0 ps-4">
                <div class="d-flex h-100 mb-4 ps-5 flex-column justify-content-center">
                    <h1 class="mb-2">
                        Choose The <br />
                        <strong>Destination<br />
                            Just Right</strong> For<br />
                        Your Vacation<br />
                    </h1>
                    <img src="{{asset('assets/images/card-carousel-img.png')}}" class="mb-4 w-50" alt="" />
                    <p class="m-0">World Best Travel Agency Company
                        Since 2008.</p>
                </div>
            </div>
            <div class="col-9 p-0">
                <div id="card-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row carousel-card-row">
                               @foreach ($destinations as $destination)

                                <div class="col-4 position-relative">
                                    <img class="w-100" src="{{asset($destination->thumbnail->file_name ?? '')}}" alt="" />
                                    <h4>{{$destination->title}}</h4>
                                    <div class="tours-count">
                                        {{count($destination->programs)}} tours
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                        <!-- <div class="carousel-item">
                            <div class="row m-0">
                                <div class="col-3"></div>
                                <div class="col-3">
                                    <img src="{{asset('assets/images/destination-1.jpg')}}" alt="" />
                                </div>
                                <div class="col-3">
                                    <img src="{{asset('assets/images/destination-2.jpg')}}" alt="" />
                                </div>
                                <div class="col-3">
                                    <img src="{{asset('assets/images/destination-3.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row m-0">
                                <div class="col-3"></div>
                                <div class="col-3">
                                    <img src="{{asset('assets/images/destination-1.jpg')}}" alt="" />
                                </div>
                                <div class="col-3">
                                    <img src="{{asset('assets/images/destination-2.jpg')}}" alt="" />
                                </div>
                                <div class="col-3">
                                    <img src="{{asset('assets/images/destination-3.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#card-carousel"
                        data-bs-slide="prev">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#card-carousel"
                        data-bs-slide="next">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="card-carousel-1" class="card-carousel-mobile carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="row carousel-card-row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="d-flex h-100 flex-column justify-content-center">
                                <h1 class="mb-2">
                                    Choose The <br />
                                    <strong>Destination<br />
                                        Just Right</strong> For<br />
                                    Your Vacation<br />
                                </h1>
                                <img src="{{asset('assets/images/card-carousel-img.png')}}" class="mb-4 w-50" alt="" />
                                <p class="m-0">World Best Travel Agency Company
                                    Since 2008.</p>
                            </div>
                        </div>
                        <div class="col-2"></div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row carousel-card-row">
                        <div class="col-1"></div>
                        <div class="col-10 position-relative">
                            <img class="w-100" src="{{asset('assets/images/destination-1.jpg')}}" alt="" />
                            <h4>Tibet</h4>
                            <div class="tours-count">
                                5 tours
                            </div>
                        </div>
                        <div class="col-1"></div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row carousel-card-row">

                        <div class="col-1"></div>
                        <div class="col-10 position-relative">
                            <img class="w-100" src="{{asset('assets/images/destination-2.jpg')}}" alt="" />
                            <h4>India</h4>
                            <div class="tours-count">
                                1 tours
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row carousel-card-row">
                        <div class="col-1"></div>
                        <div class="col-10 position-relative">
                            <img class="w-100" src="{{asset('assets/images/destination-3.jpg')}}" alt="" />
                            <h4>Bhutan</h4>
                            <div class="tours-count">
                                3 tours
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#card-carousel-1" data-bs-slide="prev">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#card-carousel-1" data-bs-slide="next">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

        <div class="tours-categories-section p-5">
            <div class="mb-4">
                <h2><strong>Amazing</strong> Tours And Fun<br />
                    Adventures <strong>Waiting For You</strong></h2>
            </div>
            <div class="d-flex justify-content-between">
                <div class="section-border d-flex flex-column justify-content-between align-items-center">
                    <img src="{{asset('assets/images/mountain-climbing.png')}}" alt="" class="mb-2" />
                    <p>Mountain Climbing</p>
                </div>
                <div class="section-border d-flex flex-column justify-content-between align-items-center">
                    <img src="{{asset('assets/images/rafting.png')}}" alt="" class="mb-2" />
                    <p>Rafting</p>
                </div>
                <div class="section-border d-flex flex-column justify-content-between align-items-center">
                    <img src="{{asset('assets/images/paragliding.png')}}" alt="" class="mb-2" />
                    <p>Paragliding</p>
                </div>
                <div class="section-border d-flex flex-column justify-content-between align-items-center">
                    <img src="{{asset('assets/images/mountain-cycling.png')}}" alt="" class="mb-2" />
                    <p>Mountain Cycling</p>
                </div>
                <div class="section-border d-flex flex-column justify-content-between align-items-center">
                    <img src="{{asset('assets/images/ice-skating.png')}}" alt="" class="mb-2" />
                    <p>Ice Skating</p>
                </div>
                <div class="section-border d-flex flex-column justify-content-between align-items-center">
                    <img src="{{asset('assets/images/sky-dive.png')}}" alt="" class="mb-2" />
                    <p>Sky Dive</p>
                </div>
                <div class="section-border d-flex flex-column justify-content-between align-items-center">
                    <img src="{{asset('assets/images/sky-dive-2.png')}}" alt="" class="mb-2" />
                    <p>Sky Dive</p>
                </div>
            </div>
            <div id="tour-categories-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div
                            class="section-border bg-white d-flex flex-column justify-content-between align-items-center">
                            <img src="{{asset('assets/images/mountain-climbing.png')}}" alt="" class="mb-2" />
                            <p>Mountain Climbing</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="section-border bg-white d-flex flex-column justify-content-between align-items-center">
                            <img src="{{asset('assets/images/rafting.png')}}" alt="" class="mb-2" />
                            <p>Rafting</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="section-border bg-white d-flex flex-column justify-content-between align-items-center">
                            <img src="{{asset('assets/images/paragliding.png')}}" alt="" class="mb-2" />
                            <p>Paragliding</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="section-border bg-white d-flex flex-column justify-content-between align-items-center">
                            <img src="{{asset('assets/images/mountain-cycling.png')}}" alt="" class="mb-2" />
                            <p>Mountain Cycling</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="section-border bg-white d-flex flex-column justify-content-between align-items-center">
                            <img src="{{asset('assets/images/ice-skating.png')}}" alt="" class="mb-2" />
                            <p>Ice Skating</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="section-border bg-white d-flex flex-column justify-content-between align-items-center">
                            <img src="{{asset('assets/images/sky-dive.png')}}" alt="" class="mb-2" />
                            <p>Sky Dive</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="section-border bg-white d-flex flex-column justify-content-between align-items-center">
                            <img src="{{asset('assets/images/sky-dive-2.png')}}" alt="" class="mb-2" />
                            <p>Sky Dive</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#tour-categories-carousel"
                    data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#tour-categories-carousel"
                    data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="deals-section p-5">
            <!-- <img src="{{asset('assets/images/deals-banner.jpg')}}" alt="" class="w-100"/> -->
            <div class="mb-4 text-white">
                <h2>Special <strong>Deals And<br />
                        Last Minute</strong> Amazing Offers</h2>
            </div>
        </div>
        <div class="deals-cards p-4 pb-5">
            <div class="row m-0">
                @foreach ($programs as $program)

                <div class="col-4">
                    <div class="deal-card m-3 shadow mb-4">
                        <div class="position-relative">
                            <div class="deal-image">
                                <img src="{{asset('assets/images/deal-1.jpg')}}" alt="" class="w-100" />
                                <div class="deal-percentage">10% Off</div>
                            </div>
                        </div>
                        <div class="p-4 pt-5">
                            <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/images/primary-marker.png')}}" alt="" />
                                    <h5 class="fw-bold m-0 ms-2">Nepal</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/images/primary-clock.png')}}" alt="" />
                                    <h5 class="fw-bold m-0 ms-2">5 Days</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/images/primary-filter.png')}}" alt="" />
                                    <h5 class="fw-bold m-0 ms-2">Trekking</h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
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

                @endforeach
            </div>
        </div>
        <div class="explore-section position-relative">
            <img src="{{asset('assets/images/explore-travel-banner.jpg')}}" alt="" class="w-100" />
            <div
                class="w-100 position-absolute top-0 right-0 left-0 bottom-0 d-flex justify-content-center flex-column align-items-center">
                <h1 class="mb-5 fw-bolder">Explore Your Travel</h1>
                <h3 class="mb-5">Your New Travelling Idea</h3>
                <i class="bi bi-play-circle"></i>
            </div>
        </div>

        <div class="amazing-tours-section p-3">
            <div class="mb-3 p-4">
                <h2 class="mb-4"><strong>Amazing</strong> Tours<br />
                    <strong>Waiting For Yous</strong>
                </h2>
                <p>World Best Travel Agency Company Since 2008.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiu smod tempor incididunt ut labore
                    dolore</p>
            </div>
            <div class="row m-0">
                @foreach ($programs_2 as $key => $program)
                @if ($key == 0)
                <div class="col-8">
                    <div class="deal-card m-3 mb-0 shadow d-flex">
                        <div class="deal-image position-relative w-100 h-100">
                            <img src="{{asset('assets/images/amazing-tours-1.jpg')}}" alt="" class="h-100 w-100" />
                        </div>
                        <div class="p-3 py-4 w-100 d-flex justify-content-between flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center me-4">
                                        <img src="{{asset('assets/images/primary-marker.png')}}" alt="" />
                                        <small class="m-0 ms-2">Nepal</small>
                                    </div>
                                    <div class="d-flex align-items-center me-4">
                                        <img src="{{asset('assets/images/primary-clock.png')}}" alt="" />
                                        <small class="m-0 ms-2">5 Days</small>
                                    </div>
                                    <div class="d-flex align-items-center me-4">
                                        <img src="{{asset('assets/images/primary-filter.png')}}" alt="" />
                                        <small class="m-0 ms-2">Trekking</small>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                    <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                    <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                </div>
                            </div>
                            <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua Ut enim ad minim incididunt ut labore et dolore
                                magna aliqua Ut enim ad minim</p>
                            <div>
                                <div class="d-flex">
                                    <div style="width: 30px; text-align: center; margin-bottom: 1rem;">
                                        <img src="{{asset('assets/images/tickets-icon.png')}}" alt="" />
                                    </div>
                                    <p class="m-0 ms-2">Musuem Tickets</p>
                                </div>
                                <div class="d-flex">
                                    <div style="width: 30px; text-align: center; margin-bottom: 1rem;">
                                        <img src="{{asset('assets/images/camera-icon.png')}}" alt="" />
                                    </div>
                                    <p class="m-0 ms-2">SightSeeing Tours</p>
                                </div>
                                <div class="d-flex">
                                    <div style="width: 30px; text-align: center; margin-bottom: 1rem;">
                                        <img src="{{asset('assets/images/dinner-icon.png')}}" alt="" />
                                    </div>
                                    <p class="m-0 ms-2">Social Dinners</p>
                                </div>
                                <div class="d-flex">
                                    <div style="width: 30px; text-align: center; margin-bottom: 1rem;">
                                        <img src="{{asset('assets/images/glass-icon.png')}}" alt="" />
                                    </div>
                                    <p class="m-0 ms-2">Wine tasting</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="text-left">
                                        <h5 class="d-block">From</h5>
                                        <div>
                                            <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center explore-button">
                                    <p class="m-0 me-2"><a href="./tour-details.html">Explore</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-4">
                    <div class="deal-card m-3 shadow mb-4">
                        <div class="position-relative">
                            <div class="deal-image">

                                <img src="{{asset('assets/images/amazing-tours-2.jpg')}}" alt="" class="w-100" />
                            </div>
                        </div>
                        <div class="p-4 pt-5 position-relative">
                            <div class="absolute-section-deal p-4 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/images/primary-marker.png')}}" alt="" />
                                    <small class="fw-bold m-0 ms-2">Nepal</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/images/primary-clock.png')}}" alt="" />
                                    <small class="fw-bold m-0 ms-2">5 Days</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/images/primary-filter.png')}}" alt="" />
                                    <small class="fw-bold m-0 ms-2">Trekking</small>
                                </div>
                            </div>
                            <h5 class="text-black mb-4 fw-bold">Saribung Peak Climbing National</h5>
                            <div class="d-flex mb-3 justify-content-between align-items-end">
                                <div class="">
                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                    <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                    <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                    <small>(2 review)</small>
                                </div>
                                <div class="difficulty">
                                    <h5 class="m-0 primarycolor">Moderate</h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="text-left">
                                        <h5 class="d-block">From</h5>
                                        <div>
                                            <h4 class="primarycolor m-0 fw-bold">$350</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center explore-button">
                                    <p class="m-0 me-2"><a href="./tour-details.html">Explore</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
                @endif

            @endforeach
        </div>

        <div class="mb-5">
            <div class="mb-0 p-5 pb-0">
                <h2 class="mb-4" style="color: #3484f5;"><strong>Reviews</strong> Tours <strong>Awesome Peoples</strong>
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiu smod tempor incididunt</p>
            </div>
            <div id="reviews-carousel" class="reviews-carousel-mobile carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
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
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="tour-review-container">
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
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="tour-review-container">
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
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="tour-review-container">
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
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="tour-review-container">
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
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="tour-review-container">
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
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="tour-review-container">
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
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="tour-review-container">
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
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-reviews-row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="tour-review-container">
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
                            <div class="col-1"></div>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#reviews-carousel"
                    data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#reviews-carousel"
                    data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

            <div class="tour-review-section p-5">
                <div class="tour-review-container">
                    @foreach ($reviews as $review)

                    <div>
                        <div class="name-overlay">
                            <h5>{{$review->title}}</h5>
                            <div>
                               @for ($i = 0; $i < $review->rating; $i++)
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                @endfor

                                @for ($i = 0; $i < 5-$review->rating ; $i++)
                                    <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="name-with-review-overlay">
                            <div class="text-center">

                                <h4>“{!! $review->content !!}“</h4>
                            </div>
                            <div class="text-center">
                                <h5>- {{$review->title}}</h5>

                                <div>
                                    @for ($i = 0; $i < $review->rating; $i++)
                                <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                @endfor
                                @for ($i = 0; $i < 5-$review->rating; $i++)
                                    <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>


        <div class="recent-articles-section amazing-tours-section p-3">
            <div class="mb-3 p-4">
                <h2 class="mb-4"><strong>Recent </strong>Articles</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiu smod tempor incididunt</p>
            </div>
            <div class="row m-0">
              @foreach ($blogs as $blog)

                <div class="col-4">
                    <div class="article-card m-3 shadow section-border mb-4">
                        <img class="w-100" src="{{asset($blog->blog_image->file_name ?? '')}}" alt="" />
                        <div class="article-caption text-white">
                            <h4 class="mb-4">{{$blog->title}}</h4>
                            <div class="d-flex">
                                <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                                <small class="m-0 ms-2">{{$blog->created_at->format('d M')}}</small>
                            </div>
                        </div>
                    </div>
                </div>

              @endforeach
            </div>
        </div>

        <div class="associates-section p-5">
            <div class="mb-4">
                <h2><strong>Associated With</strong> Major organizations<br />
                    and institutions <strong>Proud Members</strong></h2>
            </div>
            <div class="d-flex justify-content-between">
                <div class="section-border d-flex flex-column justify-content-center align-items-center">
                    <img src="{{asset('assets/images/associates-1.png')}}" alt="" class="mb-2" />
                </div>
                <div class="section-border d-flex flex-column justify-content-center align-items-center">
                    <img src="{{asset('assets/images/associates-2.png')}}" alt="" class="mb-2" />
                </div>
                <div class="section-border d-flex flex-column justify-content-center align-items-center">
                    <img src="{{asset('assets/images/associates-3.png')}}" alt="" class="mb-2" />
                </div>
                <div class="section-border d-flex flex-column justify-content-center align-items-center">
                    <img src="{{asset('assets/images/associates-4.png')}}" alt="" class="mb-2" />
                </div>
            </div>
        </div>

        <div class="subscribtion-section p-5">
            <p>Don’t wait any longer. Contact Us</p>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-end">
                    <img src="{{asset('assets/images/phone-icon-blue.png')}}" alt="" />
                    <h5>+1800-333 578 </h5>
                </div>
                <div class="d-flex  align-items-end">
                    <img src="{{asset('assets/images/mail-icon-blue.png')}}" alt="" />
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
                        <img src="{{asset('assets/images/rev-1.jpg')}}" alt="" />
                    </div>
                    <div class="review-text">
                        <p>"Great things are done when men and mountains are meet"</p>
                        <h5>- Willam Koinas</h5>
                    </div>
                </div>
                <div class="review">
                    <div class="review-image">
                        <img src="{{asset('assets/images/rev-2.jpg')}}" alt="" />
                    </div>
                    <div class="review-text">
                        <p>"Great things are done when men and mountains are meet"</p>
                        <h5>- Willam Koinas</h5>
                    </div>
                </div>
                <div class="review">
                    <div class="review-image">
                        <img src="{{asset('assets/images/rev-3.jpg')}}" alt="" />
                    </div>
                    <div class="review-text">
                        <p>"Great things are done when men and mountains are meet"</p>
                        <h5>- Willam Koinas</h5>
                    </div>
                </div>
            </div>
            <img src="{{asset('assets/images/review-banner.jpg')}}" alt="" class="w-100" />
        </div>
    </main>



@endsection
