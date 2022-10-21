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
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)">
                                <i data-feather="help-circle" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Faqs</span>
                            </a>
                        </li>
                        <!-- security -->
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock font-medium-3 me-50">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                                <span class="fw-bold">Security</span>
                            </a>
                        </li>
                        <!-- billing and plans -->
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark font-medium-3 me-50">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span class="fw-bold">Billings &amp; Plans</span>
                            </a>
                        </li>
                        <!-- notification -->
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell font-medium-3 me-50">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                                <span class="fw-bold">Notifications</span>
                            </a>
                        </li>
                        <!-- connection -->
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link font-medium-3 me-50">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                </svg>
                                <span class="fw-bold">Connections</span>
                            </a>
                        </li>
                    </ul>

                    <!-- profile -->
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Faqs</h4>
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


@endsection

@push('scripts')


<script>
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

</script>

@endpush
