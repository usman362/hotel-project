@section('title','Users')

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
                    <a href="{{route('users.create')}}" class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="plus" class="me-25"></i>
                        <span>New User</span></a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Activity table starts -->
            <div class="row" id="table-bordered">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users List</h4>
                        </div>
                       
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <img src="{{asset($user->avatar->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" class="me-75" height="40" width="40" alt="Angular">
                                            <span class="fw-bold">{{$user->first_name}} {{$user->last_name}}</span>
                                        </td>
                                        <td>{{$user->email}}</td>

                                        <td>
                                            {{$user->info->phone ?? ''}}
                                        </td>

                                        <td>
                                            {{$user->info->country ?? ''}}
                                        </td>

                                        <td>
                                            {{$user->info->gender ?? ''}}
                                        </td>

                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                    <i class="ficon" data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('team.edit',$user->id)}}">
                                                        <i class="ficon" data-feather="edit"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{route('team.delete',$user->id)}}">
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
                    {{$users->links()}}
                </div>
            </div>
            <!-- Activity table ends -->

        </div>
    </div>
</div>
<!-- END: Content-->



@endsection
