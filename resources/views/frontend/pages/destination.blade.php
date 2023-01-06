@extends('frontend.layouts.app')
@section('content')

<main>
    <div class="main-banner position-relative">
        <img src="./assets/images/about-us-banner.jpg" alt="" />
        <div class="banner-heading justify-content-center">
            <h1>Destinations</h1>
        </div>
    </div>
    <!-- <div class="container"> -->
        <div class="row carousel-card-row mt-4 mb-5">
           {{-- @foreach ($destinations as $key => $destination)

            <div class="col-sm-12 col-md-8 col-lg-6 p-2 position-relative">

                <div id="container">
                    <div class="product-details">

                        <h3>Bhutan</h3>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>

                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of
                            the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will
                            enhance
                            your Christmas.</p>



                        <div class="control">

                            <button class="btn-card">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart"
                                        aria-hidden="true"></i></span>
                                <span class="buy">Get now</span>
                            </button>

                        </div>

                    </div>

                    <div class="product-image">

                        <img src="./assets/images/destination-1.jpg" alt="">


                        <div class="info">
                            <div>
                                <h2> Description</h2>
                                <ul>
                                    <li><strong>Height : </strong>5 Ft </li>
                                    <li><strong>Shade : </strong>Olive green</li>
                                    <li><strong>Decoration: </strong>balls and bells</li>
                                    <li><strong>Material: </strong>Eco-Friendly</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @endforeach --}}

            @foreach ($destinations as $key => $destination)
            <div class="col-4 p-4 position-relative">
            <img class="w-100" src="{{asset($destination->thumbnail->file_name ?? 'assets/images/destination-1.jpg')}}" alt="" />
            <h4>{{$destination->title}}</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                {{count($destination->programs) ?? '0'}} tours
            </div>
        </div>
        @endforeach
       <!-- <div class="col-4 p-4 position-relative">
            <img class="w-100" src="./assets/images/destination-2.jpg" alt="" />
            <h4>India</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                1 tours
            </div>
        </div>
        <div class="col-4 p-4 position-relative">
            <img class="w-100" src="./assets/images/destination-3.jpg" alt="" />
            <h4>Bhutan</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                3 tours
            </div>
        </div>
        <div class="col-4 p-4 position-relative">
            <img class="w-100" src="./assets/images/destination-1.jpg" alt="" />
            <h4>Tibet</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                5 tours
            </div>
        </div>
        <div class="col-4 p-4 position-relative">
            <img class="w-100" src="./assets/images/destination-2.jpg" alt="" />
            <h4>India</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                1 tours
            </div>
        </div>
        <div class="col-4 p-4 position-relative">
            <img class="w-100" src="./assets/images/destination-3.jpg" alt="" />
            <h4>Bhutan</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                3 tours
            </div>
        </div>
        <div class="col-4 p-4 position-relative">
            <img class="w-100" src="./assets/images/destination-1.jpg" alt="" />
            <h4>Tibet</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                5 tours
            </div>
        </div>
        <div class="col-4 p-4 position-relative">
            <img class="w-100" src="./assets/images/destination-2.jpg" alt="" />
            <h4>India</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                1 tours
            </div>
        </div>
        <div class="col-4 p-4 position-relative">
            <img class="w-100" src="./assets/images/destination-3.jpg" alt="" />
            <h4>Bhutan</h4>
            <p>View All Trips</p>
            <span></span>
            <div class="tours-count">
                3 tours
            </div>
        </div> -->
        </div>
    <!-- </div> -->


    @include('frontend.partials.reviews')
</main>

@endsection
