@section('title','Programs')

@extends('layouts.app')
@section('content')
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <a href="{{route('program.create')}}" class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="plus" class="me-25"></i>
                        <span>New Tour</span></a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Products table starts -->
            <div class="row" id="table-bordered">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tour List</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Below is the list of <code>available products.</code> To add a new product <code>click on the button above on the right</code> and then <code>click on + new product</code> submenu. The products <code>can be edited</code> by <code>clicking on the 3 dots below</code> on the last column.
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Destination</th>
                                        <th>Activity</th>
                                        <th>Duration</th>
                                        <th>ID</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($programs as $program)
                                    <tr>
                                        <td>
                                            <img src="{{asset($program->thumbnail->file_name ?? 'assets/images/deal-1.jpg')}}" class="me-75" height="40" width="40" alt="">
                                            <span class="fw-bold">{{$program->tour_name}}</span>
                                        </td>

                                        <td>
                                            {{$program->destination->title ?? ''}}
                                        </td>

                                        <td>
                                            {{$program->activity->name ?? ''}}
                                        </td>
                                        <td>
                                            {{$program->duration <= 1 ? $program->duration.' Day' : $program->duration.' Days'}}
                                        </td>
                                        <td>
                                            {{$program->id}}
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                    <i class="ficon" data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('program.edit',$program->id)}}">
                                                        <i class="ficon" data-feather="edit"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{route('program.delete',$program->id)}}">
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
                    {{$programs->links()}}
                </div>
            </div>
            <!-- Products table ends -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

