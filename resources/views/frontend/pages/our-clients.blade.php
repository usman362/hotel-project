@extends('frontend.layouts.app')
@section('content')

<main>
    <div class="main-banner position-relative">
        <img src="./assets/images/clients-banner.jpg" alt="" />
        <div class="banner-heading justify-content-center">
            <h1>Our Clients</h1>
        </div>
    </div>
    <div class="text-center p-5">
        <h2 style="color: #3484f5;" class="fw-bolder mb-5">View Our Esteemed Clients</h2>
        <p class="fs-5">On the other hand we denounce with righteous indignation and dislike men who are so beguiled
            and demoralized by the charms of pleasure of
            the moment so blinded.</p>
    </div>
    <div class="row clients-row m-3">
        <div class="col-3 p-0">
            <div class="clients-card p-3 m-3 section-border shadow">
                <img src="./assets/images/client-1.png" alt="client" />
            </div>
        </div>
        <div class="col-3 p-0">
            <div class="clients-card p-3 m-3 section-border shadow">
                <img src="./assets/images/client-2.png" alt="client" />
            </div>
        </div>
        <div class="col-3 p-0">
            <div class="clients-card p-3 m-3 section-border shadow">
                <img src="./assets/images/client-3.png" alt="client" />
            </div>
        </div>
        <div class="col-3 p-0">
            <div class="clients-card p-3 m-3 section-border shadow">
                <img src="./assets/images/client-4.png" alt="client" />
            </div>
        </div>
        <div class="col-3 p-0">
            <div class="clients-card p-3 m-3 section-border shadow">
                <img src="./assets/images/client-5.png" alt="client" />
            </div>
        </div>
        <div class="col-3 p-0">
            <div class="clients-card p-3 m-3 section-border shadow">
                <img src="./assets/images/client-6.png" alt="client" />
            </div>
        </div>
        <div class="col-3 p-0">
            <div class="clients-card p-3 m-3 section-border shadow">
                <img src="./assets/images/client-7.png" alt="client" />
            </div>
        </div>
        <div class="col-3 p-0">
            <div class="clients-card p-3 m-3 section-border shadow">
                <img src="./assets/images/client-6.png" alt="client" />
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

    @include('frontend.partials.reviews')
</main>

@endsection
