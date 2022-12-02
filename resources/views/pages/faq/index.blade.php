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
                        <h2 class="content-header-title mb-0">Faqs</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">

            <div class="row">
                <div class="col-12">

                    <!-- profile -->
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Faqs</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <!-- form -->
                            <form action="{{route('faq.store')}}" class="validate-form mt-2 pt-50" novalidate="novalidate" method="POST">
                                @csrf
                                <div class="faqs">
                                    <input type="hidden" id="number_faq" value="{{count($faqs)}}">

                                    @forelse ($faqs as $key => $faq)
                                   <div class="row d-flex align-items-end faq_child_row">
                                    <div class="mb-0 col-md-12">
                                        <label class="form-label" for="faq_question_1">FAQ #{{++$key}} Question</label>
                                        <input type="text" id="faq_question_1" name="question[]" class="form-control faq_question" data-id="1" placeholder="Q Ex. What is the best time to visit Nepal?" value="{{$faq->question}}" />
                                        @error('question')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- Add Textarea with Quill here -->
                                    <div class="mb-1 mt-1 col-md-11">
                                        <textarea data-length="500" name="answer[]" class="form-control faq_answer" data-id="1" id="faq_answer_1" data-id="1" rows="3" placeholder="Ex. The best time to visit Nepal is from March to May and from September to December. You can visit in other seasons as well but it isn't considered the best." style="height: 100px" spellcheck="true">{{$faq->answer}}</textarea>
                                        @error('answer')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    @if ($key != 1)

                                    <div class="col-md-1 mb-20">
                                        <div class="mb-1">
                                            <button class="btn btn-outline-danger remove_faq text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                        </div>
                                    </div>

                                    @endif
                                </div>

                                   @empty
                                   <div class="row d-flex align-items-end">
                                    <div class="mb-0 col-md-12">
                                        <label class="form-label" for="faq_question_1">FAQ #1 Question</label>
                                        <input type="text" id="faq_question_1" name="question[]" class="form-control faq_question" data-id="1" placeholder="Q Ex. What is the best time to visit Nepal?" />
                                        @error('question')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- Add Textarea with Quill here -->
                                    <div class="mb-1 mt-1 col-md-11">
                                        <textarea data-length="500" name="answer[]" class="form-control faq_answer" data-id="1" id="faq_answer_1" data-id="1" rows="3" placeholder="Ex. The best time to visit Nepal is from March to May and from September to December. You can visit in other seasons as well but it isn't considered the best." style="height: 100px" spellcheck="true"></textarea>
                                        @error('answer')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>

                                   @endforelse

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
     var faq = $('#number_faq').val();

$('#add_faq').click(function(){
    faq++
     if(faq < 1){
     faq = 2;
 }
    $('.faqs').append(`
<div class="row d-flex align-items-end faq_child_row">
     <div class="mb-0 col-md-12">
         <label class="form-label" for="faq_question_`+faq+`">FAQ #`+faq+` Question</label>
         <input type="text" id="faq_question_`+faq+`" name="question[]" class="form-control faq_question" data-id="`+faq+`" placeholder="Q Ex. What is the best time to visit Nepal?" />
         @error('question')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
     </div>
     <!-- Add Textarea with Quill here -->
     <div class="mb-1 mt-1 col-md-11">
         <textarea data-length="500" class="form-control faq_answer" name="answer[]" id="faq_answer_`+faq+`" data-id="`+faq+`" rows="3" placeholder="Ex. The best time to visit Nepal is from March to May and from September to December. You can visit in other seasons as well but it isn't considered the best." style="height: 100px" spellcheck="true"></textarea>
         @error('answer')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
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
});

RemoveFaq()
function RemoveFaq(){
    $('.remove_faq').click(function(){
        $(this).parents('.faq_child_row').remove();
        faq--;
    })
}

</script>

@endpush
