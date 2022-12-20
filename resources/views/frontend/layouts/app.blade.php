<!doctype html>
<html lang="en">

 @include('frontend.partials.head')

<body>

    @include('frontend.partials.header')
    
   @yield('content')
   
   @include('frontend.partials.footer')
<script>
$(document).on('click', '#book_now_section .scout-element__counter button.js-pax-selection--add', function(){ 
    var travelling_no=$('#book_now_section .scout-element__counter input[type="number"]').val();
    $('#book_now_section .scout-element__counter input[type="number"]').val(parseInt(travelling_no)+1);
    if(travelling_no>0){
        $('#book_now_section .scout-element__counter button.js-pax-selection--substract').removeAttr('disabled');
        $('#book_now_section .scout-element__counter button.js-pax-selection--substract').removeClass('scout-element__counter-button--inactive');
    }
});
$(document).on('click', '#book_now_section .scout-element__counter button.js-pax-selection--substract', function(){ 
    var travelling_no=$('#book_now_section .scout-element__counter input[type="number"]').val();
    if(travelling_no>1){
        $('#book_now_section .scout-element__counter input[type="number"]').val(parseInt(travelling_no)-1);
    }
    if(travelling_no==1){
        $('#book_now_section .scout-element__counter button.js-pax-selection--substract').attr('disabled','disabled');
        $('#book_now_section .scout-element__counter button.js-pax-selection--substract').addClass('scout-element__counter-button--inactive');
    }
});
</script>
</body>
</html>