@section('title','Regions')

@extends('layouts.app')

@section('content')


 <!-- BEGIN: Content-->

 <div class="app-content content">

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

                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="{{route('region.create')}}" class="btn btn-primary waves-effect waves-float waves-light">
                            <i data-feather="plus" class="me-25"></i>
                            <span>New Region</span></a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Region table starts -->
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Regions List</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Below is the list of <code>available regions.</code> To add a new region <code>click on the button above on the right</code> and then <code>click on + new region</code> submenu. The regions <code>can be edited</code> by <code>clicking on the 3 dots below</code> on the last column. The regions are added inside a destination.
                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>URL</th>
                                            <th>Destination</th>
                                            <th>ID</th>
                                            <th>Count</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($regions as $key => $region)


                                        <tr>
                                            <td>
                                                <img src="{{asset('images/'.$region->thumbnail_image)}}" class="me-75" height="40" width="40" alt="">
                                                <span class="fw-bold">{{$region->title}}</span>
                                            </td>
                                            <td>{{$region->url_slug}}</td>
                                            <td>
                                                {{isset($region->destination) ? $region->destination->title : ''}}
                                            </td>
                                            <td>
                                                {{$region->id}}
                                            </td>
                                            <td>
                                                12 Tours
                                            </td>
                                            <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                        <i class="ficon" data-feather="more-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{route('region.edit',$region->id)}}">
                                                            <i class="ficon" data-feather="edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="{{route('region.delete',$region->id)}}">
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
                    <div class="col-md-12"><ul class="pagination url1-links justify-content-end">
                        {{$regions->links()}}</ul></div>
                </div>
                <!-- Region table ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection




