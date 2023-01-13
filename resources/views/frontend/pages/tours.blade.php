@extends('frontend.layouts.app')
@section('content')

<main>
    <div class="main-banner position-relative">
        <img src="{{asset('assets/images/destination-banner.jpg')}}" alt="" />
        <div class="banner-heading">
            <form action="{{route('tours')}}" class="search-box">
                <div>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" name="search" placeholder="Where are you going?" value="{{request('search')}}" autocomplete="off"/>
                </div>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="p-5 search-section">
        <div class="row m-0">
            <div class="col-3 p-0">
                <div class="sidebar">
                    <div class="sidebar-box bg-white section-border mb-5">
                        <div class="sidebar-box-heading fs-5 p-4">FILTER BY</div>
                        <div class="siderbar-box-body">
                            <form action="{{route('tours')}}" class="accordion" id="accordionPanelsStayOpenExample">
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
                                                    <input class="form-check-input" name="rating" type="checkbox" value="5" id="5">
                                                    <label class="form-check-label" for="5">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="rating" type="checkbox" value="4" id="4">
                                                    <label class="form-check-label" for="4">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="rating" type="checkbox" value="3" id="3">
                                                    <label class="form-check-label" for="3">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star  second-color" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="rating" type="checkbox" value="2" id="2">
                                                    <label class="form-check-label" for="2">
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star second-color" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="rating" type="checkbox" value="1" id="1">
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
                                            @foreach ($activities as $activity)
                                               <div class="form-check">
                                                   <input class="form-check-input" name="activity" type="checkbox" value="{{$activity->id}}"
                                                   id="paragliding">
                                                   <label class="form-check-label" for="paragliding">
                                                       {{$activity->name}}
                                                    </label>
                                                </div>
                                            @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-destinations">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            Destinations
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-destinations">
                                        <div class="accordion-body">
                                            <div class="tour-checks">
                                                @foreach ($destinations as $destination)
                                                <div class="form-check">
                                                    <input class="form-check-input" name="destination" type="checkbox" value="{{$destination->id}}"
                                                    id="paragliding">
                                                    <label class="form-check-label" for="paragliding">
                                                        {{$destination->title}}
                                                     </label>
                                                 </div>
                                             @endforeach
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
                                                    <input class="form-check-input" name="duration" type="checkbox" value="1"
                                                        id="1-3">
                                                    <label class="form-check-label" for="1-3">
                                                        Day Tour
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="duration" type="checkbox" value="6"
                                                        id="2-6">
                                                    <label class="form-check-label" for="2-6">
                                                        02 - 06 Days
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="duration" type="checkbox" value="12"
                                                        id="7-12">
                                                    <label class="form-check-label" for="7-12">
                                                        07 - 12 Days
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="duration" type="checkbox" value="20"
                                                        id="13-20">
                                                    <label class="form-check-label" for="13-20">
                                                        13 - 20 Days
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="duration" type="checkbox" value="21"
                                                        id="21">
                                                    <label class="form-check-label" for="21">
                                                        21+ Days
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-box" style="width: 100%">
                                    <button style="width: 100%">Filter</button>

                                </div>
                            </form>
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
                        <p>Tibet: {{$tours->count()}} Tours Available</p>
                        <div id="grid-icons" class="grid-icons">
                            <button class="btn" onclick="listView()"><i class="fa fa-list-ul"></i></button>
                            <button class="btn active" onclick="gridView()"><i class="fa fa-th"></i></button>
                        </div>
                    </div>
                    <div class="destination-cards grid mt-1" id="destination-cards">
                        @foreach ($tours as $key => $tour)
                        <div class="deal-card shadow mb-5">
                            <div class="position-relative">
                                <div class="deal-image">
                                    <img src="{{ asset('assets/images/deal-1.jpg')}}" alt="" class="w-100" />
                                    @if ($tour->activate_discounts == true)
                                    <div class="deal-percentage">10% Off</div>
                                    @endif
                                </div>
                            </div>
                            <div class="p-4 pt-5">
                                <div>
                                    <h5 class="text-black mb-4 fw-bold">{{$tour->tour_name}}</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/images/primary-marker.png')}}" alt="" />
                                            <small class="fw-bold m-0 ms-2">{{$tour->destination->title ?? ''}}</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/images/primary-clock.png')}}" alt="" />
                                            <small class="fw-bold m-0 ms-2">{{$tour->duration > 1 ? $tour->duration.' Days' : $tour->duration.' Day'}}</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/images/primary-filter.png')}}" alt="" />
                                            <small class="fw-bold m-0 ms-2">{{$tour->activity->name ?? ''}}</small>
                                        </div>
                                    </div>
                                    <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua Ut enim ad minim</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="details-button">View Details</button>
                                    <div>
                                       @php
                                           $avg_review = $tour->reviews->average('rating');
                                       @endphp
                                        @for ($i = 0; $i < $avg_review ; $i++)
                                        <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                        @endfor
                                        @for ($i = $avg_review; $i < 5 ; $i++)
                                        <i class="fa fa-star-o primarycolor" aria-hidden="true"></i>
                                        @endfor


                                        <small>({{$tour->reviews->count() ?? '0'}} review)</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        {{-- <h4 class="m-0 me-2 text-decoration-line-through fw-bold">$350</h4> --}}
                                        <div>
                                            <h5 class="m-2 d-block">From</h5>
                                            <div>
                                                <h4 class="primarycolor m-0 fw-bold">${{$tour->flat_price ?? $tour->tiered_price ?? '0'}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <nav aria-label="Page navigation example">
                        {{-- <ul class="pagination justify-content-end">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul> --}}
                       
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

    @include('frontend.partials.reviews')
</main>

@endsection
