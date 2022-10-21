@section('title','Add Review')

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
                            <h4 class="card-title">Edit Review</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <form class="validate-form mt-2 pt-50" action="{{route('review.update',$review->id)}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                         @csrf
                                <!-- header section -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex">

                                        <a href="#" class="me-25">
                                            <img src="{{asset($review->avatar->file_name ?? '')}}" id="avatar_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                        </a>


                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <div class="alert alert-primary" role="alert">
                                                    <div class="alert-body"><strong>Avatar</strong><code>(Only jpg or jpeg)</code></div>
                                                </div>
                                                <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="avatar" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                <input type="hidden" id="account-upload" name="avatar">
                                                <button type="button" id="account-reset" onclick="resetImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                            </div>
                                        </div>

                                        <!--/ upload and reset button -->
                                    </div>
                                </div>


                            </div>
                            <!--/ header section -->

                            <!-- form -->

                                <div class="row">
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="">Destination</label>
                                        <select class="form-select" name="destination_id" id="basicSelect">
                                            <option selected>------</option>
                                            @foreach ($destinations as $destination)

                                            <option value="{{$destination->id}}" @selected(old('destination_id',$review->destination_id) == $destination->id)>{{$destination->title}}</option>

                                            @endforeach
                                        </select>                                        </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Activity</label>
                                        <select class="form-select" name="activity_id" id="">
                                            <option selected>------</option>
                                            @foreach ($activities as $activity)
                                            <option value="{{$activity->id}}" @selected(old('activity_id',$review->activity_id) == $activity->id)>{{$activity->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Region</label>
                                        <select class="form-select" name="region_id" id="basicSelect">
                                            <option selected>------</option>
                                          @foreach ($regions as $region)

                                            <option value="{{$region->id}}" @selected(old('region_id',$review->region_id) == $region->id)>{{$region->title}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4 mb-1">
                                        <label class="form-label" for="accountLastName">Product Name</label>
                                        <select class="form-select" name="trip" id="basicSelect">
                                            <option selected>------</option>
                                            @foreach ($programs as $program)
                                            <option {{$program->id}} @selected($program->id == $review->trip)>{{$program->tour_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-12 col-md-6 mb-1">

                                        <label class="form-label" for="">Review Title</label>
                                        <input type="text" class="form-control" id="" name="title" placeholder="Best Trekking Company in Nepal" value="{{old('title',$review->title)}}" data-msg="Please enter text">
                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Review Date</label>
                                        <input type="text" id="fp-default" name="date" value="{{old('date',$review->date)}}" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />

                                    </div>
                                    <div class="col-12 col-md-3 mb-1">

                                        <label class="form-label" for="">Rating</label>


                                        <div class="star-rating">
                                            <input type="radio" id="5-stars" name="rating" value="5" @checked(old('rating',$review->rating) == 5)/>
                                            <label for="5-stars" class="star">&#9733;</label>
                                            <input type="radio" id="4-stars" name="rating" value="4" @checked(old('rating',$review->rating) == 4)/>
                                            <label for="4-stars" class="star">&#9733;</label>
                                            <input type="radio" id="3-stars" name="rating" value="3" @checked(old('rating',$review->rating) == 3)/>
                                            <label for="3-stars" class="star">&#9733;</label>
                                            <input type="radio" id="2-stars" name="rating" value="2" @checked(old('rating',$review->rating) == 2)/>
                                            <label for="2-stars" class="star">&#9733;</label>
                                            <input type="radio" id="1-star" name="rating" value="1" @checked(old('rating',$review->rating) == 1)/>
                                            <label for="1-star" class="star">&#9733;</label>
                                          </div>


                                    </div>
                                    <div class="col-12 mb-1">
                                        <div id="full-wrapper">
                                            <label class="form-label" for="iti-daily-activity">Review Content</label>
                                            <div id="full-container">
                                                <textarea class="tinymceTextEditor content" name="content">
                                                    {{old('content',$review->content)}}
                                              </textarea>
                                               @error('content')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
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
                                                <textarea data-length="60" class="form-control char-textarea" id="textarea-counter1" rows="1" name="meta_title" placeholder="Meta Title" style="height: 25px">{{old('meta_title',$review->meta_title)}}</textarea>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 60 </small>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="textarea">Meta Description</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="158" class="form-control char-textarea" id="textarea-counter" name="meta_description" rows="2" placeholder="Meta Description" style="height: 50px">{{old('meta_description',$review->meta_description)}}</textarea>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 158 </small>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="textarea">Meta Keywords</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="250" class="form-control char-textarea" id="textarea-counter2" rows="2" name="meta_keywords" placeholder="Meta Keywords" style="height: 50px">{{old('meta_keywords',$review->meta_keywords)}}</textarea>
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
