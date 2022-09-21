@section('title','Edit Destination')

@extends('layouts.app')

@section('content')


 <!-- BEGIN: Content-->

 <div class="app-content content">

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
                                <h4 class="card-title">Edit Destination</h4>
                            </div>

                           <form action="{{route('destination.update',$destination->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                            <div class="card-body py-2 my-25">
                                <!-- header section -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex">

                                            <a href="#" class="me-25">
                                                <img src="{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="thumbnail_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                            </a>


                                            <!-- upload and reset button -->
                                            <div class="d-flex align-items-end mt-75 ms-1">
                                                <div>
                                                    <div class="alert alert-primary" role="alert">
                                                        <div class="alert-body"><strong>Thumbnail</strong><code>(Only jpg, jpeg, png)</code></div>
                                                    </div>
                                                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">Upload</label>
                                                    <input type="file" name="thumbnail_image" id="account-upload" onchange="loadThumbnailImage(event)" hidden="" accept="image/*">
                                                    <button type="button" id="account-reset" onclick="resetThumbnailImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                </div>
                                            </div>

                                            <!--/ upload and reset button -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex">

                                            <a href="#" class="me-25">
                                                <img src="{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="banner_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                            </a>


                                            <!-- upload and reset button -->
                                            <div class="d-flex align-items-end mt-75 ms-1">
                                                <div>
                                                    <div class="alert alert-primary" role="alert">
                                                        <div class="alert-body"><strong>Banner</strong><code>(Only jpg, jpeg, png)</code></div>
                                                    </div>
                                                    <label for="account-upload-2" class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">Upload</label>
                                                    <input type="file" id="account-upload-2" name="banner_image" onchange="loadBannerImage(event)" hidden="" accept="image/*">
                                                    <button type="button" id="account-reset" onclick="resetBannerImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
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
                                        <div class="col-12 col-sm-3 mb-1">
                                            <label class="form-label" for="">Destination Name</label>
                                            <input type="text" class="form-control" id="name" name="title" placeholder="Nepal" value="{{$destination->title}}" data-msg="Please enter destination name">
                                        </div>
                                        <div class="col-12 col-sm-3 mb-1">
                                            <label class="form-label" for="accountLastName">URL Slug</label>
                                            <input type="text" class="form-control" id="url" name="url_slug" placeholder="/nepal" value="{{$destination->url_slug}}" data-msg="Please enter URL">
                                        </div>
                                        <div class="col-12 col-sm-3 mb-1">
                                            <label class="form-label" for="latitude">Latitude</label>
                                            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="27.717245" value="{{$destination->latitude}}" data-msg="Please enter latitude">
                                        </div>
                                        <div class="col-12 col-sm-3 mb-1">
                                            <label class="form-label" for="longitude">Longitude</label>
                                            <input type="text" class="form-control" id="" name="longitude" placeholder="85.323959" value="{{$destination->longitude}}" data-msg="Please enter longitude">
                                        </div>


                                        <div class="col-12 mb-1">

                                            <label class="form-label" for="">Banner Text</label>
                                            <input type="text" class="form-control" id="" name="banner_text" placeholder="I may have been born in another place, but I feel I am from Nepal. The Magic of Nepal has to be felt. ― Avijeet Das" value="{{$destination->banner_text}}" data-msg="Please enter text">
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div id="full-wrapper">
                                                <label class="form-label" for="iti-daily-activity">Introduction</label>
                                                <div id="full-container">
                                                    <textarea class="tinymceTextEditor" name="introduction">
                                                        {{$destination->introduction}}
                                                                            </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Additional tabs-->
                                        <div class="row weather_info">
                                        <div class="col-md-3 mb-1">

                                            <label class="form-label" for="">Title</label>
                                            <input type="text" class="form-control" id="" name="weather_title[]" placeholder="Weather Information" value="" data-msg="Please enter text">
                                        </div>
                                        <div class="col-md-8 mb-1">
                                            <div id="full-wrapper">
                                                <label class="form-label" for="iti-daily-activity">Description</label>
                                                <div id="full-container">
                                                    <textarea class="tinymceTextEditor" name="weather_description[]"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <button id="add_weather_info" class="btn btn-icon btn-primary" type="button">
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add More</span>
                                            </button>
                                        </div>
                                        <div class="col-md-12 mb-1">

                                            <label class="form-label" for="">Weather Widget</label>
                                            <input type="text" class="form-control" id="" name="widget_code" placeholder="Enter widget code here" value="{{$destination->widget_code}}" data-msg="Please enter widget code">
                                        </div>
                                        <div class="divider divider-success">
                                            <div class="divider-text">Meta Information</div>
                                        </div>
                                        <div class="row">
                                            <div class="content-header">
                                            <h5 class="mb-0">Search Engine Optimization</h5>
                                        </div>

                                            <div class="col-6">
                                                <label class="form-label" for="title">Meta Title</label>
                                                <div class="form-floating mb-0">
                                                    <textarea data-length="60" class="form-control char-textarea" name="meta_title" id="textarea-counter1" rows="1" placeholder="Meta Title" style="height: 25px">{{$destination->meta_title}}</textarea>
                                                </div>
                                                <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 60 </small>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="textarea">Meta Description</label>
                                                <div class="form-floating mb-0">
                                                    <textarea data-length="158" class="form-control char-textarea" name="meta_desc" id="textarea-counter" rows="2" placeholder="Meta Description" style="height: 50px">{{$destination->meta_desc}}</textarea>
                                                </div>
                                                <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 158 </small>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="textarea">Meta Keywords</label>
                                                <div class="form-floating mb-0">
                                                    <textarea data-length="250" class="form-control char-textarea" name="meta_keywords" id="textarea-counter2" rows="2" placeholder="Meta Keywords" style="height: 50px">{{$destination->meta_keywords}}</textarea>
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

                            </form>
                        </div>

                        <!-- deactivate account  -->

                        <!--/ profile -->
                    </div>
                </div>

            </div>
        </div>
    </div>



@push('scripts')


<script>


$('#add_weather_info').click(function(){

   $('.weather_info').append(`
   <div class="row weather_info_child">
       <div class="col-md-3 mb-1">
        <label class="form-label" for="">Title</label>
        <input type="text" class="form-control" id="" name="weather_title[]" placeholder="Weather Information" value="" data-msg="Please enter text">
    </div>
    <div class="col-md-8 mb-1">
        <div id="full-wrapper">
            <label class="form-label" for="iti-daily-activity">Description</label>
            <div id="full-container">
                <textarea class="tinymceTextEditor" name="weather_description[]"></textarea>
            </div>
        </div>
    </div>

    <div class="col-md-1 position-relative">
            <div style="position: absolute;right: 2px;top: 26px;">
                <button class="btn btn-outline-danger remove_weather_info text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
        </div>

    </div>
       `);
     RemoveTiered();
   textEditor();
});

function RemoveTiered(){
       $('.remove_weather_info').click(function(){
           $(this).parents('.weather_info_child').remove();
       })
   }


    $('#name').keyup(function(){
      var textParent = $('#name').val();
  var text =  textParent.toLowerCase()
             .replace(/ /g, '-')
             .replace(/[^\w-]+/g, '');

   $('#url').val(text);
})


function loadThumbnailImage(event) {
	var thumbnail_image = document.getElementById('thumbnail_image_output');
	thumbnail_image.src = URL.createObjectURL(event.target.files[0]);
};


function loadBannerImage(event) {
	var banner_image = document.getElementById('banner_image_output');
	banner_image.src = URL.createObjectURL(event.target.files[0]);
};

function resetThumbnailImage() {
	var thumbnail_image = document.getElementById('thumbnail_image_output');
	thumbnail_image.src = "{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}";
};


function resetBannerImage() {
	var thumbnail_image = document.getElementById('banner_image_output');
	thumbnail_image.src = "{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}";
};

</script>

@endpush



@endsection

