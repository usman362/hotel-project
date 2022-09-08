@section('title','Destinations')

@extends('layouts.app')

@section('content')



 <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">

                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a  href="{{route('destination.create')}}" class="btn btn-primary waves-effect waves-float waves-light">
                            <i data-feather="plus" class="me-25"></i>
                            <span>New Destination</span></a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Destination table starts -->
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Destination List</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Below is the list of <code>available destinations.</code> To add a new destination <code>click on the button above on the right</code> and then <code>click on + new destination</code> submenu. The destinations <code>can be edited</code> by <code>clicking on the 3 dots below</code> on the last column.
                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>URL</th>
                                            <th>ID</th>
                                            <th>Count</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       @foreach($destination as $key => $destination)
                                        <tr>
                                            <td>
                                                <img src="{{asset('images/'.$destination->banner_image)}}" class="me-75" height="40" width="40" alt="Angular">
                                                <span class="fw-bold">{{$destination->title}}</span>
                                            </td>
                                            <td>/{{$destination->url_slug}}</td>
                                            <td>
                                                {{$destination->id}}
                                            </td>
                                            <td>02 Packages</td>
                                            <td>
                                                <span class="badge rounded-pill badge-light-primary me-1">Active</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                        <i class="ficon" data-feather="more-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ficon" data-feather="edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ficon" data-feather="trash-2"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="pagination url1-links justify-content-end">
                            <li class="page-item first disabled"><a href="" class="page-link">First</a></li>
                            <li class="page-item prev disabled"><a href="" class="page-link">Prev</a></li>
                            <li class="page-item active"><a href="" class="page-link">1</a></li>
                            <li class="page-item"><a href="" class="page-link">2</a></li>
                            <li class="page-item"><a href="" class="page-link">3</a></li>
                            <li class="page-item"><a href="" class="page-link">4</a></li>
                            <li class="page-item"><a href="" class="page-link">5</a></li>
                            <li class="page-item next"><a href="" class="page-link">Next</a></li>
                            <li class="page-item last"><a href="" class="page-link">Last</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Destination table ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection