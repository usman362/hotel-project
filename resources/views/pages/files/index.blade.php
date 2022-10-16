@section('title','File Manager')

@extends('layouts.app')

@section('content')

@push('styles')

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/ext-component-tree.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-file-manager.css')}}">
<!-- END: Page CSS-->

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
    <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-file-manager">
                    <div class="sidebar-inner">
                        <!-- sidebar menu links starts -->
                        <!-- add file button -->
                        <div class="dropdown dropdown-actions">
                            <button class="btn btn-primary add-file-btn text-center w-100" type="button" id="addNewFile" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="align-middle">Add New</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="addNewFile">
                                <div class="dropdown-item" data-bs-toggle="modal" data-bs-target="#new-folder-modal">
                                    <div class="mb-0">
                                        <i data-feather="folder" class="me-25"></i>
                                        <span class="align-middle">Folder</span>
                                    </div>
                                </div>
                                <div class="dropdown-item" data-bs-toggle="modal" data-bs-target="#new-file-modal">
                                    <div class="mb-0">
                                        <i data-feather="upload-cloud" class="me-25"></i>
                                        <span class="align-middle">File Upload</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- add file button ends -->

                        <!-- sidebar list items starts  -->
                        <div class="sidebar-list">
                            <!-- links for file manager sidebar -->

                            <div class="list-group list-group-labels">
                                <h6 class="section-label px-2 mb-1">Labels</h6>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="file-text" class="me-50 font-medium-3"></i>
                                    <span class="align-middle">Documents</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="image" class="me-50 font-medium-3"></i>
                                    <span class="align-middle">Images</span>
                                </a>
                                {{-- <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="video" class="me-50 font-medium-3"></i>
                                    <span class="align-middle">Videos</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="music" class="me-50 font-medium-3"></i>
                                    <span class="align-middle">Audio</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="layers" class="me-50 font-medium-3"></i>
                                    <span class="align-middle">Archives</span>
                                </a> --}}
                            </div>
                            <!-- links for file manager sidebar ends -->

                        </div>
                        <!-- side bar list items ends  -->
                        <!-- sidebar menu links ends -->
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- overlay container -->
                    <div class="body-content-overlay"></div>

                    <!-- file manager app content starts -->
                    <div class="file-manager-main-content">
                        <!-- search area start -->
                        <div class="file-manager-content-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="sidebar-toggle d-block d-xl-none float-start align-middle ms-1">
                                    <i data-feather="menu" class="font-medium-5"></i>
                                </div>
                                <div class="input-group input-group-merge shadow-none m-0 flex-grow-1">
                                    <span class="input-group-text border-0">
                                        <i data-feather="search"></i>
                                    </span>
                                    <input type="text" class="form-control files-filter border-0 bg-transparent" placeholder="Search" />
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="file-actions">
                                    <i data-feather="arrow-down-circle" class="font-medium-2 cursor-pointer d-sm-inline-block d-none me-50"></i>
                                    <i data-feather="trash" class="font-medium-2 cursor-pointer d-sm-inline-block d-none me-50"></i>
                                    <i data-feather="alert-circle" class="font-medium-2 cursor-pointer d-sm-inline-block d-none" data-bs-toggle="modal" data-bs-target="#app-file-manager-info-sidebar"></i>
                                    <div class="dropdown d-inline-block">
                                        <i class="font-medium-2 cursor-pointer" data-feather="more-vertical" role="button" id="fileActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </i>
                                        {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="fileActions">
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="move" class="cursor-pointer me-50"></i>
                                                <span class="align-middle">Open with</span>
                                            </a>
                                            <a class="dropdown-item d-sm-none d-block" href="#" data-bs-toggle="modal" data-bs-target="#app-file-manager-info-sidebar">
                                                <i data-feather="alert-circle" class="cursor-pointer me-50"></i>
                                                <span class="align-middle">More Options</span>
                                            </a>
                                            <a class="dropdown-item d-sm-none d-block" href="#">
                                                <i data-feather="trash" class="cursor-pointer me-50"></i>
                                                <span class="align-middle">Delete</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="plus" class="cursor-pointer me-50"></i>
                                                <span class="align-middle">Add shortcut</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="folder-plus" class="cursor-pointer me-50"></i>
                                                <span class="align-middle">Move to</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="star" class="cursor-pointer me-50"></i>
                                                <span class="align-middle">Add to starred</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="droplet" class="cursor-pointer me-50"></i>
                                                <span class="align-middle">Change color</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="download" class="cursor-pointer me-50"></i>
                                                <span class="align-middle">Download</span>
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="btn-group view-toggle ms-50" role="group">
                                    <input type="radio" class="btn-check" name="view-btn-radio" data-view="grid" id="gridView" checked autocomplete="off" />
                                    <label class="btn btn-outline-primary p-50 btn-sm" for="gridView">
                                        <i data-feather="grid"></i>
                                    </label>
                                    <input type="radio" class="btn-check" name="view-btn-radio" data-view="list" id="listView" autocomplete="off" />
                                    <label class="btn btn-outline-primary p-50 btn-sm" for="listView">
                                        <i data-feather="list"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- search area ends here -->

                        <div class="file-manager-content-body">



                            <!-- Files Container Starts -->
                            <div class="view-container">
                                <h6 class="files-section-title mt-2 mb-75">Files</h6>
                               @foreach ($files as $key => $file)
                               @php
                                   $size = $file->file_size;
                               @endphp

                                <div class="card file-manager-item file">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck7" />
                                        <label class="form-check-label" for="customCheck7"></label>
                                    </div>
                                    <div class="card-img-top file-logo-wrapper">
                                        <div class="dropdown float-end" data-id="{{$file->id}}">
                                            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center w-100">
                                            @switch($file->file_type)
                                                @case('jpg')
                                                <img src="{{asset('app-assets/images/icons/jpg.png')}}" alt="file-icon" height="35" />
                                                @break
                                                @case('jpeg')
                                                <img src="{{asset('app-assets/images/icons/jpg.png')}}" alt="file-icon" height="35" />
                                                @break
                                                @case('png')
                                                <img src="{{asset('app-assets/images/icons/jpg.png')}}" alt="file-icon" height="35" />
                                                @break
                                                @case('docx')
                                                <img src="{{asset('app-assets/images/icons/doc.png')}}" alt="file-icon" height="35" />
                                                @break
                                                @case('txt')
                                                <img src="{{asset('app-assets/images/icons/txt.png')}}" alt="file-icon" height="35" />
                                                @break
                                                @case('json')
                                                <img src="{{asset('app-assets/images/icons/json.png')}}" alt="file-icon" height="35" />
                                                @break
                                                @case('pdf')
                                                <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                @break
                                                @case('xlsx')
                                                <img src="{{asset('app-assets/images/icons/xls.png')}}" alt="file-icon" height="35" />
                                                @break

                                                @default
                                                <img src="{{asset('app-assets/images/icons/unknown.png')}}" alt="file-icon" height="35" />

                                            @endswitch

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="content-wrapper">
                                            <p class="card-text file-name mb-0">{{$file->name.'.'.$file->file_type}}</p>

                                            <p class="card-text file-size mb-0">
                                                @if ($size >= 1000)
                                {{number_format($size, 2, '.',',' ).'kb'}}
                      @elseif($size >= 1000000)
                                {{number_format($size, 2, '.',',' ).'mb'}}
                      @else
                                {{number_format($size, 2, '.',',' ).'b'}}
                      @endif
                                            </p>
                                            <p class="card-text file-date">{{$file->created_at->format('d M Y')}}</p>
                                        </div>
                                        <small class="file-accessed text-muted">Last accessed: 3 hours ago</small>
                                    </div>
                                </div>


<!-- File Dropdown Starts-->
<div class="dropdown-menu dropdown-menu-end file-dropdown">
    <a class="dropdown-item" href="#">
        <i data-feather="eye" class="align-middle me-50"></i>
        <span class="align-middle">Preview</span>
    </a>
    <a class="dropdown-item" href="#">
        <i data-feather="user-plus" class="align-middle me-50"></i>
        <span class="align-middle">Share</span>
    </a>
    <a class="dropdown-item" href="#">
        <i data-feather="copy" class="align-middle me-50"></i>
        <span class="align-middle">Make a copy</span>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">
        <i data-feather="edit" class="align-middle me-50"></i>
        <span class="align-middle">Rename</span>
    </a>
    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#app-file-manager-info-sidebar">
        <i data-feather="info" class="align-middle me-50"></i>
        <span class="align-middle">Info</span>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">
        <i data-feather="trash" class="align-middle me-50"></i>
        <span class="align-middle">Delete</span>
    </a>
    <a class="dropdown-item" href="#">
        <i data-feather="alert-circle" class="align-middle me-50"></i>
        <span class="align-middle">Report</span>
    </a>
</div>
<!-- /File Dropdown Ends -->

                                @endforeach

                                <div class="d-none flex-grow-1 align-items-center no-result mb-3">
                                    <i data-feather="alert-circle" class="me-50"></i>
                                    No Results
                                </div>
                            </div>
                            <!-- /Files Container Ends -->
                        </div>
                    </div>
                    <!-- file manager app content ends -->

                    <!-- File Info Sidebar Starts-->
                    <div class="modal modal-slide-in fade show" id="app-file-manager-info-sidebar">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <div class="modal-header d-flex align-items-center justify-content-between mb-1 p-2">
                                    <h5 class="modal-title">menu.js</h5>
                                    <div>
                                        <i data-feather="trash" class="cursor-pointer me-50" data-bs-dismiss="modal"></i>
                                        <i data-feather="x" class="cursor-pointer" data-bs-dismiss="modal"></i>
                                    </div>
                                </div>
                                <div class="modal-body flex-grow-1 pb-sm-0 pb-1">
                                    <ul class="nav nav-tabs tabs-line" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#details-tab" role="tab" aria-controls="details-tab" aria-selected="true">
                                                <i data-feather="file"></i>
                                                <span class="align-middle ms-25">Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#activity-tab" role="tab" aria-controls="activity-tab" aria-selected="true">
                                                <i data-feather="activity"></i>
                                                <span class="align-middle ms-25">Activity</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="details-tab" role="tabpanel" aria-labelledby="details-tab">
                                            <div class="d-flex flex-column justify-content-center align-items-center py-5">
                                                <img src="../../../app-assets/images/icons/js.png" alt="file-icon" height="64" />
                                                <p class="mb-0 mt-1">54kb</p>
                                            </div>
                                            <h6 class="file-manager-title my-2">Settings</h6>
                                            <ul class="list-unstyled">
                                                <li class="d-flex justify-content-between align-items-center mb-1">
                                                    <span>File Sharing</span>
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input" id="sharing" />
                                                        <label class="form-check-label" for="sharing"></label>
                                                    </div>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center mb-1">
                                                    <span>Synchronization</span>
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input" checked id="sync" />
                                                        <label class="form-check-label" for="sync"></label>
                                                    </div>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center mb-1">
                                                    <span>Backup</span>
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input" id="backup" />
                                                        <label class="form-check-label" for="backup"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <hr class="my-2" />
                                            <h6 class="file-manager-title my-2">Info</h6>
                                            <ul class="list-unstyled">
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <p>Type</p>
                                                    <p class="fw-bold">JS</p>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <p>Size</p>
                                                    <p class="fw-bold">54kb</p>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <p>Location</p>
                                                    <p class="fw-bold">Files > Documents</p>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <p>Owner</p>
                                                    <p class="fw-bold">Sheldon Cooper</p>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <p>Modified</p>
                                                    <p class="fw-bold">12th Aug, 2020</p>
                                                </li>

                                                <li class="d-flex justify-content-between align-items-center">
                                                    <p>Created</p>
                                                    <p class="fw-bold">01 Oct, 2019</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="activity-tab" role="tabpanel" aria-labelledby="activity-tab">
                                            <h6 class="file-manager-title my-2">Today</h6>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="avatar avatar-sm me-50">
                                                    <img src="../../../app-assets/images/avatars/5-small.png" alt="avatar" width="28" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Mae</span>
                                                        shared the file with
                                                        <span class="fw-bold">Howard</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm bg-light-primary me-50">
                                                    <span class="avatar-content">SC</span>
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Sheldon</span>
                                                        updated the file
                                                    </p>
                                                </div>
                                            </div>
                                            <h6 class="file-manager-title mt-3 mb-2">Yesterday</h6>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="avatar avatar-sm bg-light-success me-50">
                                                    <span class="avatar-content">LH</span>
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Leonard</span>
                                                        renamed this file to
                                                        <span class="fw-bold">menu.js</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" width="28" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">You</span>
                                                        shared this file with Leonard
                                                    </p>
                                                </div>
                                            </div>
                                            <h6 class="file-manager-title mt-3 mb-2">3 days ago</h6>
                                            <div class="d-flex align-items-start">
                                                <div class="avatar avatar-sm me-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" width="28" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-50">
                                                        <span class="fw-bold">You</span>
                                                        uploaded this file
                                                    </p>
                                                    <img src="../../../app-assets/images/icons/js.png" alt="Avatar" class="me-50" height="24" />
                                                    <span class="fw-bold">app.js</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- File Info Sidebar Ends -->



                    <!-- Create New Folder Modal Starts-->
                    <div class="modal fade" id="new-folder-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New Folder</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control" value="New folder" placeholder="Untitled folder" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Create</button>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Create New Folder Modal Ends -->


                     <!-- Create New File Modal Starts-->
                     <div class="modal fade" id="new-file-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New File</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                               <form action="{{route('file-manager.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="text" name="name" class="form-control" id="" placeholder="Enter File Name">
                                    <input type="file" class="form-control" name="file"  placeholder="Upload" />
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary me-1">Upload</button>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Create New File Modal Ends -->

                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@push('scripts')

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/app-file-manager.js')}}"></script>
<!-- END: Page JS-->

@endpush
