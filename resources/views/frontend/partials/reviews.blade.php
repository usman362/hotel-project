<div class="subscribtion-section p-5">
    <p>Don’t wait any longer. Contact Us</p>
    <div class="d-flex justify-content-between">
        <div class="d-flex align-items-end">
            <img src="{{asset('assets/images/phone-icon-blue.png')}}" alt="" />
            <h5>{{Setting::get('phone_number')}}</h5>
        </div>
        <div class="d-flex  align-items-end">
            <img src="{{asset('assets/images/mail-icon-blue.png')}}" alt="" />
            <h5>{{Setting::get('email')}}</h5>
        </div>
        <div class="d-flex  align-items-center">
        <form action="javascript:void(0)" method="post" id="newsletter">
            @csrf
            <input type="text" name="email" id="email" >
            <span class="text-danger">{{ $errors->first('email') }}</span>
            <div class="alert alert-success d-none" id="msg_div">
                <span id="res_message"></span>
            </div>
            <button type="submit" id="send_form">SUBSCRIBE</button>
        </form>
        </div>
    </div>
</div>
<div class="reviews-section position-relative">
    <div class="reviews">
        <div class="review">
            <div class="review-image">
                <img src="{{asset('assets/images/rev-1.jpg')}}" alt="" />
            </div>
            <div class="review-text">
                <p>"Great things are done when men and mountains are meet"</p>
                <h5>- Willam Koinas</h5>
            </div>
        </div>
        <div class="review">
            <div class="review-image">
                <img src="{{asset('assets/images/rev-2.jpg')}}" alt="" />
            </div>
            <div class="review-text">
                <p>"Great things are done when men and mountains are meet"</p>
                <h5>- Willam Koinas</h5>
            </div>
        </div>
        <div class="review">
            <div class="review-image">
                <img src="{{asset('assets/images/rev-3.jpg')}}" alt="" />
            </div>
            <div class="review-text">
                <p>"Great things are done when men and mountains are meet"</p>
                <h5>- Willam Koinas</h5>
            </div>
        </div>
    </div>
    <img src="{{asset('assets/images/review-banner.jpg')}}" alt="" class="w-100" />
</div>

@push('scripts')

<script>
     if ($("#newsletter").length > 0) {
     $("#newsletter").validate({

     rules: {
         email: {
                 required: true,
                 maxlength: 50,
                 email: true,
             },
     },
     messages: {
       email: {
           required: "Please enter valid email",
           email: "Please enter valid email",
           maxlength: "The email name should less than or equal to 50 characters",
         },

     },
     submitHandler: function(form) {
      $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       $('#send_form').html('Sending..');
       $.ajax({
         url: '{{route('store.newsletter')}}',
         type: "POST",
         data: $('#newsletter').serialize(),
         success: function( response ) {
             $('#send_form').html('Submit');
             $('#res_message').show();
             $('#res_message').html(response.msg);
             $('#msg_div').removeClass('d-none');

             document.getElementById("newsletter").reset();
             setTimeout(function(){
             $('#res_message').hide();
             $('#msg_div').hide();
             },10000);
         }
       });
     }
   })
 }
 </script>

@endpush
