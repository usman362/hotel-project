@section('title','Edit Page')

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
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Page Edit</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item active">Edit
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Blog Edit -->
            <div class="blog-edit-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- Form -->
                                <form action="{{route('page.update',$page->id)}}" class="mt-2" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-5 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="title">Page Title</label>
                                                <input type="text" id="title" class="form-control" name="title" value="{{old('title',$page->title)}}" placeholder="Page Title" />
                                            </div>
                                        </div>

                                        <div class="col-md-5 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="url_slug">URL Slug</label>
                                                <input type="text" id="url_slug" class="form-control" value="{{old('url_slug',$page->url_slug)}}" name="url_slug" placeholder="/page-title" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-status">Status</label>
                                                <select class="form-select" id="blog-edit-status" name="status">
                                                    <option value="Published" @selected(old('status',$page->status) == 'Published')>Published</option>
                                                    <option value="Pending" @selected(old('status',$page->status) == 'Pending')>Pending</option>
                                                    <option value="Draft" @selected(old('status',$page->status) == 'Draft')>Draft</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Content</label>
                                                <div id="blog-editor-wrapper">
                                                    <div id="blog-editor-container">
                                                        <div class="editor">
                                                            <div id="full-container">
                                                                <textarea class="tinymceTextEditor description" name="description">
                                                                    {{old('description',$page->description)}}
                                                              </textarea>
                                                               @error('description')
                                                      <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Banner Image</h4>
                                                <div class="d-flex flex-column flex-md-row">
                                                    <img src="{{asset('images/'.$page->head_image)}}" id="image_output" class="rounded me-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                    <div class="featured-info">
                                                        <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                        <p class="my-50">
                                                            {{-- <a href="#" id="blog-image-text">C:\fakepath\banner.jpg</a> --}}
                                                        </p>
                                                        <div class="d-inline-block">
                                                            <input class="form-control" type="file" id="blogCustomFile" name="head_image" onchange="loadImage(event)" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-50">
                                            <button type="submit" class="btn btn-primary me-1">Save Changes</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Blog Edit -->

        </div>
    </div>
</div>
<!-- END: Content-->




@endsection


@push('scripts')

<script>
    function loadImage(event) {
	var image = document.getElementById('image_output');
	image.src = URL.createObjectURL(event.target.files[0]);
};


$('#title').keyup(function(){
      var textParent = $('#title').val();
  var text =  textParent.toLowerCase()
             .replace(/ /g, '-')
             .replace(/[^\w-]+/g, '');

   $('#url_slug').val(text);
})
</script>

@endpush
