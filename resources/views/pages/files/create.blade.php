@section('title','Upload File')

@extends('layouts.app')

@section('content')

@push('styles')

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/ext-component-tree.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-file-manager.css')}}">
<!-- END: Page CSS-->
<style>
    #image_preview img{
        width: 180px;
        border-radius: 2px;
        margin:6px
    }

    #image_preview{
        display: flex;
    }
</style>
@endpush



<!-- BEGIN: Content-->
<div class="app-content content file-manager-application">

    @if(session()->has('success'))
   <div class="alert alert-primary pd-4" role="alert">
   {{ session()->get('success') }}
   </div>
   @endif

<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-area-wrapper container-xxl p-0 card">



<div class="card-header">
<h5 class="mb-0 h6">Drag &amp; drop your files</h5>
</div>
<div class="card-body">
    <form action="{{route('uploaded-files.store')}}" method="post" id="upload_form" enctype="multipart/form-data">
      @csrf
        <input type="file" class="form-control" id="upload_file" name="aiz_file" onchange="preview_image();"/>
    </form>
 <div id="image_preview" class="card-body"></div>
</div>
<div class="card-footer">
    <span class="text-success statusUpload"></span>
</div>
</div>

</div>



@endsection


@push('scripts')
<script>
    $(document).ready(function()
    {
     $('form').ajaxForm(function()
     {
      alert("Uploaded SuccessFully");
     });
    });

    function preview_image()
    {
     var total_file=document.getElementById("upload_file").files.length;
     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
     }

     $('#upload_form').submit();

    }

    $('#upload_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{route('uploaded-files.store')}}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    //$('#message').css('display', 'block');
    $('.statusUpload').html(data.message);
   // $('#message').addClass(data.class_name);
    //$('#uploaded_image').html(data.uploaded_image);
   }
  })
 });
    </script>
<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/app-file-manager.js')}}"></script>

@endpush
