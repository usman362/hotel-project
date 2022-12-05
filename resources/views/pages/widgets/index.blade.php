@section('title','Widgets')

@extends('layouts.app')

@section('content')


<div class="app-content content ">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper ">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Widgets</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-2">
                        <!-- Account -->
                        <li class="nav-item active">
                            <a class="nav-link" href="#widget1" data-toggle="tab">
                                <span class="fw-bold">Footer Widgets #1</span>
                            </a>
                        </li>
                        <!-- security -->
                        <li class="nav-item">
                            <a class="nav-link" href="#widget2" data-toggle="tab">
                                <span class="fw-bold">Footer Widgets #2</span>
                            </a>
                        </li>
                        <!-- billing and plans -->
                        <li class="nav-item">
                            <a class="nav-link" href="#widget3" data-toggle="tab">
                                <span class="fw-bold">Footer Widgets #3</span>
                            </a>
                        </li>
                        <!-- notification -->
                        <li class="nav-item">
                            <a class="nav-link" href="#widget4" data-toggle="tab">
                                <span class="fw-bold">Footer Widgets #4</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content clearfix">
                    <!-- profile -->
                    <div class="tab-pane card active" id="widget1">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Footer Widget Column 1</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <!-- form -->
                            <form class="validate-form mt-2 pt-50" novalidate="novalidate">
                                <div class="faqs">
                                    <div class="row d-flex align-items-end">
                                        <div class="mb-0 col-md-12">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                     <img src="{{asset($icon->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="icon_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                 </a>

                                                 <!-- upload and reset button -->
                                                 <div class="d-flex align-items-end mt-75 ms-1">
                                                     <div>
                                                         <div class="alert alert-primary" role="alert">
                                                             <div class="alert-body"><strong>Logo</strong></div>
                                                         </div>
                                                         <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="icon" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                         <input type="hidden" name="icon" value="{{Setting::get('icon')}}">
                                                         <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary resetImage mb-75 waves-effect" data-name="icon">Reset</button>
                                                     </div>
                                                 </div>

                                                 <!--/ upload and reset button -->
                                             </div>
                                        </div>
                                        <!-- Add Textarea with Quill here -->
                                        <div class="mb-1 mt-1 col-md-6">
                                            <label class="form-label" for="">Facebook Link</label>
                                            <input type="text" id="" name="facebook_link" class="form-control" placeholder="Enter Link" />
                                        </div>
                                        <div class="mb-1 mt-1 col-md-6">
                                            <label class="form-label" for="">Instagram Link</label>
                                            <input type="text" id="" name="instagram_link" class="form-control" placeholder="Enter Link" />
                                        </div>
                                        <div class="mb-1 mt-1 col-md-6">
                                            <label class="form-label" for="">Twitter Link</label>
                                            <input type="text" id="" name="twitter_link" class="form-control" placeholder="Enter Link" />
                                        </div>
                                        <div class="mb-1 mt-1 col-md-6">
                                            <label class="form-label" for="">Youtube Link</label>
                                            <input type="text" id="" name="youtube_link" class="form-control" placeholder="Enter Link" />
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


                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <!--/ form -->
                        </div>
                    </div>

                    <div class="tab-pane card" id="widget2">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Footer Widget Column 2</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <!-- form -->
                            <form class="validate-form mt-2 pt-50" novalidate="novalidate">
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


                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <!--/ form -->
                        </div>
                    </div>

                    <div class="tab-pane card" id="widget3">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Footer Widget Column 3</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <!-- form -->
                            <form class="validate-form mt-2 pt-50" novalidate="novalidate">
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


                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <!--/ form -->
                        </div>
                    </div>

                    <div class="tab-pane card" id="widget4">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Footer Widget Column 4</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <!-- form -->
                            <form class="validate-form mt-2 pt-50" novalidate="novalidate">
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


                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <!--/ form -->
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@include('partials.files_modal')

@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
   $('.resetImage').click(function(){
    let imageName = $(this).data('name');
	let thumbnail_image = document.getElementById(imageName+'_image_output');
	thumbnail_image.src = "{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}";

});
</script>

@endpush
