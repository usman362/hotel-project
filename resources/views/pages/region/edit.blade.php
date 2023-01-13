@section('title','Edit Region')

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
                                <h4 class="card-title">Edit Region</h4>
                            </div>

                            <form action="{{route('region.update',$region->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf

                            <div class="card-body py-2 my-25">
                                 <!-- header section -->
                                 <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex">

                                           <a href="#" class="me-25">
                                                <img src="{{asset($region->icon_image->file_name) ?? asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="icon_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                            </a>

                                            <!-- upload and reset button -->
                                            <div class="d-flex align-items-end mt-75 ms-1">
                                                <div>
                                                    <div class="alert alert-primary" role="alert">
                                                        <div class="alert-body"><strong>Icon</strong><code>(Only svg)</code></div>
                                                    </div>
                                                    <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="icon" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                    <input type="hidden" name="icon" value="{{$region->icon}}">
                                                    <button type="button" id="account-reset" onclick="resetIconImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                </div>
                                            </div>

                                            <!--/ upload and reset button -->
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="d-flex">

                                            <a href="#" class="me-25">
                                                <img src="{{asset($region->thumbnail->file_name) ?? asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="thumbnail_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                            </a>


                                            <!-- upload and reset button -->
                                            <div class="d-flex align-items-end mt-75 ms-1">
                                                <div>
                                                    <div class="alert alert-primary" role="alert">
                                                        <div class="alert-body"><strong>Thumbnail</strong><code>(Only jpg, jpeg, png)</code></div>
                                                    </div>
                                                    <label class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light uploadModal" data-bs-toggle="modal" data-name="thumbnail" data-bs-target="#new-upload-modal">Upload</label>
                                                    <input type="hidden" name="thumbnail_image" value="{{$region->thumbnail_image}}">
                                                    <button type="button" id="account-reset" onclick="resetThumbnailImage()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                </div>
                                            </div>

                                            <!--/ upload and reset button -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex">

                                            <a href="#" class="me-25">
                                                <img src="{{asset($region->banner->file_name) ?? asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="banner_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                            </a>


                                            <!-- upload and reset button -->
                                            <div class="d-flex align-items-end mt-75 ms-1">
                                                <div>
                                                    <div class="alert alert-primary" role="alert">
                                                        <div class="alert-body"><strong>Banner</strong><code>(Only jpg, jpeg, png)</code></div>
                                                    </div>
                                                    <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="banner" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                    <input type="hidden" name="banner_image" value="{{$region->banner_image}}">
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
                                        <div class="col-12 col-md-3 mb-1">
                                            <label class="form-label" for="select2-hide-search">Destination</label>
                                            <select class=" form-select" name="destination_id" id="select2-hide-search">
                                                    <option value="" selected>--------</option>
                                                   @foreach ($destinations as $key => $destination)
                                                       <option value="{{$destination->id}}" @selected($destination->id == $region->destination_id)>{{$destination->title}}</option>
                                                   @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 col-md-3 mb-1">
                                            <label class="form-label" for="">Region Name</label>
                                            <input type="text" class="form-control" id="name" value="{{$region->title}}" name="title" placeholder="Everest Region" data-msg="Please enter region name">
                                        </div>
                                        <div class="col-12 col-md-3 mb-1">
                                            <label class="form-label" for="accountLastName">URL Slug</label>
                                            <input type="text" class="form-control" id="url" name="url_slug" value="{{$region->url_slug}}" placeholder="/everest-region" value="" data-msg="Please enter URL">
                                        </div>



                                        <div class="col-12 col-md-10 mb-1">

                                            <label class="form-label" for="">Banner Text</label>
                                            <input type="text" class="form-control" id="" name="banner_text" value="{{$region->banner_text}}" placeholder="If you think adventure is dangerous, try routine, it’s lethal. – Paulo Coelho" value="" data-msg="Please enter text">
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div id="full-wrapper">
                                                <label class="form-label" for="iti-daily-activity">Description</label>
                                                <div id="full-container">
                                                    <textarea class="tinymceTextEditor" name="description">
                                                        {{ $region->description }}
                                                                            </textarea>
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
                                                    <textarea data-length="60" name="meta_title" class="form-control char-textarea" id="textarea-counter1" rows="1" placeholder="Meta Title" style="height: 25px">{{$region->meta_title}}</textarea>
                                                </div>
                                                <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 60 </small>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="textarea">Meta Description</label>
                                                <div class="form-floating mb-0">
                                                    <textarea data-length="158" name="meta_desc" class="form-control char-textarea" id="textarea-counter" rows="2" placeholder="Meta Description" style="height: 50px">{{$region->meta_desc}}</textarea>
                                                </div>
                                                <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 158 </small>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="textarea">Meta Keywords</label>
                                                <div class="form-floating mb-0">
                                                    <textarea data-length="250" name="meta_keywords" class="form-control char-textarea" id="textarea-counter2" rows="2" placeholder="Meta Keywords" style="height: 50px">{{$region->meta_keywords}}</textarea>
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

@include('partials.files_modal')
@push('scripts')


<script>


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


