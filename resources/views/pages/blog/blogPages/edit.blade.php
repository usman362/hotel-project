@section('title','Edit Blog')

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
                        <h2 class="content-header-title float-start mb-0">Blog Edit</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Blog</a>
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
                                <div class="d-flex align-items-start">
                                    <div class="avatar me-75">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
                                    </div>
                                    <div class="author-info">
                                        <h6 class="mb-25">Chad Alexander</h6>
                                        <p class="card-text">May 24, 2020</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <form action="{{route('blogpages.store')}}" class="mt-2" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-title">Blog Title</label>
                                                <input type="text" id="blog-edit-title" class="form-control" name="title" value="{{old('title',$blog->title)}}" placeholder="Blog Article Title" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-category">Tags</label>
                                                <select id="blog-edit-category" name="tags" class="select2 form-select" multiple>
                                                    <option value="Fashion" @selected(old('tags',$blog->title) == 'Fashion' )>Fashion</option>
                                                    <option value="Food" @selected(old('tags',$blog->title) == 'Food' )>Food</option>
                                                    <option value="Gaming" @selected(old('tags',$blog->title) == 'Gaming' )>Gaming</option>
                                                    <option value="Quote" @selected(old('tags',$blog->title) == 'Quote' )>Quote</option>
                                                    <option value="Video" @selected(old('tags',$blog->title) == 'Video' )>Video</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-slug">Slug</label>
                                                <input type="text" id="blog-edit-slug" name="url_slug" class="form-control" value="{{old('url_slug',$blog->url_slug)}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-status">Status</label>
                                                <select class="form-select" name="status" id="blog-edit-status">
                                                    <option value="Published" @selected(old('status',$blog->status) == 'Published')>Published</option>
                                                    <option value="Pending" @selected(old('status',$blog->status) == 'Pending')>Pending</option>
                                                    <option value="Draft" @selected(old('status',$blog->status) == 'Draft')>Draft</option>
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
                                                                <textarea class="tinymceTextEditor content" name="content">

                                                              </textarea>
                                                               @error('content')
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
                                                <h4 class="mb-1">Featured Image</h4>
                                                <div class="d-flex flex-column flex-md-row">
                                                    <img src="{{asset('images/'.$blog->image)}}" id="image_output" class="rounded me-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                    <div class="featured-info">
                                                        <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                        <p class="my-50">
                                                            {{-- <a href="#" id="blog-image-text">C:\fakepath\banner.jpg</a> --}}
                                                        </p>
                                                        <div class="d-inline-block">
                                                            <input class="form-control" type="file" name="image" id="blogCustomFile" onchange="loadImage(event)" accept="image/*" />
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
</script>

@endpush
