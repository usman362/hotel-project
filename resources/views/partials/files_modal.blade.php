
     <!-- Create New File Modal Starts-->
     <div class="modal fade" id="new-upload-modal">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 991px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

        <div class="modal-body">
            <div class="file-manager-application">
                   <div class="content-area-wrapper">
                           <div class="content-wrapper">

                               <div class="content-body">

                                   <!-- file manager app content starts -->
                                   <div class="file-manager-main-content">
                                    <input type="hidden" id="uploaded_for">
                                       <div class="file-manager-content-body">
                                        <form action="{{route('uploaded-files.store')}}" method="post" id="upload_form" enctype="multipart/form-data">
                                            @csrf
                                              <input type="file" class="form-control" id="upload_file" name="aiz_file" onchange="preview_image();"/>
                                          </form>
                                           <!-- Files Container Starts -->
                                           <form action="" id="uploaded_image_form">
                                           <div class="view-container row mt-2" id="image_preview">
                                               @php
                                                   $all_uploads = App\Models\Upload::all();
                                               @endphp
                                              @forelse ($all_uploads as $key => $file)
                                              @php
                                              if($file->file_original_name == null){
                                                  $file_name = 'Unknown';
                                              }else{
                                                  $file_name = $file->file_original_name;
                                              }
                                              $file_path = asset($file->file_name);
                                              if($file->external_link) {
                                                  $file_path = $file->external_link;
                                              }

                                          @endphp

                                          <div class="col-md-3">
                                               <label class="card file-manager-item file" for="upload{{$file->id}}">
                                                   <div class="form-check">
                                                       <input type="radio" name="selectImage" class="form-check-input checkImage" id="upload{{$file->id}}" value="{{$file->id}}"/>
                                                   </div>
                                                   <div class="card-img-top file-logo-wrapper">

                                                       <div class="d-flex align-items-center justify-content-center w-100">
                                                               <img class="uploaded_image{{$file->id}}" src="{{asset($file->file_name)}}" alt="" height="50" />
                                                       </div>
                                                   </div>
                                                   <div class="card-body">
                                                       <div class="content-wrapper">
                                                           <p class="card-text file-name mb-0">{{$file_name.'.'.$file->extension}}</p>

                                                           <p class="card-text file-size mb-0">{{ formatBytes($file->file_size) }}</p>
                                                           <p class="card-text file-date">{{$file->created_at->format('d M Y')}}</p>
                                                       </div>
                                                       {{-- <small class="file-accessed text-muted">Last accessed: 3 hours ago</small> --}}
                                                   </div>
                                               </label>
                                            </div>
                                            @empty
                                            <div class="flex-grow-1 align-items-center no-result mb-3">
                                                <i data-feather="alert-circle" class="me-50"></i>
                                                No Results
                                            </div>
                                            @endforelse
                                           </div>
                                        </form>
                                           <!-- /Files Container Ends -->
                                       </div>
                                   </div>
                                   <!-- file manager app content ends -->
                               </div>
                           </div>
                   </div>
               </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary me-1 selectUploadImage" data-bs-dismiss="modal">Select</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- /Create New File Modal Ends -->
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
        $('#image_preview').append(`
          <div class="col-md-3">
            <label class="card file-manager-item file" for="upload`+data.upload.id+`">
                <div class="form-check">
                    <input type="radio" name="selectImage" class="form-check-input checkImage" id="upload`+data.upload.id+`" value="`+data.upload.id+`"/>
                </div>
                <div class="card-img-top file-logo-wrapper">

                    <div class="d-flex align-items-center justify-content-center w-100">
                    <img src='{{asset('`+data.upload.file_name+`')}}' class="uploaded_image`+data.upload.id+`" height="50">
                    </div>
                </div>
                <div class="card-body">
                    <div class="content-wrapper">
                        <p class="card-text file-name mb-0">`+data.upload.file_original_name+`.`+data.upload.extension+`</p>
                        <p class="card-text file-size mb-0">`+data.file_size+`</p>
                        <p class="card-text file-date">`+data.date+`</p>
                    </div>
                </div>
            </label>
        </div>`);
        $('.statusUpload').html(data.message);
       }
      })
     });

$('.uploadModal').click(function(){

$('#uploaded_for').val($(this).data('name'));

});

$('.selectUploadImage').click(function(){
    var id = $('.checkImage:checked').val();
    var path = $('.uploaded_image'+id).attr('src');
    var upload_for = $('#uploaded_for').val();

if (upload_for == 'thumbnail') {
    $('input[name="thumbnail_image"]').val(id);
    var thumbnail_image = document.getElementById('thumbnail_image_output');
	thumbnail_image.src = path;
    $('#uploaded_image_form').reset();
}else if (upload_for == 'banner') {
    $('input[name="banner_image"]').val(id);
    var banner_image = document.getElementById('banner_image_output');
    banner_image.src = path;
    $('#uploaded_image_form').reset();
}

});

</script>

@endpush
