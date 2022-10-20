@section('title','Add Team')

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
                            <h4 class="card-title">Edit Team Member</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <!-- header section -->
                            <form class="validate-form mt-2 pt-50" action="{{route('team.update',$team->id)}}" enctype="multipart/form-data" method="POST" novalidate="novalidate">
                                @csrf
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="d-flex">


                                        <a href="#" class="me-25">
                                            <img src="{{asset($team->avatar->file_name)}}" id="avatar_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                        </a>


                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <div class="alert alert-primary" role="alert">
                                                    <div class="alert-body"><strong>Avatar</strong><code>(Only jpg or jpeg)</code></div>
                                                </div>
                                                <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="avatar" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                <input type="hidden" name="avatar" value="{{$team->avatar_image}}">
                                                <button type="button" id="account-reset" onclick="resetAvatar()" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                            </div>
                                        </div>

                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column">
                                        <label class="form-check-label mb-50" for="customSwitch3">Featured Member?</label>
                                        <div class="form-check form-check-primary form-switch">
                                            <input type="checkbox" @checked(old('is_featured',true)) name="is_featured" class="form-check-input" id="customSwitch3">
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <!--/ header section -->

                            <!-- form -->

                                <div class="row">
                                    <div class="col-12 col-sm-4 mb-1">
                                        <label class="form-label" for="">Full Name</label>
                                        <input type="text" class="form-control" id="" name="name" placeholder="Upendra Duwadi" value="{{old('name',$team->name)}}" data-msg="Please enter text">
                                    </div>
                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Designation</label>
                                        <input type="text" class="form-control" id="" name="designation" placeholder="Director" value="{{old('designation',$team->designation)}}" data-msg="Please enter text">
                                    </div>

                                    <div class="col-12 col-sm-3 mb-1">
                                        <label class="form-label" for="accountLastName">Joined on</label>
                                        <input type="text" id="fp-default" class="form-control flatpickr-basic" name="joined_on" value="{{old('joined_on',$team->joined_on)}}" placeholder="YYYY-MM-DD" />

                                    </div>
                                    <div class="col-12 col-sm-2 mb-1">
                                        <label class="form-label" for="status">Status</label>
                                        <select class="form-select" name="status" id="basicSelect">
                                            <option selected>---------</option>
                                            <option value="Enabled" @selected(old('status',$team->status) == 'Enabled')>Enabled</option>
                                            <option value="Disabled" @selected(old('status',$team->status) == 'Disabled')>Disabled</option>
                                        </select>

                                    </div>



                                    <div class="col-12 mb-1">
                                        <div id="full-wrapper">
                                            <label class="form-label" for="iti-daily-activity">Review Content</label>
                                            <div id="full-container">
                                                <textarea class="tinymceTextEditor description" name="description">
                                                    {{old('description',$team->description)}}
                                              </textarea>
                                               @error('description')
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
                                                <textarea data-length="60" class="form-control char-textarea" name="meta_title" id="textarea-counter1" rows="1" placeholder="Meta Title" style="height: 25px"> {{old('meta_title',$team->meta_title)}}</textarea>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 60 </small>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="textarea">Meta Description</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="158" class="form-control char-textarea" name="meta_description" id="textarea-counter" rows="2" placeholder="Meta Description" style="height: 50px"> {{old('meta_description',$team->meta_description)}}</textarea>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 158 </small>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="textarea">Meta Keywords</label>
                                            <div class="form-floating mb-0">
                                                <textarea data-length="250" class="form-control char-textarea" name="meta_keywords" id="textarea-counter2" rows="2" placeholder="Meta Keywords" style="height: 50px"> {{old('meta_keywords',$team->meta_keywords)}}</textarea>
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

<script>

function loadAvatar(event) {
	var avatar_image = document.getElementById('avatar_image_output');
	avatar_image.src = URL.createObjectURL(event.target.files[0]);
};

function resetAvatar() {
	var avatar_image = document.getElementById('avatar_image_output');
	avatar_image.src = "{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}";
};

</script>

@endpush
