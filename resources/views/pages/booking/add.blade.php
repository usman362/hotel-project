@section('title','Add Booking')

@extends('layouts.app')

@section('content')

@push('styles')

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/jquery.rateyo.min.css')}}">

@endpush

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
                            <h4 class="card-title">Add New Booking</h4>
                        </div>
                        <div class="card-body">
                            <!-- header section -->

                            <!--/ header section -->

                            <!-- form -->
                            <form class="validate-form mt-2 pt-50" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12 col-sm-4 mb-1">
                                        <label class="form-label" for="">Tour Name</label>
                                        <select class="form-select" id="basicSelect" name="tour_id">
                                            <option selected>---------</option>
                                            <option>Everest Base Camp Trek</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Custom Tour Name</label>
                                        <input type="text" class="form-control" id="" name="custom_tour_name" placeholder="Custom Tour Name" value="" data-msg="Please enter text">
                                    </div>

                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Start Date</label>
                                        <input type="text" id="fp-default" name="start_date" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />

                                    </div>
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="status">Status</label>
                                        <select class="form-select" name="status" id="basicSelect">
                                            <option selected>---------</option>
                                            <option value="Confirmed">Confirmed</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Postponed">Postponed</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>

                                    </div>
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="accountLastName">Booking Reference</label>
                                        <input type="text" class="form-control" id="" name="reference" placeholder="" value="XTRWMP" data-msg="Please enter text" disabled>
                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Booking Date</label>
                                        <input type="text" id="fp-default" name="booking_date" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />

                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Lead Customer Name</label>
                                        <input type="text" class="form-control" id="" name="lead_customer_name" placeholder="John Smith" value="" data-msg="Please enter text">
                                    </div>
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="accountLastName">Phone No</label>
                                        <input type="text" class="form-control" id="" name="phone" placeholder="+977 98510 94144" value="" data-msg="Please enter text">
                                    </div>
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="status">Number of People</label>
                                        <select class="form-select" name="no_of_people" id="basicSelect">
                                            <option selected>---------</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>

                                        </select>

                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Email</label>
                                        <input type="text" class="form-control" id="" name="email" placeholder="mynameis@gmail.com" value="" data-msg="Please enter text">
                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="status">Country Name</label>
                                        <select class="form-select" name="country" id="basicSelect">
                                            <option selected>---------</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="India">India</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Germany">Germany</option>


                                        </select>

                                    </div>
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="accountLastName">Duration</label>
                                        <input type="text" class="form-control" id="" name="duration" placeholder="12 Days" value="" data-msg="Please enter text">
                                    </div>
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="accountLastName">Price Per Person</label>
                                        <input type="text" class="form-control" id="" name="price_per_person" placeholder="USD 1312" value="" data-msg="Please enter text">
                                    </div>
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="accountLastName">Deposit</label>
                                        <input type="text" class="form-control" id="" name="deposit" placeholder="USD 1312" value="" data-msg="Please enter text">
                                    </div>




                                    <div class="col-12 mb-1">
                                        <div id="full-wrapper">
                                            <label class="form-label" for="iti-daily-activity">Itinerary</label>
                                             <div id="full-container">
                                                <textarea class="tinymceTextEditor content" name="itinerary">
                                                    {{old('itinerary')}}
                                              </textarea>
                                               @error('itinerary')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <div id="full-wrapper">
                                            <label class="form-label" for="iti-daily-activity">Cost Includes</label>
                                            <div id="full-container">
                                                <textarea class="tinymceTextEditor content" name="cost_includes">
                                                    {{old('cost_includes')}}
                                              </textarea>
                                               @error('cost_includes')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <div id="full-wrapper">
                                            <label class="form-label" for="iti-daily-activity">Cost Excludes</label>
                                            <div id="full-container">
                                                <textarea class="tinymceTextEditor content" name="cost_excludes">
                                                    {{old('cost_excludes')}}
                                              </textarea>
                                               @error('cost_excludes')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <div id="full-wrapper">
                                            <label class="form-label" for="iti-daily-activity">Admin Notes</label>
                                            <div id="full-container">
                                                <textarea class="tinymceTextEditor content" name="admin_notes">
                                                    {{old('admin_notes')}}
                                              </textarea>
                                               @error('admin_notes')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                          </div>
                                        </div>
                                    </div>
                                    <!-- Additional tabs-->






                                    </div>



                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Save changes</button>
                                        <button type="submit" class="btn btn-danger mt-1 me-1 waves-effect waves-float waves-light">Cancel</button>

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

<!-- END: Content-->
@include('partials.files_modal')
@endsection

@push('scripts')
<script src="{{asset('app-assets/vendors/js/extensions/jquery.rateyo.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/ext-component-ratings.js')}}"></script>



<script>
    function loadImage(event) {
	var avatar_image = document.getElementById('avatar_image_output');
	avatar_image.src = URL.createObjectURL(event.target.files[0]);
};

function resetImage() {
	var avatar_image = document.getElementById('avatar_image_output');
	avatar_image.src = "{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}";
};

</script>
@endpush
