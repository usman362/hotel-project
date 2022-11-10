@section('title','Add Program')

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
            </div>
            <div class="content-body">
                <!-- Horizontal Wizard -->
                <section class="horizontal-wizard">

                    <div class="bs-stepper horizontal-wizard-example">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
                                <button type="button" class="step-trigger" id="account-details-trigger-btn">
                                    <span class="bs-stepper-box">1</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Product Outline</span>
                                        <span class="bs-stepper-subtitle">Setup Properties</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
                                <button type="button" class="step-trigger"  id="personal-info-trigger-btn">
                                    <span class="bs-stepper-box">2</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Product Description</span>
                                        <span class="bs-stepper-subtitle">Add overview, itinerary, map &amp; costing</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#address-step" role="tab" id="address-step-trigger">
                                <button type="button" class="step-trigger" id="address-step-trigger-btn">
                                    <span class="bs-stepper-box">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Supporting Docs</span>
                                        <span class="bs-stepper-subtitle">Add Gearlist, FAQ and Support</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#social-links" role="tab" id="social-links-trigger">
                                <button type="button" class="step-trigger" id="social-links-trigger-btn">
                                    <span class="bs-stepper-box">4</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Tour Pricing</span>
                                        <span class="bs-stepper-subtitle">Add costs and SEO</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                          <form action="{{route('program.store')}}" id="second_form" method="POST" enctype="multipart/form-data">
                                    @csrf
                            <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Program Overview</h5>
                                    <small class="text-muted">Enter tour outlines</small>
                                </div>



                                    <div class="row">
                                        <div class="mb-1 col-md-4">
                                            <label class="form-label" for="tour_name">Tour Name</label>
                                            <input type="text" name="tour_name" id="tour_name" class="form-control" placeholder="Everest Base Camp Trek" />
                                            @error('tour_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1 col-md-4">
                                            <label class="form-label" for="tour_url">URL Slug</label>
                                            <input type="text" name="url_slug" id="tour_url" class="form-control" placeholder="everest-base-camp-trek" aria-label="everest-base-camp-trek" />
                                              @error('url_slug')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label class="form-label" for="iti-ribbon">Ribbon</label>
                                            <select class="form-select" name="ribbon" id="iti-ribbon">
                                                <option value="" selected>--------</option>
                                                <option value="Featured">Featured</option>
                                                <option value="Promoted">Promoted</option>
                                                <option value="Newly Added">Newly Added</option>
                                                <option value="Tour of the Month">Tour of the Month</option>

                                            </select>
                                        </div>
                                        <div class="mb-1 col-md-2">
                                            <label class="form-label" for="iti-url">Reference</label>
                                            <input type="text" name="reference" id="reference" class="form-control" placeholder="TPNRTM" value="TPNRTM" aria-label="reference" readonly="readonly" />
                                              @error('reference')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-1">
                                            <label class="form-label" for="select2-basic">Destination</label>
                                            <select class="form-select destination_id" name="destination_id" id="select2-basic">
                                                <option value="" selected>--------</option>
                                               @foreach ($destinations as $destination)
                                               <option value="{{$destination->id}}">{{$destination->title}}</option>
                                               @endforeach
                                            </select>
                                              @error('destination_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <label class="form-label" for="select2-basic1">Activity</label>
                                            <select class="form-select activity_id" name="activity_id" id="select2-basic1">
                                                <option value="" selected>--------</option>
                                                @foreach ($activities as $activity)
                                               <option value="{{$activity->id}}">{{$activity->name}}</option>
                                               @endforeach

                                            </select>
                                              @error('activity_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <label class="form-label" for="iti-region">Region</label>
                                            <select class="form-select" name="region_id" id="iti-region">
                                                <option value="" selected>--------</option>
                                                @foreach ($regions as $region)
                                               <option value="{{$region->id}}">{{$region->title}}</option>
                                               @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="id-duration">Duration</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="duration" id="duration" placeholder="02" aria-label="Duration" aria-describedby="id-duration">
                                                <span class="input-group-text" id="id-duration">Days</span>
                                            </div>
                                              @error('duration')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="iti-difficulty">Difficulty</label>
                                            <select class="form-select" name="difficult" id="iti-difficulty">
                                                <option value="" selected>--------</option>
                                                <option value="Easy">Easy</option>
                                                <option value="Moderate">Moderate</option>
                                                <option value="Difficult">Difficult</option>
                                                <option value="Extreme">Extreme</option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="it-elevation">Maximum Elevation</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="max_elevation" placeholder="5545" aria-label="Elevation" aria-describedby="it-elevation">
                                                <span class="input-group-text" id="it-elevation">Meters</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Minimum Participant</label>

                                            <div class="input-group">
                                                <input type="number" min="1" name="min_participant" id="min_participant" class="form-control" placeholder="1" aria-label="Group Min Size" aria-describedby="it-groupmin">
                                                <span class="input-group-text" id="it-groupmin">Pax</span>
                                            </div>
                                              @error('min_participant')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Maximum Participant</label>

                                            <div class="input-group">
                                                <input type="number" min="1" name="max_participant" id="max_participant" class="form-control" placeholder="32" aria-label="Group Max Size" aria-describedby="it-groupmax">
                                                <span class="input-group-text" id="it-groupmax">Pax</span>
                                            </div>
                                              @error('max_participant')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="iti-meals">Meals</label>
                                            <input type="text" class="form-control" name="meals" id="iti-meals" readonly="readonly" value="0B, 0L, 0D">
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="accommodation">Accommodation</label>
                                            <input type="text" name="accommodation" id="accommodation" class="form-control" placeholder="Hotel / Guest Houses" />
                                             @error('accommodation')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="iti-months">Best Months</label>
                                            <input type="text" name="best_months" id="iti-months" class="form-control" placeholder="Hotel / Guest Houses" />
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="iti-distance">Distance</label>
                                            <input type="text" name="distance" id="iti-distance" class="form-control" placeholder="15 Kilometers" />
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label class="form-label" for="iti-start-end">Start / End</label>
                                            <input type="text" name="start_end" id="iti-start-end" class="form-control" placeholder="Kathmandu / Lhasa" />
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="iti-daily-activity">Daily Activity</label>
                                            <input type="text" name="daily_activity" id="iti-daily-activity" class="form-control" placeholder="7 - 9 Hours Trek" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label" for="iti-highlight-heading">Tour Highlights</label>
                                            <!--Form repeater example: https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/form-repeater.html -->
                                            <div class="card">
                                                <div class="card-body" >


                                                            <div  class="tour_highlight">
                                                                <div class="row d-flex align-items-end">
                                                                    <div class="col-md-10">
                                                                        <div class="mb-1">
                                                                            <input type="text" class="form-control" name="tour_highlights[]" id="iti-high1" aria-describedby="iti-high1" placeholder="The most famous treks in the world" />
                                                                        </div>
                                                                    </div>

                                                                    <!--<div class="col-md-2 mb-20">-->
                                                                    <!--    <div class="mb-1">-->
                                                                    <!--        <button class="btn btn-outline-danger text-nowrap px-1"  type="button">-->
                                                                    <!--            <i data-feather="x" class="me-25"></i>-->
                                                                    <!--            <span>Delete</span>-->
                                                                    <!--        </button>-->
                                                                    <!--    </div>-->
                                                                    <!--</div>-->
                                                                </div>
                                                            </div>

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button class="btn btn-icon btn-primary" id="add_tour_highlight" type="button">
                                                                    <i data-feather="plus" class="me-25"></i>
                                                                    <span>Add More</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                <div class="d-flex justify-content-between">
                                    <button  type="button" class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <!--account-details-next-->
                                    <button type="button" class="btn btn-primary account-details-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>

                                </div>
                                <span class="account-details-error text-danger"></span>
                            </div>
                            <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Package Details</h5>
                                    <small class="text-muted">Details about the tour</small>
                                </div>

                                    <!-- full Editor start -->

                                    <div class="row">
                                        <div class="col-8 mb-1">
                                            <div id="full-wrapper">
                                                <label class="form-label" for="iti-daily-activity">Tour Overview</label>
                                                <div id="full-container">
                                                      <textarea class="tinymceTextEditor tour_overview" name="tour_overview">

                                                    </textarea>
                                                     @error('tour_overview')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-1 col-md-4">
                                            <label for="iti-brochure" class="form-label">Tour Brochure</label>
                                            <input class="form-control" name="tour_brochure" type="file" id="iti-brochure" accept="application/pdf">
                                        </div>
                                    </div>

                                    <!-- full Editor end -->
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <div class="d-flex">
                                                <a href="#" class="me-25">
                                                    <img src="{{asset('app-assets/images/slider/10.jpg')}}" id="tour_thumbnail_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="250">
                                                </a>
                                                <!-- upload and reset button -->
                                                <div class="d-flex align-items-end mt-75 ms-1">
                                                    <div>
                                                        <div class="alert alert-primary" role="alert">
                                                            <div class="alert-body"><strong>Tour Thumbnail</strong></div>
                                                        </div>
                                                        <label class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light uploadModal" data-bs-toggle="modal" data-name="tour_thumbnail" data-bs-target="#new-upload-modal">Upload</label>
                                                        <input name="tour_thumbnail" type="hidden">
                                                        <button type="button" id="account-reset" onclick="resetThumbnailImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                    </div>
                                                </div>
                                             @error('tour_thumbnail')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="mb-1 col-md-6">
                                            <div class="d-flex">
                                                <a href="#" class="me-25">
                                                    <img src="{{asset('app-assets/images/slider/10.jpg')}}" id="tour_banner_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="250">
                                                </a>
                                                <!-- upload and reset button -->
                                                <div class="d-flex align-items-end mt-75 ms-1">
                                                    <div>
                                                        <div class="alert alert-primary" role="alert">
                                                            <div class="alert-body"><strong>Tour Banner</strong></div>
                                                        </div>
                                                        <label class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light uploadModal" data-bs-toggle="modal" data-name="tour_banner" data-bs-target="#new-upload-modal">Upload</label>
                                                        <input name="tour_banner" type="hidden">
                                                        <button type="button" id="account-reset" onclick="resetBannerImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                    </div>
                                                </div>
                                             @error('tour_banner')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="mb-1 col-md-6">
                                            <div class="d-flex">
                                                <a href="#" class="me-25">
                                                    <img src="{{asset('app-assets/images/slider/10.jpg')}}" id="tour_gallery_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="250">
                                                </a>
                                                <!-- upload and reset button -->
                                                <div class="d-flex align-items-end mt-75 ms-1">
                                                    <div>
                                                        <div class="alert alert-primary" role="alert">
                                                            <div class="alert-body"><strong>Tour Gallery</strong></div>
                                                        </div>
                                                        <label class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light uploadModal" data-bs-toggle="modal" data-name="tour_gallery[]" data-bs-target="#new-gallery_upload-modal">Upload</label>
                                                        <input name="tour_gallery[]" type="hidden">
                                                        <button type="button" id="account-reset" onclick="resetGalleryImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                    </div>
                                                </div>
                                        </div>

                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <div class="d-flex">
                                                <a href="#" class="me-25">
                                                    <img src="{{asset('app-assets/images/slider/10.jpg')}}" id="tour_map_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="250">
                                                </a>
                                                <!-- upload and reset button -->
                                                <div class="d-flex align-items-end mt-75 ms-1">
                                                    <div>
                                                        <div class="alert alert-primary" role="alert">
                                                            <div class="alert-body"><strong>Tour Map</strong></div>
                                                        </div>
                                                        <label class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light uploadModal" data-bs-toggle="modal" data-name="tour_map" data-bs-target="#new-upload-modal">Upload</label>
                                                        <input name="tour_map" type="hidden">
                                                        <button type="button" id="account-reset" onclick="resetMapImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                    </div>
                                                </div>

                                        </div>
                                        </div>

                                    </div>

                                    <div class="row">



                                        <label class="form-label">Free Cancellation</label>
                                        <div class="col-md-3 mb-1">
                                            <!-- Custom radio -->

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio1" name="free_cancellation" class="form-check-input" value="60 Days Before" >
                                                        <label class="form-check-label" for="customRadio1"></label>
                                                    </div>
                                                </div>
                                                <input type="text" name="" class="form-control" value="60 Days Before" readonly="readonly">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <!-- Custom radio -->

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio1" name="free_cancellation" class="form-check-input" value="30 Days Before">
                                                        <label class="form-check-label" for="customRadio1"></label>
                                                    </div>
                                                </div>
                                                <input type="text" name="" class="form-control" value="30 Days Before " readonly="readonly">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <!-- Custom radio -->

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio1" name="free_cancellation" class="form-check-input" value="7 Days Before">
                                                        <label class="form-check-label" for="customRadio1"></label>
                                                    </div>
                                                </div>
                                                <input type="text" name="" class="form-control" value="7 Days Before" readonly="readonly">
                                            </div>

                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <!-- Custom radio -->

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio1" name="free_cancellation" class="form-check-input" value="No Free Cancellation">
                                                        <label class="form-check-label" for="customRadio1"></label>
                                                    </div>
                                                </div>
                                                <input type="text" name="" class="form-control" value="No Free Cancellation" readonly="readonly">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label" for="iti-day-to-day">Day to Day itinerary</label>
                                            <div class="card">

                                                <div class="card-body">
                                                    <div class="invoice-repeater">
                                                        <div class="day_itinerary">
                                                                <div class="row d-flex align-items-end child_row ">
                                                                    <div class="col-md-6 mb-1">

                                                                        <label class="form-label" for="iti-day1">Day 1</label>
                                                                        <input type="text" name="itinerary_day[]" class="form-control" id="iti-day1" aria-describedby="iti-day1"  placeholder="Ex. Arrival in Kathmandu, transfer to the hotel" />

                                                                    </div>

                                                                    <div class="col-md-2 mb-1">

                                                                        <label class="form-label" for="iti-distance1">Distance</label>
                                                                        <input type="text" class="form-control" id="iti-distance1" name="itinerary_distance[]" aria-describedby="iti-distance1" placeholder="6KM / 15 Miles" />

                                                                    </div>

                                                                    <div class="col-md-2 mb-1">

                                                                        <label class="form-label" for="iti-duration1">Duration</label>
                                                                        <input type="text" class="form-control" id="iti-duration1" name="itinerary_duration[]" aria-describedby="iti-duration1" placeholder="6 Hours Trek" />

                                                                    </div>

                                                                    <div class="col-md-2 mb-1">

                                                                        <label class="form-label" for="iti-altitude1">Altitude</label>
                                                                        <input type="text" class="form-control" id="iti-altitude1" name="itinerary_altitude[]" aria-describedby="iti-altitude1" placeholder="3210M / 9800FT" />

                                                                    </div>
                                                                    <div class="col-md-12 mb-1">
                                                                        <label class="form-label" for="iti-altitude1">Day Description</label>
                                                                        <div id="snow-wrapper">
                                                                            <div id="snow-container">
                                                                                 <textarea class="tinymceTextEditor" name="itinerary_description[]">

                                                                            </textarea>

                                                                            </textarea>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-1">

                                                                        <label class="form-label" for="iti-accommodation1">Accommodation</label>
                                                                        <input type="text" class="form-control" id="iti-accommodation1" name="itinerary_accommodation[]" aria-describedby="iti-accommodation1" placeholder="Hotel Thamel Park" />

                                                                    </div>
                                                                    <div class="col-md-7 mb-1">

                                                                        <div class="row">
                                                                            <label class="form-label">Meals</label>
                                                                            <div class="col-md-4">

                                                                                <div class="input-group">
                                                                                    <div class="input-group-text">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input meals" name="itinerary_breakfast[]" value="1" type="checkbox" id="breakfast1">
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" value="Breakfast" readonly="readonly">
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-md-4">

                                                                                <div class="input-group">
                                                                                    <div class="input-group-text">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input meals" name="itinerary_lunch[]" value="1" type="checkbox" id="lunch1">
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" value="Lunch" readonly="readonly">
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-md-4">

                                                                                <div class="input-group">
                                                                                    <div class="input-group-text">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input meals" name="itinerary_dinner[]" value="1" type="checkbox" id="dinner1">
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" value="Dinner" readonly="readonly">
                                                                                </div>

                                                                            </div>



                                                                        </div>

                                                                    </div>



                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 mt-1">
                                                                <button class="btn btn-icon btn-primary" type="button" id="add_day_itinerary" data-repeater-create>
                                                                    <i data-feather="plus" class="me-25"></i>
                                                                    <span>Add Another Day</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--costing starts -->
                                    <div class="includes">
                                    <div class="row d-flex align-items-end">
                                        <h6>Costing Section</h6>
                                        <div class="col-md-11 mb-1">

                                            <label class="form-label" for="iti-include1">Cost Includes</label>
                                            <div class="input-group">
                                                <button type="button" class="input-group-text add_includes btn btn-outline-secondary border-success text-success"><i data-feather="plus-circle"></i></button>
                                                <input type="text" id="iti-include1" class="form-control include include_1" name="includes[]" placeholder=" Ex. Airport pickup and drop services on a private vehicle including before and after the trek" data-id="1"/>
                                                <span id="include_error_1" class="text-danger" style="display:none">Include is Required!</span>
                                            </div>

                                        </div>
                                        <div class="col-md-1 mb-1">


                                        </div>
                                        </div>



                                    <div class="row mb-1">
                                        <label for="iti-in-caption1" class="col-md-1 col-form-label-sm"><span class="badge rounded-pill bg-success">Caption</span></label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control form-control-sm inc_caption inc_caption_1" name="include_caption[]" id="iti-in-caption1" placeholder="Ex. 2 transfers for international arrival and 2 transfers for domestic flights" data-id="1">
                                       <span id="inc_caption_error_1" class="text-danger" style="display:none">Caption is Required!</span>
                                        </div>


                                    </div>
                                     </div>
                                    <!--cost includes end and cost excludes start -->
                                <div class="excludes">
                                    <div class="row d-flex align-items-end">


                                        <div class="col-md-11 mb-1">

                                            <label class="form-label" for="iti-exclude1">Cost Excludes</label>
                                            <div class="input-group">
                                                <button type="button" class="input-group-text add_excludes btn btn-outline-secondary border-danger text-danger"><i data-feather="plus-circle"></i></button>
                                                <input type="text" id="iti-exclude1" class="form-control exclude exclude_1" name="excludes[]" placeholder=" Ex. International airfare, Nepal visa fees ( two passport photographs ), travel and medical insurance, emergency evacuation" data-id="1" />
                                                <span id="exclude_error_1" class="text-danger" style="display:none">Exclude is Required!</span>
                                            </div>

                                        </div>
                                        <div class="col-md-1 mb-1">


                                        </div>
                                    </div>


                                    <div class="row mb-1">

                                        <label for="iti-ex-caption1" class="col-md-1 col-form-label-sm"><span class="badge rounded-pill bg-danger">Caption</span></label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control form-control-sm exc_caption exc_caption_1" id="iti-ex-caption1" name="exclude_caption[]" placeholder="Ex. (Nepal via fees; 15 days - USD 30, 30 Days - USD 50, 90 Days - USD 125 | Visa extension - USD 3 per day, Late fine - USD 5 per day)" data-id="1">
                                       <span id="exc_caption_error_1" class="text-danger" style="display:none">Caption is Required!</span>
                                        </div>


                                    </div>

                                    </div>
                                    <!--costing ends -->

                                <div class="d-flex justify-content-between">
                                    <button  type="button" class="btn btn-primary personal-info-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button  type="button" class="btn btn-primary personal-info-next">
                                        <span class="align-middle d-sm-inline-block d-none ">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="address-step" class="content" role="tabpanel" aria-labelledby="address-step-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Support</h5>
                                    <small class="text-muted">Enter additional information.</small>
                                </div>

                                    <div class="row d-flex align-items-end">
                                        <div class="col-md-6 mb-2"><label for="" class="form-label">Equipment List <span class="badge rounded-pill bg-success">Upload Equipment List</span></label></div>

                                        <div class="col-md-6 mb-2">
                                            <input class="form-control" name="equipment_file[]" type="file" id="iti-eqlist">
                                        </div>
                                    </div>
                                    <div class="equipments">
                                    <div class="row ">
                                        <div class="mb-1 col-md-3">
                                            <input type="text" id="equipment1" name="equipment_1[]" class="form-control" placeholder="Eg. Waterproof trekking boots / Flip Flops" />
                                        </div>
                                        <div class="mb-1 col-md-3">
                                            <input type="text" name="equipment2" id="equipment_2[]" class="form-control" placeholder="Eg. Socks / Undergarments" />
                                        </div>
                                        <div class="mb-1 col-md-3">
                                            <input type="text" name="equipment3" id="equipment_3[]" class="form-control" placeholder="Eg. Shorts" />
                                        </div>
                                        <div class="mb-1 col-md-2">
                                            <input type="text" name="equipment14" id="equipment_4[]" class="form-control" placeholder="Eg. Trekking pants" />
                                        </div>
                                        <!--<div class="col-md-1 mb-20">-->
                                        <!--    <div class="mb-1">-->
                                        <!--        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">-->
                                        <!--            <i data-feather="x" class="me-25"></i>-->
                                        <!--        </button>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>

                                    </div>

                                    <div class="row">
                                        <div class="mb-1 col-12">
                                            <button class="btn btn-icon btn-primary" id="add_equipment" type="button" data-repeater-create>
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add More</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="faqs">
                                    <div class="row d-flex align-items-end">
                                        <div class="mb-0 col-md-12">
                                            <label class="form-label" for="faq_question_1">FAQ #1 Question</label>
                                            <input type="text" id="faq_question_1" name="faq_question[]" class="form-control faq_question" data-id="1" placeholder="Q Ex. What is the best time to visit Nepal?" />
                                            <span id="question_error_1" class="text-danger" style="display:none">Question is Required!</span>
                                        </div>
                                        <!-- Add Textarea with Quill here -->
                                        <div class="mb-1 mt-1 col-md-11">
                                            <textarea data-length="500" name="faq_answer[]" class="form-control faq_answer" data-id="1" id="faq_answer_1" data-id="1" rows="3" placeholder="Ex. The best time to visit Nepal is from March to May and from September to December. You can visit in other seasons as well but it isn't considered the best." style="height: 100px" spellcheck="true"></textarea>
                                            <span id="answer_error_1" class="text-danger" style="display:none">Answer is Required!</span>
                                        </div>

                                    </div>

                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-12">
                                            <button class="btn btn-icon btn-primary" id="add_faq" type="button" data-repeater-create>
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add More FAQs</span>
                                            </button>
                                        </div>
                                    </div>

                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-primary address-step-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button  type="button" class="btn btn-primary address-step-next">
                                        <span class="align-middle d-sm-inline-block d-none ">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="social-links" class="content" role="tabpanel" aria-labelledby="social-links-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Pricing </h5>
                                    <small>Flat price or prices based on number of people</small>
                                </div>

                                    <div class="row custom-options-checkable g-1 mb-1">
                                        <div class="col-md-6">
                                            <input class="custom-option-item-check pricing_type" type="radio" name="pricing_type" value="Flat Rate" id="customOptionsCheckableRadios1" checked="">
                                            <label class="custom-option-item p-1" for="customOptionsCheckableRadios1">
                                                <span class="d-flex justify-content-between flex-wrap mb-50">
                                                    <span class="fw-bolder">Flat Rate</span>
                                                    <span class="fw-bolder">Per person</span>
                                                </span>
                                                <small class="d-block">Flat rate will make the price same for all regardless of group size. Enter flat price followed by minimum and maximum person required to make reservation.</small>
                                            </label>
                                        </div>

                                        <div class="col-md-6">
                                            <input class="custom-option-item-check pricing_type" type="radio" name="pricing_type" id="customOptionsCheckableRadios2" value="Tiered Pricing">
                                            <label class="custom-option-item p-1" for="customOptionsCheckableRadios2">
                                                <span class="d-flex justify-content-between flex-wrap mb-50">
                                                    <span class="fw-bolder">Tiered Pricing</span>
                                                    <span class="fw-bolder">Based on group size</span>
                                                </span>
                                                <small class="d-block">The prices will be based on total number of people traveling together. Enter prices, minimum pax and maximum pax for tiered pricing.</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">



                                                <div class="row">

                                                    <div class="col-md-6 tiered_section" style="display:none">
                                                        </div>
                                                <div class="col-md-6 flat_section">
                                                    <label class="form-label" for="">Flat Price</label>
                                                    <div class="input-group mb-1">
                                                        <span class="input-group-text">USD</span>
                                                        <input type="number" name="flat_price" class="form-control" placeholder="992" aria-label="">
                                                        <span class="input-group-text">per person</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="">Product Cutoff</label>

                                                    <div class="input-group mb-1">
                                                        <span class="input-group-text">Before</span>
                                                        <input type="number" name="product_cutoff" min="0" class="form-control" placeholder="3" aria-label="">
                                                        <span class="input-group-text">Days</span>
                                                    </div>
                                                </div>
                                                </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="tiered_section tiered_main" style="display:none">
                                                <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label" for="iti-tierminpax">Min Pax</label>

                                                    <input type="number" min="1" id="iti-tierminpax" name="min_pax[]" class="form-control" value="01" readonly="readonly">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="">Max Pax</label>

                                                    <input type="number" min="1" id="iti-flatmaxpax" name="max_pax[]" data-id="1" class="form-control max_pax" value="" placeholder="10">
                                                </div>
                                                <div class="col-md-5">
                                                    <label class="form-label" for="">Tiered Price</label>
                                                    <div class="input-group mb-1">
                                                        <span class="input-group-text">USD</span>
                                                        <input type="number" min="1" class="form-control tiered_price_1" onfocus="tieredFunction(this)" name="tiered_price[]" placeholder="992" aria-label="">
                                                        <span class="input-group-text">per person</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <h5 class="mb-0">Addon Options</h5>
                                        <div class="mb-1 col-md-8 ">
                                            <div class="addons">
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="addon_name">Addon Name</label>
                                                        <input type="text" name="addon_name[]" class="form-control" id="addon_name" aria-describedby="itemname" placeholder="Ex. Mountain Flight">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="">Price</label>
                                                    <div class="input-group mb-1">
                                                        <span class="input-group-text">USD</span>
                                                        <input type="number" name="addon_price[]" id="" min="1" class="form-control" placeholder="198" aria-label="">
                                                        <span class="input-group-text">per item</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="iti-accommodates">Accommodates</label>
                                                        <div class="input-group">
                                                            <input type="number" name="addon_accommodates[]" min="1" class="form-control accommodates_max" placeholder="1" aria-label="iti-accomodates" aria-describedby="iti-accommodates" value="">
                                                            <span class="input-group-text" id="iti-accommodates">Pax</span>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                            </div>
                                            <button class="btn btn-icon btn-primary" id="add_addon" type="button" data-repeater-create>
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add Another Addon</span>
                                            </button>
                                        </div>
                                        <div class="mb-1 col-md-4">
                                            <div class="alert alert-primary" role="alert">
                                                <div class="alert-body"><strong>Note:</strong> Trip-adds are optional add-ons which the customer can purchase, IN ADDITION to the main product. If it is a trekking trip, an add-on may be a 'Porter'. If it is a bike ride, an add-on may be a bike cycle computer which can be added, at an additional price etc.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="discounts">
                                    <div class="row d-flex align-items-end">

                                        <div class="mb-1 col-md-3">
                                            <div class="d-flex flex-column">
                                                <label class="form-label" for="linkedin">Activate Discounts?</label>
                                                <div class="form-check form-check-primary form-switch">
                                                    <input type="checkbox" name="activate_discounts" class="form-check-input active_discount" id="customSwitch3" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-1 col-md-2">
                                            <label class="form-label" for="discount_from">Discount From</label>
                                            <input type="text" id="discount_from" name="discount_from[]" class="form-control flatpickr-basic flatpickr-input active discounts_date" placeholder="YYYY-MM-DD" readonly="readonly">
                                        </div>
                                        <div class="mb-1 col-md-2">
                                            <label class="form-label" for="discount_until">Discount Until</label>
                                            <input type="text" id="discount_until" name="discount_until[]" class="form-control flatpickr-basic flatpickr-input active discounts_date" placeholder="YYYY-MM-DD" readonly="readonly">
                                        </div>
                                        <div class="mb-1 col-md-2">
                                            <label class="form-label" for="discounts">Discounts</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control discounts_input" name="discounts[]" id="discounts"  placeholder="10" aria-label="Elevation " aria-describedby="it-elevation">
                                                <span class="input-group-text" id="it-elevation">%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-1">
                                                <button class="btn btn-primary discounts_input" id="add_discount" type="button" data-repeater-create="">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add More</span>

                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    </div>

                                    <div class="unavailables">
                                    <div class="row d-flex align-items-end">

                                        <div class="mb-1 col-md-3">
                                            <div class="d-flex flex-column">
                                                <label class="form-label" for="unavailable_dates">Unavailable Dates?</label>
                                                <div class="form-check form-check-primary form-switch">
                                                    <input type="checkbox" name="unavailable_dates" class="form-check-input unavailable_dates" id="unavailable_dates" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-1 col-md-3">
                                            <label class="form-label" for="linkedin">Unavailable From</label>
                                            <input type="text" id="fp-default" name="unavailable_from[]" class="form-control flatpickr-basic flatpickr-input unavailable_date active" placeholder="YYYY-MM-DD" readonly="readonly">
                                        </div>
                                        <div class="mb-1 col-md-3">
                                            <label class="form-label" for="linkedin">Unavailable Until</label>
                                            <input type="text" id="fp-default" name="unavailable_until[]" class="form-control flatpickr-basic flatpickr-input unavailable_date active" placeholder="YYYY-MM-DD" readonly="readonly">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-1">
                                                <button class="btn btn-primary unavailable_input" id="add_unavailable" type="button" data-repeater-create="">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add More</span>

                                                </button>
                                            </div>
                                        </div>


                                    </div>
                                    </div>
                                    <div class="row">

                                        <div class="mb-1 col-md-3">
                                            <div class="d-flex flex-column">
                                                <label class="form-label" for="is_bookable">Is this Bookable?</label>
                                                <div class="form-check form-check-primary form-switch">
                                                    <input type="checkbox" name="is_bookable" class="form-check-input is_bookable" id="is_bookable" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-1 mt-2 col-md-5">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input bookable_input" type="radio" name="booking_type" id="Automatic" value="Automatic" checked>
                                                <label class="form-check-label" for="Automatic">Automatic Confirmation</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input bookable_input" type="radio" name="booking_type" id="Manual" value="Manual">
                                                <label class="form-check-label" for="Manual">Manual Booking</label>
                                            </div>


                                        </div>
                                        <div class="mb-1 col-md-4">
                                            <label class="form-label" for="iti-related">Related Trips (Max 4)</label>

                                            <input type="text" id="iti-related" name="related_trips" class="form-control" placeholder="DKYTMZ, KTMRWP, RNTMWP, RRQPER">
                                        </div>


                                    </div>

                                    <div class="divider divider-success">
                                            <div class="divider-text">Meta Information</div>
                                        </div>
                                    <!-- Meta Data start -->


                                    <div class="row">
                                        <div class="content-header">
                                            <h5 class="mb-0">Search Engine Optimization</h5>
                                            <small>Always add title, keywords and description tags for the best results.</small>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label" for="title">Meta Title</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="60" name="meta_title" class="form-control char-textarea" id="textarea-counter1" rows="1" placeholder="Meta Title" style="height: 25px"></textarea>
                                            @error('meta_title')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            </div>
                                            <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 60 </small>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="textarea">Meta Description</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="158" name="meta_description" class="form-control char-textarea" id="textarea-counter" rows="2" placeholder="Meta Description" style="height: 50px"></textarea>
                                            @error('meta_description')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            </div>
                                            <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 158 </small>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="textarea">Meta Keywords</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="250" name="meta_keyword" class="form-control char-textarea" id="textarea-counter2" rows="2" placeholder="Meta Keywords" style="height: 50px"></textarea>
                                            @error('meta_keyword')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            </div>
                                            <small class="textarea-counter-value float-end mb-1"><span class="char-count">0</span> / 250 </small>
                                        </div>
                                    </div>

                                    <!-- Meta data end -->

                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-primary social-links-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>

                </section>
                <!-- /Horizontal Wizard -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


@include('partials.files_modal')

@include('partials.gallery_files_modal')

@endsection

@push('styles')

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/quill/quill.bubble.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">


  <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-wizard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-quill-editor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">



@endpush


@push('scripts')

<script>


$('form[id="second_form"]').validate({
  rules: {
    tour_name: 'required',
    url_slug: 'required',
    reference: 'required',
    destination_id: 'required',
    activity_id: 'required',
    duration: 'required',
    min_participant: 'required',
    max_participant: 'required',
    accommodation: 'required',
    tour_overview: 'required',
    tour_thumbnail: 'required',
    tour_banner: 'required',
    free_cancellation: 'required',
  },
  messages: {
    tour_name: 'Tour Name is required',
    url_slug: 'Url Slug is required',
    reference: 'Reference is required',
    destination_id: 'Destination is required',
    activity_id: 'Activity is required',
    duration: 'Duration is required',
    min_participant: 'Max Participant is required',
    max_participant: 'Min Participant is required',
    accommodation: 'Accommodation is required',
    tour_overview: 'Tour Overview is required',
    tour_thumbnail: 'Tour Thumbnail is required',
    tour_banner: 'Tour Banner is required',
    free_cancellation: 'Select One Option',
  },
  submitHandler: function(form) {
    form.submit();
  }
});



var tiered_key = 1;

function tieredFunction(x){
if(tiered_key < 1){
    tiered_key = 1;
}
tiered_key++;
      var tiered = x.getAttribute('data-id');
      tiered++;
      $('.tiered_main').append(`
      <div class="row tiered_child">
        <div class="col-md-3">
            <label class="form-label" for="iti-tierminpax">Min Pax</label>

            <input type="number" min="1" id="iti-tierminpax" name="min_pax[]" class="form-control" value="`+tiered+`" readonly="readonly">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="">Max Pax</label>

            <input type="number" min="1" id="iti-flatmaxpax" name="max_pax[]" data-id="`+tiered_key+`" class="form-control max_pax" placeholder="10" value="">
        </div>
        <div class="col-md-5">
            <label class="form-label" for="">Tiered Price</label>
            <div class="input-group mb-1">
                <span class="input-group-text">USD</span>
                <input type="number" min="1" class="form-control tiered_price_`+tiered_key+`" onfocus="tieredFunction(this)" name="tiered_price[]" placeholder="992" aria-label="">
                <span class="input-group-text">per person</span>
            </div>
        </div>
        <div class="col-md-1 position-relative">
            <div style="position: absolute;right: 2px;top: 26px;">
                <button class="btn btn-outline-danger remove_tiered text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
        </div>
        </div>
      `);
      changeMaxTiered();
     RemoveTiered();
   }

   function RemoveTiered(){
       $('.remove_tiered').click(function(){
           $(this).parents('.tiered_child').remove();
           tiered_key--;
       })

   }

   changeMaxTiered();
  function changeMaxTiered(){
       $('.max_pax').keyup(function(){
        var id = $(this).data('id');
        $('.tiered_price_'+id).attr('data-id',$(this).val());

       });
  };




$(document).ready(function(){

   $('.account-details-next').click(function(){
        var tour_name = $('#tour_name').val();
        var tour_url = $('#tour_url').val();
        var destination_id = $('.destination_id').val();
        var activity_id = $('.activity_id').val();
        var min_participant = $('#min_participant').val();
        var max_participant = $('#max_participant').val();
        var accommodation = $('#accommodation').val();
        var duration = $('#duration').val();
        if(tour_name == '' || tour_url == '' || destination_id == '' || activity_id == '' ||
        min_participant == '' || max_participant == '' || accommodation == '' || duration == ''){
           $('form[id="second_form"]').submit();
        }else{
        $('#account-details-trigger').removeClass('active');
        $('#account-details-trigger-btn').prop('disabled',true);
        $('#personal-info-trigger').addClass('active');
        $('#personal-info-trigger-btn').prop('disabled',false);
        $('#account-details').removeClass('active');
        $('#account-details').removeClass('dstepper-block');
        $('#account-details').addClass('dstepper-none');
        $('#personal-info').addClass('active');
        $('#personal-info').addClass('dstepper-block');
        $('#personal-info').removeClass('dstepper-none');
        }

   });


   $('.personal-info-prev').click(function(){

        $('#account-details-trigger').addClass('active');
        $('#account-details-trigger-btn').prop('disabled',false);
        $('#personal-info-trigger').removeClass('active');
        $('#personal-info-trigger-btn').prop('disabled',true);
        $('#account-details').addClass('active');
        $('#account-details').addClass('dstepper-block');
        $('#account-details').removeClass('dstepper-none');
        $('#personal-info').removeClass('active');
        $('#personal-info').removeClass('dstepper-block');
        $('#personal-info').addClass('dstepper-none');

   });


   $('.personal-info-next').click(function(){

    var tour_overview = $('.tour_overview').val();
        var tour_thumbnail = $('#tour_thumbnail').val();
        var tour_banner = $('#tour_banner').val();
        var tour_cancellation = $('#tour_cancellation').val();
        if(tour_overview == '' || tour_thumbnail == '' || tour_banner == '' || tour_cancellation == ''){
           $('form[id="second_form"]').submit();
        }else{
        $('#personal-info-trigger').removeClass('active');
        $('#personal-info-trigger-btn').prop('disabled',true);

        $('#address-step-trigger').addClass('active');
        $('#address-step-trigger-btn').prop('disabled',false);

        $('#personal-info').removeClass('active');
        $('#personal-info').removeClass('dstepper-block');
        $('#personal-info').addClass('dstepper-none');

        $('#address-step').addClass('active');
        $('#address-step').addClass('dstepper-block');
        $('#address-step').removeClass('dstepper-none');

        }
   });


    $('.address-step-prev').click(function(){
        $('#personal-info-trigger').addClass('active');
        $('#personal-info-trigger-btn').prop('disabled',false);

        $('#address-step-trigger').removeClass('active');
        $('#address-step-trigger-btn').prop('disabled',true);

        $('#personal-info').addClass('active');
        $('#personal-info').addClass('dstepper-block');
        $('#personal-info').removeClass('dstepper-none');

        $('#address-step').removeClass('active');
        $('#address-step').removeClass('dstepper-block');
                $('#address-step').addClass('dstepper-none');
   });


   $('.address-step-next').click(function(){
        $('#address-step-trigger').removeClass('active');
        $('#address-step-trigger-btn').prop('disabled',true);

        $('#social-links-trigger').addClass('active');
        $('#social-links-trigger-btn').prop('disabled',false);

        $('#address-step').removeClass('active');
        $('#address-step').removeClass('dstepper-block');
        $('#address-step').addClass('dstepper-none');

        $('#social-links').addClass('active');
        $('#social-links').addClass('dstepper-block');
        $('#social-links').removeClass('dstepper-none');
   });


   $('.social-links-prev').click(function(){
        $('#address-step-trigger').addClass('active');
        $('#address-step-trigger-btn').prop('disabled',false);

        $('#social-links-trigger').removeClass('active');
        $('#social-links-trigger-btn').prop('disabled',true);

        $('#address-step').addClass('active');
        $('#address-step').addClass('dstepper-block');
        $('#address-step').removeClass('dstepper-none');

        $('#social-links').removeClass('active');
        $('#social-links').removeClass('dstepper-block');
        $('#social-links').addClass('dstepper-none');
   });

   mealFunction();
   function mealFunction(){
       $('.meals').change(function(){
        var breakfast = $("[name='itinerary_breakfast[]']:checked").length;
        var lunch = $("[name='itinerary_lunch[]']:checked").length;
        var dinner = $("[name='itinerary_dinner[]']:checked").length;
          $('#iti-meals').val(breakfast+'B, '+lunch+'L, '+dinner+'D');
       });
   }


   $('#add_tour_highlight').on('click',function(){
      $('.tour_highlight').append(
    `
    <div class="row d-flex align-items-end tour_highlight_child_row">
    <div class="col-md-10">
        <div class="mb-1">
            <input type="text" class="form-control" name="tour_highlights[]" id="iti-high1" aria-describedby="iti-high1" placeholder="The most famous treks in the world">
        </div>
    </div>

    <div class="col-md-2 mb-20">
        <div class="mb-1">
            <button class="btn remove_tour_highlight btn btn-outline-danger text-nowrap px-1 waves-effect" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                <span>Delete</span>
            </button>
        </div>
    </div>
</div>

    `
    );
    RemoveTourHighlights();
   });

   function RemoveTourHighlights(){
   $('.remove_tour_highlight').click(function(){
    $(this).parents('.tour_highlight_child_row').remove();
   });
   }






   var num_day = 1;
    $('#add_day_itinerary').on('click',function(){
        if(num_day <= 0){
            num_day = 1;
        }
      num_day++;
    $('.day_itinerary').append(`



    <div class="row d-flex align-items-end day_itinerary_child_row mt-2">
        <div class="col-md-6 mb-1">

            <label class="form-label" for="iti-day1">Day `+num_day+`</label>
            <input type="text" name="itinerary_day[]" class="form-control" id="iti-day1" aria-describedby="iti-day1"  placeholder="Ex. Arrival in Kathmandu, transfer to the hotel" />

        </div>

        <div class="col-md-2 mb-1">

            <label class="form-label" for="iti-distance1">Distance</label>
            <input type="text" class="form-control" id="iti-distance1" name="itinerary_distance[]" aria-describedby="iti-distance1" placeholder="6KM / 15 Miles" />

        </div>

        <div class="col-md-2 mb-1">

            <label class="form-label" for="iti-duration1">Duration</label>
            <input type="text" class="form-control" id="iti-duration1" name="itinerary_duration[]" aria-describedby="iti-duration1" placeholder="6 Hours Trek" />

        </div>

        <div class="col-md-2 mb-1">

            <label class="form-label" for="iti-altitude1">Altitude</label>
            <input type="text" class="form-control" id="iti-altitude1" name="itinerary_altitude[]" aria-describedby="iti-altitude1" placeholder="3210M / 9800FT" />

        </div>
        <div class="col-md-12 mb-1">
            <label class="form-label" for="iti-altitude1">Day Description</label>
            <div id="snow-wrapper">
                <div id="snow-container">
                     <textarea class="tinymceTextEditor" name="itinerary_description[]">

                </textarea>

                </textarea>

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-1">

            <label class="form-label" for="iti-accommodation1">Accommodation</label>
            <input type="text" class="form-control" id="iti-accommodation1" name="itinerary_accommodation[]" aria-describedby="iti-accommodation1" placeholder="Hotel Thamel Park" />

        </div>
        <div class="col-md-7 mb-1">

            <div class="row">
                <label class="form-label">Meals</label>
                <div class="col-md-4">

                    <div class="input-group">
                        <div class="input-group-text">
                            <div class="form-check">
                                <input class="form-check-input meals" name="itinerary_breakfast[]" value="1" type="checkbox" id="breakfast1">
                            </div>
                        </div>
                        <input type="text" class="form-control" value="Breakfast" readonly="readonly">
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="input-group">
                        <div class="input-group-text">
                            <div class="form-check">
                                <input class="form-check-input meals" name="itinerary_lunch[]" value="1" type="checkbox" id="lunch1">
                            </div>
                        </div>
                        <input type="text" class="form-control" value="Lunch" readonly="readonly">
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="input-group">
                        <div class="input-group-text">
                            <div class="form-check">
                                <input class="form-check-input meals" name="itinerary_dinner[]" value="1" type="checkbox" id="dinner1">
                            </div>
                        </div>
                        <input type="text" class="form-control" value="Dinner" readonly="readonly">
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-1">
    <div class="mb-1">
        <button class="btn btn-outline-danger remove_day_itinerary text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>

        </button>
    </div></div>
    </div>




    `);
    RemoveDayItinerary();
      textEditor();
         mealFunction();
   });

   function RemoveDayItinerary(){
   $('.remove_day_itinerary').click(function(){
    $(this).parents('.day_itinerary_child_row').remove();
    num_day--;
   });
   }




   var inc = 1;
    $('.add_includes').click(function(){
       inc++
        if(inc < 1){
        inc = 2;
    }
       $('.includes').append(`
         <div class="includes_child_row">
       <div class="row d-flex align-items-end">
        <div class="col-md-11 mb-1">
            <div class="input-group">
                <button type="button" class="input-group-text add_includes btn btn-outline-secondary border-success text-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </button>
                <input type="text" id="" class="form-control include include_`+inc+`" name="includes[]" placeholder=" Ex. Airport pickup and drop services on a private vehicle including before and after the trek"  data-id="`+inc+`"/>
           <span id="include_error_`+inc+`" class="text-danger" style="display:none">Include is Required!</span>
            </div>
        </div>
        <div class="col-md-1 mb-1">
            <button class="btn btn-outline-danger remove_includes text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>
    </div>
    <div class="row mb-1">
    <label for="iti-in-caption`+inc+`" class="col-md-1 col-form-label-sm"><span class="badge rounded-pill bg-success">Caption</span></label>
    <div class="col-md-11">
        <input type="text" class="form-control form-control-sm inc_caption inc_caption_`+inc+`" name="include_caption[]" id="iti-in-caption`+inc+`" placeholder="Ex. 2 transfers for international arrival and 2 transfers for domestic flights" data-id="`+inc+`">
       <span id="inc_caption_error_`+inc+`" class="text-danger" style="display:none">Caption is Required!</span>
    </div>
</div>
</div>
       `)

       RemoveIncludes();
       IncludeExcludeValidate();
   })


     function RemoveIncludes(){
   $('.remove_includes').click(function(){
    $(this).parents('.includes_child_row').remove();
   });
   }




    var exc = 1;
    $('.add_excludes').click(function(){
       exc++
        if(exc < 1){
        exc = 2;
    }
       $('.excludes').append(`
       <div class="excludes_child_row">
      <div class="row d-flex align-items-end">
            <div class="col-md-11 mb-1">
                <div class="input-group">
                    <button type="button" class="input-group-text add_excludes btn btn-outline-secondary border-danger text-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    </button>
                    <input type="text" id="" class="form-control exclude exclude_`+exc+`" name="excludes[]" placeholder=" Ex. International airfare, Nepal visa fees ( two passport photographs ), travel and medical insurance, emergency evacuation" data-id="`+exc+`" />
                    <span id="exclude_error_`+exc+`" class="text-danger" style="display:none">Exclude is Required!</span>
                </div>
            </div>
            <div class="col-md-1 mb-1">
                <button class="btn btn-outline-danger remove_excludes text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>

                </button>
            </div>
        </div>
        <div class="row mb-1">
            <label for="iti-ex-caption`+exc+`" class="col-md-1 col-form-label-sm"><span class="badge rounded-pill bg-danger">Caption</span></label>
            <div class="col-md-11">
                <input type="text" class="form-control form-control-sm exc_caption exc_caption_`+exc+`" name="exclude_caption[]" id="iti-ex-caption`+exc+`" placeholder="Ex. (Nepal via fees; 15 days - USD 30, 30 Days - USD 50, 90 Days - USD 125 | Visa extension - USD 3 per day, Late fine - USD 5 per day)" data-id="`+exc+`">
                <span id="exc_caption_error_`+exc+`" class="text-danger" style="display:none">Caption is Required!</span>
            </div>
        </div>
         </div>
       `)

       RemoveExcludes();
       IncludeExcludeValidate();
   })

     function RemoveExcludes(){
   $('.remove_excludes').click(function(){
    $(this).parents('.excludes_child_row').remove();
   });
   }


   IncludeExcludeValidate();
   function IncludeExcludeValidate(){
   $('.include,.inc_caption').keyup(function(){
       id = $(this).data('id');
       inc = $('.include_'+id).val();
       inc_caption = $('.inc_caption_'+id).val();

       if(inc != '' && inc_caption == ''){
          $('.personal-info-next').prop('disabled',true);
          $('#inc_caption_error_'+id).css('display','block');
      }else if(inc_caption != '' && inc == ''){
          $('.personal-info-next').prop('disabled',true);
        $('#include_error_'+id).css('display','block');
      }else{
           $('.personal-info-next').prop('disabled',false);
             $('#include_error_'+id).css('display','none');
             $('#inc_caption_error_'+id).css('display','none');
      }

   });


   $('.exclude,.exc_caption').keyup(function(){
       id = $(this).data('id');
       exclude = $('.exclude_'+id).val();
       exc_caption = $('.exc_caption_'+id).val();

       if(exclude != '' && exc_caption == ''){
          $('.personal-info-next').prop('disabled',true);
          $('#exc_caption_error_'+id).css('display','block');
      }else if(exc_caption != '' && exclude == ''){
          $('.personal-info-next').prop('disabled',true);
        $('#exclude_error_'+id).css('display','block');
      }else{
           $('.personal-info-next').prop('disabled',false);
            $('#exclude_error_'+id).css('display','none');
             $('#exc_caption_error_'+id).css('display','none');
      }

   });
   }

   $('#add_equipment').click(function(){
       $('.equipments').append(`
      <div class="row equipment_child_row">
       <div class="mb-1 col-md-3">
            <input type="text" id="equipment1[]" name="equipment1" class="form-control" placeholder="Eg. Waterproof trekking boots / Flip Flops" />
        </div>
        <div class="mb-1 col-md-3">
            <input type="text" name="equipment2[]" id="equipment2" class="form-control" placeholder="Eg. Socks / Undergarments" />
        </div>
        <div class="mb-1 col-md-3">
            <input type="text" name="equipment3[]" id="equipment3" class="form-control" placeholder="Eg. Shorts" />
        </div>
        <div class="mb-1 col-md-2">
            <input type="text" name="equipment4[]" id="equipment4" class="form-control" placeholder="Eg. Trekking pants" />
        </div>
        <div class="col-md-1 mb-20">
            <div class="mb-1">
                <button class="btn btn-outline-danger remove_equipment text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            </div>
        </div>
       </div>
       `);

       RemoveEquipment();
   });


   function RemoveEquipment(){
       $('.remove_equipment').click(function(){
           $(this).parents('.equipment_child_row').remove();
       })
   }



    var faq = 1;

   $('#add_faq').click(function(){
       faq++
        if(faq < 1){
        faq = 2;
    }
       $('.faqs').append(`
   <div class="row d-flex align-items-end faq_child_row">
        <div class="mb-0 col-md-12">
            <label class="form-label" for="faq_question_`+faq+`">FAQ #`+faq+` Question</label>
            <input type="text" id="faq_question_`+faq+`" name="faq_question[]" class="form-control faq_question" data-id="`+faq+`" placeholder="Q Ex. What is the best time to visit Nepal?" />
            <span id="question_error_`+faq+`" class="text-danger" style="display:none">Question is Required!</span>
        </div>
        <!-- Add Textarea with Quill here -->
        <div class="mb-1 mt-1 col-md-11">
            <textarea data-length="500" class="form-control faq_answer" name="faq_answer[]" id="faq_answer_`+faq+`" data-id="`+faq+`" rows="3" placeholder="Ex. The best time to visit Nepal is from March to May and from September to December. You can visit in other seasons as well but it isn't considered the best." style="height: 100px" spellcheck="true"></textarea>
            <span id="answer_error_`+faq+`" class="text-danger" style="display:none">Answer is Required!</span>
        </div>
        <div class="col-md-1 mb-20">
            <div class="mb-1">
                <button class="btn btn-outline-danger remove_faq text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            </div>
        </div>
    </div>
       `);

       RemoveFaq();
        faqValidate()
   });


   function RemoveFaq(){
       $('.remove_faq').click(function(){
           $(this).parents('.faq_child_row').remove();
           faq--;
       })
   }

   faqValidate();
   function faqValidate(){
   $('.faq_question,.faq_answer').keyup(function(){

      id = $(this).data('id');

      question = $('#faq_question_'+id).val();
      answer = $('#faq_answer_'+id).val();

      if(question != '' && answer == ''){
          $('.address-step-next').prop('disabled',true);
          $('#answer_error_'+id).css('display','block');
      }else if(answer != '' && question == ''){
          $('.address-step-next').prop('disabled',true);
        $('#question_error_'+id).css('display','block');
      }else{
           $('.address-step-next').prop('disabled',false);
            $('#answer_error_'+id).css('display','none');
             $('#question_error_'+id).css('display','none');
      }

   });
   }


   $('#add_addon').click(function(){
       $('.addons').append(`
      <div class="row d-flex align-items-end addon_child_row">
    <div class="col-md-4">
        <div class="mb-1">
            <label class="form-label" for="itemname">Addon Name</label>
            <input type="text" class="form-control" name="addon_name[]" id="itemname" aria-describedby="itemname" placeholder="Ex. Mountain Flight" >
        </div>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="">Price</label>
        <div class="input-group mb-1">
            <span class="input-group-text">USD</span>
            <input type="number" min="1" class="form-control" name="addon_price[]" placeholder="198" aria-label="">
            <span class="input-group-text">per item</span>
        </div>
    </div>

    <div class="col-md-2">
        <div class="mb-1">
            <label class="form-label" for="iti-accommodates">Accommodates</label>
            <div class="input-group">
                <input type="number" min="1" name="addon_accommodates[]" class="form-control" placeholder="1" aria-label="iti-accomodates" value="" aria-describedby="iti-accommodates">
                <span class="input-group-text" id="iti-accommodates">Pax</span>
            </div>
        </div>
    </div>



    <div class="col-md-2">
        <div class="mb-1">
            <button class="btn btn-outline-danger remove_addon text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>

            </button>
        </div>
    </div>
</div>
       `);
       RemoveAddon();
   });


   function RemoveAddon(){
       $('.remove_addon').click(function(){
           $(this).parents('.addon_child_row').remove();
       })
   }








   $('#add_discount').click(function(){
       $('.discounts').append(`
      <div class="row d-flex discount_child_row align-items-end">

                                        <div class="mb-1 col-md-3">

                                        </div>

                                        <div class="mb-1 col-md-2">
                                            <label class="form-label" for="linkedin">Discount From</label>
                                            <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input active" name="discount_from[]" placeholder="YYYY-MM-DD" readonly="readonly">
                                        </div>
                                        <div class="mb-1 col-md-2">
                                            <label class="form-label" for="linkedin">Discount Until</label>
                                            <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input" name="discount_until[]" placeholder="YYYY-MM-DD" readonly="readonly">
                                        </div>
                                        <div class="mb-1 col-md-2">
                                            <label class="form-label" for="linkedin">Discounts</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="10" aria-label="Elevation" name="discounts[]" aria-describedby="it-elevation">
                                                <span class="input-group-text" id="it-elevation">%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-1">

                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="mb-1">
                                                <button class="btn btn-outline-danger remove_discount text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
       `);

       RemoveDiscount();
        $('#social-links').find(".flatpickr-basic").flatpickr({});
   });


   function RemoveDiscount(){
       $('.remove_discount').click(function(){
           $(this).parents('.discount_child_row').remove();
       })
   }





   $('#add_unavailable').click(function(){
       $('.unavailables').append(`
     <div class="row unavailable_child_row d-flex align-items-end">

        <div class="mb-1 col-md-3">

        </div>

        <div class="mb-1 col-md-3">
            <label class="form-label" for="linkedin">Unavailable From</label>
            <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input active" name="unavailable_from[]" placeholder="YYYY-MM-DD" readonly="readonly">
        </div>
        <div class="mb-1 col-md-3">
            <label class="form-label" for="linkedin">Unavailable Until</label>
            <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input active" name="unavailable_until[]" placeholder="YYYY-MM-DD" readonly="readonly">
        </div>
        <div class="col-md-2">
            <div class="mb-1">

            </div>
        </div>
        <div class="col-md-1">
            <div class="mb-1">
                <button class="btn btn-outline-danger remove_unavailable text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>

                </button>
            </div>
        </div>

    </div>
       `);
        $('#social-links').find(".flatpickr-basic").flatpickr({});
       RemoveUnavailable();
   });


   function RemoveUnavailable(){
       $('.remove_unavailable').click(function(){
           $(this).parents('.unavailable_child_row').remove();
       })
   }



   $('.pricing_type').change(function(){
      if($(this).val() == 'Flat Rate'){
          $('.tiered_section').css('display','none');
          $('.flat_section').css('display','block');
      }else{
          $('.tiered_section').css('display','block');
          $('.flat_section').css('display','none');
      }
   });


//    $('.active_discount').change(function(){
//       if($(this).is(':checked')){
//         $('.discounts_input').prop('disabled',false);
//         $('.discounts_date').prop('disabled',false);
//         $('.discounts_date').prop('readonly',true);
//       }else{
//           $('.discounts_input').prop('disabled',true);
//           $('.discounts_date').prop('readonly',false);
//         $('.discounts_date').prop('disabled',true);
//       }
//    });



//    $('.unavailable_dates').change(function(){
//       if($(this).is(':checked')){
//         $('.unavailable_date').prop('disabled',false);
//         $('.unavailable_date').prop('readonly',true);
//          $('.unavailable_input').prop('disabled',false);
//       }else{
//           $('.unavailable_date').prop('readonly',false);
//         $('.unavailable_date').prop('disabled',true);
//           $('.unavailable_input').prop('disabled',true);
//       }
//    });


//    $('.is_bookable').change(function(){
//       if($(this).is(':checked')){
//          $('.bookable_input').prop('disabled',false);
//       }else{
//           $('.bookable_input').prop('disabled',true);
//       }
//    });




   function numberGenerator() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

  for (var i = 0; i < 6; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}

$('#reference').val(numberGenerator());

});


$('#tour_name').keyup(function(){
      var textParent = $('#tour_name').val();
  var text =  textParent.toLowerCase()
             .replace(/ /g, '-')
             .replace(/[^\w-]+/g, '');

   $('#tour_url').val(text);
})


function resetThumbnailImage() {
	let thumbnail_image = document.getElementById('tour_thumbnail_image_output');
    $('input[name="tour_thumbnail_image"]').val('');
	thumbnail_image.src = "{{asset('app-assets/images/slider/10.jpg')}}";
};

function resetBannerImage() {
	let tour_banner_image = document.getElementById('tour_banner_image_output');
    $('input[name="tour_banner_image"]').val('');
	tour_banner_image.src = "{{asset('app-assets/images/slider/10.jpg')}}";
};


function resetMapImage() {
	let tour_map_image = document.getElementById('tour_map_image_output');
    $('input[name="tour_map_image"]').val('');
	tour_map_image.src = "{{asset('app-assets/images/slider/10.jpg')}}";
};

function resetGalleryImage() {
	let tour_gallery_image = document.getElementById('tour_gallery_image_output');
    $('input[name="tour_gallery[]"]').val('');
	tour_gallery_image.src = "{{asset('app-assets/images/slider/10.jpg')}}";
};

function resetBrochureImage() {
	let tour_brochure_image = document.getElementById('tour_brochure_image_output');
    $('input[name="tour_brochure_image"]').val('');
	tour_brochure_image.src = "{{asset('app-assets/images/slider/10.jpg')}}";
};

function resetListImage() {
	let thumbnail_image = document.getElementById('thumbnail_image_output');
    $('input[name="thumbnail_image"]').val('');
	thumbnail_image.src = "{{asset('app-assets/images/slider/10.jpg')}}";
};

</script>



@endpush





