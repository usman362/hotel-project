@section('title','Add Review')

@extends('layouts.app')

@section('content')


<!-- BEGIN: Content-->
<div class="app-content content ">

    @if(session()->has('success'))
<div class="alert alert-primary pd-4" role="alert">
{{ session()->get('success') }}
</div>
@endif
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Ratings</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Extensions</a>
                                </li>
                                <li class="breadcrumb-item active">Ratings
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <!-- Basic -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-ratings"></div>
                        </div>
                    </div>
                </div>
                <!--/ Basic -->

                <!-- Readonly -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Read Only</h4>
                        </div>
                        <div class="card-body">
                            <div class="read-only-ratings" data-rateyo-read-only="true"></div>
                        </div>
                    </div>
                </div>
                <!--/ Readonly -->

                <!-- Custom SVG -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom SVG</h4>
                        </div>
                        <div class="card-body">
                            <div class="custom-svg-ratings"></div>
                        </div>
                    </div>
                </div>
                <!--/ Custom SVG -->

                <!-- Half Star -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Half Star</h4>
                        </div>
                        <div class="card-body">
                            <div class="half-star-ratings" data-rateyo-half-star="true"></div>
                        </div>
                    </div>
                </div>
                <!--/ Half Star -->

                <!-- Full Star -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Full Star</h4>
                        </div>
                        <div class="card-body">
                            <div class="full-star-ratings" data-rateyo-full-star="true"></div>
                        </div>
                    </div>
                </div>
                <!--/ Full Star -->

                <!-- Multicolor -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multicolor</h4>
                        </div>
                        <div class="card-body">
                            <div class="multi-color-ratings"></div>
                        </div>
                    </div>
                </div>
                <!--/ Multicolor -->

                <!-- Events -->
                <div class="col-xl-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Events</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md d-flex flex-column align-items-start mb-sm-0 mb-1">
                                    <p class="card-text fw-semibold mb-25">onSet Event</p>
                                    <div class="onset-event-ratings"></div>
                                </div>
                                <div class="col-md d-flex flex-column align-items-start">
                                    <p class="card-text fw-semibold mb-25">onChange Event</p>
                                    <div class="onChange-event-ratings"></div>
                                    <div class="counter-wrapper mt-1">
                                        <strong>Ratings:</strong>
                                        <span class="counter"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Events -->

                <!-- Methods -->
                <div class="col-xl-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Methods</h4>
                        </div>
                        <div class="card-body">
                            <div class="methods-ratings"></div>
                            <div class="demo-inline-spacing">
                                <button class="btn btn-outline-primary btn-sm btn-initialize">Initialize</button>
                                <button class="btn btn-outline-primary btn-sm btn-get-rating">Get Ratings</button>
                                <button class="btn btn-outline-primary btn-sm btn-set-rating">Set Ratings to 1</button>
                                <button class="btn btn-outline-danger btn-sm btn-destroy">Destroy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Methods -->
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
