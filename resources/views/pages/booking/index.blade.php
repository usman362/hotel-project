@section('title','Programs')

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
                    <a href="{{route('bookings.create')}}" class="btn btn-primary waves-effect waves-float waves-light">
                        <i data-feather="plus" class="me-25"></i>
                        <span>New Booking</span></a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Products table starts -->
            <div class="row" id="table-bordered">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Booking List</h4>


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
                                    <tr>
                                        <td>
                                            <img src="{{asset('app-assets/images/icons/angular.svg')}}" class="me-75" height="40" width="40" alt="Angular">
                                            <span class="fw-bold">Everest Base Camp Trek</span>
                                        </td>

                                        <td>
                                            Nepal
                                        </td>

                                        <td>
                                            Trekking
                                        </td>
                                        <td>
                                            16 Days
                                        </td>
                                        <td>
                                            XDMT
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Active</span></td>
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


                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>
                <div class="col-md-12"><ul class="pagination url1-links justify-content-end"><li class="page-item first disabled"><a href="" class="page-link">First</a></li><li class="page-item prev disabled"><a href="" class="page-link">Prev</a></li><li class="page-item active"><a href="" class="page-link">1</a></li><li class="page-item"><a href="" class="page-link">2</a></li><li class="page-item"><a href="" class="page-link">3</a></li><li class="page-item"><a href="" class="page-link">4</a></li><li class="page-item"><a href="" class="page-link">5</a></li><li class="page-item next"><a href="" class="page-link">Next</a></li><li class="page-item last"><a href="" class="page-link">Last</a></li></ul></div>

            </div>

            <!-- Products table ends -->

        </div>
    </div>
</div>
<!-- END: Content-->


@endsection

