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

        <div class="content-body">
            <div class="row">
                <div class="col-12">


                    <!-- profile -->
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Add New Review</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <!-- header section -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex">

                                        <a href="#" class="me-25">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                        </a>


                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <div class="alert alert-primary" role="alert">
                                                    <div class="alert-body"><strong>Avatar</strong><code>(Only jpg or jpeg)</code></div>
                                                </div>
                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">Upload</label>
                                                <input type="file" id="account-upload" hidden="" accept="image/*">
                                                <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                            </div>
                                        </div>

                                        <!--/ upload and reset button -->
                                    </div>
                                </div>


                            </div>
                            <!--/ header section -->

                            <!-- form -->
                            <form class="validate-form mt-2 pt-50" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="">Destination</label>
                                        <select class="form-select" id="basicSelect">
                                            <option selected>------</option>
                                            <option>Nepal</option>
                                            <option>Tibet</option>
                                        </select>                                        </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Activity</label>
                                        <select class="form-select" id="">
                                            <option selected>------</option>
                                            <option>Trekking</option>
                                            <option>Climbing</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Region</label>
                                        <select class="form-select" id="basicSelect">
                                            <option selected>------</option>
                                            <option>Everest Region</option>
                                            <option>Annapurna Region</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4 mb-1">
                                        <label class="form-label" for="accountLastName">Product Name</label>
                                        <select class="form-select" id="basicSelect">
                                            <option selected>------</option>
                                            <option>Kanchenjunga Circuit Trekking</option>
                                            <option>Nepal Tour 8 Night 9 Days</option>
                                        </select>
                                    </div>


                                    <div class="col-12 col-md-6 mb-1">

                                        <label class="form-label" for="">Review Title</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Best Trekking Company in Nepal" value="" data-msg="Please enter text">
                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Review Date</label>
                                        <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />

                                    </div>
                                    <div class="col-12 col-md-3 mb-1">

                                        <label class="form-label" for="">Rating</label>
                                        <div class="methods-ratings" data-rateyo-full-star="true"></div>



                                    </div>
                                    <div class="col-12 mb-1">
                                        <div id="full-wrapper">
                                            <label class="form-label" for="iti-daily-activity">Review Content</label>
                                            <div id="full-container">
                                                <div class="editor">
                                                    <!-- full Editor Container -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Additional tabs-->



                                    <div class="divider divider-success">
                                        <div class="divider-text">Meta Information</div>
                                    </div>
                                    <div class="row">
                                        <div class="content-header">
                                        <h5 class="mb-0">Search Engine Optimization</h5>
                                    </div>

                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="title">Meta Title</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="60" class="form-control char-textarea" id="textarea-counter1" rows="1" placeholder="Meta Title" style="height: 25px"></textarea>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 60 </small>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="textarea">Meta Description</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="158" class="form-control char-textarea" id="textarea-counter" rows="2" placeholder="Meta Description" style="height: 50px"></textarea>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 158 </small>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="textarea">Meta Keywords</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="250" class="form-control char-textarea" id="textarea-counter2" rows="2" placeholder="Meta Keywords" style="height: 50px"></textarea>
                                            </div>
                                            <small class="textarea-counter-value float-end mb-1"><span class="char-count">0</span> / 250 </small>
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Save changes</button>

                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                    </div>

                    <!-- deactivate account  -->

                    <!--/ profile -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
