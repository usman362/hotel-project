@section('title','Teams')

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

            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <a href="{{route('team.create')}}" class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="plus" class="me-25"></i>
                        <span>New Member</span></a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Activity table starts -->
            <div class="row" id="table-bordered">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Members List</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Below is the list of <code>available team members.</code> To add a new member <code>click on the button above on the right</code> and then <code>click on + new member</code> submenu. The members <code>can be edited</code> by <code>clicking on the 3 dots below</code> on the last column.
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Member Name</th>
                                        <th>Designation</th>
                                        <th>Joined On</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                    <tr>
                                        <td>
                                            <img src="{{asset($team->avatar->file_name ?? '')}}" class="me-75" height="40" width="40" alt="Angular">
                                            <span class="fw-bold">{{$team->name}}</span>
                                        </td>
                                        <td>{{$team->designation}}</td>

                                        <td>
                                            {{$team->joined_on}}
                                        </td>

                                        <td><span class="badge rounded-pill badge-light-primary me-1">{{$team->status}}</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                    <i class="ficon" data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('team.edit',$team->id)}}">
                                                        <i class="ficon" data-feather="edit"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{route('team.delete',$team->id)}}">
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
                <div class="col-md-12"><ul class="pagination url1-links justify-content-end"><li class="page-item first disabled"><a href="" class="page-link">First</a></li><li class="page-item prev disabled"><a href="" class="page-link">Prev</a></li><li class="page-item active"><a href="" class="page-link">1</a></li><li class="page-item"><a href="" class="page-link">2</a></li><li class="page-item"><a href="" class="page-link">3</a></li><li class="page-item"><a href="" class="page-link">4</a></li><li class="page-item"><a href="" class="page-link">5</a></li><li class="page-item next"><a href="" class="page-link">Next</a></li><li class="page-item last"><a href="" class="page-link">Last</a></li></ul></div>
            </div>
            <!-- Activity table ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
